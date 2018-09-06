<!DOCTYPE html>
<html>


<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <style type="text/css">
    body,
    html,
    #allmap {
        width: 100%;
        height: 100%;
        overflow: hidden;
        margin: 0;
        font-family: "微软雅黑";
    }
</style>
<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=QDcQtMGgRI3DIIohbMMPpjsa5BaopWen"></script>
<title>公司位置</title>
</head>


<body>
    <div id="allmap"></div>
</body>
<script type="text/javascript">
        // 百度地图API功能
        var map = new BMap.Map("allmap");
        // 设置中心点
        var point = new BMap.Point(116.341314,40.108516);
        // 设置显示比例
        map.centerAndZoom(point, 18);

        var opts = {
      width : 200,     // 信息窗口宽度
      height: 100,     // 信息窗口高度
      title : "狐狸王" , // 信息窗口标题
      enableMessage:true,//设置允许信息窗发送短息
      message:"亲耐滴！戳下面的链接看下地址喔~"
    }


        // 允许滚动进行缩放
        map.enableScrollWheelZoom(true);
        // 创建标注
        var marker = new BMap.Marker(point);
        // 将标注添加到地图中
        map.addOverlay(marker);
        //跳动的动画        
        marker.setAnimation(BMAP_ANIMATION_BOUNCE);

            var infoWindow = new BMap.InfoWindow("地址：######", opts);  // 创建信息窗口对象 
    marker.addEventListener("click", function(){          
        map.openInfoWindow(infoWindow,point); //开启信息窗口
    });
</script>
</html>