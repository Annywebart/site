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

						<div id="contact">
							<div class="contact-box overflow">

								<div class="row">
									<div class="span6 contact-info">
										{{ $model->content }}
									</div>
									<div class="span6">

										{{ Form::open([
											'action' => ['SiteController@contactPost'],
											'id' => 'contactform',
											'class' => 'register-form contact-form',
											])
										}}

											<h3 class="title"></h3>
											<div id="success">
												@if(Session::has('successMessage'))
													{{ Session::get('successMessage') }}
												@endif
											</div>

										    {{ HTML::decode(Form::label('name', 'Имя: <span class="required">*</span>')) }}
										    {{ Form::text('name', '', ['class' => 'input-block-level']); }}
										    @if ($errors->has('name')) <p class="text-danger">{{ $errors->first('name') }}</p> @endif

										    {{  HTML::decode(Form::label('email', 'Email: <span class="required">*</span>')) }}
										    {{ Form::text('email', '', ['class' => 'input-block-level']); }}
										    @if ($errors->has('email')) <p class="text-danger">{{ $errors->first('email') }}</p> @endif

										    {{ Form::label('phone', 'Телефон:') }}
										    {{ Form::text('phone', '', ['class' => 'input-block-level']); }}
										    @if ($errors->has('phone')) <p class="text-danger">{{ $errors->first('phone') }}</p> @endif

										    {{ HTML::decode(Form::label('message', 'Сообщение: <span class="required">*</span>')) }}
										    {{ Form::textarea('message', '',
										        array(
										            'class' => 'input-block-level',
										            'id' => 'message',
										    )) }}
										    @if ($errors->has('message')) <p class="text-danger">{{ $errors->first('message') }}</p> @endif

										    {{ Form::captcha() }}
										    @if ($errors->has('g-recaptcha-response')) <p class="text-danger">{{ $errors->first('g-recaptcha-response') }}</p> @endif

											<div class="clearfix"></div>
											<div class="buttons-box clearfix">
												{{ Form::submit('Отправить', array('id'=> 'submit', 'class' => 'btn pull-left')) }}
												<span class="required"><b>*</b> Обязательные поля</span>
											</div>
											<!-- .buttons-box -->
										{{ Form::close() }}
									</div>
								</div>
							</div>
							<!-- .contact-box -->
						</div>
                    </div>

                    <!-- .employee -->
                </div>
            </article>
        </div>
    </section>
    <!-- #main -->

@stop
