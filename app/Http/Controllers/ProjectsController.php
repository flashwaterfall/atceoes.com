<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    
    public function input()
    {    
    	return view('projects/inputProject');	//返回表单录入project视图
    }

    public function project()
    {
    	//return "project主界面";
    	return view('projects/project');
    }
}
