		@include('layouts.qt._header')
		@include('layouts.qt._top')
		<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
	<script src="/ueditor/liandong/js/jquery.cxselect.js"></script>

		<!-- Main Content -->
    	<main class="main-content">
			<div class="breadcrumb-wrapper" style="height:200px;background-image:url(/ueditor/images/4.jpg);>
				<nav class="breadcrumb" role="navigation" aria-label="breadcrumbs">
					<a href="/" title="Back to the frontpage">首页</a>
					<span aria-hidden="true">&rsaquo;</span>
					<span>发布闲置</span>
				</nav>
				<h1 class="section-header__title">发布闲置</h1>
			</div>
			<div class="wrapper">
				<div class="grid--rev col-md-5" >
					<div class="grid__item">
						<div itemscope="" itemtype="http://schema.org/Product">
							<div class="product-single">
								<div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer" stylr="background-image:url(/ueditor/images/1.jpg)">
											<meta itemprop="priceCurrency" content="USD">
											<link itemprop="availability" href="http://schema.org/InStock">
											
												
												<form action="/fabu" method="post"  id="contact_form" class="contact-form"  enctype="multipart/form-data">
													标题:<input style="width:300px;" type="text" id="ContactFormName" class="input-full" name="title"  autocapitalize="words" value=""></br></br>
													<label for="productSelect-option-0">描述:</label><textarea cols="100" name="intro"></textarea></br></br>
													<div class="am-form-group">
								                       <div class="am-u-sm-9">
								                            <div class="am-form-group am-form-file">
								                                <div class="tpl-form-file-img">
								                                </div>
								                                <button type="button" class="am-btn am-btn-danger am-btn-sm">
								                                    <i class="am-icon-cloud-upload"></i>添加图片</button>
								                                <input id="doc-form-file" type="file" name="image">
								                            </div>
								                        </div>
								                    </div></br></br>
											
												<div class="selector-wrapper">
														成色:&nbsp;<select class="single-option-selector" name="cheng" data-option="option1" id="productSelect-option-0">
															<option value="0">不全新</option>
															<option value="1">全新</option>
														</select>
												</div></br></br>

												<div class="selector-wrapper">
														分类:&nbsp;<select class="single-option-selector" name="xxcate_id" data-option="option1" id="productSelect-option-0">
															@foreach($xxcate as $v)
																 <option value="{{$v['id']}}">{{$v['name']}}</option>
															@endforeach
														</select>
												</div></br></br>

												<div class="selector-wrapper">
														标签:&nbsp;<select class="single-option-selector" name="tag_id" data-option="option1" id="productSelect-option-0">
															@foreach($tags as $v)
																 <option value="{{$v['id']}}">{{$v['name']}}</option>
															@endforeach
														</select>
												</div></br></br>

												<div class="selector-wrapper">
														价格:&nbsp;<input type="text" name="money">
												</div></br></br>

												<div class="am-form-group">
							                        <div class="am-u-sm-9" id="city_china">
							                        城市:&nbsp;<select class="province" name="province" id=""></select>
							                        <select class="city"  name="city" id=""></select>
							                        <select class="area"  name="area" id=""></select>
							                        </div>
							                    </div>
                    							{{csrf_field()}}
                    
							                    <script>
							                        var urlChina = '/ueditor/liandong/js/cityData.min.json';
							                        $.cxSelect.defaults.url = urlChina;
							                        $('#city_china').cxSelect({
							                            selects: ['province', 'city', 'area']
							                        });
							                    </script>
												
							                    <button  type="submit"  id="AddToCart" class="btn">
													<span id="AddToCartText">确认发布</span>
													</button>	
												</form>

												<div class="add-to-wishlist">
													<span class="non-user" data-toggle="tooltip" data-placement="right" title="To use the Wish-list, you must Login or Register"><a href="http://demo.tadathemes.com/account/login"><i class="fa fa-heart"></i>添加愿望清单</a></span>
												</div>

												<div class="grid__item product-info-right three-eighths .col-md-5" style="position:absolute;left:1300px;top:450px">
													<div class="product-extrainfo .col-md-5" >
														<ul>
															<li><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-shield fa-stack-1x fa-inverse"></i></span><span class="detail_more_info">保证<span class="sub">质量检查</span></span></li>
															<li><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-truck fa-stack-1x fa-inverse"></i></span><span class="detail_more_info">所有产品<span class="sub">免费送货</span></span></li>
															<li><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-gift fa-stack-1x fa-inverse"></i></span><span class="detail_more_info">特价礼品卡<span class="sub">特价礼品卡</span></span></li>
															<li><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-reply fa-stack-1x fa-inverse"></i></span><span class="detail_more_info">七天内<span class="sub">免费退货</span></span></li>
															<li><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-tty fa-stack-1x fa-inverse"></i></span><span class="detail_more_info">咨询<span class="sub">22222</span></span></li>
														</ul>
													</div>
												</div>
											
												<div class="grid__item large--one-half" >
													<div class="product-info-left grid__item five-eighths">
														<div class="detail-social">
															<div class="social-sharing">
																<a target="_blank" href="#" class="share-facebook">
																<span class="icon icon-facebook" aria-hidden="true"></span>
																<span class="share-title">Share</span>
																<span class="share-count">0</span>
																</a>
																<a target="_blank" href="#" class="share-twitter">
																<span class="icon icon-twitter" aria-hidden="true"></span>
																<span class="share-title">Tweet</span>
																<span class="share-count">0</span>
																</a>
																<a target="_blank" href="#" class="share-pinterest">
																<span class="icon icon-pinterest" aria-hidden="true"></span>
																<span class="share-title">Pin it</span>
																<span class="share-count">0</span>
																</a>
																<a target="_blank" href="#" class="share-fancy">
																<span class="icon icon-fancy" aria-hidden="true"></span>
																<span class="share-title">Fancy</span>
																</a>
																<a target="_blank" href="#" class="share-google">
																<!-- Cannot get Google+ share count with JS yet -->
																<span class="icon icon-google" aria-hidden="true"></span>
																<span class="share-count">+1</span>
																</a>
																<a target="_blank" href="#" class="share-email">
																<i class="fa fa-envelope"></i>
																</a>
															</div>
														</div>
													</div>
												</div>


							</div>
							
						</div>
					</div>
					
				</div>
			</div>
		</main>
	@include('layouts.qt._floor')