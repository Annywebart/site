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
                        <div id="portfolio">
                            <div class="full-width-box bottom-padding">

                                <div class="bg paralax fixed bg-image band-6"
                                     data-stellar-background-ratio="0.5">
                                    <div class="overlay"></div>
                                </div>
                                <div class="portfolio">
                                    <div class="filter-buttons white pull-left">
                                        <a href="#" class="active" data-filter="*">Все работы</a>
                                        <a href="#" data-filter=".web-design">Сайт-визитка</a>
                                        <a href="#" data-filter=".graphic-design">Портфолио</a>
                                        <a href="#" data-filter=".graphic-design">Корпоративный сайт</a>
                                        <a href="#" data-filter=".ecommerce">Каталог</a>
                                    </div>

                                    <div class="clearfix"></div>

                                    <div class="row filter-elements">
                                        <div class="span3 work-element web-design">
                                            <a href="portfolio-single.html" class="work">
                                                <img src="/template/img/content/portfolio-1.jpg" width="370" height="270"
                                                        alt=""> <span class="shadow"></span>

                                                <div class="bg-hover"></div>
                                                <div class="work-title">
                                                    <h3 class="title">Morbi non lacus ac sapien molestie</h3>

                                                    <div class="description">Web design</div>
                                                </div>
                                            </a>
                                        </div>
                                        <!-- .work-element -->

                                        <div class="span3 work-element graphic-design">
                                            <a href="portfolio-single.html" class="work"> <img
                                                        src="/template/img/content/portfolio-2.jpg" width="370" height="270"
                                                        alt=""> <span class="shadow"></span>

                                                <div class="bg-hover"></div>
                                                <div class="work-title">
                                                    <h3 class="title">Sed at turpis tortor bibendum</h3>

                                                    <div class="description">Web design</div>
                                                </div>
                                            </a>
                                        </div>
                                        <!-- .work-element -->

                                        <div class="span3 work-element ecommerce">
                                            <a href="portfolio-single.html" class="work"> <img
                                                        src="/template/img/content/portfolio-3.jpg" width="370" height="270"
                                                        alt=""> <span class="shadow"></span>

                                                <div class="bg-hover"></div>
                                                <div class="work-title">
                                                    <h3 class="title">Mauris quis sapien mass</h3>

                                                    <div class="description">Web design</div>
                                                </div>
                                            </a>
                                        </div>
                                        <!-- .work-element -->

                                        <div class="span3 work-element graphic-design">
                                            <a href="portfolio-single.html" class="work"> <img
                                                        src="/template/img/content/portfolio-4.jpg" width="370" height="270"
                                                        alt=""> <span class="shadow"></span>

                                                <div class="bg-hover"></div>
                                                <div class="work-title">
                                                    <h3 class="title">Donec pulvinar pulvinar arcu</h3>

                                                    <div class="description">Other</div>
                                                </div>
                                            </a>
                                        </div>
                                        <!-- .work-element -->

                                        <div class="span3 work-element graphic-design">
                                            <a href="portfolio-single.html" class="work"> <img
                                                        src="/template/img/content/portfolio-5.jpg" width="370" height="270"
                                                        alt=""> <span class="shadow"></span>

                                                <div class="bg-hover"></div>
                                                <div class="work-title">
                                                    <h3 class="title">Proin faucibus pretium</h3>

                                                    <div class="description">Web design</div>
                                                </div>
                                            </a>
                                        </div>
                                        <!-- .work-element -->

                                        <div class="span3 work-element ecommerce">
                                            <a href="portfolio-single.html" class="work"> <img
                                                        src="/template/img/content/portfolio-6.jpg" width="370" height="270"
                                                        alt=""> <span class="shadow"></span>

                                                <div class="bg-hover"></div>
                                                <div class="work-title">
                                                    <h3 class="title">Pellentesque in dui mauris</h3>

                                                    <div class="description">Other</div>
                                                </div>
                                            </a>
                                        </div>
                                        <!-- .work-element -->

                                        <div class="span3 work-element ecommerce">
                                            <a href="portfolio-single.html" class="work"> <img
                                                        src="/template/img/content/portfolio-7.jpg" width="370" height="270"
                                                        alt=""> <span class="shadow"></span>

                                                <div class="bg-hover"></div>
                                                <div class="work-title">
                                                    <h3 class="title">Vivamus auctor metus porta</h3>

                                                    <div class="description">Web design</div>
                                                </div>
                                            </a>
                                        </div>
                                        <!-- .work-element -->

                                        <div class="span3 work-element web-design">
                                            <a href="portfolio-single.html" class="work"> <img
                                                        src="/template/img/content/portfolio-8.jpg" width="370" height="270"
                                                        alt=""> <span class="shadow"></span>

                                                <div class="bg-hover"></div>
                                                <div class="work-title">
                                                    <h3 class="title">Quisque nec lorem vel metus ultrices</h3>

                                                    <div class="description">Web design</div>
                                                </div>
                                            </a>
                                        </div>
                                        <!-- .work-element -->
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <!-- .full-width-box -->
                        </div>
                    </div>

                    <!-- .employee -->
                </div>

            </article>
        </div>
    </section>
    <!-- #main -->

@stop
