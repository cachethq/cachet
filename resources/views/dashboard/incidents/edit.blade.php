@extends('layout.dashboard')

@section('content')
    <div class="header">
        <div class="sidebar-toggler visible-xs">
            <i class="icon ion-navicon"></i>
        </div>
        <span class="uppercase">
            <i class="icon ion-android-alert"></i> {{ trans('dashboard.incidents.incidents') }}
        </span>
        &gt; <small>{{ trans('dashboard.incidents.edit.title') }}</small>
    </div>
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12">
                @include('dashboard.partials.errors')
                <form class="form-vertical" name="IncidentForm" role="form" method="POST" autocomplete="off">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <fieldset>
                        <div class="form-group">
                            <label for="incident-name">{{ trans('forms.incidents.name') }}</label>
                            <input type="text" class="form-control" name="name" id="incident-name" required value="{{$incident->name}}">
                        </div>
                        <div class="form-group">
                            <label for="incident-name">{{ trans('forms.incidents.status') }}</label><br>
                            <label class="radio-inline">
                                <input type="radio" name="status" value="1" {{ ($incident->status == 1) ? "checked=checked" : "" }}>
                                <i class="icon ion-flag"></i>
                                {{ trans('cachet.incidents.status')[1] }}
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="status" value="2" {{ ($incident->status == 2) ? "checked=checked" : "" }}>
                                <i class="icon ion-alert-circled"></i>
                                {{ trans('cachet.incidents.status')[2] }}
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="status" value="3" {{ ($incident->status == 3) ? "checked=checked" : "" }}>
                                <i class="icon ion-eye"></i>
                                {{ trans('cachet.incidents.status')[3] }}
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="status" value="4" {{ ($incident->status == 4) ? "checked=checked" : "" }}>
                                <i class="icon ion-checkmark"></i>
                                {{ trans('cachet.incidents.status')[4] }}
                            </label>
                        </div>
                        <div class="form-group">
                            <label for="incident-visibility">{{ trans('forms.incidents.visibility') }}</label>
                            <select name="visible" id="incident-visibility" class="form-control">
                                <option value='1' {{ $incident->visible === 1 ? 'selected' : null }}>{{ trans('forms.incidents.public') }}</option>
                                <option value='0' {{ $incident->visible === 0 ? 'selected' : null }}>{{ trans('forms.incidents.logged_in_only') }}</option>
                            </select>
                        </div>
                        @if($incident->component)
                        <div class="form-group" id='component-status'>
                            <div class="panel panel-default">
                                <div class="panel-heading"><strong>{{ $incident->component->name }}</strong></div>
                                <div class="panel-body">
                                    <div class="radio-items">
                                        @foreach(trans('cachet.components.status') as $statusID => $status)
                                        <div class="radio-inline">
                                            <label>
                                                <input type="radio" name="component_status" value="{{ $statusID }}" {{ $incident->component->status == $statusID ? "checked='checked'" : "" }}>
                                                {{ $status }}
                                            </label>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                        <div class="form-group">
                            <label>{{ trans('forms.incidents.message') }}</label>
                            <div class="markdown-control">
                                <textarea name="message" class="form-control autosize" rows="5" required>{{ $incident->message }}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>{{ trans('forms.incidents.incident_time') }}</label>
                            <input type="text" name="created_at" class="form-control" rel="datepicker-any" value="{{ $incident->created_at_datetimepicker }}">
                            <span class="help-block">{{ trans('forms.optional') }}</span>
                        </div>
                    </fieldset>

                    <input type="hidden" name="id" value={{$incident->id}}>

                    <div class="form-group">
                        <div class="btn-group">
                            <button type="submit" class="btn btn-success">{{ trans('forms.update') }}</button>
                            <a class="btn btn-default" href="{{ route('dashboard.incidents.index') }}">{{ trans('forms.cancel') }}</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop
