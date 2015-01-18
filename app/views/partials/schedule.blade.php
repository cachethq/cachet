<div class="timeline">
    <div class="content-wrapper">
        @forelse($scheduled as $scheduleID => $schedule)
        <div class="moment {{ $scheduleID === 0 ? 'first' : null }}">
            <div class="row event clearfix">
                <div class="col-sm-1">
                    <div class="icon status-scheduled">
                        <i class="ion ion-calendar"></i>
                    </div>
                </div>
                <div class="col-xs-10 col-xs-offset-2 col-sm-11 col-sm-offset-0">
                    <div class="panel panel-message">
                        <div class="panel-heading">
                            <strong>{{ $schedule->name }}</strong>
                            <small class="date">
                                <abbr class="timeago" data-toggle="tooltip" data-placement="right" title="{{ $schedule->created_at_formated }}" data-timeago="{{ $schedule->published_at_iso }}">
                                </abbr>
                            </small>
                        </div>
                        @if($schedule->hasMessage())
                        <div class="panel-body">
                            <p>{{ $schedule->formattedMessage }}</p>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
