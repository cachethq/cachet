@extends('layout.dashboard')

@section('content')
<div class="content-panel">
    @if(isset($sub_menu))
    @include('dashboard.partials.sub-sidebar')
    @endif
    <div class="content-wrapper">
        <div class="header sub-header">
            <span class="uppercase">
                <i class="ion ion-ios-color-filter-outline"></i> {{ trans('dashboard.plugins.plugins') }}
            </span>
            <a class="btn btn-md btn-success pull-right" href="{{ route('dashboard.plugins.install') }}">
                {{ trans('dashboard.plugins.install.title') }}
            </a>
            <div class="clearfix"></div>
        </div>
        @include('dashboard.partials.errors')
        <div class="row">
            <div class="col-sm-12 striped-list" id="plugin-list">
                @forelse($plugins as $plugin)
                <div class="row striped-list-item" data-plugin-id="{{ $plugin->id }}">
                    <div class="col-xs-6">
                        <h4>
                            @if($plugins->count() > 1)
                            <span class="drag-handle"><i class="ion ion-drag"></i></span>
                            @endif
                            {{ $plugin->name }} <small style="white-space:nowrap"><a href="{{ $plugin->link }}">{{ $plugin->version }}</a></small>
                        </h4>
                        @if($plugin->description)
                        <p>{{ $plugin->description }}</p>
                        @endif
                    </div>
                    <div class="col-xs-6 text-right">
                    @if($plugin->enabled)
                        <a href="/dashboard/plugins/{{ $plugin->id }}/disable" class="btn btn-default">{{ trans('forms.plugins.actions.disable') }}</a>
                    @else
                        <a href="/dashboard/plugins/{{ $plugin->id }}/enable" class="btn btn-default">{{ trans('forms.plugins.actions.enable') }}</a>
                        <a href="/dashboard/plugins/{{ $plugin->id }}/uninstall" class="btn btn-danger confirm-action" data-method="DELETE">{{ trans('forms.plugins.actions.uninstall') }}</a>
                    @endif
                    </div>
                </div>
                @empty
                <div class="list-group-item text-danger">{{ trans('dashboard.plugins.install.message') }}</div>
                @endforelse
            </div>
        </div>
    </div>
</div>
@stop
