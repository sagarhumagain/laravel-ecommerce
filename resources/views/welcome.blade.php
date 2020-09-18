
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
        <!-- <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endif
                </div>
            @endif
        </div> -->

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

            <!-- Slider
            ============================================= -->
            <section id="slider" class="slider-element swiper_wrapper clearfix" data-autoplay="6000" data-speed="800"
                data-loop="true" data-grab="true" data-effect="fade" data-arrow="false" style="height: 600px;">

                <div class="swiper-container swiper-parent">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide dark" style="background-image: url('{{asset('frontend/demos/shop/images/slider/1.jpg')}}');">
                            <div class="container clearfix">
                                <div class="slider-caption slider-caption-center">
                                    <div class="h5 mb-2 font-secondary">Fresh Arrivals</div>
                                    <h2 class="bottommargin-sm text-white">Winter / 2018</h2>
                                    <a href="#" class="button bg-white text-dark button-light">Shop Menswear</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide dark"
                            style="background: url('{{asset('frontend/demos/shop/images/slider/3.jpg')}}') no-repeat center 20%; background-size: cover">
                            <div class="container clearfix">
                                <div class="slider-caption slider-caption-center">
                                    <div class="h5 mb-2 font-secondary">Summer Collections</div>
                                    <h2 class="bottommargin-sm text-white">Sale 40% Off</h2>
                                    <a href="#" class="button bg-white text-dark button-light">Shop Beachwear</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide dark"
                            style="background: url('{{asset('frontend/demos/shop/images/slider/2.jpg')}}') no-repeat center 40%; background-size: cover">
                            <div class="container clearfix">
                                <div class="slider-caption slider-caption-center">
                                    <h2 class="bottommargin-sm text-white">New Arrivals / 18</h2>
                                    <a href="#" class="button bg-white text-dark button-light">Shop Womenswear</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </section><!-- #Slider End -->

            <!-- Content
            ============================================= -->
            <section id="content">

                <div class="content-wrap">

                    <div class="container clearfix">

                        <!-- Shop Categories
                        ============================================= -->
                        <div class="fancy-title title-dotted-border title-center mb-4">
                            <h4>Shop popular categories</h4>
                        </div>

                        <div class="row shop-categories clearfix">
                            <div class="col-lg-7">
                                <a href="#"
                                    style="background: url('{{asset('frontend/demos/shop/images/categories/2-1.jpg')}}') no-repeat right center; background-size: cover;">
                                    <div class="vertical-middle dark center">
                                        <div class="heading-block nomargin noborder">
                                            <h3 class="nott t600 ls0">For Him</h3>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-5">
                                <a href="#"
                                    style="background: url('{{asset('frontend/demos/shop/images/categories/1.jpg')}}') no-repeat center right; background-size: cover;">
                                    <div class="vertical-middle dark center">
                                        <div class="heading-block nomargin noborder">
                                            <h3 class="nott t600 ls0">For Her</h3>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="col-lg-4">
                                <a href="#"
                                    style="background: url('{{asset('frontend/demos/shop/images/categories/4.jpg')}}') no-repeat center center; background-size: cover;">
                                    <div class="vertical-middle dark center">
                                        <div class="heading-block nomargin noborder">
                                            <h3 class="nott t600 ls0">Popular Products</h3>
                                            <small class="button bg-white text-dark button-light button-mini">Browse
                                                Now</small>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-4">
                                <a href="#"
                                    style="background: url('{{asset('frontend/demos/shop/images/categories/3.jpg')}}') no-repeat center center; background-size: cover;">
                                    <div class="vertical-middle dark center">
                                        <div class="heading-block nomargin noborder">
                                            <h3 class="nott t600 ls0">Footwears</h3>
                                            <small class="button bg-white text-dark button-light button-mini">Shop
                                                Now</small>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-4">
                                <a href="#"
                                    style="background: url('{{asset('frontend/demos/shop/images/categories/5.jpg')}}') no-repeat center center; background-size: cover;">
                                    <div class="vertical-middle dark center">
                                        <div class="heading-block nomargin noborder">
                                            <h3 class="nott t600 ls0">Sportswear</h3>
                                            <small class="button bg-white text-dark button-light button-mini">Shop
                                                Now</small>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <!-- Featured Carousel
                        ============================================= -->
                        <div class="fancy-title title-dotted-border mt-4 mb-1 title-center">
                            <h4>Weekly Featured Items</h4>
                        </div>

                        <div id="oc-products" class="owl-carousel products-carousel carousel-widget" data-margin="20"
                            data-loop="true" data-autoplay="5000" data-nav="true" data-pagi="false" data-items-xs="1"
                            data-items-sm="2" data-items-md="3" data-items-lg="4" data-items-xl="5">

                            <!-- Shop Item 1
                            ============================================= -->
                            <div class="oc-item">
                                <div class="product iproduct clearfix">
                                    <div class="product-image">
                                        <a href="#"><img src="{{asset('frontend/demos/shop/images/items/featured/1.jpg')}}"
                                                alt="Round Neck T-shirts"></a>
                                        <a href="#"><img src="{{asset('frontend/demos/shop/images/items/featured/1-1.jpg')}}"
                                                alt="Round Neck T-shirts"></a>
                                        <div class="sale-flash">Sale!</div>
                                        <div class="product-overlay">
                                            <a href="#" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to
                                                    Cart</span></a>
                                            <a href="demos/shop/ajax/shop-item.html" class="item-quick-view"
                                                data-lightbox="ajax"><i class="icon-line-search"></i><span>Quick
                                                    View</span></a>
                                        </div>
                                    </div>
                                    <div class="product-desc">
                                        <div class="product-title mb-1">
                                            <h3><a href="#">Round Neck Solid Light Blue Colour T-shirts</a></h3>
                                        </div>
                                        <div class="product-price font-primary"><del class="mr-1">$24.99</del>
                                            <ins>$12.49</ins></div>
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

                            <!-- Shop Item 2
                            ============================================= -->
                            <div class="oc-item">
                                <div class="product iproduct clearfix">
                                    <div class="product-image">
                                        <a href="#"><img src="{{asset('frontend/demos/shop/images/items/featured/2.jpg')}}"
                                                alt="Navy Blue Dress"></a>
                                        <a href="#"><img src="{{asset('frontend/demos/shop/images/items/featured/2-1.jpg')}}"
                                                alt="Navy Blue Dress"></a>
                                        <div class="product-overlay">
                                            <a href="#" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to
                                                    Cart</span></a>
                                            <a href="demos/shop/ajax/shop-item.html" class="item-quick-view"
                                                data-lightbox="ajax"><i class="icon-line-search"></i><span>Quick
                                                    View</span></a>
                                        </div>
                                    </div>
                                    <div class="product-desc">
                                        <div class="product-title mb-1">
                                            <h3><a href="#">Navy Blue Dress For Women</a></h3>
                                        </div>
                                        <div class="product-price font-primary"><ins>$19.99</ins></div>
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

                            <!-- Shop Item 3
                            ============================================= -->
                            <div class="oc-item">
                                <div class="product iproduct clearfix">
                                    <div class="product-image">
                                        <a href="#"><img src="{{asset('frontend/demos/shop/images/items/featured/5.jpg')}}" alt="Shoes"></a>
                                        <a href="#"><img src="{{asset('frontend/demos/shop/images/items/featured/5-1.jpg')}}" alt="Shoes"></a>
                                        <div class="product-overlay">
                                            <a href="demos/shop/ajax/shop-item-no-stock.html" class="item-quick-view"
                                                data-lightbox="ajax"><i class="icon-line-search"></i><span>Quick
                                                    View</span></a>
                                        </div>
                                    </div>
                                    <div class="sale-flash bg-danger">Out of Stock!</div>
                                    <div class="product-desc">
                                        <div class="product-title mb-1">
                                            <h3><a href="#">White athletic shoe</a></h3>
                                        </div>
                                        <div class="product-price font-primary"><ins>$35.00</ins></div>
                                        <div class="product-rating">
                                            <i class="icon-star3"></i>
                                            <i class="icon-star3"></i>
                                            <i class="icon-star3"></i>
                                            <i class="icon-star3"></i>
                                            <i class="icon-star3"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Shop Item 4
                            ============================================= -->
                            <div class="oc-item">
                                <div class="product iproduct clearfix">
                                    <div class="product-image">
                                        <div class="fslider" data-arrows="false" data-autoplay="4500">
                                            <div class="flexslider">
                                                <div class="slider-wrap">
                                                    <div class="slide"><a href="#"><img
                                                                src="{{asset('frontend/demos/shop/images/items/featured/4.jpg')}}"
                                                                alt="T-shirts"></a></div>
                                                    <div class="slide"><a href="#"><img
                                                                src="{{asset('frontend/demos/shop/images/items/featured/4-1.jpg')}}"
                                                                alt="T-shirts"></a></div>
                                                    <div class="slide"><a href="#"><img
                                                                src="{{asset('frontend/demos/shop/images/items/featured/4-2.jpg')}}"
                                                                alt="T-shirts"></a></div>
                                                    <div class="slide"><a href="#"><img
                                                                src="{{asset('frontend/demos/shop/images/items/featured/4-3.jpg')}}"
                                                                alt="T-shirts"></a></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-overlay">
                                            <a href="#" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to
                                                    Cart</span></a>
                                            <a href="demos/shop/ajax/shop-item.html" class="item-quick-view"
                                                data-lightbox="ajax"><i class="icon-line-search"></i><span>Quick
                                                    View</span></a>
                                        </div>
                                    </div>
                                    <div class="sale-flash">Sale!</div>
                                    <div class="product-desc">
                                        <div class="product-title mb-1">
                                            <h3><a href="#">Navy blue T-shirt, Round neck, Short Sleeves</a></h3>
                                        </div>
                                        <div class="product-price font-primary"><del class="mr-1">$27.99</del>
                                            <ins>$21.00</ins></div>
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

                            <!-- Shop Item 5
                            ============================================= -->
                            <div class="oc-item">
                                <div class="product iproduct clearfix">
                                    <div class="product-image">
                                        <a href="#"><img src="{{asset('frontend/demos/shop/images/items/featured/3.jpg')}}" alt="T-shirts"></a>
                                        <div class="product-overlay">
                                            <a href="#" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to
                                                    Cart</span></a>
                                            <a href="demos/shop/ajax/shop-item.html" class="item-quick-view"
                                                data-lightbox="ajax"><i class="icon-line-search"></i><span>Quick
                                                    View</span></a>
                                        </div>
                                    </div>
                                    <div class="product-desc">
                                        <div class="product-title mb-1">
                                            <h3><a href="#">Women Black T-Shirt</a></h3>
                                        </div>
                                        <div class="product-price font-primary"><ins>$13.00</ins></div>
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

                        </div>

                    </div>

                    <!-- New Arrival Section
                    ============================================= -->
                    <div class="section my-4">
                        <div class="container">
                            <div class="row " data-layout="fitRows">
                                <div class="col-md-5">
                                    <div class="row">
                                        <div class="col-md-12 center p-5">
                                            <div class="heading-block mb-1 nobottomborder divcenter">
                                                <div class="font-secondary text-black-50 mb-1">New Arrivals</div>
                                                <h3 class="nott ls0">Fresh Arrivals / Autumn 18</h3>
                                                <p class="t400 mt-2 mb-3 text-muted"
                                                    style="font-size: 17px; line-height: 1.4">Dynamically drive
                                                    interdependent metrics for worldwide portals. Proactively grow client
                                                    technology schemas.</p>
                                                <a href="#"
                                                    class="button bg-dark text-white button-dark button-small noleftmargin">Shop
                                                    Now</a>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <a href="{{asset('frontend/demos/shop/images/sections/1-2.jpg')}}" data-lightbox="image"><img
                                                    src="demos/shop/images/sections/1-2.jpg" alt=""></a>
                                        </div>
                                        <div class="col-6">
                                            <a href="{{asset('frontend/demos/shop/images/sections/1-3.jpg')}}" data-lightbox="image"><img
                                                    src="demos/shop/images/sections/1-3.jpg" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-7 d-none d-md-block">
                                    <a href="https://www.youtube.com/watch?v=bpNcuh_BnsA" data-lightbox="iframe"
                                        class="d-block"
                                        style="background: url('{{asset('frontend/demos/shop/images/sections/1.jpg')}}') center center no-repeat; background-size: cover; height:100%">
                                        <div class="vertical-middle center">
                                            <div class="play-icon"><i class="icon-play-sign display-3 text-light"></i></div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="clear"></div>

                    <!-- New Arrivals Men
                    ============================================= -->
                    <div class="container clearfix">

                        <div class="fancy-title title-dotted-border topmargin-sm mb-4 title-center">
                            <h4>New Arrivals: Men</h4>
                        </div>

                        <div class="row grid-6">
                        @foreach($products as $product)

                            <!-- Shop Item 1
                            ============================================= -->
                            <div class="col-md-4">
                                <div class="product iproduct clearfix">
                                    <div class="product-image">
                                        <a href="#"><img src="{{asset('frontend/demos/shop/images/items/new/1.jpg')}}" alt="Image 1"></a>
                                        <a href="#"><img src="{{asset('frontend/demos/shop/images/items/new/1-1.jpg')}}" alt="Image 1"></a>
                                        <div class="sale-flash">Sale!</div>
                                        <div class="product-overlay">
                                            <a href="#" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to
                                                    Cart</span></a>
                                            <a href="demos/shop/ajax/shop-item.html" class="item-quick-view"
                                                data-lightbox="ajax"><i class="icon-line-search"></i><span>Quick
                                                    View</span></a>
                                        </div>
                                    </div>
                                    <div class="product-desc">
                                        <div class="product-title mb-1">
                                            <h3><a href="#">{{$product->name}}</a></h3>
                                        </div>
                                        <div class="product-price font-primary"><del class="mr-1">$24.99</del>
                                            <ins>NRS {{$product->price}}</ins></div>
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
                            @endforeach
                        </div>

                    </div>

                    <!-- Sign Up
                    ============================================= -->
                    <div class="section my-4 py-5 clearfix">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="row align-items-stretch align-items-center clearfix">
                                        <div class="col-md-7"
                                            style="background: url('demos/shop/images/sections/3.jpg') center center no-repeat; background-size: cover;">
                                            <div class=" pl-5 d-md-none">
                                                <h2 class="pl-5"><strong>40%</strong> Off<br>First Order*</h2>
                                            </div>
                                        </div>
                                        <div class="col-md-5 bg-white">
                                            <div class="card noborder py-2">
                                                <div class="card-body">
                                                    <h3 class="card-title mb-4 ls0">Sign up to get the most out of shopping.
                                                    </h3>
                                                    <ul class="iconlist ml-3">
                                                        <li><i class="icon-circle-blank text-black-50"></i> Receive
                                                            Exclusive Sale Alerts</li>
                                                        <li><i class="icon-circle-blank text-black-50"></i> 30 Days Return
                                                            Policy</li>
                                                        <li><i class="icon-circle-blank text-black-50"></i> Cash on Delivery
                                                            Accepted</li>
                                                    </ul>
                                                    <a href="#"
                                                        class="button button-rounded ls0 t600 ml-0 mb-2 nott px-4">Sign
                                                        Up</a><br>
                                                    <small class="font-italic text-black-50">Don't worry, it's totally
                                                        free.</small>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="clear"></div>

                    <div class="container clearfix">

                        <!-- Features
                        ============================================= -->
                        <div class="row topmargin clearfix">
                            <div class="col-lg-7">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="feature-box fbox-small fbox-plain">
                                            <div class="fbox-icon">
                                                <a href="#"><i class="icon-line2-present text-dark text-dark"></i></a>
                                            </div>
                                            <h3 class="t400">100% Original</h3>
                                            <p>Canvas provides support for Native HTML5 Videos that can be added to a Full
                                                Width Background.</p>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 mt-4 mt-sm-0">
                                        <div class="feature-box fbox-small fbox-plain">
                                            <div class="fbox-icon">
                                                <a href="#"><i class="icon-line2-globe text-dark"></i></a>
                                            </div>
                                            <h3 class="t400">Free Shipping</h3>
                                            <p>Display your Content attractively using Parallax Sections that have unlimited
                                                customizable areas.</p>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 mt-4">
                                        <div class="feature-box fbox-small fbox-plain">
                                            <div class="fbox-icon">
                                                <a href="#"><i class="icon-line2-reload text-dark"></i></a>
                                            </div>
                                            <h3 class="t400">30-Days Returns</h3>
                                            <p>You have complete easy control on each &amp; every element that provides
                                                endless customization possibilities.</p>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 mt-4">
                                        <div class="feature-box fbox-small fbox-plain">
                                            <div class="fbox-icon">
                                                <a href="#"><i class="icon-line2-wallet text-dark"></i></a>
                                            </div>
                                            <h3 class="t400">Payment Options</h3>
                                            <p>We accept Visa, MasterCard and American Express. And We also Deliver by
                                                COD(only in US)</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-5 mt-4 mt-lg-0">
                                <div class="accordion clearfix">

                                    <div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i
                                            class="acc-open icon-remove-circle"></i>Our Mission</div>
                                    <div class="acc_content clearfix">Donec sed odio dui. Nulla vitae elit libero, a
                                        pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit. Integer
                                        posuere erat a ante venenatis dapibus posuere velit aliquet.</div>

                                    <div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i
                                            class="acc-open icon-remove-circle"></i>What we Do?</div>
                                    <div class="acc_content clearfix">Integer posuere erat a ante venenatis dapibus posuere
                                        velit aliquet. Duis mollis, est non commodo luctus. Aenean lacinia bibendum nulla
                                        sed consectetur. Cras mattis consectetur purus sit amet fermentum.</div>

                                    <div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i
                                            class="acc-open icon-remove-circle"></i>Our Company's Values</div>
                                    <div class="acc_content clearfix">Nullam id dolor id nibh ultricies vehicula ut id elit.
                                        Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Duis mollis,
                                        est non commodo luctus. Aenean lacinia bibendum nulla sed consectetur.</div>

                                    <div class="acctitle"><i class="acc-closed icon-ok-circle"></i><i
                                            class="acc-open icon-remove-circle"></i>Our Return Policy</div>
                                    <div class="acc_content clearfix">Integer posuere erat a ante venenatis dapibus posuere
                                        velit aliquet. Duis mollis, est non commodo luctus. Aenean lacinia bibendum nulla
                                        sed consectetur. Cras mattis consectetur purus sit amet fermentum.</div>

                                </div>
                            </div>

                        </div>

                        <div class="clear"></div>

                        <!-- Brands
                        ============================================= -->
                        <div class="row mt-5 clearfix">
                            <div class="col-12">
                                <div class="fancy-title title-dotted-border title-center mb-4">
                                    <h4>Brands who give Flat <span class="text-danger">40%</span> Off</h4>
                                </div>

                                <ul class="clients-grid grid-8 nobottommargin clearfix">
                                    <li><a href="#"><img src="images/clients/logo/1.png" alt="Clients"></a></li>
                                    <li><a href="#"><img src="images/clients/logo/2.png" alt="Clients"></a></li>
                                    <li><a href="#"><img src="images/clients/logo/3.png" alt="Clients"></a></li>
                                    <li><a href="#"><img src="images/clients/logo/4.png" alt="Clients"></a></li>
                                    <li><a href="#"><img src="images/clients/logo/5.png" alt="Clients"></a></li>
                                    <li><a href="#"><img src="images/clients/logo/6.png" alt="Clients"></a></li>
                                    <li><a href="#"><img src="images/clients/logo/7.png" alt="Clients"></a></li>
                                    <li><a href="#"><img src="images/clients/logo/8.png" alt="Clients"></a></li>
                                    <li><a href="#"><img src="images/clients/logo/9.png" alt="Clients"></a></li>
                                    <li><a href="#"><img src="images/clients/logo/10.png" alt="Clients"></a></li>
                                    <li><a href="#"><img src="images/clients/logo/11.png" alt="Clients"></a></li>
                                    <li><a href="#"><img src="images/clients/logo/12.png" alt="Clients"></a></li>
                                    <li><a href="#"><img src="images/clients/logo/13.png" alt="Clients"></a></li>
                                    <li><a href="#"><img src="images/clients/logo/14.png" alt="Clients"></a></li>
                                    <li><a href="#"><img src="images/clients/logo/15.png" alt="Clients"></a></li>
                                    <li><a href="#"><img src="images/clients/logo/16.png" alt="Clients"></a></li>
                                </ul>
                            </div>
                        </div>

                    </div>

                    <div class="clear"></div>

                    <!-- App Buttons
                    ============================================= -->
                    <div class="section pb-0 mb-0 clearfix" style="background-color: #f8f5f0">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6 offset-1 bottommargin-lg d-flex flex-column align-self-center">
                                    <h3 class="card-title t400 ls0">Follow. Find. Favorite.<br>Discover Fashion on the Go.
                                    </h3>
                                    <span>Proactively enable Corporate Benefits.</span>
                                    <div class="mt-3">
                                        <a href="#"
                                            class="button inline-block button-small button-rounded button-desc t400 ls1 clearfix"><i
                                                class="icon-apple"></i>
                                            <div><span>Download Canvas Shop</span>App Store</div>
                                        </a>
                                        <a href="#"
                                            class="button inline-block button-small button-rounded button-desc button-light text-dark t400 ls1 bg-white border clearfix"><i
                                                class="icon-googleplay"></i>
                                            <div><span>Download Canvas Shop</span>Google Play</div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-4 d-none d-md-flex align-items-end">
                                    <img src="demos/shop/images/sections/app.png" alt="Image" class="nobottommargin">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Last Section
                    ============================================= -->
                    <div class="section footer-stick bg-white nomargin py-3 border-bottom">
                        <div class="container clearfix">

                            <div class="row clearfix">
                                <div class="col-lg-4 col-md-6">
                                    <div class="shop-footer-features mb-3 mb-lg-3"><i class="icon-line2-globe-alt"></i>
                                        <h5 class="inline-block mb-0 ml-2 t600"><a href="#">Free Shipping</a><span
                                                class="t400 text-muted"> &amp; Easy Returns</span></h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6">
                                    <div class="shop-footer-features mb-3 mb-lg-3"><i class="icon-line2-notebook"></i>
                                        <h5 class="inline-block mb-0 ml-2"><a href="#">Geniune Products</a><span
                                                class="t400 text-muted"> Guaranteed</span></h5>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12">
                                    <div class="shop-footer-features mb-3 mb-lg-3"><i class="icon-line2-lock"></i>
                                        <h5 class="inline-block mb-0 ml-2"><a href="#">256-Bit</a> <span
                                                class="t400 text-muted">Secured Checkouts</span></h5>
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
