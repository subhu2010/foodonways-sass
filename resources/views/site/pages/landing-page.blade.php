@extends("site.layouts.layout")

@section("page_title", "Food On Ways")

@section("content")

<!-- home main content -->
<div id="main-home-content">
    <div class="home-banner">
        <div id="homeBanner" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#homeBanner" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#homeBanner" data-bs-slide-to="1" aria-label="Slide 2"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item home-banner-img active">
                    <img src="{{ asset('site-assets/images/1.jpg') }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>welcome to foodonways</h3>
                        <h4 class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</h4>
                    </div>
                </div>
                <div class="carousel-item home-banner-img">
                    <img src="{{ asset('site-assets/images/2.jpg') }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h3>welcome to foodonways</h3>
                        <h4 class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




@endsection


