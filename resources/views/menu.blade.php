<header class="nav">

    <div class="nav__holder nav--sticky">
        <div class="container relative">
            <div class="flex-parent">

                <!-- Side Menu Button -->
                

                <!-- Mobile logo -->
                <a href="index.html" class="logo logo--mobile d-lg-none">
                    <img class="logo__img" src="img/logo_mobile.png"
                        srcset="img/logo_mobile.png 1x, img/logo_mobile@2x.png 2x" alt="logo">
                </a>

                <!-- Nav-wrap -->
                <nav class="flex-child nav__wrap d-none d-lg-block">
                    <ul class="nav__menu">
                    <li class="nav__dropdown">
                        <a href="#">Trang Chủ</a>
                    </li>
                    <?php
                        $theloai = DB::table('theloai')
                        ->where([['theloai.lang', '=', 'vi'], ['theloai.AnHien', '=', '1']])
                        ->orderby('theloai.ThuTu', 'asc')
                        ->limit(5)->get();
                    ?>
 
                    @foreach($theloai as $tl)
                        <li class="nav__dropdown">
                            <a href="{{action('TinController@tintrongloai',['id'=>$tl->idTL])}}">{{$tl -> TenTL}}</a>
                            <ul class="nav__dropdown-menu">
                                
                            <?php
                                $loaitin = DB::table('loaitin')
                                ->where([['lang', '=', 'vi'],
                                ['AnHien', '=', '1'],
                                ['idTL', '=', $tl->idTL]])
                                ->limit(5)->get();
                            ?>
                            @foreach ($loaitin as $lt)
                                <li><a href="{{action('TinController@tintrongloai',['id'=>$lt->idLT])}}">{{$lt -> Ten}}</a></li>
                            @endforeach

                            </ul>
                        </li>
                    @endforeach
                    <li class="nav__dropdown">
                        <a href="{{action('TinController@lienhe')}}">Gửi Mail</a>
                    </li>

                    <li class="nav__dropdown">
                        <a href="{{ asset('') }}login">Đăng Nhập</a>
                    </li>
                    <li class="nav__dropdown">
                        <a href="{{ asset('') }}logout">Đăng Xuất</a>
                    </li>
                    <!-- <li class="nav__dropdown">
                        <a href="">Báo Cáo</a>
                    </li> -->
                    

                    </ul> <!-- end menu -->
                </nav> <!-- end nav-wrap -->

                <!-- Nav Right -->
                <div class="nav__right nav--align-right d-lg-flex">

                    <!-- Socials -->
                    <div class="nav__right-item socials nav__socials d-none d-lg-flex">
                        <a class="social social-facebook social--nobase" href="#" target="_blank" aria-label="facebook">
                            <i class="ui-facebook"></i>
                        </a>
                        <a class="social social-twitter social--nobase" href="#" target="_blank" aria-label="twitter">
                            <i class="ui-twitter"></i>
                        </a>
                        <a class="social social-google social--nobase" href="#" target="_blank" aria-label="google">
                            <i class="ui-google"></i>
                        </a>
                        <a class="social social-youtube social--nobase" href="#" target="_blank" aria-label="youtube">
                            <i class="ui-youtube"></i>
                        </a>
                        <a class="social social-instagram social--nobase" href="#" target="_blank"
                            aria-label="instagram">
                            <i class="ui-instagram"></i>
                        </a>
                    </div>

                    <!-- Search -->


                </div> <!-- end nav right -->

            </div> <!-- end flex-parent -->
        </div> <!-- end container -->

    </div>
</header>