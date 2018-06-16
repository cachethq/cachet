@extends('layout.dashboard')

@section('content')
<div class="content-panel">
    @includeWhen(isset($subMenu), 'dashboard.partials.sub-sidebar')
    <div class="content-wrapper">
        <div class="header sub-header">
            <span class="uppercase">
                <i class="ion ion-ios-browsers-outline"></i> {{ trans('dashboard.components.components') }}
            </span>
            <a class="btn btn-md btn-success pull-right" href="{{ cachet_route('dashboard.components.create') }}">
                {{ trans('dashboard.components.add.title') }}
            </a>
            <div class="clearfix"></div>
        </div>
        @include('partials.errors')
        <div class="row">
            <div class="col-sm-12 striped-list" data-orderable-list="/dashboard/api/components/order">
                @forelse($components as $component)
                <div class="row striped-list-item {{ !$component->enabled ? 'bg-warning' : null }}" data-orderable-id="{{ $component->id }}">
                    <div class="col-xs-6">
                        <h4>
                            @if($components->count() > 1)
                            <span class="drag-handle"><i class="ion ion-drag"></i></span>
                            @endif
                            {{ $component->name }} <small>{{ $component->human_status }}</small>
                        </h4>
                        @if($component->group)
                        <p><small>{{ trans('dashboard.components.listed_group', ['name' => $component->group->name]) }}</small></p>
                        @endif
                        @if($component->description)
                        <p>{{ $component->description }}</p>
                        @endif
                    </div>
                    <div class="col-xs-6 text-right">
                        <a href="{{ cachet_route('dashboard.components.edit', [$component->id]) }}" class="btn btn-default">{{ trans('forms.edit') }}</a>
                        <a href="{{ cachet_route('dashboard.components.delete', [$component->id], 'delete') }}" class="btn btn-danger confirm-action" data-method="DELETE">{{ trans('forms.delete') }}</a>
                    </div>
                </div>
                @empty
                <div class="list-group-item text-danger">{{ trans('dashboard.components.add.message') }}</div>
                @endforelse
            </div>
        </div>
    </div>
</div>
@stop
