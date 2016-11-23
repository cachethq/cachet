<ul class="list-group">
    <li class="list-group-item">
        <div class="historical-charts" id="component-status-container" data-status-component-id="{{ $component->id }}">
            <div id="component-status-table"></div>
            <hr/>
            <canvas id="component-status-bar" height="128"></canvas>
            <div class="clearfix chart-pager">
                <a href="javascript: updateChart('prev');" class="pull-left">
                    <span aria-hidden="true">&laquo;</span>
                    {{ trans('cachet.status_transitions.previous_week') }}
                </a>
                <a href="javascript: updateChart('next');" class="pull-right">
                    {{ trans('cachet.status_transitions.next_week') }}
                    <span aria-hidden="true">&raquo;</span>
                </a>
            </div>
        </div>
    </li>
</ul>

<script>
    (function () {
        var charts, visibleWeek = 0;

        $('div[data-status-component-id]').each(function() {
            drawChart($(this), getMappingDays(0));
        });

        // Update the chart with previous or next week data.
        window.updateChart = function(direction) {
            if (direction != 'next' || visibleWeek < 0) {
                visibleWeek = (direction == 'prev') ? visibleWeek - 7 : (direction == 'next') ? visibleWeek + 7 : 0;
                drawChart($("#component-status-container"), getMappingDays(visibleWeek));
            }
        };

        function getMappingDays(startDay) {
            return _.map([startDay-7, startDay-6, startDay-5, startDay-4, startDay-3, startDay-2, startDay-1, startDay], function(daysAgo) {
                return moment.utc()
                        .hours(0)
                        .minutes(0)
                        .seconds(0)
                        .milliseconds(0)
                        .add(daysAgo, 'days');
            });
        }

        function drawChart($el, days) {
            var componentId = $el.data('status-component-id'),
                fromDate = days[0].toISOString(),
                toDate = days[days.length - 1].clone().add(1, 'days').toISOString();

            @if($component_group_selected)
            var baseRestUrl = '/status/transitions/group/',
                isGroup = true;
            @elseif ($component_selected)
            var baseRestUrl = '/status/transitions/component/',
                isGroup = false;
            @endif

            $.getJSON(baseRestUrl + componentId, {
                from: fromDate,
                to: toDate
            }).done(function (result) {

                // 1. Convert to durations.
                var durations = asDurations(result, days);
                if (typeof charts === 'undefined') {
                    charts = {
                        bar: {
                            context: document.getElementById("component-status-bar").getContext("2d"),
                            chart: null
                        }
                    };
                }

                // 2. Create the bar chart.
                var barChart = charts.bar,
                    barChartData = asBarChartData(durations, days);

                if (barChart.chart !== null) {
                    barChart.chart.destroy();
                }

                Chart.defaults.global.defaultFontFamily = "'Open Sans', 'Helvetica Neue', 'Helvetica', 'Arial', sans-serif";
                Chart.defaults.global.defaultFontColor = "#444";
                Chart.defaults.global.defaultFontStyle = "normal";

                barChart.chart = new Chart(barChart.context, {
                    type: "bar",
                    data: barChartData,
                    options: {
                        title: {
                            display: true,
                            text: '{{ trans("cachet.status_transitions.availability_chart.title") }}'
                        },
                        scales: {
                            xAxes: [{
                                stacked: true
                            }],
                            yAxes: [{
                                stacked: true,
                                scaleLabel: {
                                    display: true,
                                    labelString: '{{ trans("cachet.status_transitions.availability_chart.y_label") }}'
                                }
                            }]
                        },
                        legend: {
                            display: true,
                            position: "top",
                            labels: {
                                boxWidth: 30,
                                generateLabels: function(chart) {
                                    var data = chart.data;
                                    return _.isArray(data.datasets) ? _.map(data.datasets, function(dataset, i) {
                                        return {
                                            text: dataset.label + ' (' + formatNumber(dataset.percent * 100) + '%)',
                                            fillStyle: (!_.isArray(dataset.backgroundColor) ? dataset.backgroundColor : dataset.backgroundColor[0]),
                                            hidden: !chart.isDatasetVisible(i),
                                            lineCap: dataset.borderCapStyle,
                                            lineDash: dataset.borderDash,
                                            lineDashOffset: dataset.borderDashOffset,
                                            lineJoin: dataset.borderJoinStyle,
                                            lineWidth: dataset.borderWidth,
                                            strokeStyle: dataset.borderColor,
                                            pointStyle: dataset.pointStyle,
                                            // Below is extra data used for toggling the datasets.
                                            datasetIndex: i
                                        };
                                    }) : [];
                                }
                            }
                        },
                        tooltips: {
                            custom: function(tooltip) {
                                // Check if tooltip and tooltip.body.
                                if (!tooltip || !tooltip.body) {
                                    return;
                                }
                                // Read data.
                                var tooltipInstance = this,
                                    data = tooltipInstance._data,
                                    datasetIndex = tooltipInstance._active[0]._datasetIndex,
                                    index = tooltipInstance._active[0]._index,
                                    dataset = data.datasets[datasetIndex],
                                    value = formatNumber(dataset.data[index]);

                                // Set tooltip text.
                                tooltip.body = [{
                                    after: [],
                                    before: [],
                                    lines: [
                                        dataset.label + ' (' + value + '%)'
                                    ]
                                }];
                            }
                        }
                    }
                });

                // 3. Create Transitions Table:
                document.getElementById("component-status-table").innerHTML = asTable(durations, days);
                $("#component-status-table").find('[data-toggle="popover"]').popover({
                    container: 'body',
                    trigger: 'focus hover',
                    placement: 'top'
                });
            });

            function asDurations(data, days) {
                var result,
                    previousTransition = data.data.previous_transition.length ? data.data.previous_transition[0] : null;

                // Transform transition dates to durations.
                if (data.data.transitions.length) {
                    result = _.chain(data.data.transitions)
                            .sortBy(['utc_created_at'])
                            .reduce(function(result, transition, index, transitions) {
                                var currentDate = moment.utc(transition.utc_created_at),
                                    endOfDay = visibleWeek === 0 ? moment.utc() : moment.utc(days[days.length - 1]).endOf('day'),
                                    nextDate = (index !== transitions.length -1) ? moment.utc(transitions[index + 1].utc_created_at) : endOfDay,
                                    hours = nextDate.diff(currentDate, 'hours', true);

                                // If it's the first iteration, add the first transition.
                                if (index === 0) {
                                    result.durations.push({
                                        status: previousTransition ? previousTransition.status : 0,
                                        fromDate: days[0].clone(),
                                        toDate: currentDate.clone(),
                                        duration: currentDate.diff(days[0], 'hours', true),
                                        offendingComponents: (isGroup && previousTransition) ? previousTransition.offending_components : []
                                    });
                                }

                                result.durations.push({
                                    status: transition.status,
                                    fromDate: currentDate.clone(),
                                    toDate: nextDate.clone(),
                                    duration: hours,
                                    offendingComponents: isGroup ? transition.offending_components : []
                                });

                                result.sum += hours;

                                return result;
                            }, {
                                durations: [],
                                sum: 0
                            }).value();

                // If the transitions are empty, check the previous transition or display unknown status.
                } else {
                    var startOfWeek = moment.utc(days[0]).startOf('day'),
                        endOfWeek = moment.utc(days[days.length - 1]).endOf('day'),
                        duration = visibleWeek === 0 ? moment.utc().diff(startOfWeek, 'hours', true) : endOfWeek.diff(startOfWeek, 'hours', true);

                    result = {
                        durations: [{
                            status: previousTransition ? previousTransition.status : 0,
                            fromDate: startOfWeek,
                            toDate: visibleWeek === 0 ? moment.utc() : endOfWeek,
                            duration: duration,
                            offendingComponents: (isGroup && previousTransition) ? previousTransition.offending_components : []
                        }],
                        sum: duration
                    };
                }

                // Add percentages.
                _.forEach(result.durations, function(d, index) {
                    d.percentage = (d.duration  * 100 / result.sum) + '%' ;
                });

                return result.durations;
            }

            function groupDurations(durations, groupingPeriod) {
                var result = [],
                    group = 0,
                    total = groupingPeriod;

                _.forEach(durations, function(durationObj) {
                    var duration = durationObj.duration;
                    while (duration >= total) {
                        if (!result[group]) {
                            result[group] = [];
                        }
                        result[group].push(_.extend(_.cloneDeep(durationObj), {
                            durationInGroup: total,
                            percentageInGroup: (total / groupingPeriod)
                        }));
                        duration = duration - total;
                        group = group + 1; // Next Group
                        total = groupingPeriod;
                    }
                    // Add to dataset but do not increase the day number
                    if (!result[group]) {
                        result[group] = [];
                    }
                    result[group].push(_.extend(_.cloneDeep(durationObj), {
                        durationInGroup: duration,
                        percentageInGroup: (duration / groupingPeriod)
                    }));
                    total = total - duration;
                });

                return result;
            }

            function asBarChartData(durations, days) {

                // 1. Prepare result object
                var result = {
                    labels: _.map(days, function(d) {
                        return d.format('YYYY-MM-DD');
                    }),
                    total : 0,
                    datasets: [
                        {
                            label: "Unknown",
                            backgroundColor: 'rgba(136, 136, 136, 0.5)',
                            borderColor: 'rgba(136, 136, 136, 1)',
                            borderWidth: 1,
                            total : 0,
                            data: []
                        },
                        {
                            label: "Operational",
                            backgroundColor: 'rgba(126, 211, 33, 0.5)',
                            borderColor: 'rgba(126, 211, 33, 1)',
                            borderWidth: 1,
                            total : 0,
                            data: []
                        },
                        {
                            label: "Performance Issues",
                            backgroundColor: 'rgba(52, 152, 219, 0.5)',
                            borderColor: 'rgba(52, 152, 219, 1)',
                            borderWidth: 1,
                            total : 0,
                            data: []
                        },
                        {
                            label: "Partial Outage",
                            backgroundColor: 'rgba(247, 202, 24, 0.5)',
                            borderColor: 'rgba(247, 202, 24, 1)',
                            borderWidth: 1,
                            total : 0,
                            data: []
                        },
                        {
                            label: "Major Outage",
                            backgroundColor: 'rgba(255, 111, 111, 0.5)',
                            borderColor: 'rgba(255, 111, 111, 1)',
                            borderWidth: 1,
                            total : 0,
                            data: []
                        }
                    ]
                };

                // 2. Fill the Dataset based on durations
                // 2.1. Init with '0'
                _.forEach(result.datasets, function(dataset) {
                    dataset.data = _.times(days.length, _.constant(0));
                });

                // 2.2. Group Durations in 24 hours groups
                var groupedDurations = groupDurations(durations, 24);

                // 2.3 Iterate and add to barChart
                _.forEach(groupedDurations, function(durationsInDay, day) {
                    _.forEach(durationsInDay, function(durationObj) {
                        var status = durationObj.status,
                            duration = durationObj.durationInGroup,
                            percent = durationObj.percentageInGroup;

                        result.datasets[status].data[day] += percent * 100;
                        result.datasets[status].total += duration;
                        result.total += duration;
                    });
                });

                // 2.3. Add dataset percentage
                _.forEach(result.datasets, function(dataset) {
                    dataset.percent = dataset.total / result.total;
                });

                return result;
            }

            function asTable(durations, days) {
                var tableTemplate = _.template(
                        '<div class="transition-chart">' +
                        '    <p class="chart-title">{{ trans("cachet.status_transitions.transition_chart.title") }}</p>' +
                        '    <% _.forEach(data, function(row) { %>' +
                        '    <div>' +
                        '        <div class="pull-left legend-column">'+
                        '        <small><%- row.startDate %></small>'+
                        '    </div>' +
                        '    <div class="progress">' +
                        '        <% _.forEach(row.durations, function(d) { %>' +
                        '        <div class="progress-bar" style="width: <%- d.width * 100 %>%; background-color:<%- d.backgroundColor %>">' +
                        '            <label data-toggle="popover" data-content="<%- d.text %>" data-html="true">' +
                        '                <input class="sr-only" type="radio" name="status">' +
                        '            </label>' +
                        '        </div>' +
                        '        <% }); %>' +
                        '    </div>' +
                        '    <div class="clearfix"></div>' +
                        '    <% }); %>' +
                        '</div>'
                );

                var statusText = [{
                    label: 'Unknown',
                    backgroundColor: 'rgba(136, 136, 136, 0.5)',
                    statusClass: 'greys'
                },
                {
                    label: 'Operational',
                    backgroundColor: 'rgba(126, 211, 33, 0.5)',
                    statusClass: 'greens'
                },
                {
                    label: 'Performance Issues',
                    backgroundColor: 'rgba(52, 152, 219, 0.5)',
                    statusClass: 'blues'
                },
                {
                    label: 'Partial Outage',
                    backgroundColor: 'rgba(247, 202, 24, 0.5)',
                    statusClass: 'yellows'
                },
                {
                    label: 'Major Outage',
                    backgroundColor: 'rgba(255, 111, 111, 0.5)',
                    statusClass: 'reds'
                }];

                // 1. Group By Day
                var templateData = [],
                    groupingPeriod = 24,
                    groupedDurations = groupDurations(durations, groupingPeriod);

                // 2. Map to templateData
                _.forEach(groupedDurations, function(durations, group) {
                    var fromDate = days[0].clone().add(group * groupingPeriod, 'hours'),
                        toDate = fromDate.clone().add(groupingPeriod, 'hours'),
                        groupData = _.chain(durations)
                            .filter(function(d) {
                                return d.duration > 0;
                            })
                            .map(function(d) {
                                var text = '<div class="transition-tooltip">' +
                                        '<div class="status-title clearfix">' +
                                            '<i class="pull-right ion ion-ios-circle-filled ' + statusText[d.status].statusClass + '"></i>' +
                                            '<span class="' + statusText[d.status].statusClass + '">' + statusText[d.status].label + '</span>' +
                                        '</div>' +
                                        '<dl>' +
                                            '<dt>{{ trans("cachet.status_transitions.transition_chart.tooltip.from_date") }}</dt><dd>'+ d.fromDate.toISOString() + '</dd>' +
                                            '<dt>{{ trans("cachet.status_transitions.transition_chart.tooltip.to_date") }}</dt><dd>' + d.toDate.toISOString() + '</dd>' +
                                            '<dt>{{ trans("cachet.status_transitions.transition_chart.tooltip.duration") }}</dt><dd>' + humanizeDuration(d.duration) + '</dd>';

                                if (isGroup && d.offendingComponents.length > 0) {
                                    text += '<dt>{{ trans("cachet.status_transitions.transition_chart.tooltip.components") }}</dt><dd><ul>';
                                    for (var i = 0; i < d.offendingComponents.length; i++) {
                                        text += '<li>' + d.offendingComponents[i]['name'] + ': ' + d.offendingComponents[i]['status'] + '</li>';
                                    }
                                    text += '</ul></dd>';
                                }
                                text += '</dl></div>';

                                return {
                                    width: d.percentageInGroup,
                                    backgroundColor: statusText[d.status].backgroundColor,
                                    text: text
                                };
                            })
                            .value();

                    templateData.push({
                        startDate: fromDate.format('YYYY-MM-DD'),
                        endDate: toDate.format('YYYY-MM-DD'),
                        durations: groupData
                    });
                });

                return tableTemplate({
                    data: templateData
                });
            }

            function formatNumber(num) {
                return (num.toFixed(1) * 1).toString();
            }

            function humanizeDuration(duration) {
                var hours = Math.floor(duration),
                    minutes = Math.floor((duration - hours) * 60),
                    seconds = Math.floor(((duration - hours) * 60 - minutes) * 60);

                return hours + ' hours, ' + minutes + ' minutes, ' + seconds + ' seconds';
            }
        }
    }());
</script>
