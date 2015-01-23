<?php $menuWidget = app('MenuWidget') ?>
<!DOCTYPE html>
<html>
<head>
    <title>Заголовок</title>
    <meta class="viewport" name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link href="/template/img/favicon.ico" rel="shortcut icon">

    {{ HTML::style('template/css/docs.css') }}
    {{ HTML::style('template/css/buttons/social-icons.css') }}
    {{ HTML::style('template/css/buttons/animation.css') }}
    {{ HTML::style('template/css/font-awesome.min.css') }}
    {{ HTML::style('template/css/bootstrap.min.css') }}
    {{ HTML::style('template/css/jslider.css') }}
    {{ HTML::style('template/css/settings.css') }}
    {{ HTML::style('template/css/jquery.fancybox.css') }}
    {{ HTML::style('template/css/animate.css') }}
    {{ HTML::style('template/css/video-js.css') }}
    {{ HTML::style('template/css/style.css') }}
    {{ HTML::style('template/css/responsive.css') }}
    {{ HTML::style('template/css/pages.css') }}

    <!--[if IE]>
    {{ HTML::style('template/css/ie.css') }}
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!--[if IE 9 ]>
    {{ HTML::style('template/css/ie8.css') }}
    <![endif]-->
</head>
<body class="fixed-header">
<div class="page-box">
    <div class="page-box-content">

        <header class="header header-two">
            <div class="container">
                <div class="row">
                    <div class="span2 logo-box">
                        <a href="{{ URL::to('/') }}" class="logo">
                            <img src="/template/img/logo.svg" class="logo-img" alt="">
                        </a>
                    </div>
                    <div class="span8 primary">
                        <div class="navbar">
                            <a class="btn btn-navbar collapsed" data-toggle="collapse"
                               data-target=".primary .nav-collapse"> <span class="text">Меню</span>
                                <span class="icon-bar"></span> <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </a>
                            <nav class="nav-collapse collapse">
                                {{ $menuWidget->mainMenu() }}
                            </nav>
                        </div>
                    </div>
                    <!-- .primary -->

                    <div class="span2">
                        <div class="phone-header">
                            <a href="#"> <span>Связь с нами</span>
                                <svg xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                        width="16px" height="16px" viewBox="0 0 16 16"
                                        enable-background="new 0 0 16 16" xml:space="preserve">
                                        <path fill="#231F20"
                                              d="M11.001,0H5C3.896,0,3,0.896,3,2c0,0.273,0,11.727,0,12c0,1.104,0.896,2,2,2h6c1.104,0,2-0.896,2-2
                                              c0-0.273,0-11.727,0-12C13.001,0.896,12.105,0,11.001,0z M8,15c-0.552,0-1-0.447-1-1s0.448-1,1-1s1,0.447,1,1S8.553,15,8,15z
                                              M11.001,12H5V2h6V12z"/>
                                </svg>
                            </a>
                        </div>
                        <!-- .phone-header -->
                    </div>

                    <div class="phone-active span10">
                        <a href="#" class="close"><span>закрыть</span>&#215;</a>

                        <div class="title">Наши телефоны</div>
                        <div class="phone">
                            <strong>+38 (093) 183 34 51</strong>
                            <strong>+38 (093) 470 94 04</strong>
                        </div>
                    </div>

                </div>
                <!--.row -->
            </div>
        </header>
        <!-- .header -->

        @yield('content')

    </div>
    <!-- .page-box -->
</div>
<!-- .page-box-content -->

