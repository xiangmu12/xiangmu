		@include('layouts.qt._header')
		@include('layouts.qt._top')

		<main class="main-content">
			<div class="breadcrumb-wrapper">
				<nav class="breadcrumb" role="navigation" aria-label="breadcrumbs">
					<a href="index.html" title="Back to the frontpage">主页</a>
					<span aria-hidden="true">&rsaquo;</span>
					<span>今天的交易</span>
				</nav>
				<h1 class="section-header__title">今天的交易</h1>
			</div>

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
				@include('layouts.qt._floor')