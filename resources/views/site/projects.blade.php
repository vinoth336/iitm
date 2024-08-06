@extends('site.header')

@push('css')
    <link href="{{ asset("assets/vendor/bootstrap-select/css/bootstrap-select.min.css") }}" rel="stylesheet">
@endpush

@section('content')
    <div class="page-content bg-white">

        <!-- Banner  -->
        <div class="dz-bnr-inr style-1 text-center overlay-primary-dark" >
            <div class="container">
                <div class="dz-bnr-inr-entry">
                    <!-- Breadcrumb Row -->
                    <nav aria-label="breadcrumb" class="breadcrumb-row">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Giving Opportunities</li>
                            <li class="breadcrumb-item active" aria-current="page">Projects</li>
                            <li class="breadcrumb-item active" aria-current="page">All Projects</li>
                        </ul>
                    </nav>
                    <!-- Breadcrumb Row End -->
                </div>
            </div>
        </div>
        <!-- Banner End -->
        <!-- Form -->
        <div class="clearfix">
            <div class="container">
                <div class="find-bx bg-white">
                    <form class="dezPlaceAni">
                        <div class="row align-items-center">
                            <div class="col-lg-3">
                                <div class="input-group">
                                    <select class="default-select form-select">
                                        <option>All Category</option>
                                        <option>New York</option>
                                        <option>Tokyo</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Find Projects">
                                    <div class="input-group-prepend">
                                        <button class="btn"><i class="las la-search"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="tag-list">
                    <span class="title text-black">Popular Search:</span>
                    <a href="javascript:void(0);">Technology Projects,</a>
                    <a href="javascript:void(0);">Cancer Charity Programs,</a>
                    <a href="javascript:void(0);">Design Interior</a>
                </div>
            </div>
        </div>
        <!-- Form -->

        <div class="content-inner">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-5 m-b40 dz-order-1">
                        <div class="section-head">
                            <h3>Filter</h3>
                        </div>
                        <aside class="side-bar sticky-top">
                            <!-- Categories -->
                            <div class="widget style-1 widget_checkbox_filter">
                                <div class="widget-title">
                                    <h4 class="title">Category</h4>
                                </div>
                                <ul>
                                    <li>
                                        <div class="form-check custom-checkbox checkbox-secondary">
                                            <input type="checkbox" class="form-check-input" id="custom1" required>
                                            <label class="form-check-label" for="custom1">All Projects</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-check checkbox-secondary m-b5">
                                            <input type="checkbox" class="form-check-input filled" id="check2" name="example1">
                                            <label class="form-check-label" for="check2">Technology</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-check checkbox-secondary m-b5">
                                            <input type="checkbox" class="form-check-input filled" id="check3" name="example1">
                                            <label class="form-check-label" for="check3">Medical</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-check checkbox-secondary m-b5">
                                            <input type="checkbox" class="form-check-input filled" id="check4" name="example1">
                                            <label class="form-check-label" for="check4">Business</label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-check checkbox-secondary m-b5">
                                            <input type="checkbox" class="form-check-input filled" id="check5" name="example1">
                                            <label class="form-check-label" for="check5">Fashion</label>
                                        </div>
                                    </li>
                                </ul>
                                <a href="javascript:void;" class="btn btn-primary">SEARCH PROJECTS</a>
                            </div>
                            <div class="widget_contact" style="background-image:url(../assets/images/about/pic2.jpg);">
                                <div class="widget-content">
                                    <img src="../assets/images/icon.png" width="80" alt="">
                                    <h4>Donate to World <br>Cancer Society</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur , sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
                                    <a href="ContactUs.html" class="btn btn-sm btn-secondary" data-bs-toggle="modal" data-bs-target="#modalDonate"> Donate Now <i class="flaticon-like font-12 ms-2"></i></a>
                                </div>
                            </div>
                        </aside>
                    </div>
                    <div class="col-xl-8 col-lg-7 m-b50">
                        <div class="row align-items-center">
                            <div class="col-xl-9 mb-3 mb-sm-4">
                                <h4 class="m-b0">824 Projects Found</h4>
                            </div>
                            <div class="col-xl-3 m-b30">
                                <select class="default-select form-select style-1">
                                    <option>Newest</option>
                                    <option>Oldest</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-6 m-b30">
                                <div class="dz-card style-2 overlay-skew">
                                    <div class="dz-media">
                                        <a href="FundraiserDetail.html"><img src="../assets/images/project/pic1.jpg" alt=""></a>
                                    </div>
                                    <div class="dz-info">
                                        <ul class="dz-category">
                                            <li><a href="javascript:void(0);">EDUCATION</a></li>
                                        </ul>
                                        <h5 class="dz-title"><a href="FundraiserDetail.html">New vaccine for cattle calf loss learned </a></h5>
                                        <div class="progress-bx style-1">
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-secondary progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width:75%"></div>
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
                                                <img src="../assets/images/avatar/avatar1.jpg" alt="">
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
                            <div class="col-xl-6 m-b30">
                                <div class="dz-card style-2 overlay-skew">
                                    <div class="dz-media">
                                        <a href="FundraiserDetail.html"><img src="../assets/images/project/pic2.jpg" alt=""></a>
                                    </div>
                                    <div class="dz-info">
                                        <ul class="dz-category">
                                            <li><a href="javascript:void(0);">TECHNOLOGY</a></li>
                                        </ul>
                                        <h5 class="dz-title"><a href="FundraiserDetail.html">He Created the Web. Now He’s Out to Remake </a></h5>
                                        <div class="progress-bx style-1">
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-secondary progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width:85%"></div>
                                            </div>
                                            <ul class="progress-tag">
                                                <li class="raised">
                                                    <i class="las la-coins"></i> <span>Total Raised $ 1,437</span>
                                                </li>
                                                <li class="goal">
                                                    <i class="lar la-calendar"></i> <span>57 Days left</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="author-wrappper">
                                            <div class="author-media">
                                                <img src="../assets/images/avatar/avatar2.jpg" alt="">
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
                            <div class="col-xl-6 m-b30">
                                <div class="dz-card style-2 overlay-skew">
                                    <div class="dz-media">
                                        <a href="FundraiserDetail.html"><img src="../assets/images/project/pic3.jpg" alt=""></a>
                                    </div>
                                    <div class="dz-info">
                                        <ul class="dz-category">
                                            <li><a href="javascript:void(0);">HEALTH</a></li>
                                        </ul>
                                        <h5 class="dz-title"><a href="FundraiserDetail.html">4 Things parents learned for they jids in 2020 </a></h5>
                                        <div class="progress-bx style-1">
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-secondary progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100" style="width:68%"></div>
                                            </div>
                                            <ul class="progress-tag">
                                                <li class="raised">
                                                    <i class="las la-coins"></i> <span>Total Raised $ 7,547</span>
                                                </li>
                                                <li class="goal">
                                                    <i class="lar la-calendar"></i> <span>89 Days left</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="author-wrappper">
                                            <div class="author-media">
                                                <img src="../assets/images/avatar/avatar3.jpg" alt="">
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
                            <div class="col-xl-6 m-b30">
                                <div class="dz-card style-2 overlay-skew">
                                    <div class="dz-media">
                                        <a href="FundraiserDetail.html"><img src="../assets/images/project/pic4.jpg" alt=""></a>
                                    </div>
                                    <div class="dz-info">
                                        <ul class="dz-category">
                                            <li><a href="javascript:void(0);">HEALTH</a></li>
                                        </ul>
                                        <h5 class="dz-title"><a href="FundraiserDetail.html">Partnering to create a community</a></h5>
                                        <div class="progress-bx style-1">
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-secondary progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="36" aria-valuemin="0" aria-valuemax="100" style="width:36%"></div>
                                            </div>
                                            <ul class="progress-tag">
                                                <li class="raised">
                                                    <i class="las la-coins"></i> <span>Total Raised $ 4,274</span>
                                                </li>
                                                <li class="goal">
                                                    <i class="lar la-calendar"></i> <span>12 Days left</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="author-wrappper">
                                            <div class="author-media">
                                                <img src="../assets/images/avatar/avatar4.jpg" alt="">
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
                            <div class="col-xl-6 m-b30">
                                <div class="dz-card style-2 overlay-skew">
                                    <div class="dz-media">
                                        <a href="FundraiserDetail.html"><img src="../assets/images/project/pic5.jpg" alt=""></a>
                                    </div>
                                    <div class="dz-info">
                                        <ul class="dz-category">
                                            <li><a href="javascript:void(0);">HEALTH</a></li>
                                        </ul>
                                        <h5 class="dz-title"><a href="FundraiserDetail.html">Primary School Build for Children</a></h5>
                                        <div class="progress-bx style-1">
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-secondary progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100" style="width:35%"></div>
                                            </div>
                                            <ul class="progress-tag">
                                                <li class="raised">
                                                    <i class="las la-coins"></i> <span>Total Raised $ 4,274</span>
                                                </li>
                                                <li class="goal">
                                                    <i class="lar la-calendar"></i> <span>47 Days left</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="author-wrappper">
                                            <div class="author-media">
                                                <img src="../assets/images/avatar/avatar5.jpg" alt="">
                                            </div>
                                            <div class="author-content">
                                                <div class="author-head">
                                                    <h6 class="author-name">Richard Hart</h6>
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
                            <div class="col-xl-6 m-b30">
                                <div class="dz-card style-2 overlay-skew">
                                    <div class="dz-media">
                                        <a href="FundraiserDetail.html"><img src="../assets/images/project/pic6.jpg" alt=""></a>
                                    </div>
                                    <div class="dz-info">
                                        <ul class="dz-category">
                                            <li><a href="javascript:void(0);">HEALTH</a></li>
                                        </ul>
                                        <h5 class="dz-title"><a href="FundraiserDetail.html">Best & Less published their supplier lists</a></h5>
                                        <div class="progress-bx style-1">
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-secondary progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="52" aria-valuemin="0" aria-valuemax="100" style="width:52%"></div>
                                            </div>
                                            <ul class="progress-tag">
                                                <li class="raised">
                                                    <i class="las la-coins"></i> <span>Total Raised $ 4,274</span>
                                                </li>
                                                <li class="goal">
                                                    <i class="lar la-calendar"></i> <span>22 Days left</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="author-wrappper">
                                            <div class="author-media">
                                                <img src="../assets/images/avatar/avatar6.jpg" alt="">
                                            </div>
                                            <div class="author-content">
                                                <div class="author-head">
                                                    <h6 class="author-name">Cheye Curtis</h6>
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
                        <div class="row">
                            <div class="col-12 m-sm-t0 m-t30">
                                <nav aria-label="Blog Pagination" class="pagination-bx">
                                    <div class="page-item">
                                        <a class="page-link prev" href="javascript:void(0);"><i class="fas fa-chevron-left"></i></a>
                                    </div>
                                    <ul class="pagination">
                                        <li class="page-item"><a class="page-link" href="javascript:void(0);">1</a></li>
                                        <li class="page-item"><a class="page-link active" href="javascript:void(0);">2</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript:void(0);">4</a></li>
                                    </ul>
                                    <div class="page-item">
                                        <a class="page-link next" href="javascript:void(0);"><i class="fas fa-chevron-right"></i></a>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection

@push('js')
    <script src="{{ asset("assets/vendor/bootstrap-select/js/bootstrap-select.min.js") }}"></script><!-- BOOTSTRAP SELECT -->
@endpush

