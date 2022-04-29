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
        <button class="btn sticky-filter-btn" onclick="openListSidebar()">
            <img src="{{ asset('site-assets/images/menu/filter-menu.svg') }}">
        </button>
        <div class="row">
            <div class="col-lg-3 col-md-12 col-md-4">
                @include('site.includes.list-sidebar')
            </div>
            <div class="col-lg-9 col-md-12 col-md-8">
                <div class="sorting-order clearfix">
                    <p class="result-count">
                        Showing 1–6 of 55 results
                    </p>
                    <form class="form-ordering">
                        <div class="select-wrap">
                            <select name="orderby" class="orderby" aria-label="Shop order">
                                <option value="menu_order" selected="selected">Default sorting</option>
                                <option value="popularity">Sort by popularity</option>
                                <option value="rating">Sort by average rating</option>
                                <option value="date">Sort by latest</option>
                                <option value="price">Sort by price: low to high</option>
                                <option value="price-desc">Sort by price: high to low</option>
                            </select>
                        </div>
                    </form>
                </div>
                <div class="row mt-4">
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="item-card">
                            <div class="item-card-img">
                                <a href="{{url('item-detail')}}" class="d-block">
                                    <img src="{{ asset('site-assets/images/5.jpg') }}" class="img-fluid" alt="">
                                </a>
                            </div>
                            <div class="item-card-desc">
                                <a href="#">
                                    <h2 class="item-card-title" title="Food on Ways Restro">Food on Ways Restro</h2>
                                </a>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</p>
                                <span class="item-card-price">Rs. 1010</span>
                                <a href="javascript:void(0)" class="btn btn-wrap mt-3" onclick="openCartSidebar()">
                                    <span>add to cart</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="item-card">
                            <div class="item-card-img">
                                <a href="{{url('item-detail')}}" class="d-block">
                                    <img src="{{ asset('site-assets/images/2.jpg') }}" class="img-fluid" alt="">
                                </a>
                            </div>
                            <div class="item-card-desc">
                                <a href="#">
                                    <h2 class="item-card-title" title="Food on Ways Restro">Food on Ways Restro</h2>
                                </a>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</p>
                                <span class="item-card-price">Rs. 1010</span>
                                <a href="#" class="btn btn-wrap mt-3">
                                    <span>add to cart</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="item-card">
                            <div class="item-card-img">
                                <a href="{{url('item-detail')}}" class="d-block">
                                    <img src="{{ asset('site-assets/images/6.jpg') }}" class="img-fluid" alt="">
                                </a>
                            </div>
                            <div class="item-card-desc">
                                <a href="#">
                                    <h2 class="item-card-title" title="Food on Ways Restro">Food on Ways Restro</h2>
                                </a>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</p>
                                <span class="item-card-price">Rs. 1010</span>
                                <a href="#" class="btn btn-wrap mt-3">
                                    <span>add to cart</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="item-card">
                            <div class="item-card-img">
                                <a href="{{url('item-detail')}}" class="d-block">
                                    <img src="{{ asset('site-assets/images/7.jpg') }}" class="img-fluid" alt="">
                                </a>
                            </div>
                            <div class="item-card-desc">
                                <a href="#">
                                    <h2 class="item-card-title" title="Food on Ways Restro">Food on Ways Restro</h2>
                                </a>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</p>
                                <span class="item-card-price">Rs. 1010</span>
                                <a href="#" class="btn btn-wrap mt-3">
                                    <span>add to cart</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="item-card">
                            <div class="item-card-img">
                                <a href="{{url('item-detail')}}" class="d-block">
                                    <img src="{{ asset('site-assets/images/8.jpg') }}" class="img-fluid" alt="">
                                </a>
                            </div>
                            <div class="item-card-desc">
                                <a href="#">
                                    <h2 class="item-card-title" title="Food on Ways Restro">Food on Ways Restro</h2>
                                </a>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</p>
                                <span class="item-card-price">Rs. 1010</span>
                                <a href="#" class="btn btn-wrap mt-3">
                                    <span>add to cart</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="item-card">
                            <div class="item-card-img">
                                <a href="{{url('item-detail')}}" class="d-block">
                                    <img src="{{ asset('site-assets/images/9.jpg') }}" class="img-fluid" alt="">
                                </a>
                            </div>
                            <div class="item-card-desc">
                                <a href="#">
                                    <h2 class="item-card-title" title="Food on Ways Restro">Food on Ways Restro</h2>
                                </a>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</p>
                                <span class="item-card-price">Rs. 1010</span>
                                <a href="#" class="btn btn-wrap mt-3">
                                    <span>add to cart</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="item-card">
                            <div class="item-card-img">
                                <a href="{{url('item-detail')}}" class="d-block">
                                    <img src="{{ asset('site-assets/images/7.jpg') }}" class="img-fluid" alt="">
                                </a>
                            </div>
                            <div class="item-card-desc">
                                <a href="#">
                                    <h2 class="item-card-title" title="Food on Ways Restro">Food on Ways Restro</h2>
                                </a>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</p>
                                <span class="item-card-price">Rs. 1010</span>
                                <a href="#" class="btn btn-wrap mt-3">
                                    <span>add to cart</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="item-card">
                            <div class="item-card-img">
                                <a href="{{url('item-detail')}}" class="d-block">
                                    <img src="{{ asset('site-assets/images/8.jpg') }}" class="img-fluid" alt="">
                                </a>
                            </div>
                            <div class="item-card-desc">
                                <a href="#">
                                    <h2 class="item-card-title" title="Food on Ways Restro">Food on Ways Restro</h2>
                                </a>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</p>
                                <span class="item-card-price">Rs. 1010</span>
                                <a href="#" class="btn btn-wrap mt-3">
                                    <span>add to cart</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="item-card">
                            <div class="item-card-img">
                                <a href="{{url('item-detail')}}" class="d-block">
                                    <img src="{{ asset('site-assets/images/9.jpg') }}" class="img-fluid" alt="">
                                </a>
                            </div>
                            <div class="item-card-desc">
                                <a href="#">
                                    <h2 class="item-card-title" title="Food on Ways Restro">Food on Ways Restro</h2>
                                </a>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem</p>
                                <span class="item-card-price">Rs. 1010</span>
                                <a href="#" class="btn btn-wrap mt-3">
                                    <span>add to cart</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <nav class="product-list-pagination mb-5" aria-label="...">
                    <ul class="pagination pagination-sm justify-content-center">
                        <li class="page-item active" aria-current="page">
                            <span class="page-link">1</span>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</section>


