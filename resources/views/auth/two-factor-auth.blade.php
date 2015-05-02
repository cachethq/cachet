@extends('layout.clean')

@section('content')
    <div class="login">
        <div class="col-xs-12 col-xs-offset-0 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4 text-center">
            <div class="welcome-logo">
                <img class="logo" height="50" src="{{ url('img/cachet-logo.svg') }}" alt="Cachet">
            </div>
            <form method="POST" action="/auth/2fa" accept-charset="UTF-8">
                <fieldset>
                    <legend>{{ trans('dashboard.login.two-factor') }}</legend>

                    @if(Session::has('error'))
                    <p class="text-danger">{{ Session::get('error') }}</p>
                    @endif

                    <div class="form-group">
                        <label class="sr-only">{{ trans('forms.login.2fauth') }}</label>
                        <input type="text" name="code" class="form-control" placeholder="{{ trans('forms.login.2fauth') }}" required>
                    </div>
                    <hr>
                    <div class="form-group">
                        <button type="submit" class="btn btn-lg btn-block btn-success">{{ trans('dashboard.login.login') }}</button>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
@stop
