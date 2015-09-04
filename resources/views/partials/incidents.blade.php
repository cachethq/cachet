<h4>{{ formatted_date($date) }}</h4>
<div class="timeline">
    <div class="content-wrapper">
        @forelse($incidents as $incidentID => $incident)
        <div class="moment {{ $incidentID === 0 ? 'first' : null }}">
            <div class="row event clearfix">
                <div class="col-sm-1">
                    <div class="status-icon status-{{ $incident->status }}" data-toggle="tooltip" title="{{ $incident->humanStatus }}" data-placement="left">
                        <i class="{{ $incident->icon }}"></i>
                    </div>
                </div>
                <div class="col-xs-10 col-xs-offset-2 col-sm-11 col-sm-offset-0">
                    <div class="panel panel-message">
                        <div class="panel-heading">
                            @if($loggedUser)
                            <div class="pull-right btn-group">
                                <a href="/dashboard/incidents/{{ $incident->id }}/edit" class="btn btn-default">{{ trans('forms.edit') }}</a>
                                <a href="/dashboard/incidents/{{ $incident->id }}/delete" class="btn btn-danger confirm-action" data-method='DELETE'>{{ trans('forms.delete') }}</a>
                            </div>
                            @endif
                            <strong>{{ $incident->name }}</strong>{{ $incident->isScheduled ? trans("cachet.incidents.scheduled_at", ["timestamp" => $incident->scheduled_at_diff]) : null }}
                            <br>
                            <small class="date">
                                <abbr class="timeago" data-toggle="tooltip" data-placement="right" title="{{ $incident->timestamp_formatted }}" data-timeago="{{ $incident->timestamp_iso }}"></abbr>
                            </small>
                        </div>
                        <div class="panel-body">
                            {!! $incident->formattedMessage !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @empty
        <div class="panel panel-message">
            <div class="panel-body">
                <p>{{ trans('cachet.incidents.none') }}</p>
            </div>
        </div>
        @endforelse
    </div>
</div>
