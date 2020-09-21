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
                            <!-- showing onlyif cart has items -->
                            <div id="top-cart">
                                <a href="#" id="top-cart-trigger"><i class="icon-line-bag"></i>
                                @if( Cart::count()>0 )
                                <span>{{ Cart::count() }}</span>
                                </a>
                                <div class="top-cart-content">
                                    <div class="top-cart-title">
                                        <h4>Shopping Cart</h4>
                                    </div>
                                    <div class="top-cart-items">
                                    @foreach ( Cart::content() as $item)

                                        <div class="top-cart-item clearfix">
                                            <div class="top-cart-item-image">
                                                <a href="#"><img src="{{asset('frontend/demos/shop/images/items/featured/5.jpg')}}"
                                                        alt="Blue Shoulder Bag" /></a>
                                            </div>
                                            <div class="top-cart-item-desc">
                                                <a href="#" class="t400">{{$item->name}}</a>
                                                <span class="top-cart-item-price">{{$item->price}}</span>
                                                <span class="top-cart-item-quantity t600">1</span>
                                            </div>
                                        </div>

                                    @endforeach
                                    </div>
                                    <div class="top-cart-action clearfix">
                                        <span class="fleft top-checkout-price t600 text-dark">{{Cart::subtotal()}}</span>
                                        <a href="{{ route('cart.index')}}" class="button button-dark button-small nomargin fright">View Cart</a>
                                    </div>
                                </div>
                                @else
                                <div class="top-cart-content">
                                    <div class="top-cart-title">
                                        <h4>Shopping Cart</h4>
                                    </div>
                                    <div class="top-cart-items">
                                    <h3 class="nobottommargin">No items in cart</h3>
                                    </div>
                                </div>
                                

                                @endif
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
