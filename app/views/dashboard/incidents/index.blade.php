@extends('layout.dashboard')

@section('content')
    <div class="header fixed">
        <div class="sidebar-toggler visible-xs">
            <i class="icon ion-navicon"></i>
        </div>
        <span class="uppercase">
            <i class="icon icon ion-android-alert"></i> {{ trans('dashboard.incidents.incidents') }}
        </span>
        <a class="btn btn-sm btn-success pull-right" href="{{ route('dashboard.incidents.add') }}">
            {{ trans('dashboard.incidents.add.title') }}
        </a>
        <div class="clearfix"></div>
    </div>
    <div class="content-wrapper header-fixed">
        <div class="row">
            <div class="col-sm-12">
                <p class="lead">{{ trans_choice('dashboard.incidents.logged', $incidents->count(), ['count' => $incidents->count()]) }}</p>

                <div class="striped-list">
                    @foreach($incidents as $incident)
                    <div class="row striped-list-item">
                        <div class="col-md-6">
                            <i class="{{ $incident->icon }}"></i> <strong>{{ $incident->name }}</strong>
                            @if($incident->message)
                            <p><small>{{ Str::words($incident->message, 5) }}</small></p>
                            @endif
                        </div>
                        <div class="col-md-6 text-right">
                            <a href="/dashboard/incidents/{{ $incident->id }}/edit" class="btn btn-default">{{ trans('forms.edit') }}</a>
                            <a href="/dashboard/incidents/{{ $incident->id }}/delete" class="btn btn-danger confirm-action" data-method='DELETE'>{{ trans('forms.delete') }}</a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@stop
