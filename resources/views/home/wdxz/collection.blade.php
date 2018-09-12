        @include('layouts.qt._header')
        @show
        @include('layouts.qt._top') @show
        
        <hr>
           <table style="width:1000px;margin:0px auto;border-style:none">
                <tr style="background:#eee;">
                    <th class="text-center" width="149px">
                        商品
                    </th>
                    <th class="text-center" width="227px">
                        商品图片
                    </th>
                    <th class="text-center" width="137px">
                        商品标题
                    </th>
                    <th class="text-center" width="149px">
                        商品价格
                    </th>
                    <th class="text-center" width="150px">
                        商品成色
                    </th>
                    <th class="text-center">
                        商品移出
                    </th>
                </tr>
            </table>
              <!--   <div><span style="margin-left:100px">商品信息</span><span style="margin-left:100px">商品图片</span><span style="margin-left:100px">商品标题</span><span style="margin-left:150px">商品价格</span><span style="margin-left:90px">商品成色</span><span style="margin-left:100px">商品操作</span></div> -->
                @foreach($shangpin as $v)
                @if($v['user_id'] == $users && $v['orlogin'] == 0)
                <div id="J_ItemHolder_616577491345" class="item-holder" style="height:80px">
                    <table style="width:1000px;margin:0px auto;border-style:none">
                    <!-- <div id="J_Item_616577491345" class="J_ItemBody item-body clearfix item-act  first-item   " style="margin-top:30px;margin-left:100px;height:80px"> -->
                        <ul class="item-content clearfix" style="list-style-type: none">
                            <td>
                                <li class="td td-chk" style="list-style-type: none">
                                <div class="td-inner">
                                    <div class="cart-checkbox" style="float:margin-left:50px;width: 100px">
                                        <input style="float:margin-left:50px;width: 100px" class="J_CheckBoxItem" id="J_CheckBox_616577491345" type="checkbox" name="items[]" value="616577491345">
                                        <label for="J_CheckBox_616577491345">勾选商品</label>
                                    </div>
                                </div>
                                </li>
                            </td>

                            <td>
                                <li class="td td-item" style="list-style-type: none">
                                <div class="td-inner" style="float:left;margin-left:30px;width: 130px">
                                    <div class="item-pic J_ItemPic img-loaded" style="float:left;margin-left:30px"><a href="" target="_blank" data-title="" class="J_MakePoint" data-point="tbcart.8.12" data-spm-anchor-id="a1z0d.6639537.1997196601.3"><img src="{{$v['image']}}" class="itempic J_ItemImg" width="80px" height="80px"></a></div>
                                
                            </li>
                            </td>
                            <td>
                                <li class="td td-item" style="list-style-type: none"><div class="item-info" style="float:left;margin-left:40px;width: 50px">
                                    <div class="item-basic-info" style="float:left;width:140px">{{$v['intro']}}</div>
                                </div>
                            </li></td>
                            <td>
                            <li class="td td-sum" style="list-style-type: none">
                                <div class="td-inner" style="float:left;margin-left:50px;width: 50px"><em tabindex="0" class="J_ItemSum number">{{$v['money']}}</em>

                                </div>
                            </li>
                            </td>
                            <td>
                            <li class="td td-sum" style="list-style-type: none">
                                <div class="td-inner" style="float:left;margin-left:50px;width: 50px"><em tabindex="0" class="J_ItemSum number">{{$v['cheng']}}</em>
                                </div>
                            </li>
                            </td>
                            <td>
                            <li class="td td-sum" style="list-style-type: none">
                                <div class="td-inner" style="float:left;margin-left:100px">
                                	<a href="/delete/{{$v['id']}}">下架</a>
                                </div>
                            </li>
                            </td>
                        </ul>
                    <!-- </div> -->
                </div>
                </table>
               
                
                @endif
                @endforeach
                <img style="margin-left:600px" src="//gtd.alicdn.com/tps/i2/T1Q2BUXaxFXXXXXXXX-32-32.gif" class="find-similar-loading">