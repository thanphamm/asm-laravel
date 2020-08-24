<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="{{ asset('lib') }}/jquery/jquery.js"></script>
    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Amanda">
    <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="twitter:image" content="http://themepixels.me/amanda/img/amanda-social.png">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/amanda">
    <meta property="og:title" content="Bracket">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

    <meta property="og:image" content="http://themepixels.me/amanda/img/amanda-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/amanda/img/amanda-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">


    <title>Trang Quản Trị</title>

    <!-- vendor css -->
    <link href="{{ asset('lib') }}/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="{{ asset('lib') }}/Ionicons/css/ionicons.css" rel="stylesheet">
    <link href="{{ asset('lib') }}/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
    <link href="{{ asset('lib') }}/jquery-toggles/toggles-full.css" rel="stylesheet">
    <link href="{{ asset('lib') }}/rickshaw/rickshaw.min.css" rel="stylesheet">

    <!-- Amanda CSS -->
    <link rel="stylesheet" href="{{ asset('css') }}/amanda.css">
    @yield('jsscript')
</head>

<body>

    <div class="am-header">
        <div class="am-header-left">
            <a id="naviconLeft" href="" class="am-navicon d-none d-lg-flex"><i class="icon ion-navicon-round"></i></a>
            <a id="naviconLeftMobile" href="" class="am-navicon d-lg-none"><i class="icon ion-navicon-round"></i></a>
            <a href="" class="am-logo">ThanPM</a>
        </div><!-- am-header-left -->

        <div class="am-header-right">
            <div class="dropdown dropdown-notification">
                <a href="" class="nav-link pd-x-7 pos-relative" data-toggle="dropdown">
                    <i class="icon ion-ios-bell-outline tx-24"></i>
                    <!-- start: if statement -->
                    <span class="square-8 bg-danger pos-absolute t-15 r-0 rounded-circle"></span>
                    <!-- end: if statement -->
                </a>
                <div class="dropdown-menu wd-300 pd-0-force">
                    <div class="dropdown-menu-header">
                        <label>Notifications</label>
                        <a href="">Mark All as Read</a>
                    </div><!-- d-flex -->

                    <div class="media-list">
                        <!-- loop starts here -->
                        <a href="" class="media-list-link read">
                            <div class="media pd-x-20 pd-y-15">
                                <img src="{{ asset('img') }}/img8.jpg" class="wd-40 rounded-circle" alt="">
                                <div class="media-body">
                                    <p class="tx-13 mg-b-0"><strong class="tx-medium">Suzzeth Bungaos</strong> tagged
                                        you and 18 others in a post.</p>
                                    <span class="tx-12">October 03, 2017 8:45am</span>
                                </div>
                            </div><!-- media -->
                        </a>
                        <!-- loop ends here -->
                        <a href="" class="media-list-link read">
                            <div class="media pd-x-20 pd-y-15">
                                <img src="{{ asset('img') }}/img9.jpg" class="wd-40 rounded-circle" alt="">
                                <div class="media-body">
                                    <p class="tx-13 mg-b-0"><strong class="tx-medium">Mellisa Brown</strong> appreciated
                                        your work <strong class="tx-medium">The Social Network</strong></p>
                                    <span class="tx-12">October 02, 2017 12:44am</span>
                                </div>
                            </div><!-- media -->
                        </a>
                        <a href="" class="media-list-link read">
                            <div class="media pd-x-20 pd-y-15">
                                <img src="{{ asset('img') }}/img10.jpg" class="wd-40 rounded-circle" alt="">
                                <div class="media-body">
                                    <p class="tx-13 mg-b-0">20+ new items added are for sale in your <strong
                                            class="tx-medium">Sale Group</strong></p>
                                    <span class="tx-12">October 01, 2017 10:20pm</span>
                                </div>
                            </div><!-- media -->
                        </a>
                        <a href="" class="media-list-link read">
                            <div class="media pd-x-20 pd-y-15">
                                <img src="{{ asset('img') }}/img5.jpg" class="wd-40 rounded-circle" alt="">
                                <div class="media-body">
                                    <p class="tx-13 mg-b-0"><strong class="tx-medium">Julius Erving</strong> wants to
                                        connect with you on your conversation with <strong class="tx-medium">Ronnie
                                            Mara</strong></p>
                                    <span class="tx-12">October 01, 2017 6:08pm</span>
                                </div>
                            </div><!-- media -->
                        </a>
                        <div class="media-list-footer">
                            <a href="" class="tx-12"><i class="fa fa-angle-down mg-r-5"></i> Show All Notifications</a>
                        </div>
                    </div><!-- media-list -->
                </div><!-- dropdown-menu -->
            </div><!-- dropdown -->
            <div class="dropdown dropdown-profile">
                <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
                    <img src="{{ asset('img') }}/img3.jpg" class="wd-32 rounded-circle" alt="">
                    <span class="logged-name"><span class="hidden-xs-down">Thân Phạm</span> <i
                            class="fa fa-angle-down mg-l-3"></i></span>
                </a>
                <div class="dropdown-menu wd-200">
                    <ul class="list-unstyled user-profile-nav">
                        <li><a href=""><i class="icon ion-ios-person-outline"></i> Chỉnh Thông Tin</a></li>
                        <li><a href=""><i class="icon ion-ios-gear-outline"></i> Cài Đặt</a></li>
                        <li><a href=""><i class="icon ion-ios-download-outline"></i> Tải Về</a></li>
                        <li><a href=""><i class="icon ion-ios-star-outline"></i> Yêu Thích</a></li>
                        <li><a href=""><i class="icon ion-ios-folder-outline"></i> Bộ Sưu Tập</a></li>
                        <li><a href="{{ route('logout')}}"><i class="icon ion-power"></i> Đăng Xuất</a></li>
                    </ul>
                </div><!-- dropdown-menu -->
            </div><!-- dropdown -->
        </div><!-- am-header-right -->
    </div><!-- am-header -->

    <?=View::make('quantri.menu')?>

    <div class="am-mainpanel">
        <div class="am-pagetitle">
            <h5 class="am-title">@yield('pagetitle')</h5>
            
        </div><!-- am-pagetitle -->
        <div class="col-sm-12">
            @if(session()->get('success'))
            <div class="alert alert-success">
                {{ session()->get('success') }}
            </div>
            @endif
        </div>
        <div class="am-pagebody">
            <div class="card pd-20 pd-sm-40">

                @yield('main')

            </div>
        </div><!-- am-pagebody -->
        <div class="am-footer">
            <span>Copyright &copy;. All Rights Reserved. Amanda Responsive Bootstrap 4 Admin Dashboard.</span>
            <span>Created by: ThemePixels, Inc.</span>
        </div><!-- am-footer -->
    </div><!-- am-mainpanel -->

    
    <script src="{{ asset('lib') }}/popper.js/popper.js"></script>
    <script src="{{ asset('lib') }}/bootstrap/bootstrap.js"></script>
    <script src="{{ asset('lib') }}/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>
    <script src="{{ asset('lib') }}/jquery-toggles/toggles.min.js"></script>
    <script src="{{ asset('lib') }}/d3/d3.js"></script>
    <script src="{{ asset('lib') }}/rickshaw/rickshaw.min.js"></script>
    <script src="http://maps.google.com/maps/api/js?key=AIzaSyAEt_DBLTknLexNbTVwbXyq2HSf2UbRBU8"></script>
    <script src="{{ asset('lib') }}/gmaps/gmaps.js"></script>
    <script src="{{ asset('lib') }}/Flot/jquery.flot.js"></script>
    <script src="{{ asset('lib') }}/Flot/jquery.flot.pie.js"></script>
    <script src="{{ asset('lib') }}/Flot/jquery.flot.resize.js"></script>
    <script src="{{ asset('lib') }}/flot-spline/jquery.flot.spline.js"></script>

    <script src="{{ asset('js') }}/amanda.js"></script>
    <script src="{{ asset('js') }}/ResizeSensor.js"></script>
    <script src="{{ asset('js') }}/dashboard.js"></script>
</body>

</html>