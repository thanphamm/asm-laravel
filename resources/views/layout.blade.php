<!DOCTYPE html>
<html lang="vi">

<head>
    
    <title>ThanPM</title>
    <base href="{{asset('/')}}">

    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="">

    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet'>

    <!-- Css -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/font-icons.css" />
    <link rel="stylesheet" href="css/style.css" />

    <!-- <link rel="stylesheet" href="asm/public/css/bootstrap.min.css" />
    <link rel="stylesheet" href="asm/public/css/font-icons.css" />
    <link rel="stylesheet" href="asm/public/css/style.css" /> -->

    <!-- Favicons -->
    <link rel="shortcut icon" href="img/favicon.ico">
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

    <!-- Lazyload -->
    <script src="js/lazysizes.min.js"></script>

</head>

<body class="bg-light">

    <!-- Preloader -->
    <div class="loader-mask">
        <div class="loader">
            <div></div>
        </div>
    </div>

    <!-- Bg Overlay -->
    <div class="content-overlay"></div>

    <!-- Sidenav -->
    <header class="sidenav" id="sidenav">

        <!-- close -->
        <div class="sidenav__close">
            <button class="sidenav__close-button" id="sidenav__close-button" aria-label="close sidenav">
                <i class="ui-close sidenav__close-icon"></i>
            </button>
        </div>

        <!-- Nav -->
        <nav class="sidenav__menu-container">
            <ul class="sidenav__menu" role="menubar">
                <!-- Categories -->
                
            </ul>
        </nav>

        
    </header>
    <!-- end sidenav -->

    <main class="main oh" id="main">

        <!-- Navigation -->

        @include ("menu")

        <!-- Header -->
        <div class="header">
            <div class="container">
                <div class="flex-parent align-items-center">

                    <!-- Logo -->
                    <!-- <a href="#" 
                    class="logo d-none d-lg-block">
                        <img style=" width: 100px; height: 100px; background: #ccc; -moz-border-radius: 25px; -webkit-border-radius: 25px; --border-radius: 25px; border-radius: 130px;"  class="logo__img" src="upload/images/logo.jpg" srcset="upload/images/logo.jpg 1x, upload/images/logo.jpg 2x"
                            alt="logo">
                    </a> -->

                    <!-- Ad Banner 728 -->
                    <div class="text-center">
                        <a href="#">
                            <img style="width: 1200px; height: 220px;" src="upload/images/banner-news.jpg" alt="">
                        </a>
                    </div>

                </div>
            </div>
        </div> <!-- end header -->

        <!-- Trending Now -->
       

        <!-- Featured Posts Grid -->
        @yield("tinnoibat")
         <!-- end featured posts grid -->

        <div class="main-container container mt-40" id="main-container" style="margin-top: 10px;">

            <!-- Content -->
            <div class="row">

                <!-- Posts -->
                
                @yield("post")

                <!-- end posts -->

                <!-- Sidebar -->
                
                @include("sidebar")
                
                <!-- end sidebar -->

            </div> <!-- end content -->
        </div> <!-- end main container -->

        <!-- Footer -->
        <footer class="footer footer--dark">
            <div class="container">
                <div class="footer__widgets">
                    <div class="row">

                        <div class="col-lg-3 col-md-6">
                            <div class="widget">
                                <a href="#">
                                    <img style=" width: 150px;" src="upload/images/logo.jpg"
                                        srcset="upload/images/logo.jpg 1x, img/logo_mobile@2x.jpg 2x" class="logo__img"
                                        alt="">
                                </a>
                                <p class="mt-20">FoxNews kênh tin tức cập nhật liên tục mỗi ngày.</p>
                            </div>
                        </div>

                        @include ('postfooter')

                        @include ('postlink')
                        <div class="col-lg-3 col-md-6">
                            <div class="widget widget__newsletter">
                                <h4 class="widget-title">Video</h4>

                                <iframe class="embed-responsive-item" width="300" height="150" src="https://www.youtube.com/embed/Nr4zWFnwrEQ" allowfullscreen=""></iframe>

                            </div>
                        </div>

                    </div>
                </div>
            </div> <!-- end container -->

            <div class="footer__bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 order-lg-2 text-right text-md-center">
                            <div class="widget widget_nav_menu">
                                <ul>
                                    <li><a href="#">Điều Kiện</a></li>
                                    <li><a href="#">Riêng Tư</a></li>
                                    <li><a href="#">Quảng Cáo</a></li>
                                    <li><a href="#">Chi Nhánh</a></li>
                                    <li><a href="#">Bản Tin</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-5 order-lg-1 text-md-center">
                            <span class="copyright">
                                &copy; 2017 AhaMag | Made by <a href="http://deothemes.com">ThanPM</a>
                            </span>
                        </div>
                    </div>

                </div>
            </div> <!-- end bottom footer -->
            
        </footer> <!-- end footer -->

        <div id="back-to-top">
            <a href="#top" aria-label="Go to top"><i class="ui-arrow-up"></i></a>
        </div>

    </main> <!-- end main-wrapper -->


    <!-- jQuery Scripts -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/easing.min.js"></script>
    <script src="js/owl-carousel.min.js"></script>
    <script src="js/twitterFetcher_min.js"></script>
    <script src="js/jquery.newsTicker.min.js"></script>
    <script src="js/modernizr.min.js"></script>
    <script src="js/scripts.js"></script>
    
</body>

</html>