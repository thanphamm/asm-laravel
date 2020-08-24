<?php
    $tieude= DB::table('theloai')
    ->where([['AnHien',1], ['lang','vi']])
    ->limit(4)->get();
?>

<div class="col-lg-3 col-md-6">
    <div class="widget widget_nav_menu">
        <h4 class="widget-title">Liên Kết Hữu Ích</h4>
        <ul>
        @foreach($tieude as $td)
            <li><a href="{{action('TinController@tintrongloai',['id'=>$td->idTL])}}">{{$td -> TenTL}}</a></li>
        @endforeach
        </ul>
    </div>
</div>