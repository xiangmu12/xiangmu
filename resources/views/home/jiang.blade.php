@include('layouts.qt._header')
		@show
		@include('layouts.qt._top')
		@show

		<!-- Main Header -->
		

		<!-- Navigation Bar -->
		   <!-- Main Content -->

		<main class="main-content">
			
			<div class="wrapper">
				<div class="grid">
					<div class="grid__item">
						<div class="page-content">      
							<div class="sale-products grid-uniform-category">
								@foreach($sps as $v)
								<div class="grid__item large--one-fifth medium--one-quarter">
									<div class="grid__item_wrapper">
										<div class="grid__image product-image">
											<input type="hidden" name="id" value="{{$v['id']}}">
											<a href="/{{$v['id']}}.html">
												<img src="{{$v['image']}}" alt="Demo Product Sample">
											</a>
											<span class="sale-icon">20%</span>
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
										<div class="rating-star">
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
										</div>
										<p class="h6 product-title">
											<a href="product.html">演示产品样本</a>
										</p>
										<p class="product-price">
											<strong>On Sale</strong>
											<span class="money" data-currency-usd="$19.99">{{$v['money']}}</span>
											<span class="visually-hidden">Regular price</span>
											<s><span class="money" data-currency-usd="$24.99">$24.99</span></s>
										</p>
										<div class="list-mode-description">
											{{$v['intro']}}
										</div>
										<ul class="action-button">
											<li class="add-to-cart-form">
												<form action="/gou/{{$v['id']}}/gou" method="get" enctype="multipart/form-data" id="AddToCartForm" class="form-vertical">					{{csrf_field()}}		
													<div class="effect-ajax-cart">
														<input type="hidden" name="quantity" value="1">
														<button type="submit" name="add" id="AddToCart" class="btn btn-1 add-to-cart" title="立即购买">
															<span id="AddToCartText"><i class="fa fa-shopping-cart"></i>立即购买</span>
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
										</ul>
									</div>
								</div> 
								@endforeach

								


							</div>
						</div>
					</main>
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
												<li><a href="#">abc</a></li>
												<li><a href="#">bootstrap</a></li>
												<li><a href="#">cell phone</a></li>
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
											© 2015 Home Market Red. All rights Reserved
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
