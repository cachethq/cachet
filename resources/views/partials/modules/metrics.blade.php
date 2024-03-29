@if($displayMetrics && $appGraphs)
<div class="section-metrics">
    @if($metrics->count() > 0)
    <ul class="list-group">
        @foreach($metrics as $metric)
        <li class="list-group-item metric" data-metric-id="{{ $metric->id }}">
            <metric-chart :metric="{{ $metric->toJson() }}" theme-light="{{ $themeMetrics }}" theme="{{ color_darken($themeMetrics, -0.1) }}" theme-dark="{{ color_darken($themeMetrics, -0.2) }}"></metric-chart>
        </li>
        @endforeach
    </ul>
    @endif
</div>
@endif
