@extends('layout.dashboard')

@section('content')
    <div class="header">
        <div class="sidebar-toggler visible-xs">
            <i class="icon ion-navicon"></i>
        </div>
        <span class="uppercase">
            <i class="ion ion-person"></i> {{ trans('dashboard.team.profile') }}
        </span>
    </div>
    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">
                @include('partials.dashboard.errors')
                <form name="UserForm" class="form-vertical" role="form" action="/dashboard/user" method="POST">
                    <fieldset>
                        <div class="form-group">
                            <label>{{ trans('forms.user.username') }}</label>
                            <input type="text" class="form-control" name="username" value="{{ Auth::user()->username }}" required />
                        </div>
                        <div class="form-group">
                            <label>{{ trans('forms.user.email') }}</label>
                            <input type="email" class="form-control" name="email" value="{{ Auth::user()->email }}" required />
                        </div>
                        <div class="form-group">
                            <label>{{ trans('forms.user.password') }}</label>
                            <input type="password" class="form-control" name="password" value="" />
                        </div>
                        <hr />
                        <div class="form-group">
                            <label>{{ trans('forms.user.api-token') }}</label>
                            <input type="text" class="form-control" name="api_key" disabled value="{{ Auth::user()->api_key }}" />
                            <span class="help-block">{{ trans('forms.user.api-token-help') }}</span>
                        </div>
                        <hr />
                        <div class="form-group">
                            <label class="checkbox-inline">
                                <input type="hidden" name="google2fa" value="0" />
                                <input type='checkbox' name="google2fa" value="1" {{ Auth::user()->hasTwoFactor ? "checked" : "" }} />
                                {{ trans('forms.setup.enable_google2fa') }}
                            </label>
                        </div>
                        @if(Auth::user()->hasTwoFactor)
                        <div class="form-group">
                            <?php
                            $google2fa_url = PragmaRX\Google2FA\Vendor\Laravel\Facade::getQRCodeGoogleUrl(
                                'CachetHQ',
                                Auth::user()->email,
                                Auth::user()->google_2fa_secret
                            );
                            ?>
                            <img src="{{ $google2fa_url }}" class="img-responsive" />
                            <span class='help-block'>{{ trans('forms.user.2fa.help') }}</span>
                        </div>
                        @endif
                    </fieldset>

                    <button type="submit" class="btn btn-success">{{ trans('forms.update') }}</button>
                    <a href="/dashboard/user/{{ Auth::user()->id }}/api/regen" class="btn btn-warning">{{ trans('cachet.api.regenerate') }}</a>
                </form>
            </div>
        </div>
    </div>
@stop
