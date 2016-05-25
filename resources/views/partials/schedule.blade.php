<div class="timeline schedule">
    <div class="panel panel-default">
        <div class="panel-heading">
            <strong>{{ trans('cachet.incidents.scheduled') }}</strong>
        </div>
        <div class="list-group">
            @foreach($scheduled_maintenance as $schedule)
            <a href="{{ route('schedule', $schedule) }}" class="list-group-item">
                <strong>{{ $schedule->name }}</strong> <small class="date"><abbr class="timeago" data-toggle="tooltip" data-placement="right" title="{{ $schedule->scheduled_at_formatted }}" data-timeago="{{ $schedule->scheduled_at_iso }}"></abbr></small>
                {!! $schedule->formattedMessage !!}
                @if($schedule->affected_components->count() > 0)
                <hr>
                @foreach($schedule->affected_components as $affected_component)
                <span class="label label-primary">{{ $affected_component->component->name }}</span>
                @endforeach
                @endif
            </a>
            @endforeach
        </div>
    </div>
</div>
