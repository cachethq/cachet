@extends('layout.dashboard')

@section('content')
<div class="header">
    <div class="sidebar-toggler visible-xs">
        <i class="ion ion-navicon"></i>
    </div>
    <span class="uppercase">
        <i class="ion ion-ios-person-outline"></i> {{ trans('dashboard.team.profile') }}
    </span>
</div>
<div class="content-wrapper">
    <div class="row">
        <div class="col-sm-12">
            @include('partials.errors')
            <form name="UserForm" class="form-vertical" role="form" action="{{ cachet_route('dashboard.user', [], 'post') }}" method="POST">
                {!! csrf_field() !!}
                <fieldset>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <a href="https://gravatar.com"><img src="{{ $currentUser->avatar }}" class="img-responsive img-thumbnail" title="{{ trans('forms.user.gravatar') }}" data-toggle="tooltip"></a>
                            </div>
                            <div class="form-group">
                                <label>{{ trans('forms.user.username') }}</label>
                                <input type="text" class="form-control" name="username" value="{{ $currentUser->username }}" required placeholder="{{ trans('forms.user.username') }}">
                            </div>
                            <div class="form-group">
                                <label>{{ trans('forms.user.email') }}</label>
                                <input type="email" class="form-control" name="email" value="{{ $currentUser->email }}" required placeholder="{{ trans('forms.user.email') }}">
                            </div>
                            <div class="form-group">
                                <label>{{ trans('forms.user.password') }}</label>
                                <input type="password" class="form-control" name="password" value="" placeholder="{{ trans('forms.user.password') }}">
                            </div>
                            <hr>
                            <div class="form-group">
                                <label>{{ trans('forms.user.api-token') }}</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="api_key" readonly value="{{ $currentUser->api_key }}" placeholder="{{ trans('forms.user.api-token') }}">
                                    <a href="{{ cachet_route('dashboard.user.api.regen', [$currentUser->id]) }}" class="input-group-addon btn btn-danger">{{ trans('cachet.api.regenerate') }}</a>
                                </div>
                                <span class="help-block">{{ trans('forms.user.api-token-help') }}</span>
                            </div>
                            <hr>
                            <div class="form-group">
                                <label class="checkbox-inline">
                                    <input type="hidden" name="google2fa" value="0">
                                    <input type='checkbox' name="google2fa" value="1" {{ $currentUser->hasTwoFactor ? "checked" : "" }}>
                                    {{ trans('forms.setup.enable_google2fa') }}
                                </label>
                            </div>
                            @if($currentUser->hasTwoFactor)
                            <div class="form-group">
                                <?php
                                $google2fa = (new \PragmaRX\Google2FA\Google2FA());
                                $google2fa_url = $google2fa->getQRCodeUrl(
                                    'Cachet',
                                    $currentUser->email,
                                    $currentUser->google_2fa_secret
                                );
                                ?>
                                <img width="200" height="200" src="{{(new \chillerlan\QRCode\QRCode())->render($google2fa_url)}}"  alt="qr code"/>
                                <span class='help-block'>{!! trans('forms.user.2fa.help') !!}</span>
                            </div>
                            @endif

                            <button type="submit" class="btn btn-success">{{ trans('forms.update') }}</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
</div>
@stop
