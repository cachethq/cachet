@extends('layout.dashboard')

@section('content')
    <div class="header fixed">
        <div class="sidebar-toggler visible-xs">
            <i class="icon ion-navicon"></i>
        </div>
        <span class="uppercase">
            <i class="icon icon ion-android-alert"></i> {{ trans('dashboard.team.team') }}
        </span>
        <a class="btn btn-sm btn-success pull-right" href="{{ route('dashboard.team.add') }}">
            {{ trans('dashboard.team.add.title') }}
        </a>
        <div class="clearfix"></div>
    </div>
    <div class="content-wrapper header-fixed">
        <div class="row">
            <div class="col-sm-12">
                <p class="lead">{{ trans('dashboard.team.description') }}</p>

                <div class="user-grid">
                    @foreach($teamMembers as $member)
                    <div class="user col-sm-3 col-xs-6">
                        <a href="@if(Auth::user()->id == $member->id) {{ url('dashboard/user') }} @else /dashboard/team/{{ $member->id }}  @endif">
                            <img src="{{ $member->gravatar }}" />
                        </a>
                        <div class="name">{{ $member->username }}</div>
                        <div class="email">{{ $member->email }}</div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@stop
