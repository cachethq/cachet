@extends('layout.dashboard')

@section('content')
	<div class="header fixed">
        <span class="uppercase">
		    <i class="icons ion-ios-keypad"></i> {{ Lang::get('cachet.dashboard.components') }}
        </span>
        <a class="btn btn-sm btn-success pull-right" href="{{ URL::route('dashboard.components.add') }}">
            {{ Lang::get('cachet.dashboard.component-add') }}
        </a>
        <div class="clearfix"></div>
	</div>
    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">
                <ul class='list-group'>
                    @forelse($components as $component)
                    <li class='list-group-item'>
                        <div class='row'>
                            <div class='col-md-6'>
                                <strong>{{ $component->name }}</strong>
                                @if($component->description)
                                <p><small>{{ $component->description }}</small></p>
                                @endif
                            </div>
                            <div class='col-md-6'>
                                <ul class='nav nav-pills pull-right'>
                                    <li role='presentation'><a href='/dashboard/components/{{ $component->id }}/edit' class='btn btn-info'>Edit</a></li>
                                    <li role='presentation'><a href='/dashboard/components/{{ $component->id }}/delete' class='btn btn-danger'>Delete</a></li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    @empty
                    <li class='list-group-item text-danger'>You should add a component.</li>
                    @endforelse
                </ul>
            </div>
        </div>
    </div>
@stop
