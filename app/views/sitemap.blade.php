@extends('layouts.main')
@section('content')
    <section id="main">
        <div class="container">
            <article class="content">

                <div id="about">

                    <div class="row bottom-padding">
                        <div class="span12 title-box">
                            <h1 class="title">{{ $model->title }}</h1>
                        </div>

                        <div class="span12 bottom-padding-mobile">
                            {{ $model->content }}

                            <ul id="sitemap">
                                @foreach($pages as $page)
                                    <li>
                                        <blockquote>
                                            <p><a href="{{ URL::to($page->alias) }}">{{ $page->menu_title }}</a></p>
                                            <small>{{ $page->title }}</small>
                                        </blockquote>
                                    </li>
                                    @if(count($page->children))
                                        <ul>
                                            @foreach($page->children as $child)
                                                <li>
                                                    <blockquote>
                                                        <p><a href="{{ URL::to($page->alias . '/' . $child->alias) }}">{{ $child->menu_title }}</a></p>
                                                        <small>{{ $child->title }}</small>
                                                    </blockquote>
                                                </li>
                                            @endforeach
                                        </ul>
                                    @endif
                                @endforeach
                            </ul>

                        </div>
                        <!-- .employee -->
                    </div>

                </div>

            </article>
        </div>
    </section>
    <!-- #main -->

@stop
