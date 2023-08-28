<?php

namespace App\Etc\Alerts;

class Alert
{
    public $message;
    public $type;

    public function __construct($message, $type, $icon = null)
    {
        $this->message = $message;
        $this->type = $type;
        $this->icon = $icon;
    }
}