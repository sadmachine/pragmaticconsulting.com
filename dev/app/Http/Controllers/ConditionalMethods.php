<?php

namespace App\Http\Controllers;

use App\{ConditionalCall, ConditionalCallCollection};

trait ConditionalMethods
{
    public $_conditional_calls;

    public function addConditionalMethod($method_name, \Closure $condition)
    {
        if ($this->_conditional_calls == []) {
            $this->_conditional_calls = new ConditionalCallCollection();
        }
        $this->_conditional_calls->addNew([$this, $method_name], $condition);
    }

    public function getExecutables($context = null)
    {
        return $this->_conditional_calls->getExecutables($context);
    }

    public function runExecutables(&$context)
    {
        return $this->_conditional_calls->runExecutables($context);
    }
}