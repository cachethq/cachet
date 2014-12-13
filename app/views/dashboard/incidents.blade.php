@extends('layout.dashboard')

@section('content')
	<div class="header">
		<i class="fa fa-exclamation-triangle"></i> {{ Lang::get('cachet.dashboard.incidents') }}
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div role='tabpanel'>
				<ul class="nav nav-tabs" role='tablist'>
					<li role='presentation' class='active'><a data-toggle='tab' role='tab' href="#incidents">Incidents</a></li>
					<li role='presentation'><a data-toggle='tab' role='tab' href="#templates">Incident Templates</a></li>
				</ul>
				<div class="tab-content">
					<div role='tabpanel' class='tab-pane active' id="incidents">
						<div class='row'>
							<div class='col-md-12'>
								<h3>Incidents</h3>

								@if ($incidents->count() === 0)
								<strong>Woah! No incidents, your doing well!</strong>
								@endif
							</div>
						</div>
					</div>
					<div role='tabpanel' class='tab-pane' id="templates">
						<div class='row'>
							<div class='col-md-12'>
								<h3>Incident Templates</h3>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@stop
