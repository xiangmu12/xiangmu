@extends('layouts.admin') 
@section('title') 用户修改 @endsection 
@section('title','用户修改') 

@section('content')
<hr>
<script type="text/javascript" charset="utf-8" src="/ueditor/ueditor.config.js"></script>
<script type="text/javascript" charset="utf-8" src="/ueditor/ueditor.all.min.js"> </script>
<script type="text/javascript" charset="utf-8" src="/ueditor/lang/zh-cn/zh-cn.js"></script>
<div class="tpl-portlet-components">
    <div class="portlet-title">
        <div class="caption font-green bold">
            <span class="am-icon-code"></span> 用户修改
        </div>
    </div>
    <div class="tpl-block">
        <div class="am-g">
            <div class="tpl-form-body tpl-form-line">
                <form class="am-form tpl-form-line-form" method="post" action="/huodong/{{$huodong['id']}}" enctype="multipart/form-data">
                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">用户名 <span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            <input type="text" name="title" value="{{$huodong['title']}}" class="tpl-form-input" id="user-name" placeholder="">
                        </div>
                    </div>
                    <div class="am-form-group">
                        <label class="am-u-sm-3 am-form-label">活动内容</label>
                        <div class="am-u-sm-9">
                            <textarea class="" name="content" rows="5" >{{$huodong['content']}}</textarea>
                        </div>
                    </div>
                    <div class="am-form-group">
                        <label class="am-u-sm-3 am-form-label">活动图片</label>
                        <div class="am-u-sm-9">
                             <input type="file" name="image" class="tpl-form-input" id="user-name" placeholder="">  
                             <img src="{{$huodong['image']}}">
                        </div>
                    </div>
                     <div class="am-form-group">
                        <label class="am-u-sm-3 am-form-label">内容</label>
                        <div class="am-u-sm-9">
                            <script id="editor" type="text/plain" name="cont" style="width:100%;height:350px;"> {!!$huodong['cont']!!}</script>

                        </div>
                    </div>
                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">开始时间<span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            <input type="text" name="opentime" class="tpl-form-input" id="user-name" placeholder="" value="{{$huodong['opentime']}}">                          
                        </div>
                    </div> 
                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">结束时间<span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            <input type="text" name="overtime" class="tpl-form-input" id="user-name" placeholder="" value="{{$huodong['overtime']}}">                          
                        </div>
                    </div>       
                    {{method_field('PUT')}}
					{{csrf_field()}}
                    <div class="am-form-group">
                        <div class="am-u-sm-9 am-u-sm-push-3">
                            <button class="am-btn am-btn-primary tpl-btn-bg-color-success ">提交</button>
                        </div>
                    </div>
                </form>
                <script>
                    var ue = UE.getEditor('editor');
                </script>
            </div>
        </div>
    </div>
</div>
@endsection