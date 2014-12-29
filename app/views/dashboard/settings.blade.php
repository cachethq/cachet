@extends('layout.dashboard')

@section('content')
	<div class="header">
        <span class="uppercase">
		    <i class="icon ion-gear-a"></i> {{ Lang::get('cachet.dashboard.settings') }}
        </span>
	</div>
    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">
                <form name='SettingsForm' class='form-vertical' role='form' action='/dashboard/settings' method='POST'>
                    <h4 class="sub-header">Cachet Settings</h4>
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

                    <h4 class="sub-header">Server</h4>
                    <fieldset>

                    </fieldset>

                    <h4 class="sub-header">Security</h4>
                    <fieldset>
                        <div class='form-group'>
                            <label>Allowed Domains <em>Comma Seperated</em></label>
                            <textarea class='form-control' name='allowed_domains' rows='5' placeholder='http://cachet.io, http://cachet.herokuapp.com'>{{ Setting::get('allowed_domains') }}</textarea>
                            <div class='help-block'>
                                The domain set above is automatically allowed by default.
                            </div>
                        </div>
                    </fieldset>

                    <h4>Mail</h4>
                    <fieldset>

                    </fieldset>

                    <h4 class="sub-header">Theme</h4>
                    <fieldset>
                        <div class='form-group'>
                            <label>Background Color</label>
                            <input type='text' class='form-control color-code' name='style.background_color' value='{{ Setting::get("style_background_color") }}' />
                            </div>
                        <div class='form-group'>
                            <label>Text Color</label>
                            <input type='text' class='form-control color-code' name='style.text_color' value='{{ Setting::get("style_text_color") }}' />
                            </div>
                        <div class='form-group'>
                            <label>Success Warning Color</label>
                            <input type='text' class='form-control color-code' name='style.success_warning_color' value='{{ Setting::get("style_success_warning_color") }}' />
                        </div>
                        <div class='form-group'>
                            <label>Error Warning Color</label>
                            <input type='text' class='form-control color-code' name='style.error_warning_color' value='{{ Setting::get("style_error_warning_color") }}' />
                        </div>
                        <div class='form-group'>
                            <label>Info Warning Color</label>
                            <input type='text' class='form-control color-code' name='style.style_info_warning_color' value='{{ Setting::get("style_info_warning_color") }}' />
                        </div>
                    </fieldset>

                    <h4 class="sub-header">Stylesheet</h4>
                    <fieldset>
                        <div class='form-group'>
                            <label>Custom Stylesheet</label>
                            <textarea class='form-control' name='stylesheet' rows='10'>{{ Setting::get('stylesheet') }}</textarea>
                        </div>
                    </fieldset>

                    <button type="submit" class="btn btn-success">Save settings</button>
                </form>
            </div>
        </div>
    </div>
@stop
