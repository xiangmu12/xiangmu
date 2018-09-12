<<<<<<< HEAD

 <script src="/assets/assets/js/jquery.min.js" type="text/javascript"></script> 
    <script src="/assets/assets/js/jquery.fancybox.min.js" type="text/javascript"></script>
    <script src="/assets/assets/js/owl.carousel.min.js" type="text/javascript"></script>
    <script src="/assets/assets/js/jquery.tweet.min.js" type="text/javascript"></script>
    <script src="/assets/assets/js/jquery.optionSelect.js" type="text/javascript"></script>
    <script src="/assets/assets/js/jquery.flexslider-min.js" type="text/javascript"></script>

=======
 
>>>>>>> f515d93bac63fc8018c1e32082020092d3ce6499
 @include('layouts.qt._header') @show @include('layouts.qt._top') @show
 <link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdn.bootcss.com/holder/2.9.4/holder.min.js"></script>
 
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
                    <div class="sdcollections-content" >
                        <ul class="sdcollections-list" >
                            @foreach($dcate as $v)
                            <li class="sdc-element vetical-menu1 site-nav--has-dropdown" aria-haspopup="true">
                                <a href="/dcateall" class="site-nav__link">
                                    <div class="element-main">
                                        <div class="collection-icon">
                                            <img src="/assets/assets/images/book.png" alt="collection icon">
                                        </div>
                                        <div class="collection-area have-icons">
                                            <div class="collection-name" >
                                                {{$v['name']}} ({{$v->xcate->count()}})
                                            </div>
                                        </div>
                                    </div>
                                    <span class="icon icon-arrow-right" aria-hidden="true"></span>
                                </a>
                                <ul class="site-nav__dropdown vetical__dropdown vetical__dropdown1">
                                    <li class="nav-links nav-links01 grid__item large--one-half">
                                        <ul >
                                            @foreach($xcate as $value) @if($v['id'] == $value['dcate_id'])
                                            <li class="list-title"  style="float: left">
                                                {{$value['name']}} @foreach($xxcate as $val) @if($value['id'] == $val['xcate_id']) @if($v['id'] == $value['dcate_id'])
                                                <li class="list-unstyled nav-sub-mega" style="float: left">
                                                    <a href="/dcateall?xxcate_id={{$v->id}}" >
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
            
          <div class="container" style="width:900px;height:400px;margin-right:0px">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel" >
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>
            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox" style="width:872px;height:400px">
                <div class="item active">
                    <img src="{{$peizhi['pic1']}}" alt="狐狸王董事会.自小组成立以来团结合作,互利共赢共同营造美好的未来">
                    <div class="carousel-caption">
                    </div>
                </div>
                <div class="item">
                    <img src="{{$peizhi['pic1']}}" width="872" height="400" alt="...">
                    <div class="carousel-caption">
                    </div>
                </div>
                <div class="item">
                    <img src="{{$peizhi['pic1']}}" width="872" height="400" alt="...">
                    <div class="carousel-caption">
                    </div>
                </div>
            </div>
            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
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
                            <li class=""><a href="/dcateall">{{$value['name']}}</a></li>
                            @endif @endforeach
                            <li class="link-to"><a href="/dcateall">查看全部</a></li>
                        </ul>
                    </div>
                </div>
                <script src="/assets/assets/js/jquery.min.js" type="text/javascript"></script> 
    <script src="/assets/assets/js/jquery.fancybox.min.js" type="text/javascript"></script>
    <script src="/assets/assets/js/owl.carousel.min.js" type="text/javascript"></script>
    <script src="/assets/assets/js/jquery.tweet.min.js" type="text/javascript"></script>
    <script src="/assets/assets/js/jquery.optionSelect.js" type="text/javascript"></script>
    <script src="/assets/assets/js/jquery.flexslider-min.js" type="text/javascript"></script>
                <div class="bh-btm">
                    <div class="grid__item three-quarters bh-left small--one-whole medium--one-whole">

                        <div class="home-slideshow-block bh-slideshow">
                            <div class="home-gallery-slider">
                                
                                @foreach($v->xcate as $vxcate)
                                @foreach($vxcate->xxcate as $vxxcate)
                                @foreach($vxxcate->shangpin as $vvv)
                                <div><a href="/{{$vvv->id}}.html"><img src="{{$vvv['image']}}" alt="" width="880" height="285"></a></div>
                                @endforeach
                                @endforeach
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
                                                            <a class="wish-list btn" href="/shoucang?shangpin={{$va['id']}}&user={{session('id')}}"><i class="fa fa-heart" title="Wishlist"></i></a>
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
                                        @foreach($v->logo as $vlogo)
										<li class="">
											<a href="collection.html"><img src="{{$vlogo->image}}" alt="" width="70"></a>
										</li>   
                                         @endforeach
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
