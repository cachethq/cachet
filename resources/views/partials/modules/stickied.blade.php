@if($stickiedIncidents->isNotEmpty())
<div class="section-stickied">
    <h1>{{ trans('cachet.incidents.stickied') }}</h1>
    @foreach($stickiedIncidents as $date => $incidents)
    @include('partials.incidents')
    @endforeach
</div>
@endif
