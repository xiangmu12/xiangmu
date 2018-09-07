 @include('layouts.qt._header') @show @include('layouts.qt._top') @show
    <script src="/assets/js/echarts.min.js"></script>
    <link rel="icon" type="image/png" href="/assets/i/favicon.png">
        <link rel="stylesheet" href="/assets/css/amazeui.min.css" />
    <link rel="stylesheet" href="/assets/css/admin.css">
<link href="/gryh/css/style_5.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="/gryh/js/transport_jquery_4.js"></script>
<script type="text/javascript" src="/gryh/js/common_5.js"></script>
<script type="text/javascript" src="/gryh/js/user.js"></script>
</head>
<div id="container" style=" padding:0 0 10px;">
    <div class="contentBody">
        <div class="block_s">
            <div class="content_title search_title">
                <div class="block">
                    <div id="ur_here"> <a href="http://weipin.ecshop119.com/">首页</a> <code> &gt; </code> 用户中心 </div>
                </div>
            </div>
            <div class="accountSide CenterLeft">
                <dl class="accountSideOption1 OrderCenter">
                    <dt class="transaction_manage">订单中心</dt>
                    <dd>
                        <ul>
                            <li> <a href="/gerendingdan" "> 我的订单</a></li>
                            <li> <a href="http://weipin.ecshop119.com/user.php?act=address_list">收货地址</a></li>
                            <li> <a href="http://weipin.ecshop119.com/user.php?act=booking_list"> 缺货登记</a></li>
                        </ul>
                    </dd>
                </dl>
                <dl class="accountSideOption1">
                    <dt class="transaction_manage">会员中心</dt>
                    <dd>
                        <ul>
                            <li> <a href="http://weipin.ecshop119.com/user.php?act=profile"> 用户信息</a></li>
                            <li> <a href="http://weipin.ecshop119.com/user.php?act=collection_list"> 我的收藏</a></li>
                            <li> <a href="http://weipin.ecshop119.com/user.php?act=message_list"> 我的留言</a></li>
                            <li> <a href="http://weipin.ecshop119.com/user.php?act=tag_list">我的标签</a></li>
                            <li> <a href="http://weipin.ecshop119.com/user.php?act=affiliate"> 我的推荐</a></li>
                            <li><a href="http://weipin.ecshop119.com/user.php?act=comment_list"> 我的评论</a></li>
                        </ul>
                    </dd>
                </dl>
                <dl class="accountSideOption1 AccountCenter">
                    <dt class="transaction_manage">账户中心</dt>
                    <dd>
                        <ul>
                            <li> <a href="http://weipin.ecshop119.com/user.php?act=bonus">我的红包</a></li>
                            <!--<a href="user.php?act=group_buy">我的团购</a>-->
                            <li> <a href="http://weipin.ecshop119.com/user.php?act=track_packages"> 跟踪包裹</a></li>
                            <li style="border-bottom: 0px none;"> <a href="http://weipin.ecshop119.com/user.php?act=account_log"> 资金管理</a></li>
                        </ul>
                    </dd>
                </dl>

            </div>
            <!-- <iframe src="/gerenhtml/1.html" id="ifa" style="width: 830px;height: 600px;padding: 0px;margin: 0px;border: 0px;"></iframe> -->
            <!-- <script type="text/javascript">
                    $(".AccountCenter li:last").css("border-bottom", "0");
                    function linkclick(value){
                        
                        if(value ==2){
                            $('#ifa').attr('src','/dida.blade.php');
                        }
                        
                    }
                </script> -->
                <div class="content_body2" >
               <div class="tpl-portlet-components">
    
    <div class="tpl-block" >
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
                <table class="am-table  am-table-hover table-main" border="0">
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
                                    <div class="am-btn-group am-btn-group-xs">
                                        <a href="/huodong//edit" class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-pencil-square-o"></span> 编辑</a>
                                        <form style="float:left" action="/huodong/" method="post">
                                            
                                            <button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only"><span class="am-icon-trash-o"></span> 删除</button>
                                        </form>

                                    </div>
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
                <div class="am-cf">
                    <div class="am-fr">
                        
                    </div>
                </div>
                <hr>
            </div>
        </div>
    </div>
    <div class="tpl-alert"></div>
</div>
            </div>
        </div>
    </div>
</div>
@include('layouts.qt._floor')