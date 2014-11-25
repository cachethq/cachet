@extends('layout.master')

@section('content')
<div class='text-header'>
	<h1>Dashboard. <small>Manage Cachet.</small></h1>
</div>

<hr />

<div role='tabpanel'>
	<ul class='nav nav-tabs' role='tablist'>
		<li role='presentation' class='active'><a href='#dash' role='tab' data-toggle='tab'>Home</a></li>
		<li role='presentation'><a href='#components' role='tab' data-toggle='tab'>Components</a></li>
		<li role='presentation'><a href='#incidents' role='tab' data-toggle='tab'>Incidents</a></li>
	</ul>

	<div class='tab-content'>
		<div role='tabpanel' class='tab-pane active' id='dash'>
			<p>Coming soon... <a href="/">Back to Status Page.</a></p>
		</div>
		<div role='tabpanel' class='tab-pane' id='components'>Components?</div>
		<div role='tabpanel' class='tab-pane' id='incidents'>Incidents?</div>
	</div>
</div>
@stop
