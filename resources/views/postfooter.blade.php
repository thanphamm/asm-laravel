<?php
    $tinmoi= DB::table('tin')
    ->join('loaitin', 'tin.idLT', '=', 'loaitin.idLT')
    ->where([['tin.AnHien', 1], ['tin.lang','vi'], ['tin.tinnoibat', 1], ['tin.SoLanXem', 'asc']])
    ->orderby('tin.Ngay', 'asc')
    ->limit(2)->get();
?>

<div class="col-lg-3 col-md-6">
    <h4 class="widget-title">Tin Tức Mới</h4>
    <ul class="post-list-small">

    @foreach($tinmoi as $tm)
        <li class="post-list-small__item">
            <article class="post-list-small__entry clearfix">
                <div class="post-list-small__img-holder">
                    <div class="thumb-container thumb-75">
                        <a href="single-post.html">
                            <img data-src="{{$tm -> urlHinh}}" src="img/empty.png" alt="" class="lazyload">
                        </a>
                    </div>
                </div>
                <div class="post-list-small__body">
                    <h3 class="post-list-small__entry-title">
                        <a href="single-post.html">{{$tm -> TieuDe}}</a>
                    </h3>
                    <ul class="entry__meta">
                        <li class="entry__meta-date">
                            <i class="ui-date"></i>
                            {{$tm -> Ngay}}
                        </li>
                    </ul>
                </div>
            </article>
        </li>
    @endforeach
    
    </ul>
</div>