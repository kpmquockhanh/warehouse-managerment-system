<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function home()
    {
        return view('frontend.pages.home');
    }

    public function story()
    {
        return view('frontend.pages.story');
    }
}
