@extends('layout.dashboard')

@section('content')
<div class="content-panel">
    @if(isset($sub_menu))
    @include('dashboard.partials.sub-sidebar')
    @endif
    <div class="content-wrapper">
        <div class="header sub-header">
            <span class="uppercase">
                <i class="ion  ion-ios-keypad"></i> {{ trans_choice('dashboard.components.groups.groups', 2) }}
            </span>
            <a class="btn btn-md btn-success pull-right" href="{{ route('dashboard.components.groups.add') }}">
                {{ trans('dashboard.components.groups.add.title') }}
            </a>
            <div class="clearfix"></div>
        </div>
        @include('dashboard.partials.errors')
        <div class="row">
            <div class="col-sm-12 striped-list" data-orderable-list="/dashboard/api/components/groups/order">
                @forelse($groups as $group)
                <div class="row striped-list-item" data-orderable-id="{{ $group->id }}">
                    <div class="col-xs-6">
                        <h4>
                            @if($groups->count() > 1)
                            <span class="drag-handle"><i class="ion ion-drag"></i></span>
                            @endif
                            {{ $group->name }}
                            <span class="label label-info">{{ $group->components->count() }}</span>
                        </h4>
                    </div>
                    <div class="col-xs-6 text-right">
                        <a href="{{ route('dashboard.components.groups.edit', [$group->id]) }}" class="btn btn-default">{{ trans('forms.edit') }}</a>
                        <a href="/dashboard/components/groups/{{ $group->id }}/delete" class="btn btn-danger confirm-action" data-method="DELETE">{{ trans('forms.delete') }}</a>
                    </div>
                </div>
                @empty
                <div class="list-group-item text-danger">{{ trans('dashboard.components.groups.no_components') }}</div>
                @endforelse
            </div>
        </div>
    </div>
</div>
@stop
