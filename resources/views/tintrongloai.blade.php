@extends('layout')
@section('post')
<div class="col-lg-8 blog__content mb-30">

    <div class="title-wrap">
        <h3>{{$TenTL}} / {{$TenLT}}</h3>
    </div>

    <div class="row">

        @foreach ($listtin as $td)
        <div class="col-md-6">
            <article class="entry">
                <div class="entry__img-holder">
                    <a href="{{action('TinController@chitiettin',['id'=>$td->idTin])}}">
                        <div class="thumb-container thumb-75">
                            <img data-src="{{$td -> urlHinh}}" src="img/empty.png" class="entry__img lazyload" alt="">
                        </div>
                    </a>
                </div>

                <div class="entry__body">
                    <div class="entry__header">
                        <h2 class="entry__title">
                            <a href="{{action('TinController@chitiettin',['id'=>$td->idTin])}}">{{$td -> TieuDe}}</a>
                        </h2>
                        <ul class="entry__meta">
                            <li class="entry__meta-author">
                                <i class="ui-author"></i>
                                <a href="#">ThanPM</a>
                            </li>
                            <li class="entry__meta-date">
                                <i class="ui-date"></i>
                                {{$td -> Ngay}}
                            </li>
                            <li class="entry__meta-comments">
                                <i class="ui-comments"></i>
                                <a href="#">{{$td -> SoLanXem}}</a>
                            </li>
                        </ul>
                    </div>
                    <div class="entry__excerpt">
                        <p>{{$td -> TomTat}}</p>
                    </div>
                </div>
            </article>
        </div>
        @endforeach

    </div>
    <?php echo $listtin->links();?>
    
</div>

@endsection