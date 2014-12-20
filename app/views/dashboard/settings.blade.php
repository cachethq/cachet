@extends('layout.dashboard')

@section('content')
	<div class="header">
		<i class="fa fa-cogs"></i> {{ Lang::get('cachet.dashboard.settings') }}
	</div>
	<div class="row">
		<div class="col-sm-12">
			<form name='SettingsForm' class='form-vertical' role='form' action='/dashboard/settings' method='POST'>
				<h3>Cachet Settings</h3>
				<fieldset>
					<div class='form-group'>
						<label>Site Name</label>
						<input type='text' class='form-control' name='app_name' value='{{ Setting::get("app_name") }}' required />
					</div>
					<div class='form-group'>
						<label>Site URL</label>
						<input type='text' class='form-control' name='app_domain' value='{{ Setting::get("app_domain") }}' required />
					</div>
				</fieldset>

				<h3>Server</h3>
				<fieldset>

				</fieldset>

				<h3>Security</h3>
				<fieldset>
					<div class='form-group'>
						<label>Allowed Domains <em>Comma Seperated</em></label>
						<textarea class='form-control' name='allowed_domains' rows='5' placeholder='http://cachet.io, http://cachet.herokuapp.com'>{{ Setting::get('allowed_domains') }}</textarea>
						<div class='help-block'>
							The domain set above is automatically allowed by default.
						</div>
					</div>
				</fieldset>

				<h3>Mail</h3>
				<fieldset>

				</fieldset>

				<h3>Theme</h3>
				<fieldset>
					<div class='form-group'>
						<label>Background Color</label>
						<div class='input-group'>
							<div class='input-group-addon'>#</div>
							<input type='text' class='form-control' maxlength="6" name='style.background_color' value='{{ Setting::get("style_background_color") }}' />
						</div>
					</div>
					<div class='form-group'>
						<label>Text Color</label>
						<div class='input-group'>
							<div class='input-group-addon'>#</div>
							<input type='text' class='form-control' maxlength="6" name='style.text_color' value='{{ Setting::get("style_text_color") }}' />
						</div>
					</div>
					<div class='form-group'>
						<label>Success Warning Color</label>
						<div class='input-group'>
							<div class='input-group-addon'>#</div>
							<input type='text' class='form-control' maxlength="6" name='style.success_warning_color' value='{{ Setting::get("style_success_warning_color") }}' />
						</div>
					</div>
					<div class='form-group'>
						<label>Error Warning Color</label>
						<div class='input-group'>
							<div class='input-group-addon'>#</div>
							<input type='text' class='form-control' maxlength="6" name='style.error_warning_color' value='{{ Setting::get("style_error_warning_color") }}' />
						</div>
					</div>
					<div class='form-group'>
						<label>Info Warning Color</label>
						<div class='input-group'>
							<div class='input-group-addon'>#</div>
							<input type='text' class='form-control' name='style.info_warning_color' value='{{ Setting::get("style_info_warning_color") }}' />
						</div>
					</div>
				</fieldset>

				<h3>Stylesheet</h3>
				<fieldset>
					<div class='form-group'>
						<label>Custom Stylesheet</label>
						<textarea class='form-control' name='stylesheet' rows='10'>{{ Setting::get('stylesheet') }}</textarea>
					</div>
				</fieldset>

				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
		</div>
	</div>
@stop
