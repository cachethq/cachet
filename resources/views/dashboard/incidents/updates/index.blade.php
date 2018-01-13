@extends('layout.dashboard')

@section('content')
<div class="content-panel">
    @includeWhen(isset($sub_menu), 'dashboard.partials.sub-sidebar')
    <div class="content-wrapper">
        <div class="header sub-header">
            <span class="uppercase">
                <i class="ion ion-ios-information-outline"></i> {{ trans('dashboard.incidents.updates.title', ['incident' => Str::words($incident->name, 5)]) }}
            </span>
            <a class="btn btn-md btn-success pull-right" href="{{ cachet_route('dashboard.incidents.updates.create', [$incident->id]) }}">
                {{ trans('dashboard.incidents.updates.add.title') }}
            </a>
            <div class="clearfix"></div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                @include('dashboard.partials.errors')

                <div class="striped-list">
                    @foreach($updates as $update)
                    <div class="row striped-list-item">
                        <div class="col-xs-6">
                            <a href="{{ cachet_route('dashboard.incidents.edit', [$update->id]) }}"><strong>{{ Str::words($update->message, 8) }}</strong></a>
                            <p><small>{{ trans('cachet.incidents.posted', ['timestamp' => $update->created_at_diff]) }}</small></p>
                        </div>
                        <div class="col-xs-6 text-right">
                            <a href="{{ cachet_route('dashboard.incidents.updates.edit', ['incident' => $incident->id, 'incident_update' => $update->id]) }}" class="btn btn-default">
                                {{ trans('forms.edit') }}
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@stop
