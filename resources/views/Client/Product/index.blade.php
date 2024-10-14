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
                            <li><a href="{{route('home')}}">Home</a></li>
                            <li class="breadcrumb-sep"><i class="fa fa-angle-right"></i></li>
                            <li>Shop Left Sidebar</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!--== End Page Header Area Wrapper ==-->

<!--== Start Product Area Wrapper ==-->
<section class="product-area">
    <div class="container pb-55">
        <div class="row">
            <div class="col-lg-3 order-1 order-lg-1">
                <!--== Start Sidebar Area ==-->
                <div class="shop-sidebar-wrapper">
                    <!--== Start Sidebar Item ==-->
                    <div class="sidebar-item">
                        <h4 class="sidebar-title"><a href="shop-left-sidebar.html">Shop Left Sidebar</a></h4>
                        <div class="sidebar-body">
                            <div class="category-sub-menu">
                                <ul>
                                    <li>
                                        <a href="#/">Makeup</a>
                                        <span class="collapse-icons collapsed" data-bs-toggle="collapse" data-bs-target="#sub-menu" role="button" aria-expanded="false">
                                            <i></i>
                                        </span>
                                        <ul class="collapse" id="sub-menu">
                                            <li><a href="#/">Eyes</a></li>
                                            <li><a href="#/">Lips</a></li>
                                            <li><a href="#/">Face</a></li>
                                            <li><a href="#/">Makeup Tools</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#/">Skin Care</a>
                                        <span class="collapse-icons collapsed" data-bs-toggle="collapse" data-bs-target="#sub-menu2" role="button" aria-expanded="false">
                                            <i></i>
                                        </span>
                                        <ul class="collapse" id="sub-menu2">
                                            <li><a href="#/">Face</a></li>
                                            <li><a href="#/">Eyes</a></li>
                                            <li><a href="#/">Body</a></li>
                                            <li><a href="#/">Skin Care Tools</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#/">Health Care</a>
                                        <span class="collapse-icons collapsed" data-bs-toggle="collapse" data-bs-target="#sub-menu3" role="button" aria-expanded="false">
                                            <i></i>
                                        </span>
                                        <ul class="collapse" id="sub-menu3">
                                            <li><a href="#/">Massage & Relaxation</a></li>
                                            <li><a href="#/">Household Health Monitors</a></li>
                                            <li><a href="#/">Chinese Medicine</a></li>
                                            <li><a href="#/">Personal Health Care Items</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#/">Nail Art & Tools</a>
                                        <span class="collapse-icons collapsed" data-bs-toggle="collapse" data-bs-target="#sub-menu4" role="button" aria-expanded="false">
                                            <i></i>
                                        </span>
                                        <ul class="collapse" id="sub-menu4">
                                            <li><a href="#/">Gel Nail Polish</a></li>
                                            <li><a href="#/">Nail Drills</a></li>
                                            <li><a href="#/">Nail Dryers</a></li>
                                            <li><a href="#/">Nail Glitter</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <h4 class="sidebar-title mb-45">Filter By</h4>
                    </div>
                    <!--== End Sidebar Item ==-->

                    <!--== Start Sidebar Item ==-->
                    <div class="sidebar-item mb-40">
                        <h4 class="small-title">Categories</h4>
                        <div class="sidebar-body">
                            <div class="sidebar-menu-list">
                                <div class="list-item">
                                    <input class="form-check-input" type="checkbox" value="1" id="list1">
                                    <label class="form-check-label" for="list1">Health Care (13)</label>
                                </div>
                                <div class="list-item">
                                    <input class="form-check-input" type="checkbox" value="2" id="list2">
                                    <label class="form-check-label" for="list2">Makeup (13)</label>
                                </div>
                                <div class="list-item">
                                    <input class="form-check-input" type="checkbox" value="3" id="list3">
                                    <label class="form-check-label" for="list3">Nail Art & Tools (13)</label>
                                </div>
                                <div class="list-item">
                                    <input class="form-check-input" type="checkbox" value="4" id="list4">
                                    <label class="form-check-label" for="list4">Skin Care (13)</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--== End Sidebar Item ==-->

                    <!--== Start Sidebar Item ==-->
                    <div class="sidebar-item mb-40">
                        <h4 class="small-title">Size</h4>
                        <div class="sidebar-body">
                            <div class="sidebar-menu-list">
                                <div class="list-item">
                                    <input class="form-check-input" type="checkbox" value="5" id="list5">
                                    <label class="form-check-label" for="list5">S (2)</label>
                                </div>
                                <div class="list-item">
                                    <input class="form-check-input" type="checkbox" value="6" id="list6">
                                    <label class="form-check-label" for="list6">M (2)</label>
                                </div>
                                <div class="list-item">
                                    <input class="form-check-input" type="checkbox" value="7" id="list7">
                                    <label class="form-check-label" for="list7">L (2)</label>
                                </div>
                                <div class="list-item">
                                    <input class="form-check-input" type="checkbox" value="8" id="list8">
                                    <label class="form-check-label" for="list8">XL (2)</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--== End Sidebar Item ==-->

                    <!--== Start Sidebar Item ==-->
                    <div class="sidebar-item mb-40">
                        <h4 class="small-title">Color</h4>
                        <div class="sidebar-body">
                            <ul class="sidebar-product-color">
                                <li class="color-grey">Grey (1)</li>
                                <li class="color-white">White (4)</li>
                                <li class="color-black">Black (4)</li>
                                <li class="color-camel">Camel (1)</li>
                            </ul>
                        </div>
                    </div>
                    <!--== End Sidebar Item ==-->

                    <!--== Start Sidebar Item ==-->
                    <div class="sidebar-item mb-40">
                        <h4 class="small-title">Availability</h4>
                        <div class="sidebar-body">
                            <div class="sidebar-menu-list">
                                <div class="list-item">
                                    <input class="form-check-input" type="checkbox" value="9" id="list9">
                                    <label class="form-check-label" for="list9">In stock (13)</label>
                                </div>
                                <div class="list-item">
                                    <input class="form-check-input" type="checkbox" value="10" id="list10">
                                    <label class="form-check-label" for="list10">Not available (1)</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--== End Sidebar Item ==-->

                    <!--== Start Sidebar Item ==-->
                    <div class="sidebar-item mb-40">
                        <h4 class="small-title">Brand</h4>
                        <div class="sidebar-body">
                            <div class="sidebar-menu-list">
                                <div class="list-item">
                                    <input class="form-check-input" type="checkbox" value="11" id="list11">
                                    <label class="form-check-label" for="list11">Graphic Corner (5)</label>
                                </div>
                                <div class="list-item">
                                    <input class="form-check-input" type="checkbox" value="12" id="list12">
                                    <label class="form-check-label" for="list12">Studio Design (8)</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--== End Sidebar Item ==-->

                    <!--== Start Sidebar Item ==-->
                    <div class="sidebar-item mb-40">
                        <h4 class="small-title">Price</h4>
                        <div class="sidebar-body">
                            <div class="sidebar-price-range">
                                <div class="slider-labels">
                                    <div class="caption">
                                        <span id="slider-range-value1"></span>
                                    </div>
                                    <span class="range-separator"> — </span>
                                    <div class="caption">
                                        <span id="slider-range-value2"></span>
                                    </div>
                                </div>
                                <div class="slider-range" id="slider-range"></div>
                            </div>
                        </div>
                    </div>
                    <!--== End Sidebar Item ==-->

                    <!--== Start Sidebar Item ==-->
                    <div class="sidebar-item">
                        <h4 class="sidebar-title mb-25">Tags</h4>
                        <div class="sidebar-body">
                            <div class="product-categories">
                                <ul>
                                    <li><a href="#/">Makeup</a></li>
                                    <li><a href="#/">Health Care</a></li>
                                    <li><a href="#/"> Skin Care</a></li>
                                    <li><a href="#/">Nail Art & Tools</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--== End Sidebar Item ==-->
                </div>
                <!--== End Sidebar Area ==-->
            </div>
            <div class="col-lg-9 order-0 order-lg-2">
                <!--== Start Shop Area ==-->
                <div class="product-header-wrap">
                    <div class="row">
                        <div class="col-8 col-sm-8 col-md-6">
                            <div class="row">
                                <div class="col-sm-9">
                                    <div class="sort-by-form">
                                        <button class="btn btn-outline" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                            Sắp xếp theo giá
                                        </button>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item"
                                                    href="{{ route('product', array_merge(request()->query(), ['sort_by' => 'price', 'sort_order' => 'asc'])) }}">Low
                                                    to High</a></li>
                                            <li><a class="dropdown-item"
                                                    href="{{ route('product', array_merge(request()->query(), ['sort_by' => 'price', 'sort_order' => 'desc'])) }}">High
                                                    to Low</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-body-wrap">
                    <div class="tab-content product-tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="grid" role="tabpanel" aria-labelledby="grid-tab">
                            <div class="row">
                                @foreach($products as $product)
                                <div class="col-sm-6 col-md-4">
                                    <!--== Start Shop Item ==-->
                                    <div class="product-item">
                                        <div class="inner-content">
                                            <div class="product-thumb">
                                                <a href="/product/{{$product->_id}}">
                                                    <img src="{{asset ('img/'. $product->image) }}" alt="Image-HasTech">
                                                </a>
                                                <ul class="product-flag">
                                                    <li class="new">New</li>
                                                    <li class="discount visually-hidden">-10%</li>
                                                </ul>
                                            </div>
                                            <div class="product-desc">
                                                <div class="product-info">
                                                    <h4 class="title"><a href="/product/{{$product->_id}}">{{$product->name}}</a></h4>
                                                    <div class="star-content">
                                                        <i class="ion-md-star"></i>
                                                        <i class="ion-md-star"></i>
                                                        <i class="ion-md-star"></i>
                                                        <i class="ion-md-star"></i>
                                                        <i class="ion-md-star"></i>
                                                    </div>
                                                    <div class="prices">
                                                        <span class="price text-black">{{ number_format($product->price, 0, ',', '.') }} đ</span>
                                                    </div>
                                                </div>
                                                <div class="product-footer">
                                                    c
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
                    <div class="row">
                        <div class="col-12">
                            <div class="pagination-content-wrap">
                                {{ $products->appends(request()->query())->links('pagination::bootstrap-5') }}
                            </div>
                        </div>
                    </div>
                </div>
                <!--== End Shop Area ==-->
            </div>
        </div>
    </div>
</section>
<!--== End Product Area Wrapper ==-->

@endsection