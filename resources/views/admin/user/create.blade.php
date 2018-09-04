@extends('layouts.admin')
@section('title') 用户添加 @endsection 
@section('title','用户添加') 

@section('content')
<hr>
<div class="tpl-portlet-components">
    <div class="portlet-title">
        <div class="caption font-green bold">
            <span class="am-icon-code"></span> 用户添加
        </div>
    </div>
    <div class="tpl-block">
        <div class="am-g">
            <div class="tpl-form-body tpl-form-line">
                <form class="am-form tpl-form-line-form" method="post" action="/user">
                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">用 户 名 <span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            <input type="text" name="username" class="tpl-form-input" id="user-name" placeholder="请填写标题文字6-20位字母数字下划线">
                        </div>
                    </div>

                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">密  码  <span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            <input type="password" name="password" class="tpl-form-input" id="user-name" placeholder="请填写6~20位非空白字符">
                            
                        </div>
                    </div>
                    
                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">邮  箱  <span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            <input type="email" name="email" class="tpl-form-input" id="user-name" placeholder="输入您的邮箱地址">
                          
                        </div>
                    </div>

                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">头  像  <span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            <input type="file" name="pic" class="tpl-form-input" id="user-name" placeholder="上传属于您的头像">
                           
                        </div>
                    </div>
                    
                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">姓 名  <span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            <input type="text" name="name" class="tpl-form-input" id="user-name" placeholder="输入您的个人姓名">
                            
                        </div>
                    </div>
                    
                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">身份证号 <span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            <input type="number" name="sfenz" class="tpl-form-input" id="user-name" placeholder="请填写18位合法的身份证号">
                            
                        </div>
                    </div>


                    <div class="am-form-group">
                        <label for="user-name" class="am-u-sm-3 am-form-label">手 机 号 <span class="tpl-form-line-small-title"></span></label>
                        <div class="am-u-sm-9">
                            <input type="number" name="phone" class="tpl-form-input" id="user-name" placeholder="请填写您的手机号">
                           
                        </div>
                    </div>

					{{csrf_field()}}
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