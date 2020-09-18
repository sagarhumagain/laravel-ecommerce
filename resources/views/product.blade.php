
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Stylesheets
        ============================================= -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link href="http://fonts.googleapis.com/css?family=Lato:300,400,400i,700%7CMontserrat:300,400,500,600,700%7CMerriweather:300,400,300i,400i" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.css') }}" type="text/css" />
        <link rel="stylesheet" href="{{ asset('frontend/style.css')}}" type="text/css" />
        <link rel="stylesheet" href="{{ asset('frontend/css/dark.css')}}" type="text/css" />
        <link rel="stylesheet" href="{{ asset('frontend/css/swiper.css')}}" type="text/css" />
        
        <!-- shop Demo Specific Stylesheet -->
        <link rel="stylesheet" href="{{ asset('frontend/demos/shop/shop.css')}}" type="text/css" />
        <link rel="stylesheet" href="{{ asset('frontend/demos/shop/css/fonts.css')}}" type="text/css" />
        <!-- / -->

        <link rel="stylesheet" href="{{ asset('frontend/css/font-icons.css')}}" type="text/css" />
        <link rel="stylesheet" href="{{ asset('frontend/css/animate.css')}}" type="text/css" />
        <link rel="stylesheet" href="{{ asset('frontend/css/magnific-popup.css')}}" type="text/css" />

        <link rel="stylesheet" href="{{ asset('frontend/css/responsive.css')}}" type="text/css" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />


        <!-- Document Title
        ============================================= -->


        <title>Laravel</title>

        <!-- Fonts -->

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito';
            }
        </style>
    </head>
    <body class="stretched">

        <!-- Document Wrapper
        ============================================= -->
        <div id="wrapper" class="clearfix">
            
            <!-- Header
            ============================================= -->
            <header id="header" class="full-header clearfix">

                <div id="header-wrap">

                    <div class="container clearfix">

                        <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

                        <!-- Logo
                        ============================================= -->
                        <div id="logo">
                            <a href="index.html" class="standard-logo"><img src="{{asset('frontend/demos/shop/images/logo.png')}}"
                                    alt="Canvas Logo"></a>
                            <a href="index.html" class="retina-logo"><img src="{{asset('frontend/demos/shop/images/logo@2x.png')}}"
                                    alt="Canvas Logo"></a>
                        </div><!-- #logo end -->

                        <!-- Primary Navigation
                        ============================================= -->
                        <nav id="primary-menu" class="style-2 with-arrows">

                            <ul>
                                <li class="current"><a href="#">
                                        <div>Home</div>
                                    </a></li>
                                <!-- Mega Menu
                                ============================================= -->
                                <li class="mega-menu"><a href="#">
                                        <div>Men</div>
                                    </a>
                                    <div class="mega-menu-content style-2 clearfix">
                                        <ul class="mega-menu-column border-left-0 col-lg-3">
                                            <li class="mega-menu-title"><a href="#">
                                                    <div>Footwear</div>
                                                </a>
                                                <ul>
                                                    <li><a href="#">
                                                            <div>Casual Shoes</div>
                                                        </a></li>
                                                    <li><a href="#">
                                                            <div>Formal Shoes</div>
                                                        </a></li>
                                                    <li><a href="#">
                                                            <div>Sports shoes</div>
                                                        </a></li>
                                                    <li><a href="#">
                                                            <div>Flip Flops</div>
                                                        </a></li>
                                                    <li><a href="#">
                                                            <div>Slippers</div>
                                                        </a></li>
                                                    <li><a href="#">
                                                            <div>Sandals</div>
                                                        </a></li>
                                                    <li><a href="#">
                                                            <div>Show all <i class="icon-angle-right"></i></div>
                                                        </a></li>
                                                </ul>
                                            </li>
                                            <li class="mega-menu-title"><a href="#">
                                                    <div>Clothing</div>
                                                </a>
                                                <ul>
                                                    <li><a href="#">
                                                            <div>Casual Shirts</div>
                                                        </a></li>
                                                    <li><a href="#">
                                                            <div>T-Shirts</div>
                                                        </a></li>
                                                    <li><a href="#">
                                                            <div>Collared Tees</div>
                                                        </a></li>
                                                    <li><a href="#">
                                                            <div>Pants / Trousers</div>
                                                        </a></li>
                                                    <li><a href="#">
                                                            <div>Show all <i class="icon-angle-right"></i></div>
                                                        </a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <ul class="mega-menu-column border-left-0 col-lg-3">
                                            <li class="mega-menu-title"><a href="#">
                                                    <div>Sportswear</div>
                                                </a>
                                                <ul>
                                                    <li><a href="#">
                                                            <div>Sports Casual Shirts</div>
                                                        </a></li>
                                                    <li><a href="#">
                                                            <div>Sports T-Shirts</div>
                                                        </a></li>
                                                    <li><a href="#">
                                                            <div>Sports Collared Tees</div>
                                                        </a></li>
                                                    <li><a href="#">
                                                            <div>Sports Shoes</div>
                                                        </a></li>
                                                    <li><a href="#">
                                                            <div>Jackets</div>
                                                        </a></li>
                                                    <li><a href="#">
                                                            <div>Swimwears</div>
                                                        </a></li>
                                                    <li><a href="#">
                                                            <div>Show all <i class="icon-angle-right"></i></div>
                                                        </a></li>
                                                </ul>
                                            </li>
                                            <li class="mega-menu-title"><a href="#">
                                                    <div>Innerwears</div>
                                                </a>
                                                <ul>
                                                    <li><a href="#">
                                                            <div>Boxers</div>
                                                        </a></li>
                                                    <li><a href="#">
                                                            <div>Vests</div>
                                                        </a></li>
                                                    <li><a href="#">
                                                            <div>Sleepwears</div>
                                                        </a></li>
                                                    <li><a href="#">
                                                            <div>Show all <i class="icon-angle-right"></i></div>
                                                        </a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <ul class="mega-menu-column border-left-0 col-lg-3">
                                            <li class="mega-menu-title"><a href="#">
                                                    <div>Innerwears</div>
                                                </a>
                                                <ul>
                                                    <li><a href="#">
                                                            <div>Boxers</div>
                                                        </a></li>
                                                    <li><a href="#">
                                                            <div>Vests</div>
                                                        </a></li>
                                                    <li><a href="#">
                                                            <div>Sleepwears</div>
                                                        </a></li>
                                                    <li><a href="#">
                                                            <div>Show all <i class="icon-angle-right"></i></div>
                                                        </a></li>
                                                </ul>
                                            </li>
                                            <li class="mega-menu-title"><a href="#">
                                                    <div>Sunglasses</div>
                                                </a>
                                            <li class="mega-menu-title"><a href="#">
                                                    <div>Watches</div>
                                                </a>
                                            <li class="mega-menu-title"><a href="#">
                                                    <div>Bags</div>
                                                </a>
                                            <li class="mega-menu-title"><a href="#">
                                                    <div>Headphones</div>
                                                </a>
                                            <li class="mega-menu-title"><a href="#">
                                                    <div>Accessories</div>
                                                </a>
                                        </ul>
                                        <ul class="mega-menu-column col-lg-3 border-left-0">
                                            <li class="card p-0 nobg noborder">
                                                <img class="card-img-top" src="demos/shop/images/menu-image.jpg"
                                                    alt="image cap">
                                                <a href="#" class="btn btn-link text-left t500 pl-0 nobg"><u>Editor's
                                                        Pick</u></a>
                                            </li>
                                        </ul>
                                    </div>
                                </li><!-- .mega-menu end -->
                                <li><a href="#">
                                        <div>Women</div>
                                    </a>
                                    <div class="mega-menu-content style-2 clearfix">
                                        <ul class="mega-menu-column col-lg-6">
                                            <li class="mega-menu-title"><a href="#">
                                                    <div>Footwear</div>
                                                </a>
                                                <ul>
                                                    <li><a href="#">
                                                            <div>Casual Shoes</div>
                                                        </a></li>
                                                    <li><a href="#">
                                                            <div>Formal Shoes</div>
                                                        </a></li>
                                                    <li><a href="#">
                                                            <div>Sports shoes</div>
                                                        </a></li>
                                                    <li><a href="#">
                                                            <div>Flip Flops</div>
                                                        </a></li>
                                                    <li><a href="#">
                                                            <div>Slippers</div>
                                                        </a></li>
                                                    <li><a href="#">
                                                            <div>Sandals</div>
                                                        </a></li>
                                                    <li><a href="#">
                                                            <div>Party Shoes</div>
                                                        </a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                        <ul class="mega-menu-column col-lg-6">
                                            <li class="mega-menu-title"><a href="#">
                                                    <div>Clothing</div>
                                                </a>
                                                <ul>
                                                    <li><a href="#">
                                                            <div>Casual Shirts</div>
                                                        </a></li>
                                                    <li><a href="#">
                                                            <div>T-Shirts</div>
                                                        </a></li>
                                                    <li><a href="#">
                                                            <div>Collared Tees</div>
                                                        </a></li>
                                                    <li><a href="#">
                                                            <div>Pants / Trousers</div>
                                                        </a></li>
                                                    <li><a href="#">
                                                            <div>Ethnic Wear</div>
                                                        </a></li>
                                                    <li><a href="#">
                                                            <div>Jeans</div>
                                                        </a></li>
                                                    <li><a href="#">
                                                            <div>Swimwear</div>
                                                        </a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                </li><!-- .mega-menu end -->
                                <li><a href="#">
                                        <div>Accessories</div>
                                    </a></li>
                                <li><a href="#">
                                        <div>Blog</div>
                                    </a></li>
                                <li><a href="#">
                                        <div>Sales</div>
                                    </a></li>
                            </ul>

                            <!-- Top Search
                            ============================================= -->
                            <div id="top-search">
                                <a href="#" id="top-search-trigger"><i class="icon-line-search"></i><i
                                        class="icon-line-cross"></i></a>
                                <form action="search.html" method="get">
                                    <input type="text" name="q" class="form-control" value=""
                                        placeholder="Type &amp; Hit Enter..">
                                </form>
                            </div><!-- #top-search end -->

                            <!-- Top Cart
                            ============================================= -->
                            <div id="top-cart">
                                <a href="#" id="top-cart-trigger"><i class="icon-line-bag"></i><span>5</span></a>
                                <div class="top-cart-content">
                                    <div class="top-cart-title">
                                        <h4>Shopping Cart</h4>
                                    </div>
                                    <div class="top-cart-items">
                                        <div class="top-cart-item clearfix">
                                            <div class="top-cart-item-image">
                                                <a href="#"><img src="{{asset('frontend/demos/shop/images/items/featured/5.jpg')}}"
                                                        alt="Blue Shoulder Bag" /></a>
                                            </div>
                                            <div class="top-cart-item-desc">
                                                <a href="#" class="t400">White athletic shoe</a>
                                                <span class="top-cart-item-price">$35.00</span>
                                                <span class="top-cart-item-quantity t600">x 1</span>
                                            </div>
                                        </div>
                                        <div class="top-cart-item clearfix">
                                            <div class="top-cart-item-image">
                                                <a href="#" class="t400"><img src="{{asset('frontend/demos/shop/images/items/featured/1.jpg')}}"
                                                        alt="Leather Bag" /></a>
                                            </div>
                                            <div class="top-cart-item-desc">
                                                <a href="#" class="t400">Round Neck Solid Light Blue Colour T-shirts</a>
                                                <span class="top-cart-item-price">$12.49</span>
                                                <span class="top-cart-item-quantity t600">x 2</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="top-cart-action clearfix">
                                        <span class="fleft top-checkout-price t600 text-dark">$59.98</span>
                                        <button class="button button-dark button-small nomargin fright">View Cart</button>
                                    </div>
                                </div>
                            </div><!-- #top-cart end -->

                            @if (Route::has('login'))
                                    <div>
                                    @auth
                                    <div id="top-account">
                                            <a href="{{ url('/dashboard') }}">
                                                <i class="icon-dashboard mr-1 position-relative" style="top: 1px;"></i>
                                                <span class="d-none d-sm-inline-block font-primary t500">Dashboard</span>
                                            </a>
                                        </div>
                                    @else
                                        <div id="top-account">
                                            <a href="{{ route('login') }}">
                                                <i class="icon-line2-user mr-1 position-relative" style="top: 1px;"></i>
                                                <span class="d-none d-sm-inline-block font-primary t500">Login</span>
                                            </a>
                                        </div>
                                        @if (Route::has('register'))
                                        <div id="top-account">
                                            <a href="{{ route('register') }}">
                                                <i class="icon-arrow-alt-circle-up1 mr-1 position-relative" style="top: 1px;"></i>
                                                <span class="d-none d-sm-inline-block font-primary t500">Register</span>
                                            </a>
                                        </div>
                                        @endif
                                    @endif
                                    </div>
                                @endif 

                        </nav><!-- #primary-menu end -->

                    </div>

                </div>

            </header><!-- #header end -->
            
            <!-- Page Title
            ============================================= -->
            <section id="page-title">

                <div class="container clearfix">
                    <h1>Shop</h1>
                    <span>Start Buying your Favourite Product</span>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item" aria-current="page">Shop</li>
                        <li class="breadcrumb-item active" aria-current="page">slug name</li>

                    </ol>
                </div>

            </section><!-- #page-title end -->

            <!-- Content
            ============================================= -->
            <section id="content">

            <div class="content-wrap">

                <div class="container clearfix">

                <div class="single-product">

                    <div class="product">

                        <div class="col_two_fifth">

                            <!-- Product Single - Gallery
                            ============================================= -->
                            <div class="product-image">
                                <div class="fslider" data-pagi="false" data-arrows="false" data-thumbs="true">
                                    <div class="flexslider">
                                        <div class="slider-wrap" data-lightbox="gallery">
                                            <div class="slide" data-thumb="{{asset('frontend/images/shop/thumbs/dress/3.jpg')}}"><a href="{{asset('frontend/images/shop/dress/3.jpg')}}" title="Pink Printed Dress - Front View" data-lightbox="gallery-item"><img src="{{asset('frontend/images/shop/dress/3.jpg')}}" alt="Pink Printed Dress"></a></div>
                                            <div class="slide" data-thumb="{{asset('frontend/images/shop/thumbs/dress/3-1.jpg')}}"><a href="{{asset('frontend/images/shop/dress/3-1.jpg')}}" title="Pink Printed Dress - Side View" data-lightbox="gallery-item"><img src="{{asset('frontend/images/shop/dress/3-1.jpg')}}" alt="Pink Printed Dress"></a></div>
                                            <div class="slide" data-thumb="{{asset('frontend/images/shop/thumbs/dress/3-2.jpg ')}}"><a href="{{asset('frontend/images/shop/dress/3-2.jpg')}}" title="Pink Printed Dress - Back View" data-lightbox="gallery-item"><img src="{{asset('frontend/images/shop/dress/3-2.jpg')}}" alt="Pink Printed Dress"></a></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="sale-flash">Sale!</div>
                            </div><!-- Product Single - Gallery End -->

                        </div>

                        <div class="col_two_fifth product-desc">
                        <div class="product-name"><h2>Pink Printed Dress</h2> </div><!-- Product Single - Price End -->


                            <!-- Product Single - Price
                            ============================================= -->
                            <div class="product-price"><del>$39.99</del> <ins>$24.99</ins></div><!-- Product Single - Price End -->

                            <!-- Product Single - Rating
                            ============================================= -->
                            <div class="product-rating">
                                <i class="icon-star3"></i>
                                <i class="icon-star3"></i>
                                <i class="icon-star3"></i>
                                <i class="icon-star-half-full"></i>
                                <i class="icon-star-empty"></i>
                            </div><!-- Product Single - Rating End -->

                            <div class="clear"></div>
                            <div class="line"></div>

                            <!-- Product Single - Quantity & Cart Button
                            ============================================= -->
                            <form class="cart nobottommargin clearfix" method="post" enctype='multipart/form-data'>
                                <div class="quantity clearfix">
                                    <input type="button" value="-" class="minus">
                                    <input type="text" step="1" min="1"  name="quantity" value="1" title="Qty" class="qty" size="4" />
                                    <input type="button" value="+" class="plus">
                                </div>
                                <button type="submit" class="add-to-cart button nomargin">Add to cart</button>
                            </form><!-- Product Single - Quantity & Cart Button End -->

                            <div class="clear"></div>
                            <div class="line"></div>

                            <!-- Product Single - Short Description
                            ============================================= -->
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero velit id eaque ex quae laboriosam nulla optio doloribus! Perspiciatis, libero, neque, perferendis at nisi optio dolor!</p>
                            <p>Perspiciatis ad eveniet ea quasi debitis quos laborum eum reprehenderit eaque explicabo assumenda rem modi.</p>
                            <ul class="iconlist">
                                <li><i class="icon-caret-right"></i> Dynamic Color Options</li>
                                <li><i class="icon-caret-right"></i> Lots of Size Options</li>
                                <li><i class="icon-caret-right"></i> 30-Day Return Policy</li>
                            </ul><!-- Product Single - Short Description End -->

                            <!-- Product Single - Meta
                            ============================================= -->
                            <div class="card product-meta">
                                <div class="card-body">
                                    <span itemprop="productID" class="sku_wrapper">SKU: <span class="sku">8465415</span></span>
                                    <span class="posted_in">Category: <a href="#" rel="tag">Dress</a>.</span>
                                    <span class="tagged_as">Tags: <a href="#" rel="tag">Pink</a>, <a href="#" rel="tag">Short</a>, <a href="#" rel="tag">Dress</a>, <a href="#" rel="tag">Printed</a>.</span>
                                </div>
                            </div><!-- Product Single - Meta End -->

                            <!-- Product Single - Share
                            ============================================= -->
                            <div class="si-share noborder clearfix">
                                <span>Share:</span>
                                <div>
                                    <a href="#" class="social-icon si-borderless si-facebook">
                                        <i class="icon-facebook"></i>
                                        <i class="icon-facebook"></i>
                                    </a>
                                    <a href="#" class="social-icon si-borderless si-twitter">
                                        <i class="icon-twitter"></i>
                                        <i class="icon-twitter"></i>
                                    </a>
                                    <a href="#" class="social-icon si-borderless si-pinterest">
                                        <i class="icon-pinterest"></i>
                                        <i class="icon-pinterest"></i>
                                    </a>
                                    <a href="#" class="social-icon si-borderless si-gplus">
                                        <i class="icon-gplus"></i>
                                        <i class="icon-gplus"></i>
                                    </a>
                                    <a href="#" class="social-icon si-borderless si-rss">
                                        <i class="icon-rss"></i>
                                        <i class="icon-rss"></i>
                                    </a>
                                    <a href="#" class="social-icon si-borderless si-email3">
                                        <i class="icon-email3"></i>
                                        <i class="icon-email3"></i>
                                    </a>
                                </div>
                            </div><!-- Product Single - Share End -->

                        </div>
                        <div class="col_one_fifth col_last">

								<a href="#" title="Brand Logo" class="d-none d-md-block"><img class="image_fade" src="images/shop/brand.jpg" alt="Brand Logo" style="opacity: 1;"></a>

								<div class="divider divider-center"><i class="icon-circle-blank"></i></div>

								<div class="feature-box fbox-plain fbox-dark fbox-small">
									<div class="fbox-icon">
										<i class="icon-thumbs-up2"></i>
									</div>
									<h3>100% Original</h3>
									<p class="notopmargin">We guarantee you the sale of Original Brands.</p>
								</div>

								<div class="feature-box fbox-plain fbox-dark fbox-small">
									<div class="fbox-icon">
										<i class="icon-credit-cards"></i>
									</div>
									<h3>Payment Options</h3>
									<p class="notopmargin">We accept Visa, MasterCard and American Express.</p>
								</div>

								<div class="feature-box fbox-plain fbox-dark fbox-small">
									<div class="fbox-icon">
										<i class="icon-truck2"></i>
									</div>
									<h3>Free Shipping</h3>
									<p class="notopmargin">Free Delivery to 100+ Locations on orders above $40.</p>
								</div>

								<div class="feature-box fbox-plain fbox-dark fbox-small">
									<div class="fbox-icon">
										<i class="icon-undo"></i>
									</div>
									<h3>30-Days Returns</h3>
									<p class="notopmargin">Return or exchange items purchased within 30 days.</p>
								</div>

							</div>

                        <div class="col_full nobottommargin">

                            <div class="tabs clearfix nobottommargin" id="tab-1">

                                <ul class="tab-nav clearfix">
                                    <li><a href="#tabs-1"><i class="icon-align-justify2"></i><span class="d-none d-md-inline-block"> Description</span></a></li>
                                    <li><a href="#tabs-2"><i class="icon-info-sign"></i><span class="d-none d-md-inline-block"> Additional Information</span></a></li>
                                    <li><a href="#tabs-3"><i class="icon-star3"></i><span class="d-none d-md-inline-block"> Reviews (2)</span></a></li>
                                </ul>

                                <div class="tab-container">

                                    <div class="tab-content clearfix" id="tabs-1">
                                        <p>Pink printed dress,  woven, round neck with a keyhole and buttoned closure at the back, sleeveless, concealed zip up at left side seam, belt loops along waist with slight gathers beneath, brand appliqu?? above left front hem, has an attached lining.</p>
                                        Comes with a white, slim synthetic belt that has a tang clasp.
                                    </div>
                                    <div class="tab-content clearfix" id="tabs-2">

                                        <table class="table table-striped table-bordered">
                                            <tbody>
                                                <tr>
                                                    <td>Size</td>
                                                    <td>Small, Medium &amp; Large</td>
                                                </tr>
                                                <tr>
                                                    <td>Color</td>
                                                    <td>Pink &amp; White</td>
                                                </tr>
                                                <tr>
                                                    <td>Waist</td>
                                                    <td>26 cm</td>
                                                </tr>
                                                <tr>
                                                    <td>Length</td>
                                                    <td>40 cm</td>
                                                </tr>
                                                <tr>
                                                    <td>Chest</td>
                                                    <td>33 inches</td>
                                                </tr>
                                                <tr>
                                                    <td>Fabric</td>
                                                    <td>Cotton, Silk &amp; Synthetic</td>
                                                </tr>
                                                <tr>
                                                    <td>Warranty</td>
                                                    <td>3 Months</td>
                                                </tr>
                                            </tbody>
                                        </table>

                                    </div>
                                    <div class="tab-content clearfix" id="tabs-3">

                                        <div id="reviews" class="clearfix">

                                            <ol class="commentlist clearfix">

                                                <li class="comment even thread-even depth-1" id="li-comment-1">
                                                    <div id="comment-1" class="comment-wrap clearfix">

                                                        <div class="comment-meta">
                                                            <div class="comment-author vcard">
                                                                <span class="comment-avatar clearfix">
                                                                <img alt='' src='http://0.gravatar.com/avatar/ad516503a11cd5ca435acc9bb6523536?s=60' height='60' width='60' /></span>
                                                            </div>
                                                        </div>

                                                        <div class="comment-content clearfix">
                                                            <div class="comment-author">John Doe<span><a href="#" title="Permalink to this comment">April 24, 2014 at 10:46AM</a></span></div>
                                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quo perferendis aliquid tenetur. Aliquid, tempora, sit aliquam officiis nihil autem eum at repellendus facilis quaerat consequatur commodi laborum saepe non nemo nam maxime quis error tempore possimus est quasi reprehenderit fuga!</p>
                                                            <div class="review-comment-ratings">
                                                                <i class="icon-star3"></i>
                                                                <i class="icon-star3"></i>
                                                                <i class="icon-star3"></i>
                                                                <i class="icon-star3"></i>
                                                                <i class="icon-star-half-full"></i>
                                                            </div>
                                                        </div>

                                                        <div class="clear"></div>

                                                    </div>
                                                </li>

                                                <li class="comment even thread-even depth-1" id="li-comment-1">
                                                    <div id="comment-1" class="comment-wrap clearfix">

                                                        <div class="comment-meta">
                                                            <div class="comment-author vcard">
                                                                <span class="comment-avatar clearfix">
                                                                <img alt='' src='http://0.gravatar.com/avatar/ad516503a11cd5ca435acc9bb6523536?s=60' height='60' width='60' /></span>
                                                            </div>
                                                        </div>

                                                        <div class="comment-content clearfix">
                                                            <div class="comment-author">Mary Jane<span><a href="#" title="Permalink to this comment">June 16, 2014 at 6:00PM</a></span></div>
                                                            <p>Quasi, blanditiis, neque ipsum numquam odit asperiores hic dolor necessitatibus libero sequi amet voluptatibus ipsam velit qui harum temporibus cum nemo iste aperiam explicabo fuga odio ratione sint fugiat consequuntur vitae adipisci delectus eum incidunt possimus tenetur excepturi at accusantium quod doloremque reprehenderit aut expedita labore error atque?</p>
                                                            <div class="review-comment-ratings">
                                                                <i class="icon-star3"></i>
                                                                <i class="icon-star3"></i>
                                                                <i class="icon-star3"></i>
                                                                <i class="icon-star-empty"></i>
                                                                <i class="icon-star-empty"></i>
                                                            </div>
                                                        </div>

                                                        <div class="clear"></div>

                                                    </div>
                                                </li>

                                            </ol>

                                            <!-- Modal Reviews
                                            ============================================= -->
                                            <a href="#" data-toggle="modal" data-target="#reviewFormModal" class="button button-3d nomargin fright">Add a Review</a>

                                            <div class="modal fade" id="reviewFormModal" tabindex="-1" role="dialog" aria-labelledby="reviewFormModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h4 class="modal-title" id="reviewFormModalLabel">Submit a Review</h4>
                                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form class="nobottommargin" id="template-reviewform" name="template-reviewform" action="#" method="post">

                                                                <div class="col_half">
                                                                    <label for="template-reviewform-name">Name <small>*</small></label>
                                                                    <div class="input-group">
                                                                        <div class="input-group-prepend">
                                                                            <div class="input-group-text"><i class="icon-user"></i></div>
                                                                        </div>
                                                                        <input type="text" id="template-reviewform-name" name="template-reviewform-name" value="" class="form-control required" />
                                                                    </div>
                                                                </div>

                                                                <div class="col_half col_last">
                                                                    <label for="template-reviewform-email">Email <small>*</small></label>
                                                                    <div class="input-group">
                                                                        <div class="input-group-prepend"><div class="input-group-text">@</div></div>
                                                                        <input type="email" id="template-reviewform-email" name="template-reviewform-email" value="" class="required email form-control" />
                                                                    </div>
                                                                </div>

                                                                <div class="clear"></div>

                                                                <div class="col_full col_last">
                                                                    <label for="template-reviewform-rating">Rating</label>
                                                                    <select id="template-reviewform-rating" name="template-reviewform-rating" class="form-control">
                                                                        <option value="">-- Select One --</option>
                                                                        <option value="1">1</option>
                                                                        <option value="2">2</option>
                                                                        <option value="3">3</option>
                                                                        <option value="4">4</option>
                                                                        <option value="5">5</option>
                                                                    </select>
                                                                </div>

                                                                <div class="clear"></div>

                                                                <div class="col_full">
                                                                    <label for="template-reviewform-comment">Comment <small>*</small></label>
                                                                    <textarea class="required form-control" id="template-reviewform-comment" name="template-reviewform-comment" rows="6" cols="30"></textarea>
                                                                </div>

                                                                <div class="col_full nobottommargin">
                                                                    <button class="button button-3d nomargin" type="submit" id="template-reviewform-submit" name="template-reviewform-submit" value="submit">Submit Review</button>
                                                                </div>

                                                            </form>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        </div>
                                                    </div><!-- /.modal-content -->
                                                </div><!-- /.modal-dialog -->
                                            </div><!-- /.modal -->
                                            <!-- Modal Reviews End -->

                                        </div>

                                    </div>

                                </div>

                            </div>

                            <div class="line"></div>

                            <div class="col_one_third nobottommargin">
                                <a href="#" title="Brand Logo" class="d-none d-md-block"><img class="image_fade" src="images/shop/brand2.jpg" alt="Brand Logo"></a>
                            </div>

                            <div class="col_two_third col_last nobottommargin">

                                <div class="col_half">

                                    <div class="feature-box fbox-plain fbox-dark fbox-small">
                                        <div class="fbox-icon">
                                            <i class="icon-thumbs-up2"></i>
                                        </div>
                                        <h3>100% Original Brands</h3>
                                        <p class="notopmargin">We guarantee you the sale of Original Brands with warranties.</p>
                                    </div>

                                </div>

                                <div class="col_half col_last">

                                    <div class="feature-box fbox-plain fbox-dark fbox-small">
                                        <div class="fbox-icon">
                                            <i class="icon-credit-cards"></i>
                                        </div>
                                        <h3>Lots of Payment Options</h3>
                                        <p class="notopmargin">We accept Visa, MasterCard and American Express &amp; of-course PayPal.</p>
                                    </div>

                                </div>

                                <div class="col_half nobottommargin">

                                    <div class="feature-box fbox-plain fbox-dark fbox-small">
                                        <div class="fbox-icon">
                                            <i class="icon-truck2"></i>
                                        </div>
                                        <h3>Free Express Shipping</h3>
                                        <p class="notopmargin">Free Delivery to 100+ Locations Worldwide on orders above $40.</p>
                                    </div>

                                </div>

                                <div class="col_half col_last nobottommargin">

                                    <div class="feature-box fbox-plain fbox-dark fbox-small">
                                        <div class="fbox-icon">
                                            <i class="icon-undo"></i>
                                        </div>
                                        <h3>30-Days Returns Policy</h3>
                                        <p class="notopmargin">Return or exchange items purchased within 30 days for Free.</p>
                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                    </div>
                    

                    <div class="clear"></div><div class="line"></div>

                    <div class="col_full nobottommargin">

                        <h4>Related Products</h4>

                        <div id="oc-product" class="owl-carousel product-carousel carousel-widget" data-margin="30" data-pagi="false" data-autoplay="5000" data-items-xs="1" data-items-sm="2" data-items-md="3" data-items-xl="4">

                            <div class="oc-item">
                                <div class="product iproduct clearfix">
                                    <div class="product-image">
                                        <a href="#"><img src="images/shop/dress/1.jpg" alt="Checked Short Dress"></a>
                                        <a href="#"><img src="images/shop/dress/1-1.jpg" alt="Checked Short Dress"></a>
                                        <div class="sale-flash">50% Off*</div>
                                        <div class="product-overlay">
                                            <a href="#" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to Cart</span></a>
                                            <a href="include/ajax/shop-item.html" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span> Quick View</span></a>
                                        </div>
                                    </div>
                                    <div class="product-desc center">
                                        <div class="product-title"><h3><a href="#">Checked Short Dress</a></h3></div>
                                        <div class="product-price"><del>$24.99</del> <ins>$12.49</ins></div>
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

                            <div class="oc-item">
                                <div class="product iproduct clearfix">
                                    <div class="product-image">
                                        <a href="#"><img src="images/shop/pants/1-1.jpg" alt="Slim Fit Chinos"></a>
                                        <a href="#"><img src="images/shop/pants/1.jpg" alt="Slim Fit Chinos"></a>
                                        <div class="product-overlay">
                                            <a href="#" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to Cart</span></a>
                                            <a href="include/ajax/shop-item.html" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span> Quick View</span></a>
                                        </div>
                                    </div>
                                    <div class="product-desc center">
                                        <div class="product-title"><h3><a href="#">Slim Fit Chinos</a></h3></div>
                                        <div class="product-price">$39.99</div>
                                        <div class="product-rating">
                                            <i class="icon-star3"></i>
                                            <i class="icon-star3"></i>
                                            <i class="icon-star3"></i>
                                            <i class="icon-star-half-full"></i>
                                            <i class="icon-star-empty"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="oc-item">
                                <div class="product iproduct clearfix">
                                    <div class="product-image">
                                        <a href="#"><img src="images/shop/shoes/1-1.jpg" alt="Dark Brown Boots"></a>
                                        <a href="#"><img src="images/shop/shoes/1.jpg" alt="Dark Brown Boots"></a>
                                        <div class="product-overlay">
                                            <a href="#" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to Cart</span></a>
                                            <a href="include/ajax/shop-item.html" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span> Quick View</span></a>
                                        </div>
                                    </div>
                                    <div class="product-desc center">
                                        <div class="product-title"><h3><a href="#">Dark Brown Boots</a></h3></div>
                                        <div class="product-price">$49</div>
                                        <div class="product-rating">
                                            <i class="icon-star3"></i>
                                            <i class="icon-star3"></i>
                                            <i class="icon-star3"></i>
                                            <i class="icon-star-empty"></i>
                                            <i class="icon-star-empty"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="oc-item">
                                <div class="product iproduct clearfix">
                                    <div class="product-image">
                                        <a href="#"><img src="images/shop/dress/2.jpg" alt="Light Blue Denim Dress"></a>
                                        <a href="#"><img src="images/shop/dress/2-2.jpg" alt="Light Blue Denim Dress"></a>
                                        <div class="product-overlay">
                                            <a href="#" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to Cart</span></a>
                                            <a href="include/ajax/shop-item.html" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span> Quick View</span></a>
                                        </div>
                                    </div>
                                    <div class="product-desc center">
                                        <div class="product-title"><h3><a href="#">Light Blue Denim Dress</a></h3></div>
                                        <div class="product-price">$19.95</div>
                                        <div class="product-rating">
                                            <i class="icon-star3"></i>
                                            <i class="icon-star3"></i>
                                            <i class="icon-star3"></i>
                                            <i class="icon-star3"></i>
                                            <i class="icon-star-empty"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="oc-item">
                                <div class="product iproduct clearfix">
                                    <div class="product-image">
                                        <a href="#"><img src="images/shop/sunglasses/1.jpg" alt="Unisex Sunglasses"></a>
                                        <a href="#"><img src="images/shop/sunglasses/1-1.jpg" alt="Unisex Sunglasses"></a>
                                        <div class="sale-flash">Sale!</div>
                                        <div class="product-overlay">
                                            <a href="#" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to Cart</span></a>
                                            <a href="include/ajax/shop-item.html" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span> Quick View</span></a>
                                        </div>
                                    </div>
                                    <div class="product-desc center">
                                        <div class="product-title"><h3><a href="#">Unisex Sunglasses</a></h3></div>
                                        <div class="product-price"><del>$19.99</del> <ins>$11.99</ins></div>
                                        <div class="product-rating">
                                            <i class="icon-star3"></i>
                                            <i class="icon-star3"></i>
                                            <i class="icon-star3"></i>
                                            <i class="icon-star-empty"></i>
                                            <i class="icon-star-empty"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

            </section><!-- #content end -->

            <!-- Footer
            ============================================= -->
            <footer id="footer" class="nobg noborder">

                <div class="container clearfix">

                    <!-- Footer Widgets
                    ============================================= -->
                    <div class="footer-widgets-wrap pb-3 border-bottom clearfix">

                        <div class="row">

                            <div class="col-lg-2 col-md-3 col-6">
                                <div class="widget clearfix">

                                    <h4 class="ls0 mb-3 nott">Features</h4>

                                    <ul class="list-unstyled iconlist ml-0">
                                        <li><a href="#">Help Center</a></li>
                                        <li><a href="#">Paid with Moblie</a></li>
                                        <li><a href="#">Status</a></li>
                                        <li><a href="#">Changelog</a></li>
                                        <li><a href="#">Contact Support</a></li>
                                    </ul>

                                </div>
                            </div>
                            <div class="col-lg-2 col-md-3 col-6">
                                <div class="widget clearfix">

                                    <h4 class="ls0 mb-3 nott">Support</h4>

                                    <ul class="list-unstyled iconlist ml-0">
                                        <li><a href="#">Home</a></li>
                                        <li><a href="#">About</a></li>
                                        <li><a href="#">FAQs</a></li>
                                        <li><a href="#">Support</a></li>
                                        <li><a href="#">Contact</a></li>
                                    </ul>

                                </div>
                            </div>
                            <div class="col-lg-2 col-md-3 col-6">
                                <div class="widget clearfix">

                                    <h4 class="ls0 mb-3 nott">Trending</h4>

                                    <ul class="list-unstyled iconlist ml-0">
                                        <li><a href="#">Shop</a></li>
                                        <li><a href="#">Portfolio</a></li>
                                        <li><a href="#">Blog</a></li>
                                        <li><a href="#">Events</a></li>
                                        <li><a href="#">Forums</a></li>
                                    </ul>

                                </div>
                            </div>
                            <div class="col-lg-2 col-md-3 col-6">
                                <div class="widget clearfix">

                                    <h4 class="ls0 mb-3 nott">Get to Know us</h4>

                                    <ul class="list-unstyled iconlist ml-0">
                                        <li><a href="#">Corporate</a></li>
                                        <li><a href="#">Agency</a></li>
                                        <li><a href="#">eCommerce</a></li>
                                        <li><a href="#">Personal</a></li>
                                        <li><a href="#">OnePage</a></li>
                                    </ul>

                                </div>
                            </div>
                            <div class="col-lg-4 col-md-8">
                                <div class="widget clearfix">

                                    <h4 class="ls0 mb-3 nott">Subscribe Now</h4>
                                    <div class="widget subscribe-widget mt-2 clearfix">
                                        <p class="mb-4"><strong>Subscribe</strong> to Our Newsletter to get Important News,
                                            Amazing Offers &amp; Inside Scoops:</p>
                                        <div class="widget-subscribe-form-result"></div>
                                        <form id="widget-subscribe-form" action="include/subscribe.php" method="post"
                                            class="mt-1 nobottommargin d-flex">
                                            <input type="email" id="widget-subscribe-form-email"
                                                name="widget-subscribe-form-email"
                                                class="form-control sm-form-control required email"
                                                placeholder="Enter your Email Address">

                                            <button class="button nott t400 ml-1 my-0" type="submit">Subscribe Now</button>
                                        </form>
                                    </div>

                                </div>
                            </div>

                        </div>

                    </div><!-- .footer-widgets-wrap end -->

                </div>

                <!-- Copyrights
                ============================================= -->
                <div id="copyrights" class="nobg">

                    <div class="container clearfix">

                        <div class="row justify-content-between align-items-center">
                            <div class="col-md-6">
                                Copyrights &copy; 2014 All Rights Reserved by Canvas Inc.<br>
                                <div class="copyright-links"><a href="#">Terms of Use</a> / <a href="#">Privacy Policy</a>
                                </div>
                            </div>

                            <div class="col-md-6 d-md-flex flex-md-column align-items-md-end mt-4 mt-md-0">
                                <div class="copyrights-menu copyright-links clearfix">
                                    <a href="#">About</a>/<a href="#">Features</a>/<a href="#">FAQs</a>/<a
                                        href="#">Contact</a>
                                </div>
                            </div>
                        </div>

                    </div>

                </div><!-- #copyrights end -->

            </footer><!-- #footer end -->

        </div><!-- #wrapper end -->
        <!-- Go To Top
        ============================================= -->
        <div id="gotoTop" class="icon-angle-up"></div>
        <script src="{{asset('js/app.js')}}"></script>


        <!-- External JavaScripts
        ============================================= -->
        <script src="{{asset('frontend/js/jquery.js')}}"></script>
        <script src="{{asset('frontend/js/plugins.js')}}"></script>

        <!-- Footer Scripts
        ============================================= -->
        <script src="{{asset('frontend/js/functions.js')}}"></script>

    </body>
</html>