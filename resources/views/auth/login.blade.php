@extends('layout.clean')

@section('content')
    <div class="login">
        <div class="col-xs-12 col-xs-offset-0 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4 text-center">
            <div class="welcome-logo">
                <img class="logo" height="50" src="/img/cachet-logo.svg" alt="Cachet">
            </div>
            <form method="POST" action="/auth/login" accept-charset="UTF-8">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <fieldset>
                    <legend>{{ trans('dashboard.login.welcome') }}</legend>

                    @if(Session::has('error'))
                    <p class="text-danger">{{ Session::get('error') }}</p>
                    @endif

                    <div class="form-group">
                        <label class="sr-only">{{ trans('forms.login.email') }}</label>
                        {!! Form::email('email', Input::old('email'), [
                            'class' => 'form-control', 'placeholder' => trans('forms.login.email'), 'required' => 'required'
                        ]) !!}
                    </div>
                    <div class="form-group">
                        <label class="sr-only">{{ trans('forms.login.password') }}</label>
                        {!! Form::password('password', [
                            'class' => 'form-control', 'placeholder' => trans('forms.login.password'), 'required' => 'required'
                        ]) !!}
                    </div>
                    <div class="form-group">
                        <div class="alert alert-info">{{ trans('forms.login.cookies') }}</div>
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
