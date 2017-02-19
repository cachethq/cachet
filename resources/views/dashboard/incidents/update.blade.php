@extends('layout.dashboard')

@section('content')
<div class="header">
    <div class="sidebar-toggler visible-xs">
        <i class="icon ion-navicon"></i>
    </div>
    <span class="uppercase">
        <i class="icon ion-android-alert"></i> {{ trans('dashboard.incidents.incidents') }}
    </span>
    &gt; <small>{{ trans('dashboard.incidents.update.title') }}</small>
</div>
<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12">
            @include('dashboard.partials.errors')
            <p class="lead">{!! trans('dashboard.incidents.update.subtitle', ['incident' => $incident->name]) !!}</p>
            <form class="form-vertical" name="IncidentUpdateForm" role="form" method="POST" autocomplete="off">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <fieldset>
                    <div class="form-group">
                        <label for="incident-name">{{ trans('forms.incidents.status') }}</label><br>
                        <label class="radio-inline">
                            <input type="radio" name="status" value="1" required {{ (int) Binput::old('status') === 1 ? 'checked' : null }}>
                            <i class="icon ion-flag"></i>
                            {{ trans('cachet.incidents.status')[1] }}
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="status" value="2" required {{ (int) Binput::old('status') === 2 ? 'checked' : null }}>
                            <i class="icon ion-alert-circled"></i>
                            {{ trans('cachet.incidents.status')[2] }}
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="status" value="3" required {{ (int) Binput::old('status') === 3 ? 'checked' : null }}>
                            <i class="icon ion-eye"></i>
                            {{ trans('cachet.incidents.status')[3] }}
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="status" value="4" required {{ (int) Binput::old('status') === 4 ? 'checked' : null }}>
                            <i class="icon ion-checkmark"></i>
                            {{ trans('cachet.incidents.status')[4] }}
                        </label>
                    </div>
                    <div class="form-group">
                        <label>{{ trans('forms.incidents.message') }}</label>
                        <div class="markdown-control">
                            <textarea name="message" class="form-control autosize" rows="5" required>{{ Binput::old('message') }}</textarea>
                        </div>
                    </div>
                </fieldset>

                <input type="hidden" name="incident_id" value="{{ $incident->id }}">

                <div class="form-group">
                    <div class="btn-group">
                        <button type="submit" class="btn btn-success">{{ trans('forms.update') }}</button>
                        <a class="btn btn-default" href="{{ cachet_route('dashboard.incidents') }}">{{ trans('forms.cancel') }}</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@stop
