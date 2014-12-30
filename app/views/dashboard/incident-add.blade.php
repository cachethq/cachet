@extends('layout.dashboard')

@section('content')
	<div class="header">
        <span class="uppercase">
		    <i class="icon icon ion-android-alert"></i> {{ Lang::get('cachet.dashboard.incident-add') }}
        </span>
		> <small>Create an Incident</small>
	</div>
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12">
                @if($incident = Session::get('incident'))
                <div class="alert alert-{{ $incident->isValid() ? "success" : "danger" }}">
                    @if($incident->isValid())
                    <strong>Awesome.</strong> Incident added.
                    @else
                    <strong>Whoops.</strong> Something went wrong with the incident.
                    @endif
                </div>
                @endif

                {{ Form::open(['name' => 'IncidentForm', 'class' => 'form-vertical', 'role' => 'form']) }}
                    <fieldset>
                        <div class="form-group">
                            <label for="incident-name">Incident Name</label>
                            <input type="text" class='form-control' name='incident[name]' id='incident-name' required />
                        </div>
                        <div class="form-group">
                            <label for="incident-name">Incident Status</label><br />
                            <label class="radio-inline">
                                <input type="radio" name="incident[status]" value="1" />
                                <i class="icon ion-flag"></i>
                                {{ Lang::get('cachet.incident.status')[1] }}
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="incident[status]" value="2" />
                                <i class="icon ion-alert-circled"></i>
                                {{ Lang::get('cachet.incident.status')[2] }}
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="incident[status]" value="3" />
                                <i class="icon ion-eye"></i>
                                {{ Lang::get('cachet.incident.status')[3] }}
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="incident[status]" value="4" />
                                <i class="icon ion-checkmark"></i>
                                {{ Lang::get('cachet.incident.status')[4] }}
                            </label>
                        </div>
                        <div class="form-group">
                            <label>Message</label>
                            <textarea name="incident[message]" class="form-control" rows="5"></textarea>
                            <span class='help-block'>You may also use Markdown.</span>
                        </div>
                    </fieldset>

                    <input type="hidden" name="incident[user_id]" value="{{ Auth::user()->id }}" />
                    <button type="submit" class="btn btn-success">Create</button>
                    <a class="btn btn-default" href="{{ URL::route('dashboard.incidents') }}">Cancel</a>
                {{ Form::close() }}
            </div>
        </div>
    </div>
@stop
