
		@include('layouts.qt._header')
		@show
		@include('layouts.qt._top')
		@show
		<main class="main-content">
			<div class="wrapper">
				<div id="top-home-blocks" class="grid--full grid--table">
					<div class="grid__item one-quarter shop-by-collections medium-down--hide">
						<div class="sidebar-collections">
							<div class="sdcollections-title sb-title">
								<i class="fa fa-list"></i>
								<span>萨达撒大家撒</span>
							</div>
							<div class="sdcollections-content">
								<ul class="sdcollections-list">
									@foreach($dcate as $v)
									<li class="sdc-element vetical-menu1 site-nav--has-dropdown" aria-haspopup="true">
										<a href="collection.html" class="site-nav__link">
											<div class="element-main">
												<div class="collection-icon">
													<img src="/assets/assets/images/book.png" alt="collection icon">
												</div>
												<div class="collection-area have-icons">
													<div class="collection-name">
														 {{$v['name']}} ({{$v->xcate->count()}})
													</div>
												</div>
											</div>
											<span class="icon icon-arrow-right" aria-hidden="true"></span>
										</a>
										<ul class="site-nav__dropdown vetical__dropdown vetical__dropdown1">
											<li class="nav-links nav-links01 grid__item large--one-half">
												
												<ul>
													@foreach($xcate as $value)
														@if($v['id'] == $value['dcate_id'])

														<li class="list-title">
																{{$value['name']}}
																
																	@foreach($xxcate as $val)
																	@if($value['id'] == $val['xcate_id'])
																	@if($v['id'] == $value['dcate_id'])
																	<li class="list-unstyled nav-sub-mega">
																		<a href="collection.html">
																				{{$val['name']}}
																		</a>
																	</li>
																	@endif
																	@endif
																	@endforeach
														</li>
														@endif												
													@endforeach
												</ul>
												
											</li>
										</ul>
									</li>
									@endforeach
								</ul>
							</div>
						</div>
					</div>
					<div class="grid__item small--one-whole medium--one-whole three-quarters main-slideshow">
						<div class="main_slideshow_wrapper">
							<div id="slider" class="flexslider">
								<ul class="slides">
									<li>
										<img src="/assets/assets/images/demo1_885x450.jpg" alt="" />
									</li>
									<li>
										<img src="/assets/assets/images/demo2_885x450.jpg" alt="" />
									</li>
									<li>
										<img src="/assets/assets/images/demo3_885x450.jpg" alt="" />
									</li>
									<li>
										<img src="/assets/assets/images/demo4_885x450.jpg" alt="" />
									</li>
									<li>
										<img src="/assets/assets/images/demo5_885x450.jpg" alt="" />
									</li>
									<li>
										<img src="/assets/assets/images/demo6_885x450.jpg" alt="" />
									</li>
								</ul>
							</div>
							<div id="carousel" class="flexslider">
								<ul class="slides">
									<li>
										<div>
											<img src="/assets/assets/images/demo1_50x50.jpg" alt="">
											<span class="cr-title"><a href="collection.html" onclick="location.href = 'collection.html'">Opening celebration 7th store</a></span>
											<span class="cr-desc">Sale up to 70% from Nov 1, 2015 to Nov 7, 2015</span>
										</div>
									</li>
									<li>
										<div>
											<img src="/assets/assets/images/demo2_50x50.jpg" alt="">
											<span class="cr-title"><a href="collection.html" onclick="location.href = 'collection.html'">Beautiful woman 2015</a></span>
											<span class="cr-desc">high-end products cosmetics &amp; mackup</span>
										</div>
									</li>
									<li>
										<div>
											<img src="/assets/assets/images/demo3_50x50.jpg" alt="">
											<span class="cr-title"><a href="collection.html" onclick="location.href = 'collection.html'">Sony Xperia Z5</a></span>
											<span class="cr-desc">buy now only today sale 60% for all colour</span>
										</div>
									</li>
									<li>
										<div>
											<img src="/assets/assets/images/demo4_50x50.jpg" alt="">
											<span class="cr-title"><a href="collection.html" onclick="location.href = 'collection.html'">New Lego collection</a></span>
											<span class="cr-desc">best seller 2015</span>
										</div>
									</li>
									<li>
										<div>
											<img src="/assets/assets/images/demo5_50x50.jpg" alt="">
											<span class="cr-title"><a href="collection.html" onclick="location.href = 'collection.html'">Christmas 2015</a></span>
											<span class="cr-desc">Merry Christmas</span>
										</div>
									</li>
									<li>
										<div>
											<img src="/assets/assets/images/demo6_50x50.jpg" alt="">
											<span class="cr-title"><a href="collection.html" onclick="location.href = 'collection.html'">Happy New Year</a></span>
											<span class="cr-desc">Happy New Year</span>
										</div>
									</li>
							</div>
						</div>
					</div>
				</div>
				@foreach($dcate as $v)
				<div id="beauty-health-blocks" class="beauty-health-wrapper grid--full grid--table grid-block-full">
					<div class="beauty-health-inner">
						<div class="bh-top home-block-title">
							<div class="collection-name">
								<img class="collection-icon" src="/assets/assets/images/beauty-health.png" alt=""><a href="/dcateall?xxcate_id={{$v->id}}">{{$v['name']}}</a>
							</div>
							<div class="collection-tags">
								<ul class="bh-tags">
									@foreach($xcate as $value)
									@if($v['id'] == $value['dcate_id'])
									<li class=""><a href="/cate/{{$v->id}}">{{$value['name']}}</a></li>
									@endif
									@endforeach
									<li class="link-to"><a href="/dcateall">查看全部</a></li>
								</ul>
							</div>
						</div>
						<div class="bh-btm">
							<div class="grid__item three-quarters bh-left small--one-whole medium--one-whole">
								<div class="home-slideshow-block bh-slideshow">
									<div class="home-gallery-slider">
										@foreach($shangpin as $vvv)
										<div><a href="/{{$vvv->id}}.html"><img src="{{$vvv['image']}}" alt="" width="880" height="285"></a></div>
										@endforeach   
									</div>
								</div>
								<div class="home-products-block bh-products">
									<div class="home-products-block-title">
										<span>Spotlight</span>
									</div>
									<div class="home-products-block-content">
										<div class="home-products-slider">
											@foreach($shangpin as $va)
											@foreach($xcate as $vx)
											@foreach($xxcate as $vxx)
											@if($v['id'] == $vx['dcate_id'])
											@if($vx['id'] == $vxx['xcate_id'])
											@if($va['xxcate_id'] == $vxx['id'])
											
											<div class="grid__item">
												<div class="grid__item_wrapper">
													<div class="grid__image product-image">
														<a href="/{{$va['id']}}.html">
															<img src="{{$va['image']}}" alt="Demo Product Sample" >
														</a>
														<div class="quickview">
															<div class="product-ajax-cart hidden-xs hidden-sm">
																<div data-handle="consequuntur-magni-dolores" class="quick_shop-div">
																	<a href="#quick-shop-modal" class="btn quick_shop">
																		<i class="fa fa-eye" title="Quick View"></i>																
																	</a>
																</div>
															</div>
														</div>
													</div>
													<div class="rating-star" >
														<span class="spr-badge" id="spr_badge_3008529987" data-rating="0.0">
															<span class="spr-starrating spr-badge-starrating">
																<i class="spr-icon spr-icon-star-empty" style=""></i>
																<i class="spr-icon spr-icon-star-empty" style=""></i>
																<i class="spr-icon spr-icon-star-empty" style=""></i>
																<i class="spr-icon spr-icon-star-empty" style=""></i>
																<i class="spr-icon spr-icon-star-empty" style=""></i>
															</span>
															<span class="spr-badge-caption">No reviews </span>
														</span>
													<p class="h6 product-title">
														<a href="product.html">{{$va['intro']}}~ 
														@if($va['cheng'] == 0) 全新 @else 非全新 @endif</a>
													</p>
													<p class="product-price">
														<strong>On Sale</strong>
														<span class="money" data-currency-usd="$19.99">${{$va['money']}}</span>
														<span class="visually-hidden">Regular price</span>
														<s><span class="money" data-currency-usd="$24.99">${{$va['money']}}</span></s>
													</p>
													<ul class="action-button">
														<li class="add-to-cart-form">
															<form action="#" method="post" enctype="multipart/form-data" id="AddToCartForm" class="form-vertical">							
																<div class="effect-ajax-cart">
																	<input type="hidden" name="quantity" value="1">
																	<button type="submit" name="add" id="AddToCart" class="btn btn-1 add-to-cart" title="购买">
																		<span id="AddToCartText"><i class="fa fa-shopping-cart"></i> 立即购买 </span>
																	</button>
																</div>
															</form>
														</li>
														<li class="wishlist">
															<a class="wish-list btn" href="wishlist.html"><i class="fa fa-heart" title="Wishlist"></i></a>
														</li>
														<li class="email">
															<a target="_blank" class="btn email-to-friend" href="#"><i class="fa fa-envelope" title="Email to friend"></i></a>
														</li>
														</div>
													</ul>
												</div>
											</div> 
											@endif
											@endif
											@endif
											@endforeach
											@endforeach
											@endforeach
									
										</div>	
									</div>											           
								</div>
							</div>
							<div class="grid__item one-quarter bh-right small--one-whole medium--one-whole">
								<div class="brands-area">
									<ul class="brands-elements">
										<li class="">
											<a href="collection.html"><img src="/assets/assets/images/demo1_brand1_123x64.png" alt=""></a>
										</li>
										<li class="">
											<a href="collection.html"><img src="/assets/assets/images/demo1_brand2_123x64.png" alt=""></a>
										</li>
										<li class="">
											<a href="collection.html"><img src="/assets/assets/images/demo1_brand3_123x64.png" alt=""></a>
										</li>
										<li class="">
											<a href="collection.html"><img src="/assets/assets/images/demo1_brand4_123x64.png" alt=""></a>
										</li>
										<li class="">
											<a href="collection.html"><img src="/assets/assets/images/demo1_brand5_123x64.png" alt=""></a>
										</li>
										<li class="">
											<a href="collection.html"><img src="/assets/assets/images/demo1_brand6_123x64.png" alt=""></a>
										</li>
										<li class="">
											<a href="collection.html"><img src="/assets/assets/images/demo1_brand7_123x64.png" alt=""></a>
										</li>
										<li class="">
											<a href="collection.html"><img src="/assets/assets/images/demo1_brand8_123x64.png" alt=""></a>
										</li>         
									</ul>
								</div>
								<div class="banner-area">
									<a href="collection.html"><img src="/assets/assets/images/demo1_banner1_185x345.png" alt=""></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				
			@endforeach	
		</main>

		<!-- Footer -->
		<footer class="site-footer">       
			<div class="grid__item footer_newsletter">
				<div class="wrapper">
					<h3><i class="fa fa-envelope"></i> Make sure you don't miss interesting happenings by joining our newsletter program</h3>
					<form action="#" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" target="_blank" class="input-group">
						<input type="email" value="" placeholder="Enter your email here ..." name="EMAIL" id="mail" class="input-group-field" aria-label="email@example.com">
						<span class="input-group-btn">
						<input type="submit" class="btn" name="subscribe" id="subscribe" value="subscribe">
						</span>
					</form>
				</div>
			</div>
			<div class="grid__item footer_information">
				<div class="wrapper">
					<div class="grid-uniform">
						<div class="fi-about-block grid__item one-quarter small--one-whole medium--one-whole">
							<div class="fi-title">
								About us
							</div>
							<div class="fi-content">
								<ul class="group_information">
									<li><i class="fa fa-map-marker"></i> 474 Ontario St Toronto, ON M4X 1M7 Canada</li>
									<li><i class="fa fa-phone"></i> (+1234)56789xxx</li>
									<li><i class="fa fa-envelope"></i> tadathemes@gmail.com</li>
								</ul>
							</div>
							<div class="fi-content inline-list social-icons">
								<a href="index.html" title="Twitter" class="icon-social twitter" data-toggle="tooltip" data-placement="top"><i class="fa fa-twitter-square"></i></a>
								<a href="index.html" title="Facebook" class="icon-social facebook" data-toggle="tooltip" data-placement="top"><i class="fa fa-facebook-square"></i></a>
								<a href="index.html" title="Google+" class="icon-social google" data-toggle="tooltip" data-placement="top"><i class="fa fa-google-plus-square"></i></a>
								<a href="index.html" title="Pinterest" class="icon-social pinterest" data-toggle="tooltip" data-placement="top"><i class="fa fa-pinterest-square"></i></a>
								<a href="index.html" title="Youtube" class="icon-social youtube" data-toggle="tooltip" data-placement="top"><i class="fa fa-youtube-square"></i></a>
								<a href="index.html" title="Vimeo" class="icon-social vimeo" data-toggle="tooltip" data-placement="top"><i class="fa fa-vimeo-square"></i></a>
							</div>
						</div>
						<div class="fi-links grid__item one-quarter small--one-whole medium--one-whole">
							<div class="fi-title">
								Information
							</div>
							<div class="fi-content">
								<ul class="grid__item one-half">
									<li>
										<a href="about-us.html"><span>About us</span></a>
									</li>
									<li>
										<a href="#"><span>Shipping &amp; Returns</span></a>
									</li>
									<li>
										<a href="#"><span>Privacy</span></a>
									</li>
									<li>
										<a href="#"><span>Conditions</span></a>
									</li>
									<li>
										<a href="#"><span>Online support</span></a>
									</li>
								</ul>
								<ul class="grid__item one-half">
									<li>
										<a href="account.html"><span>My Account</span></a>
									</li>
									<li>
									<a href="#"><span>Order History</span></a>
									</li>
									<li>
									<a href="#"><span>Help &amp; FAQs</span></a>
									</li>
									<li>
									<a href="contact-us.html"><span>Contact us</span></a>
									</li>
									<li>
									<a href="#"><span>Manufacturers</span></a>
									</li>
								</ul>
							</div>
						</div>
						<div class="fi-tags grid__item one-quarter small--one-whole medium--one-whole">
							<div class="fi-title">
								Product Tags
							</div>
							<div class="fi-content">
								<ul>
									<li><a href="#">100 - 200</a></li>
									<li><a href="#">200 - 300</a></li>
									<li><a href="#">300 - 400</a></li>
									<li><a href="#">400 - 500</a></li>
									<li><a href="#">BB</a></li>
									<li><a href="#">Blue</a></li>
									<li><a href="#">Body Care</a></li>
									<li><a href="#">Gucci</a></li>
									<li><a href="#">Hair Care</a></li>
									<li><a href="#">Hamilton</a></li>
									<li><a href="#">Mackup</a></li>
									<li><a href="#">Omega</a></li>
									<li><a href="#">Perfumes</a></li>
									<li><a href="#">Red</a></li>
									<li><a href="#">Skin Care</a></li>
									<li><a thref="#">Tissot</a></li>
									<li><a href="#">Under 100</a></li>
									<li><a href="#">White</a></li>
									<li><a href="#">Yellow</a></li>
								</ul>
							</div>
						</div>
						<div class="fi-block grid__item one-quarter small--one-whole medium--one-whole">
							<div class="fi-title">
								Recent Post
							</div>
							<ul class="fi-content post-element">
								<li>
								<div class="post-title">
									<a href="article.html">Quisque porta felis est ut malesuada lorem dignissim</a>
								</div>
								<div class="post-author">
									by <span class="author">Tada Theme</span>
								</div>
								</li>
								<li>
								<div class="post-title">
									<a href="article.html">Section 1.10.33 of de Finibus Bonorum et Malorum, written by Cicero in 45 BC</a>
								</div>
								<div class="post-author">
									by <span class="author">Tada Theme</span>
								</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			
			<div class="grid__item footer_product_categories">
				<div class="wrapper">
					<div class="fi-title">
						Product Categories
					</div>
					<div class="fi-content">
						<ul class="product_categories_list">
							<li class="pc-items">
							<a href="collection.html">Beauty &amp; Health</a>
							</li>
							<li class="pc-items">
							<a href="collection.html">Book</a>
							</li>
							<li class="pc-items">
							<a href="collection.html">Camera - Camcorder</a>
							</li>
							<li class="pc-items">
							<a href="collection.html">Clothing</a>
							</li>
							<li class="pc-items">
							<a href="collection.html">Home Appliances</a>
							</li>
							<li class="pc-items">
							<a href="collection.html">Homelife</a>
							</li>
							<li class="pc-items">
							<a href="collection.html">Kids &amp; Baby</a>
							</li>
							<li class="pc-items">
							<a href="collection.html">Smartphones &amp; Cell Phones</a>
							</li>
							<li class="pc-items">
							<a href="collection.html">Sport &amp; Outdoor</a>
							</li>
							<li class="pc-items">
							<a href="collection.html">Stationery</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			
			<div class="grid__item footer_copyright">
				<div class="wrapper">
					<div class="grid">
						<div class="grid__item footer-copyright one-half small--one-whole medium--one-whole small--text-center">
							<p>
								© 2016 Home Market - Red. All rights Reserved
							</p>
						</div>
						<div class="grid__item footer-payment one-half small--one-whole medium--one-whole small--text-center">
							<div id="widget-payment">
								<ul id="payments" class="list-inline animated">
									<li class="tada" data-toggle="tooltip" data-placement="top" title="Visa"><a href="index.html" class="icons visa"><i class="fa fa-cc-visa"></i></a></li>
									<li class="tada" data-toggle="tooltip" data-placement="top" title="Mastercard"><a href="index.html" class="icons mastercard"><i class="fa fa-cc-mastercard"></i></a></li>
									<li class="tada" data-toggle="tooltip" data-placement="top" title="American Express"><a href="index.html" class="icons amex"><i class="fa fa-cc-amex"></i></a></li>
									<li class="tada" data-toggle="tooltip" data-placement="top" title="Paypal"><a href="index.html" class="icons paypal"><i class="fa fa-cc-paypal"></i></a></li>
									<li class="tada" data-toggle="tooltip" data-placement="top" title="Google Wallet"><a href="index.html" class="icons gw"><i class="fa fa-google-wallet"></i></a></li>
									<li class="tada" data-toggle="tooltip" data-placement="top" title="Discover"><a href="index.html" class="icons dsc"><i class="fa fa-cc-discover"></i></a></li>
									<li class="tada" data-toggle="tooltip" data-placement="top" title="Diners Club"><a href="index.html" class="icons dc"><i class="fa fa-cc-diners-club"></i></a></li>
									<li class="tada" data-toggle="tooltip" data-placement="top" title="JCB"><a href="index.html" class="icons jcb"><i class="fa fa-cc-jcb"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<script type="text/javascript">
			  $(function () {
				$(".fi-title").click(function(){
				  $(this).toggleClass('opentab');
				});
			  });
			</script>         
		</footer>
	</div>

	<div id="scroll-to-top" title="Scroll to Top" class="off">
		<i class="fa fa-caret-up"></i>
	</div>

    <!--div id="newsletter_popup" class="modal in fade" style="display: none;">
		<div class="nl-wraper-popup tada-hidden">
			<div class="nl-wraper-popup-inner">
				<form action="#" method="post" name="mc-embedded-subscribe-form" target="_blank">
					<div class="newsletter-popup-content">
						<div class="top-area">
							<span class="head-text1">Subscribe to our Newsletter &amp; receive a coupon for</span>
							<span class="head-text2">10% off</span>
						</div>
						<div class="bottom-area">
							<div class="group_input">
								<input class="form-control" type="email" name="EMAIL" placeholder="Your Email address">
								<button class="btn" type="submit">Get 10% off</button>
							</div>
							<span class="bottom-explain">We will send you a discount code after you confirm your email address.</span>
						</div>
						<div class="nl-social">
							<div class="fi-content inline-list social-icons">
								<a href="#" title="Twitter" class="icon-social twitter" data-toggle="tooltip" data-placement="top"><i class="fa fa-twitter-square"></i></a>
								<a href="#" title="Facebook" class="icon-social facebook" data-toggle="tooltip" data-placement="top"><i class="fa fa-facebook-square"></i></a>
								<a href="#" title="Google+" class="icon-social google" data-toggle="tooltip" data-placement="top"><i class="fa fa-google-plus-square"></i></a>
								<a href="#" title="Pinterest" class="icon-social pinterest" data-toggle="tooltip" data-placement="top"><i class="fa fa-pinterest-square"></i></a>
								<a href="#" title="Youtube" class="icon-social youtube" data-toggle="tooltip" data-placement="top"><i class="fa fa-youtube-square"></i></a>
								<a href="#" title="Vimeo" class="icon-social vimeo" data-toggle="tooltip" data-placement="top"><i class="fa fa-vimeo-square"></i></a>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div-->    
    
    <script>
		var tada_index,tada_autosearchcomplete,tada_swiftype,tada_ads,tada_adsspeed,tada_slideshowtime,tada_block1gallery=false,tada_block1product=false, tada_newsletter=false;
		  tada_index=1;
		  tada_ads=1;
		  tada_adsspeed=5000;
		  tada_slideshowtime = 30000;
		  tada_block1gallery = true;
		  tada_block1product = true;
		  tada_newsletter = true;
    </script>
  
	<script src="/assets/assets/js/modernizr.min.js" type="text/javascript"></script>
	<script src="/assets/assets/js/timber.js" type="text/javascript"></script>
  
	<div id="quick-shop-modal" class="modal quick-shop" style="display:none;">
		<div class="modal-dialog fadeIn">
			<div class="modal-content">
				<div class="modal-body">
					<div class="quick-shop-modal-bg">
					</div>
					<div class="grid__item one-half qs-product-image">
						<div id="quick-shop-image" class="product-image-wrapper">
							<div id="featuted-image" class="main-image featured">
								<img class="img-zoom img-responsive image-fly" src="/assets/assets/images/demo1_qs_480x480.jpg" data-zoom-image="/assets/assets/images/demo1_qs_480x480.jpg" alt="">
							</div>
							<div class="vertical-slider product-single__thumbnails" style="opacity: 0;">
							</div>
						</div>
					</div>
					<div class="grid__item one-half qs-product-information">
						<div id="quick-shop-container">
							<h3 id="quick-shop-title"><a href="product.html">Corporis suscipit laboriosam</a></h3>
							<div class="rating-star">
								<span class="shopify-product-reviews-badge" data-id="3008529923"></span>
							</div>
							<div class="description">
								<div id="quick-shop-description" class="text-left">
									<p>
										Quisque vel enim quis purus ultrices consequat, sed tincidunt massa blandit ipsum interdum tristique cras dictum, lacus eu molestie elementum nulla est auctor. Etiam dan lorem quis ligula elementum porttitor quisem. Duis eget purus urna fusce sed scelerisque ante. Lorem ipsum dolor sit amet conse...
									</p>
								</div>
							</div>
							<form action="#" method="post" class="variants" id="AddToCartForm" enctype="multipart/form-data">
								<div id="quick-shop-price-container" class="detail-price">
									<span class="price"><span class="money">$89.00</span></span>
								</div>
								<div class="quantity-wrapper clearfix">
									<label class="wrapper-title">Quantity</label>
									<div class="wrapper">
										<span class="qty-down" title="Decrease" data-src="#qs-quantity">
										<i class="fa fa-minus"></i>
										</span>
										<input type="text" id="qs-quantity" size="5" class="item-quantity" name="quantity" value="1">
										<span class="qty-up" title="Increase" data-src="#qs-quantity">
										<i class="fa fa-plus"></i>
										</span>
									</div>
								</div>
								<div id="quick-shop-variants-container" class="variants-wrapper" style="display: block;">
									<div class="selector-wrapper">
										<label for="#quick-shop-variants-3008529731-option-0">Size</label>
										<select class="single-option-selector" data-option="option1" id="#quick-shop-variants-3008529731-option-0">
											<option value="XS">XS</option>
											<option value="S">S</option>
											<option value="M">M</option>
											<option value="L">L</option>
											<option value="XL">XL</option>
										</select>
									</div>
									<div class="selector-wrapper">
										<label for="#quick-shop-variants-3008529731-option-1">Color</label>
										<select class="single-option-selector" data-option="option2" id="#quick-shop-variants-3008529731-option-1">
											<option value="Black">Black</option>
											<option value="Red">Red</option>
											<option value="Green">Green</option>
											<option value="Blue">Blue</option>
											<option value="White">White</option>
										</select>
									</div>
								</div>
								<div class="others-bottom">
									<input id="AddToCart" class="btn btn-1 small add-to-cart" type="submit" name="add" value="Buy Now">
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript">	  
	  jQuery(document).ready(function($) {  
		if($('.quantity-wrapper').length){
		  $('.quantity-wrapper').on('click', '.qty-up', function() {
			var $this = $(this);
			var qty = $this.data('src');
			$(qty).val(parseInt($(qty).val()) + 1);
		  });
		  $('.quantity-wrapper').on('click', '.qty-down', function() {
			var $this = $(this);
			var qty = $this.data('src');
			if(parseInt($(qty).val()) > 1)
			  $(qty).val(parseInt($(qty).val()) - 1);
		  });
		}	 			 
	  });
	</script>
	
</body>