<script>
function openCartSidebar() {
    document.getElementById("mb-view").style.width = "100%";
}

function openListSidebar() {
    document.getElementById("mb-view").style.width = "100%";
}

function closeFiler() {
    document.getElementById("mb-view").style.width = "0";
}

$(window).resize(function() {
    if ($(window).width() > 1024) {
        document.getElementById("mb-view").style.width = "100%";
    }
});
$(window).resize(function() {
    if ($(window).width() < 1023) {
        document.getElementById("mb-view").style.width = "0";
    }
});
</script>



<script>
// filter

//  
var lowerSlider = document.querySelector('#lower');
var upperSlider = document.querySelector('#upper');

document.querySelector('#two').value = upperSlider.value;
document.querySelector('#one').value = lowerSlider.value;

var lowerVal = parseInt(lowerSlider.value);
var upperVal = parseInt(upperSlider.value);

upperSlider.oninput = function() {
    lowerVal = parseInt(lowerSlider.value);
    upperVal = parseInt(upperSlider.value);

    if (upperVal < lowerVal + 4) {
        lowerSlider.value = upperVal - 4;
        if (lowerVal == lowerSlider.min) {
            upperSlider.value = 4;
        }
    }
    document.querySelector('#two').value = this.value
};

lowerSlider.oninput = function() {
    lowerVal = parseInt(lowerSlider.value);
    upperVal = parseInt(upperSlider.value);
    if (lowerVal > upperVal - 4) {
        upperSlider.value = lowerVal + 4;
        if (upperVal == upperSlider.max) {
            lowerSlider.value = parseInt(upperSlider.max) - 4;
        }
    }
    document.querySelector('#one').value = this.value
};
</script>

<script type="text/javascript">
function showRange(event) {
    console.log(event.target.value);
}
</script>

@endsection