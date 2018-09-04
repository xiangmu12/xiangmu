@extends('layouts.admin') 
@section('title') 发表商品列表添加 @endsection 
@section('title','发表商品列表添加') 

@section('content')
<hr>
<div class="tpl-portlet-components">
    <div class="portlet-title">
        <div class="caption font-green bold">
            <span class="am-icon-code"></span> 发表商品列表修改
        </div>
    </div>
    <div class="tpl-block">
        <div class="am-g">
            <div class="tpl-form-body tpl-form-line">
                <form class="am-form tpl-form-line-form" method="post" action="/shangpin/{{$shangpins['id']}}" enctype="multipart/form-data">
                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label" > 商品图片<span class="tpl-form-line-small-title"></span></label>
                       <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label"> <span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            <input type="file" name="image" value="{{$shangpins['image']}}" class="tpl-form-input" id="user-name" placeholder="">
                           <img src="{{$shangpins['image']}}" width="100px">
                        </div>
                    </div>

                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">商品简介 <span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            <input type="text" name="intro" value="{{$shangpins['intro']}}" class="tpl-form-input" id="user-name" placeholder="">
                            
                        </div>
                    </div>

                     <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">成色 <span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                           <input type="radio" name="cheng">9成
                           <input type="radio" name="cheng">8成
                           <input type="radio" name="cheng">7成
                           <input type="radio" name="cheng">6成
                            
                        </div>
                    </div>

                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">价格 <span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            <input type="text" name="money" value="{{$shangpins['money']}}" class="tpl-form-input" id="user-name" placeholder="">
                            
                        </div>
                    </div>

                     <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">三级联动 <span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            <input type="text" name="quyu" value="{{$shangpins['quyu']}}" class="tpl-form-input" id="user-name" placeholder="">
                            
                        </div>
                    </div>

                    </div>
					{{csrf_field()}}{{method_field('PUT')}}
                    <div class="am-form-group">
                        <div class="am-u-sm-9 am-u-sm-push-3">
                            <button class="am-btn am-btn-primary tpl-btn-bg-color-success ">提交</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection