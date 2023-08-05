@extends('layout.master')
<head>
    <script type="text/javascript">
        function showTel(){
            document.getElementById('tel').classList.remove('hidden');
            document.getElementById('email').classList.add('hidden');

            document.getElementById('tel_bnt').classList.remove('btn-inverse');
            document.getElementById('tel_bnt').classList.add('btn-primary');

            document.getElementById('email_bnt').classList.remove('btn-primary');
            document.getElementById('email_bnt').classList.add('btn-inverse');
        }
        function showMail(){
            document.getElementById('tel').classList.add('hidden');
            document.getElementById('email').classList.remove('hidden');

            document.getElementById('tel_bnt').classList.remove('btn-primary');
            document.getElementById('tel_bnt').classList.add('btn-inverse');

            document.getElementById('email_bnt').classList.remove('btn-inverse');
            document.getElementById('email_bnt').classList.add('btn-primary');
        }

        document.addEventListener('DOMContentLoaded', function() {
            const inputs = Array.from(document.querySelectorAll('input[name=phone], input[name=email]'));
            
            const inputListener = e => {
                inputs
                .filter(input => input !== e.target)
                .forEach(i => (i.required = !e.target.value.length));
            };

            inputs.forEach(input => input.addEventListener('input', inputListener));
        });

    </script>
</head>
@section('title',  trans('cachet.subscriber.subscribe'). " | ". $siteTitle)

@section('description', trans('cachet.meta.description.subscribe', ['app' => $siteTitle]))

@section('content')
<div class="pull-right">
    <p><a class="btn btn-success btn-outline" href="{{ cachet_route('status-page') }}"><i class="ion ion-home"></i></a></p>
</div>

<div class="clearfix"></div>

@include('partials.errors')

<!-- TODO add translation -->

<div class="row">
    <div class="col-xs-12 col-lg-offset-2 col-lg-8">
        <div class="panel panel-default">
            <div class="panel-heading">{{ trans('cachet.subscriber.subscribe') }}</div>
            <div class="panel-body">
                <div class="bnt-container">
                    <button style="width: 100%; height:100%;" id="email_bnt" value="Email" onclick="showMail()" title="{{ Config::get('setting.enable_mail') ? trans('cachet.subscriber.email.subscribe') : trans('cachet.subscriber.email.disabled') }}" {{Config::get('setting.enable_mail') ? "" : "disabled"}} class="btn btn-primary {{Config::get('setting.enable_mail') ? '' : 'hidden' }}"><div class="ion-android-mail"/> Email</button>
                    <button style="width: 100%; height:100%;" id="tel_bnt" value="Phone" onclick="showTel()" title="{{Config::get('setting.enable_twilio') ? trans('cachet.subscriber.sms.subscribe') : trans('cachet.subscriber.sms.disabled')}}"  {{Config::get('setting.enable_twilio') ? "" : "disabled"}} class="btn btn-inverse {{Config::get('setting.enable_twilio') ? '' : 'hidden' }}"><div class="ion-ios-telephone"/> Phone</button>
                </div>
                <form action="{{ cachet_route('subscribe', [], 'post') }}" method="POST" class="form">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group {{Config::get('setting.enable_mail') ? : "hidden"}}" id="email" >
                        <input class="form-control" type="email" name="email" placeholder="email@example.com" required>
                    </div>
                    <div class="form-group {{Config::get('setting.enable_mail') ? "hidden" : '' }}" id="tel">
                        <input class="form-control" type="tel" name="phone"  placeholder="+49 123 456789" required>
                    </div>
                    <button type="submit" class="btn btn-success">{{ trans('cachet.subscriber.button') }}</button>
                </form>
            </div>
        </div>
    </div>
</div>
@stop
