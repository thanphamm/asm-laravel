@extends("layout")
@section('post')
<div class="col-lg-8 blog__content mb-30">

    <h1 class="mb-20">Search Result for 'Tech'</h1>
    <form class="search-form mb-20">
        <input type="text" placeholder="Search an article" class="search-input">
        <button type="submit" class="search-button btn btn-lg btn-color btn-button">
            <i class="ui-search search-icon"></i>
        </button>
    </form>

    <article class="entry post-list">
        <div class="entry__img-holder post-list__img-holder">
            <a href="single-post.html">
                <div class="thumb-container thumb-75">
                    <img data-src="img/blog/list_post_img_1.jpg" src="img/empty.png" class="entry__img lazyload" alt="">
                </div>
            </a>
        </div>

        <div class="entry__body post-list__body">
            <div class="entry__header">
                <a href="#" class="entry__meta-category">business</a>
                <h2 class="entry__title">
                    <a href="single-post.html">Your Business Is Talking. Do You Have the Tools to Listen?</a>
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
                <p>Point of Sale hardware, the till at a shop check out, has become very complex over the past ten
                    years. Modern POS hardware includes the cash till, bar-code readers...</p>
            </div>
        </div>
    </article>

    <article class="entry post-list">
        <div class="entry__img-holder post-list__img-holder">
            <a href="single-post.html">
                <div class="thumb-container thumb-75">
                    <img data-src="img/blog/list_post_img_2.jpg" src="img/empty.png" class="entry__img lazyload" alt="">
                </div>
            </a>
        </div>

        <div class="entry__body post-list__body">
            <div class="entry__header">
                <a href="#" class="entry__meta-category">tech</a>
                <h2 class="entry__title">
                    <a href="single-post.html">Removing Bitcoin payments from Steam is a smart move by Valve</a>
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
                <p>Point of Sale hardware, the till at a shop check out, has become very complex over the past ten
                    years. Modern POS hardware includes the cash till, bar-code readers...</p>
            </div>
        </div>
    </article>

    <article class="entry post-list">
        <div class="entry__img-holder post-list__img-holder">
            <a href="single-post.html">
                <div class="thumb-container thumb-75">
                    <img data-src="img/blog/list_post_img_3.jpg" src="img/empty.png" class="entry__img lazyload" alt="">
                </div>
            </a>
        </div>

        <div class="entry__body post-list__body">
            <div class="entry__header">
                <a href="#" class="entry__meta-category">fashion</a>
                <h2 class="entry__title">
                    <a href="single-post.html">This Is the Burberry Bag Every Fashion Girl Wanted 15 Years Ago</a>
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
                <p>Point of Sale hardware, the till at a shop check out, has become very complex over the past ten
                    years. Modern POS hardware includes the cash till, bar-code readers...</p>
            </div>
        </div>
    </article>

    <!-- Pagination -->
    <nav class="pagination">
        <span class="pagination__page pagination__page--current">1</span>
        <a href="#" class="pagination__page">2</a>
        <a href="#" class="pagination__page">3</a>
        <a href="#" class="pagination__page">4</a>
        <a href="#" class="pagination__page pagination__icon pagination__page--next"><i class="ui-arrow-right"></i></a>
    </nav>

</div> <!-- end col -->
@endsection