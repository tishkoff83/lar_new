@extends('layouts.master')

@section('content')
    <!-- Breadcrumbs -->
    <div class="container">
        <ul class="breadcrumbs">
            <li class="breadcrumbs__item">
                <a href="/" class="breadcrumbs__url">Главная</a>
            </li>
            <li class="breadcrumbs__item">
                <a href="index.html" class="breadcrumbs__url">Name</a>
            </li>
            <li class="breadcrumbs__item breadcrumbs__item--current">
               Cat
            </li>
        </ul>
    </div>


    <div class="main-container container" id="main-container">

        <!-- Content -->
        <div class="row">

            <!-- Posts -->
            <div class="col-lg-8 blog__content mb-72">
                <h1 class="page-title">World</h1>

                <div class="row card-row">
                    <div class="col-md-6">
                        <article class="entry card">
                            <div class="entry__img-holder card__img-holder">
                                <a href="single-post.html">
                                    <div class="thumb-container thumb-70">
                                        <img data-src="https://img.dni.ru/binaries/v3_main/446070.jpg" class="entry__img lazyload" alt="" />
                                    </div>
                                </a>
                                <a href="#" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--violet">world</a>
                            </div>

                            <div class="entry__body card__body">
                                <div class="entry__header">

                                    <h2 class="entry__title">
                                        <a href="single-post.html">Follow These Smartphone Habits of Successful Entrepreneurs</a>
                                    </h2>
                                    <ul class="entry__meta">
                                        <li class="entry__meta-author">
                                            <span>by</span>
                                            <a href="#">DeoThemes</a>
                                        </li>
                                        <li class="entry__meta-date">
                                            Jan 21, 2018
                                        </li>
                                    </ul>
                                </div>
                                <div class="entry__excerpt">
                                    <p>iPrice Group report offers insights on daily e-commerce activity in the ...</p>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-6">
                        <article class="entry card">
                            <div class="entry__img-holder card__img-holder">
                                <a href="single-post.html">
                                    <div class="thumb-container thumb-70">
                                        <img data-src="https://img.dni.ru/binaries/v3_main/446070.jpg" class="entry__img lazyload" alt="" />
                                    </div>
                                </a>
                                <a href="#" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--purple">fashion</a>
                            </div>

                            <div class="entry__body card__body">
                                <div class="entry__header">

                                    <h2 class="entry__title">
                                        <a href="single-post.html">3 Things You Can Do to Get Your Customers Talking About Your Business</a>
                                    </h2>
                                    <ul class="entry__meta">
                                        <li class="entry__meta-author">
                                            <span>by</span>
                                            <a href="#">DeoThemes</a>
                                        </li>
                                        <li class="entry__meta-date">
                                            Jan 21, 2018
                                        </li>
                                    </ul>
                                </div>
                                <div class="entry__excerpt">
                                    <p>iPrice Group report offers insights on daily e-commerce activity in the ...</p>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-6">
                        <article class="entry card">
                            <div class="entry__img-holder card__img-holder">
                                <a href="single-post.html">
                                    <div class="thumb-container thumb-70">
                                        <img data-src="https://img.dni.ru/binaries/v3_main/446070.jpg" class="entry__img lazyload" alt="" />
                                    </div>
                                </a>
                                <a href="#" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--orange">mining</a>
                            </div>

                            <div class="entry__body card__body">
                                <div class="entry__header">

                                    <h2 class="entry__title">
                                        <a href="single-post.html">Lose These 12 Bad Habits If You're Serious About Becoming a Millionaire</a>
                                    </h2>
                                    <ul class="entry__meta">
                                        <li class="entry__meta-author">
                                            <span>by</span>
                                            <a href="#">DeoThemes</a>
                                        </li>
                                        <li class="entry__meta-date">
                                            Jan 21, 2018
                                        </li>
                                    </ul>
                                </div>
                                <div class="entry__excerpt">
                                    <p>iPrice Group report offers insights on daily e-commerce activity in the ...</p>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-md-6">
                        <article class="entry card">
                            <div class="entry__img-holder card__img-holder">
                                <a href="single-post.html">
                                    <div class="thumb-container thumb-70">
                                        <img data-src="https://img.dni.ru/binaries/v3_main/446070.jpg" class="entry__img lazyload" alt="" />
                                    </div>
                                </a>
                                <a href="#" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--green">lifestyle</a>
                            </div>

                            <div class="entry__body card__body">
                                <div class="entry__header">

                                    <h2 class="entry__title">
                                        <a href="single-post.html">10 Horrible Habits You're Doing Right Now That Are Draining Your Energy</a>
                                    </h2>
                                    <ul class="entry__meta">
                                        <li class="entry__meta-author">
                                            <span>by</span>
                                            <a href="#">DeoThemes</a>
                                        </li>
                                        <li class="entry__meta-date">
                                            Jan 21, 2018
                                        </li>
                                    </ul>
                                </div>
                                <div class="entry__excerpt">
                                    <p>iPrice Group report offers insights on daily e-commerce activity in the ...</p>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>

                <!-- Pagination -->
                <nav class="pagination">
                    <span class="pagination__page pagination__page--current">1</span>
                    <a href="#" class="pagination__page">2</a>
                    <a href="#" class="pagination__page">3</a>
                    <a href="#" class="pagination__page">4</a>
                    <a href="#" class="pagination__page pagination__icon pagination__page--next"><i class="ui-arrow-right"></i></a>
                </nav>
            </div> <!-- end posts -->

            <!-- Sidebar -->
            <aside class="col-lg-4 sidebar sidebar--right">

                <!-- Widget Popular Posts -->
                <aside class="widget widget-popular-posts">
                    <h4 class="widget-title">Popular Posts</h4>
                    <ul class="post-list-small">
                        <li class="post-list-small__item">
                            <article class="post-list-small__entry clearfix">
                                <div class="post-list-small__img-holder">
                                    <div class="thumb-container thumb-100">
                                        <a href="single-post.html">
                                            <img data-src="img/content/post_small/post_small_1.jpg" src="img/empty.png" alt="" class=" lazyload">
                                        </a>
                                    </div>
                                </div>
                                <div class="post-list-small__body">
                                    <h3 class="post-list-small__entry-title">
                                        <a href="single-post.html">Follow These Smartphone Habits of Successful Entrepreneurs</a>
                                    </h3>
                                    <ul class="entry__meta">
                                        <li class="entry__meta-author">
                                            <span>by</span>
                                            <a href="#">DeoThemes</a>
                                        </li>
                                        <li class="entry__meta-date">
                                            Jan 21, 2018
                                        </li>
                                    </ul>
                                </div>
                            </article>
                        </li>
                        <li class="post-list-small__item">
                            <article class="post-list-small__entry clearfix">
                                <div class="post-list-small__img-holder">
                                    <div class="thumb-container thumb-100">
                                        <a href="single-post.html">
                                            <img data-src="img/content/post_small/post_small_2.jpg" src="img/empty.png" alt="" class=" lazyload">
                                        </a>
                                    </div>
                                </div>
                                <div class="post-list-small__body">
                                    <h3 class="post-list-small__entry-title">
                                        <a href="single-post.html">Lose These 12 Bad Habits If You're Serious About Becoming a Millionaire</a>
                                    </h3>
                                    <ul class="entry__meta">
                                        <li class="entry__meta-author">
                                            <span>by</span>
                                            <a href="#">DeoThemes</a>
                                        </li>
                                        <li class="entry__meta-date">
                                            Jan 21, 2018
                                        </li>
                                    </ul>
                                </div>
                            </article>
                        </li>
                        <li class="post-list-small__item">
                            <article class="post-list-small__entry clearfix">
                                <div class="post-list-small__img-holder">
                                    <div class="thumb-container thumb-100">
                                        <a href="single-post.html">
                                            <img data-src="img/content/post_small/post_small_3.jpg" src="img/empty.png" alt="" class=" lazyload">
                                        </a>
                                    </div>
                                </div>
                                <div class="post-list-small__body">
                                    <h3 class="post-list-small__entry-title">
                                        <a href="single-post.html">June in Africa: Taxi wars, smarter cities and increased investments</a>
                                    </h3>
                                    <ul class="entry__meta">
                                        <li class="entry__meta-author">
                                            <span>by</span>
                                            <a href="#">DeoThemes</a>
                                        </li>
                                        <li class="entry__meta-date">
                                            Jan 21, 2018
                                        </li>
                                    </ul>
                                </div>
                            </article>
                        </li>
                        <li class="post-list-small__item">
                            <article class="post-list-small__entry clearfix">
                                <div class="post-list-small__img-holder">
                                    <div class="thumb-container thumb-100">
                                        <a href="single-post.html">
                                            <img data-src="img/content/post_small/post_small_4.jpg" src="img/empty.png" alt="" class=" lazyload">
                                        </a>
                                    </div>
                                </div>
                                <div class="post-list-small__body">
                                    <h3 class="post-list-small__entry-title">
                                        <a href="single-post.html">PUBG Desert Map Finally Revealed, Here Are All The Details</a>
                                    </h3>
                                    <ul class="entry__meta">
                                        <li class="entry__meta-author">
                                            <span>by</span>
                                            <a href="#">DeoThemes</a>
                                        </li>
                                        <li class="entry__meta-date">
                                            Jan 21, 2018
                                        </li>
                                    </ul>
                                </div>
                            </article>
                        </li>
                    </ul>
                </aside> <!-- end widget popular posts -->

                <!-- Widget Newsletter -->
                <aside class="widget widget_mc4wp_form_widget">
                    <h4 class="widget-title">Newsletter</h4>
                    <p class="newsletter__text">
                        <i class="ui-email newsletter__icon"></i>
                        Subscribe for our daily news
                    </p>
                    <form class="mc4wp-form" method="post">
                        <div class="mc4wp-form-fields">
                            <div class="form-group">
                                <input type="email" name="EMAIL" placeholder="Your email" required="">
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-lg btn-color" value="Sign Up">
                            </div>
                        </div>
                    </form>
                </aside> <!-- end widget newsletter -->

                <!-- Widget Socials -->
                <aside class="widget widget-socials">
                    <h4 class="widget-title">Let's hang out on social</h4>
                    <div class="socials socials--wide socials--large">
                        <div class="row row-16">
                            <div class="col">
                                <a class="social social-facebook" href="#" title="facebook" target="_blank" aria-label="facebook">
                                    <i class="ui-facebook"></i>
                                    <span class="social__text">Facebook</span>
                                </a><!--
                  --><a class="social social-twitter" href="#" title="twitter" target="_blank" aria-label="twitter">
                                    <i class="ui-twitter"></i>
                                    <span class="social__text">Twitter</span>
                                </a><!--
                  --><a class="social social-youtube" href="#" title="youtube" target="_blank" aria-label="youtube">
                                    <i class="ui-youtube"></i>
                                    <span class="social__text">Youtube</span>
                                </a>
                            </div>
                            <div class="col">
                                <a class="social social-google-plus" href="#" title="google" target="_blank" aria-label="google">
                                    <i class="ui-google"></i>
                                    <span class="social__text">Google+</span>
                                </a><!--
                  --><a class="social social-instagram" href="#" title="instagram" target="_blank" aria-label="instagram">
                                    <i class="ui-instagram"></i>
                                    <span class="social__text">Instagram</span>
                                </a><!--
                  --><a class="social social-rss" href="#" title="rss" target="_blank" aria-label="rss">
                                    <i class="ui-rss"></i>
                                    <span class="social__text">Rss</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </aside> <!-- end widget socials -->

            </aside> <!-- end sidebar -->

        </div> <!-- end content -->
    </div> <!-- end main container -->

@endsection
