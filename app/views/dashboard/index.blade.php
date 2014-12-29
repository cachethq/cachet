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
                <p class='lead'>Let's put cool things here.</p>
            </div>
        </div>
    </div>
@stop
