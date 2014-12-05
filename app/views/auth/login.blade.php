@extends('layout.dashboard')

@section('content')
    @include('partials.dashboard.nav')
    <div class='row'>
        <div class='col-md-6 col-md-offset-3'>
            {{ Form::open() }}
            <fieldset>
                <legend>Login</legend>

                @if(Session::has('error'))
                <span class='text-danger'>{{ Session::get('error') }}</span>
                @endif

                <div class='form-group'>
                    <label class='sr-only'>Email</label>
                    {{ Form::email('email', Input::old('email'), [
                        'class' => 'form-control', 'placeholder' => 'Email', 'required' => 'required'
                    ]) }}
                </div>
                <div class='form-group'>
                    <label class='sr-only'>Password</label>
                    {{ Form::password('password', [
                        'class' => 'form-control', 'placeholder' => 'Password', 'required' => 'required'
                    ]) }}
                </div>
                <hr />
                <div class='form-group'>
                    <button type='submit' class='btn btn-default'>Login</button>
                </div>
            </fieldset>
            {{ Form::close() }}
        </div>
    </div>

@stop
