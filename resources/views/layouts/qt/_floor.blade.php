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
								关于我们
							</div>
							<div class="fi-content">
								@foreach($women as $v)
								<ul class="group_information">
									<li><i class="fa fa-map-marker"></i> {{$v['dizhi']}}</li>
									<li><i class="fa fa-phone"></i> {{$v['phone']}}</li>
									<li><i class="fa fa-envelope"></i> {{$v['email']}}</li>
									<li>举报电话</i> {{$v['juphone']}}</li>
									<li>网络文化经营许可证</i>{{$v['zheng']}}</li>
								</ul>
								@endforeach
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
								信息
							</div>
							<div class="fi-content">
								@foreach($women as $v)
								<ul class="grid__item one-half">
									<li>
										<a href="/women"><span>关于我们</span></a>
									</li>
									<li>
										<a href="/wo/tui"><span>{{$v['question']}}</span></a>
									</li>
									<li>
										<a href="/wo/tui"><span>{{$v['songtui']}}</span></a>
									</li>
									<li>
										<a href="#"><span>{{$v['juphone']}}</span></a>
									</li>
									<li>
										<a href="/hezuo/hz"><span>合作伙伴</span></a>
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
									@foreach($tags as $v)
									<li><a href="#">{{$v['name']}}</a></li>
									@endforeach
								</ul>
							</div>
						</div>
						<div class="fi-block grid__item one-quarter small--one-whole medium--one-whole">
							<div class="fi-title">
								友情链接
							</div>
							<ul class="fi-content post-element">
								@foreach($youlians as $v)
								<li>
								<div class="post-title">
									<a href="http://{{$v['url']}}">{{$v['name']}} {{$v['url']}}</a>
								</div>
								</li>
								@endforeach
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
								© 2018 {{$v['banquan']}} . 版权所有
							</p>
						</div>
						@endforeach
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
var tada_index, tada_autosearchcomplete, tada_swiftype, tada_ads, tada_adsspeed, tada_slideshowtime, tada_block1gallery = false,
    tada_block1product = false,
    tada_newsletter = false;
tada_index = 1;
tada_ads = 1;
tada_adsspeed = 5000;
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
    if ($('.quantity-wrapper').length) {
        $('.quantity-wrapper').on('click', '.qty-up', function() {
            var $this = $(this);
            var qty = $this.data('src');
            $(qty).val(parseInt($(qty).val()) + 1);
        });
        $('.quantity-wrapper').on('click', '.qty-down', function() {
            var $this = $(this);
            var qty = $this.data('src');
            if (parseInt($(qty).val()) > 1)
                $(qty).val(parseInt($(qty).val()) - 1);
        });
    }
});
</script>
</body>