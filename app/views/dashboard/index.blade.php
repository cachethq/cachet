@extends('layout.dashboard')

@section('content')
	<div class="header">
		<i class="fa fa-dashboard"></i> {{ Lang::get('cachet.dashboard.dashboard') }}
		<input type="text" class="form-control input-sm pull-right" placeholder="{{ Lang::get('cachet.dashboard.search') }}">
	</div>
	<div class="row">
		<div class="col-sm-12">
			<ul class="tabs">
				<li><a href="#tab-1">Tab 1</a></li>
				<li><a href="#tab-2">Tab 2</a></li>
				<li><a href="#tab-3">Tab 3</a></li>
				<li><a href="#tab-4">Tab 4</a></li>
			</ul>
			<div class="tab-content">
				<div id="tab-1">Tab 1</div>
				<div id="tab-2">Tab 2</div>
				<div id="tab-3">Tab 3</div>
				<div id="tab-4">Tab 4</div>
			</div>
		</div>
	</div>
@stop
