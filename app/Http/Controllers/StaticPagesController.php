<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
    public function project()
    {
    	//return "project主界面";
    	return view('static_pages/project');
    }

    public function task()
    {
    	return "task主界面";
    }

      public function modal()
    {
    	return view('static_pages/modal');
    }
}
