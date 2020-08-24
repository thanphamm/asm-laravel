@extends('layout')
@section('post')
<div class="col-lg-8 blog__content mb-30">

    <!-- Breadcrumbs -->
    <ul class="breadcrumbs">
        <li class="breadcrumbs__item">
            <a href="" class="breadcrumbs__url"><i class="ui-home"></i></a>
        </li>
        <li class="breadcrumbs__item">
            <a href="" class="breadcrumbs__url">{{$theloai}}</a>
        </li>
        <li class="breadcrumbs__item breadcrumbs__item--current">
            {{$loaitin}}
        </li>
    </ul>

    <!-- standard post -->
    <article class="entry">

        <div class="single-post__entry-header entry__header">
            <a href="#" class="entry__meta-category">{{$loaitin}}</a>
            <h1 class="single-post__entry-title">{{$tin -> TieuDe}}</h1>

            <ul class="entry__meta">
                <li class="entry__meta-author">
                    <i class="ui-author"></i>
                    <a href="#">ThanPM</a>
                </li>
                <li class="entry__meta-date">
                    <i class="ui-date"></i>
                    {{$tin -> Ngay}}
                </li>
                <li class="entry__meta-comments">
                    <i class="ui-comments"></i>
                    <a href="#">{{$tin -> SoLanXem}}</a>
                </li>
            </ul>
        </div>

        <div class="entry__img-holder">
            <img src="{{$tin -> urlHinh}}" alt="" class="entry__img">
        </div>

        <!-- Share -->
        <div class="entry__share">
            <div class="socials entry__share-socials">
                <a href="#" class="social social-facebook entry__share-social social--wide social--medium">
                    <i class="ui-facebook"></i>
                    <span class="social__text">Share on Facebook</span>
                </a>
                <a href="#" class="social social-twitter entry__share-social social--wide social--medium">
                    <i class="ui-twitter"></i>
                    <span class="social__text">Share on Twitter</span>
                </a>
                <a href="#" class="social social-google-plus entry__share-social social--medium">
                    <i class="ui-google"></i>
                </a>
                <a href="#" class="social social-pinterest entry__share-social social--medium">
                    <i class="ui-pinterest"></i>
                </a>
            </div>
        </div> <!-- share -->

        <div class="entry__article">
            <?php echo $tin -> Content ?>

            <!-- Final Review -->
             <!-- end final review -->

            <!-- tags -->
            <div class="entry__tags">
                <span class="entry__tags-label">Tags:</span>

                @foreach ($tag as $t)
                <a href="#" rel="tag">{{$t}}</a>
                @endforeach

            </div> <!-- end tags -->

        </div> <!-- end entry article -->

        

        <!-- Author -->
        

        <!-- Prev / Next Post -->
        <nav class="entry-navigation">
            <div class="clearfix">
                <div class="entry-navigation--left">
                    <i class="ui-arrow-left"></i>
                    <span class="entry-navigation__label">Bài Trước</span>

                </div>
                <div class="entry-navigation--right">
                    <span class="entry-navigation__label">Bài Sau</span>
                    <i class="ui-arrow-right"></i>

                </div>
            </div>
        </nav>

        <!-- Related Posts -->
        <!-- <div class="related-posts">
            <div class="title-wrap mt-40">
                <h5 class="uppercase">Bài Viết Liên Quan</h5>
            </div>

            <div class="row row-20">

                <div class="col-md-4">
                    <article class="entry">
                        <div class="entry__img-holder">
                            <a href="single-post.html">
                                <div class="thumb-container thumb-75">
                                    <img data-src="img/blog/carousel_img_1.jpg" src="img/empty.png"
                                        class="entry__img lazyload" alt="">
                                </div>
                            </a>
                        </div>

                        <div class="entry__body">
                            <div class="entry__header">
                                <h2 class="entry__title entry__title--sm">
                                    <a href="single-post.html"></a>
                                </h2>
                            </div>
                        </div>
                    </article>
                </div>


            </div>
        </div> -->

    </article> <!-- end standard post -->


    <!-- Comments -->
    <div class="entry-comments mt-30">
        <div class="title-wrap mt-40">
            <h5 class="uppercase">Bình Luận</h5>
        </div>
        <ul class="comment-list">
        @foreach($bl as $bl)
            <li class="comment">
                <div class="comment-body">
                    <div class="comment-avatar">
                        <img alt="" src="img/blog/comment_1.jpg">
                    </div>
                    <div class="comment-text">
                        <h6 class="comment-author">{{$bl -> HoTen}}</h6>
                        <div class="comment-metadata">
                            <a href="#" class="comment-date">{{$bl -> Ngay}}</a>
                        </div>
                        <p>{{$bl -> NoiDung}}</p>
                        <a href="#" class="comment-reply">Trả Lời</a>
                    </div>
                </div>
        @endforeach
                <!-- end 3 comment -->

        </ul>
    </div> <!-- end comments -->


    <!-- Comment Form -->
    <div id="respond" class="comment-respond">
        <div class="title-wrap">
            <h5 class="comment-respond__title uppercase">Để Lại Bình Luận</h5>
        </div>
        <form id="form" class="comment-form" method="post" action="#">
            <p class="comment-form-comment">
                <!-- <label for="comment">Comment</label> -->
                <textarea id="comment" name="comment" rows="5" required="required" placeholder="Bình Luận*"></textarea>
            </p>

            <div class="row row-20">
                <div class="col-lg-4">
                    <input name="name" id="name" type="text" placeholder="Tên*">
                </div>
                <div class="col-lg-4">
                    <input name="email" id="email" type="email" placeholder="Email*">
                </div>
                <div class="col-lg-4">
                    <input name="website" id="website" type="text" placeholder="Website">
                </div>
            </div>

            <p class="comment-form-submit">
                <input type="submit" class="btn btn-lg btn-color btn-button" value="Đăng Bình Luận" id="submit-message">
            </p>

        </form>
    </div> <!-- end comment form -->

</div>
@endsection