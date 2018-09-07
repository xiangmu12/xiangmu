 @include('layouts.qt._header') @show @include('layouts.qt._top') @show

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
                <div class="content_body2">
                <div>
                    <div class="memInfo_a">
                        <div class="memInfo">
                            <div class="MemberProfile">
                                <div class="infoTip" style="margin-top:-10px"><span class="bold"><img src="/assets/assets/images/65115156165.PNG" border="0" width="100" ></span>&nbsp;用户中心公告！</div>
                                <div class="userInfo">
                                    <div class="welcome">
                                        <span class="weiruan f_l">( chen25214 ) </span>&nbsp;欢迎您回到 ECSHOP模板屋www.ecshop119.com专业ECSHOP二次开发! &nbsp;&nbsp;您的上一次登录时间: 2016-01-02 22:00:05 </div>
                                    <div class="blank"></div>
                                    <div class="creditInfo"><span style="color:#555;">等　　级：</span> 您的等级是 注册用户 ,您还差 10000 积分达到 vip </div>
                                    <div class="creditInfo">
                                        <span style="color:#555;">帐号安全：</span> 您还没有通过邮件认证 <a href="javascript:sendHashMail()" class="pink ">点此发送认证邮件</a>
                                        <br>
                                    </div>
                                </div>
                                <div class="MemberInformation">
                                    <div class="goodsInfo">
                                        <div class="Invitation_txt">您的账户</div>
                                        <div class="blank"></div>
                                        <div class="Invitation_txtBox">
                                            <span>余　　额：</span><a href="http://weipin.ecshop119.com/user.php?act=account_log" class="pink ">￥<span>0.00</span></a>
                                            <br>
                                            <span>红　　包：</span><a href="http://weipin.ecshop119.com/user.php?act=bonus" class="pink ">共计 0 个,价值 ￥<span>0.00</span></a>
                                            <br>
                                            <span>积　　分：</span>0积分
                                            <br>
                                        </div>
                                    </div>
                                    <div class="goodsInfo">
                                        <div class="Invitation_txt">用户提醒</div>
                                        <div class="blank"></div>
                                        <div class="Invitation_txtBox">您最近30天内提交了0个订单
                                            <br>
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
</div>
@include('layouts.qt._floor')