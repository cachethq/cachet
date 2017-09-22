<h1>Uptimes</h1>
<div class="section-uptime">
    <div>
        <strong>See data for</strong>
        <a href="#" role="button" class="btn btn-primary">Current time</a>

        <a href="#" role="button" class="btn btn-default">Q1</a>

        <a href="#" role="button" class="btn btn-default">Q2</a>

        <a href="#" role="button" class="btn btn-default">Q3</a>

        <a href="#" role="button" class="btn btn-default">Q4</a>
    </div>
    <br>
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
                                <a class="per-component-graph-trigger btn btn-info" role="button" data-show-graphs="uptime-graph-per-component-group-{{$group->id}}">Show graphs per component</a>
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
                        $(this).html("Show graphs per component");
                    }else{
                        elemToShow.show("fast");
                        elemToShow.find("canvas").each(function(){
                            drawChart($(this));
                        });
                        $(this).html("Hide graphs per component");
                    }
                });


                Chart.defaults.global.elements.point.hitRadius = 10;
                Chart.defaults.global.responsiveAnimationDuration = 0;
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
                    var groupParent = $(this).parents('.group-uptime-container');
                    if(groupParent.html() == undefined || groupParent.is(":visible")){
                        drawChart($(this));
                    }
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
                        var incidents = result.data.incidentsIds;
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
                                    backgroundColor:"rgba(46, 204, 113,.7)",
                                    borderColor:"rgba(46, 204, 113,1.0)",
                                    borderWidth:1
                                },{
                                    data: Object.values(data).map(function (e) {
                                        return (100-e).toFixed(1);
                                    }),
                                    label: name +" Down Time",
                                    backgroundColor:"rgba(231, 76, 60,.7)",
                                    borderColor:"rgba(231, 76, 60,1.0)",
                                    borderWidth:1,
                                }]
                            },
                            options: {
                                onClick: function(event,array){
                                  array.map(function(e){
                                      if(e._datasetIndex === 1){
                                          var incidentsIds = Object.values(incidents)[e._index];
                                          if(incidentsIds.length > 0){
                                              var modal = $('#incidentsModal');
                                              modal.modal('toggle');
                                              modal.find(".table-body").html(incidentsIds.map(function(e){
                                                  var minDateFormatted = moment.unix(e.min_date).format("Do MMM, HH:m");
                                                  var maxDateFormatted = moment.unix(e.max_date).format("Do MMM, HH:m");
                                                  var url = "{{route('core::get:incident',["id"=>""])}}/"+e.id;
                                                  var name = '<p><a target="_blank" href="'+url+'">' + e.name +"</a></p>";
                                                  return "<tr>"
                                                            + "<td>"+name+"</td>"
                                                            + "<td>0</td>"
                                                            + "<td>0</td>"
                                                            + "<td>"+minDateFormatted+"</td>"
                                                            + "<td>"+maxDateFormatted+"</td>"
                                                          + "</tr>"
                                              }).reduce(function(a,b){
                                                  return a.toString() + b.toString();
                                              }));
                                          }
                                      }
                                  });
                                },
                                tooltips: {
                                    enabled: true,
                                    mode: 'single',
                                    callbacks: {
                                        label: function(tooltipItems, data) {
                                            var nIncidents = 0;
                                            if(tooltipItems.datasetIndex === 1){
                                                nIncidents = Object.values(incidents)[tooltipItems.index].length;
                                            }
                                            return tooltipItems.yLabel + "% Of "+ (tooltipItems.datasetIndex === 1 ? "Down Time " : "Up Time, ") + nIncidents + " Incidents";
                                        }
                                    }
                                },

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
                                            stepSize:50
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
    <div>
        <strong>Export Data in </strong>
        <a href="#" role="button" class="btn btn-default">CSV</a>

        <a href="#" role="button" class="btn btn-default">Excel</a>

        <a href="#" role="button" class="btn btn-default">PNG</a>
    </div>


    <div class="modal" id="incidentsModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <strong class="modal-title">Incidents list</strong>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Updates</th>
                            <th>Down time</th>
                            <th>Started at</th>
                            <th>Last update</th>
                        </tr>
                        </thead>
                        <tbody class="table-body">
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>
