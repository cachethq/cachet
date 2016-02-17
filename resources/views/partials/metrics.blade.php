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
                    <a href="javascript: void(0);" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><span class='filter'>{{ trans('cachet.metrics.filter.'.$metric->trans_string_name) }}</span> <span class="caret"></span></a>
                    <ul class="dropdown-menu dropdown-menu-right">
                        <li><a href="#" data-filter-type="last_hour">{{ trans('cachet.metrics.filter.last_hour') }}</a></li>
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
                    <canvas id="metric-{{ $metric->id }}" data-metric-name="{{ $metric->name }}" data-metric-suffix="{{ $metric->suffix }}" data-metric-id="{{ $metric->id }}" data-metric-group="{{ $metric->view_name }}" height="160" width="600"></canvas>
                </div>
            </div>
        </div>
    </li>
    @endforeach
</ul>
<script>
(function () {
    Chart.defaults.global.pointHitDetectionRadius = 1;
    Chart.defaults.global.scaleBeginAtZero = true;

    var charts = {},
        defaultData = {
            showTooltips: false,
            labels: [],
            datasets: [{
                fillColor: "{{ $theme_metrics }}",
                pointColor: "{{ color_darken($theme_metrics, -0.1) }}",
                pointStrokeColor: "{{ color_darken($theme_metrics, -0.1) }}",
                pointHighlightFill: "{{ color_darken($theme_metrics, -0.2) }}",
                pointHighlightStroke: "{{ color_darken($theme_metrics, -0.2) }}",
                data: []
            }],
        };

    $('a[data-filter-type]').on('click', function(e) {
        e.preventDefault();

        var $this = $(this), $li, $canvas;

        $li = $this.parents('li');
        $li.find('a[data-toggle=dropdown] span.filter').text($this.text());
        $canvas = $li.find('canvas');

        $canvas.data('metric-group', $this.data('filter-type'));
        drawChart($canvas);
    });

    $('canvas[data-metric-id]').each(function() {
        drawChart($(this));
    });

    function drawChart($el) {
        var chartConfig = defaultData;
        var metricId = $el.data('metric-id');
        var metricGroup = $el.data('metric-group');

        if (typeof charts[metricId] === 'undefined') {
            charts[metricId] = {
                context: document.getElementById("metric-"+metricId).getContext("2d"),
                chart: null,
            };
        }

        var chart = charts[metricId];

        $.getJSON('/metrics/'+metricId, { filter: metricGroup }).done(function (result) {
            var data = result.data.items;
            chartConfig.labels = _.keys(data);
            chartConfig.datasets[0].data = _.values(data);

            if (chart.chart !== null) {
                chart.chart.destroy();
            }

            chart.chart = new Chart(chart.context).Line(chartConfig, {
                tooltipTemplate: $el.data('metric-name') + ": <{{ '%' }}= value %> " + $el.data('metric-suffix'),
                scaleShowVerticalLines: true,
                scaleShowLabels: false,
                responsive: true,
                maintainAspectRatio: false
            });
        });
    }
}());
</script>
@endif
