			@include('layouts.qt._header')
		@show
		@include('layouts.qt._top')
		@show
    
		<main class="main-content">
			<div class="breadcrumb-wrapper">
				<nav class="breadcrumb" role="navigation" aria-label="breadcrumbs">
					<a href="/" title="Back to the frontpage">首页</a>
					<span aria-hidden="true">&rsaquo;</span>
					<span>分类页面</span>
				</nav>
				<h1 class="section-header__title">分类页面</h1>
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
																<div id="asd" data-handle="consequuntur-magni-dolores" class="tan quick_shop-div">
																	<a  href="#" class="btn quick_shop">
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
																	<a href="/dingdan/{{$v['id']}}" name="add" id="AddToCart" class="btn btn-1 add-to-cart" title="Buy Now">
																		<span id="AddToCartText"><i class="fa fa-shopping-cart"></i>购买</span>
																	</a>
																</div>
															</form>
														</li>
														<li class="wishlist">
															<a class="wish-list btn" href="/shoucang?shangpin={{$v['id']}}&user={{session('id')}}"><i class="fa fa-heart" title="Wishlist"></i></a>
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
								<h6 class="sb-title">所有分类</h6>
								<ul class="list-unstyled sb-content all-collections list-styled">@foreach($xxcate as $v)
									<li>
										
									<a href="/dcateall?xxcate_id={{$v->id}}"><span><i class="fa fa-angle-right"></i>{{$v['name']}}</span><span class="collection-count">({{$v->shangpin->count()}}) </span></a>
									</li>
										@endforeach
								</ul>
							</div>
							<div class="sb-wrapper shop-by" data-animate="" data-delay="0" >
								<h6 class="sb-title">标签展示</h6>
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
							
						</div>
					</div>
				</div>
			</div>
		</main>
		@include('layouts.qt._floor')