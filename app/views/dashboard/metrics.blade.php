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
					<li role='presentation' class='active'><a data-toggle='tab' role='tab' href="#tab-1">Tab 1</a></li>
					<li role='presentation'><a data-toggle='tab' role='tab' href="#tab-2">Tab 2</a></li>
					<li role='presentation'><a data-toggle='tab' role='tab' href="#tab-3">Tab 3</a></li>
				</ul>
				<div class="tab-content">
					<div role='tabpanel' class='tab-pane active' id="tab-1">Foo</div>
					<div role='tabpanel' class='tab-pane' id="tab-2">Bar</div>
					<div role='tabpanel' class='tab-pane' id="tab-3">Baz</div>
				</div>
			</div>
		</div>
	</div>
@stop
