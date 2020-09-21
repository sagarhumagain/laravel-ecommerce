@include('components.header')
            
            <!-- Page Title
            ============================================= -->
            <section id="page-title">

            <div class="container clearfix">
                <h1>Shop</h1>
                <span>Start Buying your Favourite Product</span>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Shop</li>
                </ol>
            </div>

            </section><!-- #page-title end -->

            <!-- Content
            ============================================= -->
            <section id="content">

            <div class="content-wrap">

                <div class="container clearfix">

                    <div class="postcontent nobottommargin clearfix col_last">
                    <!-- success/fail message for cart -->
						@if(session()->has('success_message'))
						<div class="btn btn-success bottommargin">
						{{ session()->get('success_message')}}
						</div>
						@endif
						@if(count($errors)> 0)
						<div class="btn btn-danger">
							<ul>
							@foreach($errors->all() as $error)
							<li>{{$error}}</li>
							@endforeach
							</ul>
						</div>
						@endif
						<!-- success/fail message for cart end-->

                        <div id="shop" class="shop product-3 grid-container clearfix" data-layout="fitRows">
                            @foreach($products as $product)
                            <div class="product clearfix">
                                <div class="product-image">
                                    <a href="{{ route('shop.show', $product->slug) }}"> <img src="{{asset('frontend/images/shop/dress/1.jpg')}}" alt="Checked Short Dress"></a>
                                    <a href="{{ route('shop.show', $product->slug) }}"> <img src="{{asset('frontend/images/shop/dress/1-1.jpg')}}" alt="Checked Short Dress"></a>
                                    <div class="sale-flash">50% Off*</div>
                                    <div class="product-overlay">
                                        <a href="#" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to Cart</span></a>
                                        <a href="{{asset('frontend/demos/shop/ajax/shop-item.html')}}" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span> Quick View</span></a>
                                    </div>
                                </div>
                                <div class="product-desc center">
                                    <div class="product-title"><h3><a href="{{ route('shop.show', $product->slug) }}">{{$product->name}}</a></h3></div>
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
                            @endforeach
                        </div>
                    </div>

                    <div class="sidebar nobottommargin clearfix">
                        <div class="sidebar-widgets-wrap">

                            <div class="widget widget_links clearfix">

                                <h4>Shop Categories</h4>
                                <ul>
                                    <li><a href="#">Shirts</a></li>
                                    <li><a href="#">Pants</a></li>
                                    <li><a href="#">Tshirts</a></li>
                                    <li><a href="#">Sunglasses</a></li>
                                    <li><a href="#">Shoes</a></li>
                                    <li><a href="#">Bags</a></li>
                                    <li><a href="#">Watches</a></li>
                                </ul>

                            </div>

                            <div class="widget clearfix">

                                <h4>Recent Items</h4>
                                <div id="post-list-footer">

                                    <div class="spost clearfix">
                                        <div class="entry-image">
                                            <a href="#"><img src="images/shop/small/1.jpg" alt="Image"></a>
                                        </div>
                                        <div class="entry-c">
                                            <div class="entry-title">
                                                <h4><a href="#">Blue Round-Neck Tshirt</a></h4>
                                            </div>
                                            <ul class="entry-meta">
                                                <li class="color">$29.99</li>
                                                <li><i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star-half-full"></i></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="spost clearfix">
                                        <div class="entry-image">
                                            <a href="#"><img src="images/shop/small/6.jpg" alt="Image"></a>
                                        </div>
                                        <div class="entry-c">
                                            <div class="entry-title">
                                                <h4><a href="#">Checked Short Dress</a></h4>
                                            </div>
                                            <ul class="entry-meta">
                                                <li class="color">$23.99</li>
                                                <li><i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star-half-full"></i> <i class="icon-star-empty"></i></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="spost clearfix">
                                        <div class="entry-image">
                                            <a href="#"><img src="images/shop/small/7.jpg" alt="Image"></a>
                                        </div>
                                        <div class="entry-c">
                                            <div class="entry-title">
                                                <h4><a href="#">Light Blue Denim Dress</a></h4>
                                            </div>
                                            <ul class="entry-meta">
                                                <li class="color">$19.99</li>
                                                <li><i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star-empty"></i> <i class="icon-star-empty"></i></li>
                                            </ul>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <div class="widget clearfix">

                                <h4>Last Viewed Items</h4>
                                <div class="widget-last-view">
                                    <div class="spost clearfix">
                                        <div class="entry-image">
                                            <a href="#"><img src="images/shop/small/3.jpg" alt="Image"></a>
                                        </div>
                                        <div class="entry-c">
                                            <div class="entry-title">
                                                <h4><a href="#">Round-Neck Tshirt</a></h4>
                                            </div>
                                            <ul class="entry-meta">
                                                <li class="color">$15</li>
                                                <li><i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="spost clearfix">
                                        <div class="entry-image">
                                            <a href="#"><img src="images/shop/small/10.jpg" alt="Image"></a>
                                        </div>
                                        <div class="entry-c">
                                            <div class="entry-title">
                                                <h4><a href="#">Green Trousers</a></h4>
                                            </div>
                                            <ul class="entry-meta">
                                                <li class="color">$19</li>
                                                <li><i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star-empty"></i> <i class="icon-star-empty"></i> <i class="icon-star-empty"></i></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="spost clearfix">
                                        <div class="entry-image">
                                            <a href="#"><img src="images/shop/small/11.jpg" alt="Image"></a>
                                        </div>
                                        <div class="entry-c">
                                            <div class="entry-title">
                                                <h4><a href="#">Silver Chrome Watch</a></h4>
                                            </div>
                                            <ul class="entry-meta">
                                                <li class="color">$34.99</li>
                                                <li><i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star-half-full"></i> <i class="icon-star-empty"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="widget clearfix">

                                <h4>Popular Items</h4>
                                <div id="Popular-item">
                                    <div class="spost clearfix">
                                        <div class="entry-image">
                                            <a href="#"><img src="images/shop/small/8.jpg" alt="Image"></a>
                                        </div>
                                        <div class="entry-c">
                                            <div class="entry-title">
                                                <h4><a href="#">Pink Printed Dress</a></h4>
                                            </div>
                                            <ul class="entry-meta">
                                                <li class="color">$21</li>
                                                <li><i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star-half-full"></i></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="spost clearfix">
                                        <div class="entry-image">
                                            <a href="#"><img src="images/shop/small/5.jpg" alt="Image"></a>
                                        </div>
                                        <div class="entry-c">
                                            <div class="entry-title">
                                                <h4><a href="#">Blue Round-Neck Tshirt</a></h4>
                                            </div>
                                            <ul class="entry-meta">
                                                <li class="color">$19.99</li>
                                                <li><i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star-empty"></i> <i class="icon-star-empty"></i></li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="spost clearfix">
                                        <div class="entry-image">
                                            <a href="#"><img src="images/shop/small/12.jpg" alt="Image"></a>
                                        </div>
                                        <div class="entry-c">
                                            <div class="entry-title">
                                                <h4><a href="#">Men Aviator Sunglasses</a></h4>
                                            </div>
                                            <ul class="entry-meta">
                                                <li class="color">$14.99</li>
                                                <li><i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star-half-full"></i> <i class="icon-star-empty"></i> <i class="icon-star-empty"></i></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="widget clearfix">
                                <iframe src="//www.facebook.com/plugins/likebox.php?href=https%3A%2F%2Fwww.facebook.com%2FEnvato&amp;width=240&amp;height=290&amp;colorscheme=light&amp;show_faces=true&amp;header=true&amp;stream=false&amp;show_border=true&amp;appId=499481203443583" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:240px; height:290px;" allowTransparency="true"></iframe>
                            </div>

                            <div class="widget subscribe-widget clearfix">

                                <h4>Subscribe For Latest Offers</h4>
                                <h5>Subscribe to Our Newsletter to get Important News, Amazing Offers &amp; Inside Scoops:</h5>
                                <form action="#" class="notopmargin nobottommargin">
                                    <div class="input-group divcenter">
                                        <input type="text" class="form-control" placeholder="Enter your Email" required="">
                                        <div class="input-group-append">
                                            <button class="btn btn-success" type="submit"><i class="icon-email2"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>

                            <div class="widget clearfix">

                                <div id="oc-clients-full" class="owl-carousel image-carousel carousel-widget" data-items="1" data-margin="10" data-loop="true" data-nav="false" data-autoplay="5000" data-pagi="false">

                                    <div class="oc-item"><a href="#"><img src="images/clients/1.png" alt="Clients"></a></div>
                                    <div class="oc-item"><a href="#"><img src="images/clients/2.png" alt="Clients"></a></div>
                                    <div class="oc-item"><a href="#"><img src="images/clients/3.png" alt="Clients"></a></div>
                                    <div class="oc-item"><a href="#"><img src="images/clients/4.png" alt="Clients"></a></div>
                                    <div class="oc-item"><a href="#"><img src="images/clients/5.png" alt="Clients"></a></div>
                                    <div class="oc-item"><a href="#"><img src="images/clients/6.png" alt="Clients"></a></div>
                                    <div class="oc-item"><a href="#"><img src="images/clients/7.png" alt="Clients"></a></div>
                                    <div class="oc-item"><a href="#"><img src="images/clients/8.png" alt="Clients"></a></div>

                                </div>

                            </div>

                        </div>
                    </div>

                </div>

            </div>

            </section><!-- #content end -->
            @include('components.footer')
