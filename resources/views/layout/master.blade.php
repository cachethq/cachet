<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="env" content="{{ app('env') }}">
    <meta name="token" content="{{ csrf_token() }}">

    <!-- Mobile friendliness -->
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="description" content="@yield('description', trans('cachet.meta.description.overview', ['app' => $appName]))">

    <meta property="og:type" content="website">
    <meta property="og:title" content="@yield('title', $siteTitle)">
    <meta property="og:image" content=" {{ asset('/img/favicon.png') }}">
    <meta property="og:description" content="@yield('description', trans('cachet.meta.description.overview', ['app' => $appName]))">

    <!-- Mobile IE allows us to activate ClearType technology for smoothing fonts for easy reading -->
    <meta http-equiv="cleartype" content="on">

    <meta name="msapplication-TileColor" content="{{ $themeGreens }}" />
    <meta name="msapplication-TileImage" content="{{ asset('/img/favicon.png') }}" />

    <link href="{{ Request::fullUrl() }}" rel="canonical">

    @if (isset($favicon))
    <link rel="icon" href="{{ asset("/img/{$favicon}.ico") }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset("/img/{$favicon}.png") }}" type="image/png">
    @else
    <link rel="icon" href="{{ asset('/img/favicon.ico') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('/img/favicon.png') }}" type="image/png">
    @endif

    <link rel="apple-touch-icon" href="{{ asset('/img/apple-touch-icon.png') }}">
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('/img/apple-touch-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('/img/apple-touch-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('/img/apple-touch-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('/img/apple-touch-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('/img/apple-touch-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('/img/apple-touch-icon-152x152.png') }}">
    


    <title>@yield('title', $siteTitle)</title>

    @if($enableExternalDependencies)
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&amp;subset={{ $fontSubset }}" rel="stylesheet" type="text/css">
    @endif
    <link rel="stylesheet" href="{{ asset(mix('dist/css/app.css')) }} ">

    @include('partials.stylesheet')

    @include('partials.crowdin')

    @if($appStylesheet)
    <style type="text/css">
    {!! $appStylesheet !!}
    </style>
    @endif

    <script type="text/javascript">
        var Global = {};
        var refreshRate = parseInt("{{ $appRefreshRate }}");

        function refresh() {
            window.location.reload(true);
        }

        if (refreshRate > 0) {
            setTimeout(refresh, refreshRate * 1000);
        }

        Global.locale = '{{ $appLocale }}';
    </script>
    <script src="{{ asset(mix('dist/js/manifest.js')) }}"></script>
    <script src="{{ asset(mix('dist/js/vendor.js')) }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar/index.global.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js" integrity="sha512-qTXRIMyZIFb8iQcfjXWCO8+M5Tbc38Qi5WzdPOYZHIlZpzBHG3L3by84BBBOiRGiEb7KKtAOAs5qYdUiZiQNNQ==" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11" crossorigin="anonymous"></script>


</head>
<body class="status-page @yield('bodyClass')" style="display: flex; flex-direction: column;">
    @yield('outer-content')

    @include('partials.banner')

    <div class="container" id="app">
        <div class="row">
            <div class="col-md-12">
                @yield('content')
            </div>
            
        </div>
    </div>

    @yield('bottom-content')
    <script src="{{ asset(mix('dist/js/all.js')) }}"></script>
    @if (isset($incidents) && $incidents->isNotEmpty())
        <script>
            function saveCheckboxState() {
                let isChecked = document.getElementById('withIncident').checked;
                localStorage.setItem('withIncidentChecked', isChecked);
            }
            document.addEventListener('DOMContentLoaded', function() {
            let checkbox = document.getElementById('withIncident');

            let tagParam = '{{ request("tag") }}'; 
            if(!tagParam){
                    checkbox.disabled = true;
            }

            checkbox.addEventListener('change', function() {
                let isChecked = localStorage.getItem('withIncidentChecked');
                if (isChecked === "true"){
                let url = '/'; 
                
                
                if (checkbox.checked) {
                    url += '?tag='; 
                    if (tagParam) {
                        url += tagParam + '&withIncident=true' ; 
                    }
                }
                window.location.href = url;
                } else {
                    tagParam = '{{ request("tag") }}'
                    if (tagParam){
                        window.location.href =  '/?tag=' + tagParam;
                    }

                }
            });
            });

            document.addEventListener('DOMContentLoaded', function() {
            let capture = document.getElementById('captureButton');
            const Calendar = FullCalendar.Calendar;
            
            let calendar; 

            let filterAllButton = document.getElementById('filterAllButton');
            let filterUnstableButton = document.getElementById('filterUnstableButton');
            customButtons.style.display = 'none';
            filterAllButton.style.display = 'none';
            filterUnstableButton.style.display = 'none';
            
            capture.addEventListener('click', function() {
                let instabilityColorOne = "blue";
                let instabilityColorTwo = "orange";
                const calendarEl = document.getElementById('calendar');
                const calendarWrapper = document.querySelector('.calendar-wrapper');
                const caseEvent = document.querySelectorAll('.fc-daygrid-day-frame');
                filterAllButton.style.display = 'block';
                filterUnstableButton.style.display = 'block';

                const endLine = document.querySelectorAll('.end-line');

                calendarWrapper.style.display = 'block';
                customButtons.style.display = 'block';
                customButtons.style.display = 'flex';
                customButtons.style.flexDirection = 'column';
                calendarEl.style.position = 'relative';

                let incidents = {!! $incidents->toJson() !!};

                function formatTime(dateStr) {
                    let date = new Date(dateStr);
                    return moment(date).format('LT'); 
                }

                function createLegend() {
                    if (document.querySelector('.legend')) {
                        return; 
                    }
                    const legendContainer = document.createElement('div');
                    legendContainer.classList.add('legend');

                    const legendItem1 = document.createElement('div');
                    legendItem1.classList.add('legend-item');
                    const legendColor1 = document.createElement('div');
                    legendColor1.classList.add('legend-color1');
                    const legendText1 = document.createElement('div');
                    legendText1.classList.add('legend-text');
                    legendText1.textContent = 'No Instability planned';
                    legendItem1.appendChild(legendColor1);
                    legendItem1.appendChild(legendText1);

                    const legendItem2 = document.createElement('div');
                    legendItem2.classList.add('legend-item');
                    const legendColor2 = document.createElement('div');
                    legendColor2.classList.add('legend-color2');
                    const legendText2 = document.createElement('div');
                    legendText2.classList.add('legend-text');
                    legendText2.textContent = 'Risk of Instability';
                    legendItem2.appendChild(legendColor2);
                    legendItem2.appendChild(legendText2);

                    legendContainer.appendChild(legendItem1);
                    legendContainer.appendChild(legendItem2);
                    const toolbarChunk = document.querySelector('.fc-toolbar-chunk:nth-child(2)');
                    toolbarChunk.appendChild(legendContainer);
                }

                function renderCalendar(events) {
                    if (calendar) {
                        calendar.destroy();
                    }

                    calendar = new Calendar(calendarWrapper, {
                        events: events,
                        eventDidMount: function(info) {
                            let instability = info.event.extendedProps.instability;
                            let eventElement = info.el;
                            let endLine = document.createElement('div');
                            endLine.classList.add('end-line');
                            if (instability) {
                                endLine.style.backgroundColor = 'orange';
                            } else {
                                endLine.style.backgroundColor = 'blue';
                            }
                            eventElement.appendChild(endLine);
                        },
                        eventMouseEnter: function(info) {
                            let tooltip = document.createElement('div');
                            tooltip.classList.add('tooltip-coucou');
                            tooltip.innerText = info.event.title;
                            const eventTitleContainer = info.el.querySelector('.fc-event-title-container');
                            if (eventTitleContainer) {
                                eventTitleContainer.appendChild(tooltip);
                            } else {
                                info.el.appendChild(tooltip);
                            }
                            
                            const startDate = new Date(info.event.startStr);
                            const endDate = new Date(info.event.endStr);
                            const days = [];
                            for (let dt = startDate; dt <= endDate; dt.setDate(dt.getDate() + 1)) {
                                days.push(new Date(dt).toISOString().split('T')[0]);
                            }

                            days.forEach(date => {
                                const dayCells = document.querySelectorAll('.fc-daygrid-day[data-date="' + date + '"]');
                                dayCells.forEach(cell => cell.style.backgroundColor = 'rgb(237,239,240)');
                            });

                            info.el.addEventListener('mousemove', function(e) {
                                const rect = info.el.getBoundingClientRect();
                                tooltip.style.left = e.clientX - rect.left + 10 + 'px';
                                tooltip.style.top = e.clientY - rect.top + 10 + 'px';
                            });
                        },
                        eventMouseLeave: function(info) {
                            let tooltips = info.el.querySelectorAll('.tooltip-coucou');
                            tooltips.forEach(tooltip => tooltip.remove());

                            const startDate = new Date(info.event.startStr);
                            const endDate = new Date(info.event.endStr);
                            const days = [];
                            for (let dt = startDate; dt <= endDate; dt.setDate(dt.getDate() + 1)) {
                                days.push(new Date(dt).toISOString().split('T')[0]);
                            }

                            days.forEach(date => {
                                const dayCells = document.querySelectorAll('.fc-daygrid-day[data-date="' + date + '"]');
                                dayCells.forEach(cell => cell.style.backgroundColor = '');
                            });
                        }
                    });
                    calendar.render();
                    createLegend();

                    let closeButton = document.createElement('div');
                    closeButton.classList.add('close-button');
                    closeButton.innerHTML = '&times;';
                    calendarWrapper.appendChild(closeButton);
                    closeButton.addEventListener('click', function() {
                        calendarWrapper.style.display = 'none';
                        customButtons.style.display = 'none';
                    });
                }

                function setActiveButton(button) {
                    filterAllButton.classList.remove('active');
                    filterUnstableButton.classList.remove('active');
                    button.classList.add('active');
                }

                if (incidents.length > 0) {
                    let events = incidents.map(function(incident) {
                        return {
                            id: incident.id,
                            title: `${incident.name} at ${formatTime(incident.scheduled_at)}`,
                            start: incident.scheduled_at,
                            end: incident.completed_at,
                            instability: incident.instability,
                            allDay: incident.allDay 
                        };
                    });

                    filterUnstableButton.addEventListener('click', function() {
                        let unstableEvents = events.filter(event => event.instability);
                        renderCalendar(unstableEvents);
                        setActiveButton(filterUnstableButton);
                    });

                    filterAllButton.addEventListener('click', function() {
                        renderCalendar(events);
                        setActiveButton(filterAllButton);
                    });

                    let unstableEvents = events.filter(event => event.instability);
                    renderCalendar(unstableEvents);
                    setActiveButton(filterUnstableButton);
                } else {
                    renderCalendar([]);
                }
            });
        });
        </script>
        @endif
</body>
</html>
