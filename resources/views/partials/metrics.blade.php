@if($metrics->count() > 0)
<ul class="list-group metrics">
    @foreach($metrics as $metric)
    <li class="list-group-item metric" data-metric-id="{{ $metric->id }}">
        <div class="row">
            <div class="col-xs-10">
                <h4>
                    {{ $metric->name }}
                    @if($metric->description)
                    <i class="ion ion-ios-help-outline" data-toggle="tooltip" data-title="{{ $metric->description }}"></i>
                    @endif
                </h4>
            </div>
            <div class="col-xs-2 text-right">
                <div class="dropdown">
                    <a href="javascript: void(0);" class="btn btn-default dropdown-toggle" data-toggle="dropdown">{{ trans('cachet.metrics.filter.hourly') }} <span class="caret"></span></a>
                    <ul class="dropdown-menu dropdown-menu-right">
                        <li><a href="#" data-filter-type="hourly">{{ trans('cachet.metrics.filter.hourly') }}</a></li>
                        <li><a href="#" data-filter-type="daily">{{ trans('cachet.metrics.filter.daily') }}</a></li>
                        <li><a href="#" data-filter-type="weekly">{{ trans('cachet.metrics.filter.weekly') }}</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-12">
                <div>
                    <canvas id="metric-{{ $metric->id }}" data-metric-id="{{ $metric->id }}" data-metric-group="hourly" height="125" width="600"></canvas>
                </div>
            </div>
        </div>
    </li>
    @endforeach
</ul>
<script>
    (function () {
        Chart.defaults.global.pointHitDetectionRadius = 1;

        var metricLists = {
            hourly: {
                points: 10,
                label: 'HH:ss'
            },
            daily: {
                points: 6,
                label: 'D'
            },
            weekly: {
                points: 51,
                label: 'W'
            }
        };

        var date = new Date();

        var defaultData = {
            showTooltips: false,
            labels: [],
            datasets: [{
                fillColor: "rgba(220,220,220,0.1)",
                strokeColor: "rgba(52,152,219,0.6)",
                pointColor: "rgba(220,220,220,1)",
                pointStrokeColor: "#fff",
                pointHighlightFill: "#fff",
                pointHighlightStroke: "rgba(220,220,220,1)",
                data: []
            }],
        };

        $('canvas[data-metric-id]').each(function() {
            var $this = $(this);
            var metricId = $this.data('metric-id');
            var metricGroup = $this.data('metric-group');
        fetchPoints(metricId).then(function (points) {
            var chartConfig = defaultData,
                labels = [];

            for (var i = metricLists[metricGroup].points; i >= 1; i--) {
                labels.push(moment(date).subtract(i, 'hours').seconds(0).format(metricLists[metricGroup].label));
            }
            labels.push(moment(date).seconds(0).format(metricLists[metricGroup].label));

            chartConfig.labels = labels;

            var ctx = document.getElementById("metric-"+metricId).getContext("2d");

            new Chart(ctx).Line(chartConfig, {
                tooltipTemplate: "{!! $metric->name !!}: <%= value %>{!! $metric->suffix !!}",
                scaleShowVerticalLines: true,
                scaleShowLabels: false,
                responsive: true,
                maintainAspectRatio: false
            });
        });
    });

    function fetchPoints(metricId) {
        return $.ajax({
            async: true,
            dataType: 'json',
            url: '/api/v1/metrics/'+metricId+'/points',
        });
    }
}());
</script>
@endif
