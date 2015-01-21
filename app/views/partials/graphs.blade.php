@if($metrics->count() > 0)
<ul class="list-group metrics">
    @foreach($metrics as $metric)
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
                <small>{{ $metric->suffix }}</small>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-12">
                <div>
                    <canvas id="metric-{{ $metric->id }}" height="150" width="600"></canvas>
                </div>
            </div>
        </div>
        <script>
                var data = {
                    labels: ["January", "February", "March", "April", "May", "June", "July"],
                    datasets: [
                        {
                            fillColor: "rgba(220,220,220,0.2)",
                            strokeColor: "rgba(220,220,220,1)",
                            pointColor: "rgba(220,220,220,1)",
                            pointStrokeColor: "#fff",
                            pointHighlightFill: "#fff",
                            pointHighlightStroke: "rgba(220,220,220,1)",
                            data: [{{ implode(',', $metric->points->lists('value')) }}]
                        }
                    ]
                };

                window.onload = function() {
                    var ctx = document.getElementById("metric-{{ $metric->id }}").getContext("2d");
                    window.myLine = new Chart(ctx).Line(data, {
                        scaleShowVerticalLines: false,
                        pointDot: false,
                        responsive: true
                    });
                }
        </script>
    </li>
    @endforeach
</ul>
@endif
