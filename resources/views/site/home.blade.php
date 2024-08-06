@extends('site.header')

@push("css")
    <style>
        .home-banner-container {
            display: none;
        }
        .home-banner-active {
            display: block;
        }
    </style>
@endpush

@section('content')
    <div class="page-content bg-white">

        <!-- Banner Start -->
        <div class="banner-one">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-7">
                        <div class="banner-content">
                            <h5 class="sub-title text-primary">Joy Of Giving</h5>
                            <h1 class="title">
                                Let us together grow IIT Madras
                            </h1>
                            <p>
                                Prof Mahesh Panchagnula, Dean, Alumni and Corporate Relations, IIT Madras.
                            </p>
                            <a href="Akcel/AboutUs.html" class="btn btn-secondary btnhover2 m-r15">Learn More <i class="flaticon-right-arrows ms-3 scale1"></i></a>
                            <a href="javascript:void(0);" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#modalDonate">Donate</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-5">
                        <div class="banner-media">
                            <img src="{{ asset('assets/images/banner/banner_1.png') }}" class="main-img" alt="">
                        </div>
                    </div>
                </div>
                <div class="dz-shape">
                    <img src="assets/images/pattern/shape1.png" class="shape-1 move-2" alt="shape">
                    <img src="assets/images/pattern/shape2.png" class="shape-2 move-2" alt="shape">
                    <img src="assets/images/pattern/shape1.png" class="shape-3 move-2" alt="shape">
                    <img src="assets/images/pattern/shape2.png" class="shape-4 move-2" alt="shape">
                </div>
            </div>
        </div>
        <!-- Banner End -->

        <section class="content-inner-2 bg-light section-pattren1">
            <div class="container">
                <div class="row about-bx3 align-items-center">
                    <div class="col-lg-5">
                        <div class="dz-media">
                            <img src="{{ asset('assets/images/main-slider/slider2/pic1.png') }}" alt="image">
                        </div>
                    </div>
                    <div class="col-lg-7 m-b50">
                        <div class="section-head">
                            <h5 class="sub-title"></h5>
                            <h2>Welcome to Joy of Giving,
                                the fundraising platform of IIT Madras</h2>
                            <p class="m-t20" style="text-align: justify">
                                IIT Madras is on a journey towards global distinction in engineering and science. We aim
                                to place IITM among the 'Top 50' global education and research institutes. We are
                                committed to provide the best possible education and research opportunities for students
                                and to create technology-driven social impact.
                            </p>
                            <p class="m-t20" style="text-align: justify">
                                Everyone deserves access to quality education and research. Initiatives like
                                scholarships to deserving students and funding cutting-edge research in engineering and
                                science help enable an ‘IITM for All’. We also develop innovative technologies to solve
                                the world's most pressing problems.
                            </p>
                            <p class="m-t20" style="text-align: justify">
                                Your support can help us achieve our goals. There are many ways to support – including
                                making a gift in honor of a loved one. So do explore the site, visit ‘Alma matters’ and
                                share your own stories too! Please do write to us, we look forward to hearing from you!
                            </p>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-md-4 col-6 m-b30">
                                <h2><span class="counter">1300</span>+</h2>
                                <span class="counter-text">Projects</span>
                            </div>
                            <div class="col-lg-3 col-md-4 col-6 m-b30">
                                <h2><span class="counter">11000</span><small>+</small></h2>
                                <span class="counter-text">Donors</span>
                            </div>
                            <div class="col-lg-4 col-md-4 col-12 m-b30">
                                <h2>&#x20B9; <span class="counter">884</span><small>+Cr</small></h2>
                                <span class="counter-text">Received</span>
                            </div>
                        </div>
                        <a href="ProjectStory.html" class="m-r30 m-sm-r10 btn btn-secondary">See Projects <i
                                class="flaticon-right-arrows ps-3"></i></a>
                        <a href="HowItWorks.html" class="btn btn-outline-dark">How It Works</a>
                    </div>
                </div>
            </div>
            <img src="../assets/images/pattern/shape2.png" class="shape-6 move-2" alt="shape">
            <img src="../assets/images/pattern/shape3.png" class="shape-5 move-1" alt="shape">
            <img src="../assets/images/pattern/shape5.png" class="shape-1 rotating" alt="shape">
            <img src="../assets/images/pattern/shape1.png" class="shape-3 move-1" alt="shape">
            <img src="../assets/images/pattern/shape6.png" class="shape-4 rotating" alt="shape">
            <img src="../assets/images/pattern/shape6.png" class="shape-2 rotating" alt="shape">
        </section>


        <section class="content-inner-2 bg-light section-pattren1">
            <div class="container">
                <div class="row about-bx3 align-items-center">
                    <div class="col-lg-5">
                        <div class="dz-media">
                            <img src="{{ asset('assets/images/campus/dean.jpg') }}" alt="image">
                        </div>
                    </div>
                    <div class="col-lg-7 m-b50">
                        <div class="section-head">
                            <h2>
                                A Message
                                From The Dean
                            </h2>
                            <h5 class="sub-title">
                                Prof. Mahesh Panchagnula<br>
                            </h5>
                            <p style="font-size: 13px">
                                Department of Applied Mechanics,<br>
                                Dean, Alumni & Corporate Relations,<br>
                                IIT Madras.
                            </p>
                            <p class="m-t20">
                                As an institution, we have grown in the last 64 years, from being a fledgling, primarily
                                undergraduate teaching institution being nurtured by German faculty members, to today,
                                becoming India’s #1 ranked institution across various prestigious national rankings like
                                the NIRF and the AIIRA, housing 10,000+ students 600+ faculty, with active involvement
                                in world-class research.
                            </p>
                        </div>
                        <a href="ProjectStory.html" class="m-r30 m-sm-r10 btn btn-secondary">Read More <i
                                class="flaticon-right-arrows ps-3"></i></a>
                    </div>
                </div>
            </div>
            <img src="../assets/images/pattern/shape2.png" class="shape-6 move-2" alt="shape">
            <img src="../assets/images/pattern/shape3.png" class="shape-5 move-1" alt="shape">
            <img src="../assets/images/pattern/shape5.png" class="shape-1 rotating" alt="shape">
            <img src="../assets/images/pattern/shape1.png" class="shape-3 move-1" alt="shape">
            <img src="../assets/images/pattern/shape6.png" class="shape-4 rotating" alt="shape">
            <img src="../assets/images/pattern/shape6.png" class="shape-2 rotating" alt="shape">
        </section>


        <div class="content-inner-3 section-pattren1">
            <div class="container">
                <div class="section-head text-center wow fadeInUp" data-wow-delay="0.2s">
                    <h5 class="sub-title">Featured Opportunities</h5><br>

                </div>
                <div class="swiper categories-swiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="icon-bx-wraper text-center style-1 m-b30 wow fadeInUp" data-wow-delay="0.2s">
                                <div class="icon-lg m-sm-b20 m-b30">
                                    <a href="Akcel/ProjectCategories.html" class="icon-cell">
                                        <i class="flaticon-raw-food"></i>
                                    </a>
                                </div>
                                <div class="icon-content">
                                    <h6 class="dz-tilte m-b5 text-capitalize"><a href="Akcel/ProjectCategories.html">CFI
                                            Student Projects</a></h6>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="icon-bx-wraper text-center style-1 m-b30 wow fadeInUp" data-wow-delay="0.4s">
                                <div class="icon-lg m-sm-b20 m-b30">
                                    <a href="Akcel/ProjectCategories.html" class="icon-cell">
                                        <i class="flaticon-responsibility"></i>
                                    </a>
                                </div>
                                <div class="icon-content">
                                    <h6 class="dz-tilte m-b5 text-capitalize"><a
                                            href="Akcel/ProjectCategories.html"><br>Infrastructure</a></h6>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="icon-bx-wraper text-center style-1 m-b30 wow fadeInUp" data-wow-delay="0.6s">
                                <div class="icon-lg m-sm-b20 m-b30">
                                    <a href="Akcel/ProjectCategories.html" class="icon-cell">
                                        <i class="flaticon-vr-glasses"></i>
                                    </a>
                                </div>
                                <div class="icon-content">
                                    <h6 class="dz-tilte text-capitalize"><a href="Akcel/ProjectCategories.html"><Br>Events</a>
                                    </h6>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="icon-bx-wraper text-center style-1 m-b30 wow fadeInUp" data-wow-delay="0.8s">
                                <div class="icon-lg m-sm-b20 m-b30">
                                    <a href="Akcel/ProjectCategories.html" class="icon-cell">
                                        <i class="flaticon-open-book"></i>
                                    </a>
                                </div>
                                <div class="icon-content">
                                    <h6 class="dz-tilte m-b5 text-capitalize"><a href="Akcel/ProjectCategories.html">Research
                                            & Development</a></h6>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="icon-bx-wraper text-center style-1 m-b30 wow fadeInUp" data-wow-delay="1.0s">
                                <div class="icon-lg m-sm-b20 m-b30">
                                    <a href="Akcel/ProjectCategories.html" class="icon-cell">
                                        <i class="flaticon-video"></i>
                                    </a>
                                </div>
                                <div class="icon-content">
                                    <h6 class="dz-tilte m-b5 text-capitalize"><a href="Akcel/ProjectCategories.html">General
                                            Funds</a></h6>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="icon-bx-wraper text-center style-1 m-b30 wow fadeInUp" data-wow-delay="1.2s">
                                <div class="icon-lg m-sm-b20 m-b30">
                                    <a href="Akcel/ProjectCategories.html" class="icon-cell">
                                        <i class="flaticon-like-1"></i>
                                    </a>
                                </div>
                                <div class="icon-content">
                                    <h6 class="dz-tilte m-b5 text-capitalize"><a href="Akcel/ProjectCategories.html">Students
                                            Project</a></h6>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="icon-bx-wraper text-center style-1 m-b30 wow fadeInUp" data-wow-delay="1.4s">
                                <div class="icon-lg m-sm-b20 m-b30">
                                    <a href="Akcel/ProjectCategories.html" class="icon-cell">
                                        <i class="flaticon-transformation"></i>
                                    </a>
                                </div>
                                <div class="icon-content">
                                    <h6 class="dz-tilte m-b5 text-capitalize"><a href="Akcel/ProjectCategories.html">Batch
                                            ReUnion Project</a></h6>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="icon-bx-wraper text-center style-1 m-b30 wow fadeInUp" data-wow-delay="1.6s">
                                <div class="icon-lg m-sm-b20 m-b30">
                                    <a href="Akcel/ProjectCategories.html" class="icon-cell">
                                        <i class="flaticon-doctor-bag"></i>
                                    </a>
                                </div>
                                <div class="icon-content">
                                    <h6 class="dz-tilte m-b5 text-capitalize"><a href="Akcel/ProjectCategories.html">Others</a>
                                    </h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center" >
                        <a href="javascript:void(0);" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#modalDonate">View All Projects</a>
                    </div>
                    <div class="swiper-pagination style-1 text-center"></div>
                </div>
            </div>
            <img src="assets/images/pattern/shape1.png" class="shape-1" alt="shape">
            <img src="assets/images/pattern/shape2.png" class="shape-2" alt="shape">
            <img src="assets/images/pattern/shape3.png" class="shape-3" alt="shape">
            <img src="assets/images/pattern/shape5.png" class="shape-4" alt="shape">
            <img src="assets/images/pattern/shape6.png" class="shape-5" alt="shape">
        </div>

        <section class="content-inner-2 section-pattren1">
            <div class="container">
                <div class="section-head text-center wow fadeInUp" data-wow-delay="0.2s">
                    <h2 class="title">IITM Alums Upgrade The Campus</h2>
                </div>
                <div class="swiper blog-slider-full">
                    <div class="swiper-wrapper m-b5">
                        <div class="swiper-slide">
                            <div class="dz-card style-1 wow fadeInUp" data-wow-delay="0.2s">
                                <div class="dz-media">
                                    <a href="Akcel/BlogDetails.html"><img src="assets/images/campus/campus_1.jpg"
                                                                          alt=""></a>
                                    <ul class="dz-badge-list">
                                        <li><a href="javascript:void(0);" class="dz-badge">HEALTH</a></li>
                                    </ul>
                                    <a href="Akcel/BlogDetails.html" class="btn btn-secondary">Read More</a>
                                </div>
                                <div class="dz-info">
                                    <h5 class="dz-title"><a href="Akcel/BlogDetails.html">New vaccine for cattle calf
                                            loss learned </a></h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et aliqua.</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="dz-card style-1 wow fadeInUp" data-wow-delay="0.4s">
                                <div class="dz-media">
                                    <a href="Akcel/BlogDetails.html"><img src="assets/images/campus/campus_2.jpg"
                                                                          alt=""></a>
                                    <ul class="dz-badge-list">
                                        <li><a href="javascript:void(0);" class="dz-badge">TECHNOLOGY</a></li>
                                    </ul>
                                    <a href="Akcel/BlogDetails.html" class="btn btn-secondary">Read More</a>
                                </div>
                                <div class="dz-info">
                                    <h5 class="dz-title"><a href="Akcel/BlogDetails.html">4 Things parents learned for
                                            they jids in 2020 </a></h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et aliqua.</p>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="dz-card style-1 wow fadeInUp" data-wow-delay="0.6s">
                                <div class="dz-media">
                                    <a href="Akcel/BlogDetails.html"><img src="assets/images/campus/campus_3.jpg"
                                                                          alt=""></a>
                                    <ul class="dz-badge-list">
                                        <li><a href="javascript:void(0);" class="dz-badge">EDUCATION</a></li>
                                    </ul>
                                    <a href="Akcel/BlogDetails.html" class="btn btn-secondary">Read More</a>
                                </div>
                                <div class="dz-info">
                                    <h5 class="dz-title"><a href="Akcel/BlogDetails.html">He Created the Web. Now He’s
                                            Out to Remake </a></h5>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et aliqua.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <img src="assets/images/pattern/shape2.png" class="shape-6 move-2" alt="shape">
            <img src="assets/images/pattern/shape3.png" class="shape-5 move-1" alt="shape">
            <img src="assets/images/pattern/shape5.png" class="shape-1 rotating" alt="shape">
            <img src="assets/images/pattern/shape1.png" class="shape-3 move-1" alt="shape">
            <img src="assets/images/pattern/shape6.png" class="shape-4 rotating" alt="shape">
            <img src="assets/images/pattern/shape6.png" class="shape-2 rotating" alt="shape">
        </section>


        <!-- Our Blog  -->
        <section class="content-inner-2 section-pattren1 m-b10">
            <div class="container">
                <div class="section-head text-center wow fadeInUp" data-wow-delay="0.2s">
                    <h2 class="title">What News</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                </div>
                <div class="swiper blog-slider-full">
                    <div class="swiper-wrapper m-b5">
                        <div class="swiper-slide1">
                            <div class="dz-card style-1 wow fadeInUp" data-wow-delay="0.2s">
                                <div class="dz-media">
                                    <a href="FundraiserDetail.html">
                                        <img src="{{ asset('assets/images/news/news_1.png') }}" style="width:350px;"
                                             alt="">
                                    </a>
                                    <a href="Akcel/BlogDetails.html" class="btn btn-secondary">Read More</a>
                                </div>
                                <div class="dz-info">
                                    <h5 class="dz-title"><a href="Akcel/BlogDetails.html">New vaccine for cattle calf
                                            loss learned </a></h5>
                                    <p>
                                        Have you checked out the latest edition of our monthly exclusive alumni
                                        newsletter, 'Alma matters' ?
                                        Here is a sneak peek of a few of the June edition articles!
                                    </p>

                                    <div class="author-wrappper">
                                        <div class="author-content">
                                            <div class="author-head">
                                                <h6 class="author-name">Checkout In LinkedIn</h6>
                                            </div>
                                            <ul class="author-meta">
                                                <li class="date">November 21th, 2022</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide1">
                            <div class="dz-card style-1 wow fadeInUp" data-wow-delay="0.2s">
                                <div class="dz-media">
                                    <a href="FundraiserDetail.html">
                                        <img src="{{ asset('assets/images/news/news_2.jpg') }}" style="width:350px;"
                                             alt="">
                                    </a>
                                    <a href="Akcel/BlogDetails.html" class="btn btn-secondary">Read More</a>
                                </div>
                                <div class="dz-info">
                                    <h5 class="dz-title"><a href="Akcel/BlogDetails.html">New vaccine for cattle calf
                                            loss learned </a></h5>
                                    <p>
                                        Have you checked out the latest edition of our monthly exclusive alumni
                                        newsletter, 'Alma matters' ?
                                        Here is a sneak peek of a few of the June edition articles!
                                    </p>

                                    <div class="author-wrappper">
                                        <div class="author-content">
                                            <div class="author-head">
                                                <h6 class="author-name">Checkout In LinkedIn</h6>
                                            </div>
                                            <ul class="author-meta">
                                                <li class="date">November 21th, 2022</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide1">
                            <div class="dz-card style-1 wow fadeInUp" data-wow-delay="0.2s">
                                <div class="dz-media">
                                    <a href="FundraiserDetail.html">
                                        <img src="{{ asset('assets/images/news/news_3.jpg') }}" style="width:350px;"
                                             alt="">
                                    </a>
                                    <a href="Akcel/BlogDetails.html" class="btn btn-secondary">Read More</a>
                                </div>
                                <div class="dz-info">
                                    <h5 class="dz-title"><a href="Akcel/BlogDetails.html">New vaccine for cattle calf
                                            loss learned </a></h5>
                                    <p>
                                        Have you checked out the latest edition of our monthly exclusive alumni
                                        newsletter, 'Alma matters' ?
                                        Here is a sneak peek of a few of the June edition articles!
                                    </p>

                                    <div class="author-wrappper">
                                        <div class="author-content">
                                            <div class="author-head">
                                                <h6 class="author-name">Checkout In LinkedIn</h6>
                                            </div>
                                            <ul class="author-meta">
                                                <li class="date">November 21th, 2022</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
            <img src="assets/images/pattern/shape2.png" class="shape-6 move-2" alt="shape">
            <img src="assets/images/pattern/shape3.png" class="shape-5 move-1" alt="shape">
            <img src="assets/images/pattern/shape5.png" class="shape-1 rotating" alt="shape">
            <img src="assets/images/pattern/shape1.png" class="shape-3 move-1" alt="shape">
            <img src="assets/images/pattern/shape6.png" class="shape-4 rotating" alt="shape">
            <img src="assets/images/pattern/shape6.png" class="shape-2 rotating" alt="shape">
        </section>
        <!-- Our Blog End  -->

        <section class="content-inner-2 overlay-primary-dark about-wrapper2 bg-img-fix"
                 style="background-image:url('../assets/images/background/bg4.jpg');  background-size: cover; background-repeat: no-repeat;">
            <div class="container">
                <div class="about-bx2">
                    <div class="row g-0">
                        <div class="col-lg-4">
                            <div class="dz-media">
                                <img src="{{ asset('assets/images/campus/ceo_1.png') }}" alt="image">
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="dz-info">
                                <h2 class="title m-b30 m-md-b20">A Message From CEO</h2>
                                <h5>
                                    Mr. Kaviraj Nair
                                </h5>
                                <p style="font-size: 13px">
                                    CEO, Office of Institutional Advancement,
                                    IIT Madras.
                                </p>
                                <p class="text">
                                    The institute has been able to establish itself as India’s continuing leader in
                                    academic excellence, innovation and technological expertise, thanks to the growing
                                    support of our committed alumni and generous patrons, year after year. We are very
                                    proud of our large and vibrant alumni community, the extended family of IIT Madras.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="content-inner-2 bg-light section-pattren1">
            <div class="container">
                <div class="row about-bx3 align-items-center">
                    <div class="col-lg-7 m-b50">
                        <div class="section-head">
                            <h2>
                                Donor Spotlight
                            </h2>
                            <h5 class="sub-title">
                                Shri S. Gopalakrishnan<br>
                            </h5>
                            <p style="font-size: 13px">
                                Chairman Axilor Ventures<br>
                                Co-founder Infosys
                            </p>
                            <p style="color: #8ac67c">
                                1977/M.Sc/PHY & 1979/MT/CS
                            </p>
                            <p class="m-t20">
                                Shri S Gopalakrishnan represents a generation of engineer-scientists who have made India
                                a global player in software industry. After this formative experience, Shri
                                Gopalakrishnan had a fair idea of the shape of things to come
                            </p>
                        </div>
                        <a href="ProjectStory.html" class="m-r30 m-sm-r10 btn btn-secondary">Read More <i
                                class="flaticon-right-arrows ps-3"></i></a>
                        <a href="javascript:void(0);" class="btn btn-light" data-bs-toggle="modal"
                           data-bs-target="#modalDonate">View Featured Donors</a>
                    </div>
                    <div class="col-lg-5">
                        <div class="dz-media">
                            <img src="{{ asset('assets/images/donors/donor_1.jpg') }}" style="width:250px" alt="image">
                        </div>
                    </div>
                </div>
            </div>
            <img src="../assets/images/pattern/shape2.png" class="shape-6 move-2" alt="shape">
            <img src="../assets/images/pattern/shape3.png" class="shape-5 move-1" alt="shape">
            <img src="../assets/images/pattern/shape5.png" class="shape-1 rotating" alt="shape">
            <img src="../assets/images/pattern/shape1.png" class="shape-3 move-1" alt="shape">
            <img src="../assets/images/pattern/shape6.png" class="shape-4 rotating" alt="shape">
            <img src="../assets/images/pattern/shape6.png" class="shape-2 rotating" alt="shape">
        </section>

        <section class="content-inner bg-light section-pattren1">
            <div class="container">
                <div class="row align-items-center project-bx right">
                    <div class="col-lg-6 col-md-12 m-b30">
                        <div class="dz-content">
                            <h2 class="title m-b15 text-secondary">Alma Matters</h2>
                            <p>
                                <b class="text-primary">19 July 2024</b>
                            </p>
                            <h5>
                                IIT Madras Alumni Revisit Their Roots and Celebrate New Beginnings
                            </h5>
                            <p class="m-b0">
                                It was a day filled with nostalgic reflections. It shared triumphs as esteemed alumni of IIT Madras, Dr. Shivashankar T.S., VP of Operations at INDO MIM Pvt Ltd, and Mr. Sridhara Ramachandran, VP of Aerospace Solutions Group at INDO MIM Pvt Ltd, returned to their alma mater.
                            </p>
                            <a href="ProjectStory.html" class="btn btn-primary m-t30">Continue Reading <i class="fa-solid fa-angle-right ms-2"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 m-b30">
                        <div class="dz-media split-box">
                            <div>
                                <img src="{{ asset('assets/images/alma_matter_1.png') }}" alt="" class="app-1">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <img src="../assets/images/pattern/shape1.png" class="shape-1 move-1" alt="shape">
            <img src="../assets/images/pattern/shape2.png" class="shape-2 move-2" alt="shape">
            <img src="../assets/images/pattern/shape3.png" class="shape-3 move-1" alt="shape">
            <img src="../assets/images/pattern/shape5.png" class="shape-4 rotating" alt="shape">
            <img src="../assets/images/pattern/shape6.png" class="shape-5 rotating" alt="shape">
            <img src="../assets/images/pattern/shape6.png" class="shape-6 rotating" alt="shape">
        </section>


        <!-- Online Courses -->
        <section class="content-inner-3 overflow-hidden section-pattren1">
            <div class="container">
                <div class="section-head text-center wow fadeInUp" data-wow-delay="0.2s">
                    <h2>Recent Projects</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
                </div>
                <div class="swiper recent-blog p-b5">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="dz-card style-2 overlay-skew wow fadeInUp" data-wow-delay="0.2s">
                                <div class="dz-media">
                                    <a href="Akcel/FundraiserDetail.html"><img src="assets/images/project/pic1.jpg"
                                                                               alt=""></a>
                                </div>
                                <div class="dz-info">
                                    <ul class="dz-category">
                                        <li><a href="javascript:void(0);">EDUCATION</a></li>
                                    </ul>
                                    <h5 class="dz-title"><a href="Akcel/FundraiserDetail.html">New vaccine for cattle
                                            calf loss learned</a></h5>
                                    <div class="progress-bx style-1">
                                        <div class="progress">
                                            <div
                                                class="progress-bar progress-bar-secondary progress-bar-striped progress-bar-animated"
                                                role="progressbar" aria-valuenow="75" aria-valuemin="0"
                                                aria-valuemax="100" style="width:75%"></div>
                                        </div>
                                        <ul class="progress-tag">
                                            <li class="raised">
                                                <i class="las la-coins"></i> <span>Total Raised $ 3,542</span>
                                            </li>
                                            <li class="goal">
                                                <i class="lar la-calendar"></i> <span>43 Days left</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="author-wrappper">
                                        <div class="author-media">
                                            <img src="assets/images/avatar/avatar1.jpg" alt="">
                                        </div>
                                        <div class="author-content">
                                            <div class="author-head">
                                                <h6 class="author-name">Cheyenne Curtis</h6>
                                                <ul class="rating-list">
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star gray-light"></i></li>
                                                    <li><i class="fa fa-star gray-light"></i></li>
                                                </ul>
                                            </div>
                                            <ul class="author-meta">
                                                <li class="campaign">12 Campaign</li>
                                                <li class="location">New York, London</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="dz-card style-2 overlay-skew wow fadeInUp" data-wow-delay="0.4s">
                                <div class="dz-media">
                                    <a href="Akcel/FundraiserDetail.html"><img src="assets/images/project/pic2.jpg"
                                                                               alt=""></a>
                                </div>
                                <div class="dz-info">
                                    <ul class="dz-category">
                                        <li><a href="javascript:void(0);">TECHNOLOGY</a></li>
                                    </ul>
                                    <h5 class="dz-title"><a href="Akcel/FundraiserDetail.html">He Created the Web. Now
                                            He’s Out to Remake </a></h5>
                                    <div class="progress-bx style-1">
                                        <div class="progress">
                                            <div
                                                class="progress-bar progress-bar-secondary progress-bar-striped progress-bar-animated"
                                                role="progressbar" aria-valuenow="65" aria-valuemin="0"
                                                aria-valuemax="100" style="width:65%"></div>
                                        </div>
                                        <ul class="progress-tag">
                                            <li class="raised">
                                                <i class="las la-coins"></i> <span>Total Raised $ 5,789</span>
                                            </li>
                                            <li class="goal">
                                                <i class="lar la-calendar"></i> <span>42 Days left</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="author-wrappper">
                                        <div class="author-media">
                                            <img src="assets/images/avatar/avatar2.jpg" alt="">
                                        </div>
                                        <div class="author-content">
                                            <div class="author-head">
                                                <h6 class="author-name">Kaylynn Donin</h6>
                                                <ul class="rating-list">
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star gray-light"></i></li>
                                                    <li><i class="fa fa-star gray-light"></i></li>
                                                </ul>
                                            </div>
                                            <ul class="author-meta">
                                                <li class="campaign">12 Campaign</li>
                                                <li class="location">New York, London</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="dz-card style-2 overlay-skew wow fadeInUp" data-wow-delay="0.6s">
                                <div class="dz-media">
                                    <a href="Akcel/FundraiserDetail.html"><img src="assets/images/project/pic3.jpg"
                                                                               alt=""></a>
                                </div>
                                <div class="dz-info">
                                    <ul class="dz-category">
                                        <li><a href="javascript:void(0);">HEALTH</a></li>
                                    </ul>
                                    <h5 class="dz-title"><a href="Akcel/FundraiserDetail.html">4 Things parents learned
                                            for they jids in 2020 </a></h5>
                                    <div class="progress-bx style-1">
                                        <div class="progress">
                                            <div
                                                class="progress-bar progress-bar-secondary progress-bar-striped progress-bar-animated"
                                                role="progressbar" aria-valuenow="32" aria-valuemin="0"
                                                aria-valuemax="100" style="width:32%"></div>
                                        </div>
                                        <ul class="progress-tag">
                                            <li class="raised">
                                                <i class="las la-coins"></i> <span>Total Raised $ 3,542</span>
                                            </li>
                                            <li class="goal">
                                                <i class="lar la-calendar"></i> <span>32 Days left</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="author-wrappper">
                                        <div class="author-media">
                                            <img src="assets/images/avatar/avatar3.jpg" alt="">
                                        </div>
                                        <div class="author-content">
                                            <div class="author-head">
                                                <h6 class="author-name">Adam Jordon</h6>
                                                <ul class="rating-list">
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star gray-light"></i></li>
                                                    <li><i class="fa fa-star gray-light"></i></li>
                                                </ul>
                                            </div>
                                            <ul class="author-meta">
                                                <li class="campaign">12 Campaign</li>
                                                <li class="location">New York, London</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <img src="assets/images/pattern/shape1.png" class="shape-1 move-1" alt="shape">
            <img src="assets/images/pattern/shape2.png" class="shape-2 move-2" alt="shape">
            <img src="assets/images/pattern/shape3.png" class="shape-3 move-1" alt="shape">
            <img src="assets/images/pattern/shape5.png" class="shape-4 rotating" alt="shape">
            <img src="assets/images/pattern/shape6.png" class="shape-5 rotating" alt="shape">
            <img src="assets/images/pattern/shape6.png" class="shape-6 rotating" alt="shape">
        </section>
        <!-- Online Courses End -->
        <!-- Testimonials -->
        <section class="content-inner bg-light section-pattren1">
            <div class="section-head text-center wow fadeInUp" data-wow-delay="0.2s">
                <h2 class="title">Testimonials From Our Donors
                </h2>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 m-b50">
                        <div class="testimonial-3">
                            <div class="testimonial-media">
                                <img src="{{ asset('assets/images/testimonials/testimonial.png') }}" alt="">
                            </div>
                            <div class="testimonial-content">
                                <h5 class="testimonial-title">Heroes like you helped my son<br> win his battle.</h5>
                                <p class="testimonial-text">
                                    The only hope for eliminating poverty in India is through technology. It has to be
                                    that kind of technology that benefits the people on the ground. I am happy to say
                                    that the research already funded by us through R2D2 is bringing real benefits to
                                    people with disabilities I wish to congratulate IITM for this initiative.
                                </p>
                                <div class="testimonial-info">
                                    <div class="quotes">
                                        <i class="fa-solid fa-quote-left"></i>
                                    </div>
                                    <div class="clearfix">
                                        <h5 class="testimonial-name">Shri T. T. Jagannathan</h5>
                                        <span class="testimonial-position">Managing Director, TTK Group of Companies | Alumnus of IIT Madras
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <img src="../assets/images/pattern/shape1.png" class="shape-1 move-1" alt="shape">
            <img src="../assets/images/pattern/shape2.png" class="shape-2 move-2" alt="shape">
            <img src="../assets/images/pattern/shape3.png" class="shape-3 move-1" alt="shape">
            <img src="../assets/images/pattern/shape5.png" class="shape-4 rotating" alt="shape">
            <img src="../assets/images/pattern/shape6.png" class="shape-5 rotating" alt="shape">
            <img src="../assets/images/pattern/shape6.png" class="shape-6 rotating" alt="shape">
        </section>
        <!-- Testimonials End -->
        <!-- Call Action -->
        <div class="call-action style-1 content-inner-1">
            <div class="container">
                <div class="inner-action overlay-primary-dark"
                     style="background-image:url('assets/images/background/bg1.jpg'); background-size: cover; background-repeat: no-repeat;">
                    <div class="row inner-content justify-content-center">
                        <div class="col-xl-6 col-lg-9 wow fadeInUp" data-wow-delay="0.2s">
                            <div class="section-head text-center">
                                <h2 class="title text-white">Sign up for Newsletter</h2>
                            </div>
                            <form class="dzSubscribe">
                                <div class="dzSubscribeMsg text-white"></div>
                                <div class="input-group">
                                    <input name="dzEmail" required="required" type="email" class="form-control"
                                           placeholder="Enter your email address...">
                                    <div class="input-group-addon">
                                        <button name="submit" value="Submit" type="submit"
                                                class="btn btn-secondary btn-rounded-lg">
                                            <span>SUBSCRIBE</span>
                                            <i class="fa-solid fa-paper-plane"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Call Action End -->

    </div>
@endsection

@push("js")
    <script>
        var images = $('.home-banner-container');
        var currentIndex = 0;
        var totalImages = images.length;
        $(document).ready(function() {
            // Set an interval to change images every 3 seconds (3000 milliseconds)
            setInterval(showNextImage, 3000);
        });

        function showNextImage() {
            images.eq(currentIndex).removeClass('home-banner-active').hide();
            currentIndex = (currentIndex + 1) % totalImages;

            images.eq(currentIndex).addClass('home-banner-active').show();
        }
    </script>

    @endpush


