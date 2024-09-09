@extends('layout.dashboard')

@section('content')
    <div class="content-panel">
        @includeWhen(isset($subMenu), 'dashboard.partials.sub-sidebar')
        <div class="content-wrapper">
            <div class="header sub-header">
                <span class="uppercase">
                    <i class="ion ion-android-calendar"></i> {{ trans('dashboard.schedule.schedule') }}
                </span>
                <a class="btn btn-md btn-success pull-right" href="{{ cachet_route('dashboard.schedule.create') }}">
                    {{ trans('dashboard.schedule.add.title') }}
                </a>
                <div class="clearfix"></div>
            </div>
            <div class="top-of-key">
                <div id="customButtons" style="margin-top: 10px; margin-bottom: 10px;">
                    <button id="calendarButton" class="btn active">Calendar</button>
                    <button id="listButton" class="btn">List</button>
                    <button id="filterAllButton" class="btn">All Events</button>
                    <button id="filterUnstableButton" class="btn">Unstable Events</button>
                </div>      
                    
                <div class="legend">
                    <div class="legend-item">
                        <div class="legend-color1"></div>
                        <div class="legend-text">No Instability planned</div>
                    </div>
                    <div class="legend-item">
                        <div class="legend-color2" ></div>
                        <div class="legend-text">Risk of Instability</div>
                    </div>
                </div>
            </div>

            <div id="external-events" class="list-events">
                <!-- Contenu de la liste -->
                <div class="striped-list">
                    @foreach($schedule as $incident)
                        <div class="row striped-list-item">
                            <div class="col-xs-6">
                                <strong>{{ $incident->name }}</strong>
                                <br>
                                {{ trans('dashboard.schedule.scheduled_at', ['timestamp' => $incident->scheduled_at_formatted]) }}
                                @if($incident->message)
                                    <p><small>{{ Str::words($incident->message, 5) }}</small></p>
                                @endif
                            </div>
                            <div class="col-xs-6 text-right">
                                <a href="{{ cachet_route('dashboard.schedule.edit', [$incident->id]) }}" class="btn btn-default">{{ trans('forms.edit') }}</a>
                                <a href="{{ cachet_route('dashboard.schedule.delete', [$incident->id], 'delete') }}" class="btn btn-danger confirm-action" data-method='DELETE'>{{ trans('forms.delete') }}</a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div id="calendar"></div>
        </div>
    </div>
@stop

<script src="https://cdn.jsdelivr.net/npm/fullcalendar/index.global.min.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11" crossorigin="anonymous"></script>


