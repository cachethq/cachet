@if($current_user)
<div class="pull-right btn-group">
    <a href="{{ cachet_route('dashboard.incidents.edit', ['id' => $incident->id]) }}" class="btn btn-default">{{ trans('forms.edit') }}</a>
    <a href="{{ cachet_route('dashboard.incidents.delete', ['id' => $incident->id], 'delete') }}" class="btn btn-danger confirm-action" data-method='DELETE'>{{ trans('forms.delete') }}</a>
</div>
@endif
@if($incident->component)
<span class="label label-default">{{ $incident->component->name }}</span>
@endif

<div class="incident__name">
    <div class="incident__name-link">
        <a href="{{ cachet_route('incident', ['id' => $incident->id]) }}">
            {{ $incident->name }} {{ $incident->isScheduled ? trans("cachet.incidents.scheduled_at", ["timestamp" => $incident->scheduled_at_diff]) : null }}
        </a>
    </div>
    <div class="incident__name-icon">
        <i class="{{ $incident->latest_icon }}"></i>
    </div>
</div>

<div class="incident-updates">
    @if($incident->updates->count())
    @foreach($incident->updates as $update)
    <div class="incident-update">
        <div class="incident-update__icon">
            <i class="{{ $update->icon }}" title="{{ $update->human_status }}" data-toggle="tooltip"></i>
        </div>
        <div class="incident-update__status">
            {{ $update->human_status }}
        </div>
        <div class="incident-update__message markdown-body">
            {!! $update->formatted_message !!}
        </div>
        <div class="incident-update__time">
            {{ $update->timestamp_formatted }}
        </div>
    </div>
    @endforeach
    @endif

    {{-- <div class="row">
        <div class="col-sm-12">
            <div class="incident-update__status text-uppercase pull-left">
                <i class="{{ $incident->icon }}" title="{{ $incident->human_status }}" data-toggle="tooltip"></i>
                <strong>{{ $incident->human_status }}</strong>
                -
            </div>
            <span class="markdown-body">
                {!! $incident->formatted_message !!}
            </span>
            <small class="incident-update__time">
                {{ $incident->timestamp_formatted }}
            </small>
        </div>
    </div> --}}

    <div class="incident-update">
        <div class="incident-update__icon">
            <i class="{{ $incident->icon }}" title="{{ $incident->human_status }}" data-toggle="tooltip"></i>
        </div>
        <div class="incident-update__status">
            {{ $incident->human_status }}
        </div>
        <div class="incident-update__message markdown-body">
            {!! $incident->formatted_message !!}
        </div>
        <div class="incident-update__time">
            {{ $incident->timestamp_formatted }}
        </div>
    </div>
</div>
