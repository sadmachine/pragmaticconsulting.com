<?php

namespace App\Etc\Alerts;

class SuccessAlert extends Alert
{
    public function __construct($message)
    {
        parent::__construct($message, 'success', 'fas fa-check-circle');
    }
}