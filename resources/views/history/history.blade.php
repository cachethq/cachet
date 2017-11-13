@extends('layout.master')

@section('content')
<div class="pull-right">
    <p><a class="btn btn-success btn-outline" href="/"><i class="ion ion-home"></i></a></p>
</div>

<div class="clearfix"></div>

@include('dashboard.partials.errors')

<div class="section-timeline">
    <h1>{{ trans('cachet.history.title') }}</h1>
    @foreach($all_incidents as $month => $incidents_month)
        <h3>{{ $month }}</h3>
        @foreach($incidents_month as $date => $incidents)
        @include('partials.incidents', [compact($date), compact($incidents)])
        @endforeach
    @endforeach
</div>

<nav>
    <ul class="pager">
        @if($can_page_backward)
        <li class="previous">
            <a href="{{ route('history') }}?page={{ $page + 1 }}" class="links">
                <span aria-hidden="true">&larr;</span> {{ trans('cachet.history.previous_page') }}
            </a>
        </li>
        @endif
        @if($can_page_forward)
        <li class="next">
            <a href="{{ route('history') }}?page={{ $page - 1 }}" class="links">
                {{ trans('cachet.history.next_page') }} <span aria-hidden="true">&rarr;</span>
            </a>
        </li>
        @endif
    </ul>
</nav>
@stop
