<div class="timeline schedule">
    <div class="panel panel-default">
        <div class="panel-heading">
            <strong>{{ trans('cachet.incidents.scheduled') }}</strong>
        </div>
        <div class="list-group">
            @foreach($scheduled_maintenance as $schedule)
            <a href="{{ cachet_route('schedule', $schedule) }}" class="list-group-item">
                <strong>{{ $schedule->name }}</strong> <small class="date"><abbr class="timeago" data-toggle="tooltip" data-placement="right" title="{{ $schedule->scheduled_at_formatted }}" data-timeago="{{ $schedule->scheduled_at_iso }}"></abbr></small>
                {!! $schedule->formatted_message !!}
                @if($schedule->components->count() > 0)
                <hr>
                @foreach($schedule->components as $affected_component)
                <span class="label label-primary">{{ $affected_component->component->name }}</span>
                @endforeach
                @endif
            </a>
            @endforeach
        </div>
    </div>
</div>
