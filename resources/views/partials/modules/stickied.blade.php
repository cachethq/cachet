@if($stickied_incidents->isNotEmpty())
<div class="section-stickied">
    <h1>{{ trans('cachet.incidents.stickied') }}</h1>
    @foreach($stickied_incidents as $date => $incidents)
    @include('partials.incidents', [compact($date), compact($incidents)])
    @endforeach
</div>
@endif
