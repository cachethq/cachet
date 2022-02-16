<div class="timeline schedule">
    <!-- <div class="panel panel-default">
        <div class="panel-heading">
            <strong>{{ trans('cachet.incidents.scheduled') }}</strong>
        </div>
        <div class="list-group">
            @foreach($scheduledMaintenance as $schedule)
            <div class="list-group-item" id="scheduled-{{ $schedule->id }}">
                <strong>{{ $schedule->name }}</strong> <small class="date"><abbr class="timeago" data-toggle="tooltip" data-placement="right" title="{{ $schedule->scheduled_at_formatted }}" data-timeago="{{ $schedule->scheduled_at_iso }}"></abbr></small>
                <div class="pull-right"><a href="#scheduled-{{ $schedule->id }}"><i class="ion ion-link"></i></a></div>
                <hr/>
                <div class="markdown-body">
                    {!! $schedule->formatted_message !!}
                </div>
                @if($schedule->components->count() > 0)
                <hr>
                @foreach($schedule->components as $affectedComponent)
                <span class="label label-primary">{{ $affectedComponent->component->name }}</span>
                @endforeach
                @endif
            </div>
            @endforeach
        </div>
    </div> -->
    <h1>{{ trans('cachet.incidents.scheduled') }}</h1>
    @foreach($scheduledMaintenance as $schedule)
        <h4>{{ $schedule->scheduled_at_formatted }}</h4>
        <div class="timeline">
            <div class="content-wrapper">
                <div class="moment first">
                    <div class="col-xs-10 col-xs-offset-2 col-sm-11 col-sm-offset-0">
                        <div class="panel panel-message incident">
                            <div class="panel-heading">
                                <strong>{{ $schedule->name }}</strong>
                                <br>
                                <small class="date">
                                    <a href="#" class="links"><abbr class="timeago" data-toggle="tooltip" data-placement="right" title="{{ $schedule->scheduled_at_formatted }}" data-timeago="{{ $schedule->scheduled_at_iso }}"></abbr></a>
                                </small>
                                <div class="panel-body markdown-body">
                                    {!! $schedule->formatted_message !!}
                                </div> 
                                @if($schedule->components->count() > 0)
                                    <hr>
                                    @foreach($schedule->components as $affectedComponent)
                                        <span class="label label-primary">{{ $affectedComponent->component->name }}</span>
                                    @endforeach
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
