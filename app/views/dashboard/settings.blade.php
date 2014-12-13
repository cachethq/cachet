@extends('layout.dashboard')

@section('content')
	<div class="header">
		<i class="fa fa-cogs"></i> {{ Lang::get('cachet.dashboard.settings') }}
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div role='tabpanel'>
				<ul class="nav nav-tabs" role='tablist'>
					<li role='presentation' class='active'><a data-toggle='tab' role='tab' href="#app">App</a></li>
					<li role='presentation'><a data-toggle='tab' role='tab' href="#server">Server</a></li>
					<li role='presentation'><a data-toggle='tab' role='tab' href="#mail">Mail</a></li>
					<li role='presentation'><a data-toggle='tab' role='tab' href="#theme">Theme</a></li>
				</ul>
				<div class="tab-content">
					<div role='tabpanel' class='tab-pane active' id="app">General App settings</div>
					<div role='tabpanel' class='tab-pane' id="server">Server settings</div>
					<div role='tabpanel' class='tab-pane' id="mail">Mail setitngs, host, SMTP, user and password.</div>
					<div role='tabpanel' class='tab-pane' id="theme">Configure theme settings here.</div>
				</div>
			</div>
		</div>
	</div>
@stop
