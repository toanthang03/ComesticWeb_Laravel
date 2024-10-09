@extends('Layout.clientLayout')
@section('title', 'Argima - Sản phảm chính hãng VN')
@section('content')
<section class="home-slider-area">
    <div class="swiper-container swiper-pagination-style home-slider-container default-slider-container">
        <div class="swiper-wrapper home-slider-wrapper slider-default">
            <div class="swiper-slide">
                <div class="slider-content-area" data-bg-img="assets/img/slider/slider-01.jpg">
                    <div class="container">
                        <div class="row justify-content-end">
                            <div class="col-10 col-sm-6 col-md-5">
                                <div class="slider-content animate-pulse">
                                    <h5 class="sub-title transition-slide-0">Real cover pink cushion</h5>
                                    <h2 class="title transition-slide-1 mb-0"><span class="font-weight-400">Face Makeup</span></h2>
                                    <h2 class="title transition-slide-2">Sale 40% Off</h2>
                                    <a class="btn-slide transition-slide-3" href="#/">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="slider-content-area" data-bg-img="assets/img/slider/slider-02.jpg">
                    <div class="container">
                        <div class="row justify-content-end">
                            <div class="col-10 col-sm-6 col-md-5">
                                <div class="slider-content animate-flipInX">
                                    <h5 class="sub-title transition-slide-0">simple organic</h5>
                                    <h2 class="title transition-slide-1 mb-0"><span class="font-weight-400">summer sale</span></h2>
                                    <h2 class="title transition-slide-2">10% All Items</h2>
                                    <a class="btn-slide transition-slide-3" href="#/">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="slider-content-area" data-bg-img="assets/img/slider/slider-03.jpg">
                    <div class="container">
                        <div class="row justify-content-end">
                            <div class="col-10 col-sm-6 col-md-5">
                                <div class="slider-content animate-jackInTheBox">
                                    <h5 class="sub-title transition-slide-0">Organic Skincare</h5>
                                    <h2 class="title transition-slide-1 mb-0"><span class="font-weight-400">LOOKING SKIN</span></h2>
                                    <h2 class="title transition-slide-2">ANTI-AGEING</h2>
                                    <a class="btn-slide transition-slide-3" href="#/">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--== Add Swiper Pagination ==-->
        <div class="swiper-pagination"></div>
    </div>
</section>
<!--== End Hero Area Wrapper ==-->

