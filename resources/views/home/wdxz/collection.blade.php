        @include('layouts.qt._header')
        @show
        @include('layouts.qt._top') @show
        <hr>
                <div><span style="margin-left:100px">商品信息</span><span style="margin-left:100px">商品图片</span><span style="margin-left:100px">商品标题</span><span style="margin-left:150px">商品价格</span><span style="margin-left:90px">商品成色</span><span style="margin-left:100px">商品操作</span></div>
                <hr>
                @foreach($shangpin as $v)
                <div id="J_ItemHolder_616577491345" class="item-holder" style="height:80px">
                    <div id="J_Item_616577491345" class="J_ItemBody item-body clearfix item-act  first-item   " style="margin-top:30px;margin-left:100px;height:80px">
                        <ul class="item-content clearfix">
                            <li class="td td-chk">
                                <div class="td-inner">
                                    <div class="cart-checkbox " style="float:left">
                                        <input class="J_CheckBoxItem" id="J_CheckBox_616577491345" type="checkbox" name="items[]" value="616577491345">
                                        <label for="J_CheckBox_616577491345">勾选商品</label>
                                    </div>
                                </div>
                            </li>
                            <li class="td td-item" >
                                <div class="td-inner" style="float:left;margin-left:30px">
                                    <div class="item-pic J_ItemPic img-loaded" style="float:left;margin-left:30px"><a href="" target="_blank" data-title="" class="J_MakePoint" data-point="tbcart.8.12" data-spm-anchor-id="a1z0d.6639537.1997196601.3"><img src="{{$v['image']}}" class="itempic J_ItemImg" width="80px" height="80px"></a></div>
                                    <div class="item-info" style="float:left;margin-left:100px">
                                        <div class="item-basic-info" style="float:left;width:140px">{{$v['intro']}}</div>
                                </div>
                            </li>
                            <li class="td td-sum">
                                <div class="td-inner" style="float:left;margin-left:100px"><em tabindex="0" class="J_ItemSum number">{{$v['money']}}</em>

                                </div>
                            </li>
                            <li class="td td-sum">
                                <div class="td-inner" style="float:left;margin-left:120px"><em tabindex="0" class="J_ItemSum number">{{$v['cheng']}}</em>
                                </div>
                            </li>
                            <li class="td td-sum">
                                <div class="td-inner" style="float:left;margin-left:100px">
                                	<a href="/delete/{{$v['id']}}">下架</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <hr>
                <hr>
                @endforeach
                <img style="margin-left:600px" src="//gtd.alicdn.com/tps/i2/T1Q2BUXaxFXXXXXXXX-32-32.gif" class="find-similar-loading">