@extends('layout.master')

@section('content')
<div class="pull-right">
    <p><a class="btn btn-success btn-outline" href="/"><i class="ion ion-home"></i></a></p>
</div>

<div class="clearfix"></div>

@include('dashboard.partials.errors')

<div class="dropdown">
    <a href="javascript: void(0);" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
        <span class='filter'>{{ isset($filtered_component) ? $filtered_component->name : trans('cachet.history.filter') }}</span>
        <span class="caret"></span>
    </a>
    <ul class="dropdown-menu">
        <li><a href="#" data-component-id="-1"><em>{{ trans('cachet.history.dont_filter') }}</em></a></li>
        @foreach($components_in_groups as $group)
            <li><a><strong>{{ $group->name }}</strong></a></li>
            @foreach($group->components as $component)
                <li><a href="#" data-component-id="{{ $component->id }}" style="padding-left: 2em;">{{ $component->name }}</a></li>
            @endforeach
        @endforeach
        @foreach($components_out_groups as $component)
            <li><a href="#" data-component-id="{{ $component->id }}">{{ $component->name }}</a></li>
        @endforeach
    </ul>
</div>

<div class="section-timeline">
    <h1>{{ trans('cachet.history.title') }}</h1>
    @forelse($all_incidents as $month => $incidents_month)
        <h3>{{ $month }}</h3>
        @foreach($incidents_month as $date => $incidents)
        @include('partials.incidents', [compact($date), compact($incidents)])
        @endforeach
    @empty
        <p>{{ trans('cachet.incidents.none') }}</p>
    @endforelse
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

<script>
(function () {
    $('a[data-component-id]').on('click', function(e) {
        e.preventDefault();

        var $this = $(this), $li;

        $dropdown = $this.parents('.dropdown');
        $dropdown.find('a[data-toggle=dropdown] span.filter').text($this.text());

        if($this.attr('data-component-id') === '-1') {
            window.location.href = '{{ route('history') }}';
        } else {
            window.location.href = '{{ route('history') }}?filter=' + $this.attr('data-component-id');
        }
    });
}());
</script>
@stop
