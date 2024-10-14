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
                    <button class="btn-product-add" type="submit">@lang('message.add-to-cart')</button>
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
              <a class="active" id="description-tab" data-bs-toggle="pill" href="#description" role="tab" aria-controls="description" aria-selected="true">@lang('message.description')</a>
            </li>
            <li role="presentation">
              <a id="reviews-tab" data-bs-toggle="pill" href="#reviews" role="tab" aria-controls="reviews" aria-selected="false">@lang('message.review')</a>
            </li>
          </ul>
          <div class="tab-content product-tab-content" id="ReviewTabContent">
            <div class="tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-tab">
              <div class="product-description">
                <p class="preformatted">{!!$products->description!!}</p>
                <p class="preformatted"><b>Thương hiệu:</b> {{$products->brand}}</p>
                <p class="preformatted"><b>Xuất xứ:</b> {{$products->origin}}</p>
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
          @foreach($product as $item)
          <div class="item">
            <!--== Start Shop Item ==-->
            <div class="product-item">
              <div class="inner-content">
                <div class="product-thumb">
                  <a href="/product/{{$item->_id}}">
                    <img src="{{ asset('img/' .$item->image) }}" alt="Image-HasTech">
                  </a>
                </div>
                <div class="product-desc">
                  <div class="product-info">
                    <h4 class="title"><a href="/product/{{$item->_id}}">{{ $item->name }}</a></h4>
                    <div class="prices">
                      <span class="price text-black">{{ number_format($item->price, 0, ',', '.') }} đ</span>
                    </div>
                  </div>
                  <div class="product-footer">
                    <form action="{{route('cart.add')}}" method="post">
                      @csrf
                      <div class="product-quick-qty">
                        <div class="pro-qty">
                          <input type="text" hidden name="product_id" value="{{ $item->_id }}">
                          <input type="number" name="quantity" value="1" min="1" hidden />
                        </div>
                      </div>
                      <button class="btn-product-add" type="submit">Add to cart</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <!--== End Shop Item ==-->
          </div>
          @endforeach
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