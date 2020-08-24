<aside class="col-lg-4 sidebar sidebar--right">

    <!-- Widget Social Subscribers -->
 

    <!-- Widget Newsletter -->
    
    <!-- Widget Socials -->
    <div class="widget widget-socials">
            <h4 class="widget-title">Theo Dõi Chúng Tôi</h4>
            <div class="socials">
                <a class="social social-facebook social--large" href="https://www.facebook.com/tt24hol/" title="facebook" target="_blank"
                    aria-label="facebook">
                    <i class="ui-facebook"></i>
                </a>
                <!--
                --><a class="social social-twitter social--large" href="https://twitter.com/cherrymediavn" title="twitter" target="_blank"
                    aria-label="twitter">
                    <i class="ui-twitter"></i>
                </a>
                <!--
                --><a class="social social-google-plus social--large" href="https://www.google.com/search?sxsrf=ALeKk01Cz1mfNyKeMMQznqV0Rn4f1TzAEQ%3A1591425252793&source=hp&ei=5DjbXqXELofyrAHkxa74Dw&q=TIN+T%E1%BB%A8C+24H+ONLINE&oq=TIN+T%E1%BB%A8C+24H+ONLINE&gs_lcp=CgZwc3ktYWIQAzIFCAAQxAIyAggAMgYIABAWEB4yBggAEBYQHjIGCAAQFhAeMgYIABAWEB4yBggAEBYQHjIGCAAQFhAeMgYIABAWEB4yBggAEBYQHlCXA1iXA2CCB2gAcAB4AIABSYgBSZIBATGYAQCgAQKgAQGqAQdnd3Mtd2l6&sclient=psy-ab&ved=0ahUKEwilxoKHyezpAhUHOSsKHeSiC_8Q4dUDCAc&uact=5" title="google" target="_blank"
                    aria-label="google">
                    <i class="ui-google"></i>
                </a>
                <!--
                --><a class="social social-instagram social--large" href="https://www.instagram.com/tintucmoi24h/" title="instagram" target="_blank"
                    aria-label="instagram">
                    <i class="ui-instagram"></i>
                </a>
                <!--
                --><a class="social social-youtube social--large" href="https://www.youtube.com/channel/UCUmRGR3a-g13O6pG927KQmg" title="youtube" target="_blank"
                    aria-label="youtube">
                    <i class="ui-youtube"></i>
                </a>
                <!--
                --><a class="social social-rss social--large" href="https://vnexpress.net/rss" title="rss" target="_blank" aria-label="rss">
                    <i class="ui-rss"></i>
                </a>
            </div>
        </div> <!-- end widget socials -->
    <!-- Widget Popular/Latest Posts -->
    <div class="widget widget-tabpost">
        <div class="tabs widget-tabpost__tabs">
            <ul class="tabs__list widget-tabpost__tabs-list">
                <li class="tabs__item widget-tabpost__tabs-item tabs__item--active">
                    <a href="#tab-trending" class="tabs__url tabs__trigger widget-tabpost__tabs-url">Xu Hướng</a>
                </li>
                <li class="tabs__item widget-tabpost__tabs-item">
                    <a href="#tab-latest" class="tabs__url tabs__trigger widget-tabpost__tabs-url">Mới Nhất</a>
                </li>
                <li class="tabs__item widget-tabpost__tabs-item">
                    <a href="#tab-comments" class="tabs__url tabs__trigger widget-tabpost__tabs-url">Bình Luận</a>
                </li>
            </ul> <!-- end tabs -->

            <!-- tab content -->
            <div class="tabs__content tabs__content-trigger widget-tabpost__tabs-content">
           
           
                <div class="tabs__content-pane tabs__content-pane--active" id="tab-trending">
                    <ul class="post-list-small">
                    
                    <?php
                        $trending= DB::table('tin')
                        ->where([['AnHien',1], ['lang','vi'], ['TinNoiBat',1], ['SoLanXem', '>', 100]])
                        ->limit(4)->get();                    
                    ?>
                    @foreach ($trending as $td)
                        <li class="post-list-small__item">
                            <article class="post-list-small__entry clearfix">
                                <div class="post-list-small__img-holder">
                                    <div class="thumb-container thumb-75">
                                        <a href="{{action('TinController@chitiettin',['id'=>$td->idTin])}}">
                                            <img data-src="{{$td -> urlHinh}}" src="img/empty.png" alt=""
                                                class=" lazyload">
                                        </a>
                                    </div>
                                </div>
                                <div class="post-list-small__body">
                                    <h3 class="post-list-small__entry-title">
                                        <a href="{{action('TinController@chitiettin',['id'=>$td->idTin])}}">{{$td -> TieuDe}}</a>
                                    </h3>
                                    <ul class="entry__meta">
                                        <li class="entry__meta-date">
                                            <i class="ui-date"></i>
                                            {{$td -> Ngay}}
                                        </li>
                                    </ul>
                                </div>
                            </article>
                        </li>
                    @endforeach
                        
                    </ul>
                </div>

                <div class="tabs__content-pane" id="tab-latest">
                    <ul class="post-list-small">

                    <?php
                        $latest= DB::table('tin')
                        ->where([['AnHien',1], ['lang','vi'], ['SoLanXem', 'desc']])
                        ->orderby('Ngay', 'desc')
                        ->limit(4)->get();
                    ?>
                    @foreach ($latest as $lt)
                        <li class="post-list-small__item">
                            <article class="post-list-small__entry clearfix">
                                <div class="post-list-small__img-holder">
                                    <div class="thumb-container thumb-75">
                                        <a href="{{action('TinController@chitiettin',['id'=>$lt->idTin])}}">
                                            <img data-src="{{$lt -> urlHinh}}" src="img/empty.png" alt=""
                                                class=" lazyload">
                                        </a>
                                    </div>
                                </div>
                                <div class="post-list-small__body">
                                    <h3 class="post-list-small__entry-title">
                                        <a href="{{action('TinController@chitiettin',['id'=>$lt->idTin])}}">{{$lt -> TieuDe}}</a>
                                    </h3>
                                    <ul class="entry__meta">
                                        <li class="entry__meta-date">
                                            <i class="ui-date"></i>
                                            {{$lt -> Ngay}}
                                        </li>
                                    </ul>
                                </div>
                            </article>
                        </li>
                    @endforeach

                    </ul>
                </div>

                <div class="tabs__content-pane" id="tab-comments">
                    <ul class="post-list-small">

                    <?php
                        $comments= DB::table('ykien')
                        ->join('tin', 'tin.idTin', '=', 'ykien.idTin')
                        ->where([['tin.AnHien',1], ['tin.lang','vi']])
                        ->limit(4)->get();
                    ?>
                    @foreach ($comments as $cmt)
                        <li class="post-list-small__item">
                            <article class="post-list-small__entry clearfix">
                                <div class="post-list-small__img-holder">
                                    <div class="thumb-container thumb-75">
                                        <a href="{{action('TinController@chitiettin',['id'=>$cmt->idTin])}}">
                                            <img data-src="{{$cmt -> urlHinh}}" src="img/empty.png" alt=""
                                                class=" lazyload">
                                        </a>
                                    </div>
                                </div>
                                <div class="post-list-small__body">
                                    <h3 class="post-list-small__entry-title">
                                        <a href="{{action('TinController@chitiettin',['id'=>$cmt->idTin])}}">{{$cmt -> TieuDe}}</a>
                                    </h3>
                                    <ul class="entry__meta">
                                        <li class="entry__meta-date">
                                            <i class="ui-date"></i>
                                            {{$cmt -> Ngay}}
                                        </li>
                                    </ul>
                                </div>
                            </article>
                        </li>
                    @endforeach
                        
                    </ul>
                </div>

            </div> <!-- end tab content -->
        </div> <!-- end tabs -->
    </div> <!-- end widget popular/latest posts -->
    <!-- Widget Carousel -->
    <div class="widget">
        <h4 class="widget-title">Các Bài Viết</h4>
        <div id="owl-single" class="owl-carousel owl-theme">
            <?php
                $FP= DB::table('tin')
                ->where([['AnHien',1], ['lang','vi'], ['TinNoiBat',1], ['SoLanXem', 'desc']])
                ->orderby('Ngay', 'desc')
                ->offset(2)->limit(2)->get();                    
            ?>
            @foreach ($FP as $FP)
            <article class="entry">
                <div class="entry__img-holder mb-0">
                    <a href="{{action('TinController@chitiettin',['id'=>$FP->idTin])}}">
                        <div class="thumb-bg-holder">
                            <img style="max-height: 214px; overflow:hidden;" data-src="{{$FP -> urlHinh}}" src="{{$FP -> urlHinh}}"
                                class="entry__img owl-lazy" alt="">
                            <div class="bottom-gradient"></div>
                        </div>
                    </a>
                </div>

                <div class="thumb-text-holder">
                    <h2 class="thumb-entry-title thumb-entry-title--sm">
                        <a href="{{action('TinController@chitiettin',['id'=>$FP->idTin])}}">{{$FP -> TieuDe}}</a>
                    </h2>
                </div>
            </article>
            @endforeach
        </div>
    </div>
    <!-- Widget Ad 300 -->
    <div class="widget widget_media_image">
        <h4 class="widget-title" style="text-align:left;">Facebook</h4>
        <a href="#">
        <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FthanpmDCN%2F&tabs=timeline&width=300&height=350&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" 
        width="300" height="350" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
        </a>
    </div> <!-- end widget ad 300 -->

    

    

    

    <!-- Widget Tags -->
    <div class="widget widget_tag_cloud">
        <h4 class="widget-title">Thẻ Tin</h4>
        <?php
            $tags = DB::table('tags')
            ->where([['lang', 'vi'], ['AnHien',1]])
            ->limit(8)->get();
        ?>
        <div class="tagcloud">

        @foreach ($tags as $tag)
            <a href="#">{{$tag -> TenTag}}</a>
        @endforeach
           
        </div>
    </div>

</aside>