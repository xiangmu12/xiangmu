	@include('layouts.qt._header')
		@show
		@include('layouts.qt._top')
		@show
    
		<main class="main-content">
			<div class="breadcrumb-wrapper">
				<nav class="breadcrumb" role="navigation" aria-label="breadcrumbs">
					<a href="/" title="Back to the frontpage">首页</a>
					<span aria-hidden="true">&rsaquo;</span>
					<span>商品详情页</span>
				</nav>
				<h1 class="section-header__title">商品详情页</h1>
			</div>
			<div class="wrapper">
				<div class="grid--rev">
					<div class="grid__item">
						<div itemscope="" itemtype="http://schema.org/Product">
							<div class="product-single">
								<div class="grid__item large--one-half text-center">
									<div class="product-single__photos" id="ProductPhoto">
										<img src="{{$shangpin[0]['image']}}" alt="Corporis suscipit laboriosam" id="ProductPhotoImg" data-image-id="7500291971" height="500" width="500">
									</div>
									<!-- 商品图片 -->
									<!-- <ul class="product-single__thumbnails grid-uniform" id="ProductThumbs">
										<li class="thumb__element">
											<a href="/assets/assets/images/demo1_detail1_135x135.jpg" class="product-single__thumbnail">
												<img src="/assets/assets/images/demo1_detail1_135x135.jpg" alt="Corporis suscipit laboriosam">
											</a>
										</li>
										<li class="thumb__element">
											<a href="/assets/assets/images/demo1_detail2_135x135.jpg" class="product-single__thumbnail">
												<img src="/assets/assets/images/demo1_detail2_135x135.jpg" alt="Corporis suscipit laboriosam">
											</a>
										</li>
										<li class="thumb__element">
											<a href="/assets/assets/images/demo1_detail3_135x135.jpg" class="product-single__thumbnail">
												<img src="/assets/assets/images/demo1_detail3_135x135.jpg" alt="Corporis suscipit laboriosam">
											</a>
										</li>
										<li class="thumb__element">
											<a href="/assets/assets/images/demo1_detail4_135x135.jpg" class="product-single__thumbnail">
												<img src="/assets/assets/images/demo1_detail4_135x135.jpg" alt="Corporis suscipit laboriosam">
											</a>
										</li>
										<li class="thumb__element">
											<a href="/assets/assets/images/demo1_detail5_135x135.jpg" class="product-single__thumbnail">
												<img src="/assets/assets/images/demo1_detail5_135x135.jpg" alt="Corporis suscipit laboriosam">
											</a>
										</li>										
									</ul> -->
								</div>
								<div class="grid__item large--one-half">
									<div class="product-info-left grid__item five-eighths">
										<h1 itemprop="name">商品详情</h1>
										<div class="rating-star">
											<span class="spr-badge" id="spr_badge_3008529923" data-rating="0.0">
											<span class="spr-starrating spr-badge-starrating"><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i></span>
											<span class="spr-badge-caption">
											No reviews </span>
											</span>
										</div>
										<div class="product-description" itemprop="description">
											<h4>商品简介</h4>
											{{$shangpin[0]['intro']}}
										</div>
										<div class="product-vendor">
											商品所有者: <b>{{$shangpin[0]->user['name']}}</b>
										</div>
										<div class="product-type">
											商品类型: <b>{{$shangpin[0]->xxcate['name']}}</b>
										</div>
										<div itemprop="offers" itemscope="" itemtype="http://schema.org/Offer">
											<meta itemprop="priceCurrency" content="USD">
											<link itemprop="availability" href="http://schema.org/InStock">
											<div class="product-action ">
												<form action="#" method="post" enctype="multipart/form-data" id="AddToCartForm" class="form-vertical">
													<div class="selector-wrapper">
														商品地址: <b>{{$shangpin[0]['quyu']}}</b>
													</div>
													<div class="selector-wrapper">
														成色: <b>@if ($shangpin[0]['cheng'] == 0 )全新 @else 非全新@endif</b>
													</div>
													<select name="id" id="productSelect" class="product-single__variants hide" style="display: none;">
														<option selected="selected" data-sku="" value="8772462979">XS / Black - $89.00 USD</option>
													</select>
													<hr>
													<span class="visually-hidden">Regular price</span>
													<span id="ProductPrice" class="" itemprop="price"><span class="money" data-currency-usd="$89.00 USD" data-currency="USD">${{$shangpin[0]['money']}}</span></span>
													<button type="submit" name="addche" id="AddToCart" class="btn">
													<span id="AddToCartText">加入购物车</span>
													</button>
													<a href="/dingdan/{{$shangpin[0]['id']}}" type="submit" name="add" id="AddToCart" class="btn">
													<span id="AddToCartText">立即购买</span>
													</a>
												</form>
												<div class="add-to-wishlist">
													<span class="non-user" data-toggle="tooltip" data-placement="right" title="To use the Wish-list, you must Login or Register"><a href="http://demo.tadathemes.com/account/login"><i class="fa fa-heart"></i>加入到愿望清单</a></span>
												</div>
											</div>
										</div>
			<!-- 分享 -->
									</div>
									<div class="grid__item product-info-right three-eighths">
										<div class="product-extrainfo">
											<ul>
												<li><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-shield fa-stack-1x fa-inverse"></i></span><span class="detail_more_info">保证<span class="sub">质量检查</span></span></li>
												<li><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-truck fa-stack-1x fa-inverse"></i></span><span class="detail_more_info">所有产品<span class="sub">免费送货</span></span></li>
												<li><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-gift fa-stack-1x fa-inverse"></i></span><span class="detail_more_info">特价礼品卡<span class="sub">特价礼品卡</span></span></li>
												<li><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-reply fa-stack-1x fa-inverse"></i></span><span class="detail_more_info">7天内<span class="sub"> 免费退货</span></span></li>
												<li><span class="fa-stack fa-lg"><i class="fa fa-circle fa-stack-2x"></i><i class="fa fa-tty fa-stack-1x fa-inverse"></i></span><span class="detail_more_info">咨询<span class="sub">终身:13273131465</span></span></li>
											</ul>
										</div>
									</div>
									<div class="next-prev-button">
									</div>
								</div>
							</div>
							<div class="product-information">
								<div id="tabs-information">
									<ul class="nav nav-tabs tabs-left sideways">
										<li class="description"><a href="#desc" data-toggle="tab" class="active">描述</a></li>
										<li class="warranty"><a href="#size" data-toggle="tab">保证</a></li>
										<li class="delivery"><a href="#delivery" data-toggle="tab">交货</a></li>
										<li class="payment"><a href="#payment" data-toggle="tab">付款</a></li>
										<li class="reviews"><a href="#customerreview" data-toggle="tab">客户评论</a></li>
									</ul>
									<div class="tab-panel active" id="desc">
										<p>
											Quisque vel enim quis purus ultrices consequat, sed tincidunt massa blandit ipsum interdum tristique cras dictum, lacus eu molestie elementum nulla est auctor. Etiam dan lorem quis ligula elementum porttitor quisem. Duis eget purus urna fusce sed scelerisque ante. Lorem ipsum dolor sit amet consectetur adipiscing elitos.X
										</p>
									</div>
									<div class="tab-panel fade " id="size">
										<h2>保修信息</h2>
										<p>
											有限担保
