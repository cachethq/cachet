@if($days_to_show > 0 && $all_incidents)
<div class="section-timeline">
    <div class="section-timeline__header">
        <i class="icon ion-clock"></i> {{ trans('cachet.incidents.past') }}
    </div>

    @foreach($all_incidents as $date => $incidents)
    @include('partials.incidents', [compact($date), compact($incidents)])
    @endforeach
</div>

<nav>
    <a href="{{ cachet_route('history', [date('Y')]) }}" class="btn btn-primary btn-lg">View all incidents</a>
</nav>
@endif
