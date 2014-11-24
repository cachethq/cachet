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
						<h3>Status Page Details</h3>
						<div class='form-group'>
							<label class='sr-only'>Site Name</label>
							<input type='text' name='app_name' class='form-control' placeholder='Site Name' value='{{ Input::old('app_name', '') }}' required />
							@if($errors->has('app_name'))
							<span class='text-danger'>{{ $errors->first('app_name') }}</span>
							@endif
						</div>
						<div class='form-group'>
							<label class='sr-only'>Site Domain</label>
							<input type='text' name='app_domain' class='form-control' placeholder='Site Domain' value='{{ Input::old('app_domain', '') }}' required />
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

						<h3>Administrator Account</h3>
						<div class='form-group'>
							<label class='sr-only'>Username</label>
							<input type='text' name='user[name]' class='form-control' placeholder='Username' value='{{ Input::old('user.name', '') }}' required />
							@if($errors->has('user.name'))
							<span class='text-danger'>{{ $errors->first('user.name') }}</span>
							@endif
						</div>
						<div class='form-group'>
							<label class='sr-only'>Email</label>
							<input type='email' name='user[email]' class='form-control' placeholder='Email' value='{{ Input::old('user.email', '') }}' required />
							@if($errors->has('user.email'))
							<span class='text-danger'>{{ $errors->first('user.email') }}</span>
							@endif
						</div>
						<div class='form-group'>
							<label class='sr-only'>Password</label>
							<input type='password' name='user[password]' class='form-control' placeholder='Password' value='{{ Input::old('user.password', '') }}' required />
							@if($errors->has('user.password'))
							<span class='text-danger'>{{ $errors->first('user.password') }}</span>
							@endif
						</div>

						<hr />
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
