@if($current_user)
<div class="pull-right btn-group">
    <a href="{{ cachet_route('dashboard.incidents.edit', ['id' => $incident->id]) }}" class="btn btn-default">{{ trans('forms.edit') }}</a>
    <a href="{{ cachet_route('dashboard.incidents.delete', ['id' => $incident->id], 'delete') }}" class="btn btn-danger confirm-action" data-method='DELETE'>{{ trans('forms.delete') }}</a>
</div>
@endif
@if($incident->component)
<span class="label label-default">{{ $incident->component->name }}</span>
@endif

<h3 class="incident__name">
    <i class="{{ $incident->latest_icon }}"></i>
    <a href="{{ cachet_route('incident', ['id' => $incident->id]) }}">
        {{ $incident->name }} {{ $incident->isScheduled ? trans("cachet.incidents.scheduled_at", ["timestamp" => $incident->scheduled_at_diff]) : null }}
    </a>
    <small class="date">
        <abbr class="timeago" data-toggle="tooltip" data-placement="right" title="{{ $incident->timestamp_formatted }}" data-timeago="{{ $incident->timestamp_iso }}"></abbr>
    </small>
</h3>

<div class="incident-updates">
    @if($incident->updates->count())
        @foreach($incident->updates as $update)
        <div class="incident-update row">
            <div class="col-sm-12">
                <div class="incident-update__status text-uppercase pull-left">
                    <i class="{{ $update->icon }}" title="{{ $update->human_status }}" data-toggle="tooltip"></i>
                    <strong>{{ $update->human_status }}</strong>
                    -
                </div>
                <span class="incident-update__message markdown-body">
                    {!! $update->formattedMessage !!}
                </span>
                <small class="incident-update__time">
                    {{ $update->timestamp_formatted }}
                </small>
            </div>
        </div>
        @endforeach
    @endif
    <div class="row">
        <div class="col-sm-12">
            <div class="incident-update__status text-uppercase pull-left">
                <i class="{{ $incident->icon }}" title="{{ $incident->human_status }}" data-toggle="tooltip"></i>
                <strong>{{ $incident->human_status }}</strong>
                -
            </div>
            <span class="markdown-body">
                {!! $incident->formattedMessage !!}
            </span>
            <small class="incident-update__time">
                {{ $incident->timestamp_formatted }}
            </small>
        </div>
    </div>
</div>
