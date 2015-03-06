@extends('layout.dashboard')

@section('content')
    <div class="header">
        <div class="sidebar-toggler visible-xs">
            <i class="icon ion-navicon"></i>
        </div>
        <span class="uppercase">
            <i class="icon ion-android-calendar"></i> {{ trans('dashboard.schedule.schedule') }}
        </span>
        &gt; <small>{{ trans('dashboard.schedule.edit.title') }}</small>
    </div>
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12">
                @include('partials.dashboard.errors')
                <form class='form-vertical' name='ScheduleForm' role='form' method='POST' autocomplete="off">
                    {{ Form::token() }}
                    <fieldset>
                        @if($incidentTemplates->count() > 0)
                        <div class="form-group">
                            <label for="incident-template">{{ trans('forms.incidents.templates.template') }}</label>
                            <select class="form-control" name="template">
                                <option selected></option>
                                @foreach($incidentTemplates as $tpl)
                                <option value="{{ $tpl->slug }}">{{ $tpl->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        @endif
                        <div class="form-group">
                            <label for="incident-name">{{ trans('forms.incidents.name') }}</label>
                            <input type="text" class="form-control" name="incident[name]" id="incident-name" required value="{{ $schedule->name }}">
                        </div>
                        <div class="form-group">
                            <label>{{ trans('forms.incidents.message') }}</label>
                            <div class='markdown-control'>
                                <textarea name="incident[message]" class="form-control" rows="5" required>{{ $schedule->message }}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>{{ trans('forms.incidents.scheduled_at') }}</label>
                            <input type="text" name="incident[scheduled_at]" class="form-control" rel="datepicker" value="{{ $schedule->scheduled_at_datetimepicker }}" required>
                        </div>
                    </fieldset>

                    <div class="form-group">
                        <div class="btn-group">
                            <button type="submit" class="btn btn-success">{{ trans('forms.save') }}</button>
                            <a class="btn btn-default" href="{{ route('dashboard.schedule') }}">{{ trans('forms.cancel') }}</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
