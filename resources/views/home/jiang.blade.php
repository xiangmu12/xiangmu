
@include('layouts.qt._header')
		@show
		@include('layouts.qt._top')
		@show

		<!-- Main Header -->
		




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
												<form action="/dingdan/{{$shangpin[0]['id']}}" method="get" enctype="multipart/form-data" id="AddToCartForm" class="form-vertical">					{{csrf_field()}}		
													<div class="effect-ajax-cart">
														<input type="hidden" name="quantity" value="1">
														<a href="/dingdan/{{$v['id']}}" name="add" id="AddToCart" class="btn btn-1 add-to-cart" title="立即购买">
															<span id="AddToCartText"><i class="fa fa-shopping-cart"></i>立即购买</span>
														</a>
													</div>
												</form>
											</li>
											<li class="wishlist">
												<a class="wish-list btn" href="/shoucang?shangpin={{$v['id']}}&user={{session('id')}}"><i class="fa fa-heart" title="Wishlist"></i></a>
											</li>
											
										</ul>
									</div>
								</div> 
								@endforeach

								


							</div>
						</div>
					</main>
				@include('layouts.qt._floor')