<!--== Start Product Area Wrapper ==-->
<section class="product-area">
    <div class="container pt-95 pt-lg-70">
        <div class="row">
            <div class="col-sm-8 m-auto">
                <div class="section-title text-center">
                    <h2 class="title">New Arrivals</h2>
                    <div class="desc">
                        <p>Add our new arrivals to your weekly lineup</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="product-slider owl-carousel owl-theme">
                    <div class="item">
                        <!--== Start Shop Item ==-->
                        <div class="product-item">
                            <div class="inner-content">
                                <div class="product-thumb">
                                    <a href="single-product.html">
                                        <img src="assets/img/shop/01.jpg" alt="Image-HasTech">
                                        <img class="second-image" src="assets/img/shop/01-h1.jpg" alt="Image-HasTech">
                                    </a>
                                    <div class="product-action">
                                        <div class="addto-wrap">
                                            <a class="add-wishlist" href="wishlist.html" title="Add to wishlist">
                                                <i class="icon-heart icon"></i>
                                            </a>
                                            <a class="add-compare" href="compare.html" title="Add to compare">
                                                <i class="icon-shuffle icon"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <ul class="product-flag">
                                        <li class="new">New</li>
                                        <li class="discount">-10%</li>
                                    </ul>
                                </div>
                                <div class="product-desc">
                                    <div class="product-info">
                                        <h4 class="title"><a href="single-product.html">Originals Kaval Windbreaker Winter Jac...</a></h4>
                                        <div class="star-content">
                                            <i class="ion-md-star"></i>
                                            <i class="ion-md-star"></i>
                                            <i class="ion-md-star"></i>
                                            <i class="ion-md-star"></i>
                                            <i class="ion-md-star"></i>
                                        </div>
                                        <div class="prices">
                                            <span class="price-old">€29.16</span>
                                            <span class="price">€26.24</span>
                                        </div>
                                    </div>
                                    <div class="product-footer">
                                        <a class="btn-product-add" href="single-product.html">Add to cart</a>
                                        <a class="btn-quick-view" href="javascript:;" title="Quick view">Quick view</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--== End Shop Item ==-->
                    </div>
                    <div class="item">
                        <!--== Start Shop Item ==-->
                        <div class="product-item">
                            <div class="inner-content">
                                <div class="product-thumb">
                                    <a href="single-product.html">
                                        <img src="assets/img/shop/02.jpg" alt="Image-HasTech">
                                        <img class="second-image" src="assets/img/shop/02-h1.jpg" alt="Image-HasTech">
                                    </a>
                                    <div class="product-action">
                                        <div class="addto-wrap">
                                            <a class="add-wishlist" href="wishlist.html" title="Add to wishlist">
                                                <i class="icon-heart icon"></i>
                                            </a>
                                            <a class="add-compare" href="compare.html" title="Add to compare">
                                                <i class="icon-shuffle icon"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <ul class="product-flag">
                                        <li class="new">New</li>
                                        <li class="discount visually-hidden">-10%</li>
                                    </ul>
                                </div>
                                <div class="product-desc">
                                    <div class="product-info">
                                        <h4 class="title"><a href="single-product.html">Juicy Couture Juicy Quilted Terry Track...</a></h4>
                                        <div class="star-content">
                                            <i class="ion-md-star"></i>
                                            <i class="ion-md-star"></i>
                                            <i class="ion-md-star"></i>
                                            <i class="ion-md-star"></i>
                                            <i class="ion-md-star"></i>
                                        </div>
                                        <div class="prices">
                                            <span class="price-old visually-hidden">€29.16</span>
                                            <span class="price text-black">€43.80</span>
                                        </div>
                                    </div>
                                    <div class="product-footer">
                                        <a class="btn-product-add" href="single-product.html">Add to cart</a>
                                        <a class="btn-quick-view" href="javascript:;" title="Quick view">Quick view</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--== End Shop Item ==-->
                    </div>
                    <div class="item">
                        <!--== Start Shop Item ==-->
                        <div class="product-item">
                            <div class="inner-content">
                                <div class="product-thumb">
                                    <a href="single-product.html">
                                        <img src="assets/img/shop/03.jpg" alt="Image-HasTech">
                                        <img class="second-image" src="assets/img/shop/03-h1.jpg" alt="Image-HasTech">
                                    </a>
                                    <div class="product-action">
                                        <div class="addto-wrap">
                                            <a class="add-wishlist" href="wishlist.html" title="Add to wishlist">
                                                <i class="icon-heart icon"></i>
                                            </a>
                                            <a class="add-compare" href="compare.html" title="Add to compare">
                                                <i class="icon-shuffle icon"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <ul class="product-flag">
                                        <li class="new">New</li>
                                        <li class="discount">-5%</li>
                                    </ul>
                                </div>
                                <div class="product-desc">
                                    <div class="product-info">
                                        <h4 class="title"><a href="single-product.html">Madden by Steve Madden Cale 6</a></h4>
                                        <div class="star-content">
                                            <i class="ion-md-star"></i>
                                            <i class="ion-md-star"></i>
                                            <i class="ion-md-star"></i>
                                            <i class="ion-md-star"></i>
                                            <i class="ion-md-star"></i>
                                        </div>
                                        <div class="prices">
                                            <span class="price-old">€14.52</span>
                                            <span class="price">€13.79</span>
                                        </div>
                                    </div>
                                    <div class="product-footer">
                                        <a class="btn-product-add" href="single-product.html">Add to cart</a>
                                        <a class="btn-quick-view" href="javascript:;" title="Quick view">Quick view</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--== End Shop Item ==-->
                    </div>
                    <div class="item">
                        <!--== Start Shop Item ==-->
                        <div class="product-item">
                            <div class="inner-content">
                                <div class="product-thumb">
                                    <a href="single-product.html">
                                        <img src="assets/img/shop/04.jpg" alt="Image-HasTech">
                                        <img class="second-image" src="assets/img/shop/04-h1.jpg" alt="Image-HasTech">
                                    </a>
                                    <div class="product-action">
                                        <div class="addto-wrap">
                                            <a class="add-wishlist" href="wishlist.html" title="Add to wishlist">
                                                <i class="icon-heart icon"></i>
                                            </a>
                                            <a class="add-compare" href="compare.html" title="Add to compare">
                                                <i class="icon-shuffle icon"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <ul class="product-flag">
                                        <li class="new">New</li>
                                        <li class="discount visually-hidden">-5%</li>
                                    </ul>
                                </div>
                                <div class="product-desc">
                                    <div class="product-info">
                                        <h4 class="title"><a href="single-product.html">Trans-Weight Hooded Wind and Water...</a></h4>
                                        <div class="star-content">
                                            <i class="ion-md-star"></i>
                                            <i class="ion-md-star"></i>
                                            <i class="ion-md-star"></i>
                                            <i class="ion-md-star"></i>
                                            <i class="ion-md-star"></i>
                                        </div>
                                        <div class="prices">
                                            <span class="price-old visually-hidden">€14.52</span>
                                            <span class="price text-black">€14.52</span>
                                        </div>
                                    </div>
                                    <div class="product-footer">
                                        <a class="btn-product-add" href="single-product.html">Add to cart</a>
                                        <a class="btn-quick-view" href="javascript:;" title="Quick view">Quick view</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--== End Shop Item ==-->
                    </div>
                    <div class="item">
                        <!--== Start Shop Item ==-->
                        <div class="product-item">
                            <div class="inner-content">
                                <div class="product-thumb">
                                    <a href="single-product.html">
                                        <img src="assets/img/shop/05.jpg" alt="Image-HasTech">
                                        <img class="second-image" src="assets/img/shop/05-h1.jpg" alt="Image-HasTech">
                                    </a>
                                    <div class="product-action">
                                        <div class="addto-wrap">
                                            <a class="add-wishlist" href="wishlist.html" title="Add to wishlist">
                                                <i class="icon-heart icon"></i>
                                            </a>
                                            <a class="add-compare" href="compare.html" title="Add to compare">
                                                <i class="icon-shuffle icon"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <ul class="product-flag">
                                        <li class="new">New</li>
                                        <li class="discount visually-hidden">-5%</li>
                                    </ul>
                                </div>
                                <div class="product-desc">
                                    <div class="product-info">
                                        <h4 class="title"><a href="single-product.html">Water and Wind Resistant Insulated Ja...</a></h4>
                                        <div class="star-content">
                                            <i class="ion-md-star"></i>
                                            <i class="ion-md-star"></i>
                                            <i class="ion-md-star"></i>
                                            <i class="ion-md-star"></i>
                                            <i class="ion-md-star icon-color-gray"></i>
                                        </div>
                                        <div class="prices">
                                            <span class="price-old visually-hidden">€14.52</span>
                                            <span class="price text-black">€14.52</span>
                                        </div>
                                    </div>
                                    <div class="product-footer">
                                        <a class="btn-product-add" href="single-product.html">Add to cart</a>
                                        <a class="btn-quick-view" href="javascript:;" title="Quick view">Quick view</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--== End Shop Item ==-->
                    </div>
                    <div class="item">
                        <!--== Start Shop Item ==-->
                        <div class="product-item">
                            <div class="inner-content">
                                <div class="product-thumb">
                                    <a href="single-product.html">
                                        <img src="assets/img/shop/06.jpg" alt="Image-HasTech">
                                    </a>
                                    <div class="product-action">
                                        <div class="addto-wrap">
                                            <a class="add-wishlist" href="wishlist.html" title="Add to wishlist">
                                                <i class="icon-heart icon"></i>
                                            </a>
                                            <a class="add-compare" href="compare.html" title="Add to compare">
                                                <i class="icon-shuffle icon"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <ul class="product-flag">
                                        <li class="new">New</li>
                                        <li class="discount visually-hidden">-5%</li>
                                    </ul>
                                </div>
                                <div class="product-desc">
                                    <div class="product-info">
                                        <h4 class="title"><a href="single-product.html">New Balance Fresh Foam Kaymin</a></h4>
                                        <div class="star-content">
                                            <i class="ion-md-star"></i>
                                            <i class="ion-md-star"></i>
                                            <i class="ion-md-star"></i>
                                            <i class="ion-md-star"></i>
                                            <i class="ion-md-star"></i>
                                        </div>
                                        <div class="prices">
                                            <span class="price-old visually-hidden">€14.52</span>
                                            <span class="price text-black">€23.06</span>
                                        </div>
                                    </div>
                                    <div class="product-footer">
                                        <a class="btn-product-add" href="single-product.html">Add to cart</a>
                                        <a class="btn-quick-view" href="javascript:;" title="Quick view">Quick view</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--== End Shop Item ==-->
                    </div>
                    <div class="item">
                        <!--== Start Shop Item ==-->
                        <div class="product-item">
                            <div class="inner-content">
                                <div class="product-thumb">
                                    <a href="single-product.html">
                                        <img src="assets/img/shop/07.jpg" alt="Image-HasTech">
                                        <img class="second-image" src="assets/img/shop/07-h1.jpg" alt="Image-HasTech">
                                    </a>
                                    <div class="product-action">
                                        <div class="addto-wrap">
                                            <a class="add-wishlist" href="wishlist.html" title="Add to wishlist">
                                                <i class="icon-heart icon"></i>
                                            </a>
                                            <a class="add-compare" href="compare.html" title="Add to compare">
                                                <i class="icon-shuffle icon"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <ul class="product-flag">
                                        <li class="new">New</li>
                                        <li class="discount">-20%</li>
                                    </ul>
                                </div>
                                <div class="product-desc">
                                    <div class="product-info">
                                        <h4 class="title"><a href="single-product.html">Juicy Couture Solid Sleeve Puffer Jacket</a></h4>
                                        <div class="star-content">
                                            <i class="ion-md-star"></i>
                                            <i class="ion-md-star"></i>
                                            <i class="ion-md-star"></i>
                                            <i class="ion-md-star"></i>
                                            <i class="ion-md-star"></i>
                                        </div>
                                        <div class="prices">
                                            <span class="price-old">€23.06</span>
                                            <span class="price">€18.45</span>
                                        </div>
                                    </div>
                                    <div class="product-footer">
                                        <a class="btn-product-add" href="single-product.html">Add to cart</a>
                                        <a class="btn-quick-view" href="javascript:;" title="Quick view">Quick view</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--== End Shop Item ==-->
                    </div>
                    <div class="item">
                        <!--== Start Shop Item ==-->
                        <div class="product-item">
                            <div class="inner-content">
                                <div class="product-thumb">
                                    <a href="single-product.html">
                                        <img src="assets/img/shop/08.jpg" alt="Image-HasTech">
                                        <img class="second-image" src="assets/img/shop/08-h1.jpg" alt="Image-HasTech">
                                    </a>
                                    <div class="product-action">
                                        <div class="addto-wrap">
                                            <a class="add-wishlist" href="wishlist.html" title="Add to wishlist">
                                                <i class="icon-heart icon"></i>
                                            </a>
                                            <a class="add-compare" href="compare.html" title="Add to compare">
                                                <i class="icon-shuffle icon"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <ul class="product-flag">
                                        <li class="new">New</li>
                                        <li class="discount visually-hidden">-20%</li>
                                    </ul>
                                </div>
                                <div class="product-desc">
                                    <div class="product-info">
                                        <h4 class="title"><a href="single-product.html">New Balance Fresh Foam LAZR v1 Sport</a></h4>
                                        <div class="star-content">
                                            <i class="ion-md-star"></i>
                                            <i class="ion-md-star"></i>
                                            <i class="ion-md-star"></i>
                                            <i class="ion-md-star"></i>
                                            <i class="ion-md-star"></i>
                                        </div>
                                        <div class="prices">
                                            <span class="price-old visually-hidden">€23.06</span>
                                            <span class="price text-black">€23.06</span>
                                        </div>
                                    </div>
                                    <div class="product-footer">
                                        <a class="btn-product-add" href="single-product.html">Add to cart</a>
                                        <a class="btn-quick-view" href="javascript:;" title="Quick view">Quick view</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--== End Shop Item ==-->
                    </div>
                    <div class="item">
                        <!--== Start Shop Item ==-->
                        <div class="product-item">
                            <div class="inner-content">
                                <div class="product-thumb">
                                    <a href="single-product.html">
                                        <img src="assets/img/shop/09.jpg" alt="Image-HasTech">
                                    </a>
                                    <div class="product-action">
                                        <div class="addto-wrap">
                                            <a class="add-wishlist" href="wishlist.html" title="Add to wishlist">
                                                <i class="icon-heart icon"></i>
                                            </a>
                                            <a class="add-compare" href="compare.html" title="Add to compare">
                                                <i class="icon-shuffle icon"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <ul class="product-flag">
                                        <li class="new">New</li>
                                        <li class="discount visually-hidden">-20%</li>
                                    </ul>
                                </div>
                                <div class="product-desc">
                                    <div class="product-info">
                                        <h4 class="title"><a href="single-product.html">Brixton Patrol All Terrain Anorak Jacket</a></h4>
                                        <div class="star-content">
                                            <i class="ion-md-star"></i>
                                            <i class="ion-md-star"></i>
                                            <i class="ion-md-star"></i>
                                            <i class="ion-md-star"></i>
                                            <i class="ion-md-star"></i>
                                        </div>
                                        <div class="prices">
                                            <span class="price-old visually-hidden">€23.06</span>
                                            <span class="price text-black">€35.38</span>
                                        </div>
                                    </div>
                                    <div class="product-footer">
                                        <a class="btn-product-add" href="single-product.html">Add to cart</a>
                                        <a class="btn-quick-view" href="javascript:;" title="Quick view">Quick view</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--== End Shop Item ==-->
                    </div>
                    <div class="item">
                        <!--== Start Shop Item ==-->
                        <div class="product-item">
                            <div class="inner-content">
                                <div class="product-thumb">
                                    <a href="single-product.html">
                                        <img src="assets/img/shop/10.jpg" alt="Image-HasTech">
                                        <img class="second-image" src="assets/img/shop/10-h1.jpg" alt="Image-HasTech">
                                    </a>
                                    <div class="product-action">
                                        <div class="addto-wrap">
                                            <a class="add-wishlist" href="wishlist.html" title="Add to wishlist">
                                                <i class="icon-heart icon"></i>
                                            </a>
                                            <a class="add-compare" href="compare.html" title="Add to compare">
                                                <i class="icon-shuffle icon"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <ul class="product-flag">
                                        <li class="new">New</li>
                                        <li class="discount visually-hidden">-20%</li>
                                    </ul>
                                </div>
                                <div class="product-desc">
                                    <div class="product-info">
                                        <h4 class="title"><a href="single-product.html">New Balance Arishi Sport v1</a></h4>
                                        <div class="star-content">
                                            <i class="ion-md-star"></i>
                                            <i class="ion-md-star"></i>
                                            <i class="ion-md-star"></i>
                                            <i class="ion-md-star"></i>
                                            <i class="ion-md-star icon-color-gray"></i>
                                        </div>
                                        <div class="prices">
                                            <span class="price-old visually-hidden">€23.06</span>
                                            <span class="price text-black">€23.06</span>
                                        </div>
                                    </div>
                                    <div class="product-footer">
                                        <a class="btn-product-add" href="single-product.html">Add to cart</a>
                                        <a class="btn-quick-view" href="javascript:;" title="Quick view">Quick view</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--== End Shop Item ==-->
                    </div>
                    <div class="item">
                        <!--== Start Shop Item ==-->
                        <div class="product-item">
                            <div class="inner-content">
                                <div class="product-thumb">
                                    <a href="single-product.html">
                                        <img src="assets/img/shop/11.jpg" alt="Image-HasTech">
                                        <img class="second-image" src="assets/img/shop/11-h1.jpg" alt="Image-HasTech">
                                    </a>
                                    <div class="product-action">
                                        <div class="addto-wrap">
                                            <a class="add-wishlist" href="wishlist.html" title="Add to wishlist">
                                                <i class="icon-heart icon"></i>
                                            </a>
                                            <a class="add-compare" href="compare.html" title="Add to compare">
                                                <i class="icon-shuffle icon"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <ul class="product-flag">
                                        <li class="new">New</li>
                                        <li class="discount visually-hidden">-20%</li>
                                    </ul>
                                </div>
                                <div class="product-desc">
                                    <div class="product-info">
                                        <h4 class="title"><a href="single-product.html">Calvin Klein Jeans Reflective Logo Full Zip</a></h4>
                                        <div class="star-content">
                                            <i class="ion-md-star"></i>
                                            <i class="ion-md-star"></i>
                                            <i class="ion-md-star"></i>
                                            <i class="ion-md-star"></i>
                                            <i class="ion-md-star"></i>
                                        </div>
                                        <div class="prices">
                                            <span class="price-old visually-hidden">€23.06</span>
                                            <span class="price text-black">€35.38</span>
                                        </div>
                                    </div>
                                    <div class="product-footer">
                                        <a class="btn-product-add" href="single-product.html">Add to cart</a>
                                        <a class="btn-quick-view" href="javascript:;" title="Quick view">Quick view</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--== End Shop Item ==-->
                    </div>
                    <div class="item">
                        <!--== Start Shop Item ==-->
                        <div class="product-item">
                            <div class="inner-content">
                                <div class="product-thumb">
                                    <a href="single-product.html">
                                        <img src="assets/img/shop/12.jpg" alt="Image-HasTech">
                                        <img class="second-image" src="assets/img/shop/12-h1.jpg" alt="Image-HasTech">
                                    </a>
                                    <div class="product-action">
                                        <div class="addto-wrap">
                                            <a class="add-wishlist" href="wishlist.html" title="Add to wishlist">
                                                <i class="icon-heart icon"></i>
                                            </a>
                                            <a class="add-compare" href="compare.html" title="Add to compare">
                                                <i class="icon-shuffle icon"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <ul class="product-flag">
                                        <li class="new">New</li>
                                        <li class="discount visually-hidden">-20%</li>
                                    </ul>
                                </div>
                                <div class="product-desc">
                                    <div class="product-info">
                                        <h4 class="title"><a href="single-product.html">Juicy Couture Tricot Logo Stripe Jacket</a></h4>
                                        <div class="star-content">
                                            <i class="ion-md-star"></i>
                                            <i class="ion-md-star"></i>
                                            <i class="ion-md-star"></i>
                                            <i class="ion-md-star"></i>
                                            <i class="ion-md-star"></i>
                                        </div>
                                        <div class="prices">
                                            <span class="price-old visually-hidden">€23.06</span>
                                            <span class="price text-black">€10.98</span>
                                        </div>
                                    </div>
                                    <div class="product-footer">
                                        <a class="btn-product-add" href="single-product.html">Add to cart</a>
                                        <a class="btn-quick-view" href="javascript:;" title="Quick view">Quick view</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--== End Shop Item ==-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--== End Product Area Wrapper ==-->

