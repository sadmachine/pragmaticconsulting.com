<?php

namespace App\Meta;

class CallWrapper
{
    public $callable;
    public $condition;
    public function __construct(callable $callable, &...$args)
    {
        $this->callable = $callable;
        $this->args = $args;
    }

    public function if(bool $condition)
    {
        if ($condition) {
            return $this->execute();
        }
    }

    public function when(\Closure $condition, $success_value)
    {
        if (is_callable($condition)) {
            if ($condition() == $success_value) {
                return $this->execute();
            }
        }
    }

    public function setArgs(...$args)
    {
        $this->args = $args;
    }

    protected function execute()
    {
        $callable = $this->callable;
        return $callable(...$this->args);
    }
}