		@include('layouts.qt._header')
		@show
		@include('layouts.qt._top')
		@show
    
		<main class="main-content">
			<div class="breadcrumb-wrapper">
				<nav class="breadcrumb" role="navigation" aria-label="breadcrumbs">
					<a href="index.html" title="Back to the frontpage">Home</a>
					<span aria-hidden="true">&rsaquo;</span>
					<span>Collection Page</span>
				</nav>
				<h1 class="section-header__title">Collection Page</h1>
			</div>
			<div class="wrapper">
				<div id="filter-loading" style="display:none">
					<img src="/assets/assets/images/gears.svg" alt="filter loading">
				</div>
				<div class="grid--rev" id="collection">
					<div class="grid__item large--three-quarters">
						<header class="section-header section-grid">
							<div class="section-header__right section-sorting">
								<div class="form-horizontal">
									<label for="SortBy">Sort by</label>
									<select name="SortBy" id="SortBy">
										<option value="manual">Featured</option>
										<option value="best-selling">Best Selling</option>
										<option value="title-ascending">Alphabetically, A-Z</option>
										<option value="title-descending">Alphabetically, Z-A</option>
										<option value="price-ascending">Price, low to high</option>
										<option value="price-descending">Price, high to low</option>
										<option value="created-descending">Date, new to old</option>
										<option value="created-ascending">Date, old to new</option>
									</select>
								</div>
								<div class="collection-view">
									<button type="button" title="Grid view" class="grid-button change-view change-view--active" data-view="grid">
									<span class="icon-fallback-text">
									<span class="icon icon-grid-view" aria-hidden="true"></span>
									<span class="fallback-text">Grid view</span>
									</span>
									</button>
									<button type="button" title="List view" class="list-button change-view " data-view="list">
									<span class="icon-fallback-text">
									<span class="icon icon-list-view" aria-hidden="true"></span>
									<span class="fallback-text">List view</span>
									</span>
									</button>
								</div>
							</div>
						</header>
						<div class="grid-uniform grid-uniform-category ">
							@foreach($shangpin as $v)
											<div class="grid__item large--one-quarter medium--one-half">
												<div class="grid__item_wrapper">
													<div class="grid__image product-image">
														<a href="/{{$v['id']}}.html">
															<img src="{{$v['image']}}" alt="Demo Product Sample">
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
														<a href="product.html">{{$v['intro']}}~ 
														@if($v['cheng'] == 0) 全新 @else 非全新 @endif</a>
													</p>
													<p class="product-price">
														<strong>On Sale</strong>
														<span class="money" data-currency-usd="$19.99">${{$v['money']}}</span>
														<span class="visually-hidden">Regular price</span>
														<s><span class="money" data-currency-usd="$24.99">${{$v['money']}}</span></s>
													</p>
													<div class="list-mode-description">
														Quisque vel enim quis purus ultrices consequat, sed tincidunt massa blandit ipsum interdum tristique cras dictum, lacus eu molestie elementum nulla est auctor. Etiam dan lorem quis ligula elementum porttitor quisem. Duis eget purus urna fusce sed scelerisque ante. Lorem ipsum dolor sit amet consectetur...
													</div>
													<ul class="action-button">
														<li class="add-to-cart-form">
															<form action="#" method="post" enctype="multipart/form-data" id="AddToCartForm" class="form-vertical">							
																<div class="effect-ajax-cart">
																	<input type="hidden" name="quantity" value="1">
																	<button type="submit" name="add" id="AddToCart" class="btn btn-1 add-to-cart" title="Buy Now">
																		<span id="AddToCartText"><i class="fa fa-shopping-cart"></i> Buy Now</span>
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
					<div class="grid__item large--one-quarter">
						<div class="group_sidebar">
							<div class="sb-wrapper all-collections-wrapper clearfix" data-animate="" data-delay="0">
								<h6 class="sb-title">All Categories</h6>
								<ul class="list-unstyled sb-content all-collections list-styled">@foreach($xxcate as $v)
									<li>
										
									<a href="/dcateall?xxcate_id={{$v->id}}"><span><i class="fa fa-angle-right"></i>{{$v['name']}}</span><span class="collection-count">({{$v->shangpin->count()}}) </span></a>
									</li>
										@endforeach
								</ul>
							</div>
							<div class="sb-wrapper shop-by" data-animate="" data-delay="0">
								<h6 class="sb-title">Shop By</h6>
								<div class="shop-by-content" id="tags-filter-content">
									<div class="filter-tag-group">	
										<div class="tag-group" id="coll-filter-4">
											<p class="title cfc4" data-toggle="collapse" data-target="#cfc4">
												Color<span class="ficon"><i class="fa fa-minus"></i></span>
											</p>
											<ul id="cfc4" class="collapse in color_filter">
												<li class="swatch-tag "><span style="background-color: red; background-image: url('/assets/assets/images/red.png');"><a href="collection.html"></a></span></li>
												<li class="swatch-tag "><span style="background-color: blue; background-image: url('/assets/assets/images/blue.png');"><a href="collection.html"></a></span></li>
												<li class="swatch-tag white-color"><span style="background-color: white; background-image: url('/assets/assets/images/white.png');"><a href="collection.html"></a></span></li>
												<li class="swatch-tag "><span style="background-color: blue; background-image: url('/assets/assets/images/blue.png');"><a href="collection.html"></a></span></li>
												<li class="swatch-tag "><span style="background-color: yellow; background-image: url('/assets/assets/images/yellow.png');"><a href="collection.html"></a></span></li>
											</ul>
										</div>									
										<div class="tag-group" id="coll-filter-1">
											<p class="title cfc1" data-toggle="collapse" data-target="#cfc1">
												Price<span class="ficon"><i class="fa fa-minus"></i></span>
											</p>
											<ul id="cfc1" class="collapse in">
												<li><a href="collection.html"><span class="fe-checkbox"></span> Under 100</a></li>
												<li><a href="collection.html"><span class="fe-checkbox"></span> 100 - 200</a></li>
												<li><a href="collection.html"><span class="fe-checkbox"></span> 200 - 300</a></li>
												<li><a href="collection.html"><span class="fe-checkbox"></span> 300 - 400</a></li>
												<li><a href="collection.html"><span class="fe-checkbox"></span> 400 - 500</a></li>
											</ul>
										</div>										
										<div class="tag-group" id="coll-filter-2">
											<p class="title cfc2" data-toggle="collapse" data-target="#cfc2">
												Brands<span class="ficon"><i class="fa fa-minus"></i></span>
											</p>
											<ul id="cfc2" class="collapse in">
												<li><a href="collection.html"><span class="fe-checkbox"></span> Omega</a></li>
												<li><a href="collection.html"><span class="fe-checkbox"></span> Gucci</a></li>
												<li><a href="collection.html"><span class="fe-checkbox"></span> Tissot</a></li>
												<li><a href="collection.html"><span class="fe-checkbox"></span> Hamilton</a></li>
												<li><a href="collection.html"><span class="fe-checkbox"></span> BB</a></li>
											</ul>
										</div>										
										<div class="tag-group" id="coll-filter-3">
											<p class="title cfc3" data-toggle="collapse" data-target="#cfc3">
												Type<span class="ficon"><i class="fa fa-minus"></i></span>
											</p>
											<ul id="cfc3" class="collapse in">
												<li><a href="collection.html"><span class="fe-checkbox"></span> Skin Care</a></li>
												<li><a href="collection.html"><span class="fe-checkbox"></span> Mackup</a></li>
												<li><a href="collection.html"><span class="fe-checkbox"></span> Body Care</a></li>
												<li><a href="collection.html"><span class="fe-checkbox"></span> Hair Care</a></li>
												<li><a href="collection.html"><span class="fe-checkbox"></span> Perfumes</a></li>
											</ul>
										</div>										
									</div>	
									<script>
										$(function () {
										  $("#cfc1").on("hide.bs.collapse", function(){
											$(".cfc1 span").html('<i class="fa fa-plus"></i>');
										  });
										  $("#cfc1").on("show.bs.collapse", function(){
											$(".cfc1 span").html('<i class="fa fa-minus"></i>');
										  });
										  $("#cfc2").on("hide.bs.collapse", function(){
											$(".cfc2 span").html('<i class="fa fa-plus"></i>');
										  });
										  $("#cfc2").on("show.bs.collapse", function(){
											$(".cfc2 span").html('<i class="fa fa-minus"></i>');
										  });
										  $("#cfc3").on("hide.bs.collapse", function(){
											$(".cfc3 span").html('<i class="fa fa-plus"></i>');
										  });
										  $("#cfc3").on("show.bs.collapse", function(){
											$(".cfc3 span").html('<i class="fa fa-minus"></i>');
										  });
										  $("#cfc4").on("hide.bs.collapse", function(){
											$(".cfc4 span").html('<i class="fa fa-plus"></i>');
										  });
										  $("#cfc4").on("show.bs.collapse", function(){
											$(".cfc4 span").html('<i class="fa fa-minus"></i>');
										  }); 
										  
										  $(".tag-group .title").click(function(){
											$(this).toggleClass("open");
										  });
										});
									  </script>									
								</div>
							</div>
							<div class="sb-wrapper featured-product-wrapper clearfix" data-animate="" data-delay="0">
								<div class="featured-product">
									<h6 class="sb-title">Weekly Top Sellers</h6>
									<div class="sb-content featured-product-content">
										<div class="element full_width" data-animate="fadeInUp" data-delay="0">
											<div class="grid__item large--one-quarter medium--one-half">
												<div class="grid__item_wrapper">
													<div class="grid__image product-image">
														<a href="product.html" class="grid__image product-image">
														<img src="/assets/assets/images/demo1_qs1_100x100.jpg" alt="Consequuntur magni dolores">
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
													<div class="rating-star">
														<span class="spr-badge" id="spr_badge_3008529987" data-rating="4.0">
														<span class="spr-starrating spr-badge-starrating"><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i></span>
														<span class="spr-badge-caption">
														1 review </span>
														</span>
													</div>
													<p class="h6 product-title">
														<a href="product.html">Demo Product Sample</a>
													</p>
													<p class="product-price">
														<strong>On Sale</strong>
														<span class="money" data-currency-usd="$19.99">$19.99</span>
														<span class="visually-hidden">Regular price</span>
														<s><span class="money" data-currency-usd="$24.99">$24.99</span></s>
													</p>
													<div class="list-mode-description">
														 Quisque vel enim quis purus ultrices consequat, sed tincidunt massa blandit ipsum interdum tristique cras dictum, lacus eu molestie elementum nulla est auctor. Etiam dan lorem quis ligula elementum porttitor quisem. Duis eget purus urna fusce sed scelerisque ante. Lorem ipsum dolor sit amet consectetur...
													</div>
													<ul class="action-button">
														<li class="add-to-cart-form">
														<form action="#" method="post" enctype="multipart/form-data" id="AddToCartForm" class="form-vertical">			
															<div class="effect-ajax-cart">
																<input type="hidden" name="quantity" value="1">
																<button type="submit" name="add" id="AddToCart" class="btn btn-1 add-to-cart" title="Buy Now"><span id="AddToCartText"><i class="fa fa-shopping-cart"></i> Buy Now</span></button>
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
										</div>
										<div class="element full_width" data-animate="fadeInUp" data-delay="100">
											<div class="grid__item large--one-quarter medium--one-half">
												<div class="grid__item_wrapper">
													<div class="grid__image product-image">
														<a href="product.html" class="grid__image product-image">
														<img src="/assets/assets/images/demo1_qs2_100x100.jpg" alt="Corporis suscipit laboriosam">
														</a>
														<div class="quickview">
															<div class="product-ajax-cart hidden-xs hidden-sm">
																<div data-handle="corporis-suscipit-laboriosam" class="quick_shop-div">
																	<a href="#quick-shop-modal" class="btn quick_shop">
																	<i class="fa fa-eye" title="Quick View"></i>
																	
																	</a>
																</div>
															</div>
														</div>
													</div>
													<div class="rating-star">
														<span class="spr-badge" id="spr_badge_3008529923" data-rating="0.0">
														<span class="spr-starrating spr-badge-starrating"><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i></span>
														<span class="spr-badge-caption">
														No reviews </span>
														</span>
													</div>
													<p class="h6 product-title">
														<a href="product.html">Demo Product Sample</a>
													</p>
													<p class="product-price">
														<span class="money" data-currency-usd="$89.00">$89.00</span>
													</p>
													<div class="list-mode-description">
														 Quisque vel enim quis purus ultrices consequat, sed tincidunt massa blandit ipsum interdum tristique cras dictum, lacus eu molestie elementum nulla est auctor. Etiam dan lorem quis ligula elementum porttitor quisem. Duis eget purus urna fusce sed scelerisque ante. Lorem ipsum dolor sit amet consectetur...
													</div>
													<ul class="action-button">
														<li class="add-to-cart-form">
														<form action="#" method="post" enctype="multipart/form-data" id="AddToCartForm" class="form-vertical">
															<div class="effect-ajax-cart">
																<input type="hidden" name="quantity" value="1">
																<button type="submit" name="add" id="AddToCart" class="btn btn-1 add-to-cart" title="Buy Now"><span id="AddToCartText"><i class="fa fa-shopping-cart"></i> Buy Now</span></button>
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
										</div>
										<div class="element full_width" data-animate="fadeInUp" data-delay="200">
											<div class="grid__item large--one-quarter medium--one-half">
												<div class="grid__item_wrapper">
													<div class="grid__image product-image">
														<a href="product.html" class="grid__image product-image">
														<img src="/assets/assets/images/demo1_qs3_100x100.jpg" alt="Cras in nunc ipsum">
														</a>
														<div class="quickview">
															<div class="product-ajax-cart hidden-xs hidden-sm">
																<div data-handle="cras-in-nunc-non-ipsum-duo-cursus-ultrices" class="quick_shop-div">
																	<a href="#quick-shop-modal" class="btn quick_shop">
																	<i class="fa fa-eye" title="Quick View"></i>																	
																	</a>
																</div>
															</div>
														</div>
													</div>
													<div class="rating-star">
														<span class="spr-badge" id="spr_badge_3008529731" data-rating="5.0">
														<span class="spr-starrating spr-badge-starrating"><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i><i class="spr-icon spr-icon-star" style=""></i></span>
														<span class="spr-badge-caption">
														1 review </span>
														</span>
													</div>
													<p class="h6 product-title">
														<a href="http://demo.tadathemes.com/products/cras-in-nunc-non-ipsum-duo-cursus-ultrices">Demo Product Sample</a>
													</p>
													<p class="product-price">
														<strong>On Sale</strong> from <span class="money" data-currency-usd="$19.99">$19.99</span>
														<span class="visually-hidden">Regular price</span>
														<s><span class="money" data-currency-usd="$24.99">$24.99</span></s>
													</p>
													<div class="list-mode-description">
														 Quisque vel enim quis purus ultrices consequat, sed tincidunt massa blandit ipsum interdum tristique cras dictum, lacus eu molestie elementum nulla est auctor. Etiam dan lorem quis ligula elementum porttitor quisem. Duis eget purus urna fusce sed scelerisque ante. Lorem ipsum dolor sit amet consectetur...
													</div>
													<ul class="action-button">
														<li class="add-to-cart-form">
														<form action="#" method="post" enctype="multipart/form-data" id="AddToCartForm" class="form-vertical">
															<div class="effect-ajax-cart">
																<input type="hidden" name="quantity" value="1">
																<button class="btn btn-1 select-option" type="button" title="Select Options"><i class="fa fa-bars"></i> Options</button>
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
										</div>
									</div>
								</div>
							</div>
							<div class="sb-wrapper slider-banner-wrapper clearfix" data-animate="" data-delay="0">
								<img src="/assets/assets/images/sb-banner.png" alt="">
							</div>
						</div>
					</div>
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
							<div id="gallery_main_qs" class="product-image-thumb scroll scroll-mini">
								<div class="qs-vertical-slider product-single__thumbnails">
										<a class="image-thumb active thumb__element"><img src="/assets/assets/images/demo1_qs1_100x100.jpg" alt="" /></a>
										<a class="image-thumb thumb__element"><img src="/assets/assets/images/demo1_qs2_100x100.jpg" alt="" /></a>
										<a class="image-thumb thumb__element"><img src="/assets/assets/images/demo1_qs3_100x100.jpg" alt="" /></a>
										<a class="image-thumb thumb__element"><img src="/assets/assets/images/demo1_qs4_100x100.jpg" alt="" /></a>
										<a class="image-thumb thumb__element"><img src="/assets/assets/images/demo1_qs5_100x100.jpg" alt="" /></a>										
								</div>
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
