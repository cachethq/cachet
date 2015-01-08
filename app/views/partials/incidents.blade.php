<h4>{{ $date }}</h4>
<div class="timeline">
    <div class="content-wrapper">
        @forelse($incidents as $incidentID => $incident)
        <div class="moment {{ $incidentID === 0 ? 'first' : null }}">
            <div class="row event clearfix">
                <div class="col-sm-1">
                    <div class="icon status-{{ $incident->status }}">
                        <i class="{{ $incident->icon }}"></i>
                    </div>
                </div>
                <div class="col-xs-10 col-xs-offset-2 col-sm-11 col-sm-offset-0">
                    <div class="panel panel-message">
                        <div class="panel-heading">
                            <strong>{{ $incident->name }}</strong>
                            <br>
                            <small class="date">
                                <abbr class="timeago" tabindex="{{ $incidentID }}" data-container="body" data-toggle="popover" data-placement="right" data-trigger="focus" data-content="{{ $incident->created_at_formated }}" data-timeago="{{ $incident->created_at_iso }}">
                                </abbr>
                            </small>
                        </div>
                        @if($incident->hasMessage())
                        <div class="panel-body">
                            <p>{{ $incident->formattedMessage }}</p>
                        </div>
                        @endif
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
