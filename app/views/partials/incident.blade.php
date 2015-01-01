<?php
    $incidentDate = Carbon\Carbon::now()->subDays($i);
    $incidents = Incident::whereBetween('created_at', [
        $incidentDate->format('Y-m-d') . ' 00:00:00',
        $incidentDate->format('Y-m-d') . ' 23:59:59',
    ])->orderBy('created_at', 'desc')->get();
?>
<h4>{{ $incidentDate->format('jS F Y') }}</h4>
<div class='timeline'>
    <div class='content-wrapper'>
        @forelse($incidents as $incidentID => $incident)
        <div class="moment {{ $incidentID === 0 ? "first" : null }}">
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
                            <small class='date'>{{ $incident->created_at->diffForHumans() }}</small>
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
        <div class='panel panel-message'>
            <div class='panel-body'>
                <p>{{ trans('cachet.incident.none') }}</p>
            </div>
        </div>
        @endforelse
    </div>
</div>