<!--== Start Product Discount Area Wrapper ==-->
<section class="product-area product-discount-area">
    <div class="container-fluid spacingX-90 pt-0 pb-0">
        <div class="row">
            <div class="col-xxl-9">
                <div class="thumb thumb-scale-hover-style">
                    <a href="single-product.html"><img src="assets/img/shop/banner/01.jpg" alt="Image-HasTech" class="hover-img"></a>
                </div>
            </div>
            <div class="col-xxl-3">
                <div class="discount-product-slider owl-carousel owl-theme mt-xl-15">
                    <div class="item">
                        <!--== Start Shop Item ==-->
                        <div class="product-item">
                            <div class="inner-content discount-product">
                                <div class="product-thumb">
                                    <a href="single-product.html">
                                        <img src="assets/img/shop/01.jpg" alt="Image-HasTech">
                                        <img class="second-image" src="assets/img/shop/01-h1.jpg" alt="Image-HasTech">
                                    </a>
                                    <div class="product-action">
                                        <div class="addto-wrap">
                                            <a class="add-wishlist" href="wishlist.html" title="Add to wishlist">
                                                <i class="icon-heart icon"></i>
                                            </a>
                                            <a class="add-compare" href="compare.html" title="Add to compare">
                                                <i class="icon-shuffle icon"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <ul class="product-flag">
                                        <li class="new">New</li>
                                        <li class="discount">-10%</li>
                                    </ul>
                                </div>
                                <div class="product-desc">
                                    <div class="product-info">
                                        <h4 class="title"><a href="single-product.html">Originals Kaval Windbreaker Winter Jacket</a></h4>
                                        <div class="star-content">
                                            <i class="ion-md-star"></i>
                                            <i class="ion-md-star"></i>
                                            <i class="ion-md-star"></i>
                                            <i class="ion-md-star"></i>
                                            <i class="ion-md-star"></i>
                                        </div>
                                        <div class="prices">
                                            <span class="price-old">€29.16</span>
                                            <span class="price">€26.24</span>
                                        </div>
                                        <div class="ht-countdown ht-countdown-style1 mt-35" data-date="10/24/2023"></div>
                                    </div>
                                    <div class="product-footer">
                                        <a class="btn-product-add" href="single-product.html">Add to cart</a>
                                        <a class="btn-quick-view" href="javascript:;" title="Quick view">Quick view</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--== End Shop Item ==-->
                    </div>
                    <div class="item">
                        <!--== Start Shop Item ==-->
                        <div class="product-item">
                            <div class="inner-content discount-product">
                                <div class="product-thumb">
                                    <a href="single-product.html">
                                        <img src="assets/img/shop/03.jpg" alt="Image-HasTech">
                                        <img class="second-image" src="assets/img/shop/03-h1.jpg" alt="Image-HasTech">
                                    </a>
                                    <div class="product-action">
                                        <div class="addto-wrap">
                                            <a class="add-wishlist" href="wishlist.html" title="Add to wishlist">
                                                <i class="icon-heart icon"></i>
                                            </a>
                                            <a class="add-compare" href="compare.html" title="Add to compare">
                                                <i class="icon-shuffle icon"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <ul class="product-flag">
                                        <li class="new">New</li>
                                        <li class="discount">-5%</li>
                                    </ul>
                                </div>
                                <div class="product-desc">
                                    <div class="product-info">
                                        <h4 class="title"><a href="single-product.html">Madden by Steve Madden Cale 6</a></h4>
                                        <div class="star-content">
                                            <i class="ion-md-star"></i>
                                            <i class="ion-md-star"></i>
                                            <i class="ion-md-star"></i>
                                            <i class="ion-md-star"></i>
                                            <i class="ion-md-star"></i>
                                        </div>
                                        <div class="prices">
                                            <span class="price-old">€14.52</span>
                                            <span class="price">€13.79</span>
                                        </div>
                                        <div class="ht-countdown ht-countdown-style1 mt-35" data-date="10/24/2023"></div>
                                    </div>
                                    <div class="product-footer">
                                        <a class="btn-product-add" href="single-product.html">Add to cart</a>
                                        <a class="btn-quick-view" href="javascript:;" title="Quick view">Quick view</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--== End Shop Item ==-->
                    </div>
                    <div class="item">
                        <!--== Start Shop Item ==-->
                        <div class="product-item">
                            <div class="inner-content discount-product">
                                <div class="product-thumb">
                                    <a href="single-product.html">
                                        <img src="assets/img/shop/07.jpg" alt="Image-HasTech">
                                        <img class="second-image" src="assets/img/shop/07-h1.jpg" alt="Image-HasTech">
                                    </a>
                                    <div class="product-action">
                                        <div class="addto-wrap">
                                            <a class="add-wishlist" href="wishlist.html" title="Add to wishlist">
                                                <i class="icon-heart icon"></i>
                                            </a>
                                            <a class="add-compare" href="compare.html" title="Add to compare">
                                                <i class="icon-shuffle icon"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <ul class="product-flag">
                                        <li class="new">New</li>
                                        <li class="discount">-20%</li>
                                    </ul>
                                </div>
                                <div class="product-desc">
                                    <div class="product-info">
                                        <h4 class="title"><a href="single-product.html">Juicy Couture Solid Sleeve Puffer Jacket</a></h4>
                                        <div class="star-content">
                                            <i class="ion-md-star"></i>
                                            <i class="ion-md-star"></i>
                                            <i class="ion-md-star"></i>
                                            <i class="ion-md-star"></i>
                                            <i class="ion-md-star"></i>
                                        </div>
                                        <div class="prices">
                                            <span class="price-old">€23.06</span>
                                            <span class="price">€18.45</span>
                                        </div>
                                        <div class="ht-countdown ht-countdown-style1 mt-35" data-date="10/24/2023"></div>
                                    </div>
                                    <div class="product-footer">
                                        <a class="btn-product-add" href="single-product.html">Add to cart</a>
                                        <a class="btn-quick-view" href="javascript:;" title="Quick view">Quick view</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--== End Shop Item ==-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--== End Product Discount Area Wrapper ==-->

