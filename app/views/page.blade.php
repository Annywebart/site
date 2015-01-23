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
                        </div>
                        <!-- .employee -->
                    </div>

                </div>

            </article>
        </div>
    </section>
    <!-- #main -->

@stop
