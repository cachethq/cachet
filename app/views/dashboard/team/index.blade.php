@extends('layout.dashboard')

@section('content')
    <div class="header fixed">
        <span class="uppercase">
            <i class="icon icon ion-android-alert"></i> {{ trans('cachet.dashboard.team') }}
        </span>
        <a class="btn btn-sm btn-success pull-right" href="{{ route('dashboard.team.add') }}">
            {{ trans('cachet.dashboard.team-add') }}
        </a>
        <div class="clearfix"></div>
    </div>
    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">
                <p class='lead'>Team Members will be able to add, modify &amp; edit components and incidents.</p>

                <div class='user-grid'>
                    @foreach($teamMembers as $member)
                    <div class='user col-sm-3 col-xs-6'>
                        <a href='/dashboard/team/{{ $member->id }}'>
                            <img src='{{ $member->gravatar }}' />
                        </a>
                        <div class='name'>{{ $member->username }}</div>
                        <div class='email'>{{ $member->email }}</div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@stop
