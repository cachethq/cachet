<h1>{{ trans('cachet.incidents.scheduled') }}</h1>

<div class="timeline">
    @foreach($scheduledMaintenance as $schedule)
    <div class="panel panel-message">
        <div class="panel-heading">
            <strong>{{ $schedule->name }}</strong>
            <br>
            <small class="date">
                <abbr class="timeago" data-toggle="tooltip" data-placement="right" title="{{ $schedule->scheduled_at_formatted }}" data-timeago="{{ $schedule->scheduled_at_iso }}">
                </abbr>
            </small>
        </div>
        <div class="panel-body">
            <p>{{ $schedule->formattedMessage }}</p>
        </div>
    </div>
    @endforeach
</div>
