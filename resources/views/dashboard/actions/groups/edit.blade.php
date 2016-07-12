@extends('layout.dashboard')

@section('content')
<div class="header">
    <div class="sidebar-toggler visible-xs">
        <i class="ion ion-navicon"></i>
    </div>
    <span class="uppercase">
        <i class="ion ion-ios-bolt-outline"></i> {{ trans('dashboard.actions.action_groups') }}
    </span>
    > <small>{{ trans('dashboard.actions.groups.edit.title') }}</small>
</div>
<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12">
            @include('dashboard.partials.errors')
            <form class='form-vertical' name='ActionGroupsForm' role='form' method='POST'>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <fieldset>
                    <div class="form-group">
                        <label for="group-name">{{ trans('forms.actions.groups.name') }}</label>
                        <input type="text" class="form-control" name="name" id="group-name" required value="{{ Binput::old('group.name', $group->name) }}">
                    </div>
                </fieldset>
                <div class='form-group'>
                    <div class='btn-group'>
                        <button type="submit" class="btn btn-success">{{ trans('forms.save') }}</button>
                        <a class="btn btn-default" href="{{ route('dashboard.actions.index') }}">{{ trans('forms.cancel') }}</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@stop
