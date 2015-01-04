@extends('layout.dashboard')

@section('content')
@if(isset($subMenu))
@include('partials.dashboard.sub-sidebar')
@endif
<div class='content-panel'>
    <div class="header">
        <span class="uppercase">
            <i class="icons ion-ios-keypad"></i> {{ trans('cachet.dashboard.component-groups') }}
        </span>
        <a class="btn btn-sm btn-success pull-right" href="{{ route('dashboard.components.groups.add') }}">
            {{ trans('cachet.dashboard.component-groups-add') }}
        </a>
        <div class="clearfix"></div>
    </div>
    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12 striped-list">
                @forelse($groups as $group)
                <div class='row striped-list-item'>
                    <div class='col-md-8'>
                        <strong>{{ $group->name }}</strong>
                    </div>
                    <div class='col-md-4 text-right'>
                        <a href='#' class='btn btn-default'>Edit</a>
                        <a href='#' class='btn btn-danger'>Delete</a>
                    </div>
                </div>
                @empty
                <div class='list-group-item text-danger'>You should add a component.</div>
                @endforelse
            </div>
        </div>
    </div>
@stop
