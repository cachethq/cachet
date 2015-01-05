@extends('layout.dashboard')

@section('content')
    <div class="header">
        <div class="sidebar-toggler visible-xs">
            <i class="icon ion-navicon"></i>
        </div>
        <span class='uppercase'>
            <i class="ion ion-person"></i> {{ trans('cachet.dashboard.user') }}
        </span>
    </div>
    <div class='content-wrapper'>
        <div class="row">
            <div class="col-sm-12">
                @if($updated = Session::get('updated'))
                <div class='alert alert-{{ $updated ? "success" : "danger" }}'>
                    @if($updated)
                    <strong>Awesome.</strong> Profile updated.
                    @else
                    <strong>Whoops.</strong> Something went wrong when updating.
                    @endif
                </div>
                @endif

                <form name='UserForm' class='form-vertical' role='form' action='/dashboard/user' method='POST'>
                    <fieldset>
                        <div class='form-group'>
                            <label>Username</label>
                            <input type='text' class='form-control' name='username' value='{{ Auth::user()->username }}' required />
                        </div>
                        <div class='form-group'>
                            <label>Email Address</label>
                            <input type='email' class='form-control' name='email' value='{{ Auth::user()->email }}' required />
                        </div>
                        <div class='form-group'>
                            <label>Password</label>
                            <input type='password' class='form-control' name='password' value='' />
                        </div>
                        <hr />
                        <div class='form-group'>
                            <label>API Key</label>
                            <input type='text' class='form-control' name='api_key' disabled value='{{ Auth::user()->api_key }}' />
                            <span class='help-block'>Regenerating your API key will revoke all existing applications.</span>
                        </div>
                    </fieldset>

                    <button type="submit" class="btn btn-success">Update profile</button>
                    <a href='/dashboard/user/{{ Auth::user()->id }}/api/regen' class='btn btn-warning'>Regenerate API Key</a>
                </form>
            </div>
        </div>
    </div>
@stop
