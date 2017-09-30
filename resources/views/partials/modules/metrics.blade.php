@if($display_metrics && $app_graphs)
<div class="section-metrics">
    @if($metrics->count() > 0)
    <ul class="list-group">
        @foreach($metrics as $metric)
        <li class="list-group-item metric" data-metric-id="{{ $metric->id }}">
            <metric-chart :metric="{{ $metric->toJson() }}"></metric-chart>
        </li>
        @endforeach
    </ul>
    @endif
</div>
@endif
