<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Новости: @yield('title')</title>

    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="">

    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,600,700%7CSource+Sans+Pro:400,600,700' rel='stylesheet'>

    <!-- Css -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('css/font-icons.css')}}" />
    <link rel="stylesheet" href="{{asset('css/style.css')}}" />

    <!-- Favicons -->
    <link rel="shortcut icon" href="img/favicon.ico">
    <link rel="apple-touch-icon" href="img/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

    <!-- Lazyload (must be placed in head in order to work) -->
    <script src="js/lazysizes.min.js"></script>

</head>

<body class="bg-light style-default style-rounded">

<!-- Preloader -->
<div class="loader-mask">
    <div class="loader">
        <div></div>
    </div>
</div>

<!-- Bg Overlay -->
<div class="content-overlay"></div>

<!-- Sidenav -->
<header class="sidenav" id="sidenav">

    <!-- close -->
    <div class="sidenav__close">
        <button class="sidenav__close-button" id="sidenav__close-button" aria-label="close sidenav">
            <i class="ui-close sidenav__close-icon"></i>
        </button>
    </div>

    <!-- Nav -->
    <nav class="sidenav__menu-container">
        <ul class="sidenav__menu" role="menubar">

            @foreach($v_categories as $one)
                <li>
                    <a href="{{ route('categories', $one->slug) }}" class="sidenav__menu-url">{{$one->title}}</a>
                </li>
        @endforeach

    </nav>

    <div class="socials sidenav__socials">
        <a class="social social-facebook" href="#" target="_blank" aria-label="facebook">
            <i class="ui-facebook"></i>
        </a>
        <a class="social social-instagram" href="#" target="_blank" aria-label="instagram">
            <i class="ui-instagram"></i>
        </a>
    </div>
</header> <!-- end sidenav -->

<main class="main oh" id="main">

    <!-- Top Bar -->
    <div class="top-bar d-none d-lg-block">
        <div class="container">
            <div class="row">

                <!-- Top menu -->
                <div class="col-lg-6">
                    <ul class="top-menu">
                        <li><a href="{{asset('about')}}">О проекте</a></li>
                        <li><a href="{{asset('adv')}}">Реклама</a></li>
                        <li><a href="{{asset('contact')}}">Контакты</a></li>
                    </ul>
                </div>

                <!-- Socials -->
                <div class="col-lg-6">
                    <ul class="top-menu">
                    @guest
                            <ul class="top-menu">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Вход') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Регистрация') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    </ul>
                    @endguest

{{--                    <div class="socials nav__socials socials--nobase socials--white justify-content-end">--}}
{{--                        <a class="social social-facebook" href="#" target="_blank" aria-label="facebook">--}}
{{--                            <i class="ui-facebook"></i>--}}
{{--                        </a>--}}
{{--                        <a class="social social-instagram" href="#" target="_blank" aria-label="instagram">--}}
{{--                            <i class="ui-instagram"></i>--}}
{{--                        </a>--}}
{{--                    </div>--}}

                </div>

            </div>
        </div>
    </div> <!-- end top bar -->

    <!-- Navigation -->
    <header class="nav">

        <div class="nav__holder nav--sticky">
            <div class="container relative">
                <div class="flex-parent">

                    <!-- Side Menu Button -->
                    <button class="nav-icon-toggle" id="nav-icon-toggle" aria-label="Open side menu">
              <span class="nav-icon-toggle__box">
                <span class="nav-icon-toggle__inner"></span>
              </span>
                    </button>

                    <!-- Logo -->
                    <a href="/">
                    <span style="line-height: 40px;margin-left:20px;font-weight: normal;font-size: 21px;">
                    <span style="color:#353535;">новости</span>
                    <span style="color:#fff;background: #ba0505;padding:2px 7px 2px 7px;border-radius: 5px;">24</span>
                    </span>
                    </a>
{{--                    <a href="index.html" class="logo">--}}
{{--                        <img class="logo__img" src="img/logo_default.png" srcset="img/logo_default.png 1x, img/logo_default@2x.png 2x" alt="logo">--}}
{{--                    </a>--}}

                    <!-- Nav-wrap -->
                    <nav class="flex-child nav__wrap d-none d-lg-block">
                        <ul class="nav__menu">

                            <li class="active">
                                <a href="index.html">Главная</a>
                            </li>

                            <li>
                                <a href="#">Статьи</a>
                            <li>
                                <!-- end megamenu -->
                            </li>

                            <li>
                                <a href="#">Галереи</a>
                            </li>

                            <li>
                                <a href="#">Видео</a>
                            </li>


                        </ul> <!-- end menu -->
                    </nav> <!-- end nav-wrap -->

                    <!-- Nav Right -->
                    <div class="nav__right">

                        <!-- Search -->
                        <div class="nav__right-item nav__search">
                            <a href="#" class="nav__search-trigger" id="nav__search-trigger">
                                <i class="ui-search nav__search-trigger-icon"></i>
                            </a>
                            <div class="nav__search-box" id="nav__search-box">
                                <form class="nav__search-form">
                                    <input type="text" placeholder="Поиск" class="nav__search-input">
                                    <button type="submit" class="search-button btn btn-lg btn-color btn-button">
                                        <i class="ui-search nav__search-icon"></i>
                                    </button>
                                </form>
                            </div>
                        </div>

                    </div> <!-- end nav right -->

                </div> <!-- end flex-parent -->
            </div> <!-- end container -->

        </div>
    </header> <!-- end navigation -->


