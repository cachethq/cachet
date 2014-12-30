@extends('layout.dashboard')

@section('content')
	<div class="header">
		<i class="ion ion-email"></i> {{ Lang::get('cachet.dashboard.notifications') }}
	</div>
	<div class="row">
		<div class="col-sm-12">
			<h3>Notifications</h3>
		</div>
	</div>
@stop
