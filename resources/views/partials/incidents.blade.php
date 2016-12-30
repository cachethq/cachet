<div class="incidents">
    @forelse($incidents as $incident)
    <div class="incident">
        <h5 class="incidents__date">{{ formatted_date($date) }}</h5>
        @include('partials.incident', ['incident' => $incident, 'with_link' => true])
    </div>
    @empty
    @if (!$only_disrupted_days)
    <div class="incident">
        <h5 class="incidents__date">{{ formatted_date($date) }}</h5>
        <p>{{ trans('cachet.incidents.none') }}</p>
    </div>
    @endif
    @endforelse
</div>
