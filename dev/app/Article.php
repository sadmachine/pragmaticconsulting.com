<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
  /*------------------------------------*\
      # Overridden "convention" variables
    \*------------------------------------*/
  protected $table = 'article';
  protected $guarded = [
    'created_at',
    'updated_at'
  ];


  /*------------------------------------*\
      # Custom Class Variables
    \*------------------------------------*/
  const NEWS_T = 0;
  const EVENT_T = 1;
  const EXTERNAL_T = 2;
  protected static $root_location = '/articles/';


  /*------------------------------------*\
      # Mutators
    \*------------------------------------*/
  public function getLocation()
  {
    if ($this->type != static::EXTERNAL_T)
      return static::$root_location . $this->slug;
    return $this->slug;
  }

  public function getContent()
  {
    return stripslashes($this->content);
  }

  public function setContent($content)
  {
    $this->content = addslashes($content);
  }


  /*------------------------------------*\
      # Static convenience methods
    \*------------------------------------*/

  public static function allNews()
  {
    return Article::whereIn('type', [Article::NEWS_T, Article::EXTERNAL_T])->orderBy('created_at', 'DESC')->get();
  }

  public static function allEvents()
  {
    return Article::where('type', Article::EVENT_T)->orderBy('created_at', 'DESC')->get();
  }
}