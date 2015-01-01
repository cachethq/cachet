@extends('layout.dashboard')

@section('content')
	<div class="header">
		<span class="uppercase">
            <i class="icon ion-speedometer"></i> {{ Lang::get('cachet.dashboard.dashboard') }}
        </span>
	</div>
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12">
                <h4 class='sub-header'>Component Statuses</h4>
                <div class='panel panel-default'>
                    <div class='list-group'>
                        @forelse($components as $component)
                        <div class='list-group-item'>
                            {{ Form::open(['class' => 'component-inline', 'data-messenger' => 'Component updated.']) }}
                            <div class='row striped-list-item'>
                                <div class='col-lg-2 col-xs-12'>
                                    <strong>{{ $component->name }}</strong>
                                </div>
                                <div class='col-lg-10 col-xs-12 text-right'>
                                    @foreach(Lang::get('cachet.component.status') as $statusID => $status)
                                    <div class='radio-inline'>
                                        <label>
                                            <input type='radio' name='status' value='{{ $statusID }}' {{ $component->status === $statusID ? "checked" : null }} />
                                            {{ $status }}
                                        </label>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            <input type='hidden' name='component_id' value='{{ $component->id }}' />
                            {{ Form::close() }}
                        </div>
                        @empty
                        <div class='list-group-item text-danger'>You should add a component.</div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
