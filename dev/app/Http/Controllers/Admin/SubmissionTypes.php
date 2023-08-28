<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

trait SubmissionTypes
{
    public $__submission_types__ = [];
    public function getSubmissionType(Request $request)
    {
        if (isset($this->submission_types)) {
            $this->__submission_types__ = array_merge($this->__submission_types__, $this->submission_types);
        }
        foreach ($this->__submission_types__ as $type) {
            if ($request->has($type)) {
                return $type;
            }
        }
        throw new \Exception('Submission is not of known type ("lookup", "create", "update", "delete").');
    }
}