@extends('layout.dashboard')

@section('content')
	<div class="header">
		<i class="fa fa-cogs"></i> {{ Lang::get('cachet.dashboard.settings') }}
		<input type="text" class="form-control input-sm pull-right" placeholder="{{ Lang::get('cachet.dashboard.search') }}">
	</div>
	<div class="row">
		<div class="col-sm-12">
			<ul class="tabs">
				<li class='active'><a href="#tab-1">App</a></li>
				<li><a href="#tab-2">Server</a></li>
				<li><a href="#tab-3">Mail</a></li>
			</ul>
			<div class="tab-content">
				<div id="tab-1">General App settings</div>
				<div id="tab-2">Server settings</div>
				<div id="tab-3">Mail setitngs, host, SMTP, user and password.</div>
			</div>
		</div>
	</div>
@stop
