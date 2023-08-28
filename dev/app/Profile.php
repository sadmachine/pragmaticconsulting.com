<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class Profile extends Model
{
    use \Illuminate\Notifications\Notifiable;
    /*------------------------------------*\
      # Overridden "convention" variables
    \*------------------------------------*/

    protected $table = 'profile';

    protected $attributes = ['slug' => ''];

    protected $guarded = [
        'created_at',
        'updated_at'
    ];

    protected $fillable = [
        'name',
        'title',
        'img_name',
        'content',
        'page',
        'ord',
    ];

    /*------------------------------------*\
      # Define Accessors
    \*------------------------------------*/
    public static $image_dir = 'img/storage/profile';

    public function getImgSrc()
    {
        //return static::$image_dir . '/' . $this->img_name;
        return Storage::disk('uploads')->url('profile/' . $this->img_name);
    }

    public function getContentForUpdating()
    {
        $openTagLength = strlen('<div class="ql-render">');
        $closeTagLength = strlen('</div>');
        $removeLength = $openTagLength + $closeTagLength;
        $totalLength = strlen($this->content);
        $remainingLength = $totalLength - $removeLength;
        $search = substr($this->content, 0, $openTagLength);
        if ($search == '<div class="ql-render">') {
            return substr($this->content, $openTagLength, $remainingLength);
        }
        return $this->content;
    }

    public function prepareAndSetContent($content)
    {
        // Need to remove unnecessary added div padding

        $contentLength = strlen($content);
        $searchLength = strlen('<div><br></div>');
        $search = substr($content, $contentLength - $searchLength);
        if ($search == '<div><br></div>') {
            $content = substr($content, 0, $contentLength - $searchLength) . substr($content, $contentLength + $searchLength);
        }

        // Need to wrap the content in the 'ql-render' class for viewing later
        $content = '<div class="ql-render">' . $content . '</div>';
        $this->content = $content;
    }

    /*------------------------------------*\
      # Define special mutators
    \*------------------------------------*/

    public static function orderSplit(string $page, string $ord)
    {
        DB::beginTransaction();
        try {
            static::where('page', $page)
                ->where('ord', '>=', $ord)
                ->update(['ord' => DB::raw('ord+1')]);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            throw $e;
        }
    }

    protected static function orderFill(string $page, string $ord)
    {
        DB::beginTransaction();
        try {
            static::where('page', $page)
                ->where('ord', '>=', $ord)
                ->update(['ord' => DB::raw('ord-1')]);
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            throw $e;
        }
    }
}