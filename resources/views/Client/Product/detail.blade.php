@extends('Layout.clientLayout')
@section('title', 'Argima - Sản phảm chính hãng VN')
@section('content')

<!--== Start Page Header Area Wrapper ==-->
<div class="page-header-area bg-img" data-bg-img="assets/img/photos/bg-02.jpg">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <div class="page-header-content">
          <nav class="breadcrumb-area">
            <ul class="breadcrumb">
              <li><a href="{{ route('home')}}">Home</a></li>
              <li class="breadcrumb-sep"><i class="fa fa-angle-right"></i></li>
              <li><a href="{{ route('product') }}">Shop</a></li>
              <li class="breadcrumb-sep"><i class="fa fa-angle-right"></i></li>
              <li>Product Single</li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </div>
</div>
<!--== End Page Header Area Wrapper ==-->

<!--== Start Product Single Area Wrapper ==-->
<section class="product-area product-single-area">
  <div class="container pt-60 pb-0">
    <div class="row">
      <div class="col-12">
        <div class="product-single-item" data-margin-bottom="62">
          <div class="row">
            <div class="col-md-6">
              <!--== Start Product Thumbnail Area ==-->
              <div class="product-thumb">
                <div class="swiper-container single-product-thumb-content single-product-thumb-slider2">
                  <div class="swiper-wrapper">
                    <div class="swiper-slide zoom zoom-hover">
                      <a class="lightbox-image" data-fancybox="gallery" href="#">
                        <img src="{{ asset('img/' .$products->image) }}" alt="Image-HasTech">
                        <span class="product-flag-new">New</span>
                      </a>
                    </div>
                  </div>
                </div>
                <!-- <div class="swiper-container single-product-nav-content single-product-nav-slider2">
                      <div class="swiper-wrapper">
                        <div class="swiper-slide">
                          <img src="assets/img/shop/product-single/nav-05.jpg" alt="Image-HasTech">
                        </div>
                        <div class="swiper-slide">
                          <img src="assets/img/shop/product-single/nav-06.jpg" alt="Image-HasTech">
                        </div>
                        <div class="swiper-slide">
                          <img src="assets/img/shop/product-single/nav-07.jpg" alt="Image-HasTech">
                        </div>
                        <div class="swiper-slide">
                          <img src="assets/img/shop/product-single/nav-08.jpg" alt="Image-HasTech">
                        </div>
                      </div>
                    </div> -->
              </div>
              <!--== End Product Thumbnail Area ==-->
            </div>
            <div class="col-md-6">
              <!--== Start Product Info Area ==-->
              <div class="product-single-info mt-sm-70">
                <h1 class="title">{{$products->name}}</h1>
                <div class="product-info">
                  <div class="star-content">
                    <i class="ion-md-star"></i>
                    <i class="ion-md-star"></i>
                    <i class="ion-md-star"></i>
                    <i class="ion-md-star"></i>
                    <i class="ion-md-star icon-color-gray"></i>
                  </div>
                </div>
                <div class="prices">
                  <span class="price">{{ number_format($products->price, 0, ',', '.') }} đ</span>
                  <div class="tax-label">Tax included</div>
                </div>
                <div class="product-quick-action">
                  <form action="{{route('cart.add')}}" method="post">
                    @csrf
                    <div class="product-quick-qty">
                      <div class="pro-qty">
                        <input type="text" hidden name="product_id" value="{{ $products->_id }}">
                        <input type="number" name="quantity" value="1" min="1" hidden />
                      </div>
                    </div>
                    <button class="btn-product-add" type="submit">Add to cart</button>
                  </form>
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
    </div>
    <div class="row">
      <div class="col-12">
        <div class="product-review-tabs-content">
          <ul class="nav product-tab-nav" id="ReviewTab" role="tablist">
            <li role="presentation">
              <a class="active" id="description-tab" data-bs-toggle="pill" href="#description" role="tab" aria-controls="description" aria-selected="true">Description</a>
            </li>
            <li role="presentation">
              <a id="reviews-tab" data-bs-toggle="pill" href="#reviews" role="tab" aria-controls="reviews" aria-selected="false">Reviews</a>
            </li>
          </ul>
          <div class="tab-content product-tab-content" id="ReviewTabContent">
            <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
              <div class="product-description">
                <p class="preformatted">{{$products->description}}</p>
                <img src="{{ asset('img/' .$products->image) }}" alt="Image-HasTech">
              </div>
            </div>
            <div class="tab-pane fade" id="product-details" role="tabpanel" aria-labelledby="product-details-tab">
              <div class="product-details">
                <div class="product-manufacturer">
                  <a href="#/"><img src="assets/img/shop/product-brand-01.jpg" alt="Logo" /></a>
                </div>
                <div class="product-reference"><span>Reference</span>demo_1</div>
                <div class="product-quantities"><span>In stock</span>300 Items</div>
                <div class="product-data-sheet">
                  <span>Data Sheet</span>
                  <dl class="data-sheet">
                    <dt class="name">Compositions</dt>
                    <dd class="value">Cotton</dd>
                    <dt class="name">Paper Type</dt>
                    <dd class="value">Doted</dd>
                    <dt class="name">Color</dt>
                    <dd class="value">Black</dd>
                    <dt class="name">Size</dt>
                    <dd class="value">L</dd>
                    <dt class="name">Frame Size</dt>
                    <dd class="value">40x60cm</dd>
                  </dl>
                </div>
              </div>
            </div>
            <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
              <div class="product-comments-content">
                <div class="comment clearfix">
                  <div class="comment-author">
                    <span class="grade">Grade</span>
                    <div class="star-content">
                      <i class="ion-md-star"></i>
                      <i class="ion-md-star"></i>
                      <i class="ion-md-star"></i>
                      <i class="ion-md-star"></i>
                      <i class="ion-md-star icon-color-gray"></i>
                    </div>
                    <div class="comment-author-info">
                      <span class="title">posthemes</span>
                      <span class="date">05/19/2021</span>
                    </div>
                    <div class="comment-details">
                      <span class="title">Demo</span>
                      <p class="desc">0 out of 1 people found this review useful.</p>
                    </div>
                  </div>
                </div>
                <a href="#/" class="btn-review">Write your review !</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--== End Product Single Area Wrapper ==-->

<!--== Start Product Area Wrapper ==-->
<section class="product-area">
  <div class="container pt-0">
    <div class="row">
      <div class="col-sm-8 m-auto">
        <div class="section-title text-center">
          <h2 class="title">Other Products</h2>
          <div class="desc">
            <p>12 other products in the same category:</p>
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
                    <a class="btn-product-add" href="cart.html">Add to cart</a>
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
                    <a class="btn-product-add" href="cart.html">Add to cart</a>
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
                    <a class="btn-product-add" href="cart.html">Add to cart</a>
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
                    <a class="btn-product-add" href="cart.html">Add to cart</a>
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
                    <a class="btn-product-add" href="cart.html">Add to cart</a>
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
                    <a class="btn-product-add" href="cart.html">Add to cart</a>
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
                    <a class="btn-product-add" href="cart.html">Add to cart</a>
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
                    <a class="btn-product-add" href="cart.html">Add to cart</a>
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
                    <a class="btn-product-add" href="cart.html">Add to cart</a>
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
                    <a class="btn-product-add" href="cart.html">Add to cart</a>
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
                    <a class="btn-product-add" href="cart.html">Add to cart</a>
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
                    <a class="btn-product-add" href="cart.html">Add to cart</a>
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
<style>
  .preformatted {
    white-space: pre-wrap;
    /* Giữ định dạng văn bản và xuống dòng */
  }
</style>
@endsection