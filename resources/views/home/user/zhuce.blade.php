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
        <form action="/zhuce"  method="post">
            <div class="register_box myfr">
                <div class="title clearfix">
                    <span class="myfl"></span>
                    <h1 class="myfl">新用户注册</h1>
                    <input type="hidden" value="1" name="memberType" id="registeruser_type">
                    <span class="myfr"></span>
                </div>
                <input type="text" placeholder="请输入您的用户名，支持手机号" name="username" value="" maxlength="20" />
                <p class="username_error"></p>
                <input type="password" style="color: #666;" placeholder="请输入您的密码" name="password" class="password" maxlength="16" value="" />
                <p class="password_error"></p>
                <input type="password" style="color: #666;" placeholder="请重复您的密码" name="repassword" class="password_again" maxlength="16" />
                <p class="password_again_error"></p>
                <input type="text" placeholder="请输入手机号" name="phone" maxlength="11" class="phone_num" value="" />
                
                <div class="my_agreement">
                    <input type="checkbox" name="agreement" value="1" checked>我已仔细阅读并同意接受
                    <a href="" target="_blank">《用户使用协议》</a>
                </div>
                <p class="source_error">8</p>
                <button type="submit" class="submit_btn">注册</button>
             {{csrf_field()}}
               
            </div>
        </form>

        <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
        <script>
        /** 

        1. 布局 

        2. 绑定事件 

        获得焦点 

        丧失焦点事件 

        表单提交事件 

        */

        var CUSER = false;

        var CPHONE = false;

        var CPASS = false;

        var CREPASS = false;

        //用户名 

        $('input[name=username]').focus(function() {

            //边框颜色 

            $(this).addClass('active');

            //提示语显示 

            $(this).next().show().html('输入8~18位字母数字下划线');

        }).blur(function() {

            //移出激活状态的class active 

            $(this).removeClass('active');

            //正则判断 

            var v = $(this).val();

            //声明正则 

            var reg = /^\w{8,18}$/;

            //判断 

            if (!reg.test(v)) {

                //边框 

                $(this).addClass('error');

                //文字提醒 

                $(this).next().html('<span style="color:red">格式不正确</span>').show();

                CUSER = false;

            } else {

                var input = $(this);

                //发送 AJAX 请求检测用户名是否已经存在 

                // $.post('./check-user-exists.php', {username: v}, function(data){ 

                // }) 

                $.ajax({

                    url: '/check-user-exists.php',

                    type: 'post',

                    data: { username: v },

                    success: function(data) {

                        if (data != '1') {

                            //边框 

                            input.addClass('error');

                            //文字提醒 

                            input.next().html('<span style="color:red">该用户名太受欢迎, 请换一个!!</span>').show();

                            CUSER = false;

                        } else {

                            input.removeClass('error');

                            input.next().html('<span style="color:green;font-size:16px;font-weight:bold">&nbsp;&nbsp;√</span>').show();

                            CUSER = true;

                        }

                    },

                    async: false

                })

            }

        })

        //手机号 

        $('input[name=phone]').focus(function() {

            //边框颜色 

            $(this).addClass('active');

            //提示语显示 

            $(this).next().show().html('输入您的手机号');

        }).blur(function() {

            $(this).removeClass('active');

            //获取用户的输入值 

            var v = $('input[name=phone]').val();

            //正则 

            var reg = /^1\d{10}$/;

            if (!reg.test(v)) {

                //边框 

                $(this).addClass('error');

                //文字提醒 

                $(this).next().html('<span style="color:red">格式不正确</span>').show();

                CPHONE = false;

            } else {

                //边框 

                $(this).removeClass('error');

                //文字提醒 

                $(this).next().html('<span style="color:green;font-size:16px;font-weight:bold">&nbsp;&nbsp;√</span>').show();

                CPHONE = true;

            }

        })

        //密码 

        $('input[name=password]').focus(function() {

            //边框颜色 

            $(this).addClass('active');

            //提示语显示 

            $(this).next().show().html('6~20非空白字符');

        }).blur(function() {

            $(this).removeClass('active');

            //获取用户的输入值 

            var v = $(this).val();

            //正则 

            var reg = /^\S{6,20}$/;

            if (!reg.test(v)) {

                //边框 

                $(this).addClass('error');

                //文字提醒 

                $(this).next().html('<span style="color:red">格式不正确</span>').show();

                CPASS = false;

            } else {

                //边框 

                $(this).removeClass('error');

                //文字提醒 

                $(this).next().html('<span style="color:green;font-size:16px;font-weight:bold">&nbsp;&nbsp;√</span>').show();

                CPASS = true;

            }

        })

        //确认密码 

        $('input[name=repassword]').focus(function() {

            //边框颜色 

            $(this).addClass('active');

            //提示语显示 

            $(this).next().show().html('再次输入密码');

        }).blur(function() {

            $(this).removeClass('active');

            //获取用户的输入值 

            var v = $(this).val();

            if (v != $('input[name=password]').val()) {

                //边框 

                $(this).addClass('error');

                //文字提醒 

                $(this).next().html('<span style="color:red">两次密码不一致</span>').show();

                CREPASS = false;

            } else {

                //边框 

                $(this).removeClass('error');

                //文字提醒 

                $(this).next().html('<span style="color:green;font-size:16px;font-weight:bold">&nbsp;&nbsp;√</span>').show();

                CREPASS = true;

            }

        })

        //表单的提交事件 

        $('form').submit(function() {

            //触发错误提醒 

            $('input').trigger('blur');

            console.log(CUSER);

            //判断输入值是否都正确 

            if (CUSER && CPASS && CPHONE && CREPASS) {

                return true;

            } else {

                return false;

            }

        });
        </script>
    </div>
    <!--错误提示-->
    <!-- <div class="normal_pop pop_password" id="pop_load">
        <h3>提示</h3>
        <p class="error" style="font-size: 20px;line-height: 24px;margin: 40px 0 36px;color: #666;">注册失败，请稍后再试</p>
        <i id="true_btn" class="layui-layer-close">确定</i>
    </div> -->
    <div class="register_bottom">Copright &nbsp;&nbsp;CP17003883号-1 &nbsp;&nbsp;版权所有</div>
</body>


</html>