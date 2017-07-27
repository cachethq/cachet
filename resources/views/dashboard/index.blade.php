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
          <div class="section-components no-select">
              @if(!$component_groups->isEmpty() || !$ungrouped_components->isEmpty())
              @include('dashboard.partials.components')
              @else
              <ul class="list-group components">
                  <li class="list-group-item">
                      <a href="{{ cachet_route('dashboard.components.create') }}">{{ trans('dashboard.components.add.message') }}</a>
                  </li>
              </ul>
              @endif
          </div>
      </div>
    </div>

    <div class="row">
        <div class="col-sm-12 col-lg-6">
            <div class="stats-widget">
                <div class="stats-top">
                    <span class="stats-value"><a href="{{ cachet_route('dashboard.incidents') }}">{{ $incidents->reduce(function($carry, $incident) { return $carry + count($incident); }) }}</a></span>
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
                    <span class="stats-value"><a href="{{ cachet_route('dashboard.subscribers') }}">{{ $subscribers->reduce(function($carry, $subscribers) { return $carry + count($subscribers); }) }}</a></span>
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
                <div class="stats-top">
                    <span class="stats-value">{{ trans('dashboard.widgets.support') }}</span>
                    <span class="stats-label">{!! trans('dashboard.widgets.support_subtitle') !!}</span>
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
@if ($welcome_user)
@include('dashboard.partials.welcome-modal')
@endif
@stop
