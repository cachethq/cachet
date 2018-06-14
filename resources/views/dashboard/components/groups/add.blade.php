@extends('layout.dashboard')

@section('content')
<div class="header">
    <div class="sidebar-toggler visible-xs">
        <i class="ion ion-navicon"></i>
    </div>
    <span class="uppercase">
        <i class="ion  ion-ios-keypad"></i> {{ trans_choice('dashboard.components.groups.groups', 2) }}
    </span>
    &gt; <small>{{ trans('dashboard.components.groups.add.title') }}</small>
</div>
<div class="content-wrapper">
    <div class="row">
        <div class="col-sm-12">
            @include('partials.errors')
            <form name="CreateComponentGroupForm" class="form-vertical" role="form" action="{{ cachet_route('dashboard.components.groups.create', [], 'post') }}" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <fieldset>
                    <div class="form-group">
                        <label>{{ trans('forms.components.groups.name') }}</label>
                        <input type="text" class="form-control" name="name" id="group-name" required placeholder="{{ trans('forms.components.groups.name') }}">
                    </div>
                    <div class="form-group">
                        <label>{{ trans('forms.components.groups.collapsing') }}</label>
                        <select name="collapsed" class="form-control" required>
                            <option value="0" selected>{{ trans('forms.components.groups.visible') }}</option>
                            <option value="1">{{ trans('forms.components.groups.collapsed') }}</option>
                            <option value="2">{{ trans('forms.components.groups.collapsed_incident') }}</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>{{ trans('forms.components.groups.visibility') }}</label>
                        <select name="visible" class="form-control" required>
                            <option value="0">{{ trans('forms.components.groups.visibility_authenticated') }}</option>
                            <option value="1" selected>{{ trans('forms.components.groups.visibility_public') }}</option>
                        </select>
                    </div>
                </fieldset>

                <div class="btn-group">
                    <button type="submit" class="btn btn-success">{{ trans('forms.add') }}</button>
                    <a class="btn btn-default" href="{{ cachet_route('dashboard.components.groups') }}">{{ trans('forms.cancel') }}</a>
                </div>
            </form>
        </div>
    </div>
</div>
@stop
