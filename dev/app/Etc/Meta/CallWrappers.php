<?php

namespace App\Meta;

trait CallWrappers
{
    public function call(string $method_name, &...$args)
    {
        $call_wrapper = new \App\CallWrapper([$this, $method_name], ...$args);
        return $call_wrapper;
    }
}