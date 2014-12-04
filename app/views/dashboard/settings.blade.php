@extends('layout.dashboard')

@section('content')
	<div class="header">
		<i class="fa fa-cogs"></i> {{ Lang::get('cachet.dashboard.settings') }}
		<input type="text" class="form-control input-sm pull-right" placeholder="{{ Lang::get('cachet.dashboard.search') }}">
	</div>
	<div class="row">
		<div class="col-sm-12">
			<ul class="tabs">
				<li class='active'><a href="#app">App</a></li>
				<li><a href="#server">Server</a></li>
				<li><a href="#mail">Mail</a></li>
			</ul>
			<div class="tab-content">
				<div id="app" class='active'>General App settings</div>
				<div id="server">Server settings</div>
				<div id="mail">Mail setitngs, host, SMTP, user and password.</div>
			</div>
		</div>
	</div>
@stop
