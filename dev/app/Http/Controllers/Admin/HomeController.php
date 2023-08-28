<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function show()
    {
        return $this->render();
    }


    public function render($context = [])
    {
        return view('pages.admin.index', $context);
    }
}