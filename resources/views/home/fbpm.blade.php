 @include('layouts.qt._header') @include('layouts.qt._top')
<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
<script src="/ueditor/liandong/js/jquery.cxselect.js"></script>
<!-- Main Content -->
<main class="main-content">
    <div class="breadcrumb-wrapper" style="background-image:url(/ueditor/images/3.jpg);>
				<nav class=" breadcrumb " role="navigation " aria-label="breadcrumbs ">
					<a href="/ " title="Back to the frontpage ">首页</a>
					<span aria-hidden="true ">&rsaquo;</span>
					<span>发布拍卖</span>
				</nav>
				<h1 class="section-header__title ">发布拍卖</h1>
			</div>
			<div class="wrapper ">
				<div class="grid--rev col-md-5 " >
					<div class="grid__item ">
						<div itemscope=" " itemtype="http://schema.org/Product ">
							<div class="product-single ">
								<div itemprop="offers " itemscope=" " itemtype="http://schema.org/Offer " stylr="background-image:url(/ueditor/images/1.jpg) ">
											<meta itemprop="priceCurrency " content="USD ">
											<link itemprop="availability " href="http://schema.org/InStock ">
												<form action="/mai" method="post"  id="contact_form " class="contact-form"  enctype="multipart/form-data">
													<label for="productSelect-option-0 ">描述:</label><textarea cols="50" name="intro"></textarea></br></br>
													<div class="am-form-group ">
								                       <div class="am-u-sm-9 ">
								                            <div class="am-form-group am-form-file ">
								                                <div class="tpl-form-file-img ">
								                                </div>
								                                <button type="button " class="am-btn am-btn-danger am-btn-sm ">
								                                    <i class="am-icon-cloud-upload "></i>图片</button>
								                                <input id="doc-form-file " type="file" name="image">
								                            </div>
								                        </div>
								                    </div></br></br>
											
												<div class="selector-wrapper ">
														成&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;色:&nbsp;<select class="single-option-selector " name="cheng" data-option="option1 " id="productSelect-option-0 ">
															<option value="0">不全新</option>
															<option value="1">全新</option>
														</select>
												</div></br></br>

												<div class="selector-wrapper ">
														起拍价格:&nbsp;<input type="text" name="money">
												</div></br></br>

												<div class="selector-wrapper ">
														每次加价:&nbsp;<input type="text" name="jmoney">
												</div></br></br>

												<div class="am-form-group ">
                         							开拍时间:&nbsp;
							                        <input  name="opentime" type="text" value=""> 
							                        </div></br></br>
                    
							                    <div class="am-form-group ">
                    								结束时间:&nbsp;
                    								<input  name="overtime" type="text" value=""> 
                       							 </div></br></br>            						
												
                    							{{csrf_field()}}
							                    <button    id="AddToCart " class="btn ">
													<span id="AddToCartText ">确认发布</span>
													</button>	
												</form>
												

												<div class="grid__item product-info-right three-eighths .col-md-5 " style="position:absolute;left:1300px;top:450px ">
													<div class="product-extrainfo .col-md-5 " >
														<ul>
															<li><span class="fa-stack fa-lg "><i class="fa fa-circle fa-stack-2x "></i><i class="fa fa-shield fa-stack-1x fa-inverse "></i></span><span class="detail_more_info ">保证<span class="sub ">质量检查</span></span></li>
															<li><span class="fa-stack fa-lg "><i class="fa fa-circle fa-stack-2x "></i><i class="fa fa-truck fa-stack-1x fa-inverse "></i></span><span class="detail_more_info ">所有产品<span class="sub ">免费送货</span></span></li>
															<li><span class="fa-stack fa-lg "><i class="fa fa-circle fa-stack-2x "></i><i class="fa fa-gift fa-stack-1x fa-inverse "></i></span><span class="detail_more_info ">特价礼品卡<span class="sub ">特价礼品卡</span></span></li>
															<li><span class="fa-stack fa-lg "><i class="fa fa-circle fa-stack-2x "></i><i class="fa fa-reply fa-stack-1x fa-inverse "></i></span><span class="detail_more_info ">七天内<span class="sub ">免费退货</span></span></li>
															<li><span class="fa-stack fa-lg "><i class="fa fa-circle fa-stack-2x "></i><i class="fa fa-tty fa-stack-1x fa-inverse "></i></span><span class="detail_more_info ">咨询<span class="sub ">22222</span></span></li>
														</ul>
													</div>
												</div>
							</div>
							
						</div>
					</div>
					
				</div>
			</div>
		</main>
	@include('layouts.qt._floor')