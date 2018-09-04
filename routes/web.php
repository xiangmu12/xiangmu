<?php

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

Route::get('/admin', 'AdminController@index');

//用户设置
Route::resource('user','UserController');

//消息管理
Route::resource('content','ContentController');

//活动管理
Route::resource('huodong','HuoDongController');

//大类管理
Route::resource('dcate','DcateController');

//小类管理
Route::resource('xcate','XcateController');

//小小类管理
Route::resource('xxcate','XxcateController');

//广告管理
Route::resource('guanggao','GgController');

//发布商品管理
Route::resource('shangpin','SpController');

//拍卖管理
Route::resource('paimai','PmController');

//后台首页
Route::get('/admin','AdminController@index');

