@extends('layout.clean')

@section('content')
    <div class='login row'>
        <div class='col-xs-12 col-xs-offset-0 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4 text-center'>
            <div class="welcome-logo">
                <img class="logo" height="50" src="{{ url('img/cachet-logo.svg') }}" alt="Cachet"/>
            </div>
            {{ Form::open() }}
            <fieldset>
                <legend>{{ Lang::get('cachet.login_message') }}</legend>

                @if(Session::has('error'))
                <span class='text-danger'>{{ Session::get('error') }}</span>
                @endif

                <div class='form-group'>
                    <label class='sr-only'>{{ Lang::get('cachet.forms.email') }}</label>
                    {{ Form::email('email', Input::old('email'), [
                        'class' => 'form-control', 'placeholder' => Lang::get('cachet.forms.email'), 'required' => 'required'
                    ]) }}
                </div>
                <div class='form-group'>
                    <label class='sr-only'>{{ Lang::get('cachet.forms.password') }}</label>
                    {{ Form::password('password', [
                        'class' => 'form-control', 'placeholder' => Lang::get('cachet.forms.password'), 'required' => 'required'
                    ]) }}
                </div>
                <hr />
                <div class='form-group'>
                    <button type='submit' class='btn btn-lg btn-block btn-success'>{{ Lang::get('cachet.login') }}</button>
                </div>
            </fieldset>
            {{ Form::close() }}
        </div>
    </div>

@stop
