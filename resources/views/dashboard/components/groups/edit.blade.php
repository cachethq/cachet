@extends('layout.dashboard')

@section('content')
<div class="header">
    <div class="sidebar-toggler visible-xs">
        <i class="ion ion-navicon"></i>
    </div>
    <span class="uppercase">
        <i class="ion  ion-ios-keypad"></i> {{ trans_choice('dashboard.components.groups.groups', 2) }}
    </span>
    &gt; <small>{{ trans('dashboard.components.groups.edit.title') }}</small>
</div>
<div class="content-wrapper">
    <div class="row">
        <div class="col-sm-12">
            @include('dashboard.partials.errors')
            <form name="EditComponentGroupForm" class="form-vertical" role="form" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <fieldset>
                    <div class="form-group">
                        <label>{{ trans('forms.components.groups.name') }}</label>
                        <input type="text" class="form-control" name="name" id="group-name" value="{{ $group->name }}" required>
                    </div>
                    <div class="form-group">
                        <label>{{ trans('forms.components.groups.collapsing') }}</label>
                        <select name="collapsed" class="form-control" required>
                            <option value="0" {{ $group->collapsed === 0 ? "selected" : null }}>{{ trans('forms.components.groups.visible') }}</option>
                            <option value="1" {{ $group->collapsed === 1 ? "selected" : null }}>{{ trans('forms.components.groups.collapsed') }}</option>
                            <option value="2" {{ $group->collapsed === 2 ? "selected" : null }}>{{ trans('forms.components.groups.collapsed_incident') }}</option>
                        </select>
                    </div>
                </fieldset>

                <div class="btn-group">
                    <button type="submit" class="btn btn-success">{{ trans('forms.save') }}</button>
                    <a class="btn btn-default" href="{{ route('dashboard.components.groups') }}">{{ trans('forms.cancel') }}</a>
                </div>
            </form>
        </div>
    </div>
</div>
@stop
