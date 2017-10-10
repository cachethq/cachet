@if($display_uptimes)
<h1>{{trans('uptimes.uptimes')}}</h1>
<div class="section-uptime">
    <div>
        <strong>{{trans('uptimes.see_data_for_range')}}</strong>
        <button id="btn-current-time-range" class="btn btn-primary">{{trans('uptimes.current_time')}}</button>

        <button id="btn-specify-date-range" class="btn btn-default">{{trans('uptimes.date_range')}}</button>
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
                                    {{ $group->name }} <span id="avaibility-group-{{ $group->id }}"></span>
                                </strong>
                            </div>
                            <div class="col-xs-2">
                                <div class="dropdown pull-right">
                                    <a href="javascript: void(0);" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><span class='filter'>Scope</span> <span class="caret"></span></a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="#" data-filter-type="last_hours">{{trans('uptimes.scope_hourly')}}</a></li>
                                        <li><a href="#" data-filter-type="last_days">{{trans('uptimes.scope_daily')}}</a></li>
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
                                            {{ $component->name }} <span id="avaibility-component-{{ $component->id }}"></span>
                                        </strong>
                                    </div>
                                    <div class="col-xs-2">
                                        <div class="dropdown pull-right">
                                            <a href="javascript: void(0);" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><span class='filter'>Scope</span> <span class="caret"></span></a>
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li><a href="#" data-filter-type="last_hours">{{trans('uptimes.scope_hourly')}}</a></li>
                                                <li><a href="#" data-filter-type="last_days">{{trans('uptimes.scope_daily')}}</a></li>
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

                var dateRange = null;

                $('.dropdown-toggle').dropdown();

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

                $("#btn-specify-date-range").on("click",function(){

                    var modal = $("#dateRangeModal");
                    modal.modal('toggle');
                    modal.find("input[type=submit]").removeAttr('disabled');

                    $('#to-date, #from-date').datetimepicker({
                        format: "YYYY-MM-DD H:00",
                        sideBySide:true,
                        icons: {
                            time: 'ion-clock',
                            date: 'ion-android-calendar',
                            up: 'ion-ios-arrow-up',
                            down: 'ion-ios-arrow-down',
                            previous: 'ion-ios-arrow-left',
                            next: 'ion-ios-arrow-right',
                            today: 'ion-android-home',
                            clear: 'ion-trash-a',
                        }
                    });

                    $("#to-date").on("dp.change", function (e) {
                       $('#from-date').data("DateTimePicker").minDate(e.date);
                    });

                    $("#from-date").on("dp.change", function (e) {
                       $('#to-date').data("DateTimePicker").maxDate(e.date);
                       $(this).data("DateTimePicker").maxDate(new Date()); // Can go in the future
                    });

                });

                $("#btn-current-time-range").on("click",function(){
                    dateRange = null;
                    $(this)
                        .removeClass("btn-default")
                        .addClass("btn-primary");
                    $("#btn-specify-date-range")
                        .removeClass("btn-primary")
                        .addClass("btn-default");
                    drawVisibleCharts();
                });

                $("body").on("submit","#date-range-form",function(e){
                    e.preventDefault();
                    dateRange = {
                        fromDate:$("#from-date").val(),
                        toDate:$("#to-date").val()
                    };
                    $("#btn-specify-date-range")
                        .removeClass("btn-default")
                        .addClass("btn-primary");
                    $("#btn-current-time-range")
                        .removeClass("btn-primary")
                        .addClass("btn-default");
                    $("#dateRangeModal").modal('toggle');

                    drawVisibleCharts();
                });


                $("body").on("click",".export-btn", function(e){
                  e.preventDefault();
                  var pararms = $.param({
                        format: $(this).data("format"),
                        range: dateRange
                  });
                  window.location= "/export?"+pararms;
                });

                Chart.defaults.global.elements.point.hitRadius = 10;
                Chart.defaults.global.responsiveAnimationDuration = 0;
                Chart.defaults.global.legend.display = false;

                //Bar from today have a different colors, as the day isn't finished
                Chart.pluginService.register({
                  beforeUpdate: function(chartInstance) {
                    var labels = chartInstance.data.labels;
                    chartInstance.data.datasets.filter(function(dataset){
                      return dataset.id === "up_time";
                    })
                    .forEach(function(dataset) {
                      dataset.backgroundColor = dataset.data.map(function(data, index) {
                        var currentLabel = labels[index];
                        return moment(
                          currentLabel,
                          "dd, Do MMM"
                        ).isSame(
                          new Date(),
                          "day"
                        ) ? colors.today.background : colors.uptime.background;
                      });
                      dataset.borderColor = dataset.data.map(function(data, index) {
                        var currentLabel = labels[index];
                        return moment(
                          currentLabel,
                          "dd, Do MMM"
                        ).isSame(
                          new Date(),
                          "day"
                        ) ? colors.today.border : colors.uptime.border;
                      });
                    });
                  }
                });


                var charts = {};

                // TODO be able to config this from dashboard
                var colors = {
                  uptime:{
                    background:"rgba(46, 204, 113,.7)",
                    border:"rgba(46, 204, 113,1.0)",
                  },
                  downtime:{
                    background:"rgba(231, 76, 60, .7)",
                    border:"rgba(231, 76, 60, 1.0)",
                  },
                  today:{
                    background:"rgba(200, 200, 200, .7)",
                    border:"rgba(200,200,200,1.0)"
                  }
                };

                $('a[data-filter-type]').on('click', function(e) {
                    e.preventDefault();
                    var $this = $(this), $li, $canvas;
                    $li = $this.parents('.graph-container');
                    $li.find('a[data-toggle=dropdown] span.filter').text($this.text());
                    $canvas = $li.find('canvas');
                    $canvas.data('uptime-group', $this.data('filter-type'));
                    drawChart($canvas);
                });

                drawVisibleCharts();

                function drawVisibleCharts(){
                    var canvasGroup = $('canvas[data-uptime-id]');
                    canvasGroup.each(function() {
                        var groupParent = $(this).parents('.group-uptime-container');
                        if(groupParent.html() == undefined || groupParent.is(":visible")){
                            drawChart($(this));
                        }
                    });
                }

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


                    $.getJSON('/uptimes_' + ( isGroupComponent ? "group/" : "component/") + upTimeId, { filter: upTimeGroup, range:dateRange }).done(function (result) {
                        var data = result.data.items;
                        var labels = result.data.labels;
                        var incidents = result.data.incidents;
                        var avaibility = result.data.avaibility;

                        $("#avaibility-" + (isGroupComponent ? "group-" : "component-") + upTimeId).html((avaibility*100).toFixed(2) + " %");

                        if (chart.chart !== null) {
                            chart.chart.destroy();
                        }

                        chart.chart = new Chart(chart.context, {
                            type: 'bar',
                            data: {
                                labels: labels.map(function(d){
                                    return upTimeGroup === "last_hours" ? moment(d).format("dd, Do MMM HH:ss") : moment(d).format("dd, Do MMM");
                                }),
                                datasets:[{
                                    id: "up_time",
                                    data: Object.values(data).map(function (e) {
                                        return e.toFixed(1);
                                    }),
                                    label: name + " Up Time",
                                    backgroundColor:colors.uptime.background,
                                    borderColor:colors.uptime.border,
                                    borderWidth:1
                                },{
                                    id: "down_time",
                                    data: Object.values(data).map(function (e) {
                                        return (100-e).toFixed(1);
                                    }),
                                    label: name +" Down Time",
                                    backgroundColor:colors.downtime.background,
                                    borderColor:colors.downtime.border,
                                    borderWidth:1,
                                }]
                            },
                            options: {
                                onClick: function(event,array){
                                  array
                                  .filter(function(e){
                                      return e._datasetIndex === 1
                                  })
                                  .map(function(e){
                                      var incidentsIds = Object.values(
                                        incidents
                                      )[e._index];

                                      if(incidentsIds && incidentsIds.length > 0){
                                          var modal = $('#incidentsModal');
                                          modal.modal('toggle');
                                          modal
                                          .find(".table-body")
                                          .html(
                                              incidentsIds.map(function(e){
                                                  var minDateFormatted = moment.unix(e.min_date).format("Do MMM, HH:mm");
                                                  var maxDateFormatted = e.max_date > 0  ? moment.unix(e.max_date).format("Do MMM, HH:mm") : "-";
                                                  var url = "{{route('core::get:incident',["id"=>""])}}/"+e.id;
                                                  var name = '<p><a target="_blank" href="'+url+'">' + e.name +"</a></p>";
                                                  var nUpdates = e.updates !== null ? e.updates : 0;
                                                  var fixedAt = moment.unix(e.fixed_at).format("Do MMM, HH:mm");
                                                  var isFixed = e.fixed ? "Yes ( "+fixedAt+" ) ":"No";
                                                  return "<tr>"
                                                    + "<td>"+name+"</td>"
                                                    + "<td>"+nUpdates+"</td>"
                                                    + "<td>"+e.down_time_hours.toFixed(1)+" h</td>"
                                                    + "<td>"+minDateFormatted+"</td>"
                                                    + "<td>"+maxDateFormatted+"</td>"
                                                    + "<td>"+isFixed+"</td>"
                                                  + "</tr>"
                                              }).join()
                                          );
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
                                                $('html,body').css('cursor','pointer');
                                            }else{
                                                $('html,body').css('cursor','default');
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
        <strong>{{trans('uptimes.export_data')}}</strong>
        <button role="button" data-format="csv" class="btn btn-default export-btn">CSV</button>

        <button role="button" data-format="xlsx" class="btn btn-default export-btn">Excel</button>
    </div>


    <div class="modal" id="incidentsModal">
        <div class="modal-dialog" role="document" style="width: 1200px">
            <div class="modal-content">
                <div class="modal-header">
                    <strong class="modal-title">{{trans('uptimes.incident_list')}}</strong>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>{{trans('uptimes.incident_list_name')}}</th>
                            <th>{{trans('uptimes.incident_list_updates')}}</th>
                            <th>{{trans('uptimes.incident_list_downtime')}}</th>
                            <th>{{trans('uptimes.incident_list_occured')}}</th>
                            <th>{{trans('uptimes.incident_list_last_update')}}</th>
                            <th>{{trans('uptimes.incident_list_fixed')}}</th>
                        </tr>
                        </thead>
                        <tbody class="table-body">
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="modal" id="dateRangeModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <strong class="modal-title">{{trans('uptimes.date_range_modal')}}</strong>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="date-range-form">
                    <div class="modal-body">
                        <div class="row">

                            <div class="col-md-6">
                                {{trans('uptimes.date_range_modal_min_date')}}
                            </div>

                            <div class="col-md-6">
                                <input id="to-date" required type="text" rel="datepicker-onlydate">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                {{trans('uptimes.date_range_modal_max_date')}}
                            </div>

                            <div class="col-md-6">
                                <input id="from-date" required type="text" rel="datepicker-onlydate">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="submit" class="btn btn-primary" value="Save"/>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endif
