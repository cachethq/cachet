@extends('layout.dashboard')

@section('content')
    <div class="header">
        <div class="sidebar-toggler visible-xs">
            <i class="icon ion-navicon"></i>
        </div>
        <span class="uppercase">
            <i class="icon ion-person"></i> {{ trans('dashboard.team.team') }}
        </span>
    </div>
    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">
                @if($created = Session::get('created'))
                <div class="alert alert-success">
                    {{ sprintf("<strong>%s</strong> %s", trans('dashboard.notifications.awesome'), trans('dashboard.team.add.success')) }}
                </div>
                @elseif($errors = Session::get('errors'))
                <div class="alert alert-danger">
                    {{ sprintf("<strong>%s</strong> %s", trans('dashboard.notifications.whoops'), trans('dashboard.team.add.failure')) }}
                </div>
                @endif

                <form name="UserForm" class="form-vertical" role="form" action="/dashboard/team/add" method="POST">
                    <fieldset>
                        <div class="form-group">
                            <label>{{ trans('forms.user.username') }}</label>
                            <input type="text" class="form-control" name="username" value="{{ Input::old('username') }}" required />
                        </div>
                        <div class="form-group">
                            <label>{{ trans('forms.user.email') }}</label>
                            <input type="email" class="form-control" name="email" value="{{ Input::old('email') }}" required />
                        </div>
                        <div class="form-group">
                            <label>{{ trans('forms.user.password') }}</label>
                            <input type="password" class="form-control" name="password" value="" />
                        </div>
                    </fieldset>

                    <button type="submit" class="btn btn-success">{{ trans('forms.add') }}</button>
                </form>
            </div>
        </div>
    </div>
@stop
