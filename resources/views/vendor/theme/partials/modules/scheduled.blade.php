@if($scheduledMaintenance->isNotEmpty())
<div class="section-scheduled">
    @include('theme::partials.schedule')
</div>
@endif
