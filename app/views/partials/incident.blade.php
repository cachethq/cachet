<?php
    $incidentDate = Carbon::now()->subDays($i);
    $incidents = Incident::whereRaw('DATE(created_at) = "' . $incidentDate->format('Y-m-d') . '"')->orderBy('created_at', 'desc')->get();
?>
<h3>{{ $incidentDate->format('jS M Y') }}</h3>
<div class='timeline'>
    <div class='content-wrapper'>
        @foreach($incidents as $incidentID => $incident)
        <div class='moment {{ $incidentID === 0 ? "first" : null }}'>
            <div class="row event clearfix">
                <div class="col-sm-1">
                    <div class="icon status-{{ $incident->status }}">
                        <i class="{{ $incident->icon }}"></i>
                    </div>
                </div>
                <div class="col-sm-11 message">
                    <div class="content">
                        <strong>{{ $incident->name }}</strong>
                        <p>
                            <span class='date'>{{ $incident->created_at->diffForHumans() }}</span>
                            {{ $incident->message }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
