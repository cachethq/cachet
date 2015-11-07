@extends('layout.dashboard')

@section('content')
    <div class="content-panel">
        @if(isset($sub_menu))
        @include('dashboard.partials.sub-sidebar')
        @endif
        <div class="content-wrapper">
            <div class="header sub-header">
                <span class="uppercase">
                    <i class="icons ion-outlet"></i> {{ trans('dashboard.components.components') }}
                </span>
                <a class="btn btn-sm btn-success pull-right" href="{{ route('dashboard.components.add') }}">
                    {{ trans('dashboard.components.add.title') }}
                </a>
                <div class="clearfix"></div>
            </div>
            <div class="row">
                <div class="col-sm-12 striped-list" id="component-list">
                    @forelse($components as $component)
                    <div class="row striped-list-item {{ !$component->enabled ? 'bg-warning' : null }}" data-component-id="{{ $component->id }}">
                        <div class="col-xs-6">
                            <h4>
                                @if($components->count() > 1)
                                <span class="drag-handle"><i class="ion-drag"></i></span>
                                @endif
                                {{ $component->name }} <small>{{ $component->humanStatus }}</small>
                            </h4>
                            @if($component->group)
                            <p><small>{{ trans('dashboard.components.listed_group', ['name' => $component->group->name]) }}</small></p>
                            @endif
                            @if($component->description)
                            <p>{{ $component->description }}</p>
                            @endif
                        </div>
                        <div class="col-xs-6 text-right">
                            <a href="/dashboard/components/{{ $component->id }}/edit" class="btn btn-default">{{ trans('forms.edit') }}</a>
                            <a href="/dashboard/components/{{ $component->id }}/delete" class="btn btn-danger confirm-action" data-method="DELETE">{{ trans('forms.delete') }}</a>
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
