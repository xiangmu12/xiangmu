<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>登录界面模板</title>
<link rel="stylesheet" type="text/css" href="/dengrus/css/style.css" />
<link rel="stylesheet" type="text/css" href="/dengrus/css/body.css"/> 
</head>
<body>

<div class="container">
  <section id="content">

     @if(Session::has('success'))
            <div class=" am-u-sm-12" style="padding:0px;margin:0px;">
                <div class="dashboard-stat green">
                        <div class="desc" style="text-align: center;line-height:95px;color:white">{{Session::get('success')}} </div>
                </div>
            </div>
            @endif

            @if(Session::has('error'))
            <div class=" am-u-sm-12" style="padding:0px;margin:0px;">
                <div class="dashboard-stat red">
                        <div class="desc" style="text-align: center;line-height:95px;color:white">{{Session::get('error')}} </div>
                </div>
            </div>
            @endif

    <form  class="am-form" method="post" action="/login">
      <h1>登录</h1>
      <div>
        <input type="text" name="username" class="" id="doc-ipt-email-1" placeholder="用户名">
      </div>
      <div>
         <input type="password" name="password" class="" id="doc-ipt-pwd-1" placeholder="密码">
      </div>
       <div class="">
        <span class="help-block u-errormessage" id="js-server-helpinfo">&nbsp;</span>     
      </div> 
      {{csrf_field()}}
      <div>
        <input type="submit" value="登录" class="btn btn-primary" id="js-btn-login"/>
      </div>
    </form>
    
  </section>
</div>



<br><br><br><br>

</body>
</html>