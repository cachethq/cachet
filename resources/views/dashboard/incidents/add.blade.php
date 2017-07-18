@extends('layout.dashboard')

@section('content')
<div class="header">
    <div class="sidebar-toggler visible-xs">
        <i class="ion ion-navicon"></i>
    </div>
    <span class="uppercase">
        <i class="ion ion-ios-information-outline"></i> {{ trans('dashboard.incidents.incidents') }}
    </span>
    &gt; <small>{{ trans('dashboard.incidents.add.title') }}</small>
</div>
<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12">
            @include('dashboard.partials.errors')
            <form class="form-vertical" name="IncidentForm" role="form" method="POST" autocomplete="off">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <fieldset>
                    @if($incident_templates->count() > 0)
                    <div class="form-group">
                        <label for="incident-template">{{ trans('forms.incidents.templates.template') }}</label>
                        <select class="form-control" name="template">
                            <option selected></option>
                            @foreach($incident_templates as $tpl)
                            <option value="{{ $tpl->slug }}">{{ $tpl->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    @endif
                    <div class="form-group">
                        <label for="incident-name">{{ trans('forms.incidents.name') }}</label>
                        <input type="text" class="form-control" name="name" id="incident-name" required value="{{ Binput::old('name') }}" placeholder="{{ trans('forms.incidents.name') }}">
                    </div>
                    <div class="form-group">
                        <label for="incident-name">{{ trans('forms.incidents.status') }}</label><br>
                        <label class="radio-inline">
                            <input type="radio" name="status" value="1">
                            <i class="ion ion-flag"></i>
                            {{ trans('cachet.incidents.status')[1] }}
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="status" value="2">
                            <i class="ion ion-alert-circled"></i>
                            {{ trans('cachet.incidents.status')[2] }}
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="status" value="3">
                            <i class="ion ion-eye"></i>
                            {{ trans('cachet.incidents.status')[3] }}
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="status" value="4">
                            <i class="ion ion-checkmark"></i>
                            {{ trans('cachet.incidents.status')[4] }}
                        </label>
                    </div>
                    <div class="form-group">
                        <label for="incident-name">{{ trans('forms.incidents.visibility') }}</label>
                        <select name="visible" class="form-control">
                            <option value="1" selected>{{ trans('forms.incidents.public') }}</option>
                            <option value="0">{{ trans('forms.incidents.logged_in_only') }}</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="incident-name">{{ trans('forms.incidents.stick_status') }}</label>
                        <select name="stickied" class="form-control">
                            <option value="1">{{ trans('forms.incidents.stickied') }}</option>
                            <option value="0" selected>{{ trans('forms.incidents.not_stickied') }}</option>
                        </select>
                    </div>
                    @if(!$components_in_groups->isEmpty() || !$components_out_groups->isEmpty())
                    <div class="form-group">
                        <label>{{ trans('forms.incidents.component') }}</label>
                        <select name="component_id" class="form-control">
                            <option value="" selected></option>
                            @foreach($components_in_groups as $group)
                            <optgroup label="{{ $group->name }}">
                                @foreach($group->components as $component)
                                <option value="{{ $component->id }}">{{ $component->name }}</option>
                                @endforeach
                            </optgroup>
                            @endforeach
                            @foreach($components_out_groups as $component)
                            <option value="{{ $component->id }}">{{ $component->name }}</option>
                            @endforeach
                        </select>
                        <span class='help-block'>{{ trans('forms.optional') }}</span>
                    </div>
                    @endif
                    <div class="form-group hidden" id="component-status">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <div class="radio-items">
                                    @foreach(trans('cachet.components.status') as $statusID => $status)
                                    <div class="radio-inline">
                                        <label>
                                            <input type="radio" name="component_status" value="{{ $statusID }}">
                                            {{ $status }}
                                        </label>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>{{ trans('forms.incidents.message') }}</label>
                        <div class="markdown-control">
                            <textarea name="message" class="form-control autosize" rows="5" required>{{ Binput::old('message') }}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>{{ trans('forms.incidents.occurred_at') }}</label> <small class="text-muted">{{ trans('forms.optional') }}</small>
                        <input type="text" name="occurred_at" class="form-control" rel="datepicker-custom" data-date-format="YYYY-MM-DD HH:mm" placeholder="{{ trans('forms.optional') }}">
                    </div>
                    <input type="hidden" name="notify" value="0">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="notify" value="1" checked="{{ Binput::old('notify', 'checked') }}">
                            {{ trans('forms.incidents.notify_subscribers') }}
                        </label>
                    </div>
                </fieldset>

                <div class="form-group">
                    <div class="btn-group">
                        <button type="submit" class="btn btn-success">{{ trans('forms.add') }}</button>
                        <a class="btn btn-default" href="{{ cachet_route('dashboard.incidents') }}">{{ trans('forms.cancel') }}</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@stop
