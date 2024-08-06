<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="">
    <meta name="author" content="DexignZone">
    <meta name="robots" content="">
    <meta name="description" content="Endowment Fund Raising | Joy of Giving | Fund on Research Projects">
    <meta property="og:title" content="Endowment Fund Raising | Joy of Giving | Fund on Research Projects">
    <meta property="og:description" content="Joy of Giving works towards raising endowment funds for the institute through alumni and corporations. It aims to place IITM among the ‘Top 50’ education and research institutes">
    <meta property="og:image" content="../products.w3itexpert.com/images/akcel_ogimage.png">
    <meta name="format-detection" content="telephone=no">

    <!-- Mobile Specific -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home - Joy of Giving</title>

    <!-- Favicon icon -->
    <link rel="icon" type="image/png" href="{{ asset('assets/images/favicon.png') }}">

    <!-- Stylesheet -->
    <link href="assets/vendor/animate/animate.css" rel="stylesheet">
    <link href="assets/vendor/magnific-popup/magnific-popup.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-select/css/bootstrap-select.min.css" rel="stylesheet">

    <!-- Custom Stylesheet -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" class="skin" href="assets/css/skin/skin-1.css">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">

    <!-- PAGE CSS -->
    @stack('css')
</head>
<body id="bg">
<div id="loading-area" class="loading-page-1">
    <div class="loading-inner">
        <div class="item-wrapper">
            <img class="item1" src="assets/images/hand1.png" alt="">
            <img class="item2" src="assets/images/hand2.png" alt="">
            <img class="item3" src="assets/images/heart.png" alt="">
        </div>
        <div class="load-text">
            <span data-text="J" class="text-load">J</span>
            <span data-text="O" class="text-load">O</span>
            <span data-text="Y" class="text-load">Y</span>
            <span data-text="O" class="text-load">O</span>
            <span data-text="F" class="text-load">F</span>
            <span data-text="G" class="text-load">G</span>
            <span data-text="I" class="text-load">I</span>
            <span data-text="V" class="text-load">V</span>
            <span data-text="I" class="text-load">I</span>
            <span data-text="N" class="text-load">N</span>
            <span data-text="G" class="text-load">G</span>
        </div>
    </div>
</div>

<div class="page-wraper">
    <!-- Header -->
    <header class="site-header mo-left header style-1">
        <!-- Top Header -->
        <div class="top-bar">
            <div class="container">
                <div class="dz-topbar-inner d-flex justify-content-between align-items-center">
                    <div class="dz-topbar-left">
                        <ul>
                            <li>Welcome to Joy of Giving,
                                the fundraising platform of IIT Madras</li>
                            <li>
                                <a href="javascript:void(0);" class="badge badge-outline-primary btn-login" data-bs-toggle="modal" data-bs-target="#modalLogin">
                                    <i class="flaticon-logout me-2"></i>Login / Sign Up
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="badge badge-primary btn-login" data-bs-toggle="modal" data-bs-target="#modalLogin">
                                    <i class="flaticon-logout me-2"></i>Give Every Month
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Header -->
        <div class="sticky-header main-bar-wraper navbar-expand-lg">
            <div class="main-bar clearfix ">
                <div class="container clearfix">
                    <!-- Website Logo -->
                    <div class="logo-header mostion logo-dark">
                        <a href="{{ route('home') }}"><img src="{{ asset('assets/images/iitm.svg') }}" alt=""></a>
                    </div>

                    <!-- Nav Toggle Button -->
                    <button class="navbar-toggler collapsed navicon justify-content-end" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>

                    <!-- Extra Nav -->
                    <!-- Header Nav -->
                    <div class="header-nav navbar-collapse collapse justify-content-end" id="navbarNavDropdown">
                        <div class="logo-header logo-dark">
                            <a href="{{ route('home') }}"><img src="{{ asset('assets/images/iitm.svg') }}" alt=""></a>
                        </div>
                        <ul class="nav navbar-nav navbar navbar-left">
                            <li class="sub-menu-down">
                                <a href="javascript:void(0);" >Giving Opportunities</a>
                                <ul class="sub-menu">
                                    <li><a href="{{ route('projects') }}">Projects</a></li>
                                </ul>
                            </li>
                            <li><a href="{{ route('home') }}" >Why Give</a></li>
                            <li><a href="{{ route('home') }}" >Ways to Give</a></li>
                            <li><a href="{{ route('home') }}" >Impact</a></li>
                            <li><a href="{{ route('home') }}" >Donor Wall</a></li>
                            <li><a href="{{ route('home') }}" >The Team</a></li>
                            <li><a href="{{ route('home') }}" >Alma Matters</a></li>
                        </ul>
                        <div class="header-bottom">
                            <a href="javascript:void(0);" class="btn btn-light btn-login btn-sm" data-bs-toggle="modal" data-bs-target="#modalLogin">
                                <i class="flaticon-logout me-3"></i>Login / Sign Up
                            </a>
                            <a href="javascript:void(0);" class="btn btn-light btn-sm" data-bs-toggle="modal" data-bs-target="#modalLogin">
                                <i class="flaticon-logout me-3"></i>Give Every Month
                            </a>
                            <div class="dz-social-icon">
                                <ul>
                                    <li><a class="fab fa-facebook-f" href="https://www.facebook.com/"></a></li>
                                    <li><a class="fab fa-twitter" href="https://twitter.com/"></a></li>
                                    <li><a class="fab fa-linkedin-in" href="https://www.linkedin.com/"></a></li>
                                    <li><a class="fab fa-instagram" href="https://www.instagram.com/"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Header End -->
    </header>


@yield('content')

    @include('site.footer')
