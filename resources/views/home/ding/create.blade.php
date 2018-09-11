@include('layouts.qt._header')
        @show
        @include('layouts.qt._top')
        @show
    <link href="/ding/static/css/public.css" type="text/css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="/ding/static/css/base.css" />
    <script type="text/javascript" src="/ding/static/js/jquery_cart.js"></script>
    <link rel="stylesheet" type="text/css" href="/ding/static/css/checkout.css" />
    <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
    <script src="/ueditor/liandong/js/jquery.cxselect.js"></script>
   
    <!--收货地址body部分开始-->
    <div class="border_top_cart">
        <script type="text/javascript">
        var checkoutConfig = {
            addressMatch: 'common',
            addressMatchVarName: 'data',
            hasPresales: false,
            hasBigTv: false,
            hasAir: false,
            hasScales: false,
            hasGiftcard: false,
            totalPrice: 244.00,
            postage: 10, //运费
            postFree: true, //活动是否免邮了
            bcPrice: 150, //计算界值
            activityDiscountMoney: 0.00, //活动优惠
            showCouponBox: 0,
            invoice: {
                NA: "0",
                personal: "1",
                company: "2",
                electronic: "4"
            }
        };
        var miniCartDisable = true;
        </script>
        <div class="container">
            <div class="checkout-box" >
                <form id="checkoutForm" action="/grdingdan" method="post">
                    <div class="checkout-box-bd ">
                        <!-- 地址状态 0：默认选择；1：新增地址；2：修改地址 -->
                        <input type="hidden" name="Checkout[addressState]" id="addrState" value="0">
                        <!-- 收货地址 -->
                        <div class="xm-box " >
                            <div class="box-hd ">
                                <h2 class="title">收货地址</h2>
                                <!---->
                            </div>
                            <div class="box-bd" >
                                <div class="clearfix xm-address-list" id="checkoutAddrList" >
                                    @foreach($huo as $v)
                                    <dl class="item" style="float: left">
                                        <dt>
                                            <strong class="itemConsignee">{{$v['name']}}</strong>
                                            <span class="itemTag tag">{{$v['tag']}}</span>
                                        </dt>
                                        <dd>
                                            <p class="tel itemTel">{{$v['phone']}}</p>
                                            <p class="itemRegion">{{$v['province']}}~{{$v['city']}}~{{$v['area']}}</p>
                                            <p class="itemStreet">{{$v['intro']}}</p>
                                            <span class="edit-btn J_editAddr">编辑</span>
                                        </dd>
                                        <dd style="display:none">
                                            <input type="radio" name="shouhuo_id" class="addressId" value="{{$v['id']}}">
                                        </dd>
                                    </dl>
                                    @endforeach
                                    <div class="item use-new-addr" id="J_useNewAddr" data-state="off">
                                        <span class="iconfont icon-add"><img src="/ding/static/picture/add_cart.png" /></span> 使用新地址
                                    </div>
                                </div>
                                <input type="hidden" name="spid" id="newType" value="{{$shangpinone['id']}}">
                
                                <div class="xm-edit-addr-backdrop" id="J_editAddrBackdrop"></div>
                            </div>
                        </div>
                        <!-- 收货地址 END-->
                        <div id="checkoutPayment">
                            <!-- 支付方式 -->
                            <div class="xm-box">
                                <div class="box-hd ">
                                    <h2 class="title">支付方式</h2>
                                </div>
                                <div class="box-bd">
                                    <ul id="checkoutPaymentList" class="checkout-option-list clearfix J_optionList" id="zhifu">
                                        <li  class="item selected" >
                                            <input  type="radio" name="zhifu" checked="checked" value="在线支付">
                                            <p>
                                                在线支付 <span></span>
                                            </p>
                                        </li>
                                         <!-- <li  class="item">
                                            <input id="daofu" type="radio" name="zhifu"  value="2">
                                            <p>
                                                货到付款 <span></span>
                                            </p>
                                        </li> -->
                                    </ul>
                                </div>
                            </div>
                            <!-- 支付方式 END-->
                             <!-- 支付方式 -->
                            <div class="xm-box">
                                <div class="box-hd ">
                                    <h2 class="title">快递方式</h2>
                                </div>
                                <div class="box-bd">
                                    <ul id="checkoutPaymentList" class="checkout-option-list clearfix J_optionList" id="zhifu">
                                        
                                            <input  type="radio" name="kuaidi" checked="checked" value="韵达">韵达
                                            <input  type="radio" name="kuaidi" checked="checked" value="圆通">圆通
                                            <input  type="radio" name="kuaidi" checked="checked" value="顺丰">顺丰
                                         <!-- <li  class="item">
                                            <input id="daofu" type="radio" name="zhifu"  value="2">
                                            <p>
                                                货到付款 <span></span>
                                            </p>
                                        </li> -->
                                    </ul>
                                </div>
                            </div>
                            <!-- 支付方式 END-->
                            <div class="xm-box">
                                <div class="box-hd ">
                                    <h2 class="title">配送方式</h2>
                                </div>
                                <div class="box-bd">
                                    <ul id="checkoutShipmentList" class="checkout-option-list clearfix J_optionList">
                                        <li class="item selected">
                                            <input type="radio" data-price="0" name="Checkout[shipment_id]" checked="checked" value="1">
                                            <p>
                                                快递配送（免运费） <span></span>
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- 配送方式 END-->
                            <!-- 配送方式 END-->
                        </div>
                        <!-- 送货时间 -->
                        <!-- <div class="xm-box">
                            <div class="box-hd">
                                <h2 class="title">送货时间</h2>
                            </div>
                            <div class="box-bd">
                                <ul class="checkout-option-list clearfix J_optionList">
                                    <li class="item selected">
                                        <input type="radio" checked="checked" name="Checkout[best_time]" value="1">
                                        <p>不限送货时间<span>周一至周日</span></p>
                                    </li>
                                    <li class="item ">
                                        <input type="radio" name="Checkout[best_time]" value="2">
                                        <p>工作日送货<span>周一至周五</span></p>
                                    </li>
                                    <li class="item ">
                                        <input type="radio" name="Checkout[best_time]" value="3">
                                        <p>双休日、假日送货<span>周六至周日</span></p>
                                    </li>
                                </ul>
                            </div>
                        </div> -->
                        <!-- 送货时间 END-->
                        <!-- 发票信息 -->
                        <div id="checkoutInvoice">
                            <div class="xm-box">
                                <div class="box-hd">
                                    <h2 class="title">发票信息</h2>
                                </div>
                                <div class="box-bd">
                                    <ul class="checkout-option-list checkout-option-invoice clearfix J_optionList J_optionInvoice">
                                        <li class="hide">
                                            电子个人发票4
                                        </li>
                                        <li class="item selected">
                                            <!--<label><input type="radio"  class="needInvoice" value="0" name="Checkout[invoice]">不开发票</label>-->
                                            <input type="radio" checked="checked" value="4" name="Checkout[invoice]">
                                            <p>电子发票（非纸质）</p>
                                        </li>
                                        <li class="item ">
                                            <input type="radio" value="1" name="Checkout[invoice]">
                                            <p>普通发票（纸质）</p>
                                        </li>
                                    </ul>
                                    <p id="eInvoiceTip" class="e-invoice-tip ">
                                        电子发票是税务局认可的有效凭证，可作为售后维权凭据，不随商品寄送。开票后不可更换纸质发票，如需报销请选择普通发票。<a href="http://bbs.xiaomi.cn/thread-9285999-1-1.html" target="_blank">什么是电子发票？</a>
                                    </p>
                                    <div class="invoice-info nvoice-info-1" id="checkoutInvoiceElectronic" style="display:none;">
                                        <p class="tip">电子发票目前仅对个人用户开具，不可用于单位报销 ，不随商品寄送</p>
                                        <p>发票内容：购买商品明细</p>
                                        <p>发票抬头：个人</p>
                                        <p>
                                            <span class="hide"><input type="radio" value="4" name="Checkout[invoice_type]"   checked="checked"   id="electronicPersonal" class="invoiceType"></span>
                                            <dl>
                                                <dt>什么是电子发票?</dt>
                                                <dd>&#903; 电子发票是纸质发票的映像，是税务局认可的有效凭证，与传统纸质发票具有同等法律效力，可作为售后维权凭据。</dd>
                                                <dd>&#903; 开具电子服务于个人，开票后不可更换纸质发票，不可用于单位报销。</dd>
                                                <dd>&#903; 您在订单详情的"发票信息"栏可查看、下载您的电子发票。<a href="http://bbs.xiaomi.cn/thread-9285999-1-1.html" target="_blank">什么是电子发票？</a></dd>
                                            </dl>
                                        </p>
                                    </div>
                                    <div class="invoice-info invoice-info-2" id="checkoutInvoiceDetail" style="display:none;">
                                        <p>发票内容：购买商品明细</p>
                                        <p>
                                            发票抬头：请确认单位名称正确,以免因名称错误耽搁您的报销。注：合约机话费仅能开个人发票
                                        </p>
                                        <ul class="type clearfix J_invoiceType">
                                            <li class="hide">
                                                <input type="radio" value="0" name="Checkout[invoice_type]" id="noNeedInvoice">
                                            </li>
                                            <li class="">
                                                <input class="invoiceType" type="radio" id="commonPersonal" name="Checkout[invoice_type]" value="1"> 个人
                                            </li>
                                            <li class="">
                                                <input class="invoiceType" type="radio" name="Checkout[invoice_type]" value="2"> 单位
                                            </li>
                                        </ul>
                                        <div id='CheckoutInvoiceTitle' class=" hide  invoice-title">
                                            <label for="Checkout[invoice_title]">单位名称：</label>
                                            <input name="Checkout[invoice_title]" type="text" maxlength="49" value="" class="input"> <span class="tip-msg J_tipMsg"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- 发票信息 END-->
                    </div>
                    <div class="checkout-box-ft">
                        <!-- 商品清单 -->
                        <div id="checkoutGoodsList" class="checkout-goods-box">
                            <div class="xm-box">
                                <div class="box-hd">
                                    <h2 class="title">确认订单信息</h2>
                                </div>
                                <div class="box-bd">
                                    <dl class="checkout-goods-list">
                                        <dt class="clearfix">
                                            <span class="col col-1">商品名称</span>
                                            <span class="col col-2">购买价格</span>
                                            <span class="col col-3">购买数量</span>
                                            <span class="col col-4">小计（元）</span>
                                        </dt>
                                        <dd class="item clearfix">
                                            <div class="item-row">
                                                <div class="col col-1">
                                                    
                                                        <img src="{{$shangpinone['image']}}" style="width:200px">
                                                  
                                                        <a href="#">{{$shangpinone['title']}}</a>
                                                        <a href="#">{{$shangpinone['intro']}}</a>
                                                    
                                                </div>
                                                <div class="col col-2">{{$shangpinone['money']}}元</div>
                                                <div class="col col-3">1</div>
                                                <div class="col col-4">{{$shangpinone['money']}}元</div>
                                            </div>
                                        </dd>
                                    </dl>
                                    <div class="checkout-count clearfix">
                                        <div class="checkout-count-extend xm-add-buy">
                                            
                                

                            </div>
                            <!-- checkout-count-extend -->
                            <div class="checkout-price">
                                <ul>

                                    <li>
                                       订单总额：<span id="dingdan">{{$shangpinone['money']}}元</span>
                                    </li>
                                    <li>
                                        运费：<span id="yunfei">0元</span>
                                    </li>
                                </ul>
                                <p class="checkout-total">应付总额：<span id="zongjia">{{$shangpinone['money']}}元</span></p>
                            </div>
                            <!--  -->
                        </div>
                    </div>
                </div>

    <!--S 加价购 产品选择弹框 -->
                <div class="modal hide modal-choose-pro" id="J_choosePro-664">
                <div class="modal-header">
                    <span class="close" data-dismiss='modal'><i class="iconfont">&#xe617;</i></span>
                    <h3>选择产品</h3>
                                            <div class="more">
                                                <div class="xm-recommend-page clearfix">
                                                    <a class="page-btn-prev   J_carouselPrev iconfont" href="javascript: void(0);">&#xe604;</a><a class="page-btn-next  J_carouselNext iconfont" href="javascript: void(0);">&#xe605;</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-body J_chooseProCarousel">
                                            <div class="J_carouselWrap modal-choose-pro-list-wrap">
                                                <ul class="clearfix J_carouselList">
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <a href="#" class="btn btn-disabled J_chooseProBtn">加入购物车</a>
                                        </div>
                                    </div>
                                    <!--E 加价购 产品选择弹框 -->
                                    <!--S 保障计划 产品选择弹框 -->
                                </div>
                                <!-- 商品清单 END -->
                                <input type="hidden" id="couponType" name="Checkout[couponsType]">
                                <input type="hidden" id="couponValue" name="Checkout[couponsValue]">
                                <div class="checkout-confirm">
                                    <a href="#" class="btn btn-lineDakeLight btn-back-cart">返回购物车</a>

                                    <input type="submit" class="btn btn-primary" value="立即下单" id="checkoutToPay" />
                                </div>
                            </div>
                        </div>
                        {{csrf_field()}}
                </form>
                </div>
                <!-- 禮品卡提示 S-->
                <div class="modal hide lipin-modal" id="lipinTip">
                  
                    <div class="modal-body">
                        <ul>
                            <li><strong>收&nbsp;&nbsp;货&nbsp;&nbsp;人：</strong><span id="lipin-uname"></span></li>
                            <li><strong>联系电话：</strong><span id="lipin-uphone"></span></li>
                            <li><strong>收货地址：</strong><span id="lipin-uaddr"></span></li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <span class="btn btn-primary" id="useGiftCard">确认下单</span><span class="btn btn-dakeLight" id="closeGiftCard">返回修改</span>
                    </div>
                </div>
                <!--  禮品卡提示 E-->
                <!-- 预售提示 S-->
                <div class="modal hide yushou-modal" id="yushouTip">
                    <div class="modal-body">
                        <h2>请确认收货地址及发货时间</h2>
                        <ul class="list">
                            <li>
                                <strong>请确认配送地址，提交后不可变更：</strong>
                                <p id="yushouAddr"> </p>
                                <span class="icon-common icon-1"></span>
                            </li>
                            <li>
                                <strong>支付后发货</strong>
                                <p>如您随预售商品一起购买的商品，将与预售商品一起发货</p>
                                <span class="icon-common icon-2"></span>
                            </li>
                            <li>
                                <strong>以支付价格为准</strong>
                                <p>如预售产品发生调价，已支付订单价格将不受影响。</p>
                                <span class="icon-common icon-3"></span>
                            </li>
                        </ul>
                    </div>
                    <div class="modal-footer">
                        <p id="yushouOk" class="yushou-ok">
                            <span class="icon-checkbox"><i class="iconfont">&#xe626;</i></span> 我已确认收货地址正确，不再变更
                        </p>
                        <span class="btn btn-lineDakeLight" data-dismiss="modal">返回修改地址</span>
                        <span class="btn btn-primary" id="yushouCheckout">继续下单</span>
                    </div>
                </div>
                <!--  预售提示 E-->
                <script id="newAddrTemplate" type="text/x-dot-template">
                  
                </script>
                <!-- 保险弹窗 -->
                <!-- 保险弹窗 -->
                <script src="/ding/static/js/base.min.js"></script>
                <script type="text/javascript" src="/ding/static/js/address_all.js"></script>
                <script type="text/javascript" src="/ding/static/js/checkout.min.js"></script>
            </div>
            <!--收货地址body部分结束-->
 <!--点击弹出新增/收货地址界面start-->
                               <form action="/huo" method="post">
                                <div class="xm-edit-addr-box" id="J_editAddrBox">
                                    <div class="bd">
                                        <div class="item">
                                            <label>收货人姓名<span>*</span></label>
                                            <input type="text" name="name" id="Consignee" class="input" placeholder="收货人姓名" maxlength="15" >
                                            <p class="tip-msg tipMsg"></p>
                                        </div>
                                        <div class="item">
                                            <label>联系电话<span>*</span></label>
                                            <input type="text" name="phone" class="input" id="Telephone" placeholder="11位手机号" autocomplete='off'>
                                            <p class="tel-modify-tip" id="telModifyTip"></p>
                                            <p class="tip-msg tipMsg"></p>
                                        </div>
                                        <input type="hidden" name="user_id" value="1">
                                        <div class="item">
                                            <label>地址<span>*</span></label>
                                            <div class="am-u-sm-9" id="city_china">
                                                <select style="width:60px;float:left" class="province" name="province" id=""></select>
                                                <select class="city" style="width:60px;float:left;background:white" name="city" id=""></select>
                                                <select class="area" style="width:60px;float:left;background:white" name="area" id=""></select>
                                            </div>
                                            <textarea name="intro" class="input-area" id="Street" placeholder="路名或街道地址，门牌号"></textarea>
                                            <p class="tip-msg tipMsg"></p>
                                        </div>
                                        <div class="item">
                                            <label>邮政编码<span>*</span></label>
                                            <input type="text" name="userAddress[zipcode]" id="Zipcode" class="input" placeholder="邮政编码" autocomplete='off'>
                                            <p class="zipcode-tip" id="zipcodeTip"></p>
                                            <p class="tip-msg tipMsg"></p>
                                        </div>
                                        <div class="item">
                                            <label>地址标签<span>*</span></label>
                                            <input type="text" name="tag" id="Tag" class="input" placeholder='地址标签：如"家"、"公司"。限5个字内'>
                                            <p class="tip-msg tipMsg"></p>
                                        </div>
                                    </div>
                                    <div class="ft clearfix">
                                        <button type="button" name="end" class="btn btn-lineDake btn-small " id="J_editAddrCancel">取消</button>
                                         
                                        <button  class="btn btn-primary  btn-small " >保存</button>
                                    </div>
                                    {{csrf_field()}}
                                </div>
                                </form>
                                <!--点击弹出新增/收货地址界面end-->
                               <!--  <style>
                                    .selected{
                                        border:1px solid red;
                                    }
                                </style>
                                <script>
                                    
                                    $('#zaixian').click(function(){
                                        alert(1);
                                    }
                                </script> -->
                    <script>
                        var urlChina = '/ueditor/liandong/js/cityData.min.json';
                        $.cxSelect.defaults.url = urlChina;
                        $('#city_china').cxSelect({
                            selects: ['province', 'city', 'area']
                        });
                    </script>
            
          @include('layouts.qt._floor')