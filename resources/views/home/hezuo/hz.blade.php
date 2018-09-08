<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <title>二手网 - 合作服务</title>
    <meta name="keywords" content="合作服务" />
    <meta name="description" content="合作服务" />
    <link href="/hezuo/css/style_1.css" rel="stylesheet" type="text/css" />
    <meta name="author" content="ck" />
</head>

<body>
    <!-- /zh_cn/etc/channelhead1000.shtml Start -->
    <style>
    .chanNav {
        background: #f7f7f7;
        border-bottom: 1px solid #d9d9d9;
        height: 30px;
        line-height: 16px;
        font-family: "Hiragino Sans GB", "Microsoft YaHei", "WenQuanYi Micro Hei", Tahoma, arial, sans-serif;
        font-size: 12px;
        min-width: 1000px;
    }

    .chanNavCon {
        width: 1000px;
        margin: 0 auto;
        *zoom: 1;
    }

    .chanNavCon:after {
        display: block;
        clear: both;
        content: "";
        visibility: hidden;
        height: 0;
    }

    .chanNav span.left {
        color: #666;
        float: left;
        padding-top: 8px;
    }

    .chanNav span.left i {
        margin: 0 6px;
        font-style: normal;
    }

    .chanNav span.right {
        float: right;
        padding-top: 5px;
    }

    .chanNav span.right a {
        padding: 3px 4px;
    }

    .chanNav span.right a.cnLogin {
        background: #d03c4d;
        color: #fff;
        font-weight: bold;
        margin-left: 10px;
    }

    .chanNav span.right a.cnLogin:hover {
        background: #6e0007;
    }

    .chanNav a {
        display: inline-block;
        font-size: 12px;
        color: #000;
        text-decoration: none;
    }

    .chanNav a:hover {
        font-size: 12px;
        color: #b31515;
        text-decoration: underline;
    }

    .chanTopNickname {
        line-height: 20px;
    }

    .cht-01 {
        text-align: center;
        margin: 5px auto;
        width: 1000px;
    }

    .adbroker_com {
        margin: 0 auto;
    }

    .show {
      width: 800px;
      height: 100%;
      background-color: white;
      border: solid 1px  #eee;
    }
    .show ul{
      float:left;
      margin-left: 20px;
    }
    </style>
    <!-- #14771 Start -->
    <script>
    var _hmt = _hmt || [];
    (function() {
        var hm = document.createElement("script");
        hm.src = "https:";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
    })();
    </script>
    <!-- #14771 End -->
    <div class="chanNav" id="chanTopNav">
          <div class="chanNavCon">
              <span class="left">
                <!-- /zh_cn/etc/endpage/endpagenav.shtml Start -->
                <p>
                  <a href="/" target="_blank">首页</a>
                </p>

            <style>
            .CNComment{display: none;}
            </style>
            <!-- /zh_cn/etc/endpage/endpagenav.shtml End -->
          </span>

          <span class="right" id="chanTopNavLogin">
            <a id="news_regid" href="/zhuce" target="_blank">注册</a>
            <a id="news_login" href="/login" target="_blank" class="cnLogin">登录</a>
          </span>
        </div>
  </div>
    <script>
        function setChanTopNavLogin() {
            var elem = document.getElementById("chanTopNavLogin");
            var chanTopGetCookie = function(name) {
                var arr = document.cookie.match(new RegExp("(^| )" + name + "=([^;]*)(;|$)"));
                if (arr != null) {
                    return unescape(arr[2]);
                };
                return null;
            };
            if (chanTopGetCookie("nickname") && elem) {
                elem.innerHTML = '<a href="" class="chanTopNickname" target="_blank">' + chanTopGetCookie("nickname") + '</a>';
            };
        };
        setChanTopNavLogin();
    </script>
    <!-- /zh_cn/etc/channelhead1000.shtml End -->
    <div class="container">
        <div class="mainBody">
            <table border="0" cellspacing="0" cellpadding="0" width="100%">
                <tr>
                    <td valign="top" class="cdcMenu" id="advert">
                        <!-- /zh_cn/general/etc/cdcMenu.shtml Start -->
                        <div class="logo">xianyu.com</div>
                       
                        <!-- /zh_cn/general/etc/cdcMenu.shtml End -->
                    </td>
                    <td valign="top" class="cdcCon">
                        
                        <p>&nbsp;</p>
                        <p><strong><em>【合作客户展示】</em></strong>（仅作示例，排名不分先后）</p>
                       
                        <div class="show">
                         @foreach($huobans as $v)
                          <ul>
                            <li><p><img src="{{$v['logo']}}" width="150" height="100"  /></p></li>
                            <li><p>{{$v['url']}}</p></li>
                            <li><p>{{$v['name']}}</p></li>
                        </ul>
                          @endforeach
                        </div>
                        
                       
                        
                        <p>&nbsp;</p>
                    </td>
                </tr>
            </table>
        </div>
        <!-- /zh_cn/etc/channelfoot.shtml Start -->
        <div class="footer">网上不良信息举报电话：(010)52598588-8758
            <br />
            <a href="" target="_blank">关于二手网</a> |
            <a href="" target="_blank">广告服务</a> |
            <a href="" target="_blank">联系我们</a> |
            <a href="" target="_blank">招聘信息</a> |
            <a href="" target="_blank">版权声明</a> |
            <div class="copyright">版权所有 </div>
        </div>
        <!-- /zh_cn/etc/channelfoot.shtml End -->
    </div>
    </div>
</body>

</html>