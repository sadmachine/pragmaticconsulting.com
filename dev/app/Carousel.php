<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carousel extends Model
{
    /*------------------------------------*\
      # Overridden "convention" variables
    \*------------------------------------*/

    protected $table = 'carousel';
    protected $guarded = [
        'created_at',
        'updated_at'
    ];

    /*------------------------------------*\
      # Overridden standard methods
    \*------------------------------------*/

    public function delete()
    {
        foreach ($this->items()->get() as $item) {
            $item->delete();
        }

        return parent::delete();
    }

    /*------------------------------------*\
      # Define relationships
    \*------------------------------------*/

    public function items()
    {
        return $this->hasMany('App\CarouselItem');
    }

    public function page()
    {
        return $this->belongsTo('App\Page');
    }


    /*------------------------------------*\
      # Define Accessors
    \*------------------------------------*/

    public function getOrderedItems()
    {
        return $this->items()->orderBy('ord')->get();
    }
}