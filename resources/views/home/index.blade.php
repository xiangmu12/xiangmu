
 @include('layouts.qt._header') @show @include('layouts.qt._top') @show
<main class="main-content">
    <div></div>
    @foreach($gg as $v)
    <div  id="guanle" class="guanle" style="float:right;position:fixed;left:50px;width:200px;"><img src="{{$v['image']}}"><button id="guanbi" class="guanbi" style="float:right;font-size:10px;color:#aaa">X关闭</button></div>
    @endforeach
    <script>
        $('.guanbi').click(function(){
            $('.guanle').css('display','none')
        });
    </script>
    <div class="wrapper">
         <div id="top-home-blocks" class="grid--full grid--table">
            <div class="grid__item one-quarter shop-by-collections medium-down--hide">
                <div class="sidebar-collections">
                    <div class="sdcollections-title sb-title">
                        <i class="fa fa-list"></i>
                        <span>主题市场</span>
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
                                            @foreach($xcate as $value) @if($v['id'] == $value['dcate_id'])
                                            <li class="list-title">
                                                {{$value['name']}} @foreach($xxcate as $val) @if($value['id'] == $val['xcate_id']) @if($v['id'] == $value['dcate_id'])
                                                <li class="list-unstyled nav-sub-mega">
                                                    <a href="collection.html">
																				{{$val['name']}}
																		</a>
                                                </li>
                                                @endif @endif @endforeach
                                            </li>
                                            @endif @endforeach
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
                            @foreach($xcate as $value) @if($v['id'] == $value['dcate_id'])
                            <li class=""><a href="/cate/{{$v->id}}">{{$value['name']}}</a></li>
                            @endif @endforeach
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
                                    @foreach($shangpin as $va) @foreach($xcate as $vx) @foreach($xxcate as $vxx) @if($v['id'] == $vx['dcate_id']) @if($vx['id'] == $vxx['xcate_id']) @if($va['xxcate_id'] == $vxx['id'])
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

		@include('layouts.qt._floor')
