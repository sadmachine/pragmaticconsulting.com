<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Client extends Model
{
    /*------------------------------------*\
      # Overridden "convention" variables
    \*------------------------------------*/
    protected $table = 'client';


    /*------------------------------------*\
      # Other Variables
    \*------------------------------------*/
    protected static $image_dir = 'img/storage/clients';


    /*------------------------------------*\
      # Other Methods
    \*------------------------------------*/
    public function getLogoSrc()
    {
        //return static::$image_dir . '/' . $this->img_name;
        return Storage::disk('uploads')->url('clients/' . $this->img_name);
    }
}