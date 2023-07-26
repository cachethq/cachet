@if($scheduledMaintenance->isNotEmpty())
<div class="section-scheduled">
    @include('partials.schedule')
</div>
@endif
