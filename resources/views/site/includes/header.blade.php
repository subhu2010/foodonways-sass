<!doctype html>
<html lang="en">

<head>
    <!-- Page Title -->
    <title>@yield("page_title")</title>

    <!-- FavIcon Link -->
    <link rel="icon" type="image/ico" href="favicon.ico">

    <!-- Meta Tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!-- Bootstrap CSS -->
    <link href="{{ asset('site-assets/css/bootstrap.min.css') }}" rel="stylesheet" crossorigin="anonymous">
    <script src="{{ asset('site-assets/js/bootstrap.bundle.min.js') }}" crossorigin="anonymous"></script>

    <!-- fontawesome css -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css"
        integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

    <!-- line awesome -->
    <link rel="stylesheet"
        href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">

    <!-- owl carousel -->
    <link rel="stylesheet" type="text/css" href="{{ asset('site-assets/owl/owl.carousel.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('site-assets/owl/owl.theme.default.min.css') }}">
    
    
    <!-- Global CSS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('site-assets/css/app.css') }}">
    <!-- <link rel="stylesheet" type="text/css" href="{{ asset('site-assets/css/pricerange.css') }}"> -->
    
    
    
    <!-- xzoom -->
    <script src="{{asset('site-assets/xzoom/jquery.js')}}"></script>
    <script type="text/javascript" src="{{asset('site-assets/xzoom/xzoom.min.js')}}"></script>
    <link rel="stylesheet" type="text/css" href="{{asset('site-assets/xzoom/xzoom.css')}}" media="all" />
<!-- 
    <script src="{{ asset('site-assets/xzoom/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('site-assets/xzoom/xzoom.min.js') }}"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('site-assets/xzoom/xzoom.css') }}" />
    <script type="text/javascript" src="{{ asset('site-assets/xzoom/jquery.hammer.min.js') }}"></script> -->

    <!-- cookiealert styles -->


</head>

<body>

    <div id="header" class="main-header-top">
        <div id="header-top">
            <div class="container">
                <div class="header-top clearfix">
                    <div class="top-left-menu d-none d-md-block">
                        <ul class="top-menu">
                            <!-- <li>
                                <a href="{{url('/')}}">home</a>
                            </li> -->
                            <li>
                                <a href="{{url('item-list')}}">foods</a>
                            </li>
                            <li>
                                <a href="{{url('item-list')}}">beverages</a>
                            </li>
                        </ul>
                    </div>
                    <div id="logo">
                        <a href="{{url('/')}}">
                            <img src="{{ asset('site-assets/images/logo.png') }}" class="img-fluid"></img>
                        </a>
                    </div>
                    <div class="top-right-menu  d-none d-md-block">
                        <ul class="top-menu">
                            <li>
                                <a href="{{url('item-list')}}">cakes</a>
                            </li>
                            <li>
                                <a href="{{url('item-list')}}">health diets</a>
                            </li>
                            <!-- <li>
                                <a href="#">Contact</a>
                            </li> -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="header-middle clearfix">
                <div class="header-middle-message">
                    <small class="d-block">Order Online or Call Now:</small>
                    <span class="d-block">
                        <i class="las la-phone"></i>
                        +977 9864235178
                    </span>
                    <a href="tel:+977 9864235178" class="d-md-none"><i class="las la-phone"></i></a>
                </div>
                @include('site.includes.mb-nav')

                @include('site.includes.header-middle')

            </div>
        </div>
        @include('site.includes.bottom-menu')
    </div>

    <!-- <div class="sticky-icon">
    <ul class="sticky-social-icon">
        <li>
            <a href='#' class='facebook' target='_blank'>
                <i class="lab la-facebook-f"></i>
                <p>Facebook</p>
            </a>
        </li>
        <li>
            <a href='#' class='twitter' target='_blank'>
                <i class="lab la-twitter"></i>
                <p>Twitter</p>
            </a>
        </li>

        <li>
            <a href='#' class='instagram' target='_blank'>
                <i class="lab la-instagram"></i>
                <p>Instagram</p>
            </a>
        </li>
        <li>
            <a href='#' class='youtube' target='_blank'>
                <i class="lab la-youtube"></i>
                <p>Youtube</p>
            </a>
        </li>
    </ul>
</div> -->


    <script>
    $("#header #loginBtn > a").on('click', function(event) {
        event.preventDefault();
        event.stopPropagation();
        $("#loginBtn, .login-section").toggleClass("active");
    });
    </script>

    <script>
    document.addEventListener("DOMContentLoaded", function() {
        document.querySelectorAll('.sidebar .nav-link').forEach(function(element) {

            element.addEventListener('click', function(e) {

                let nextEl = element.nextElementSibling;
                let parentEl = element.parentElement;

                if (nextEl) {
                    e.preventDefault();
                    let mycollapse = new bootstrap.Collapse(nextEl);

                    if (nextEl.classList.contains('show')) {
                        mycollapse.hide();
                    } else {
                        mycollapse.show();
                        // find other submenus with class=show
                        var opened_submenu = parentEl.parentElement.querySelector(
                            '.submenu.show');
                        // if it exists, then close all of them
                        if (opened_submenu) {
                            new bootstrap.Collapse(opened_submenu);
                        }
                    }
                }
            }); // addEventListener
        }) // forEach
    });
    // DOMContentLoaded  end
    </script>