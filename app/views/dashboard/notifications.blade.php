@extends('layout.dashboard')

@section('content')
	<div class="header">
		<i class="fa fa-envelope"></i> {{ Lang::get('cachet.dashboard.notifications') }}
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div role='tabpanel'>
				<ul class="nav nav-tabs" role='tablist'>
					<li role='presentation' class='active'><a data-toggle='tab' role='tab' href="#notifications">Notifications</a></li>
				</ul>
				<div class="tab-content">
					<div role='tabpanel' class='tab-pane active' id="notifications">
						<div class='row'>
							<div class='col-md-12'>
								<h3>Subscribers</h3>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@stop
