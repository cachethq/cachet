@extends('layout.dashboard')

@section('content')
	<div class="header">
		<i class="fa fa-cogs"></i> {{ Lang::get('cachet.dashboard.settings') }}
	</div>
	<div class="row">
		<div class="col-sm-12">
			<form>
				<h3>Cachet Settings <i>Not working yet.</i></h3>
				<fieldset>
					<div class='form-group'>
						<label>Site Name</label>
						<input type='text' class='form-control' value='{{ Setting::get("app_name") }}' required />
					</div>
					<div class='form-group'>
						<label>Site URL</label>
						<input type='text' class='form-control' value='{{ Setting::get("app_domain") }}' required />
					</div>
				</fieldset>

				<h3>Server</h3>
				<fieldset>

				</fieldset>

				<h3>Mail</h3>
				<fieldset>

				</fieldset>

				<h3>Theme</h3>
				<fieldset>
					<div class='form-group'>
						<label>Background Colour</label>
						<input type='text' class='form-control' />
					</div>
					<div class='form-group'>
						<label>Text Colour</label>
						<input type='text' class='form-control' />
					</div>
					<div class='form-group'>
						<label>Success Warning Colour</label>
						<input type='text' class='form-control' />
					</div>
					<div class='form-group'>
						<label>Error Warning Colour</label>
						<input type='text' class='form-control' />
					</div>
					<div class='form-group'>
						<label>Info Warning Colour</label>
						<input type='text' class='form-control' />
					</div>
				</fieldset>
				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
	</div>
@stop
