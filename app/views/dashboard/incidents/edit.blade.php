@extends('layout.dashboard')

@section('content')
<div class="header">
        <span class="uppercase">
            <i class="icon icon ion-android-alert"></i> {{ trans('cachet.dashboard.incident-add') }}
        </span>
    > <small>Edit an Incident</small>
</div>
<div class="content-wrapper">
    <div class="row">
        <div class="col-md-12">
            {{ Form::open(['name' => 'IncidentForm', 'class' => 'form-vertical', 'role' => 'form']) }}
            <fieldset>
                <div class="form-group">
                    <label for="incident-name">Incident Name</label>
                    <input type="text" class='form-control' name='incident[name]' id='incident-name' required value={{$incident->name}} />
                </div>
                <div class="form-group">
                    <label for="incident-name">Incident Status</label><br />
                    <label class="radio-inline">
                        <input type="radio" name="incident[status]" value="1" {{ ($incident->status == 1) ? "checked=checked" : "" }} />
                        <i class="icon ion-flag"></i>
                        {{ trans('cachet.incident.status')[1] }}
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="incident[status]" value="2" {{ ($incident->status == 2) ? "checked=checked" : "" }}/>
                        <i class="icon ion-alert-circled"></i>
                        {{ trans('cachet.incident.status')[2] }}
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="incident[status]" value="3" {{ ($incident->status == 3) ? "checked=checked" : "" }}/>
                        <i class="icon ion-eye"></i>
                        {{ trans('cachet.incident.status')[3] }}
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="incident[status]" value="4" {{ ($incident->status == 4) ? "checked=checked" : "" }}/>
                        <i class="icon ion-checkmark"></i>
                        {{ trans('cachet.incident.status')[4] }}
                    </label>
                </div>
                <div class="form-group">
                    <label>Message</label>
                    <textarea name="incident[message]" class="form-control" rows="5">{{$incident->message}}</textarea>
                    <span class='help-block'>You may also use Markdown.</span>
                </div>
            </fieldset>

            <input type="hidden" name="incident[user_id]" value="{{ Auth::user()->id }}" />
            <input type="hidden" name="incident[id]" value={{$incident->id}} />
            <button type="submit" class="btn btn-success">Save Incident</button>
            <a class="btn btn-default" href="{{ route('dashboard.incidents') }}">Cancel</a>
            {{ Form::close() }}
        </div>
    </div>
</div>
@stop