<!--== Start Product Area Wrapper ==-->
<section class="product-area">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 m-auto">
                <div class="section-title text-center mb-30">
                    <h2 class="title">Our Products</h2>
                    <div class="desc">
                        <p>Add our products to weekly line up</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="product-tabs-content-wrap">
                    <ul class="nav mb-25 product-tab-nav" id="pills-tab" role="tablist">
                        <li role="presentation">
                            <a class="active" id="makeup-tab" data-bs-toggle="pill" href="#makeup" role="tab" aria-controls="makeup" aria-selected="true">Makeup</a>
                        </li>
                        <li role="presentation">
                            <a id="skin-care-tab" data-bs-toggle="pill" href="#skin-care" role="tab" aria-controls="skin-care" aria-selected="false">Skin Care</a>
                        </li>
                        <li role="presentation">
                            <a id="health-care-tab" data-bs-toggle="pill" href="#health-care" role="tab" aria-controls="health-care" aria-selected="false">Health Care</a>
                        </li>
                    </ul>
                    <div class="tab-content product-tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="makeup" role="tabpanel" aria-labelledby="makeup-tab">
                            <div class="row">
                                <div class="col-12">
                                    <div class="product-slider owl-carousel owl-theme">
                                        <div class="item">
                                            <!--== Start Shop Item ==-->
                                            <div class="product-item">
                                                <div class="inner-content">
                                                    <div class="product-thumb">
                                                        <a href="single-product.html">
                                                            <img src="assets/img/shop/12.jpg" alt="Image-HasTech">
                                                            <img class="second-image" src="assets/img/shop/12-h1.jpg" alt="Image-HasTech">
                                                        </a>
                                                        <div class="product-action">
                                                            <div class="addto-wrap">
                                                                <a class="add-wishlist" href="wishlist.html" title="Add to wishlist">
                                                                    <i class="icon-heart icon"></i>
                                                                </a>
                                                                <a class="add-compare" href="compare.html" title="Add to compare">
                                                                    <i class="icon-shuffle icon"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <ul class="product-flag">
                                                            <li class="new">New</li>
                                                            <li class="discount visually-hidden">-20%</li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-desc">
                                                        <div class="product-info">
                                                            <h4 class="title"><a href="single-product.html">Juicy Couture Tricot Logo Stripe Jacket</a></h4>
                                                            <div class="star-content">
                                                                <i class="ion-md-star"></i>
                                                                <i class="ion-md-star"></i>
                                                                <i class="ion-md-star"></i>
                                                                <i class="ion-md-star"></i>
                                                                <i class="ion-md-star"></i>
                                                            </div>
                                                            <div class="prices">
                                                                <span class="price-old visually-hidden">€23.06</span>
                                                                <span class="price text-black">€10.98</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-footer">
                                                            <a class="btn-product-add" href="single-product.html">Add to cart</a>
                                                            <a class="btn-quick-view" href="javascript:;" title="Quick view">Quick view</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--== End Shop Item ==-->
                                        </div>
                                        <div class="item">
                                            <!--== Start Shop Item ==-->
                                            <div class="product-item">
                                                <div class="inner-content">
                                                    <div class="product-thumb">
                                                        <a href="single-product.html">
                                                            <img src="assets/img/shop/02.jpg" alt="Image-HasTech">
                                                            <img class="second-image" src="assets/img/shop/02-h1.jpg" alt="Image-HasTech">
                                                        </a>
                                                        <div class="product-action">
                                                            <div class="addto-wrap">
                                                                <a class="add-wishlist" href="wishlist.html" title="Add to wishlist">
                                                                    <i class="icon-heart icon"></i>
                                                                </a>
                                                                <a class="add-compare" href="compare.html" title="Add to compare">
                                                                    <i class="icon-shuffle icon"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <ul class="product-flag">
                                                            <li class="new">New</li>
                                                            <li class="discount visually-hidden">-10%</li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-desc">
                                                        <div class="product-info">
                                                            <h4 class="title"><a href="single-product.html">Juicy Couture Juicy Quilted Terry Track...</a></h4>
                                                            <div class="star-content">
                                                                <i class="ion-md-star"></i>
                                                                <i class="ion-md-star"></i>
                                                                <i class="ion-md-star"></i>
                                                                <i class="ion-md-star"></i>
                                                                <i class="ion-md-star"></i>
                                                            </div>
                                                            <div class="prices">
                                                                <span class="price-old visually-hidden">€29.16</span>
                                                                <span class="price text-black">€43.80</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-footer">
                                                            <a class="btn-product-add" href="single-product.html">Add to cart</a>
                                                            <a class="btn-quick-view" href="javascript:;" title="Quick view">Quick view</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--== End Shop Item ==-->
                                        </div>
                                        <div class="item">
                                            <!--== Start Shop Item ==-->
                                            <div class="product-item">
                                                <div class="inner-content">
                                                    <div class="product-thumb">
                                                        <a href="single-product.html">
                                                            <img src="assets/img/shop/09.jpg" alt="Image-HasTech">
                                                        </a>
                                                        <div class="product-action">
                                                            <div class="addto-wrap">
                                                                <a class="add-wishlist" href="wishlist.html" title="Add to wishlist">
                                                                    <i class="icon-heart icon"></i>
                                                                </a>
                                                                <a class="add-compare" href="compare.html" title="Add to compare">
                                                                    <i class="icon-shuffle icon"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <ul class="product-flag">
                                                            <li class="new">New</li>
                                                            <li class="discount visually-hidden">-20%</li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-desc">
                                                        <div class="product-info">
                                                            <h4 class="title"><a href="single-product.html">Brixton Patrol All Terrain Anorak Jacket</a></h4>
                                                            <div class="star-content">
                                                                <i class="ion-md-star"></i>
                                                                <i class="ion-md-star"></i>
                                                                <i class="ion-md-star"></i>
                                                                <i class="ion-md-star"></i>
                                                                <i class="ion-md-star"></i>
                                                            </div>
                                                            <div class="prices">
                                                                <span class="price-old visually-hidden">€23.06</span>
                                                                <span class="price text-black">€35.38</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-footer">
                                                            <a class="btn-product-add" href="single-product.html">Add to cart</a>
                                                            <a class="btn-quick-view" href="javascript:;" title="Quick view">Quick view</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--== End Shop Item ==-->
                                        </div>
                                        <div class="item">
                                            <!--== Start Shop Item ==-->
                                            <div class="product-item">
                                                <div class="inner-content">
                                                    <div class="product-thumb">
                                                        <a href="single-product.html">
                                                            <img src="assets/img/shop/07.jpg" alt="Image-HasTech">
                                                            <img class="second-image" src="assets/img/shop/07-h1.jpg" alt="Image-HasTech">
                                                        </a>
                                                        <div class="product-action">
                                                            <div class="addto-wrap">
                                                                <a class="add-wishlist" href="wishlist.html" title="Add to wishlist">
                                                                    <i class="icon-heart icon"></i>
                                                                </a>
                                                                <a class="add-compare" href="compare.html" title="Add to compare">
                                                                    <i class="icon-shuffle icon"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <ul class="product-flag">
                                                            <li class="new">New</li>
                                                            <li class="discount">-20%</li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-desc">
                                                        <div class="product-info">
                                                            <h4 class="title"><a href="single-product.html">Juicy Couture Solid Sleeve Puffer Jacket</a></h4>
                                                            <div class="star-content">
                                                                <i class="ion-md-star"></i>
                                                                <i class="ion-md-star"></i>
                                                                <i class="ion-md-star"></i>
                                                                <i class="ion-md-star"></i>
                                                                <i class="ion-md-star"></i>
                                                            </div>
                                                            <div class="prices">
                                                                <span class="price-old">€23.06</span>
                                                                <span class="price">€18.45</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-footer">
                                                            <a class="btn-product-add" href="single-product.html">Add to cart</a>
                                                            <a class="btn-quick-view" href="javascript:;" title="Quick view">Quick view</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--== End Shop Item ==-->
                                        </div>
                                        <div class="item">
                                            <!--== Start Shop Item ==-->
                                            <div class="product-item">
                                                <div class="inner-content">
                                                    <div class="product-thumb">
                                                        <a href="single-product.html">
                                                            <img src="assets/img/shop/01.jpg" alt="Image-HasTech">
                                                            <img class="second-image" src="assets/img/shop/01-h1.jpg" alt="Image-HasTech">
                                                        </a>
                                                        <div class="product-action">
                                                            <div class="addto-wrap">
                                                                <a class="add-wishlist" href="wishlist.html" title="Add to wishlist">
                                                                    <i class="icon-heart icon"></i>
                                                                </a>
                                                                <a class="add-compare" href="compare.html" title="Add to compare">
                                                                    <i class="icon-shuffle icon"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <ul class="product-flag">
                                                            <li class="new">New</li>
                                                            <li class="discount">-10%</li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-desc">
                                                        <div class="product-info">
                                                            <h4 class="title"><a href="single-product.html">Originals Kaval Windbreaker Winter Jac...</a></h4>
                                                            <div class="star-content">
                                                                <i class="ion-md-star"></i>
                                                                <i class="ion-md-star"></i>
                                                                <i class="ion-md-star"></i>
                                                                <i class="ion-md-star"></i>
                                                                <i class="ion-md-star"></i>
                                                            </div>
                                                            <div class="prices">
                                                                <span class="price-old">€29.16</span>
                                                                <span class="price">€26.24</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-footer">
                                                            <a class="btn-product-add" href="single-product.html">Add to cart</a>
                                                            <a class="btn-quick-view" href="javascript:;" title="Quick view">Quick view</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--== End Shop Item ==-->
                                        </div>
                                        <div class="item">
                                            <!--== Start Shop Item ==-->
                                            <div class="product-item">
                                                <div class="inner-content">
                                                    <div class="product-thumb">
                                                        <a href="single-product.html">
                                                            <img src="assets/img/shop/03.jpg" alt="Image-HasTech">
                                                            <img class="second-image" src="assets/img/shop/03-h1.jpg" alt="Image-HasTech">
                                                        </a>
                                                        <div class="product-action">
                                                            <div class="addto-wrap">
                                                                <a class="add-wishlist" href="wishlist.html" title="Add to wishlist">
                                                                    <i class="icon-heart icon"></i>
                                                                </a>
                                                                <a class="add-compare" href="compare.html" title="Add to compare">
                                                                    <i class="icon-shuffle icon"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <ul class="product-flag">
                                                            <li class="new">New</li>
                                                            <li class="discount">-5%</li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-desc">
                                                        <div class="product-info">
                                                            <h4 class="title"><a href="single-product.html">Madden by Steve Madden Cale 6</a></h4>
                                                            <div class="star-content">
                                                                <i class="ion-md-star"></i>
                                                                <i class="ion-md-star"></i>
                                                                <i class="ion-md-star"></i>
                                                                <i class="ion-md-star"></i>
                                                                <i class="ion-md-star"></i>
                                                            </div>
                                                            <div class="prices">
                                                                <span class="price-old">€14.52</span>
                                                                <span class="price">€13.79</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-footer">
                                                            <a class="btn-product-add" href="single-product.html">Add to cart</a>
                                                            <a class="btn-quick-view" href="javascript:;" title="Quick view">Quick view</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--== End Shop Item ==-->
                                        </div>
                                        <div class="item">
                                            <!--== Start Shop Item ==-->
                                            <div class="product-item">
                                                <div class="inner-content">
                                                    <div class="product-thumb">
                                                        <a href="single-product.html">
                                                            <img src="assets/img/shop/04.jpg" alt="Image-HasTech">
                                                            <img class="second-image" src="assets/img/shop/04-h1.jpg" alt="Image-HasTech">
                                                        </a>
                                                        <div class="product-action">
                                                            <div class="addto-wrap">
                                                                <a class="add-wishlist" href="wishlist.html" title="Add to wishlist">
                                                                    <i class="icon-heart icon"></i>
                                                                </a>
                                                                <a class="add-compare" href="compare.html" title="Add to compare">
                                                                    <i class="icon-shuffle icon"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <ul class="product-flag">
                                                            <li class="new">New</li>
                                                            <li class="discount visually-hidden">-5%</li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-desc">
                                                        <div class="product-info">
                                                            <h4 class="title"><a href="single-product.html">Trans-Weight Hooded Wind and Water...</a></h4>
                                                            <div class="star-content">
                                                                <i class="ion-md-star"></i>
                                                                <i class="ion-md-star"></i>
                                                                <i class="ion-md-star"></i>
                                                                <i class="ion-md-star"></i>
                                                                <i class="ion-md-star"></i>
                                                            </div>
                                                            <div class="prices">
                                                                <span class="price-old visually-hidden">€14.52</span>
                                                                <span class="price text-black">€14.52</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-footer">
                                                            <a class="btn-product-add" href="single-product.html">Add to cart</a>
                                                            <a class="btn-quick-view" href="javascript:;" title="Quick view">Quick view</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--== End Shop Item ==-->
                                        </div>
                                        <div class="item">
                                            <!--== Start Shop Item ==-->
                                            <div class="product-item">
                                                <div class="inner-content">
                                                    <div class="product-thumb">
                                                        <a href="single-product.html">
                                                            <img src="assets/img/shop/05.jpg" alt="Image-HasTech">
                                                            <img class="second-image" src="assets/img/shop/05-h1.jpg" alt="Image-HasTech">
                                                        </a>
                                                        <div class="product-action">
                                                            <div class="addto-wrap">
                                                                <a class="add-wishlist" href="wishlist.html" title="Add to wishlist">
                                                                    <i class="icon-heart icon"></i>
                                                                </a>
                                                                <a class="add-compare" href="compare.html" title="Add to compare">
                                                                    <i class="icon-shuffle icon"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <ul class="product-flag">
                                                            <li class="new">New</li>
                                                            <li class="discount visually-hidden">-5%</li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-desc">
                                                        <div class="product-info">
                                                            <h4 class="title"><a href="single-product.html">Water and Wind Resistant Insulated Ja...</a></h4>
                                                            <div class="star-content">
                                                                <i class="ion-md-star"></i>
                                                                <i class="ion-md-star"></i>
                                                                <i class="ion-md-star"></i>
                                                                <i class="ion-md-star"></i>
                                                                <i class="ion-md-star icon-color-gray"></i>
                                                            </div>
                                                            <div class="prices">
                                                                <span class="price-old visually-hidden">€14.52</span>
                                                                <span class="price text-black">€14.52</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-footer">
                                                            <a class="btn-product-add" href="single-product.html">Add to cart</a>
                                                            <a class="btn-quick-view" href="javascript:;" title="Quick view">Quick view</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--== End Shop Item ==-->
                                        </div>
                                        <div class="item">
                                            <!--== Start Shop Item ==-->
                                            <div class="product-item">
                                                <div class="inner-content">
                                                    <div class="product-thumb">
                                                        <a href="single-product.html">
                                                            <img src="assets/img/shop/06.jpg" alt="Image-HasTech">
                                                        </a>
                                                        <div class="product-action">
                                                            <div class="addto-wrap">
                                                                <a class="add-wishlist" href="wishlist.html" title="Add to wishlist">
                                                                    <i class="icon-heart icon"></i>
                                                                </a>
                                                                <a class="add-compare" href="compare.html" title="Add to compare">
                                                                    <i class="icon-shuffle icon"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <ul class="product-flag">
                                                            <li class="new">New</li>
                                                            <li class="discount visually-hidden">-5%</li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-desc">
                                                        <div class="product-info">
                                                            <h4 class="title"><a href="single-product.html">New Balance Fresh Foam Kaymin</a></h4>
                                                            <div class="star-content">
                                                                <i class="ion-md-star"></i>
                                                                <i class="ion-md-star"></i>
                                                                <i class="ion-md-star"></i>
                                                                <i class="ion-md-star"></i>
                                                                <i class="ion-md-star"></i>
                                                            </div>
                                                            <div class="prices">
                                                                <span class="price-old visually-hidden">€14.52</span>
                                                                <span class="price text-black">€23.06</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-footer">
                                                            <a class="btn-product-add" href="single-product.html">Add to cart</a>
                                                            <a class="btn-quick-view" href="javascript:;" title="Quick view">Quick view</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--== End Shop Item ==-->
                                        </div>
                                        <div class="item">
                                            <!--== Start Shop Item ==-->
                                            <div class="product-item">
                                                <div class="inner-content">
                                                    <div class="product-thumb">
                                                        <a href="single-product.html">
                                                            <img src="assets/img/shop/08.jpg" alt="Image-HasTech">
                                                            <img class="second-image" src="assets/img/shop/08-h1.jpg" alt="Image-HasTech">
                                                        </a>
                                                        <div class="product-action">
                                                            <div class="addto-wrap">
                                                                <a class="add-wishlist" href="wishlist.html" title="Add to wishlist">
                                                                    <i class="icon-heart icon"></i>
                                                                </a>
                                                                <a class="add-compare" href="compare.html" title="Add to compare">
                                                                    <i class="icon-shuffle icon"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <ul class="product-flag">
                                                            <li class="new">New</li>
                                                            <li class="discount visually-hidden">-20%</li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-desc">
                                                        <div class="product-info">
                                                            <h4 class="title"><a href="single-product.html">New Balance Fresh Foam LAZR v1 Sport</a></h4>
                                                            <div class="star-content">
                                                                <i class="ion-md-star"></i>
                                                                <i class="ion-md-star"></i>
                                                                <i class="ion-md-star"></i>
                                                                <i class="ion-md-star"></i>
                                                                <i class="ion-md-star"></i>
                                                            </div>
                                                            <div class="prices">
                                                                <span class="price-old visually-hidden">€23.06</span>
                                                                <span class="price text-black">€23.06</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-footer">
                                                            <a class="btn-product-add" href="single-product.html">Add to cart</a>
                                                            <a class="btn-quick-view" href="javascript:;" title="Quick view">Quick view</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--== End Shop Item ==-->
                                        </div>
                                        <div class="item">
                                            <!--== Start Shop Item ==-->
                                            <div class="product-item">
                                                <div class="inner-content">
                                                    <div class="product-thumb">
                                                        <a href="single-product.html">
                                                            <img src="assets/img/shop/10.jpg" alt="Image-HasTech">
                                                            <img class="second-image" src="assets/img/shop/10-h1.jpg" alt="Image-HasTech">
                                                        </a>
                                                        <div class="product-action">
                                                            <div class="addto-wrap">
                                                                <a class="add-wishlist" href="wishlist.html" title="Add to wishlist">
                                                                    <i class="icon-heart icon"></i>
                                                                </a>
                                                                <a class="add-compare" href="compare.html" title="Add to compare">
                                                                    <i class="icon-shuffle icon"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <ul class="product-flag">
                                                            <li class="new">New</li>
                                                            <li class="discount visually-hidden">-20%</li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-desc">
                                                        <div class="product-info">
                                                            <h4 class="title"><a href="single-product.html">New Balance Arishi Sport v1</a></h4>
                                                            <div class="star-content">
                                                                <i class="ion-md-star"></i>
                                                                <i class="ion-md-star"></i>
                                                                <i class="ion-md-star"></i>
                                                                <i class="ion-md-star"></i>
                                                                <i class="ion-md-star icon-color-gray"></i>
                                                            </div>
                                                            <div class="prices">
                                                                <span class="price-old visually-hidden">€23.06</span>
                                                                <span class="price text-black">€23.06</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-footer">
                                                            <a class="btn-product-add" href="single-product.html">Add to cart</a>
                                                            <a class="btn-quick-view" href="javascript:;" title="Quick view">Quick view</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--== End Shop Item ==-->
                                        </div>
                                        <div class="item">
                                            <!--== Start Shop Item ==-->
                                            <div class="product-item">
                                                <div class="inner-content">
                                                    <div class="product-thumb">
                                                        <a href="single-product.html">
                                                            <img src="assets/img/shop/11.jpg" alt="Image-HasTech">
                                                            <img class="second-image" src="assets/img/shop/11-h1.jpg" alt="Image-HasTech">
                                                        </a>
                                                        <div class="product-action">
                                                            <div class="addto-wrap">
                                                                <a class="add-wishlist" href="wishlist.html" title="Add to wishlist">
                                                                    <i class="icon-heart icon"></i>
                                                                </a>
                                                                <a class="add-compare" href="compare.html" title="Add to compare">
                                                                    <i class="icon-shuffle icon"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <ul class="product-flag">
                                                            <li class="new">New</li>
                                                            <li class="discount visually-hidden">-20%</li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-desc">
                                                        <div class="product-info">
                                                            <h4 class="title"><a href="single-product.html">Calvin Klein Jeans Reflective Logo Full Zip</a></h4>
                                                            <div class="star-content">
                                                                <i class="ion-md-star"></i>
                                                                <i class="ion-md-star"></i>
                                                                <i class="ion-md-star"></i>
                                                                <i class="ion-md-star"></i>
                                                                <i class="ion-md-star"></i>
                                                            </div>
                                                            <div class="prices">
                                                                <span class="price-old visually-hidden">€23.06</span>
                                                                <span class="price text-black">€35.38</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-footer">
                                                            <a class="btn-product-add" href="single-product.html">Add to cart</a>
                                                            <a class="btn-quick-view" href="javascript:;" title="Quick view">Quick view</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--== End Shop Item ==-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="skin-care" role="tabpanel" aria-labelledby="skin-care-tab">
                            <div class="row">
                                <div class="col-12">
                                    <div class="product-slider owl-carousel owl-theme">
                                        <div class="item">
                                            <!--== Start Shop Item ==-->
                                            <div class="product-item">
                                                <div class="inner-content">
                                                    <div class="product-thumb">
                                                        <a href="single-product.html">
                                                            <img src="assets/img/shop/01.jpg" alt="Image-HasTech">
                                                            <img class="second-image" src="assets/img/shop/01-h1.jpg" alt="Image-HasTech">
                                                        </a>
                                                        <div class="product-action">
                                                            <div class="addto-wrap">
                                                                <a class="add-wishlist" href="wishlist.html" title="Add to wishlist">
                                                                    <i class="icon-heart icon"></i>
                                                                </a>
                                                                <a class="add-compare" href="compare.html" title="Add to compare">
                                                                    <i class="icon-shuffle icon"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <ul class="product-flag">
                                                            <li class="new">New</li>
                                                            <li class="discount">-10%</li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-desc">
                                                        <div class="product-info">
                                                            <h4 class="title"><a href="single-product.html">Originals Kaval Windbreaker Winter Jac...</a></h4>
                                                            <div class="star-content">
                                                                <i class="ion-md-star"></i>
                                                                <i class="ion-md-star"></i>
                                                                <i class="ion-md-star"></i>
                                                                <i class="ion-md-star"></i>
                                                                <i class="ion-md-star"></i>
                                                            </div>
                                                            <div class="prices">
                                                                <span class="price-old">€29.16</span>
                                                                <span class="price">€26.24</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-footer">
                                                            <a class="btn-product-add" href="single-product.html">Add to cart</a>
                                                            <a class="btn-quick-view" href="javascript:;" title="Quick view">Quick view</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--== End Shop Item ==-->
                                        </div>
                                        <div class="item">
                                            <!--== Start Shop Item ==-->
                                            <div class="product-item">
                                                <div class="inner-content">
                                                    <div class="product-thumb">
                                                        <a href="single-product.html">
                                                            <img src="assets/img/shop/02.jpg" alt="Image-HasTech">
                                                            <img class="second-image" src="assets/img/shop/02-h1.jpg" alt="Image-HasTech">
                                                        </a>
                                                        <div class="product-action">
                                                            <div class="addto-wrap">
                                                                <a class="add-wishlist" href="wishlist.html" title="Add to wishlist">
                                                                    <i class="icon-heart icon"></i>
                                                                </a>
                                                                <a class="add-compare" href="compare.html" title="Add to compare">
                                                                    <i class="icon-shuffle icon"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <ul class="product-flag">
                                                            <li class="new">New</li>
                                                            <li class="discount visually-hidden">-10%</li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-desc">
                                                        <div class="product-info">
                                                            <h4 class="title"><a href="single-product.html">Juicy Couture Juicy Quilted Terry Track...</a></h4>
                                                            <div class="star-content">
                                                                <i class="ion-md-star"></i>
                                                                <i class="ion-md-star"></i>
                                                                <i class="ion-md-star"></i>
                                                                <i class="ion-md-star"></i>
                                                                <i class="ion-md-star"></i>
                                                            </div>
                                                            <div class="prices">
                                                                <span class="price-old visually-hidden">€29.16</span>
                                                                <span class="price text-black">€43.80</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-footer">
                                                            <a class="btn-product-add" href="single-product.html">Add to cart</a>
                                                            <a class="btn-quick-view" href="javascript:;" title="Quick view">Quick view</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--== End Shop Item ==-->
                                        </div>
                                        <div class="item">
                                            <!--== Start Shop Item ==-->
                                            <div class="product-item">
                                                <div class="inner-content">
                                                    <div class="product-thumb">
                                                        <a href="single-product.html">
                                                            <img src="assets/img/shop/03.jpg" alt="Image-HasTech">
                                                            <img class="second-image" src="assets/img/shop/03-h1.jpg" alt="Image-HasTech">
                                                        </a>
                                                        <div class="product-action">
                                                            <div class="addto-wrap">
                                                                <a class="add-wishlist" href="wishlist.html" title="Add to wishlist">
                                                                    <i class="icon-heart icon"></i>
                                                                </a>
                                                                <a class="add-compare" href="compare.html" title="Add to compare">
                                                                    <i class="icon-shuffle icon"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <ul class="product-flag">
                                                            <li class="new">New</li>
                                                            <li class="discount">-5%</li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-desc">
                                                        <div class="product-info">
                                                            <h4 class="title"><a href="single-product.html">Madden by Steve Madden Cale 6</a></h4>
                                                            <div class="star-content">
                                                                <i class="ion-md-star"></i>
                                                                <i class="ion-md-star"></i>
                                                                <i class="ion-md-star"></i>
                                                                <i class="ion-md-star"></i>
                                                                <i class="ion-md-star"></i>
                                                            </div>
                                                            <div class="prices">
                                                                <span class="price-old">€14.52</span>
                                                                <span class="price">€13.79</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-footer">
                                                            <a class="btn-product-add" href="single-product.html">Add to cart</a>
                                                            <a class="btn-quick-view" href="javascript:;" title="Quick view">Quick view</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--== End Shop Item ==-->
                                        </div>
                                        <div class="item">
                                            <!--== Start Shop Item ==-->
                                            <div class="product-item">
                                                <div class="inner-content">
                                                    <div class="product-thumb">
                                                        <a href="single-product.html">
                                                            <img src="assets/img/shop/04.jpg" alt="Image-HasTech">
                                                            <img class="second-image" src="assets/img/shop/04-h1.jpg" alt="Image-HasTech">
                                                        </a>
                                                        <div class="product-action">
                                                            <div class="addto-wrap">
                                                                <a class="add-wishlist" href="wishlist.html" title="Add to wishlist">
                                                                    <i class="icon-heart icon"></i>
                                                                </a>
                                                                <a class="add-compare" href="compare.html" title="Add to compare">
                                                                    <i class="icon-shuffle icon"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <ul class="product-flag">
                                                            <li class="new">New</li>
                                                            <li class="discount visually-hidden">-5%</li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-desc">
                                                        <div class="product-info">
                                                            <h4 class="title"><a href="single-product.html">Trans-Weight Hooded Wind and Water...</a></h4>
                                                            <div class="star-content">
                                                                <i class="ion-md-star"></i>
                                                                <i class="ion-md-star"></i>
                                                                <i class="ion-md-star"></i>
                                                                <i class="ion-md-star"></i>
                                                                <i class="ion-md-star"></i>
                                                            </div>
                                                            <div class="prices">
                                                                <span class="price-old visually-hidden">€14.52</span>
                                                                <span class="price text-black">€14.52</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-footer">
                                                            <a class="btn-product-add" href="single-product.html">Add to cart</a>
                                                            <a class="btn-quick-view" href="javascript:;" title="Quick view">Quick view</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--== End Shop Item ==-->
                                        </div>
                                        <div class="item">
                                            <!--== Start Shop Item ==-->
                                            <div class="product-item">
                                                <div class="inner-content">
                                                    <div class="product-thumb">
                                                        <a href="single-product.html">
                                                            <img src="assets/img/shop/05.jpg" alt="Image-HasTech">
                                                            <img class="second-image" src="assets/img/shop/05-h1.jpg" alt="Image-HasTech">
                                                        </a>
                                                        <div class="product-action">
                                                            <div class="addto-wrap">
                                                                <a class="add-wishlist" href="wishlist.html" title="Add to wishlist">
                                                                    <i class="icon-heart icon"></i>
                                                                </a>
                                                                <a class="add-compare" href="compare.html" title="Add to compare">
                                                                    <i class="icon-shuffle icon"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <ul class="product-flag">
                                                            <li class="new">New</li>
                                                            <li class="discount visually-hidden">-5%</li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-desc">
                                                        <div class="product-info">
                                                            <h4 class="title"><a href="single-product.html">Water and Wind Resistant Insulated Ja...</a></h4>
                                                            <div class="star-content">
                                                                <i class="ion-md-star"></i>
                                                                <i class="ion-md-star"></i>
                                                                <i class="ion-md-star"></i>
                                                                <i class="ion-md-star"></i>
                                                                <i class="ion-md-star icon-color-gray"></i>
                                                            </div>
                                                            <div class="prices">
                                                                <span class="price-old visually-hidden">€14.52</span>
                                                                <span class="price text-black">€14.52</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-footer">
                                                            <a class="btn-product-add" href="single-product.html">Add to cart</a>
                                                            <a class="btn-quick-view" href="javascript:;" title="Quick view">Quick view</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--== End Shop Item ==-->
                                        </div>
                                        <div class="item">
                                            <!--== Start Shop Item ==-->
                                            <div class="product-item">
                                                <div class="inner-content">
                                                    <div class="product-thumb">
                                                        <a href="single-product.html">
                                                            <img src="assets/img/shop/06.jpg" alt="Image-HasTech">
                                                        </a>
                                                        <div class="product-action">
                                                            <div class="addto-wrap">
                                                                <a class="add-wishlist" href="wishlist.html" title="Add to wishlist">
                                                                    <i class="icon-heart icon"></i>
                                                                </a>
                                                                <a class="add-compare" href="compare.html" title="Add to compare">
                                                                    <i class="icon-shuffle icon"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <ul class="product-flag">
                                                            <li class="new">New</li>
                                                            <li class="discount visually-hidden">-5%</li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-desc">
                                                        <div class="product-info">
                                                            <h4 class="title"><a href="single-product.html">New Balance Fresh Foam Kaymin</a></h4>
                                                            <div class="star-content">
                                                                <i class="ion-md-star"></i>
                                                                <i class="ion-md-star"></i>
                                                                <i class="ion-md-star"></i>
                                                                <i class="ion-md-star"></i>
                                                                <i class="ion-md-star"></i>
                                                            </div>
                                                            <div class="prices">
                                                                <span class="price-old visually-hidden">€14.52</span>
                                                                <span class="price text-black">€23.06</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-footer">
                                                            <a class="btn-product-add" href="single-product.html">Add to cart</a>
                                                            <a class="btn-quick-view" href="javascript:;" title="Quick view">Quick view</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--== End Shop Item ==-->
                                        </div>
                                        <div class="item">
                                            <!--== Start Shop Item ==-->
                                            <div class="product-item">
                                                <div class="inner-content">
                                                    <div class="product-thumb">
                                                        <a href="single-product.html">
                                                            <img src="assets/img/shop/07.jpg" alt="Image-HasTech">
                                                            <img class="second-image" src="assets/img/shop/07-h1.jpg" alt="Image-HasTech">
                                                        </a>
                                                        <div class="product-action">
                                                            <div class="addto-wrap">
                                                                <a class="add-wishlist" href="wishlist.html" title="Add to wishlist">
                                                                    <i class="icon-heart icon"></i>
                                                                </a>
                                                                <a class="add-compare" href="compare.html" title="Add to compare">
                                                                    <i class="icon-shuffle icon"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <ul class="product-flag">
                                                            <li class="new">New</li>
                                                            <li class="discount">-20%</li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-desc">
                                                        <div class="product-info">
                                                            <h4 class="title"><a href="single-product.html">Juicy Couture Solid Sleeve Puffer Jacket</a></h4>
                                                            <div class="star-content">
                                                                <i class="ion-md-star"></i>
                                                                <i class="ion-md-star"></i>
                                                                <i class="ion-md-star"></i>
                                                                <i class="ion-md-star"></i>
                                                                <i class="ion-md-star"></i>
                                                            </div>
                                                            <div class="prices">
                                                                <span class="price-old">€23.06</span>
                                                                <span class="price">€18.45</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-footer">
                                                            <a class="btn-product-add" href="single-product.html">Add to cart</a>
                                                            <a class="btn-quick-view" href="javascript:;" title="Quick view">Quick view</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--== End Shop Item ==-->
                                        </div>
                                        <div class="item">
                                            <!--== Start Shop Item ==-->
                                            <div class="product-item">
                                                <div class="inner-content">
                                                    <div class="product-thumb">
                                                        <a href="single-product.html">
                                                            <img src="assets/img/shop/08.jpg" alt="Image-HasTech">
                                                            <img class="second-image" src="assets/img/shop/08-h1.jpg" alt="Image-HasTech">
                                                        </a>
                                                        <div class="product-action">
                                                            <div class="addto-wrap">
                                                                <a class="add-wishlist" href="wishlist.html" title="Add to wishlist">
                                                                    <i class="icon-heart icon"></i>
                                                                </a>
                                                                <a class="add-compare" href="compare.html" title="Add to compare">
                                                                    <i class="icon-shuffle icon"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <ul class="product-flag">
                                                            <li class="new">New</li>
                                                            <li class="discount visually-hidden">-20%</li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-desc">
                                                        <div class="product-info">
                                                            <h4 class="title"><a href="single-product.html">New Balance Fresh Foam LAZR v1 Sport</a></h4>
                                                            <div class="star-content">
                                                                <i class="ion-md-star"></i>
                                                                <i class="ion-md-star"></i>
                                                                <i class="ion-md-star"></i>
                                                                <i class="ion-md-star"></i>
                                                                <i class="ion-md-star"></i>
                                                            </div>
                                                            <div class="prices">
                                                                <span class="price-old visually-hidden">€23.06</span>
                                                                <span class="price text-black">€23.06</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-footer">
                                                            <a class="btn-product-add" href="single-product.html">Add to cart</a>
                                                            <a class="btn-quick-view" href="javascript:;" title="Quick view">Quick view</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--== End Shop Item ==-->
                                        </div>
                                        <div class="item">
                                            <!--== Start Shop Item ==-->
                                            <div class="product-item">
                                                <div class="inner-content">
                                                    <div class="product-thumb">
                                                        <a href="single-product.html">
                                                            <img src="assets/img/shop/09.jpg" alt="Image-HasTech">
                                                        </a>
                                                        <div class="product-action">
                                                            <div class="addto-wrap">
                                                                <a class="add-wishlist" href="wishlist.html" title="Add to wishlist">
                                                                    <i class="icon-heart icon"></i>
                                                                </a>
                                                                <a class="add-compare" href="compare.html" title="Add to compare">
                                                                    <i class="icon-shuffle icon"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <ul class="product-flag">
                                                            <li class="new">New</li>
                                                            <li class="discount visually-hidden">-20%</li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-desc">
                                                        <div class="product-info">
                                                            <h4 class="title"><a href="single-product.html">Brixton Patrol All Terrain Anorak Jacket</a></h4>
                                                            <div class="star-content">
                                                                <i class="ion-md-star"></i>
                                                                <i class="ion-md-star"></i>
                                                                <i class="ion-md-star"></i>
                                                                <i class="ion-md-star"></i>
                                                                <i class="ion-md-star"></i>
                                                            </div>
                                                            <div class="prices">
                                                                <span class="price-old visually-hidden">€23.06</span>
                                                                <span class="price text-black">€35.38</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-footer">
                                                            <a class="btn-product-add" href="single-product.html">Add to cart</a>
                                                            <a class="btn-quick-view" href="javascript:;" title="Quick view">Quick view</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--== End Shop Item ==-->
                                        </div>
                                        <div class="item">
                                            <!--== Start Shop Item ==-->
                                            <div class="product-item">
                                                <div class="inner-content">
                                                    <div class="product-thumb">
                                                        <a href="single-product.html">
                                                            <img src="assets/img/shop/10.jpg" alt="Image-HasTech">
                                                            <img class="second-image" src="assets/img/shop/10-h1.jpg" alt="Image-HasTech">
                                                        </a>
                                                        <div class="product-action">
                                                            <div class="addto-wrap">
                                                                <a class="add-wishlist" href="wishlist.html" title="Add to wishlist">
                                                                    <i class="icon-heart icon"></i>
                                                                </a>
                                                                <a class="add-compare" href="compare.html" title="Add to compare">
                                                                    <i class="icon-shuffle icon"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <ul class="product-flag">
                                                            <li class="new">New</li>
                                                            <li class="discount visually-hidden">-20%</li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-desc">
                                                        <div class="product-info">
                                                            <h4 class="title"><a href="single-product.html">New Balance Arishi Sport v1</a></h4>
                                                            <div class="star-content">
                                                                <i class="ion-md-star"></i>
                                                                <i class="ion-md-star"></i>
                                                                <i class="ion-md-star"></i>
                                                                <i class="ion-md-star"></i>
                                                                <i class="ion-md-star icon-color-gray"></i>
                                                            </div>
                                                            <div class="prices">
                                                                <span class="price-old visually-hidden">€23.06</span>
                                                                <span class="price text-black">€23.06</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-footer">
                                                            <a class="btn-product-add" href="single-product.html">Add to cart</a>
                                                            <a class="btn-quick-view" href="javascript:;" title="Quick view">Quick view</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--== End Shop Item ==-->
                                        </div>
                                        <div class="item">
                                            <!--== Start Shop Item ==-->
                                            <div class="product-item">
                                                <div class="inner-content">
                                                    <div class="product-thumb">
                                                        <a href="single-product.html">
                                                            <img src="assets/img/shop/11.jpg" alt="Image-HasTech">
                                                            <img class="second-image" src="assets/img/shop/11-h1.jpg" alt="Image-HasTech">
                                                        </a>
                                                        <div class="product-action">
                                                            <div class="addto-wrap">
                                                                <a class="add-wishlist" href="wishlist.html" title="Add to wishlist">
                                                                    <i class="icon-heart icon"></i>
                                                                </a>
                                                                <a class="add-compare" href="compare.html" title="Add to compare">
                                                                    <i class="icon-shuffle icon"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <ul class="product-flag">
                                                            <li class="new">New</li>
                                                            <li class="discount visually-hidden">-20%</li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-desc">
                                                        <div class="product-info">
                                                            <h4 class="title"><a href="single-product.html">Calvin Klein Jeans Reflective Logo Full Zip</a></h4>
                                                            <div class="star-content">
                                                                <i class="ion-md-star"></i>
                                                                <i class="ion-md-star"></i>
                                                                <i class="ion-md-star"></i>
                                                                <i class="ion-md-star"></i>
                                                                <i class="ion-md-star"></i>
                                                            </div>
                                                            <div class="prices">
                                                                <span class="price-old visually-hidden">€23.06</span>
                                                                <span class="price text-black">€35.38</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-footer">
                                                            <a class="btn-product-add" href="single-product.html">Add to cart</a>
                                                            <a class="btn-quick-view" href="javascript:;" title="Quick view">Quick view</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--== End Shop Item ==-->
                                        </div>
                                        <div class="item">
                                            <!--== Start Shop Item ==-->
                                            <div class="product-item">
                                                <div class="inner-content">
                                                    <div class="product-thumb">
                                                        <a href="single-product.html">
                                                            <img src="assets/img/shop/12.jpg" alt="Image-HasTech">
                                                            <img class="second-image" src="assets/img/shop/12-h1.jpg" alt="Image-HasTech">
                                                        </a>
                                                        <div class="product-action">
                                                            <div class="addto-wrap">
                                                                <a class="add-wishlist" href="wishlist.html" title="Add to wishlist">
                                                                    <i class="icon-heart icon"></i>
                                                                </a>
                                                                <a class="add-compare" href="compare.html" title="Add to compare">
                                                                    <i class="icon-shuffle icon"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <ul class="product-flag">
                                                            <li class="new">New</li>
                                                            <li class="discount visually-hidden">-20%</li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-desc">
                                                        <div class="product-info">
                                                            <h4 class="title"><a href="single-product.html">Juicy Couture Tricot Logo Stripe Jacket</a></h4>
                                                            <div class="star-content">
                                                                <i class="ion-md-star"></i>
                                                                <i class="ion-md-star"></i>
                                                                <i class="ion-md-star"></i>
                                                                <i class="ion-md-star"></i>
                                                                <i class="ion-md-star"></i>
                                                            </div>
                                                            <div class="prices">
                                                                <span class="price-old visually-hidden">€23.06</span>
                                                                <span class="price text-black">€10.98</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-footer">
                                                            <a class="btn-product-add" href="single-product.html">Add to cart</a>
                                                            <a class="btn-quick-view" href="javascript:;" title="Quick view">Quick view</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--== End Shop Item ==-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="health-care" role="tabpanel" aria-labelledby="health-care-tab">
                            <div class="row">
                                <div class="col-12">
                                    <div class="product-slider owl-carousel owl-theme">
                                        <div class="item">
                                            <!--== Start Shop Item ==-->
                                            <div class="product-item">
                                                <div class="inner-content">
                                                    <div class="product-thumb">
                                                        <a href="single-product.html">
                                                            <img src="assets/img/shop/01.jpg" alt="Image-HasTech">
                                                            <img class="second-image" src="assets/img/shop/01-h1.jpg" alt="Image-HasTech">
                                                        </a>
                                                        <div class="product-action">
                                                            <div class="addto-wrap">
                                                                <a class="add-wishlist" href="wishlist.html" title="Add to wishlist">
                                                                    <i class="icon-heart icon"></i>
                                                                </a>
                                                                <a class="add-compare" href="compare.html" title="Add to compare">
                                                                    <i class="icon-shuffle icon"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <ul class="product-flag">
                                                            <li class="new">New</li>
                                                            <li class="discount">-10%</li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-desc">
                                                        <div class="product-info">
                                                            <h4 class="title"><a href="single-product.html">Originals Kaval Windbreaker Winter Jac...</a></h4>
                                                            <div class="star-content">
                                                                <i class="ion-md-star"></i>
                                                                <i class="ion-md-star"></i>
                                                                <i class="ion-md-star"></i>
                                                                <i class="ion-md-star"></i>
                                                                <i class="ion-md-star"></i>
                                                            </div>
                                                            <div class="prices">
                                                                <span class="price-old">€29.16</span>
                                                                <span class="price">€26.24</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-footer">
                                                            <a class="btn-product-add" href="single-product.html">Add to cart</a>
                                                            <a class="btn-quick-view" href="javascript:;" title="Quick view">Quick view</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--== End Shop Item ==-->
                                        </div>
                                        <div class="item">
                                            <!--== Start Shop Item ==-->
                                            <div class="product-item">
                                                <div class="inner-content">
                                                    <div class="product-thumb">
                                                        <a href="single-product.html">
                                                            <img src="assets/img/shop/02.jpg" alt="Image-HasTech">
                                                            <img class="second-image" src="assets/img/shop/02-h1.jpg" alt="Image-HasTech">
                                                        </a>
                                                        <div class="product-action">
                                                            <div class="addto-wrap">
                                                                <a class="add-wishlist" href="wishlist.html" title="Add to wishlist">
                                                                    <i class="icon-heart icon"></i>
                                                                </a>
                                                                <a class="add-compare" href="compare.html" title="Add to compare">
                                                                    <i class="icon-shuffle icon"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <ul class="product-flag">
                                                            <li class="new">New</li>
                                                            <li class="discount visually-hidden">-10%</li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-desc">
                                                        <div class="product-info">
                                                            <h4 class="title"><a href="single-product.html">Juicy Couture Juicy Quilted Terry Track...</a></h4>
                                                            <div class="star-content">
                                                                <i class="ion-md-star"></i>
                                                                <i class="ion-md-star"></i>
                                                                <i class="ion-md-star"></i>
                                                                <i class="ion-md-star"></i>
                                                                <i class="ion-md-star"></i>
                                                            </div>
                                                            <div class="prices">
                                                                <span class="price-old visually-hidden">€29.16</span>
                                                                <span class="price text-black">€43.80</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-footer">
                                                            <a class="btn-product-add" href="single-product.html">Add to cart</a>
                                                            <a class="btn-quick-view" href="javascript:;" title="Quick view">Quick view</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--== End Shop Item ==-->
                                        </div>
                                        <div class="item">
                                            <!--== Start Shop Item ==-->
                                            <div class="product-item">
                                                <div class="inner-content">
                                                    <div class="product-thumb">
                                                        <a href="single-product.html">
                                                            <img src="assets/img/shop/03.jpg" alt="Image-HasTech">
                                                            <img class="second-image" src="assets/img/shop/03-h1.jpg" alt="Image-HasTech">
                                                        </a>
                                                        <div class="product-action">
                                                            <div class="addto-wrap">
                                                                <a class="add-wishlist" href="wishlist.html" title="Add to wishlist">
                                                                    <i class="icon-heart icon"></i>
                                                                </a>
                                                                <a class="add-compare" href="compare.html" title="Add to compare">
                                                                    <i class="icon-shuffle icon"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <ul class="product-flag">
                                                            <li class="new">New</li>
                                                            <li class="discount">-5%</li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-desc">
                                                        <div class="product-info">
                                                            <h4 class="title"><a href="single-product.html">Madden by Steve Madden Cale 6</a></h4>
                                                            <div class="star-content">
                                                                <i class="ion-md-star"></i>
                                                                <i class="ion-md-star"></i>
                                                                <i class="ion-md-star"></i>
                                                                <i class="ion-md-star"></i>
                                                                <i class="ion-md-star"></i>
                                                            </div>
                                                            <div class="prices">
                                                                <span class="price-old">€14.52</span>
                                                                <span class="price">€13.79</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-footer">
                                                            <a class="btn-product-add" href="single-product.html">Add to cart</a>
                                                            <a class="btn-quick-view" href="javascript:;" title="Quick view">Quick view</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--== End Shop Item ==-->
                                        </div>
                                        <div class="item">
                                            <!--== Start Shop Item ==-->
                                            <div class="product-item">
                                                <div class="inner-content">
                                                    <div class="product-thumb">
                                                        <a href="single-product.html">
                                                            <img src="assets/img/shop/04.jpg" alt="Image-HasTech">
                                                            <img class="second-image" src="assets/img/shop/04-h1.jpg" alt="Image-HasTech">
                                                        </a>
                                                        <div class="product-action">
                                                            <div class="addto-wrap">
                                                                <a class="add-wishlist" href="wishlist.html" title="Add to wishlist">
                                                                    <i class="icon-heart icon"></i>
                                                                </a>
                                                                <a class="add-compare" href="compare.html" title="Add to compare">
                                                                    <i class="icon-shuffle icon"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <ul class="product-flag">
                                                            <li class="new">New</li>
                                                            <li class="discount visually-hidden">-5%</li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-desc">
                                                        <div class="product-info">
                                                            <h4 class="title"><a href="single-product.html">Trans-Weight Hooded Wind and Water...</a></h4>
                                                            <div class="star-content">
                                                                <i class="ion-md-star"></i>
                                                                <i class="ion-md-star"></i>
                                                                <i class="ion-md-star"></i>
                                                                <i class="ion-md-star"></i>
                                                                <i class="ion-md-star"></i>
                                                            </div>
                                                            <div class="prices">
                                                                <span class="price-old visually-hidden">€14.52</span>
                                                                <span class="price text-black">€14.52</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-footer">
                                                            <a class="btn-product-add" href="single-product.html">Add to cart</a>
                                                            <a class="btn-quick-view" href="javascript:;" title="Quick view">Quick view</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--== End Shop Item ==-->
                                        </div>
                                        <div class="item">
                                            <!--== Start Shop Item ==-->
                                            <div class="product-item">
                                                <div class="inner-content">
                                                    <div class="product-thumb">
                                                        <a href="single-product.html">
                                                            <img src="assets/img/shop/05.jpg" alt="Image-HasTech">
                                                            <img class="second-image" src="assets/img/shop/05-h1.jpg" alt="Image-HasTech">
                                                        </a>
                                                        <div class="product-action">
                                                            <div class="addto-wrap">
                                                                <a class="add-wishlist" href="wishlist.html" title="Add to wishlist">
                                                                    <i class="icon-heart icon"></i>
                                                                </a>
                                                                <a class="add-compare" href="compare.html" title="Add to compare">
                                                                    <i class="icon-shuffle icon"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <ul class="product-flag">
                                                            <li class="new">New</li>
                                                            <li class="discount visually-hidden">-5%</li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-desc">
                                                        <div class="product-info">
                                                            <h4 class="title"><a href="single-product.html">Water and Wind Resistant Insulated Ja...</a></h4>
                                                            <div class="star-content">
                                                                <i class="ion-md-star"></i>
                                                                <i class="ion-md-star"></i>
                                                                <i class="ion-md-star"></i>
                                                                <i class="ion-md-star"></i>
                                                                <i class="ion-md-star icon-color-gray"></i>
                                                            </div>
                                                            <div class="prices">
                                                                <span class="price-old visually-hidden">€14.52</span>
                                                                <span class="price text-black">€14.52</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-footer">
                                                            <a class="btn-product-add" href="single-product.html">Add to cart</a>
                                                            <a class="btn-quick-view" href="javascript:;" title="Quick view">Quick view</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--== End Shop Item ==-->
                                        </div>
                                        <div class="item">
                                            <!--== Start Shop Item ==-->
                                            <div class="product-item">
                                                <div class="inner-content">
                                                    <div class="product-thumb">
                                                        <a href="single-product.html">
                                                            <img src="assets/img/shop/06.jpg" alt="Image-HasTech">
                                                        </a>
                                                        <div class="product-action">
                                                            <div class="addto-wrap">
                                                                <a class="add-wishlist" href="wishlist.html" title="Add to wishlist">
                                                                    <i class="icon-heart icon"></i>
                                                                </a>
                                                                <a class="add-compare" href="compare.html" title="Add to compare">
                                                                    <i class="icon-shuffle icon"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <ul class="product-flag">
                                                            <li class="new">New</li>
                                                            <li class="discount visually-hidden">-5%</li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-desc">
                                                        <div class="product-info">
                                                            <h4 class="title"><a href="single-product.html">New Balance Fresh Foam Kaymin</a></h4>
                                                            <div class="star-content">
                                                                <i class="ion-md-star"></i>
                                                                <i class="ion-md-star"></i>
                                                                <i class="ion-md-star"></i>
                                                                <i class="ion-md-star"></i>
                                                                <i class="ion-md-star"></i>
                                                            </div>
                                                            <div class="prices">
                                                                <span class="price-old visually-hidden">€14.52</span>
                                                                <span class="price text-black">€23.06</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-footer">
                                                            <a class="btn-product-add" href="single-product.html">Add to cart</a>
                                                            <a class="btn-quick-view" href="javascript:;" title="Quick view">Quick view</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--== End Shop Item ==-->
                                        </div>
                                        <div class="item">
                                            <!--== Start Shop Item ==-->
                                            <div class="product-item">
                                                <div class="inner-content">
                                                    <div class="product-thumb">
                                                        <a href="single-product.html">
                                                            <img src="assets/img/shop/07.jpg" alt="Image-HasTech">
                                                            <img class="second-image" src="assets/img/shop/07-h1.jpg" alt="Image-HasTech">
                                                        </a>
                                                        <div class="product-action">
                                                            <div class="addto-wrap">
                                                                <a class="add-wishlist" href="wishlist.html" title="Add to wishlist">
                                                                    <i class="icon-heart icon"></i>
                                                                </a>
                                                                <a class="add-compare" href="compare.html" title="Add to compare">
                                                                    <i class="icon-shuffle icon"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <ul class="product-flag">
                                                            <li class="new">New</li>
                                                            <li class="discount">-20%</li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-desc">
                                                        <div class="product-info">
                                                            <h4 class="title"><a href="single-product.html">Juicy Couture Solid Sleeve Puffer Jacket</a></h4>
                                                            <div class="star-content">
                                                                <i class="ion-md-star"></i>
                                                                <i class="ion-md-star"></i>
                                                                <i class="ion-md-star"></i>
                                                                <i class="ion-md-star"></i>
                                                                <i class="ion-md-star"></i>
                                                            </div>
                                                            <div class="prices">
                                                                <span class="price-old">€23.06</span>
                                                                <span class="price">€18.45</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-footer">
                                                            <a class="btn-product-add" href="single-product.html">Add to cart</a>
                                                            <a class="btn-quick-view" href="javascript:;" title="Quick view">Quick view</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--== End Shop Item ==-->
                                        </div>
                                        <div class="item">
                                            <!--== Start Shop Item ==-->
                                            <div class="product-item">
                                                <div class="inner-content">
                                                    <div class="product-thumb">
                                                        <a href="single-product.html">
                                                            <img src="assets/img/shop/08.jpg" alt="Image-HasTech">
                                                            <img class="second-image" src="assets/img/shop/08-h1.jpg" alt="Image-HasTech">
                                                        </a>
                                                        <div class="product-action">
                                                            <div class="addto-wrap">
                                                                <a class="add-wishlist" href="wishlist.html" title="Add to wishlist">
                                                                    <i class="icon-heart icon"></i>
                                                                </a>
                                                                <a class="add-compare" href="compare.html" title="Add to compare">
                                                                    <i class="icon-shuffle icon"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <ul class="product-flag">
                                                            <li class="new">New</li>
                                                            <li class="discount visually-hidden">-20%</li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-desc">
                                                        <div class="product-info">
                                                            <h4 class="title"><a href="single-product.html">New Balance Fresh Foam LAZR v1 Sport</a></h4>
                                                            <div class="star-content">
                                                                <i class="ion-md-star"></i>
                                                                <i class="ion-md-star"></i>
                                                                <i class="ion-md-star"></i>
                                                                <i class="ion-md-star"></i>
                                                                <i class="ion-md-star"></i>
                                                            </div>
                                                            <div class="prices">
                                                                <span class="price-old visually-hidden">€23.06</span>
                                                                <span class="price text-black">€23.06</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-footer">
                                                            <a class="btn-product-add" href="single-product.html">Add to cart</a>
                                                            <a class="btn-quick-view" href="javascript:;" title="Quick view">Quick view</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--== End Shop Item ==-->
                                        </div>
                                        <div class="item">
                                            <!--== Start Shop Item ==-->
                                            <div class="product-item">
                                                <div class="inner-content">
                                                    <div class="product-thumb">
                                                        <a href="single-product.html">
                                                            <img src="assets/img/shop/09.jpg" alt="Image-HasTech">
                                                        </a>
                                                        <div class="product-action">
                                                            <div class="addto-wrap">
                                                                <a class="add-wishlist" href="wishlist.html" title="Add to wishlist">
                                                                    <i class="icon-heart icon"></i>
                                                                </a>
                                                                <a class="add-compare" href="compare.html" title="Add to compare">
                                                                    <i class="icon-shuffle icon"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <ul class="product-flag">
                                                            <li class="new">New</li>
                                                            <li class="discount visually-hidden">-20%</li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-desc">
                                                        <div class="product-info">
                                                            <h4 class="title"><a href="single-product.html">Brixton Patrol All Terrain Anorak Jacket</a></h4>
                                                            <div class="star-content">
                                                                <i class="ion-md-star"></i>
                                                                <i class="ion-md-star"></i>
                                                                <i class="ion-md-star"></i>
                                                                <i class="ion-md-star"></i>
                                                                <i class="ion-md-star"></i>
                                                            </div>
                                                            <div class="prices">
                                                                <span class="price-old visually-hidden">€23.06</span>
                                                                <span class="price text-black">€35.38</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-footer">
                                                            <a class="btn-product-add" href="single-product.html">Add to cart</a>
                                                            <a class="btn-quick-view" href="javascript:;" title="Quick view">Quick view</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--== End Shop Item ==-->
                                        </div>
                                        <div class="item">
                                            <!--== Start Shop Item ==-->
                                            <div class="product-item">
                                                <div class="inner-content">
                                                    <div class="product-thumb">
                                                        <a href="single-product.html">
                                                            <img src="assets/img/shop/10.jpg" alt="Image-HasTech">
                                                            <img class="second-image" src="assets/img/shop/10-h1.jpg" alt="Image-HasTech">
                                                        </a>
                                                        <div class="product-action">
                                                            <div class="addto-wrap">
                                                                <a class="add-wishlist" href="wishlist.html" title="Add to wishlist">
                                                                    <i class="icon-heart icon"></i>
                                                                </a>
                                                                <a class="add-compare" href="compare.html" title="Add to compare">
                                                                    <i class="icon-shuffle icon"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <ul class="product-flag">
                                                            <li class="new">New</li>
                                                            <li class="discount visually-hidden">-20%</li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-desc">
                                                        <div class="product-info">
                                                            <h4 class="title"><a href="single-product.html">New Balance Arishi Sport v1</a></h4>
                                                            <div class="star-content">
                                                                <i class="ion-md-star"></i>
                                                                <i class="ion-md-star"></i>
                                                                <i class="ion-md-star"></i>
                                                                <i class="ion-md-star"></i>
                                                                <i class="ion-md-star icon-color-gray"></i>
                                                            </div>
                                                            <div class="prices">
                                                                <span class="price-old visually-hidden">€23.06</span>
                                                                <span class="price text-black">€23.06</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-footer">
                                                            <a class="btn-product-add" href="single-product.html">Add to cart</a>
                                                            <a class="btn-quick-view" href="javascript:;" title="Quick view">Quick view</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--== End Shop Item ==-->
                                        </div>
                                        <div class="item">
                                            <!--== Start Shop Item ==-->
                                            <div class="product-item">
                                                <div class="inner-content">
                                                    <div class="product-thumb">
                                                        <a href="single-product.html">
                                                            <img src="assets/img/shop/11.jpg" alt="Image-HasTech">
                                                            <img class="second-image" src="assets/img/shop/11-h1.jpg" alt="Image-HasTech">
                                                        </a>
                                                        <div class="product-action">
                                                            <div class="addto-wrap">
                                                                <a class="add-wishlist" href="wishlist.html" title="Add to wishlist">
                                                                    <i class="icon-heart icon"></i>
                                                                </a>
                                                                <a class="add-compare" href="compare.html" title="Add to compare">
                                                                    <i class="icon-shuffle icon"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <ul class="product-flag">
                                                            <li class="new">New</li>
                                                            <li class="discount visually-hidden">-20%</li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-desc">
                                                        <div class="product-info">
                                                            <h4 class="title"><a href="single-product.html">Calvin Klein Jeans Reflective Logo Full Zip</a></h4>
                                                            <div class="star-content">
                                                                <i class="ion-md-star"></i>
                                                                <i class="ion-md-star"></i>
                                                                <i class="ion-md-star"></i>
                                                                <i class="ion-md-star"></i>
                                                                <i class="ion-md-star"></i>
                                                            </div>
                                                            <div class="prices">
                                                                <span class="price-old visually-hidden">€23.06</span>
                                                                <span class="price text-black">€35.38</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-footer">
                                                            <a class="btn-product-add" href="single-product.html">Add to cart</a>
                                                            <a class="btn-quick-view" href="javascript:;" title="Quick view">Quick view</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--== End Shop Item ==-->
                                        </div>
                                        <div class="item">
                                            <!--== Start Shop Item ==-->
                                            <div class="product-item">
                                                <div class="inner-content">
                                                    <div class="product-thumb">
                                                        <a href="single-product.html">
                                                            <img src="assets/img/shop/12.jpg" alt="Image-HasTech">
                                                            <img class="second-image" src="assets/img/shop/12-h1.jpg" alt="Image-HasTech">
                                                        </a>
                                                        <div class="product-action">
                                                            <div class="addto-wrap">
                                                                <a class="add-wishlist" href="wishlist.html" title="Add to wishlist">
                                                                    <i class="icon-heart icon"></i>
                                                                </a>
                                                                <a class="add-compare" href="compare.html" title="Add to compare">
                                                                    <i class="icon-shuffle icon"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <ul class="product-flag">
                                                            <li class="new">New</li>
                                                            <li class="discount visually-hidden">-20%</li>
                                                        </ul>
                                                    </div>
                                                    <div class="product-desc">
                                                        <div class="product-info">
                                                            <h4 class="title"><a href="single-product.html">Juicy Couture Tricot Logo Stripe Jacket</a></h4>
                                                            <div class="star-content">
                                                                <i class="ion-md-star"></i>
                                                                <i class="ion-md-star"></i>
                                                                <i class="ion-md-star"></i>
                                                                <i class="ion-md-star"></i>
                                                                <i class="ion-md-star"></i>
                                                            </div>
                                                            <div class="prices">
                                                                <span class="price-old visually-hidden">€23.06</span>
                                                                <span class="price text-black">€10.98</span>
                                                            </div>
                                                        </div>
                                                        <div class="product-footer">
                                                            <a class="btn-product-add" href="single-product.html">Add to cart</a>
                                                            <a class="btn-quick-view" href="javascript:;" title="Quick view">Quick view</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--== End Shop Item ==-->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--== End Product Area Wrapper ==-->

