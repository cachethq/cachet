@if($metrics->count() > 0)
<ul class="list-group">
    @foreach($metrics as $metric)
    <li class="list-group-item metric" data-metric-id="{{ $metric->id }}">
        <div class="row">
            <div class="col-xs-10">
                <strong>
                    {{ $metric->name }}
                    @if($metric->description)
                    <i class="ion ion-ios-help-outline" data-toggle="tooltip" data-title="{{ $metric->description }}"></i>
                    @endif
                </strong>
            </div>
            <div class="col-xs-2">
                <div class="dropdown pull-right">
                    <a href="javascript: void(0);" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><span class='filter'>{{ trans('cachet.metrics.filter.hourly') }}</span> <span class="caret"></span></a>
                    <ul class="dropdown-menu dropdown-menu-right">
                        <li><a href="#" data-filter-type="today">{{ trans('cachet.metrics.filter.hourly') }}</a></li>
                        <li><a href="#" data-filter-type="week">{{ trans('cachet.metrics.filter.weekly') }}</a></li>
                        <li><a href="#" data-filter-type="month">{{ trans('cachet.metrics.filter.monthly') }}</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <div>
                    <canvas id="metric-{{ $metric->id }}" data-metric-name="{{ $metric->name }}" data-metric-suffix="{{ $metric->suffix }}" data-metric-id="{{ $metric->id }}" data-metric-group="today" height="160" width="600"></canvas>
                </div>
            </div>
        </div>
    </li>
    @endforeach
</ul>
<script type="text/json" id="metricData">
{!! json_encode($metric_data) !!}
</script>
<script>
(function () {
    Chart.defaults.global.pointHitDetectionRadius = 1;

    var charts = JSON.parse(document.getElementById('metricData').text);

    var defaultData = {
        showTooltips: false,
        labels: [],
        datasets: [{
            // fillColor: "rgba(220,220,220,0.1)",
            fillColor: "{{$theme_metrics}}",
            // strokeColor: "{{ $theme_metrics }}",
            pointColor: "{{ color_darken($theme_metrics, -0.1) }}",
            pointStrokeColor: "{{ color_darken($theme_metrics, -0.1) }}",
            pointHighlightFill: "{{ color_darken($theme_metrics, -0.2) }}",
            pointHighlightStroke: "{{ color_darken($theme_metrics, -0.2) }}",
            data: []
        }],
    };

    $('a[data-filter-type]').on('click', function(e) {
        e.preventDefault();

        var $this = $(this);

        // Change the selected view.
        var $li = $this.parents('li')
        $li.find('a[data-toggle=dropdown] span.filter').text($this.text());

        var $canvas = $li.find('canvas');

        $canvas.data('metric-group', $this.data('filter-type'));
        drawChart($canvas);
    });

    $('canvas[data-metric-id]').each(function() {
        var $this = $(this);
        drawChart($this);
    });

    function drawChart($el) {
        var metricId = $el.data('metric-id');
        var metricGroup = $el.data('metric-group');

        charts[metricId].context = document.getElementById("metric-"+metricId).getContext("2d");

        if (typeof charts[metricId].chart !== 'undefined') {
            charts[metricId].chart.destroy();
        }

        var chartConfig = defaultData;
        var charter = charts[metricId][metricGroup];

        chartConfig.labels = _.keys(charter);
        chartConfig.datasets[0].data = _.values(charter);

        charts[metricId].chart = new Chart(charts[metricId].context).Line(chartConfig, {
            tooltipTemplate: $el.data('metric-name') + ": <{{ '%' }}= value %> " + $el.data('metric-suffix'),
            scaleShowVerticalLines: true,
            scaleShowLabels: false,
            responsive: true,
            maintainAspectRatio: false
        });
    }
}());
</script>
@endif
