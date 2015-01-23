@extends('layouts.main')
@section('content')

    <section id="main">
        <div class="container">
            <article class="content">

                <div class="row bottom-padding">
                    <div class="span12 title-box">
                        <h1 class="title">{{ $model->title }}</h1>
                    </div>

                    <div class="span12 bottom-padding-mobile">
                        <div id="prices">
                            <div class="full-width-box bottom-padding">
                                <div class="bg fixed bg-image band-1">
                                    <div class="overlay"></div>
                                </div>
                                <div class="row pricings">
                                    <div class="span3">
                                        <div class="pricing">
                                            <div class="title">
                                                <a href="{{ URL::to('sajt-vizitka') }}">
                                                    Сайт-визитка
                                                </a>
                                            </div>
                                            <div class="price-box">
                                                <div class="icon pull-right circle">
                                                    <i class="icon-android"></i>
                                                </div>
                                                <div class="starting">Starting at</div>
                                                <div class="price">
                                                    $199<span>/month</span>
                                                </div>
                                            </div>
                                            <ul class="options">
                                                <li><span><i class="fa fa-check"></i></span>Responsive
                                                    Design</li>
                                                <li class="active"><span><i class="fa fa-check"></i></span>Styled
                                                    elements</li>
                                                <li><span><i class="fa fa-check"></i></span>Easy Setup</li>
                                            </ul>
                                            <div class="bottom-box">
                                                <a href="#" class="more">Read more <span>&#9002;</span></a>

                                                <div class="rating-box">
                                                    <div style="width: 60%" class="rating">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                             xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                                                             y="0px" width="73px" height="12px" viewBox="0 0 73 12"
                                                             enable-background="new 0 0 73 12" xml:space="preserve">
                                                            <polygon
                                                                    fill-rule="evenodd" clip-rule="evenodd" fill="#1e1e1e"
                                                                    points="6.5,0 8,5 13,5 9,7.7 10,12 6.5,9.2 3,12 4,7.7 0,5 5,5" />
                                                            <polygon
                                                                    fill-rule="evenodd" clip-rule="evenodd" fill="#1e1e1e"
                                                                    points="66.5,0 68,5 73,5 69,7.7 70,12 66.5,9.2 63,12 64,7.7 60,5 65,5 " />
                                                            <polygon
                                                                    fill-rule="evenodd" clip-rule="evenodd" fill="#1e1e1e"
                                                                    points="21.5,0 23,5 28,5 24,7.7 25,12 21.5,9.2 18,12 19,7.7 15,5 20,5 " />
                                                            <polygon
                                                                    fill-rule="evenodd" clip-rule="evenodd" fill="#1e1e1e"
                                                                    points="51.5,0 53,5 58,5 54,7.7 55,12 51.5,9.2 48,12 49,7.7 45,5 50,5 " />
                                                            <polygon
                                                                    fill-rule="evenodd" clip-rule="evenodd" fill="#1e1e1e"
                                                                    points="36.5,0 38,5 43,5 39,7.7 40,12 36.5,9.2 33,12 34,7.7 30,5 35,5 " />
                                                            </svg>
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>
                                                <button class="btn btn-large input-block-level">Buy
                                                    Now</button>
                                            </div>
                                        </div>
                                        <!-- .pricing -->
                                    </div>
                                    <div class="span3">
                                        <div class="pricing prising-info">
                                            <div class="title">
                                                <a href="{{ URL::to('portfolio') }}">
                                                    Портфолио
                                                </a>
                                            </div>
                                            <div class="price-box">
                                                <div class="icon pull-right circle">
                                                    <i class="icon-android"></i>
                                                </div>
                                                <div class="starting">Starting at</div>
                                                <div class="price">
                                                    $299<span>/month</span>
                                                </div>
                                            </div>
                                            <ul class="options">
                                                <li><span><i class="fa fa-check"></i></span>Responsive
                                                    Design</li>
                                                <li class="active"><span><i class="fa fa-check"></i></span>Styled
                                                    elements</li>
                                                <li><span><i class="fa fa-check"></i></span>Easy Setup</li>
                                            </ul>
                                            <div class="bottom-box">
                                                <a href="#" class="more">Read more <span>&#9002;</span></a>

                                                <div class="rating-box">
                                                    <div style="width: 80%" class="rating">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                             xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                                                             y="0px" width="73px" height="12px" viewBox="0 0 73 12"
                                                             enable-background="new 0 0 73 12" xml:space="preserve">
                                                            <polygon
                                                                    fill-rule="evenodd" clip-rule="evenodd" fill="#1e1e1e"
                                                                    points="6.5,0 8,5 13,5 9,7.7 10,12 6.5,9.2 3,12 4,7.7 0,5 5,5" />
                                                            <polygon
                                                                    fill-rule="evenodd" clip-rule="evenodd" fill="#1e1e1e"
                                                                    points="66.5,0 68,5 73,5 69,7.7 70,12 66.5,9.2 63,12 64,7.7 60,5 65,5 " />
                                                            <polygon
                                                                    fill-rule="evenodd" clip-rule="evenodd" fill="#1e1e1e"
                                                                    points="21.5,0 23,5 28,5 24,7.7 25,12 21.5,9.2 18,12 19,7.7 15,5 20,5 " />
                                                            <polygon
                                                                    fill-rule="evenodd" clip-rule="evenodd" fill="#1e1e1e"
                                                                    points="51.5,0 53,5 58,5 54,7.7 55,12 51.5,9.2 48,12 49,7.7 45,5 50,5 " />
                                                            <polygon
                                                                    fill-rule="evenodd" clip-rule="evenodd" fill="#1e1e1e"
                                                                    points="36.5,0 38,5 43,5 39,7.7 40,12 36.5,9.2 33,12 34,7.7 30,5 35,5 " />
                                                            </svg>
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>
                                                <button class="btn btn-info btn-large input-block-level">Buy
                                                    Now</button>
                                            </div>
                                        </div>
                                        <!-- .pricing -->
                                    </div>
                                    <div class="span3">
                                        <div class="pricing pricing-error">
                                            <div class="title">
                                                <a href="{{ URL::to('korporativnij-sajt') }}">
                                                    Корпоративный сайт
                                                </a>
                                            </div>
                                            <div class="price-box">
                                                <div class="icon pull-right circle">
                                                    <i class="icon-android"></i>
                                                </div>
                                                <div class="starting">Starting at</div>
                                                <div class="price">
                                                    $399<span>/month</span>
                                                </div>
                                            </div>
                                            <ul class="options">
                                                <li class="active"><span><i class="fa fa-check"></i></span>Responsive
                                                    Design</li>
                                                <li class="active"><span><i class="fa fa-check"></i></span>Styled
                                                    elements</li>
                                                <li class="active"><span><i class="fa fa-check"></i></span>Easy
                                                    Setup</li>
                                            </ul>
                                            <div class="bottom-box">
                                                <a href="#" class="more">Read more <span>&#9002;</span></a>

                                                <div class="rating-box">
                                                    <div style="width: 100%" class="rating">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                             xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                                                             y="0px" width="73px" height="12px" viewBox="0 0 73 12"
                                                             enable-background="new 0 0 73 12" xml:space="preserve">
                                                            <polygon
                                                                    fill-rule="evenodd" clip-rule="evenodd" fill="#1e1e1e"
                                                                    points="6.5,0 8,5 13,5 9,7.7 10,12 6.5,9.2 3,12 4,7.7 0,5 5,5" />
                                                            <polygon
                                                                    fill-rule="evenodd" clip-rule="evenodd" fill="#1e1e1e"
                                                                    points="66.5,0 68,5 73,5 69,7.7 70,12 66.5,9.2 63,12 64,7.7 60,5 65,5 " />
                                                            <polygon
                                                                    fill-rule="evenodd" clip-rule="evenodd" fill="#1e1e1e"
                                                                    points="21.5,0 23,5 28,5 24,7.7 25,12 21.5,9.2 18,12 19,7.7 15,5 20,5 " />
                                                            <polygon
                                                                    fill-rule="evenodd" clip-rule="evenodd" fill="#1e1e1e"
                                                                    points="51.5,0 53,5 58,5 54,7.7 55,12 51.5,9.2 48,12 49,7.7 45,5 50,5 " />
                                                            <polygon
                                                                    fill-rule="evenodd" clip-rule="evenodd" fill="#1e1e1e"
                                                                    points="36.5,0 38,5 43,5 39,7.7 40,12 36.5,9.2 33,12 34,7.7 30,5 35,5 " />
                                                            </svg>
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>
                                                <button class="btn btn-danger btn-large input-block-level">Buy
                                                    Now</button>
                                            </div>
                                        </div>
                                        <!-- .pricing -->
                                    </div>
                                    <div class="span3">
                                        <div class="pricing pricing-success">
                                            <div class="title">
                                                <a href="{{ URL::to('katalog') }}">
                                                    Каталог
                                                </a>
                                            </div>
                                            <div class="price-box">
                                                <div class="icon pull-right circle">
                                                    <i class="icon-android"></i>
                                                </div>
                                                <div class="starting">Starting at</div>
                                                <div class="price">
                                                    $499<span>/month</span>
                                                </div>
                                            </div>
                                            <ul class="options">
                                                <li class="active"><span><i class="fa fa-check"></i></span>Responsive
                                                    Design</li>
                                                <li class="active"><span><i class="fa fa-check"></i></span>Styled
                                                    elements</li>
                                                <li><span><i class="fa fa-check"></i></span>Easy Setup</li>
                                            </ul>
                                            <div class="bottom-box">
                                                <a href="#" class="more">Read more <span>&#9002;</span></a>

                                                <div class="rating-box">
                                                    <div style="width: 80%" class="rating">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                             xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                                                             y="0px" width="73px" height="12px" viewBox="0 0 73 12"
                                                             enable-background="new 0 0 73 12" xml:space="preserve">
                                                            <polygon
                                                                    fill-rule="evenodd" clip-rule="evenodd" fill="#1e1e1e"
                                                                    points="6.5,0 8,5 13,5 9,7.7 10,12 6.5,9.2 3,12 4,7.7 0,5 5,5" />
                                                            <polygon
                                                                    fill-rule="evenodd" clip-rule="evenodd" fill="#1e1e1e"
                                                                    points="66.5,0 68,5 73,5 69,7.7 70,12 66.5,9.2 63,12 64,7.7 60,5 65,5 " />
                                                            <polygon
                                                                    fill-rule="evenodd" clip-rule="evenodd" fill="#1e1e1e"
                                                                    points="21.5,0 23,5 28,5 24,7.7 25,12 21.5,9.2 18,12 19,7.7 15,5 20,5 " />
                                                            <polygon
                                                                    fill-rule="evenodd" clip-rule="evenodd" fill="#1e1e1e"
                                                                    points="51.5,0 53,5 58,5 54,7.7 55,12 51.5,9.2 48,12 49,7.7 45,5 50,5 " />
                                                            <polygon
                                                                    fill-rule="evenodd" clip-rule="evenodd" fill="#1e1e1e"
                                                                    points="36.5,0 38,5 43,5 39,7.7 40,12 36.5,9.2 33,12 34,7.7 30,5 35,5 " />
                                                            </svg>
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>
                                                <button class="btn btn-success btn-large input-block-level">Buy
                                                    Now</button>
                                            </div>
                                        </div>
                                        <!-- .pricing -->
                                    </div>
                                </div>
                            </div>
                            <!-- .full-width-box -->
                        </div>
                    </div>

                    <div class="span12 bottom-padding-mobile">
                        {{ $model->content }}
                    </div>

                    <!-- .employee -->
                </div>

            </article>
        </div>
    </section>
    <!-- #main -->

@stop