<!--== Start Feature Area Wrapper ==-->
<div class="feature-area">
    <div class="container-fluid bg-theme-color">
        <div class="row">
            <div class="col-xl-3 col-sm-6">
                <div class="feature-icon-box">
                    <div class="inner-content">
                        <div class="icon-box">
                            <i class="icon las la-shipping-fast"></i>
                        </div>
                        <div class="content">
                            <h5 class="title">Free Shipping</h5>
                            <p>On all orders over $75.00</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6">
                <div class="feature-icon-box">
                    <div class="inner-content">
                        <div class="icon-box">
                            <i class="icon las la-money-bill-wave"></i>
                        </div>
                        <div class="content">
                            <h5 class="title">Free Returns</h5>
                            <p>Returns are free within 9 days</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6">
                <div class="feature-icon-box">
                    <div class="inner-content">
                        <div class="icon-box">
                            <i class="icon las la-user-astronaut"></i>
                        </div>
                        <div class="content">
                            <h5 class="title">Support 24/7</h5>
                            <p>Contact us 24 hours a day</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6">
                <div class="feature-icon-box">
                    <div class="inner-content">
                        <div class="icon-box">
                            <i class="icon las la-credit-card"></i>
                        </div>
                        <div class="content">
                            <h5 class="title">100% Payment Secure</h5>
                            <p>Your payment are safe with us.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--== End Feature Area Wrapper ==-->

