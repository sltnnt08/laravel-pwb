<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function form()
        {
            return view('test.form');
        }
    public function welcome()
        {   
            return view('welcome');
        }
}


