@extends('layout.dashboard')

@section('content')
<div class="header">
    <div class="sidebar-toggler visible-xs">
        <i class="icon ion-navicon"></i>
    </div>
    <span class="uppercase">
        <i class="ion ion-ios-information-outline"></i> {{ trans('dashboard.incidents.incidents') }}
    </span>
    &gt; <small>{{ trans('dashboard.incidents.updates.title', ['incident' => $incident->name]) }}</small>
</div>
<div class="content-wrapper">
    <div class="header sub-header">
        <a class="btn btn-md btn-success pull-right" href="{{ cachet_route('dashboard.incidents.updates.create', [$incident->id]) }}">
            {{ trans('dashboard.incidents.updates.add.title') }}
        </a>
        <div class="clearfix"></div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            @include('partials.errors')

            <div class="striped-list">
                @foreach($incident->updates as $update)
                <div class="row striped-list-item">
                    <div class="col-xs-6">
                        <strong>{{ Str::words($update->message, 8) }}</strong>
                        <p><small>{{ trans('cachet.incidents.posted', ['timestamp' => $update->created_at_diff]) }}</small></p>
                    </div>
                    <div class="col-xs-6 text-right">
                        <a href="{{ cachet_route('dashboard.incidents.updates.edit', ['incident' => $incident->id, 'incident_update' => $update]) }}" class="btn btn-default">
                            {{ trans('forms.edit') }}
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@stop
