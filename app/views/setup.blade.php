@extends('layout.dashboard')

@section('content')
    <div class='header'>
        <i class='fa fa-cog'></i> {{ Lang::get('cachet.setup') }}
    </div>
    <div class='row'>
        <div class='col-sm-12'>
            <div class='panel panel-default'>
                <div class='panel-heading'>Service Details</div>
                <div class='panel-body'>
                    {{ Form::open(['name' => 'SetupForm', 'class' => 'form-vertical', 'role' => 'form']) }}
                        <fieldset>
                            <legend>Status Page Setup</legend>
                            <div class='form-group'>
                                <label class='sr-only'>Site Name</label>
                                <input type='text' name='settings[app_name]' class='form-control' placeholder='Site Name' value='{{ Input::old('settings.app_name', '') }}' required />
                                @if($errors->has('settings.app_name'))
                                <span class='text-danger'>{{ $errors->first('settings.app_name') }}</span>
                                @endif
                            </div>
                            <div class='form-group'>
                                <label class='sr-only'>Site Domain</label>
                                <input type='text' name='settings[app_domain]' class='form-control' placeholder='Site Domain' value='{{ Input::old('settings.app_domain', '') }}' required />
                                @if($errors->has('settings.app_domain'))
                                <span class='text-danger'>{{ $errors->first('settings.app_domain') }}</span>
                                @endif
                            </div>
                            <div class='form-group'>
                                <label>
                                    <input type='checkbox' name='settings[show_support]' value='1' checked />
                                    Show support for Cachet?
                                </label>
                            </div>
                        </fieldset>

                        <fieldset>
                            <legend>Administrator Account</legend>
                            <div class='form-group'>
                                <label class='sr-only'>Username</label>
                                <input type='text' name='user[username]' class='form-control' placeholder='Username' value='{{ Input::old('user.username', '') }}' required />
                                @if($errors->has('user.username'))
                                <span class='text-danger'>{{ $errors->first('user.username') }}</span>
                                @endif
                            </div>
                            <div class='form-group'>
                                <label class='sr-only'>Email</label>
                                <input type='email' name='user[email]' class='form-control' placeholder='Email' value='{{ Input::old('user.email', '') }}' required />
                                @if($errors->has('user.email'))
                                <span class='text-danger'>{{ $errors->first('user.email') }}</span>
                                @endif
                            </div>
                            <div class='form-group'>
                                <label class='sr-only'>Password</label>
                                <input type='password' name='user[password]' class='form-control' placeholder='Password' value='{{ Input::old('user.password', '') }}' required />
                                @if($errors->has('user.password'))
                                <span class='text-danger'>{{ $errors->first('user.password') }}</span>
                                @endif
                            </div>
                        </fieldset>

                        <hr />
                        <div class='form-group'>
                            <button type='submit' class='btn btn-default'>Setup!</button>
                        </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
    </div>

@stop
