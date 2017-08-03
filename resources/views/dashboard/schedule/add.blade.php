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
            <form class="form-vertical" name="ScheduleForm" role="form" method="POST" autocomplete="off">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <fieldset>
                    @if($incident_templates->count() > 0)
                    <div class="form-group">
                        <label for="incident-template">{{ trans('forms.schedules.templates.template') }}</label>
                        <select class="form-control" name="template">
                            <option selected></option>
                            @foreach($incident_templates as $tpl)
                            <option value="{{ $tpl->slug }}">{{ $tpl->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    @endif
                    <div class="form-group">
                        <label for="incident-name">{{ trans('forms.schedules.name') }}</label>
                        <input type="text" class="form-control" name="name" id="incident-name" required value="{{ Binput::old('name') }}" placeholder="{{ trans('forms.schedules.name') }}">
                    </div>
                    <div class="form-group">
                        <label>{{ trans('forms.schedules.status') }}</label><br>
                        @foreach(trans('cachet.schedules.status') as $id => $status)
                        <label class="radio-inline">
                            <input type="radio" name="status" value="{{ $id }}" {{ $id === 0 ? 'checked="checked"' : null }}>
                            {{ $status }}
                        </label>
                        @endforeach
                    </div>
                    <div class="form-group">
                        <label>{{ trans('forms.schedules.message') }}</label>
                        <div class="markdown-control">
                            <textarea name="message" class="form-control autosize" rows="5" required placeholder="{{ trans('forms.schedules.message') }}">{{ Binput::old('message') }}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>{{ trans('forms.schedules.scheduled_at') }}</label>
                        <input type="text" name="scheduled_at" class="form-control" rel="datepicker-custom" data-date-format="YYYY-MM-DD HH:mm" required placeholder="{{ trans('forms.schedules.scheduled_at') }}">
                    </div>
                    <div class="form-group">
                        <label>{{ trans('forms.schedules.scheduled_at') }}</label>
                        <input type="text" name="completed_at" class="form-control" rel="datepicker-custom" data-date-format="YYYY-MM-DD HH:mm" placeholder="{{ trans('forms.schedules.scheduled_at') }}">
                    </div>
                </fieldset>

                <div class="form-group">
                    <div class="btn-group">
                        <button type="submit" class="btn btn-success">{{ trans('forms.add') }}</button>
                        <a class="btn btn-default" href="{{ cachet_route('dashboard.schedule') }}">{{ trans('forms.cancel') }}</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@stop
