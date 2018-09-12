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





//位置
Route::get('/weizhi', 'HomeController@weizhi');




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

//友链管理
Route::resource('youlian','YoulianController');

//关于我们
Route::get('/admin/gy','HomeController@gy');
//关于我们修改
Route::post('/admin/gy','HomeController@xiu');


//后台首页
Route::get('/admin','AdminController@index');

//举报后台显示
Route::get('/jubao','AdminController@inde');

//前台页面
Route::get('/', 'HomeController@index');

//获取商品信息
Route::get('/{id}.html','HomeController@sp');

//获取所有分类信息
Route::get('/dcateall','HomeController@cateall');




/**
 * 前台
 */

 //前台首页
Route::get('/', 'HomeController@index');

//前台降降降页面
Route::get('/jiang', 'HomeController@jiang');

//我的闲置
Route::get('/collection', 'HomeController@list');

//闲置交易
Route::get('/jiaoyizhong','HomeController@jiaoyi');

//登陆页面
Route::get('/login','HomeController@login');

//登陆操作
Route::post('/login','HomeController@dologin');

//退出登入
Route::get('/logout','HomeController@logout');

//用户注册
Route::get('/zhuce','HomeController@zhuce');

//注册提交
Route::post('/zhuce','HomeController@register');

//发布闲置
Route::get('/fabu','HomeController@fabu');
Route::post('/fabu','HomeController@fabuchuli');

//下架闲置
Route::get('/delete/{id}', 'HomeController@xiajia');

//关于我们
Route::get('/women','HomeController@women');
//发货 退货
Route::get('/wo/tui','HomeController@tui');

Route::get('/juba/{id}','HomeController@destroy');

//合作
Route::get('hezuo/hz','HbController@hezuo');


//购物车
Route::resource('car','CarController');

//合作伙伴
Route::resource('huoban','HbController');

//举报管理
Route::get('/jubao/{id}','HomeController@jubao');
Route::post('/jubao','HomeController@jubaologin');


//订单管理
Route::resource('dingdan','DingController');

//收货地址管理
Route::resource('huo','HuoController');

//商品标签
Route::resource('tag','TagController');

//评论管理
Route::resource('pinglun','PlController');



//购物车
Route::resource('gouwuche','CarController');
//结算
Route::post('/dd','CarController@dd');

//购物订单
Route::post('/gwdingdan','CarController@gwdingdan');

Route::get('/che/{id}','CarController@che');

//后台购物车
Route::get('/admin/gouwu','AdminController@gouwu');



//个人中心
Route::get('/geren','GrzhongController@geren');

//个人订单
Route::get('/gerendingdan','GrzhongController@gerendingdan');


Route::post('/grdingdan','GrzhongController@grdingdan');
//收货地址
Route::get('/shdz','GrzhongController@shouhuodizhi');
Route::post('/shdz','GrzhongController@shouhuodz');

//测试
Route::get('/test','GrzhongController@test');

//用户中心
Route::get('/wode','GrzhongController@wode');

//修改用户中心
Route::post('/wode','GrzhongController@wodegai');


//logo管理
Route::resource('logo','LogoController');

//收藏管理
Route::resource('shoucang','ScController');


//发布拍卖
Route::get('fbpm','PmController@pm');

Route::post('mai','PmController@mai');

//拍卖会场
Route::get('pmhc','PmController@pmhc');

//拍卖详情页
Route::get('/xtrttq/{id}','PmController@xq');

//竞拍
Route::post('/pai','PmController@jingpai');

//我的拍卖
Route::get('/wdpm','PmController@wdpm');

