<div class="col-lg-8 blog__content mb-30">

    <!-- Hot News -->
    <section class="section tab-post mb-10">
        <div class="title-wrap">
            <h3 class="section-title">Tin Tức Nóng</h3>
        <?php
            $tintucnong= DB::table('tin')
            ->join('loaitin', 'tin.idLT', '=', 'loaitin.idLT')
            ->where([['tin.AnHien', 1], ['tin.lang','vi'], ['tin.tinnoibat', 1], ['tin.SoLanXem', 'desc']])
            ->orderby('tin.Ngay', 'desc')
            ->limit(2)->get();

            $loaittn= DB::table('tin')
            ->join('loaitin', 'tin.idLT', '=', 'loaitin.idLT')
            ->where([['tin.AnHien', 1], ['tin.lang','vi'], ['tin.tinnoibat', 1], ['tin.SoLanXem', 'desc']])
            ->orderby('tin.Ngay', 'desc')
            ->limit(5)->get();
        ?>
            <div class="tabs tab-post__tabs">
                <ul class="tabs__list">
                <li class="tabs__item tabs__item--active">
                        <a href="#tab-all" class="tabs__trigger">Tất Cả</a>
                    </li>
                @foreach($loaittn as $t)
                    <li class="tabs__item">
                        <a href="#tab-world" class="tabs__trigger">{{$t -> Ten}}</a>
                    </li>
                @endforeach
                   
                </ul> <!-- end tabs -->
            </div>
        </div>

        <!-- tab content -->
        <div class="tabs__content tabs__content-trigger tab-post__tabs-content">

            <div class="tabs__content-pane tabs__content-pane--active" id="tab-all">
                <div class="row">

                @foreach($tintucnong as $t)
                    <div class="col-md-6">
                        <article class="entry">
                            <div class="entry__img-holder">
                                <a href="{{action('TinController@chitiettin',['id'=>$t->idTin])}}">
                                    <div class="thumb-container thumb-75">
                                        <img data-src="{{$t -> urlHinh}}" src="img/empty.png"
                                            class="entry__img lazyload" alt="" />
                                    </div>
                                </a>
                            </div>

                            <div class="entry__body">
                                <div class="entry__header">
                                    <a href="#" class="entry__meta-category">{{$t -> Ten}}</a>
                                    <h2 class="entry__title">
                                        <a href="{{action('TinController@chitiettin',['id'=>$t->idTin])}}">{{$t -> TieuDe}}</a>
                                    </h2>
                                    <ul class="entry__meta">
                                        <li class="entry__meta-author">
                                            <i class="ui-author"></i>
                                            <a href="#">{{$t -> Ten}}</a>
                                        </li>
                                        <li class="entry__meta-date">
                                            <i class="ui-date"></i>
                                            {{$t -> Ngay}}
                                        </li>
                                        <li class="entry__meta-comments">
                                            <i class="ui-comments"></i>
                                            <a href="#">{{$t -> SoLanXem}}</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="entry__excerpt">
                                    <p>{{$t -> TomTat}}</p>
                                </div>
                            </div>
                        </article>
                    </div>
                @endforeach  

                </div>
            </div> <!-- end pane 1 -->
            <div class="tabs__content-pane" id="tab-world">
                <div class="row">
                    <div class="col-md-6">
                        <article class="entry">
                            <div class="entry__img-holder">
                                <a href="single-post.html">
                                    <div class="thumb-container thumb-75">
                                        <img data-src="img/blog/grid_post_img_1.jpg" src="img/empty.png"
                                            class="entry__img lazyload" alt="" />
                                    </div>
                                </a>
                            </div>

                            <div class="entry__body">
                                <div class="entry__header">
                                    <a href="#" class="entry__meta-category">science</a>
                                    <h2 class="entry__title">
                                        <a href="single-post.html">Optimal Amount of Rainfall for
                                            Plants</a>
                                    </h2>
                                    <ul class="entry__meta">
                                        <li class="entry__meta-author">
                                            <i class="ui-author"></i>
                                            <a href="#">DeoThemes</a>
                                        </li>
                                        <li class="entry__meta-date">
                                            <i class="ui-date"></i>
                                            21 October, 2017
                                        </li>
                                        <li class="entry__meta-comments">
                                            <i class="ui-comments"></i>
                                            <a href="#">115</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="entry__excerpt">
                                    <p>Class aptent taciti sociosqu ad litora torquent per conubia
                                        nostra, per inceptos. Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit...</p>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-6">
                        <article class="entry">
                            <div class="entry__img-holder">
                                <a href="single-post.html">
                                    <div class="thumb-container thumb-75">
                                        <img data-src="img/blog/grid_post_img_2.jpg" src="img/empty.png"
                                            class="entry__img lazyload" alt="" />
                                    </div>
                                </a>
                            </div>

                            <div class="entry__body">
                                <div class="entry__header">
                                    <a href="#" class="entry__meta-category">business</a>
                                    <h2 class="entry__title">
                                        <a href="single-post.html">BRICS Nations Agree to Create Own
                                            Development Bank</a>
                                    </h2>
                                    <ul class="entry__meta">
                                        <li class="entry__meta-author">
                                            <i class="ui-author"></i>
                                            <a href="#">DeoThemes</a>
                                        </li>
                                        <li class="entry__meta-date">
                                            <i class="ui-date"></i>
                                            21 October, 2017
                                        </li>
                                        <li class="entry__meta-comments">
                                            <i class="ui-comments"></i>
                                            <a href="#">115</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="entry__excerpt">
                                    <p>Class aptent taciti sociosqu ad litora torquent per conubia
                                        nostra, per inceptos. Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit...</p>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div> <!-- end pane 2 -->
            <div class="tabs__content-pane" id="tab-business">
                <div class="row">
                    <div class="col-md-6">
                        <article class="entry">
                            <div class="entry__img-holder">
                                <a href="single-post.html">
                                    <div class="thumb-container thumb-75">
                                        <img data-src="img/blog/grid_post_img_1.jpg" src="img/empty.png"
                                            class="entry__img lazyload" alt="" />
                                    </div>
                                </a>
                            </div>

                            <div class="entry__body">
                                <div class="entry__header">
                                    <a href="#" class="entry__meta-category">science</a>
                                    <h2 class="entry__title">
                                        <a href="single-post.html">Optimal Amount of Rainfall for
                                            Plants</a>
                                    </h2>
                                    <ul class="entry__meta">
                                        <li class="entry__meta-author">
                                            <i class="ui-author"></i>
                                            <a href="#">DeoThemes</a>
                                        </li>
                                        <li class="entry__meta-date">
                                            <i class="ui-date"></i>
                                            21 October, 2017
                                        </li>
                                        <li class="entry__meta-comments">
                                            <i class="ui-comments"></i>
                                            <a href="#">115</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="entry__excerpt">
                                    <p>Class aptent taciti sociosqu ad litora torquent per conubia
                                        nostra, per inceptos. Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit...</p>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-6">
                        <article class="entry">
                            <div class="entry__img-holder">
                                <a href="single-post.html">
                                    <div class="thumb-container thumb-75">
                                        <img data-src="img/blog/grid_post_img_2.jpg" src="img/empty.png"
                                            class="entry__img lazyload" alt="" />
                                    </div>
                                </a>
                            </div>

                            <div class="entry__body">
                                <div class="entry__header">
                                    <a href="#" class="entry__meta-category">business</a>
                                    <h2 class="entry__title">
                                        <a href="single-post.html">BRICS Nations Agree to Create Own
                                            Development Bank</a>
                                    </h2>
                                    <ul class="entry__meta">
                                        <li class="entry__meta-author">
                                            <i class="ui-author"></i>
                                            <a href="#">DeoThemes</a>
                                        </li>
                                        <li class="entry__meta-date">
                                            <i class="ui-date"></i>
                                            21 October, 2017
                                        </li>
                                        <li class="entry__meta-comments">
                                            <i class="ui-comments"></i>
                                            <a href="#">115</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="entry__excerpt">
                                    <p>Class aptent taciti sociosqu ad litora torquent per conubia
                                        nostra, per inceptos. Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit...</p>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div> <!-- end pane 3 -->
            <div class="tabs__content-pane" id="tab-politics">
                <div class="row">
                    <div class="col-md-6">
                        <article class="entry">
                            <div class="entry__img-holder">
                                <a href="single-post.html">
                                    <div class="thumb-container thumb-75">
                                        <img data-src="img/blog/grid_post_img_1.jpg" src="img/empty.png"
                                            class="entry__img lazyload" alt="" />
                                    </div>
                                </a>
                            </div>

                            <div class="entry__body">
                                <div class="entry__header">
                                    <a href="#" class="entry__meta-category">science</a>
                                    <h2 class="entry__title">
                                        <a href="single-post.html">Optimal Amount of Rainfall for
                                            Plants</a>
                                    </h2>
                                    <ul class="entry__meta">
                                        <li class="entry__meta-author">
                                            <i class="ui-author"></i>
                                            <a href="#">DeoThemes</a>
                                        </li>
                                        <li class="entry__meta-date">
                                            <i class="ui-date"></i>
                                            21 October, 2017
                                        </li>
                                        <li class="entry__meta-comments">
                                            <i class="ui-comments"></i>
                                            <a href="#">115</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="entry__excerpt">
                                    <p>Class aptent taciti sociosqu ad litora torquent per conubia
                                        nostra, per inceptos. Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit...</p>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-6">
                        <article class="entry">
                            <div class="entry__img-holder">
                                <a href="single-post.html">
                                    <div class="thumb-container thumb-75">
                                        <img data-src="img/blog/grid_post_img_2.jpg" src="img/empty.png"
                                            class="entry__img lazyload" alt="" />
                                    </div>
                                </a>
                            </div>

                            <div class="entry__body">
                                <div class="entry__header">
                                    <a href="#" class="entry__meta-category">business</a>
                                    <h2 class="entry__title">
                                        <a href="single-post.html">BRICS Nations Agree to Create Own
                                            Development Bank</a>
                                    </h2>
                                    <ul class="entry__meta">
                                        <li class="entry__meta-author">
                                            <i class="ui-author"></i>
                                            <a href="#">DeoThemes</a>
                                        </li>
                                        <li class="entry__meta-date">
                                            <i class="ui-date"></i>
                                            21 October, 2017
                                        </li>
                                        <li class="entry__meta-comments">
                                            <i class="ui-comments"></i>
                                            <a href="#">115</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="entry__excerpt">
                                    <p>Class aptent taciti sociosqu ad litora torquent per conubia
                                        nostra, per inceptos. Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit...</p>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div> <!-- end pane 4 -->
            <div class="tabs__content-pane" id="tab-marketing">
                <div class="row">
                    <div class="col-md-6">
                        <article class="entry">
                            <div class="entry__img-holder">
                                <a href="single-post.html">
                                    <div class="thumb-container thumb-75">
                                        <img data-src="img/blog/grid_post_img_1.jpg" src="img/empty.png"
                                            class="entry__img lazyload" alt="" />
                                    </div>
                                </a>
                            </div>

                            <div class="entry__body">
                                <div class="entry__header">
                                    <a href="#" class="entry__meta-category">science</a>
                                    <h2 class="entry__title">
                                        <a href="single-post.html">Optimal Amount of Rainfall for
                                            Plants</a>
                                    </h2>
                                    <ul class="entry__meta">
                                        <li class="entry__meta-author">
                                            <i class="ui-author"></i>
                                            <a href="#">DeoThemes</a>
                                        </li>
                                        <li class="entry__meta-date">
                                            <i class="ui-date"></i>
                                            21 October, 2017
                                        </li>
                                        <li class="entry__meta-comments">
                                            <i class="ui-comments"></i>
                                            <a href="#">115</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="entry__excerpt">
                                    <p>Class aptent taciti sociosqu ad litora torquent per conubia
                                        nostra, per inceptos. Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit...</p>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-6">
                        <article class="entry">
                            <div class="entry__img-holder">
                                <a href="single-post.html">
                                    <div class="thumb-container thumb-75">
                                        <img data-src="img/blog/grid_post_img_2.jpg" src="img/empty.png"
                                            class="entry__img lazyload" alt="" />
                                    </div>
                                </a>
                            </div>

                            <div class="entry__body">
                                <div class="entry__header">
                                    <a href="#" class="entry__meta-category">business</a>
                                    <h2 class="entry__title">
                                        <a href="single-post.html">BRICS Nations Agree to Create Own
                                            Development Bank</a>
                                    </h2>
                                    <ul class="entry__meta">
                                        <li class="entry__meta-author">
                                            <i class="ui-author"></i>
                                            <a href="#">DeoThemes</a>
                                        </li>
                                        <li class="entry__meta-date">
                                            <i class="ui-date"></i>
                                            21 October, 2017
                                        </li>
                                        <li class="entry__meta-comments">
                                            <i class="ui-comments"></i>
                                            <a href="#">115</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="entry__excerpt">
                                    <p>Class aptent taciti sociosqu ad litora torquent per conubia
                                        nostra, per inceptos. Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit...</p>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div> <!-- end pane 5 -->
        </div> <!-- end tab content -->
    </section> <!-- end hot news -->

    <!-- Latest News -->
    <section class="section">
        <div class="title-wrap">
            <h3 class="section-title">Tin Mới Nhất</h3>
            <a href="#" class="all-posts-url">Xem Tất Cả</a>
        </div>
        <?php
            $tinmoi = DB::table('tin')
            ->join('loaitin', 'tin.idLT', '=', 'loaitin.idLT')
            ->where([['tin.AnHien',1], ['tin.lang','vi']])
            ->orderby('tin.Ngay', 'desc')
            ->limit(3)->get();
        ?>
        @foreach ($tinmoi as $tm)
        <article class="entry post-list">
            <div class="entry__img-holder post-list__img-holder">
                <a href="{{action('TinController@chitiettin',['id'=>$tm->idTin])}}">
                    <div class="thumb-container thumb-75">
                        <img data-src="{{$tm -> urlHinh}}" src="img/empty.png" class="entry__img lazyload"
                            alt="">
                    </div>
                </a>
            </div>

            <div class="entry__body post-list__body">
                <div class="entry__header">
                    <a href="#" class="entry__meta-category">{{$tm -> Ten}}</a>
                    <h2 class="entry__title">
                        <a href="{{action('TinController@chitiettin',['id'=>$tm->idTin])}}">{{$tm -> TieuDe}}</a>
                    </h2>
                    <ul class="entry__meta">
                        <li class="entry__meta-author">
                            <i class="ui-author"></i>
                            <a href="#">ThanPM</a>
                        </li>
                        <li class="entry__meta-date">
                            <i class="ui-date"></i>
                            {{$tm -> Ngay}}
                        </li>
                        <li class="entry__meta-comments">
                            <i class="ui-comments"></i>
                            <a href="#">{{$tm -> SoLanXem}}</a>
                        </li>
                    </ul>
                </div>
                <div class="entry__excerpt">
                    <p>{{$tm -> TomTat}}</p>
                </div>
            </div>
        </article>
        @endforeach

    </section> <!-- end latest news -->

    <!-- Ad Banner 728 -->
    <div class="text-center pb-40">
        <a href="#">
            <img style="height: 200px; width: 750px;" src="upload/images/News-Banner-Image.png" alt="">
        </a>
    </div>

    <!-- Editor's Picks -->
    <section class="section editors-picks mb-20">
        <div class="title-wrap">
            <h3 class="section-title">Lựa Chọn Của Biên Tập Viên</h3>
            <a href="#" class="all-posts-url">Xem Tất Cả</a>
        </div>
        <div class="row">
            <div class="col-lg-7">
            <?php
                $tinbtv = DB::table('tin')
                ->join('loaitin', 'tin.idLT', '=', 'loaitin.idLT')
                ->where([['tin.AnHien',1], ['tin.lang','vi'], ['tin.TinNoiBat',1], ['tin.SoLanXem', 'desc']])
                ->orderby('tin.Ngay', 'desc')
                ->offset(0)->limit(6)->get();
            ?>
                <article class="entry">
                    <div class="entry__img-holder">
                        <a href="{{action('TinController@chitiettin',['id'=>$tinbtv[0]->idTin])}}">
                            <div class="thumb-container thumb-75">
                                <img data-src="{{$tinbtv[0] -> urlHinh}}" src="img/empty.png"
                                    class="entry__img lazyload" alt="" />
                            </div>
                        </a>
                    </div>

                    <div class="entry__body">
                        <div class="entry__header">
                            <a href="#" class="entry__meta-category">{{$tinbtv[0] -> Ten}}</a>
                            <h2 class="entry__title">
                                <a href="{{action('TinController@chitiettin',['id'=>$tinbtv[0]->idTin])}}">{{$tinbtv[0] -> TieuDe}}</a>
                            </h2>
                            <ul class="entry__meta">
                                <li class="entry__meta-author">
                                    <i class="ui-author"></i>
                                    <a href="#">ThanPM</a>
                                </li>
                                <li class="entry__meta-date">
                                    <i class="ui-date"></i>
                                    {{$tinbtv[0] -> Ngay}}
                                </li>
                                <li class="entry__meta-comments">
                                    <i class="ui-comments"></i>
                                    <a href="#">{{$tinbtv[0] -> SoLanXem}}</a>
                                </li>
                            </ul>
                        </div>
                        <div class="entry__excerpt">
                            <p>{{$tinbtv[0] -> TomTat}}</p>
                        </div>
                    </div>
                </article>
            </div>
            <div class="col-lg-5">
                <ul class="post-list-small">

                @foreach($tinbtv as $btv)
                    <li class="post-list-small__item">
                        <article class="post-list-small__entry">
                            <div class="post-list-small__body">
                                <h3 class="post-list-small__entry-title">
                                    <a href="{{action('TinController@chitiettin',['id'=>$btv->idTin])}}">{{$btv -> TieuDe}}</a>
                                </h3>
                                <ul class="entry__meta">
                                    <li class="entry__meta-date">
                                        <i class="ui-date"></i>
                                        {{$btv -> Ngay}}
                                    </li>
                                </ul>
                            </div>
                        </article>
                    </li>
                @endforeach

                </ul>
            </div>
        </div>
    </section> <!-- end editors picks -->

    <!-- Posts from categories -->
    
    <!-- end posts from categories -->

    <!-- Carousel posts -->
    <section class="section mb-20">
        <div class="title-wrap">
            <h3 class="section-title section-title--sm">Tin Tức Khác</h3>
            <div class="carousel-nav">
                <button class="carousel-nav__btn carousel-nav__btn--prev" aria-label="previous slide">
                    <i class="ui-arrow-left"></i>
                </button>
                <button class="carousel-nav__btn carousel-nav__btn--next" aria-label="next slide">
                    <i class="ui-arrow-right"></i>
                </button>
            </div>
        </div>

        <!-- Slider -->
        <div id="owl-posts" class="owl-carousel owl-theme">
        <?php
            $mtinmoi = DB::table('tin')
            ->join('loaitin', 'tin.idLT', '=', 'loaitin.idLT')
            ->where([['tin.AnHien',1], ['tin.lang','vi'], ['tin.SoLanXem', 'desc']])
            ->orderby('tin.Ngay', 'desc')
            ->offset(5)->limit(6)->get();
        ?>
        @foreach($mtinmoi as $mtm)
            <article class="entry">
                <div class="entry__img-holder">
                    <a href="{{action('TinController@chitiettin',['id'=>$mtm->idTin])}}">
                        <div class="thumb-container thumb-75">
                            <img data-src="{{$mtm -> urlHinh}}" src="{{$mtm -> urlHinh}}"
                                class="entry__img owl-lazy" alt="" />
                        </div>
                    </a>
                </div>

                <div class="entry__body">
                    <div class="entry__header">
                        <h2 class="entry__title entry__title--sm">
                            <a href="{{action('TinController@chitiettin',['id'=>$mtm->idTin])}}">{{$mtm -> TieuDe}}</a>
                        </h2>
                        <ul class="entry__meta">
                            <li class="entry__meta-date">
                                <i class="ui-date"></i>
                                {{$mtm -> Ngay}}
                            </li>
                            <li class="entry__meta-comments">
                                <i class="ui-comments"></i>
                                <a href="#">{{$mtm -> SoLanXem}}</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </article>
        @endforeach

        </div> <!-- end slider -->

    </section>

</div>