<!--== Start Product Category Area Wrapper ==-->
<section class="product-area product-category-area">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 m-auto">
                <div class="section-title text-center">
                    <h2 class="title">Popular Categories</h2>
                    <div class="desc">
                        <p>Some of our popular categories include cosmetic</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="product-categorys-col5-slider owl-carousel owl-theme">
                    <div class="item">
                        <div class="product-category-item">
                            <div class="inner-content">
                                <div class="thumb">
                                    <img src="assets/img/shop/category/01.jpg" alt="Image-HasTech" class="img">
                                </div>
                                <div class="content">
                                    <p class="product-number">13 products</p>
                                    <h4 class="title"><a href="shop.html">Makeup</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="product-category-item">
                            <div class="inner-content">
                                <div class="thumb">
                                    <img src="assets/img/shop/category/02.jpg" alt="Image-HasTech" class="img">
                                </div>
                                <div class="content">
                                    <p class="product-number">13 products</p>
                                    <h4 class="title"><a href="shop.html">Skin Care</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="product-category-item">
                            <div class="inner-content">
                                <div class="thumb">
                                    <img src="assets/img/shop/category/03.jpg" alt="Image-HasTech" class="img">
                                </div>
                                <div class="content">
                                    <p class="product-number">13 products</p>
                                    <h4 class="title"><a href="shop.html">Health Care</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="product-category-item">
                            <div class="inner-content">
                                <div class="thumb">
                                    <img src="assets/img/shop/category/04.jpg" alt="Image-HasTech" class="img">
                                </div>
                                <div class="content">
                                    <p class="product-number">13 products</p>
                                    <h4 class="title"><a href="shop.html">Makeup Tools</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="product-category-item">
                            <div class="inner-content">
                                <div class="thumb">
                                    <img src="assets/img/shop/category/01.jpg" alt="Image-HasTech" class="img">
                                </div>
                                <div class="content">
                                    <p class="product-number">13 products</p>
                                    <h4 class="title"><a href="shop.html">Skin Care Tools</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="product-category-item">
                            <div class="inner-content">
                                <div class="thumb">
                                    <img src="assets/img/shop/category/02.jpg" alt="Image-HasTech" class="img">
                                </div>
                                <div class="content">
                                    <p class="product-number">13 products</p>
                                    <h4 class="title"><a href="shop.html">Nail Art & Tools</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--== End Product Category Area Wrapper ==-->

