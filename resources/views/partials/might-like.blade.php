				<div class="clear"></div><div class="line"></div>

                    <div class="col_full nobottommargin">

                        <h4>Related Products</h4>


                        <div id="oc-product" class="owl-carousel product-carousel carousel-widget" data-margin="30" data-pagi="false" data-autoplay="5000" data-items-xs="1" data-items-sm="2" data-items-md="3" data-items-xl="4">
                        @foreach($mightAlsoLike as $product)

							<div class="oc-item">
								<div class="product iproduct clearfix">
									<div class="product-image">
                                    <a href="{{ route('shop.show', $product->slug) }}"><img src="{{asset('frontend/images/shop/dress/3-2.jpg')}}" alt="Checked Short Dress"></a>
                                        <a href="{{ route('shop.show', $product->slug) }}"><img src="{{asset('frontend/images/shop/dress/3-2.jpg')}}" alt="Checked Short Dress"></a>
										<div class="sale-flash">50% Off*</div>
										<div class="product-overlay">
											<a href="#" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to Cart</span></a>
											<a href="include/ajax/shop-item.html" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span> Quick View</span></a>
										</div>
									</div>
									<div class="product-desc center">
                                    <div class="product-title"><h3><a href="{{ route('shop.show', $product->slug) }}"></a>{{$product->name}}</h3></div>
                                        <div class="product-price"><del>$24.99</del> <ins>{{$product->price}}</ins></div>
										<div class="product-rating">
											<i class="icon-star3"></i>
											<i class="icon-star3"></i>
											<i class="icon-star3"></i>
											<i class="icon-star3"></i>
											<i class="icon-star-half-full"></i>
										</div>
									</div>
								</div>
							</div>

                            @endforeach

						</div>
			</div>