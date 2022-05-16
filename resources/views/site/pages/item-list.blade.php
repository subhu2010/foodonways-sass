@extends("site.layouts.layout")

@section("page_title", "Food On Ways")

@section("content")

<section class="breadcrumb-banner">
    <img src="{{ asset('site-assets/images/5.jpg') }}" class="img-fluid">
    <div class="banner-content">
        <h1>Burger</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{url('new-listing')}}">Product</a></li>
                <li class="breadcrumb-item active" aria-current="page">Burger</li>
            </ol>
        </nav>
    </div>
</section>


<section class="product-section-list pt-5">
    <div class="container">
        <button class="btn sticky-filter-btn d-lg-none" onclick="openFiler()">
            <img src="{{ asset('site-assets/images/menu/filter-menu.svg') }}">
        </button>
        <div class="row">
            <div class="col-lg-3 col-md-12 col-md-4">
                <div id="mb-view">
                    <div class="mb-content">
                        <div class="mb-header d-lg-none">
                            <h5>Refine match search</h5>
                            <a href="javascript:void(0)" class="closebtn d-lg-none" onclick="closeFiler()">&times;</a>
                        </div>
                        <div id="content-sidebar">
                            <aside id="product-category" class="product-category mb-4">
                                <div class="product-category-header">
                                    <h3>
                                        <span><i class="las la-rocket"></i></span>
                                        Category
                                    </h3>
                                </div>
                                <ul class="product-category-list mt-2">
                                    <li class="category-list">
                                        <a href="#">Asian <span class="count">9</span></a>
                                        <ul class="category-list-child">
                                            <li class="category-list">
                                                <a href="#">Apple dumpling <span class="count">2</span></a>
                                            </li>
                                            <li class="category-list">
                                                <a href="#">Aloo paratha <span class="count">3</span></a>
                                            </li>
                                            <li class="category-list">
                                                <a href="#">Breadfruit <span class="count">1</span></a>
                                            </li>
                                            <li class="category-list">
                                                <a href="#">Egg bhurji <span class="count">6</span></a>
                                            </li>
                                            <li class="category-list">
                                                <a href="#">Muesli <span class="count">3</span></a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="category-list">
                                        <a href="#">Burger <span class="count">12</span></a>
                                        <ul class="category-list-child">
                                            <li class="category-list">
                                                <a href="#">Cheesy <span class="count">1</span></a>
                                            </li>
                                            <li class="category-list">
                                                <a href="#">Extra Component <span class="count">3</span></a>
                                            </li>
                                            <li class="category-list">
                                                <a href="#">Veg <span class="count">5</span></a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="category-list">
                                        <a href="#">Pizza <span class="count">9</span></a>
                                        <ul class="category-list-child">
                                            <li class="category-list">
                                                <a href="#">Cheesy <span class="count">2</span></a>
                                            </li>
                                            <li class="category-list">
                                                <a href="#">Extra Component <span class="count">1</span></a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="category-list">
                                        <a href="#">Momo <span class="count">10</span></a>
                                    </li>
                                    <li class="category-list">
                                        <a href="#">Chowmine <span class="count">8</span></a>
                                    </li>
                                </ul>
                            </aside>
                            <aside id="product-category" class="product-category mb-4">
                                <div class="product-category-header">
                                    <h3>
                                        <span><i class="las la-rocket"></i></span>
                                        POPULAR PRODUCTS
                                    </h3>
                                </div>
                                <ul class="product-list--widget">
                                    <li>
                                        <a href="javascript:void(0)" class="clearfix">
                                            <img src="{{ asset('site-assets/images/item/3.jpg') }}" alt=""
                                                class="img-fluid">
                                            <div class="popular-product">
                                                <span class="popular-product-title">Pizza Amatriciana</span>
                                                <span class="popular-product-price">Rs 400 - Rs 900</span>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" class="clearfix">
                                            <img src="{{ asset('site-assets/images/item/4.jpg') }}" alt=""
                                                class="img-fluid">
                                            <div class="popular-product">
                                                <span class="popular-product-title">Pizza Amatriciana</span>
                                                <span class="popular-product-price">Rs 400 - Rs 900</span>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </aside>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-12 col-md-8">
                <div class="category-carousel">
                    <div class="owl-carousel owl-theme list-category-slider">
                        <div class="item">
                            <div class="list-category-slide">
                                <div class="list-category-img">
                                    <img src="{{ asset('site-assets/images/menu/1.png') }}" alt="">
                                </div>
                                <h2 class="list-category-name">
                                    burger
                                    <span class="count">9</span>
                                </h2>
                            </div>
                        </div>
                        <div class="item">
                            <div class="list-category-slide">
                                <div class="list-category-img">
                                    <img src="{{ asset('site-assets/images/menu/2.png') }}" alt="">
                                </div>
                                <h2 class="list-category-name">
                                    burger
                                    <span class="count">9</span>
                                </h2>
                            </div>
                        </div>
                        <div class="item">
                            <div class="list-category-slide">
                                <div class="list-category-img">
                                    <img src="{{ asset('site-assets/images/menu/3.png') }}" alt="">
                                </div>
                                <h2 class="list-category-name">
                                    burger
                                    <span class="count">9</span>
                                </h2>
                            </div>
                        </div>
                        <div class="item">
                            <div class="list-category-slide">
                                <div class="list-category-img">
                                    <img src="{{ asset('site-assets/images/menu/4.png') }}" alt="">
                                </div>
                                <h2 class="list-category-name">
                                    burger
                                    <span class="count">9</span>
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="product-list-section">
                    <div class="product-list-box">
                        <div class="product-list-view">
                            <div class="image">
                                <img src="{{ asset('site-assets/images/item/1.jpg') }}" alt="">
                                <span><i class="lar la-heart"></i></span>
                            </div>
                            <div class="product-list-view-summary">
                                <a href="javascript:void(0)" class="title-link">
                                    <span> Bacon Cheeseburger </span>
                                </a>
                                <div class="product-list-desc">
                                    <p>Smoked brisket, tender ribs, smoked sausage, bacon & cheddar with lettuce,
                                        tomato,
                                        house BBQ & ranch.</p>
                                </div>
                                <div class="price-hold">
                                    <span>Rs 500</span>
                                </div>
                            </div>
                            <div class="cart-link">
                                <a href="javascript:void(0)" data-bs-toggle="modal" data-bs-target="#quickView">
                                    <i class="las la-shopping-cart"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="product-list-box">
                        <div class="product-list-view">
                            <div class="image">
                                <img src="{{ asset('site-assets/images/item/2.jpg') }}" alt="">
                                <span><i class="lar la-heart"></i></span>
                            </div>
                            <div class="product-list-view-summary">
                                <a href="javascript:void(0)" class="title-link">
                                    <span> Bacon Cheeseburger </span>
                                </a>
                                <div class="product-list-desc">
                                    <p>Smoked brisket, tender ribs, smoked sausage, bacon & cheddar with lettuce,
                                        tomato,
                                        house BBQ & ranch.</p>
                                </div>
                                <div class="price-hold">
                                    <span>Rs 500</span>
                                </div>
                            </div>
                            <div class="cart-link">
                                <a href="javascript:void(0)">
                                    <i class="las la-shopping-cart"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="product-list-box">
                        <div class="product-list-view">
                            <div class="image">
                                <img src="{{ asset('site-assets/images/item/3.jpg') }}" alt="">
                                <span><i class="lar la-heart"></i></span>
                            </div>
                            <div class="product-list-view-summary">
                                <a href="javascript:void(0)" class="title-link">
                                    <span> Pizza Fungi </span>
                                </a>
                                <div class="product-list-desc">
                                    <p>Smoked brisket, tender ribs, smoked sausage, bacon & cheddar with lettuce,
                                        tomato,
                                        house BBQ & ranch.</p>
                                </div>
                                <div class="price-hold">
                                    <span>Rs 500</span>
                                </div>
                                <div class="row variation g-0 g-1">
                                    <div class="col-3">
                                        <span class="variation-label">11"</span>
                                    </div>
                                    <div class="col-3">
                                        <span class="variation-label">300gm</span>
                                    </div>
                                    <div class="col-3">
                                        <span class="variation-label"><strong>Rs 999</strong></span>
                                    </div>
                                    <div class="col-3">
                                        <span class="variation-label variation-order">order</span>
                                    </div>
                                    <div class="col-3">
                                        <span class="variation-label">11"</span>
                                    </div>
                                    <div class="col-3">
                                        <span class="variation-label">300gm</span>
                                    </div>
                                    <div class="col-3">
                                        <span class="variation-label"><strong>Rs 999</strong></span>
                                    </div>
                                    <div class="col-3">
                                        <span class="variation-label variation-order">order</span>
                                    </div>
                                </div>
                            </div>
                            <div class="cart-link">
                                <a href="javascript:void(0)">
                                    <i class="las la-shopping-cart"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>


<div class="modal fade quick-view" id="quickView" tabindex="-1" aria-labelledby="quickViewLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            </div>
        </div>
    </div>
</div>

@endsection