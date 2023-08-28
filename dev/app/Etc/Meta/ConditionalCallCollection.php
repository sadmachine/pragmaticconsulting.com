<?php

namespace App\Meta;

use Illuminate\Support\Collection;

class ConditionalCallCollection extends Collection
{
    public function addNew(callable $callable, \Closure $condition)
    {
        $this->push(new ConditionalCall($callable, $condition));
    }
    public function getExecutables($context = null)
    {
        $executables = [];
        foreach ($this->toArray() as $conditional_call) {
            if ($conditional_call->canExecute($context))
                $executables[] = $conditional_call;
        }
        return $executables;
    }

    public function runExecutables(&$context)
    {
        /*
        foreach ($this->getExecutables($context) as $executable) {
            $executable->execute($context);
        }
        */
        $this->each(function (ConditionalCall $conditional_call) use (&$context) {
            if ($conditional_call->canExecute($context))
                $conditional_call->execute($context);
        });
    }
}