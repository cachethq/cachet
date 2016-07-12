@extends('layout.dashboard')

@section('content')
<div class="header">
    <div class="sidebar-toggler visible-xs">
        <i class="ion ion-navicon"></i>
    </div>
    <span class="uppercase">
        <i class="ion ion-ios-bolt-outline"></i> {{ trans('dashboard.actions.actions') }}
    </span>
    > <small>{{ trans('dashboard.actions.edit.title') }}</small>
</div>
<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12">
            @include('dashboard.partials.errors')
            <form class='form-vertical' name='ActionsForm' role='form' method='POST'>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <fieldset>
                    <div class="form-group">
                        <label for="action-name">{{ trans('forms.actions.name') }}</label>
                        <input type="text" class="form-control" name="name" id="action-name" required value="{{ Binput::old('action.name', $action->name) }}">
                    </div>
                    <div class="form-group">
                        <label for="action-description">{{ trans('forms.actions.description') }}</label>
                        <textarea rows="4" class="form-control" name="description" id="action-description" required>{{ Binput::old('action.description', $action->description) }}</textarea>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="hidden" value="0" name="active">
                            <input type="checkbox" value="1" name="active" {{ $action->active ? "checked" : null }}>
                            {{ trans('forms.actions.active') }}
                        </label>
                    </div>
                    @if($groups->count() > 0)
                    <div class="form-group">
                        <label for="group">{{ trans('forms.actions.group') }}</label>
                        <select name="timed_action_group_id" id="group" class="form-control">
                            <option value="0">&mdash;</option>
                            @foreach($groups as $group)
                            <option value="{{ $group->id }}">{{ $group->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    @else
                    <input type="hidden" name="timed_action_group_id" value="0">
                    @endif
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
