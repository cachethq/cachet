@extends('layout.dashboard')

@section('content')
    <div class="header fixed">
        <span class="uppercase">
            <i class="icon icon ion-android-alert"></i> {{ trans('cachet.dashboard.incidents') }}
        </span>
        <a class="btn btn-sm btn-success pull-right" href="{{ route('dashboard.incidents.add') }}">
            {{ trans('cachet.dashboard.incident-add') }}
        </a>
        <div class="clearfix"></div>
    </div>
    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">
                <p class='lead'>{{ trans_choice('cachet.dashboard.logged_incidents', $incidents->count(), ['count' => $incidents->count()]) }}</p>

                <div class="striped-list">
                    @foreach($incidents as $incident)
                    <div class="row striped-list-item">
                        <div class="col-md-6">
                            <i class='{{ $incident->icon }}'></i> <strong>{{ $incident->name }}</strong>
                            @if($incident->message)
                            <p><small>{{ Str::words($incident->message, 5) }}</small></p>
                            @endif
                        </div>
                        <div class="col-md-6 text-right">
                            <a href="/dashboard/incidents/{{ $incident->id }}/delete" class="btn btn-danger">Delete</a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@stop
