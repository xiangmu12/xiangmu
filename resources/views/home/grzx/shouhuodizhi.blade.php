<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
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
<script src="/ueditor/liandong/js/jquery.cxselect.js"></script>
<link href="/gryh/css/style_5.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="/gryh/js/transport_jquery_4.js"></script>
<script type="text/javascript" src="/gryh/js/common_5.js"></script>
<script type="text/javascript" src="/gryh/js/user.js"></script>
 <link href="/ding/static/css/public.css" type="text/css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="/ding/static/css/base.css" />
    <script type="text/javascript" src="/ding/static/js/jquery_cart.js"></script>
    <script src="/ueditor/liandong/js/jquery.cxselect.js"></script>


 @include('layouts.qt._header') @show @include('layouts.qt._top') @show
<body>
     <form action="/huo" method="post">
                                <div class="xm-edit-addr-box" id="J_editAddrBox" style="left:1000px">
                                    <div class="bd">
                                        <div class="item">
                                            <label>收货人姓名<span>*</span></label>
                                            <input type="text" name="name" id="Consignee" class="input" placeholder="收货人姓名" maxlength="15" >
                                            <p class="tip-msg tipMsg"></p>
                                        </div>
                                        <div class="item">
                                            <label>联系电话<span>*</span></label>
                                            <input type="text" name="phone" class="input" id="Telephone" placeholder="11位手机号" autocomplete='off'>
                                            <p class="tel-modify-tip" id="telModifyTip"></p>
                                            <p class="tip-msg tipMsg"></p>
                                        </div>
                                        
                                        <div class="item">
                                            
                                            
                                            <label for="user-name" class="am-u-sm-3 am-form-label">城市<span class="tpl-form-line-small-title"></span></label>
                                            <div class="am-u-sm-9" id="city_china">
                                            <select style="width:60px;float:left" class="province" name="province" id=""></select>
                                            <select class="city" style="width:60px;float:left;background:white" name="city" id=""></select>
                                            <select class="area" style="width:60px;float:left;background:white" name="area" id=""></select>
                                            
                                        </div>

                                            <textarea name="intro" class="input-area" id="Street" placeholder="路名或街道地址，门牌号"></textarea>
                                            <p class="tip-msg tipMsg"></p>
                                        </div>
                                        <div class="item">
                                            <label>邮政编码<span>*</span></label>
                                            <input type="text" name="userAddress[zipcode]" id="Zipcode" class="input" placeholder="邮政编码" autocomplete='off'>
                                            <p class="zipcode-tip" id="zipcodeTip"></p>
                                            <p class="tip-msg tipMsg"></p>
                                        </div>
                                        <div class="item">
                                            <label>地址标签<span>*</span></label>
                                            <input type="text" name="tag" id="Tag" class="input" placeholder='地址标签：如"家"、"公司"。限5个字内'>
                                            <p class="tip-msg tipMsg"></p>
                                        </div>
                                    </div>
                                    <div class="ft clearfix">
                                        <button  class="btn btn-primary  btn-small " >保存</button>
                                         <button type="button" name="end" class="btn btn-lineDake btn-small " id="J_editAddrCancel">取消</button>
                                    </div>
                                    {{csrf_field()}}
                                </div>
                                </form>
    <div id="container" style=" padding:0 0 10px;">
        <div class="contentBody">
            <div class="block_s">
              @include('home.grzx._liebiao')
                <div class="content_body2" style="min-height:500px;">
                    <div>
                        <div class="memInfo_a">
                            <div class="memInfo">

                                <!-- 开始  -->
                                <div class="xm-box " >
                            <div class="box-hd ">
                                <h2 class="title ">收货地址</h2>
                                <!---->
                            </div>
                            <div class="box-bd " >
                                <div class="clearfix xm-address-list " id="checkoutAddrList " >
                                    @foreach($huo as $v)
                                    <dl class="item " style="float: left ">
                                        <dt>
                                            <strong class="itemConsignee ">{{$v['name']}}</strong>
                                            <span class="itemTag tag ">{{$v['tag']}}</span>
                                        </dt>
                                        <dd>
                                            <p class="tel itemTel ">{{$v['phone']}}</p>
                                            <p class="itemRegion ">{{$v['province']}}~{{$v['city']}}~{{$v['area']}}</p>
                                            <p class="itemStreet ">{{$v['intro']}}</p>
                                            <span class="edit-btn J_editAddr ">编辑</span>
                                        </dd>
                                        <dd style="display:none ">
                                            <input type="radio " name="shouhuo_id " class="addressId " value="{{$v[ 'id']}} ">
                                        </dd>
                                    </dl>
                                    @endforeach
                                    <div class="item use-new-addr " id="J_useNewAddr" onclick="like()" data-state="off ">
                                        <span class="iconfont icon-add "></span> 使用新地址
                                    </div>
                                </div>
                
                                <div class="xm-edit-addr-backdrop " id="J_editAddrBackdrop "></div>
                            </div>
                        </div>
                                <script src="/ding/static/js/base.min.js"></script>
                <script type="text/javascript" src="/ding/static/js/address_all.js"></script>
                <script type="text/javascript" src="/ding/static/js/checkout.min.js"></script>
 <!--点击弹出新增/收货地址界面start-->
                              
                                <!--点击弹出新增/收货地址界面end-->
                               <!--  <style>
                                    .selected{
                                        border:1px solid red;
                                    }
                                </style>
                                <script>
                                    
                                    $('#zaixian').click(function(){
                                        alert(1);
                                    }
                                </script> -->
                  


                    <!-- 结束 -->
                    <script type="text/javascript">
                        function like(){
                            $('#J_editAddrBox').show();
                        }
                    </script>
                    <script>
                        var urlChina = '/ueditor/liandong/js/cityData.min.json';
                        $.cxSelect.defaults.url = urlChina;
                        $('#city_china').cxSelect({
                                        selects: ['province', 'city', 'area']
                        });
                    </script>
                           </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
             
        
@include('layouts.qt._floor')