<script>
document.addEventListener('DOMContentLoaded', function() {
    const Draggable = FullCalendar.Draggable;
    const Calendar = FullCalendar.Calendar;

    let instabilityColorOne = "blue";
    let instabilityColorTwo = "orange";

    const containerEl = document.getElementById('external-events');
    const calendarEl = document.getElementById('calendar');
    
    let incidents = {!! $schedule->toJson() !!};
    let calendar;
    
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });


    function formatTime(dateStr) {
        let date = new Date(dateStr);
        return moment(date).format('LT'); 
    }

    function renderCalendar(events) {
        if (calendar) {
            calendar.destroy();
        }
        calendar = new Calendar(calendarEl, {
            headerToolbar: {
                left: 'prev,next today',
                center: 'title',
                right: 'dayGridMonth'
            },
            droppable: true,
            events: events,
            eventDrop: function(info) {
                let event = info.event;
                let id = event.id;
                let start = event.start.toISOString();
                let end = event.end ? event.end.toISOString() : null;

                let data = {
                    _token: $('meta[name="csrf-token"]').attr('content'),
                    name: event.title.split(' at ')[0],
                    scheduled_at: start,
                    completed_at: end
                };
                
                // Log the data to the console
                console.log('Sending data:', data);

                $.ajax({
                    url: '/dashboard/schedule/' + id,
                    method: 'PUT',
                    data: data,
                    success: function(response) {
                        Swal.fire({
                            title: 'Success',
                            text: 'Event updated successfully',
                            icon: 'success'
                        });
                    },
                    error: function(xhr, status, error) {
                        Swal.fire({
                            title: 'Error',
                            text: 'Failed to update event: ' + xhr.responseText,
                            icon: 'error'
                        });
                        info.revert();
                    }
                });
            },
            eventDidMount: function(info) {
                let instability = info.event.extendedProps.instability;
                let eventElement = info.el;
                let endLine = document.createElement('div');
                endLine.classList.add('end-line');
                endLine.style.backgroundColor = instability ? instabilityColorTwo : instabilityColorOne;
                eventElement.appendChild(endLine);
            },
            eventMouseEnter: function(info) {
                let deleteForm = document.createElement('form');
                deleteForm.method = 'POST';
                deleteForm.style.marginBottom = '0';

                let methodInput = document.createElement('input');
                methodInput.type = 'hidden';
                methodInput.name = '_method';
                methodInput.value = 'DELETE';
                deleteForm.appendChild(methodInput);

                let csrfTokenInput = document.createElement('input');
                csrfTokenInput.type = 'hidden';
                csrfTokenInput.name = '_token';
                csrfTokenInput.value = '{{ csrf_token() }}';
                deleteForm.appendChild(csrfTokenInput);

                let deleteButton = document.createElement('button');
                deleteButton.type = 'button';
                let trashIcon = document.createElement('img');
                trashIcon.src = 'https://img.icons8.com/fluency-systems-regular/48/trash--v1.png';
                trashIcon.alt = 'Poubelle';
                trashIcon.width = '16';
                trashIcon.style.marginRight = '50px';
                deleteButton.appendChild(trashIcon);
                deleteButton.style.border = 'none';
                deleteButton.style.background = 'none';
                deleteButton.style.padding = '0';
                deleteButton.style.cursor = 'pointer';

                let eventId = info.event.id;
                let deleteUrl = "/dashboard/schedule/" + eventId;
                deleteForm.action = deleteUrl;

                deleteButton.addEventListener('click', function(event) {
                    Swal.fire({
                        title: 'Are you sure?',
                        text: "You won't be able to revert this!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Yes, delete it!'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            let deleteForm = document.createElement('form');
                            deleteForm.method = 'POST';
                            deleteForm.action = deleteUrl

                            let methodInput = document.createElement('input');
                            methodInput.type = 'hidden';
                            methodInput.name = '_method';
                            methodInput.value = 'DELETE';
                            deleteForm.appendChild(methodInput);

                            let csrfTokenInput = document.createElement('input');
                            csrfTokenInput.type = 'hidden';
                            csrfTokenInput.name = '_token';
                            csrfTokenInput.value = '{{ csrf_token() }}';
                            deleteForm.appendChild(csrfTokenInput);

                            document.body.appendChild(deleteForm);
                            deleteForm.submit();
                        }
                    });
                });

                deleteForm.appendChild(deleteButton);
                info.el.appendChild(deleteForm);

                let fc_event_title = info.el.querySelector('.fc-event-title');
                fc_event_title.addEventListener('click', function(event) {
                    window.location.href = '{{ cachet_route("dashboard.schedule.edit", [""]) }}' + '/' + info.event.id;
                });
            },
            eventMouseLeave: function(info) {
                let deleteForm = info.el.querySelector('form');
                if (deleteForm) {
                    deleteForm.parentNode.removeChild(deleteForm);
                }
            },
        });
        calendar.render();
    }

    function filterEvents(instability) {
        let filteredEvents = incidents.filter(incident => incident.instability === instability);
        renderCalendar(filteredEvents);
    }

    if (incidents.length > 0) {
        let events = incidents.map(function(incident) {
            return {
                id: incident.id,
                title: `${incident.name} at ${formatTime(incident.scheduled_at)}`,
                start: incident.scheduled_at,
                end: incident.completed_at,
                instability: incident.instability
            };
        });
        $('#listButton').on('click', function() {
            $('#calendar').hide();
            $('#external-events').show();
            $(this).addClass('active');
            $('#calendarButton').removeClass('active');
            $('#filterAllButton, #filterUnstableButton').hide();
        });

        $('#calendarButton').on('click', function() {
            $('#external-events').hide();
            $('#calendar').show();
            $(this).addClass('active');
            $('#listButton').removeClass('active');
            $('#filterAllButton, #filterUnstableButton').show();
        });

        $('#filterAllButton').on('click', function() {
            renderCalendar(events);
        });

        $('#filterUnstableButton').on('click', function() {
            let unstableEvents = events.filter(event => event.instability);
            renderCalendar(unstableEvents);
        });

        $('#filterStableButton').on('click', function() {
            let stableEvents = events.filter(event => !event.instability);
            renderCalendar(stableEvents);
        });

        renderCalendar(events);
    } else {
        $('#listButton').on('click', function() {
            $('#external-events').html("<p>There are no events</p>");
            $('#external-events').show();
            $('#calendar').hide();
            $(this).addClass('active');
            $('#calendarButton').removeClass('active');
        });

        $('#calendarButton').on('click', function() {
            $('#external-events').hide();
            $('#calendar').show();
            $(this).addClass('active');
            $('#listButton').removeClass('active');
        });

        renderCalendar([]);
    }
});

</script>
