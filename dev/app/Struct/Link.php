<?php

namespace App\Struct;

class Link
{
    public
        $text,
        $url,
        $indented;

    public function __construct($text, $url, $indented = false)
    {
        $this->text = $text;
        $this->url = $url;
        $this->indented = $indented;
    }
}