<!--== Start Testimonial Area Wrapper ==-->
<section class="testimonial-area">
    <div class="container pt-15 pb-95 pb-lg-70 pt-lg-5">
        <div class="row">
            <div class="col-sm-8 m-auto">
                <div class="section-title text-center">
                    <h2 class="title">Client Testimonials</h2>
                    <div class="desc">
                        <p>What our happy customers says !</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="testimonials-slider testi-first-active owl-carousel owl-theme">
                    <div class="item">
                        <!--== Start Testimonial Item ==-->
                        <div class="testimonial-item testi-height-style matchHeight">
                            <div class="testi-inner-content">
                                <div class="testi-author">
                                    <div class="testi-thumb">
                                        <img src="assets/img/testimonial/01.png" alt="Image-HasTech" class="img">
                                    </div>
                                    <div class="testi-info">
                                        <span class="name">orando BLoom</span>
                                        <span class="email">demo@example.com</span>
                                    </div>
                                </div>
                                <div class="testi-content">
                                    <p>All Perfect !! I have three sites with magento , this theme is the best !! Excellent support , advice theme installation package , sorry for English, are Italian but I had no problem !! Thank you !</p>
                                    <div class="testi-info">
                                        <span class="name">orando BLoom</span>
                                        <span class="email">demo@example.com</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--== End Testimonial Item ==-->
                    </div>
                    <div class="item">
                        <!--== Start Testimonial Item ==-->
                        <div class="testimonial-item testi-height-style matchHeight">
                            <div class="testi-inner-content">
                                <div class="testi-author">
                                    <div class="testi-thumb">
                                        <img src="assets/img/testimonial/02.png" alt="Image-HasTech" class="img">
                                    </div>
                                    <div class="testi-info">
                                        <span class="name">orando BLoom</span>
                                        <span class="email">demo@example.com</span>
                                    </div>
                                </div>
                                <div class="testi-content">
                                    <p>All Perfect !! I have three sites with magento , this theme is the best !! Excellent support , advice theme installation package , sorry for English, are Italian but I had no problem !! Thank you !</p>
                                    <div class="testi-info">
                                        <span class="name">orando BLoom</span>
                                        <span class="email">demo@example.com</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--== End Testimonial Item ==-->
                    </div>
                    <div class="item">
                        <!--== Start Testimonial Item ==-->
                        <div class="testimonial-item testi-height-style matchHeight">
                            <div class="testi-inner-content">
                                <div class="testi-author">
                                    <div class="testi-thumb">
                                        <img src="assets/img/testimonial/01.png" alt="Image-HasTech" class="img">
                                    </div>
                                    <div class="testi-info">
                                        <span class="name">orando BLoom</span>
                                        <span class="email">demo@example.com</span>
                                    </div>
                                </div>
                                <div class="testi-content">
                                    <p>All Perfect !! I have three sites with magento , this theme is the best !! Excellent support , advice theme installation package , sorry for English, are Italian but I had no problem !! Thank you !</p>
                                    <div class="testi-info">
                                        <span class="name">orando BLoom</span>
                                        <span class="email">demo@example.com</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--== End Testimonial Item ==-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--== End Testimonial Area Wrapper ==-->

