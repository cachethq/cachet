@extends('layout.dashboard')

@section('content')
    <div class="content-panel">
        @if(isset($subMenu))
        @include('partials.dashboard.sub-sidebar')
        @endif
        <div class="content-wrapper">
            <div class="header sub-header">
                <span class="uppercase">
                    <i class="icons ion-ios-keypad"></i> {{ trans_choice('dashboard.components.groups.groups', 2) }}
                </span>
                <a class="btn btn-sm btn-success pull-right" href="{{ route('dashboard.components.groups.add') }}">
                    {{ trans('dashboard.components.groups.add.title') }}
                </a>
                <div class="clearfix"></div>
            </div>
            <div class="row">
                <div class="col-sm-12 striped-list">
                    @forelse($groups as $group)
                    <div class="row striped-list-item">
                        <div class="col-xs-6">
                            <strong>{{ $group->name }}</strong> <span class="label label-info">{{ $group->components->count() }}</span>
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
