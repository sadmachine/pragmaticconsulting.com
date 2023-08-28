<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    /*------------------------------------*\
      # Overridden "convention" variables
    \*------------------------------------*/

    protected $table = 'page';

    /*------------------------------------*\
      # Define relationships
    \*------------------------------------*/

    public function carousel()
    {
        return $this->hasOne('App\Carousel');
    }
}