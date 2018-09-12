

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



                <div class="content_body2">
                    <div>
                        <div class="memInfo_a">
                            <div class="memInfo">

                            <div class="am-g">
            
            <div class="am-u-sm-12 am-u-md-3">
                <form action="/huodong" method="get">
                <div class="am-input-group am-input-group-sm">
                    <input type="text" name="keywords" class="am-form-field" value="">
                    <span class="am-input-group-btn">
                        <button class="am-btn  am-btn-default am-btn-success tpl-am-btn-success am-icon-search"></button>
                      </span>
                </div>
                </form>
            </div>
        </div>
        <div class="am-g">
            <div class="am-u-sm-12">
                <table class="am-table  am-table-hover table-main" border="0" >
                    <tbody>
                        @foreach($di as $v)
                        <tr>
                            <td>{{$v['id']}}</td>
                            <td class="am-hide-sm-only"><img src="{{$v['image']}}" width="50"></td>
                            <td class="am-hide-sm-only">{{$v['title']}}</td>
                            <td class="am-hide-sm-only">{{$v['intro']}}</td>
                            <td class="am-hide-sm-only">{{$v['cheng']}}</td>
                            <td class="am-hide-sm-only">{{$v['money']}}</td>
                            <td>
                                <div class="am-btn-toolbar">
                                    
                                        <form style="float:left" action="/dingdan/{{$v['id']}}" method="post">
                                            
                                            <button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only"><span class="am-icon-trash-o"></span>取消订单</button>
                                        {{method_field('DELETE')}}
                                            {{csrf_field()}}
                                        </form>

                                    
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <style>
                    .pagination{
                        padding-left: 0;
                        margin: 1.5rem 0;
                        list-style: none;
                        color: #999;
                        text-align: left;
                        padding: 0;
                    }

                    .pagination li{
                        display: inline-block;
                    }

                    .pagination li a, .pagination li span{
                        color: #23abf0;
                        border-radius: 3px;
                        padding: 6px 12px;
                        position: relative;
                        display: block;
                        text-decoration: none;
                        line-height: 1.2;
                        background-color: #fff;
                        border: 1px solid #ddd;
                        border-radius: 0;
                        margin-bottom: 5px;
                        margin-right: 5px;
                    }

                    .pagination .active span{
                        color: #23abf0;
                        border-radius: 3px;
                        padding: 6px 12px;
                        position: relative;
                        display: block;
                        text-decoration: none;
                        line-height: 1.2;
                        background-color: #fff;
                        border: 1px solid #ddd;
                        border-radius: 0;
                        margin-bottom: 5px;
                        margin-right: 5px;
                        background: #23abf0;
                        color: #fff;
                        border: 1px solid #23abf0;
                        padding: 6px 12px;
                    }
                </style>
             
                <hr>
            </div>
        </div>

         <div class="am-cf">
                    <div class="am-fr">
                        {{ $di->appends(request()->all())->links() }}
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