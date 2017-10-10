
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

var colorFunc = function(labels,today, uptime, dataset){
  return dataset.data.map(function(data, index) {
    var currentLabel = labels[index];
    return moment(
      currentLabel,
      "dd, Do MMM HH:ss"
    ).isSame(
      new Date(),
      dataset.filterBy === "last_days" ? "day" : "hour"
    ) ? today : uptime;
  });
}

Chart.pluginService.register({
  beforeUpdate: function(chartInstance) {
    var labels = chartInstance.data.labels;
    chartInstance.data.datasets.filter(function(dataset){
      return dataset.id === "up_time";
    })
    .forEach(function(dataset) {
      dataset.backgroundColor = colorFunc(
        labels,
        colors.today.background,
        colors.uptime.background,
        dataset
      );
      dataset.borderColor = colorFunc(
        labels,
        colors.today.border,
        colors.uptime.border,
        dataset
      );
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
                    filterBy: upTimeGroup,
                    data: Object.values(data).map(function (e) {
                        return e.toFixed(1);
                    }),
                    label: name + " Up Time",
                    backgroundColor:colors.uptime.background,
                    borderColor:colors.uptime.border,
                    borderWidth:1
                },{
                    id: "down_time",
                    filterBy: upTimeGroup,
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
                                  var url = "incidents/"+e.id;
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
