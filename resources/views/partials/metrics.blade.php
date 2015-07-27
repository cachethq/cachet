@if($metrics->count() > 0)
<ul class="list-group metrics">
    @foreach($metrics as $metric)
    <?php
        $hourPoints = [];
        foreach (range(1, 11) as $hour) {
            $hourPoints[$hour] = $metric->getValuesByHour($hour);
        }
        $hourPoints = array_reverse($hourPoints);
    ?>
    <li class="list-group-item metric">
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
                <small>{{ trans('cachet.metrics.filter.hourly') }}</small>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-12">
                <div>
                    <canvas id="metric-{{ $metric->id }}" height="125" width="600"></canvas>
                </div>
            </div>
        </div>
        <script>
            (function () {
                Chart.defaults.global.pointHitDetectionRadius = 1;

                var hourList = [], date = new Date();

                for (var i = 10; i >= 1; i--) {
                    hourList.push(moment(date).subtract(i, 'hours').seconds(0).format('HH:ss'));
                }

                hourList.push(moment(date).seconds(0).format('HH:ss'));

                var hourPoints = [{{ implode(',', $hourPoints) }}];

                var data = {
                    showTooltips: false,
                    labels: hourList,
                    datasets: [{
                        fillColor: "rgba(220,220,220,0.1)",
                        strokeColor: "rgba(52,152,219,0.6)",
                        pointColor: "rgba(220,220,220,1)",
                        pointStrokeColor: "#fff",
                        pointHighlightFill: "#fff",
                        pointHighlightStroke: "rgba(220,220,220,1)",
                        data: hourPoints
                    }],
                };

                var ctx = document.getElementById("metric-{{ $metric->id }}").getContext("2d");
                new Chart(ctx).Line(data, {
                    tooltipTemplate: "{{ $metric->name }}: <%= value %>{!! $metric->suffix !!}",
                    scaleShowVerticalLines: true,
                    scaleShowLabels: false,
                    responsive: true,
                    maintainAspectRatio: false
                });
            }());
        </script>
    </li>
    @endforeach
</ul>
@endif