有限保修不可转让。以下有限保证给予以下Ashley Furniture Industries，Inc。的原始零售购买者。产品：

用于软垫和皮革制品的框架
有限终身保修
有限终身保修适用于沙发，沙发，爱情座椅，软垫椅子，沙发椅，滑雪板和枕木中使用的所有框架。Ashley Furniture Industries，Inc。向原始零售购买者保证这些组件不会出现材料制造缺陷。
										</p>
										<p>
											Frames Used In Upholstered and Leather Products<br>
											Limited Lifetime Warranty<br>
											 A Limited Lifetime Warranty applies to all frames used in sofas, couches, love seats, upholstered chairs, ottomans, sectionals, and sleepers. Ashley Furniture Industries,Inc. warrants these components to you, the original retail purchaser, to be free from material manufacturing defects.
										</p>
									</div>
									<div class="tab-panel fade " id="delivery">
										<h2>运输与交付</h2>
		在您购买之前，了解您计划放置家具的区域的尺寸是有帮助的。您还应该测量家具通过的任何门道和走廊，以便到达最终目的地。
										<h5>运输</h5>
										 Shopify Shop要求所有产品在您带回家之前都要经过适当的检查，以确保没有任何意外。我们的团队很乐意打开所有包裹并协助检查过程。然后，我们将重新封装安全运输包裹。我们鼓励所有客户携带家具垫或毯子，以便在运输过程中保护物品以及绳索或系带。Shopify Shop对于离开商店或运输途中发生的损坏不承担任何责任。购买者有责任确保拾取正确的物品并保持良好状态。
										<h5>交付</h5>
										 客户可以选择最适合其日程安排的下一个可用交付日。但是，为了尽可能有效地路线停靠，Shopify Shop将提供时间范围。客户将无法选择时间。我们会在您预定的时间范围之前通知您。请确保当时有责任的成年人（18岁或以上）回家。
在准备交付时，请移除现有的家具，图片，镜子，配件等，以防止损坏。同时确保您希望放置家具的区域没有任何旧家具和任何其他可能妨碍交付团队通道的物品。Shopify Shop将提供，组装和设置您购买的新家具，并从您家中取出所有包装材料。我们的送货工作人员不得移动您现有的家具或其他家居用品。送货人员将尝试以安全和受控的方式交付所购买的物品，但如果他们认为会损坏产品或家庭，则不会尝试放置家具。送货人员无法移除门，提升家具或携带超过3层楼梯的家具。
									</div>
									<div class="tab-panel fade " id="payment">
										<h2>支付信息</h2>
										每周用一次水浸湿的布擦拭或擦拭干净。切勿在表面留下水渍。这些水斑会变干，可能留下永久的痕迹。



