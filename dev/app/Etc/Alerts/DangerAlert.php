<?php

namespace App\Etc\Alerts;

class DangerAlert extends Alert
{
    public function __construct($message)
    {
        parent::__construct($message, 'danger', 'fa fa-grimace');
    }
}