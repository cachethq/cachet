@extends('layout.dashboard')

@section('content')
	<div class="header fixed">
        <span class="uppercase">
		    <i class="icon icon ion-android-alert"></i> {{ Lang::get('cachet.dashboard.incidents') }}
        </span>
        <a class="btn btn-sm btn-success pull-right" href="{{ URL::route('dashboard.incidents.add') }}">
            {{ Lang::get('cachet.dashboard.incident-add') }}
        </a>
        <div class="clearfix"></div>
	</div>
    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">
                @if ($incidents->count() === 0)
                <p>Woah! No incidents, your doing well!</p>
                @else
                <p>You have <strong>{{ $incidents->count() }}</strong> incidents.</p>
                @endif

                <ul class='list-group'>
                    @foreach($incidents as $incident)
                    <li class='list-group-item'>
                        <div class='row'>
                            <div class='col-md-6'>
                                <strong>{{ $incident->name }}</strong>
                                @if($incident->message)
                                <p><small>{{ Str::words($incident->message, 5) }}</small></p>
                                @endif
                            </div>
                            <div class='col-md-6'>
                                <ul class='nav nav-pills pull-right'>
                                    <li role='presentation'><a href='/dashboard/incidents/{{ $incident->id }}/delete' class='btn btn-danger'>Delete</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@stop
