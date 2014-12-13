@extends('layout.dashboard')

@section('content')
	<div class="header">
		<i class="fa fa-area-chart"></i> {{ Lang::get('cachet.dashboard.metrics') }}
	</div>
	<div class="row">
		<div class="col-sm-12">
			<h3>Metrics</h3>
		</div>
	</div>
@stop
