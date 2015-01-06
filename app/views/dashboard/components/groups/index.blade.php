@extends('layout.dashboard')

@section('content')
    <div class='content-panel'>
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
                    <div class='row striped-list-item'>
                        <div class='col-md-8'>
                            <strong>{{ $group->name }}</strong>
                        </div>
                        <div class='col-md-4 text-right'>
                            <a href='/dashboard/components/groups/{{ $group->id }}/delete' class='btn btn-danger confirm-action' data-method='DELETE'>{{ trans('forms.delete') }}</a>
                        </div>
                    </div>
                    @empty
                    <div class='list-group-item text-danger'>{{ trans('dashboard.components.add.message') }}</div>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
@stop
