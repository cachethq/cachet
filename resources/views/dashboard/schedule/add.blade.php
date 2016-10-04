@extends('layout.dashboard')

@section('content')
<div class="header">
    <div class="sidebar-toggler visible-xs">
        <i class="ion ion-navicon"></i>
    </div>
    <span class="uppercase">
        <i class="ion ion-android-calendar"></i> {{ trans('dashboard.schedule.schedule') }}
    </span>
    &gt; <small>{{ trans('dashboard.schedule.add.title') }}</small>
</div>
<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12">
            @include('dashboard.partials.errors')
            <form class='form-vertical' name='ScheduleForm' role='form' method='POST' autocomplete="off">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="visible" value="1">
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
                        <input type="text" class="form-control" name="name" id="incident-name" required value="{{ Binput::old('incident.name') }}">
                    </div>
                    <div class="form-group">
                        <label>{{ trans('forms.incidents.message') }}</label>
                        <div class='markdown-control'>
                            <textarea name="message" class="form-control autosize" rows="5" required>{{ Binput::old('incident.message') }}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>{{ trans('forms.incidents.scheduled_at') }}</label>
                        <input type="text" name="scheduled_at" class="form-control" rel="datepicker" required>
                    </div>
                    @if(subscribers_enabled())
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="notify" value="1" checked="{{ Binput::old('incident.message', 'checked') }}">
                            {{ trans('forms.incidents.notify_subscribers') }}
                        </label>
                    </div>
                    @endif
                </fieldset>

                <div class="form-group">
                    <div class="btn-group">
                        <button type="submit" class="btn btn-success">{{ trans('forms.add') }}</button>
                        <a class="btn btn-default" href="{{ route('dashboard.schedule.index') }}">{{ trans('forms.cancel') }}</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@stop
