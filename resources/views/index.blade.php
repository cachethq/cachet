@extends('layout.master')

@section('content')
<div class="section-messages">
    @include('dashboard.partials.errors')
</div>

@include('partials.about-app')

@if(Setting::get('style_fullwidth_header'))
</div>
<div class="container">
@endif

<div class="section-status">
    <div class="alert alert-{{ $systemStatus }}">{{ $systemMessage }}</div>
</div>

@if(!$component_groups->isEmpty() || !$ungrouped_components->isEmpty())
<div class="section-components">
    @include('partials.components')
</div>
@endif

@if($display_metrics && Setting::get('display_graphs'))
<div class="section-metrics">
    @include('partials.metrics')
</div>
@endif

@if(!$scheduled_maintenance->isEmpty())
<div class="section-scheduled">
    @include('partials.schedule')
</div>
@endif

@if($days_to_show > 0)
<div class="section-timeline">
    <h1>{{ trans('cachet.incidents.past') }}</h1>
    @foreach($all_incidents as $date => $incidents)
    @include('partials.incidents', [compact($date), compact($incidents)])
    @endforeach
</div>

<nav>
    <ul class="pager">
        @if($can_page_backward)
        <li class="previous">
            <a href="{{ route('status-page') }}?start_date={{ $previous_date }}" class="links">
                <span aria-hidden="true">&larr;</span> {{ trans('cachet.incidents.previous_week') }}
            </a>
        </li>
        @endif
        @if($can_page_forward)
        <li class="next">
            <a href="{{ route('status-page') }}?start_date={{ $next_date }}" class="links">
                {{ trans('cachet.incidents.next_week') }} <span aria-hidden="true">&rarr;</span>
            </a>
        </li>
        @endif
    </ul>
</nav>
@endif
@stop
