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
									<label for="SortBy"></label>
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
							<div class="sb-wrapper shop-by" data-animate="" data-delay="0" >
								<h6 class="sb-title">Shop By</h6>
								<div class="shop-by-content" id="tags-filter-content" >
									<div class="filter-tag-group" >	
											<ul id="cfc1" class="collapse in" >
												@foreach($tags as $v)
												<li><a href="/dcateall?tag_id={{$v['id']}}" ><span class="fe-checkbox"></span>{{$v['name']}}</a></li>
												@endforeach
											</ul>
																	
										</div>					
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
		@include('layouts.qt._floor')