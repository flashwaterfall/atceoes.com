<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestsController extends Controller
{
    public function modal()
    {
    	return view('tests/modal');
    }

    public function basic()
    {
    	return view('basicPage');
    }
}
