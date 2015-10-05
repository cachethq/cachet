
<div class="timeline schedule">
    <div class="panel panel-info">
        <div class="panel-heading">
            <strong>{{ trans('cachet.incidents.scheduled') }}</strong>
        </div>
        <div class="list-group">
            @foreach($scheduled_maintenance as $schedule)
            <div class="list-group-item">
                <strong>{{ $schedule->name }}</strong> <small class="date"><abbr class="timeago" data-toggle="tooltip" data-placement="right" title="{{ $schedule->scheduled_at_formatted }}" data-timeago="{{ $schedule->scheduled_at_iso }}"></abbr></small>
                {!! $schedule->formattedMessage !!}
            </div>
            @endforeach
        </div>
    </div>
</div>
