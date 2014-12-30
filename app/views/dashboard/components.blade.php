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
            <div class="col-sm-12 striped-list">
                @forelse($components as $component)
                <div class='row striped-list-item'>
                    <div class='col-md-8'>
                        <strong>{{ $component->name }}</strong> <small>{{ $component->humanStatus }}</small>
                        @if($component->description)
                        <p><small>{{ $component->description }}</small></p>
                        @endif
                    </div>
                    <div class='col-md-4 text-right'>
                        <a href='/dashboard/components/{{ $component->id }}/edit' class='btn btn-default'>Edit</a>
                        <a href='/dashboard/components/{{ $component->id }}/delete' class='btn btn-danger'>Delete</a>
                    </div>
                </div>
                @empty
                <div class='list-group-item text-danger'>You should add a component.</div>
                @endforelse
            </div>
        </div>
    </div>
@stop
