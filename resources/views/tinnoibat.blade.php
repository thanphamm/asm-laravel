<?php
    $tinnoibat = DB::table('tin')
    ->join('loaitin', 'tin.idLT', '=', 'loaitin.idLT')
    ->where([['tin.AnHien',1], ['tin.lang', 'vi'], ['TinNoiBat', 1]])
    ->orderby('Ngay', 'desc')
    ->offset(0)->limit(3)->get();
    
    $tinnoibat1 = DB::table('tin')
    ->where([['tin.AnHien',1], ['tin.lang', 'vi'], ['TinNoiBat', 1]])
    ->orderby('Ngay', 'desc')
    ->offset(3)->limit(2)->get();

    $trending= DB::table('tin')
    ->where([['AnHien',1], ['lang','vi'], ['TinNoiBat',1], ['SoLanXem', 'desc']])
    ->limit(4)->get();
                    
?>

<div class="trending-now">
    <div class="container relative">
        <span class="trending-now__label">Xu Hướng</span>
        <ul class="newsticker">

        @foreach ($trending as $td)
            <li class="newsticker__item"><a href="{{action('TinController@chitiettin',['id'=>$td->idTin])}}" class="newsticker__item-url">{{$td -> TieuDe}}</a></li>
        @endforeach
        
        </ul>
        <div class="newsticker-buttons">
            <button class="newsticker-button newsticker-button--prev" id="newsticker-button--prev"
                aria-label="next article"><i class="ui-arrow-left"></i></button>
            <button class="newsticker-button newsticker-button--next" id="newsticker-button--next"
                aria-label="previous article"><i class="ui-arrow-right"></i></button>
        </div>
    </div>
</div>

<section class="featured-posts-grid bg-dark">
    <div class="container clearfix">

        <!-- Large post slider -->
        <div class="featured-posts-grid__item featured-posts-grid__item--lg">
            <div id="owl-hero-grid" class="owl-carousel owl-theme owl-carousel--dots-inside">
                @foreach ($tinnoibat as $tnb)
                <article class="entry featured-posts-grid__entry">
                    <div class="thumb-bg-holder owl-lazy" data-src="{{$tnb -> urlHinh}}">
                        <img src="{{$tnb -> urlHinh}}" alt="" class="d-none">
                        <a href="{{action('TinController@chitiettin',['id'=>$tnb->idTin])}}" class="thumb-url"></a>
                        <div class="bottom-gradient"></div>
                    </div>

                    <div class="thumb-text-holder">
                        <a href="{{action('TinController@chitiettin',['id'=>$tnb->idTin])}}"
                            class="entry__meta-category entry__meta-category-color entry__meta-category-color--salad">{{$tnb -> Ten}}</a>
                        <h2 class="thumb-entry-title">
                            <a href="{{action('TinController@chitiettin',['id'=>$tnb->idTin])}}">{{$tnb -> TieuDe}}</a>
                        </h2>
                    </div>
                </article>
                @endforeach
            </div> <!-- end owl slider -->
        </div> <!-- end large post slider -->

        @foreach($tinnoibat1 as $tnb1)
        <div class="featured-posts-grid__item featured-posts-grid__item--sm">
            <article class="entry featured-posts-grid__entry">
                <div class="thumb-bg-holder" style="background-image: url({{$tnb1 -> urlHinh}});">
                    <a href="{{action('TinController@chitiettin',['id'=>$tnb1->idTin])}}" class="thumb-url"></a>
                    <div class="bottom-gradient"></div>
                </div>

                <div class="thumb-text-holder">
                    <h2 class="thumb-entry-title thumb-entry-title--sm">
                        <a href="{{action('TinController@chitiettin',['id'=>$tnb1->idTin])}}">{{$tnb1 -> TieuDe}}</a>
                    </h2>
                    <ul class="entry__meta">
                        <li class="entry__meta-author">
                            <i class="ui-author"></i>
                            <a href="{{action('TinController@chitiettin',['id'=>$tnb1->idTin])}}">ThanPM</a>
                        </li>
                        <li class="entry__meta-date">
                            <i class="ui-date"></i>
                            {{$tnb1 -> Ngay}}
                        </li>
                        <li class="entry__meta-comments">
                            <i class="ui-comments"></i>
                            <a href="{{action('TinController@chitiettin',['id'=>$tnb1->idTin])}}">{{$tnb1 -> SoLanXem}}</a>
                        </li>
                    </ul>
                </div>
            </article>
        </div>
        @endforeach

    </div>
</section>