@if($display_uptimes)
<h1>{{trans('uptimes.uptimes')}}</h1>
<div class="section-uptime">
    <div>
        <strong>{{trans('uptimes.see_data_for_range')}}</strong>
        <button id="btn-current-time-range" class="btn btn-primary">{{trans('uptimes.current_time')}}</button>

        <button id="btn-specify-date-range" class="btn btn-default">{{trans('uptimes.date_range')}}</button>
    </div>
    <br>
    @if($component_groups->count() > 0)
        <ul class="list-group">
            @foreach($component_groups as $group)
                <li class="list-group-item uptime" data-uptime-id="{{ $group->id }}">
                    <div class="graph-container">
                        <div class="row">
                            <div class="col-xs-10">
                                <strong>
                                    {{ $group->name }} <span id="avaibility-group-{{ $group->id }}"></span>
                                </strong>
                            </div>
                            <div class="col-xs-2">
                                <div class="dropdown pull-right">
                                    <a href="javascript: void(0);" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><span class='filter'>Scope</span> <span class="caret"></span></a>
                                    <ul class="dropdown-menu dropdown-menu-right">
                                        <li><a href="#" data-filter-type="last_hours">{{trans('uptimes.scope_hourly')}}</a></li>
                                        <li><a href="#" data-filter-type="last_days">{{trans('uptimes.scope_daily')}}</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-12">
                                <canvas id="uptime-group-{{ $group->id }}" data-is-group="true" data-uptime-name="{{ $group->name }}" data-uptime-components="" data-uptime-id="{{ $group->id }}" data-uptime-group="last_days" height="160" width="600"></canvas>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-xs-12">
                            <p class="text-center">
                                <a class="per-component-graph-trigger btn btn-info" role="button" data-show-graphs="uptime-graph-per-component-group-{{$group->id}}">Show graphs per component</a>
                            </p>
                        </div>
                    </div>

                    <div class="group-uptime-container" id="uptime-graph-per-component-group-{{$group->id}}">
                        @foreach($group->enabled_components()->orderBy('order')->get() as $component)
                            <div class="graph-container">
                                <div class="row">
                                    <div class="col-xs-10">
                                        <strong>
                                            {{ $component->name }} <span id="avaibility-component-{{ $component->id }}"></span>
                                        </strong>
                                    </div>
                                    <div class="col-xs-2">
                                        <div class="dropdown pull-right">
                                            <a href="javascript: void(0);" class="btn btn-default dropdown-toggle" data-toggle="dropdown"><span class='filter'>Scope</span> <span class="caret"></span></a>
                                            <ul class="dropdown-menu dropdown-menu-right">
                                                <li><a href="#" data-filter-type="last_hours">{{trans('uptimes.scope_hourly')}}</a></li>
                                                <li><a href="#" data-filter-type="last_days">{{trans('uptimes.scope_daily')}}</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-xs-12">
                                        <canvas id="uptime-component-{{ $component->id }}" data-is-group="false" data-uptime-name="{{ $component->name }}" data-uptime-components="" data-uptime-id="{{ $component->id }}" data-uptime-group="last_days" height="160" width="600"></canvas>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </li>
            @endforeach
        </ul>
    @endif
    <div>
        <strong>{{trans('uptimes.export_data')}}</strong>
        <button role="button" data-format="csv" class="btn btn-default export-btn">CSV</button>

        <button role="button" data-format="xlsx" class="btn btn-default export-btn">Excel</button>
    </div>


    <div class="modal" id="incidentsModal">
        <div class="modal-dialog" role="document" style="width: 1200px">
            <div class="modal-content">
                <div class="modal-header">
                    <strong class="modal-title">{{trans('uptimes.incident_list')}}</strong>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>{{trans('uptimes.incident_list_name')}}</th>
                            <th>{{trans('uptimes.incident_list_updates')}}</th>
                            <th>{{trans('uptimes.incident_list_downtime')}}</th>
                            <th>{{trans('uptimes.incident_list_occured')}}</th>
                            <th>{{trans('uptimes.incident_list_last_update')}}</th>
                            <th>{{trans('uptimes.incident_list_fixed')}}</th>
                        </tr>
                        </thead>
                        <tbody class="table-body">
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="modal" id="dateRangeModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <strong class="modal-title">{{trans('uptimes.date_range_modal')}}</strong>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="date-range-form">
                    <div class="modal-body">
                        <div class="row">

                            <div class="col-md-6">
                                {{trans('uptimes.date_range_modal_min_date')}}
                            </div>

                            <div class="col-md-6">
                                <input id="to-date" required type="text" rel="datepicker-onlydate">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                {{trans('uptimes.date_range_modal_max_date')}}
                            </div>

                            <div class="col-md-6">
                                <input id="from-date" required type="text" rel="datepicker-onlydate">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="submit" class="btn btn-primary" value="Save"/>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endif
