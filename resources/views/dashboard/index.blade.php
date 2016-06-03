@extends('layout.dashboard')

@section('content')
<div class="header">
    <div class="sidebar-toggler visible-xs">
        <i class="ion ion-navicon"></i>
    </div>
    <span class="uppercase">
        <i class="ion ion-speedometer"></i> {{ trans('dashboard.dashboard') }}
    </span>
</div>
<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12">
            <div class="alert alert-info hidden" id="update-alert">{!! trans('cachet.system.update') !!}</div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h4 class="sub-header">{{ trans('dashboard.components.component_statuses') }}</h4>
            <div class="panel panel-default">
                <div class="list-group">
                    @forelse($components as $component)
                    <div class="list-group-item">
                        <form class='component-inline form-vertical' data-messenger="{{trans('dashboard.components.edit.success')}}">
                            <div class="row striped-list-item">
                                <div class="col-lg-4 col-md-3 col-sm-12">
                                    <h4>{{ $component->name }}</h4>
                                </div>
                                <div class="col-lg-8 col-md-9 col-sm-12 radio-items componet-inline-update">
                                    @foreach(trans('cachet.components.status') as $statusID => $status)
                                    <div class="radio-inline">
                                        <label>
                                            <input type="radio" name="status" value="{{ $statusID }}" {{ (int) $component->status === $statusID ? 'checked' : null }}>
                                            {{ $status }}
                                        </label>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            <input type="hidden" name="component_id" value="{{ $component->id }}">
                        </form>
                    </div>
                    @empty
                    <div class="list-group-item"><a href="{{ route('dashboard.components.add') }}">{{ trans('dashboard.components.add.message') }}</a></div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12 col-lg-6">
            <div class="stats-widget">
                <div class="stats-top">
                    <span class="stats-value"><a href="{{ route('dashboard.incidents.index') }}">{{ $incidents->map(function($incident) { return count($incident); })->sum() }}</a></span>
                    <span class="stats-label">{{ trans('dashboard.incidents.incidents') }}</span>
                </div>
                <div class="stats-chart">
                    <div class="sparkline" data-type="line" data-resize="true" data-height="80" data-width="100%" data-line-width="2" data-min-spot-color="#e65100" data-max-spot-color="#ffb300" data-line-color="#3498db" data-spot-color="#00838f" data-fill-color="#3498db" data-highlight-line-color="#00acc1" data-highlight-spot-color="#ff8a65" data-spot-radius="false" data-data="[{{ $incidents->map(function ($incident) { return count($incident); } )->implode(',') }}]"></div>
                </div>
            </div>
        </div>

        <div class="col-sm-12 col-lg-6">
            <div class="stats-widget">
                <div class="stats-top">
                    <span class="stats-value"><a href="{{ route('dashboard.subscribers.index') }}">{{ $subscribers->map(function($subscribers) { return count($subscribers); })->sum() }}</a></span>
                    <span class="stats-label">{{ trans('dashboard.subscribers.subscribers') }}</span>
                </div>
                <div class="stats-chart">
                    <div class="sparkline" data-type="line" data-resize="true" data-height="80" data-width="100%" data-line-width="2" data-min-spot-color="#e65100" data-max-spot-color="#ffb300" data-line-color="#3498db" data-spot-color="#00838f" data-fill-color="#3498db" data-highlight-line-color="#00acc1" data-highlight-spot-color="#ff8a65" data-spot-radius="false" data-data="[{{ $subscribers->map(function ($subscriber) { return count($subscriber); } )->implode(',') }}]"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12 col-lg-6">
            <div class="stats-widget">
                <div class='stats-top'>
                    <span class='stats-value'>{{ trans('dashboard.widgets.support') }}</span>
                    <span class='stats-label'>{!! trans('dashboard.widgets.support_subtitle') !!}</span>
                </div>
            </div>
        </div>

        @if($entries)
        <div class="col-sm-12 col-lg-6">
            <div class="stats-widget">
                <div class='stats-top'>
                    <span class='stats-value'>{{ trans('dashboard.widgets.news') }}</span>
                    <span class='stats-label'>{{ trans('dashboard.widgets.news_subtitle') }}</span>
                </div>
                <div class='stats-body'>
                    <div class="list-group">
                        @foreach($entries as $entry)
                        <a class="list-group-item" href="{{ $entry->link }}" target="_blank">{{ $entry->title }}, <small>{{ $entry->pubDate }}</small> <span class="badge"><i class="ion-android-open"></i></span></a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        @endif
    </div>
</div>
@if(Session::get('setup.done'))
@include('dashboard.partials.welcome-modal')
<script>
    $(function() {
        $('#welcome-modal').modal('show');
    });
</script>
@endif
@stop