清洁污渍/斑点使用以下步骤：用湿法和液体洗碗洗涤剂混合一块柔软的布。尽可能多地拧碎布以除去多余的液体。以圆周运动轻轻地摩擦表面。用干净、柔软的毛巾立即擦干表面。
									</div>
									<div class="tab-panel fade " id="customerreview">
										<div id="shopify-product-reviews" data-id="3008529923">
											<div class="spr-container">
												<div class="spr-header">
													<h2 class="spr-header-title">Customer Reviews</h2>
													<div class="spr-summary" itemscope="" itemtype="http://data-vocabulary.org/Review-aggregate">
														<meta itemprop="itemreviewed" content="Corporis suscipit laboriosam">
														<meta itemprop="votes" content="0">
														<span itemprop="rating" itemscope="" itemtype="http://data-vocabulary.org/Rating" class="spr-starrating spr-summary-starrating">
														<meta itemprop="average" content="0.0">
														<meta itemprop="best" content="5">
														<meta itemprop="worst" content="1">
														<i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i><i class="spr-icon spr-icon-star-empty" style=""></i>
														</span>
														<span class="spr-summary-caption">
														No reviews yet </span>
														<span class="spr-summary-actions">
														<a href="#" class="spr-summary-actions-newreview" onclick="SPR.toggleForm(3008529923);return false">Write a review</a>
														</span>
													</div>
												</div>
												<div class="spr-content">
													<div class="spr-form" id="form_3008529923" style="">
														<form method="post" action="#" id="new-review-form_3008529923" class="new-review-form" onsubmit="SPR.submitForm(this);return false;">
															<input type="hidden" name="review[rating]"><input type="hidden" name="product_id" value="3008529923">
															<h3 class="spr-form-title">Write a review</h3>
															<fieldset class="spr-form-contact">
																<div class="spr-form-contact-name">
																	<label class="spr-form-label" for="review_author_3008529923">Name</label>
																	<input class="spr-form-input spr-form-input-text " id="review_author_3008529923" type="text" name="review[author]" value="" placeholder="Enter your name">
																</div>
																<div class="spr-form-contact-email">
																	<label class="spr-form-label" for="review_email_3008529923">Email</label>
																	<input class="spr-form-input spr-form-input-email " id="review_email_3008529923" type="email" name="review[email]" value="" placeholder="john.smith@example.com">
																</div>
															</fieldset>
															<fieldset class="spr-form-review">
																<div class="spr-form-review-rating">
																	<label class="spr-form-label" for="review[rating]">Rating</label>
																	<div class="spr-form-input spr-starrating ">
																		<a href="#" onclick="SPR.setRating(this);return false;" class="spr-icon spr-icon-star spr-icon-star-empty" data-value="1">&nbsp;</a>
																		<a href="#" onclick="SPR.setRating(this);return false;" class="spr-icon spr-icon-star spr-icon-star-empty" data-value="2">&nbsp;</a>
																		<a href="#" onclick="SPR.setRating(this);return false;" class="spr-icon spr-icon-star spr-icon-star-empty" data-value="3">&nbsp;</a>
																		<a href="#" onclick="SPR.setRating(this);return false;" class="spr-icon spr-icon-star spr-icon-star-empty" data-value="4">&nbsp;</a>
																		<a href="#" onclick="SPR.setRating(this);return false;" class="spr-icon spr-icon-star spr-icon-star-empty" data-value="5">&nbsp;</a>
																	</div>
																</div>
																<div class="spr-form-review-title">
																	<label class="spr-form-label" for="review_title_3008529923">Review Title</label>
																	<input class="spr-form-input spr-form-input-text " id="review_title_3008529923" type="text" name="review[title]" value="" placeholder="Give your review a title">
																</div>
																<div class="spr-form-review-body">
																	<label class="spr-form-label" for="review_body_3008529923">Body of Review <span class="spr-form-review-body-charactersremaining">(1500)</span></label>
																	<div class="spr-form-input">
																		<textarea class="spr-form-input spr-form-input-textarea " id="review_body_3008529923" data-product-id="3008529923" name="review[body]" rows="10" placeholder="Write your comments here"></textarea>
																	</div>
																</div>
															</fieldset>
															<fieldset class="spr-form-actions">
																<input type="submit" class="spr-button spr-button-primary button button-primary btn btn-primary" value="Submit Review">
															</fieldset>
														</form>
													</div>
													<div class="spr-reviews" id="reviews_3008529923" style="display: none">
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<script>
						$('#tabs-information').easytabs({animationSpeed: 'fast', updateHash: false});
					  </script>
								<div id="product-additional-information">
									<div class="related-products">
										<h1 class="feature-title"><span>You may also like</span></h1>
										<ul class="related-products-items grid-uniform">
											@foreach($shangpins as $v)
											<li class="realted-element">
												
												<div class="grid__item">
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
														<ul class="action-button">
															<li class="add-to-cart-form">
																<form action="#" method="post" enctype="multipart/form-data" id="AddToCartForm" class="form-vertical">							
																	<div class="effect-ajax-cart">
																		<input type="hidden" name="quantity" value="1">
																		<button type="submit" name="add" id="AddToCart" class="btn btn-1 add-to-cart" title="Buy Now">
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
														</ul>
													</div>
												</div>
											</li>
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
