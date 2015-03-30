<h1>{{ trans('cachet.incidents.scheduled') }}</h1>

<div class="timeline schedule">
    @foreach($scheduledMaintenance as $schedule)
    <div class="panel panel-default">
        <div class="panel-heading">
            <strong>{{ $schedule->name }}</strong>, <small class="date"><abbr class="timeago" data-toggle="tooltip" data-placement="right" title="{{ $schedule->scheduled_at_formatted }}" data-timeago="{{ $schedule->scheduled_at_iso }}"></abbr></small>
        </div>
        <div class="panel-body">
            {!! $schedule->formattedMessage !!}
        </div>
    </div>
    @endforeach
</div>
