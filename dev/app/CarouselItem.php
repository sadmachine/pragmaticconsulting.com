<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class CarouselItem extends Model
{
    /*------------------------------------*\
      # Overridden "convention" variables
    \*------------------------------------*/

    protected $table = 'carousel_item';
    protected $guarded = [
        'created_at',
        'updated_at'
    ];


    /*------------------------------------*\
      # Overridden "convention" methods
    \*------------------------------------*/

    public function delete()
    {
        Storage::disk('uploads')->delete($this->img_name);
        static::orderFill($this->id, $this->ord);

        return parent::delete();
    }

    /*------------------------------------*\
      # Define relationships
    \*------------------------------------*/

    public function carousel()
    {
        return $this->belongsTo('App\Carousel');
    }


    /*------------------------------------*\
      # Custom Class Variables/Methods
    \*------------------------------------*/

    public function getImgUrl()
    {
        return Storage::disk('uploads')->url($this->img_name);
    }


    /*------------------------------------*\
      # Mutators
    \*------------------------------------*/

    public function setImgNameAttribute($img_name)
    {
        // Check if we have a new image to upload
        if (key_exists('img_name', $this->attributes)) {
            if ($this->attributes['img_name'] != $img_name && Storage::disk('uploads')->exists($this->attributes['img_name'])) {
                Storage::disk('uploads')->delete($this->attributes['img_name']);
            }
        }
        $this->attributes['img_name'] = $img_name;
    }

    public function setOrdAttribute($ord)
    {
        if (key_exists('ord', $this->attributes) && $this->attributes['ord'] != $ord) {
            static::orderChange($this->attributes['id'], $this->attributes['ord'], $ord);
        }
        $this->attributes['ord'] = $ord;
    }

    /*------------------------------------*\
      # Custom "Mutators"
    \*------------------------------------*/
    public static function orderSplit($item_id, $ord)
    {
        $item = static::findOrFail($item_id);
        DB::transaction(function () use ($item, $ord) {
            static::where('carousel_id', $item->carousel_id)
                ->where('ord', '>=', $ord)
                ->where('id', '!=', $item->id)
                ->update(['ord' => DB::raw('ord+1')]);
        });
    }

    public static function orderFill($item_id, $ord)
    {
        $item = static::findOrFail($item_id);
        DB::transaction(function () use ($item, $ord) {
            static::where('carousel_id', $item->carousel_id)
                ->where('ord', '>', $ord)
                ->where('id', '!=', $item->id)
                ->update(['ord' => DB::raw('ord-1')]);
        });
    }

    public static function orderChange($item_id, $old_ord, $new_ord)
    {
        DB::transaction(function () use ($item_id, $old_ord, $new_ord) {
            // Perform two step move operation (remove and fill old space, make space for new order)
            static::orderFill($item_id, $old_ord);
            static::orderSplit($item_id, $new_ord);
        });
        // Get our item from the supplied ID
    }

    public static function maxOrd($carousel_id)
    {
        return static::where('carousel_id', $carousel_id)->max('ord');
    }

    public static function nextOrd($carousel_id)
    {
        return static::maxOrd($carousel_id) + 1;
    }
}