@extends('layout.dashboard')

@section('content')
    <div class="header">
        <div class="sidebar-toggler visible-xs">
            <i class="icon ion-navicon"></i>
        </div>
        <span class="uppercase">
            <i class="icons ion-ios-keypad"></i> {{ trans_choice('dashboard.components.components', 2) }}
        </span>
        > <small>{{ trans('dashboard.components.edit.title') }}</small>
    </div>
    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">
                @include('partials.dashboard.errors')
                <form name="EditComponentForm" class="form-vertical" role="form" action="/dashboard/components/{{ $component->id }}/edit" method="POST">
                    <fieldset>
                        <div class="form-group">
                            <label for="incident-name">{{ trans('forms.components.name') }}</label>
                            <input type="text" class="form-control" name="component[name]" id="component-name" required value="{{ $component->name }}" />
                        </div>
                        <div class="form-group">
                            <label for="component-status">{{ trans('forms.components.status') }}</label>
                            <select name="component[status]" class="form-control">
                                @foreach(trans('cachet.components.status') as $statusID => $status)
                                <option value="{{ $statusID }}" {{ $statusID === $component->status ? "selected" : "" }}>{{ $status }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>{{ trans('forms.components.description') }}</label>
                            <textarea name="component[description]" class="form-control" rows="5">{{ $component->description }}</textarea>
                        </div>
                        @if($groups->count() > 0)
                        <div class="form-group">
                            <label>{{ trans('forms.components.group') }}</label>
                            <select name="component[group_id]" class="form-control">
                                <option {{ $component->group_id === null ? 'selected' : null }}></option>
                                @foreach($groups as $group)
                                <option value="{{ $group->id }}" {{ $component->group_id === $group->id ? 'selected' : null }}>{{ $group->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        @endif
                        <hr />
                        <div class="form-group">
                            <label>{{ trans('forms.components.link') }}</label>
                            <input type="text" name="component[link]" class="form-control" value="{{ $component->link }}" />
                        </div>
                        <div class="form-group">
                            <label>{{ trans('forms.components.tags') }}</label>
                            <textarea name="component[tags]" class="form-control" rows="2">{{ $component->tags }}</textarea>
                            <span class="help-block">{{ trans('forms.components.tags-help') }}</span>
                        </div>
                    </fieldset>

                    <input type="hidden" name="component[user_id]" value="{{ $component->agent_id || Auth::user()->id }}" />
                    <input type="hidden" name="component[order]" value="{{ $component->order or 0 }}" />
                    <input type="hidden" name="component[group_id]" value="{{ $component->group_id or 0  }}" />

                    <button type="submit" class="btn btn-success">{{ trans('forms.update') }}</button>
                    <a class="btn btn-default" href="{{ route('dashboard.components') }}">{{ trans('forms.cancel') }}</a>
                </form>
            </div>
        </div>
    </div>
    @stop
