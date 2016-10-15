@extends('layout.dashboard')

@section('content')
<div class="header">
    <div class="sidebar-toggler visible-xs">
        <i class="ion ion-navicon"></i>
    </div>
    <span class="uppercase">
        <i class="ion ion-ios-paper-outline"></i> {{ trans('dashboard.incidents.templates.title') }}
    </span>
    <a class="btn btn-md btn-success pull-right" href="{{ cachet_route('dashboard.templates.create') }}">
        {{ trans('dashboard.incidents.templates.add.title') }}
    </a>
</div>
<div class="content-wrapper">
    <div class="row">
        <div class="col-sm-12">
            @include('dashboard.partials.errors')
            <div class="striped-list">
                @forelse($incident_templates as $template)
                <div class="row striped-list-item">
                    <div class="col-xs-6">
                        <strong>{{ $template->name }}</strong>
                    </div>
                    <div class="col-xs-6 text-right">
                        <a href="{{ cachet_route('dashboard.templates.edit', [$template->id]) }}" class="btn btn-default">{{ trans('forms.edit') }}</a>
                        <a href="{{ cachet_route('dashboard.templates.delete', [$template->id], 'delete') }}" class="btn btn-danger confirm-action" data-method='DELETE'>{{ trans('forms.delete') }}</a>
                    </div>
                </div>
                @empty
                <div class="list-group-item text-danger">{{ trans('dashboard.incidents.templates.add.message') }}</div>
                @endforelse
            </div>
        </div>
    </div>
</div>
@stop