@yield('content')

<!-- Footer -->
    <footer class="footer footer--dark">
        <div class="container">
            <div class="footer__widgets">
                <div class="row">

                    <div class="col-lg-3 col-md-6">
                        <aside class="widget widget-logo">
                            <a href="index.html">
                                <!-- <img src="img/logo_default_white.png" srcset="img/logo_default_white.png 1x, img/logo_default_white@2x.png 2x" class="logo__img" alt=""> -->
                            </a>
                            <p class="copyright">
                                © 2018 Deus | Made by <a href="#">Themes</a>
                            </p>
                            <div class="socials socials--large socials--rounded mb-24">
                                <a href="#" class="social social-facebook" aria-label="facebook"><i class="ui-facebook"></i></a>
                                <a href="#" class="social social-twitter" aria-label="twitter"><i class="ui-twitter"></i></a>
                                <a href="#" class="social social-google-plus" aria-label="google+"><i class="ui-google"></i></a>
                                <a href="#" class="social social-youtube" aria-label="youtube"><i class="ui-youtube"></i></a>
                                <a href="#" class="social social-instagram" aria-label="instagram"><i class="ui-instagram"></i></a>
                            </div>
                        </aside>
                    </div>

                    <div class="col-lg-2 col-md-6">
                        <aside class="widget widget_nav_menu">
                            <h4 class="widget-title">Useful Links</h4>
                            <ul>
                                <li><a href="about.html">About</a></li>
                                <li><a href="contact.html">News</a></li>
                                <li><a href="categories.html">Advertise</a></li>
                                <li><a href="shortcodes.html">Support</a></li>
                                <li><a href="shortcodes.html">Features</a></li>
                                <li><a href="shortcodes.html">Contact</a></li>
                            </ul>
                        </aside>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <aside class="widget widget-popular-posts">
                            <h4 class="widget-title">Popular Posts</h4>
                            <ul class="post-list-small">
                                <li class="post-list-small__item">
                                    <article class="post-list-small__entry clearfix">
                                        <div class="post-list-small__img-holder">
                                            <div class="thumb-container thumb-100">
                                                <a href="single-post.html">
                                                    <img data-src="img/content/post_small/post_small_1.jpg" src="img/empty.png" alt="" class="post-list-small__img--rounded lazyload">
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
                                                    <img data-src="img/content/post_small/post_small_2.jpg" src="img/empty.png" alt="" class="post-list-small__img--rounded lazyload">
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
                            </ul>
                        </aside>
                    </div>

                    <div class="col-lg-3 col-md-6">
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
                        </aside>
                    </div>

                </div>
            </div>
        </div> <!-- end container -->
    </footer> <!-- end footer -->

    <div id="back-to-top">
        <a href="#top" aria-label="Go to top"><i class="ui-arrow-up"></i></a>
    </div>

</main> <!-- end main-wrapper -->


<!-- jQuery Scripts -->
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/easing.min.js')}}"></script>
<script src="{{asset('js/owl-carousel.min.js')}}"></script>
<script src="{{asset('js/flickity.pkgd.min.js')}}"></script>
<script src="{{asset('js/twitterFetcher_min.js')}}"></script>
<script src="{{asset('js/jquery.newsTicker.min.js')}}"></script>
<script src="{{asset('js/modernizr.min.js')}}"></script>
<script src="{{asset('js/scripts.js')}}"></script>

</body>
</html>