<!--== Start Product Area Wrapper ==-->
<section>
    <div class="container-fluid spacingX-90 pt-0 pb-0">
        <div class="row">
            <div class="col-12">
                <div class="thumb thumb-scale-hover-style">
                    <a href="single-product.html"><img src="assets/img/shop/banner/02.jpg" alt="Image-HasTech" class="hover-img"></a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--== End Product Area Wrapper ==-->

<!--== Start Blog Area Wrapper ==-->
<section class="blog-area">
    <div class="container pt-95 pb-100 pt-lg-70 pb-lg-70">
        <div class="row">
            <div class="col-sm-8 m-auto">
                <div class="section-title text-center">
                    <h2 class="title">Latest Blogs</h2>
                    <div class="desc">
                        <p>Present posts in a best way to highlight interesting moments of your blog.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="blog-slider owl-carousel owl-theme">
                    <div class="item">
                        <!--== Start Blog Item ==-->
                        <div class="post-item">
                            <div class="inner-content">
                                <div class="thumb">
                                    <a href=""><img src="assets/img/blog/01.jpg" class="img" alt="Image-HasTech"></a>
                                </div>
                                <div class="content">
                                    <a class="category" href="">Fashion</a>
                                    <h4 class="title"><a href="single-blog.html">This is Secound Post For XipBlog</a></h4>
                                    <div class="meta">
                                        <span>Posted by</span>
                                        <a class="author" href="blog.html">Demo Posthemes</a>
                                        <a class="date" href="blog.html">Sep 26TH, 2020</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--== End Blog Item ==-->
                    </div>
                    <div class="item">
                        <!--== Start Blog Item ==-->
                        <div class="post-item">
                            <div class="inner-content">
                                <div class="thumb">
                                    <a href="blog.html"><img src="assets/img/blog/02.jpg" class="img" alt="Image-HasTech"></a>
                                </div>
                                <div class="content">
                                    <a class="category" href="blog.html">Fashion</a>
                                    <h4 class="title"><a href="single-blog.html">This is Secound Post For XipBlog</a></h4>
                                    <div class="meta">
                                        <span>Posted by</span>
                                        <a class="author" href="blog.html">Demo Posthemes</a>
                                        <a class="date" href="blog.html">Sep 26TH, 2020</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--== End Blog Item ==-->
                    </div>
                    <div class="item">
                        <!--== Start Blog Item ==-->
                        <div class="post-item">
                            <div class="inner-content">
                                <div class="thumb">
                                    <a href="blog.html"><img src="assets/img/blog/03.jpg" class="img" alt="Image-HasTech"></a>
                                </div>
                                <div class="content">
                                    <a class="category" href="blog.html">Fashion</a>
                                    <h4 class="title"><a href="single-blog.html">This is Secound Post For XipBlog</a></h4>
                                    <div class="meta">
                                        <span>Posted by</span>
                                        <a class="author" href="blog.html">Demo Posthemes</a>
                                        <a class="date" href="blog.html">Sep 26TH, 2020</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--== End Blog Item ==-->
                    </div>
                    <div class="item">
                        <!--== Start Blog Item ==-->
                        <div class="post-item">
                            <div class="inner-content">
                                <div class="thumb">
                                    <a href="blog.html"><img src="assets/img/blog/04.jpg" class="img" alt="Image-HasTech"></a>
                                </div>
                                <div class="content">
                                    <a class="category" href="blog.html">Fashion</a>
                                    <h4 class="title"><a href="single-blog.html">This is Secound Post For XipBlog</a></h4>
                                    <div class="meta">
                                        <span>Posted by</span>
                                        <a class="author" href="blog.html">Demo Posthemes</a>
                                        <a class="date" href="blog.html">Sep 26TH, 2020</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--== End Blog Item ==-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--== End Blog Area Wrapper ==-->

@endsection