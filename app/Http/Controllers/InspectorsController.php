<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InspectorsController extends Controller
{
    public function input()
    {
    	//return "project主界面";
    	return view('inspectors/inputInspector');
    }
}
