<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Item;

class ItemsController extends Controller
{
    public function showAll()   //展示所有item的视图
    {    
    	return view('items/showAllItems');
    }

 	public function input()   //返回单个输入item信息的视图
    {
    	return view('items/inputItem');
    }


    public function insert1()   //向数据库插入单个item的方法1：
    {
    	echo '提交方式1：实例化模型';
    	// 表映射到模型类【实例化模型】
    	$item = new Item();
    	// 字段映射到属性【给属性赋值的操作】
    	$item -> itemType ='要素'; 
        $item -> itemModule ='零备件管理';
        $item -> itemEquip ='ILS';
        $item -> itemBasis ='零备件管理条例 第五条';
        $item -> itemHeader = '测试平台的管理';
        $item -> itemContent ='设备保障部门应当保障测试平台的良好运转。';
        $item -> itemRecord = '应有的数据记录';
        $item -> itemCheck = '查阅规章记录';
        $item -> itemPoint = 2;
        $item -> itemState = 0;
        // 操作实例映射到记录
        dd($item -> save());
    }

	public function insert2(Request $request)      //表单向数据库插入单个item的方法2
    {    
    	echo '提交方式2';
    	
    	$item = new Item();
    	$result = $item -> create($request -> all());
    	
    	dd($result);
    }
   


}
