 @include('layouts.qt._header') @show @include('layouts.qt._top') @show

<link href="/gryh/css/style_5.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="/gryh/js/transport_jquery_4.js"></script>
<script type="text/javascript" src="/gryh/js/common_5.js"></script>
<script type="text/javascript" src="/gryh/js/user.js"></script>
</head>
<div id="container" style=" padding:0 0 10px;">
    <div class="contentBody">
        <div class="block_s">
            @include('home.grzx._liebiao')
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
                            @if(session('qiandao')==session('id'))
                            <a ><button id="qiandao">已签到</button></a>
                            @else
                           
                            <a href="/qiandaoyemian/{{session('id')}}"><button id="qiandao">签到</button></a>
                            @endif
                            <br>
                           

                            我的积分:<span id="jifen">{{$jifen}}</span>
                           
                         
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="blank5"></div>
<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
<script>
    
        
       
    

</script>
@include('layouts.qt._floor')