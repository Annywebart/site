<div id="order-site-form" style="display: none;">
    <div class="form-header">
        <h4 class="title">Заказать сайт</h4>
        <a id="close-order-site-form" href="javascript:void(0)" class="btn btn-small btn-danger">
            <span class="fa fa-remove"></span>
        </a>
    </div>
    <div class="form-body">

        {{ Form::open([
            'action' => ['OrderSiteWidget@orderPost'],
            'id' => 'order-form',
            'class' => 'register-form contact-form',
        ]) }}

        <div class="form-group">
            {{ HTML::decode(Form::label('name', 'Имя: <span class="required">*</span>')) }}
            {{ Form::text('name', '', ['class' => 'input-block-level']); }}
            @if ($errors->has('name')) <p class="text-danger">{{ $errors->first('name') }}</p> @endif
        </div>

        <div class="form-group">
            {{  HTML::decode(Form::label('email', 'Email:')) }}
            {{ Form::text('email', '', ['class' => 'input-block-level']); }}
            @if ($errors->has('email')) <p class="text-danger">{{ $errors->first('email') }}</p> @endif
        </div>

        <div class="form-group">
            {{ Form::label('phone', 'Телефон:') }}
            {{ Form::text('phone', '', ['class' => 'input-block-level']); }}
            @if ($errors->has('phone')) <p class="text-danger">{{ $errors->first('phone') }}</p> @endif
        </div>

        <div class="radio-group">
            {{ HTML::decode(Form::label('site_type', 'Тип сайта: <span class="required">*</span>')) }}
            <div class="type">
                {{ Form::radio('site_type', Order::SITE_TYPE_CART) }}
                <span>{{ Order::$siteTypeList[Order::SITE_TYPE_CART] }}</span>
            </div>
            <div class="type">
                {{ Form::radio('site_type', Order::SITE_TYPE_PORTFOLIO) }}
                <span>{{ Order::$siteTypeList[Order::SITE_TYPE_PORTFOLIO] }}</span>
            </div>
            <div class="type">
                {{ Form::radio('site_type', Order::SITE_TYPE_CORPORATE) }}
                <span>{{ Order::$siteTypeList[Order::SITE_TYPE_CORPORATE] }}</span>
            </div>
            <div class="type">
                {{ Form::radio('site_type', Order::SITE_TYPE_CATALOG) }}
                <span>{{ Order::$siteTypeList[Order::SITE_TYPE_CATALOG] }}</span>
            </div>
        </div>

        {{ HTML::decode(Form::label('message', 'Комментарий:')) }}
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

@if(Session::has('successMessage'))
<div id="order-site-message" style="display: block;">
    <div class="form-header">
        <h4 class="title">Заявка отправлена!</h4>
        <a id="close-order-site-message" href="javascript:void(0)" class="btn btn-small btn-danger">
            <span class="fa fa-remove"></span>
        </a>
    </div>
    <div class="form-body">
        <div id="success">
            {{ Session::get('successMessage') }}
        </div>
    </div>
</div>
@endif

<script>
    $('#open-order-site-form').click(function() {
        $('#order-site-form').show();
    });
    $('#close-order-site-form').click(function() {
        $('#order-site-form').hide();
    });
    $('#close-order-site-message').click(function() {
        $('#order-site-message').hide();
    });
</script>