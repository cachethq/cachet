@if($daysToShow > 0 && $allIncidents)
<div class="section-timeline">
    <h1>{{ trans('cachet.incidents.past') }}</h1>
    @foreach($allIncidents as $date => $incidents)
    @include('partials.incidents', [@compact($date), @compact($incidents)])
    @endforeach
</div>

<nav>
    <ul class="pager">
        @if($canPageBackward)
        <li class="previous">
            <a href="{{ cachet_route('status-page') }}?start_date={{ $previousDate }}" class="links">
                <span aria-hidden="true">&larr;</span> {{ trans('pagination.previous') }}
            </a>
        </li>
        @endif
        @if($canPageForward)
        <li class="next">
            <a href="{{ cachet_route('status-page') }}?start_date={{ $nextDate }}" class="links">
                {{ trans('pagination.next') }} <span aria-hidden="true">&rarr;</span>
            </a>
        </li>
        @endif
    </ul>
</nav>
@endif
