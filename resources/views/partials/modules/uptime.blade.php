<h1>Uptimes</h1>
<div class="section-uptime">
    @if($component_groups->count() > 0)
        <ul class="list-group">
            @foreach($component_groups as $group)
                <li class="list-group-item uptime" data-uptime-id="{{ $group->id }}">
                    <div class="graph-container">
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
                                <canvas id="uptime-group-{{ $group->id }}" data-is-group="true" data-uptime-name="{{ $group->name }}" data-uptime-components="" data-uptime-id="{{ $group->id }}" data-uptime-group="last_days" height="160" width="600"></canvas>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-xs-12">
                            <p class="text-center">
                                <a class="per-component-graph-trigger" data-show-graphs="uptime-graph-per-component-group-{{$group->id}}">Toggle graphs per component</a>
                            </p>
                        </div>
                    </div>

                    <div class="group-uptime-container" id="uptime-graph-per-component-group-{{$group->id}}">
                        @foreach($group->enabled_components()->orderBy('order')->get() as $component)
                            <div class="graph-container">
                                <div class="row">
                                    <div class="col-xs-10">
                                        <strong>
                                            {{ $component->name }}
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
                                        <canvas id="uptime-component-{{ $component->id }}" data-is-group="false" data-uptime-name="{{ $component->name }}" data-uptime-components="" data-uptime-id="{{ $component->id }}" data-uptime-group="last_days" height="160" width="600"></canvas>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </li>
            @endforeach
        </ul>
        <script>
            (function () {


                $(".group-uptime-container").hide();

                $(".per-component-graph-trigger").on("click", function(){
                    var elemToShow = $("#"+$(this).data("show-graphs"));

                    if(elemToShow.is(':visible')){
                        elemToShow.hide("fast");
                    }else{
                        elemToShow.show("fast");
                    }
                });


                Chart.defaults.global.elements.point.hitRadius = 10;
                Chart.defaults.global.responsiveAnimationDuration = 1000;
                Chart.defaults.global.legend.display = false;

                var charts = {};

                $('a[data-filter-type]').on('click', function(e) {
                    e.preventDefault();
                    var $this = $(this), $li, $canvas;
                    $li = $this.parents('.graph-container');
                    $li.find('a[data-toggle=dropdown] span.filter').text($this.text());
                    $canvas = $li.find('canvas');
                    $canvas.data('uptime-group', $this.data('filter-type'));
                    drawChart($canvas);
                });

                var canvasGroup = $('canvas[data-uptime-id]');

                canvasGroup.each(function() {
                    drawChart($(this));
                });

                function drawChart($el) {
                    var upTimeId = $el.data('uptime-id');
                    var upTimeGroup = $el.data('uptime-group');
                    var isGroupComponent = $el.data('is-group');
                    var name = $el.data("uptime-name");
                    var chartId = isGroupComponent ? "uptime-group-" + upTimeId : "uptime-component-" + upTimeId;

                    if(!isGroupComponent){
                        $el.parents('.graph-container').css("padding",32);
                    }

                    if (typeof charts[chartId] === 'undefined') {
                        charts[chartId] = {
                            context: document.getElementById(chartId).getContext("2d"),
                            chart: null
                        };
                    }

                    var chart = charts[chartId];

                    $.getJSON('/uptimes_' + ( isGroupComponent ? "group/" : "component/") + upTimeId, { filter: upTimeGroup }).done(function (result) {
                        var data = result.data.items;
                        var labels = result.data.labels;
                        if (chart.chart !== null) {
                            chart.chart.destroy();
                        }
                        chart.chart = new Chart(chart.context, {
                            type: 'bar',
                            data: {
                                labels: labels.map(function(d){
                                    return upTimeGroup === "last_hours" ? moment(d).format("HH:ss") : moment(d).format("dd, Do");
                                }),
                                datasets:[{
                                    data: Object.values(data).map(function (e) {
                                        return e.toFixed(1);
                                    }),
                                    label: name + " Up Time",
                                    backgroundColor:"rgba(46, 204, 113,.3)",
                                    borderColor:"rgba(46, 204, 113,1.0)",
                                    borderWidth:1
                                },{
                                    data: Object.values(data).map(function (e) {
                                        return (100-e).toFixed(1);
                                    }),
                                    label: name +" Down Time",
                                    backgroundColor:"rgba(231, 76, 60,.3)",
                                    borderColor:"rgba(231, 76, 60,1.0)",
                                    borderWidth:1,
                                }]
                            },
                            options: {

                                scales: {
                                    xAxes: [{
                                        stacked:true,
                                    }],
                                    yAxes: [{
                                        stacked:true,
                                        ticks: {
                                            userCallback: function(value) {
                                                return value + " %";
                                            },
                                            min:0,
                                            max: 100,
                                            stepSize:25
                                        }
                                    }]
                                }
                            }
                        });
                    });
                }
            }());
        </script>
    @endif
</div>
