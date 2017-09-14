<h1>Uptimes</h1>
<div class="section-metrics">
    @if($component_groups->count() > 0)
        <ul class="list-group">
            @foreach($component_groups as $group)
                <li class="list-group-item metric" data-metric-id="{{ $group->id }}">
                    <div class="row">
                        <div class="col-xs-10">
                            <strong>
                                {{ $group->name }}
                            </strong>
                        </div>
                        <div class="col-xs-2">
                            <div class="dropdown pull-right">
                                <a href="javascript: void(0);" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><span class='filter'>Scope</span> <span class="caret"></span></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a href="#" data-filter-type="last_hours">last hours</a></li>
                                    <li><a href="#" data-filter-type="last_days">last days</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <canvas id="metric-{{ $group->id }}" data-metric-name="{{ $group->name }}" data-metric-components="" data-metric-id="{{ $group->id }}" data-metric-group="last_days" height="160" width="600"></canvas>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
        <script>
            (function () {
                Chart.defaults.global.elements.point.hitRadius = 10;
                Chart.defaults.global.responsiveAnimationDuration = 1000;
                Chart.defaults.global.legend.display = true;

                var charts = {};

                var colors = [
                    "#1abc9c",
                    "#f1c40f",
                    "#2ecc71",
                    "#3498db",
                    "#e74c3c",
                    "#9b59b6"
                ];

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
                    var metricId = $el.data('metric-id');
                    var metricGroup = $el.data('metric-group');

                    if (typeof charts[metricId] === 'undefined') {
                        charts[metricId] = {
                            context: document.getElementById("metric-"+metricId).getContext("2d"),
                            chart: null
                        };
                    }

                    var chart = charts[metricId];

                    $.getJSON('/uptimes/'+metricId, { filter: metricGroup }).done(function (result) {
                        var data = result.data.items;
                        var labels = result.data.labels;
                        if (chart.chart !== null) {
                            chart.chart.destroy();
                        }
                        var colorIndex = 0;
                        chart.chart = new Chart(chart.context, {
                            type: 'bar',
                            data: {
                                labels: labels.map(function(d){
                                    return metricGroup === "last_hours" ? moment(d).format("HH:ss") : moment(d).format("dd, MMM Do");
                                }),
                                datasets: Object.keys(data).map(function(componentName){
                                    var color = colors[colorIndex];
                                    colorIndex ++;
                                    return {
                                        data: Object.values(data[componentName]),
                                        label: componentName,
                                        backgroundColor:color,
                                        fill: false
                                    }

                                })
                            },
                            options: {

                                scales: {

                                    xAxes: [{
                                        stacked:true
                                    }],
                                    yAxes: [{
                                        stacked:true,
                                        ticks: {
                                            userCallback: function(value) {
                                                //return value;
                                                return (value / Object.keys(data).length).toFixed(0)+" %";
                                            }
                                        }
                                    }]
                                },
                                tooltips: {
                                }
                            }
                        });
                    });
                }
            }());
        </script>
    @endif
</div>
