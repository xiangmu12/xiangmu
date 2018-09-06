<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>注册</title>
    <link rel="shortcut icon" href="" type="image/x-icon">
    <link rel="stylesheet" charset="UTF-8" href="/dengru/css/reset.css">
    <link rel="stylesheet" charset="utf-8" href="/dengru/css/web_pop.css">
    <link rel="stylesheet" charset="UTF-8" href="/dengru/css/login.css">
</head>

<body>
    <div class="register_header">
        <div class="header_center clearfix">
            <div class="myfl">
                <a href="/login"><img src="" /></a>
                <span>用户注册</span>
            </div>
            <div class="myfr">
                <a href="/">返回首页</a>
                <span></span>
                <a href="/login">已有账户，直接<em>登录</em></a>
            </div>
        </div>
    </div>
    <div class="register_content clearfix" style="background:url('/dengru/img/logo.jpg') no-repeat 0 138px;">
        <input type="hidden" value="" id="iserror">
        <form action="/register/user/second/valid?" id="my_from" method="post">
            <div class="register_box myfr">
                <div class="title clearfix">
                    <span class="myfl"></span>
                    <h1 class="myfl">新用户注册</h1>
                    <input type="hidden" value="1" name="memberType" id="registeruser_type">
                    <span class="myfr"></span>
                </div>
                <input type="text" placeholder="请输入您的用户名，支持手机号" name="nick" class="username" value="" maxlength="20" />
                <p class="username_error"></p>
                <input type="password" style="color: #666;" placeholder="请输入您的密码" name="password" class="password" maxlength="16" value="" />
                <p class="password_error"></p>
                <input type="password" style="color: #666;" placeholder="请重复您的密码" name="password1" class="password_again" maxlength="16" />
                <p class="password_again_error"></p>
                <input type="text" placeholder="请输入手机号" name="phone" maxlength="11" class="phone_num" value="" />
                <p class="phone_num_error"></p>
                <div class="photo_code clearfix">
                    <input type="text" class="myfl" name="captchaCode" placeholder="请输入图片验证码" maxlength="4" />
                    <img src="" class="myfr" />
                </div>
                <p class="photo_code_error"></p>
                <div class="clearfix message_code_box">
                    <input type="text" class="message_code myfl" name="validCode" maxlength="6" placeholder="请输入短信验证码" value="" />
                    <a href="javascript:;" class="message_code_btn myfr">发送验证码</a>
                    <span class="message_code_again"><em>60</em>秒重发</span> </div>
                <p class="message_code_error"></p>
                <input type="text" class="qq_num" name="qq" maxlength="15" placeholder="请输入您正在使用的QQ号" value="">
                <p class="qq_num_error">6</p>
                <!-- <select name="channel" class="source" style="-webkit-appearance: none;appearance: none;color: #666;">
                    <option value="5">百度搜索</option>
                    <option value="6">360搜索</option>
                    <option value="7">搜狗搜索</option>
                    <option value="2">朋友介绍</option>
                    <option value="4">通过QQ</option>
                    <option value="8">通过微信</option>
                    <option value="3">其他来源</option>
                </select> -->
                <p class="source_error">7</p>
                <div class="my_agreement">
                    <input type="checkbox" name="agreement" value="1" checked>我已仔细阅读并同意接受
                    <a href="" target="_blank">《用户使用协议》</a>
                </div>
                <p class="source_error">8</p>
                <a href="javascript:;" class="submit_btn">注册</a>
                <!--短信的token-->
                <input type="hidden" name="token" value="47016a045c820bc2857e84547b11a380" id="tonkenNum">
            </div>
        </form>
    </div>
    <!--错误提示-->
    <div class="normal_pop pop_password" id="pop_load">
        <h3>提示</h3>
        <p class="error" style="font-size: 20px;line-height: 24px;margin: 40px 0 36px;color: #666;">注册失败，请稍后再试</p>
        <i id="true_btn" class="layui-layer-close">确定</i>
    </div>
    <div class="register_bottom">Copright &nbsp;&nbsp;CP17003883号-1 &nbsp;&nbsp;版权所有</div>
</body>
<script type="text/javascript" charset="utf-8" src="js/jquery.min.js"></script>
<script type="text/javascript" charset="UTF-8" src="js/jquery.form.js"></script>
<script type="text/javascript" charset="utf-8" src="js/layer.js"></script>
<script type="text/javascript" charset="utf-8" src="js/web_method/method.js~v=2"></script>
<script type="text/javascript" charset="UTF-8" src="js/login_register/user_register.js~v=10"></script>

</html>