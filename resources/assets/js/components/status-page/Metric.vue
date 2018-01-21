<template>
    <div>
        <div class="row">
            <div class="col-xs-10">
                <strong>
                    {{metric.name}}

                    <i class="ion ion-ios-help-outline" data-toggle="tooltip" :data-title="metric.description" v-if="metric.description"></i>
                </strong>
            </div>
            <div class="col-xs-2">
                <div class="dropdown pull-right">
                    <a href='javascript: void(0)' class="btn btn-default dropdown-toggle" data-toggle="dropdown"><span class='filter'>{{view.title || metric.default_view_name}}</span> <span class="caret"></span></a>

                    <ul class="dropdown-menu dropdown-menu-right">
                        <!-- TODO: Make these dynamic translations -->
                        <li><a @click="changeView('last_hour', 'Last Hour')">Last Hour</a></li>
                        <li><a @click="changeView('today', 'Last 12 Hours')">Last 12 Hours</a></li>
                        <li><a @click="changeView('week', 'Week')">Week</a></li>
                        <li><a @click="changeView('month', 'Month')">Month</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <canvas :id="metricId" height="160" width="600"></canvas>
            </div>
        </div>
    </div>
</template>

<script>
const Chart = require('chart.js')
const _ = require('lodash')

// Configure Chart.js
Chart.defaults.global.elements.point.hitRadius = 10
Chart.defaults.global.responsiveAnimationDuration = 1000
Chart.defaults.global.legend.display = false

module.exports = {
    props: [
        'metric',
    ],
    data () {
        return {
            canvas: null,
            context: null,
            chart: null,
            data: null,
            view: {
                param: null,
                title: null,
            },
            loading: false,
        }
    },
    mounted () {
        this.canvas = document.getElementById(this.metricId)
        this.context = this.canvas.getContext('2d')

        this.getData()

        $('.dropdown-toggle').dropdown()
    },
    computed: {
        metricId () {
            return `metric-${this.metric.id}`
        }
    },
    watch: {
        loading (val) {
            this.context.clearRect(0, 0, this.canvas.width, this.canvas.height)

            this.context.fillStyle = "#666"
            this.context.font = '44px -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol"'

            const textString = "Loading data",
                textWidth = this.context.measureText(textString).width

            this.canvas.textBaseline = 'middle'
            this.canvas.textAlign = "center"

            this.context.fillText(textString , (this.canvas.width / 2) - (textWidth / 2), 100)
        }
    },
    methods: {
        getData () {
            this.loading = true

            return axios.get('/metrics/'+this.metric.id, {
                params: {
                    filter: this.view.param
                }
            }).then(response => {
                this.data = response.data.data.items

                this.loading = false

                this.updateChart()
            })
        },
        changeView (param, title) {
            // Don't reload the same view.
            if (this.view.param === param) return

            this.view = {
                param: param,
                title: title
            }

            this.getData().then(this.updateChart)
        },
        updateChart () {
            if (this.chart !== null) {
                this.chart.destroy()
            }
            //Used in tooltip callback where this.metric is not the same.
            var metric = this.metric;
            /*
             * Datetimes are used as keys instead of just time in order to
             * improve ordering of labels in "Last 12 hours", so we cut the
             * labels.
             * This cutting is done only if there is an hour in the string, so
             * if the view by day is set it doesn't fail.
             */
            var data_keys = _.keys(this.data);
            if (0 < data_keys.length && data_keys[0].length > 10) {
                for (var i = 0; i < data_keys.length; i++) {
                    data_keys[i] = data_keys[i].substr(11);
                }
            }
            this.chart = new Chart(this.context, {
                type: 'line',
                data: {
                    labels: data_keys,
                    datasets: [{
                        data: _.values(this.data),
                        // backgroundColor: "{{ $theme_metrics }}",
                        // borderColor: "{{ color_darken($theme_metrics, -0.1) }}",
                        // pointBackgroundColor: "{{ color_darken($theme_metrics, -0.1) }}",
                        // pointBorderColor: "{{ color_darken($theme_metrics, -0.1) }}",
                        // pointHoverBackgroundColor: "{{ color_darken($theme_metrics, -0.2) }}",
                        // pointHoverBorderColor: "{{ color_darken($theme_metrics, -0.2) }}"
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true,
                                suggestedMax: 0.1,
                                // fixedStepSize: result.data.metric.places,
                                callback: function(tickValue, index, ticks) {
                                    let delta = ticks[1] - ticks[0]

                                    // If we have a number like 2.5 as the delta, figure out how many decimal places we need
                                    if (Math.abs(delta) > 1) {
                                        if (tickValue !== Math.floor(tickValue)) {
                                            delta = tickValue - Math.floor(tickValue)
                                        }
                                    }

                                    const logDelta = Chart.helpers.log10(Math.abs(delta))
                                    let tickString = ''

                                    if (tickValue !== 0) {
                                        let numDecimal = -1 * Math.floor(logDelta)
                                        numDecimal = Math.max(Math.min(numDecimal, 2), 0) // Use as many places as the metric defines
                                        tickString = tickValue.toFixed(numDecimal)
                                    } else {
                                        tickString = '0' // Never show decimal places for 0
                                    }

                                    return tickString
                                }
                            }
                        }]
                    },
                    tooltips: {
                        callbacks: {
                            label: function(tooltipItem, data) {
                                return tooltipItem.yLabel + ' ' + metric.suffix;
                            }
                        }
                    }
            }})
        }
    }
}
</script>
