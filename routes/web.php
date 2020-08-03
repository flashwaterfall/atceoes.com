<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//系统登录入口
Route::get('/', function () {
    //return view('welcome');
    //echo "登录界面包含task和project的入口";
    return view('index');
});

//测试test路由
Route::get('/testInsertProject', 'ProjectsController@testInsertProject');    //录入project

Route::get('/testShwoItems', 'ItemsController@testShwoItems');    //测试显示所有的Item
Route::get('/inputItem', 'ItemsController@inputItem');    //测试录入item界面
Route::get('/insertItem1', 'ItemsController@insertItem1');    //测试提交item信息方式1
Route::post('/insertItem2', 'ItemsController@insertItem2');    //测试提交item信息方式2

Route::get('/testModal', 'StaticPagesController@modal');    //测试modal


//project相关路由，后续根据需要变更get/post的提交方式
Route::get('/project', 'StaticPagesController@project');    //project主界面

Route::get('/project/login', function () {
    echo "project登录前的验证路由";
});
Route::get('/project/logout', function () {
    echo "project退出账户路由";
});
Route::get('/project/info', function () {
    echo "获得登陆者信息的路由";
});
Route::get('/project/new', function () {
    echo "project新建任务提交路由";
});
Route::get('/project/edit', function () {
    echo "project编辑信息的提交路由";
});
Route::get('/project/del', function () {
    echo "project删除的提交路由";
});
Route::get('/project/backgroud/edit', function () {
    echo "project背景信息的提交路由";
});
Route::get('/project/checkpoint/new', function () {
    echo "project新建检查重点的提交路由";
});
Route::get('/project/checkpoint/edit', function () {
    echo "project编辑检查重点的提交路由";
});
Route::get('/project/checkpoint/del', function () {
    echo "project删除检查重点的提交路由";
});
Route::get('/project/team/edit', function () {
    echo "project编辑项目成员的提交路由";
});
Route::get('/project/summary', function () {
    echo "project汇总所有检查单信息的路由";
});
Route::get('/project/evaluation', function () {
    echo "project提交项目总结的的路由";
});
Route::get('/project/end', function () {
    echo "project项目结束生成报告的路由";
});
Route::get('/project/download', function () {
    echo "project下载信息的路由";
});

//proleader查看task相关路由
Route::get('/proleader/task/view/10', function () {
    echo "proleader查看task状态10 未建立任务 的信息路由";
});
Route::get('/proleader/task/view/20', function () {
    echo "proleader查看task状态20 正在建立任务 的信息路由";
});
Route::get('/proleader/task/view/30', function () {
    echo "proleader查看task状态30 任务建立后审核 的信息路由";
});
Route::get('/proleader/task/view/21', function () {
    echo "proleader查看task状态21 重新制定任务 的信息路由";
});
Route::get('/proleader/task/view/40', function () {
    echo "proleader查看task状态40 执行任务中 的信息路由";
});
Route::get('/proleader/task/view/50', function () {
    echo "proleader查看task状态50 任务完成审核任务 的信息路由";
});
Route::get('/proleader/task/view/41', function () {
    echo "proleader查看task状态41 重新执行任务 的信息路由";
});
Route::get('/proleader/task/view/60', function () {
    echo "proleader查看task状态60 任务完成 的信息路由";
});

//proleader审核task相关路由
Route::get('/task/check/agree', function () {
    echo "proleader同意创建检查单的路由";
});
Route::get('/task/check/disagree', function () {
    echo "proleader不同意创建检查单的路由";
});
Route::get('/task/audit/agree', function () {
    echo "proleader同意任务执行结果的路由";
});
Route::get('/task/audit/disagree', function () {
    echo "proleader不同意同意任务执行结果的路由";
});

//task相关路由
Route::get('/task', 'StaticPagesController@task');

Route::get('/task/login', function () {
    echo "task登录前的验证路由";
});
Route::get('/task/logout', function () {
    echo "task退出注销路由";
});
Route::get('/task/new', function () {
    echo "task新建任务路由";
});
Route::get('/task/edit', function () {
    echo "task编辑任务信息路由";
});
Route::get('/task/del', function () {
    echo "task删除任务路由";
});

//inspector查看任务
Route::get('/inspector/task/view/10', function () {
    echo "task状态10的信息路由";
});
Route::get('/inspector/task/view/20', function () {
    echo "task状态20的信息路由";
});