<footer id="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="span3 social">
                    <h3>Мы в социальных сетях</h3>

                    <p>Follow us in social media</p>
                    <a class="sbtnf sbtnf-rounded color color-hover icon-facebook"
                       href="#"></a> <a
                            class="sbtnf sbtnf-rounded color color-hover icon-twitter"
                            href="#"></a> <a
                            class="sbtnf sbtnf-rounded color color-hover icon-gplus" href="#"></a>
                    <a class="sbtnf sbtnf-rounded color color-hover icon-linkedin"
                       href="#"></a>
                </div>
                <div class="span3 newsletter">
                    <h3>Подписка</h3>

                    <p>Подписывайтесь на новости</p>

                    <form>
                        <input class="input-block-level" type="email">
                        <button class="submit">
                            <i class="fa fa-arrow-circle-o-right"></i>
                        </button>
                    </form>
                </div>
                {{ $menuWidget->bottomMenu() }}
            </div>
        </div>
    </div>
    <!-- .footer-top -->
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="span3 copyright">Копирайт &copy; 2015
                </div>
                <div class="span3 phone">
                    <div class="footer-icon">
                        <svg xmlns="http://www.w3.org/2000/svg"
                             xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                             width="16px" height="16px" viewBox="0 0 16 16"
                             enable-background="new 0 0 16 16" xml:space="preserve">
                                <path fill="#c6c6c6"
                                      d="M11.001,0H5C3.896,0,3,0.896,3,2c0,0.273,0,11.727,0,12c0,1.104,0.896,2,2,2h6c1.104,0,2-0.896,2-2
                                      c0-0.273,0-11.727,0-12C13.001,0.896,12.105,0,11.001,0z M8,15c-0.552,0-1-0.447-1-1s0.448-1,1-1s1,0.447,1,1S8.553,15,8,15z
                                      M11.001,12H5V2h6V12z"/>
                                </svg>
                    </div>

                    <strong class="title">Наши телефоны:</strong> +38 (093) 183 34 51 <br>
                    <strong>или</strong> +38 (093) 470 94 04
                </div>
                <div class="span3 address">
                    <div class="footer-icon">
                        <svg xmlns="http://www.w3.org/2000/svg"
                             xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                             width="16px" height="16px" viewBox="0 0 16 16"
                             enable-background="new 0 0 16 16" xml:space="preserve">
                                <g>
                                    <g>
                                        <path fill="#c6c6c6"
                                              d="M8,16c-0.256,0-0.512-0.098-0.707-0.293C7.077,15.491,2,10.364,2,6c0-3.309,2.691-6,6-6
                                      c3.309,0,6,2.691,6,6c0,4.364-5.077,9.491-5.293,9.707C8.512,15.902,8.256,16,8,16z M8,2C5.795,2,4,3.794,4,6
                                      c0,2.496,2.459,5.799,4,7.536c1.541-1.737,4-5.04,4-7.536C12.001,3.794,10.206,2,8,2z"/>
                                    </g>
                                    <g>
                                        <circle fill="#c6c6c6" cx="8.001" cy="6"
                                                r="2"/>
                                    </g>
                                </g>
                                </svg>
                    </div>
                    Тут должен быть адрес, <br/>
                    если б он был...
                </div>
                <div class="span3">
                    <a href="#" class="up pull-right"><i
                                class="icon-arrow-up icon-white"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- .footer-bottom -->
</footer>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="http://code.jquery.com/jquery-migrate-1.2.0.js"></script>
{{ HTML::script('template/js/bootstrap.min.js') }}
{{ HTML::script('template/js/price-regulator/jquery.slider.js') }}
{{ HTML::script('template/js/jquery.carouFredSel-6.2.1-packed.js') }}
{{ HTML::script('template/js/jquery.themepunch.plugins.min.js') }}
{{ HTML::script('template/js/jquery.themepunch.revolution.min.js') }}
{{ HTML::script('template/js/jquery.appear.js') }}
{{ HTML::script('template/js/jquery.easing.1.3.js') }}
{{ HTML::script('template/js/jquery.fancybox.pack.js') }}
{{ HTML::script('template/js/jquery.isotope.min.js') }}
{{ HTML::script('template/js/masonry.pkgd.min.js') }}
{{ HTML::script('template/js/selectBox.js') }}

<!-- Контакты на шапке -->
{{ HTML::script('template/js/main.js') }}

</body>
</html>