@if($scheduled_maintenance->isNotEmpty())
<div class="section-scheduled">
    @include('partials.schedule')
</div>
@endif
