<?php

namespace App\Meta;

class ConditionalCall
{
    public $callable;
    public $call_condition;
    public function __construct(callable $callable, \Closure $call_condition)
    {
        $this->callable = $callable;
        $this->call_condition = $call_condition;
    }

    public function canExecute($context)
    {
        $fn = $this->call_condition;
        return $fn($context);
    }

    public function execute(&$context)
    {
        $call_condition = $this->call_condition;
        if ($call_condition($context) && is_callable($this->callable)) {
            $callable = $this->callable;
            return $callable($context);
        }
    }
}