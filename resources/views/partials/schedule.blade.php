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
                    <div class="row event clearfix">
                        <div class="col-sm-1">
                            <div class="status-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-tools" viewBox="0 0 16 16">
                                <path d="M1 0 0 1l2.2 3.081a1 1 0 0 0 .815.419h.07a1 1 0 0 1 .708.293l2.675 2.675-2.617 2.654A3.003 3.003 0 0 0 0 13a3 3 0 1 0 5.878-.851l2.654-2.617.968.968-.305.914a1 1 0 0 0 .242 1.023l3.356 3.356a1 1 0 0 0 1.414 0l1.586-1.586a1 1 0 0 0 0-1.414l-3.356-3.356a1 1 0 0 0-1.023-.242L10.5 9.5l-.96-.96 2.68-2.643A3.005 3.005 0 0 0 16 3c0-.269-.035-.53-.102-.777l-2.14 2.141L12 4l-.364-1.757L13.777.102a3 3 0 0 0-3.675 3.68L7.462 6.46 4.793 3.793a1 1 0 0 1-.293-.707v-.071a1 1 0 0 0-.419-.814L1 0zm9.646 10.646a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708zM3 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026L3 11z"/>
                            </svg>
                            </div>
                        </div>
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
        </div>
    @endforeach
</div>
