<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from htmldemo.net/argima/argima/index-two.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Jul 2024 08:32:29 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Argima - Cosmetics & Beauty eCommerce</title>

    <!--== Favicon ==-->
    <link rel="shortcut icon" href="{{asset ('assets/img/favicon.ico') }}" type="image/x-icon" />

    <!--== Google Fonts ==-->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800;900&amp;display=swap" rel="stylesheet">

    <!--== Bootstrap CSS ==-->
    <link href="{{asset ('assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{asset ('assets/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{asset ('assets/css/pagination.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{asset ('assets/css/bootstrap.min.css') }}" rel="stylesheet" />


    <!--== Ionicon CSS ==-->
    <link href="{{asset ('assets/css/ionicons.min.css') }}" rel="stylesheet" />
    <!--== Simple Line Icon CSS ==-->
    <link href="{{asset ('assets/css/simple-line-icons.css') }}" rel="stylesheet" />
    <!--== Line Icons CSS ==-->
    <link href="{{asset ('assets/css/lineIcons.css') }}" rel="stylesheet" />
    <!--== Font Awesome Icon CSS ==-->
    <link href="{{asset ('assets/css/font-awesome.min.css') }}" rel="stylesheet" />
    <!--== Animate CSS ==-->
    <link href="{{asset ('assets/css/animate.css') }}" rel="stylesheet" />
    <!--== Swiper CSS ==-->
    <link href="{{asset ('assets/css/swiper.min.css') }}" rel="stylesheet" />
    <!--== Range Slider CSS ==-->
    <link href="{{asset ('assets/css/range-slider.css') }}" rel="stylesheet" />
    <!--== Fancybox Min CSS ==-->
    <link href="{{asset ('assets/css/fancybox.min.css') }}" rel="stylesheet" />
    <!--== Slicknav Min CSS ==-->
    <link href="{{asset ('assets/css/slicknav.css') }}" rel="stylesheet" />
    <!--== Owl Carousel Min CSS ==-->
    <link href="{{asset ('assets/css/owlcarousel.min.css') }}" rel="stylesheet" />
    <!--== Owl Theme Min CSS ==-->
    <link href="{{asset ('assets/css/owltheme.min.css') }}" rel="stylesheet" />
    <!--== Spacing CSS ==-->
    <link href="{{asset ('assets/css/spacing.css') }}" rel="stylesheet" />



    <!--== Main Style CSS ==-->
    <link href="{{asset ('assets/css/style.css') }}" rel="stylesheet" />

    <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

    <!--wrapper start-->
    <div class="wrapper product-inner-wrapper">
        <!--== Start Header Wrapper ==-->
        <header class="header-area header-default header-style">
            <!--== Start Header Top ==-->
            <div class="header-top">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 text-md-start text-center">
                            <p>Additional 20% Off Sale Items – Please See Details</p>
                        </div>
                        <div class="col-md-6 text-md-end text-center mt-sm-15">
                            <div class="theme-setting">
                                @if(Auth::check())
                                <a class="dropdown-btn" href="#" role="button">
                                    {{ Auth::User()->name }}
                                    <i class="ion-ios-arrow-down"></i>
                                </a>
                                <ul class="dropdown-content">
                                    <ul>
                                        <li><a href="">Thông tin</a></li>
                                        <li><a href="{{route('logout')}}">Đăng xuất</a></li>
                                    </ul>
                                </ul>
                                @else
                                <a class="dropdown-btn" href="#" role="button">
                                    Tài Khoản
                                    <i class="ion-ios-arrow-down"></i>
                                </a>
                                <ul class="dropdown-content">
                                    <li>
                                        <a href="{{route('login')}}">Đăng nhập</a>
                                    </li>
                                    <li>
                                        <a href="{{route('register')}}">Đăng ký</a>
                                    </li>
                                </ul>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--== End Header Top ==-->
            <!--== Start Header Bottom ==-->
            <div class="header-bottom sticky-header hidden-md-down">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col col-12">
                            <div class="header-align align-default">
                                <div class="align-left">
                                    <div class="header-logo-area">
                                        <a href="{{ route('home') }}">
                                            <img class="logo-main" src="{{asset ('assets/img/logo.png') }}" alt="Logo" />
                                            <img class="logo-light d-none" src="{{asset ('assets/img/logo-light.png') }}" alt="Logo" />
                                        </a>
                                    </div>
                                    <div class="header-navigation-area hidden-md-down">
                                        <ul class="main-menu nav position-relative">
                                            <li>
                                                <a href="{{route('home')}}">Trang chủ</a>
                                            </li>
                                            <li class="has-submenu full-width">
                                                <a href="{{route('product')}}">Danh Mục</a>
                                                <ul class="submenu-nav">
                                                    @foreach($categories as $category)
                                                    <li class="mega-menu-item">
                                                        <a href="{{route('product', ['category_id' => $category->_id]) }}" class="mega-title">{{$category->categoryname}}</a>
                                                    </li>
                                                    @endforeach
                                                </ul>
                                            </li>
                                            <li><a href="#">Tra cứu đơn hàng</a>
                                            <li><a href="">Liên hệ</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="align-right">
                                    <div class="header-action-area float-start">
                                        <div class="search-content-wrap">
                                            <button class="btn-search">
                                                <span class="icon icon-search icon-magnifier"></span>
                                            </button>
                                            <div class="btn-search-content">
                                                <form action="#" method="post">
                                                    <div class="form-input-item">
                                                        <input type="text" placeholder="Enter your search key ...">
                                                        <button type="submit" class="btn-src">
                                                            <i class="icon-magnifier"></i>
                                                        </button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="shop-button-group">
                                            <div class="shop-button-item">
                                                <a class="shop-button" href="{{route('cart')}}">
                                                    <i class="icon-bag icon"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--== End Header Bottom ==-->
            <!--== Start Responsive Header ==-->
            <div class="responsive-header">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-4">
                            <div class="header-item">
                                <button class="btn-menu" type="button"><i class="icon-menu"></i></button>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="header-item justify-content-center">
                                <div class="header-logo-area">
                                    <a href="index.html">
                                        <img class="logo-main" src="{{asset ('assets/img/logo.png') }}" alt="Logo" />
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="header-item justify-content-end">
                                <button class="btn-user" onclick="window.location.href='my-account.html'"><i class="icon-user"></i></button>
                                <button class="btn-cart" onclick="window.location.href='cart.html'"><i class="icon-bag"></i> <span class="item-count">2</span></button>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="responsive-search-content">
                                <form action="#">
                                    <div class="form-input-item">
                                        <input type="text" placeholder="Enter your search key ...">
                                        <button type="submit" class="btn-src">
                                            <i class="icon-magnifier"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--== End Responsive Header ==-->
        </header>
        <!--== End Header Wrapper ==-->
        <main class="main-content">
            @yield('content')
        </main>
        <!--== Start Contact Info Area Wrapper ==-->
        <section class="bg-black-color">
            <div class="container pt-35 pb-40">
                <div class="row">
                    <div class="col-12">
                        <div class="contact-info contact-info-static">
                            <div class="row">
                                <div class="col-border col-12 col-md-4 col-sm-6 border-0">
                                    <div class="info-item">
                                        <div class="icon-box">
                                            <i class="icon las la-phone-volume"></i>
                                        </div>
                                        <p>1800.3687.6886 M-F 9AM-6PM</p>
                                    </div>
                                </div>
                                <div class="col-border col-12 col-md-4 col-sm-6 mt-xs-35">
                                    <div class="info-item">
                                        <div class="icon-box">
                                            <i class="icon las la-envelope"></i>
                                        </div>
                                        <p>demo@example.com</p>
                                    </div>
                                </div>
                                <div class="col-border col-12 col-md-4 col-sm-12 mt-sm-35">
                                    <div class="info-item">
                                        <div class="icon-box">
                                            <i class="icon lab la-facebook-messenger"></i>
                                        </div>
                                        <p>Virtual Chat 24/7 | Live M-F 9am-6pm</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--== End Contact Info Area Wrapper ==-->
        <!--== Start Divider Area Wrapper ==-->
        <section class="divider-area">
            <div class="container pt-90 pt-lg-70 pb-lg-60">
                <div class="row">
                    <div class="col-12">
                        <div class="divider-style-wrap">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="divider-content text-center">
                                        <h4 class="title hidden-sm-down">Let’s Connect On Social</h4>
                                        <h4 class="title2 hidden-md-up collapsed" data-bs-toggle="collapse" data-bs-target="#dividerId-1">Let’s Connect On Social</h4>
                                        <div id="dividerId-1" class="collapse">
                                            <div class="social-icons">
                                                <a href="#/"><i class="la la-facebook"></i></a>
                                                <a href="#/"><i class="la la-twitter"></i></a>
                                                <a href="#/"><i class="la la-youtube"></i></a>
                                                <a href="#/"><i class="la la-instagram"></i></a>
                                            </div>
                                            <p class="mb-sm-25">Follow us on your favorite platforms. Check out new launch teasers, how-to videos, and share your favorite looks.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="divider-content text-center">
                                        <h4 class="title hidden-sm-down" data-margin-bottom="32">Sign Up For Newsletter</h4>
                                        <h4 class="title2 hidden-md-up collapsed" data-bs-toggle="collapse" data-bs-target="#dividerId-2">Sign Up For Newsletter</h4>
                                        <div id="dividerId-2" class="collapse">
                                            <div class="newsletter-content-wrap">
                                                <div class="newsletter-form">
                                                    <form>
                                                        <input type="email" class="form-control" placeholder="Your email address">
                                                        <button class="btn btn-submit" type="button">Sign up</button>
                                                    </form>
                                                </div>
                                            </div>
                                            <p>You may unsubscribe at any moment. For that purpose, please find our contact info in the legal notice.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--== End Divider Area Wrapper ==-->
        <footer class="footer-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <!--== Start Footer Widget Area ==-->
                        <div class="footer-widget-area pb-30">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="widget-item">
                                        <div class="about-widget">
                                            <div class="inner-content">
                                                <div class="footer-logo">
                                                    <a href="index.html">
                                                        <img class="logo-light" src="{{asset ('assets/img/logo-light.png') }}" alt="Logo" />
                                                    </a>
                                                </div>
                                                <p>Location: 4710-4890 Breckỉnidge St, Fayettevill USA</p>
                                            </div>
                                            <div class="widget-desc">
                                                <p>We are a team of designers and developers that create high quality Magento, Prestashop, Opencart.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="widget-item">
                                        <div class="widget-menu-wrap">
                                            <ul class="nav-menu">
                                                <li><a href="#/">Delivery</a></li>
                                                <li><a href="#/">Legal Notice</a></li>
                                                <li><a href="about-us.html">About us</a></li>
                                                <li><a href="#/">Secure payment</a></li>
                                                <li><a href="contact.html">Contact us</a></li>
                                                <li><a href="#/">Sitemap</a></li>
                                                <li><a href="login.html">Login</a></li>
                                                <li><a href="my-account.html">My account</a></li>
                                                <li><a href="shop.html">Stores</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--== End Footer Widget Area ==-->
                    </div>
                </div>
            </div>
            <!--== Start Footer Bottom Area ==-->
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <p class="copyright">Copyright © 2022 All Rights Reserved | Made with <i class="fa fa-heart-o"></i> by <a target="_blank" href="https://www.hasthemes.com/">HasThemes.</a></p>
                        </div>
                        <div class="col-lg-6">
                            <div class="payment">
                                <img src="{{asset ('assets/img/photos/payment.png') }}" alt="Payment">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--== End Footer Bottom Area ==-->
        </footer>
        <!--== End Footer Area Wrapper ==-->
        <!--== Scroll Top Button ==-->
        <div id="scroll-to-top" class="scroll-to-top"><span class="ion-md-arrow-up"></span></div>

        <!--== Start Side Menu ==-->
        <aside class="off-canvas-wrapper">
            <div class="off-canvas-inner">
                <div class="off-canvas-overlay"></div>
                <!-- Start Off Canvas ~/assets Wrapper -->
                <div class="off-canvas-content">
                    <!-- Off Canvas Header -->
                    <div class="off-canvas-header">
                        <div class="close-action">
                            <button class="btn-menu-close">menu<i class="icon-arrow-left"></i></button>
                        </div>
                    </div>

                    <div class="off-canvas-item">
                        <!-- Start Mobile Menu Wrapper -->
                        <div class="res-mobile-menu menu-active-one">
                            <!-- Note ~/assets Auto Generate By Jquery From Main Menu -->
                        </div>
                        <!-- End Mobile Menu Wrapper -->
                    </div>
                </div>
                <!-- End Off Canvas ~/assets Wrapper -->
            </div>
        </aside>
        <!--== End Side Menu ==-->
        <!--== Start Popup Product  ==-->
        <div class="popup-product-quickview">
            <div class="product-single-item">
                <div class="row">
                    <div class="col-md-6">
                        <!--== Start Product Thumbnail Area ==-->
                        <div class="product-thumb">
                            <div class="swiper-container single-product-thumb-content single-product-thumb-slider">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <a href="#/">
                                            <img src="{{asset ('assets/img/shop/product-single/05.jpg') }}" alt="Image-HasTech">
                                            <span class="product-flag-new">New</span>
                                        </a>
                                    </div>
                                    <div class="swiper-slide">
                                        <a href="#/">
                                            <img src="{{asset ('assets/img/shop/product-single/06.jpg') }}" alt="Image-HasTech">
                                            <span class="product-flag-new">New</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-container single-product-nav-content single-product-nav-slider">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img src="{{asset ('assets/img/shop/product-single/nav-05.jpg') }}" alt="Image-HasTech">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="{{asset ('assets/img/shop/product-single/nav-06.jpg') }}" alt="Image-HasTech">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--== End Product Thumbnail Area ==-->
                    </div>
                    <div class="col-md-6">
                        <!--== Start Product Info Area ==-->
                        <div class="product-single-info mt-sm-70">
                            <h1 class="title">Water And Wind Resistant Insulated Jacket</h1>
                            <div class="product-info">
                                <div class="star-content">
                                    <i class="ion-md-star"></i>
                                    <i class="ion-md-star"></i>
                                    <i class="ion-md-star"></i>
                                    <i class="ion-md-star"></i>
                                    <i class="ion-md-star icon-color-gray"></i>
                                </div>
                                <ul class="comments-advices">
                                    <li><a href="#/" class="reviews"><i class="fa fa-commenting-o"></i>Read reviews (1)</a></li>
                                    <li><a href="#/" class="comment"><i class="fa fa-pencil-square-o"></i>Write a review</a></li>
                                </ul>
                            </div>
                            <div class="prices">
                                <span class="price">€14.52</span>
                                <div class="tax-label">Tax included</div>
                            </div>
                            <div class="product-description">
                                <ul class="product-desc-list">
                                    <li>Stay ready for a change in weather with the IZOD® Water and Wind Resistant Insulated Jacket.</li>
                                    <li>Water-resistant jacket keeps you warm and dry.</li>
                                    <li>Stand collar features an attached hood.</li>
                                    <li>Front-zip closure.</li>
                                </ul>
                            </div>
                            <div class="product-quick-action">
                                <div class="product-quick-qty">
                                    <div class="pro-qty">
                                        <input type="text" id="quantity" title="Quantity" value="1">
                                    </div>
                                </div>
                                <a class="btn-product-add" href="single-product.html">Add to cart</a>
                            </div>
                            <div class="product-wishlist-compare">
                                <a href="#" class="btn-wishlist"><i class="icon-heart"></i>Add to wishlist</a>
                                <a href="#" class="btn-compare"><i class="icon-shuffle"></i>Add to compare</a>
                            </div>
                            <div class="social-sharing">
                                <span>Share</span>
                                <div class="social-icons">
                                    <a href="#/"><i class="la la-facebook"></i></a>
                                    <a href="#/"><i class="la la-twitter"></i></a>
                                </div>
                            </div>
                        </div>
                        <!--== End Product Info Area ==-->
                    </div>
                </div>
            </div>
        </div>
        <div class="popup-product-overlay"></div>
        <button class="popup-product-close"><i class="la la-close"></i></button>
        <!--== End Popup Product  ==-->
    </div>

    <!--=======================Javascript============================-->
    <!--=== Modernizr Min Js ===-->
    <script src="{{asset ('assets/js/modernizr.js') }}"></script>
    <!--=== jQuery Min Js ===-->
    <script src="{{asset ('assets/js/jquery-main.js') }}"></script>
    <!--=== jQuery Migration Min Js ===-->
    <script src="{{asset ('assets/js/jquery-migrate.js') }}"></script>
    <!--=== Bootstrap Min Js ===-->
    <script src="{{asset ('assets/js/bootstrap.min.js') }}"></script>
    <!--=== jQuery Appear Js ===-->
    <script src="{{asset ('assets/js/jquery.appear.js') }}"></script>
    <!--=== jQuery Swiper Min Js ===-->
    <script src="{{asset ('assets/js/swiper.min.js') }}"></script>
    <!--=== jQuery Fancy Box Min Js ===-->
    <script src="{{asset ('assets/js/fancybox.min.js') }}"></script>
    <!--=== jQuery Slick Nav Js ===-->
    <script src="{{asset ('assets/js/slicknav.js') }}"></script>
    <!--=== jQuery Waypoints Js ===-->
    <script src="{{asset ('assets/js/waypoints.js') }}"></script>
    <!--=== jQuery Owl Carousel Min Js ===-->
    <script src="{{asset ('assets/js/owlcarousel.min.js') }}"></script>
    <!--=== jQuery Match Height Min Js ===-->
    <script src="{{asset ('assets/js/jquery-match-height.min.js') }}"></script>
    <!--=== jQuery Zoom Min Js ===-->
    <script src="{{asset ('assets/js/jquery-zoom.min.js') }}"></script>
    <!--=== Countdown Js ===-->
    <script src="{{asset ('assets/js/countdown.js') }}"></script>

    <!--=== Custom Js ===-->
    <script src="{{asset ('assets/js/custom.js') }}"></script>

</body>


<!-- Mirrored from htmldemo.net/argima/argima/index-two.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 19 Jul 2024 08:32:31 GMT -->

</html>