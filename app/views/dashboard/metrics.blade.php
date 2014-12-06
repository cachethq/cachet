@extends('layout.dashboard')

@section('content')
	<div class="header">
		<i class="fa fa-area-chart"></i> {{ Lang::get('cachet.dashboard.metrics') }}
		<input type="text" class="form-control input-sm pull-right" placeholder="{{ Lang::get('cachet.dashboard.search') }}">
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div role='tabpanel'>
				<ul class="nav nav-tabs" role='tablist'>
					<li role='presentation' class='active'><a data-toggle='tab' role='tab' href="#metrics">Metrics</a></li>
					<li role='presentation'><a data-toggle='tab' role='tab' href="#add-point">Add Data Point</a></li>
				</ul>
				<div class="tab-content">
					<div role='tabpanel' class='tab-pane active' id="metrics">Metrics</div>
					<div role='tabpanel' class='tab-pane' id="add-point">Add a data point here</div>
				</div>
			</div>
		</div>
	</div>
@stop
