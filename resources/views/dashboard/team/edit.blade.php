@extends('layout.dashboard')

@section('content')
    <div class="header">
        <div class="sidebar-toggler visible-xs">
            <i class="icon ion-navicon"></i>
        </div>
        <span class="uppercase">
            <i class="ion ion-person"></i> {{ trans('dashboard.team.member') }}
        </span>
    </div>
    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">
                @include('dashboard.partials.errors')
                <form name="UserForm" class="form-vertical" role="form" action="/dashboard/team/{{ $user->id }}" method="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <fieldset>
                        <div class="form-group">
                            <label>{{ trans('forms.user.username') }}</label>
                            <input type="text" class="form-control" name="username" value="{{ $user->username }}" required>
                        </div>
                        <div class="form-group">
                            <label>{{ trans('forms.user.email') }}</label>
                            <input type="email" class="form-control" name="email" value="{{ $user->email }}" required>
                        </div>
                        <div class="form-group">
                            <label>{{ trans('forms.user.password') }}</label>
                            <input type="password" class="form-control password-strength" name="password" value="" {{ !$current_user->isAdmin ? "disabled": "" }}>
                            <div class="strengthify-wrapper"></div>
                        </div>
                    </fieldset>

                    <div class="form-group">
                        <button type="submit" class="btn btn-success">{{ trans('forms.update') }}</button>
                        @if($current_user->isAdmin)
                        <a class="btn btn-info" href="/dashboard/user/{{ $user->id }}/api/regen">{{ trans('cachet.api.revoke') }}</a>
                        @if($current_user->id != $user->id)
                        <a class="btn btn-danger confirm-action" href="/dashboard/team/{{ $user->id }}/delete" data-method="DELETE">{{ trans('forms.delete') }}</a>
                        @endif
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
