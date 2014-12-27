@extends('layout.dashboard')

@section('content')
    @include('partials.dashboard.nav')
    <div class='row'>
        <div class='col-md-6 col-md-offset-3'>
            {{ Form::open() }}
            <fieldset>
                <legend>{{ Lang::get('cachet.login') }}</legend>

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
                    <button type='submit' class='btn btn-default'>{{ Lang::get('cachet.login') }}</button>
                </div>
            </fieldset>
            {{ Form::close() }}
        </div>
    </div>

@stop
