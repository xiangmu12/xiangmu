

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
       <script src="/assets/js/echarts.min.js"></script>
    <link rel="icon" type="image/png" href="/assets/i/favicon.png">
        <link rel="stylesheet" href="/assets/css/amazeui.min.css" />
    
<link href="/gryh/css/style_5.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="/gryh/js/transport_jquery_4.js"></script>
<script type="text/javascript" src="/gryh/js/common_5.js"></script>
<script type="text/javascript" src="/gryh/js/user.js"></script>
    <meta name="Generator" content="ECSHOP v2.7.3">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="Keywords" content="">
    <meta name="Description" content="">
    <title>用户中心_唯品会模板,ECSHOP唯品会,ECSHOP唯品会模板,ECSHOP唯品会商城模板 - Powered by ECShop</title>
    <link rel="shortcut icon" href="http://weipin.ecshop119.com/favicon.ico">
    <link rel="icon" href="http://weipin.ecshop119.com/animated_favicon.gif" type="image/gif">
    <link href="css/style_5.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="/gryh/js/transport_jquery_4.js"></script>
    <script type="text/javascript" src="/gryh/js/common_5.js"></script>
    <script type="text/javascript" src="/gryh/js/user.js"></script>

<script src="/assets/js/echarts.min.js"></script>
<link rel="icon" type="image/png" href="/assets/i/favicon.png">
<link rel="stylesheet" href="/assets/css/amazeui.min.css" />

<link href="/ding/static/css/public.css" type="text/css" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="/ding/static/css/base.css" />
<script type="text/javascript" src="/ding/static/js/jquery_cart.js"></script>
<link rel="stylesheet" type="text/css" href="/ding/static/css/checkout.css" />
<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
<script src="/ueditor/liandong/js/jquery.cxselect.js"></script>
<link href="/gryh/css/style_5.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="/gryh/js/transport_jquery_4.js"></script>
<script type="text/javascript" src="/gryh/js/common_5.js"></script>
<script type="text/javascript" src="/gryh/js/user.js"></script>

 @include('layouts.qt._header') @show @include('layouts.qt._top') @show
<body>
    
    <div id="container" style=" padding:0 0 10px;">
        <div class="contentBody">
            <div class="block_s">
              @include('home.grzx._liebiao')



        <div class="tpl-block">
        <div class="am-g">
            <div class="tpl-form-body tpl-form-line">
                <form class="am-form tpl-form-line-form" method="post" action="/wode" enctype="multipart/form-data">
                    <input type="hidden" name="{{Session::get('id')}}" class="tpl-form-input" id="user-name" placeholder="请填写标题文字6-20位字母数字下划线">
                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">用 户 名 <span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            <input type="text" name="username" value="{{$user['username']}}" class="tpl-form-input" id="user-name" placeholder="请填写标题文字6-20位字母数字下划线">
                        </div>
                    </div>


                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">邮  箱  <span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            <input type="email" name="email" value="{{$user ? $user->email : ''}}" class="tpl-form-input" id="user-name" placeholder="输入您的邮箱地址">
                          
                        </div>
                    </div>

                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">头  像  <span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            <input type="file" name="pic" value="{{$user ? $user->pic : ''}}" class="tpl-form-input" id="user-name" placeholder="上传属于您的头像">
                           
                        </div>
                    </div>
                    
                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">姓 名  <span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            <input type="text" name="name" value="{{$user ? $user->name : ''}}" class="tpl-form-input" id="user-name" placeholder="输入您的个人姓名">
                            
                        </div>
                    </div>
                    
                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">身份证号 <span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            <input type="number" name="sfenz" value="{{$user ? $user->sfenz : ''}}" class="tpl-form-input" id="user-name" placeholder="请填写18位合法的身份证号">
                            
                        </div>
                    </div>


                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">手 机 号 <span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            <input type="number" name="phone" value="{{$user ? $user->phone : ''}}" class="tpl-form-input" id="user-name" placeholder="请填写您的手机号">
                           
                        </div>
                    </div>

                    {{csrf_field()}}
                    <div class="am-form-group">
                        <div class="am-u-sm-9 am-u-sm-push-3">
                            <button class="am-btn am-btn-primary tpl-btn-bg-color-success ">提交</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>





                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  
@include('layouts.qt._floor')