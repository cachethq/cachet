@extends('layout.master')

@section('content')
	<div class='jumbotron'>
		<h1>Setup Cachet</h1>
		<p class='lead'>Under construction.</p>
	</div>

	<div class='row'>
		<div class='col-md-8'>
			<div class='panel panel-default'>
				<div class='panel-heading'>Service Details</div>
				<div class='panel-body'>
					<form name='SetupForm' class='form-vertical' role='form' method="POST">
						<div class='form-group'>
							<label class='sr-only'>Site Name</label>
							<input type='text' name='app_name' class='form-control' placeholder='Site Name' required />
							@if($errors->has('app_name'))
							<span class='text-danger'>{{ $errors->first('app_name') }}</span>
							@endif
						</div>
						<div class='form-group'>
							<label class='sr-only'>Site Domain</label>
							<input type='text' name='app_domain' class='form-control' placeholder='Site Domain' required />
							@if($errors->has('app_domain'))
							<span class='text-danger'>{{ $errors->first('app_domain') }}</span>
							@endif
						</div>
						<div class='form-group'>
							<label>
								<input type='checkbox' name='show_support' value='1' checked />
							</label>
							Show support for Cachet?
						</div>
						<div class='form-group'>
							<button type='submit' class='btn btn-default'>Setup!</button>
						</div>
						{{ Form::token() }}
					</form>
				</div>
			</div>
		</div>
		<div class='col-md-4'>
			<div class='panel panel-info'>
				<div class='panel-heading'>Ding!</div>
				<div class='panel-body'>
					<p>You'll be able to reconfigure Cachet later on.</p>
					<p>At least when there is a management panel&hellip;</p>
				</div>
			</div>
		</div>
	</div>

@stop
