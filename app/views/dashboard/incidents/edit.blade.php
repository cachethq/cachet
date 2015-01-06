@extends('layout.dashboard')

@section('content')
    <div class="header">
        <div class="sidebar-toggler visible-xs">
            <i class="icon ion-navicon"></i>
        </div>
        <span class="uppercase">
            <i class="icon icon ion-android-alert"></i> {{ trans('dashboard.incidents.incidents') }}
        </span>
        > <small>{{ trans('dashboard.incidents.edit.title') }}</small>
    </div>
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12">
                {{ Form::open(['name' => 'IncidentForm', 'class' => 'form-vertical', 'role' => 'form']) }}
                <fieldset>
                    <div class="form-group">
                        <label for="incident-name">{{ trans('forms.incidents.name') }}</label>
                        <input type="text" class="form-control" name="incident[name]" id="incident-name" required value={{$incident->name}} />
                    </div>
                    <div class="form-group">
                        <label for="incident-name">{{ trans('forms.incidents.status') }}</label><br />
                        <label class="radio-inline">
                            <input type="radio" name="incident[status]" value="1" {{ ($incident->status == 1) ? "checked=checked" : "" }} />
                            <i class="icon ion-flag"></i>
                            {{ trans('cachet.incidents.status')[1] }}
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="incident[status]" value="2" {{ ($incident->status == 2) ? "checked=checked" : "" }}/>
                            <i class="icon ion-alert-circled"></i>
                            {{ trans('cachet.incidents.status')[2] }}
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="incident[status]" value="3" {{ ($incident->status == 3) ? "checked=checked" : "" }}/>
                            <i class="icon ion-eye"></i>
                            {{ trans('cachet.incidents.status')[3] }}
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="incident[status]" value="4" {{ ($incident->status == 4) ? "checked=checked" : "" }}/>
                            <i class="icon ion-checkmark"></i>
                            {{ trans('cachet.incidents.status')[4] }}
                        </label>
                    </div>
                    <div class="form-group">
                        <label>{{ trans('forms.incidents.message') }}</label>
                        <textarea name="incident[message]" class="form-control" rows="5">{{ $incident->message }}</textarea>
                        <span class="help-block">{{ trans('forms.incidents.message-help') }}</span>
                    </div>
                </fieldset>

                <input type="hidden" name="incident[user_id]" value="{{ Auth::user()->id }}" />
                <input type="hidden" name="incident[id]" value={{$incident->id}} />
                <button type="submit" class="btn btn-success">{{ trans('forms.update') }}</button>
                <a class="btn btn-default" href="{{ route('dashboard.incidents') }}">{{ trans('forms.cancel') }}</a>
                {{ Form::close() }}
            </div>
        </div>
    </div>
@stop
