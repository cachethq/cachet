@extends('layout.dashboard')

@section('content')
<div class="header">
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
                    <input type="text" class='form-control' name='incident[name]' id='incident-name' required value={{$incident->name}} />
                </div>
                <div class="form-group">
                    <label for="incident-name">{{ trans('forms.incidents.status') }}</label><br />
                    @foreach(trans('cachet.incidents.status') as $statusID => $status)
                        <label class="radio-inline">
                            <input type="radio" name="incident[status]" value="{{ $statusID }}">
                            <i class="icon ion-flag"></i>
                            {{ $status }}
                        </label>
                    @endforeach
                </div>
                <div class="form-group">
                    <label>{{ trans('forms.incidents.message') }}</label>
                    <textarea name="incident[message]" class="form-control" rows="5">{{$incident->message}}</textarea>
                    <span class='help-block'>{{ trans('forms.incidents.message-help') }}</span>
                </div>
            </fieldset>

            <input type="hidden" name="incident[user_id]" value="{{ Auth::user()->id }}" />
            <input type="hidden" name="incident[id]" value={{$incident->id}} />
            <button type="submit" class="btn btn-success">{{ trans('forms.save') }}</button>
            <a class="btn btn-default" href="{{ route('dashboard.incidents') }}">{{ trans('forms.cancel') }}</a>
            {{ Form::close() }}
        </div>
    </div>
</div>
@stop
