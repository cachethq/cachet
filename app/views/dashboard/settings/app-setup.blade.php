@extends('layout.dashboard')

@section('content')
    <div class='content-panel'>
        @if(isset($subMenu))
        @include('partials.dashboard.sub-sidebar')
        @endif
        <div class="content-wrapper">
            <div class="row">
                <div class="col-sm-12">
                    <form id="settings-form" name='SettingsForm' class='form-vertical' role='form' action='/dashboard/settings' method='POST' enctype="multipart/form-data">
                        <h4 class="sub-header" id='application-setup'>{{ trans('dashboard.settings.app-setup.app-setup') }}</h4>

                        @if(($saved = Session::get('saved')))
                        <div class='alert alert-success'><strong>{{ trans('dashboard.settings.edit.success') }}</strong></div>
                        @elseif(Session::has('error_message'))
                        <div class='alert alert-danger'><strong>{{ Session::get('error_message') }}</strong></div>
                        @endif

                        <fieldset>
                            <div class='row'>
                                <div class='col-xs-12'>
                                    <div class='form-group'>
                                        <label>{{ trans('forms.settings.app-setup.site-name') }}</label>
                                        <input type='text' class='form-control' name='app_name' value='{{ Setting::get("app_name") }}' required />
                                    </div>
                                </div>
                            </div>
                            <div class='row'>
                                <div class='col-xs-12'>
                                    <div class='form-group'>
                                        <label>{{ trans('forms.settings.app-setup.site-url') }}</label>
                                        <input type='text' class='form-control' name='app_domain' value='{{ Setting::get("app_domain") }}' required />
                                    </div>
                                </div>
                            </div>
                            <div class='row'>
                                <div class='col-xs-12'>
                                    <div class='form-group'>
                                        <label>{{ trans('forms.settings.app-setup.about-this-page') }}</label>
                                        <textarea name='app_about' class='form-control' rows='4'>{{ Setting::get("app_about") }}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class='row'>
                                <div class='col-xs-12'>
                                    <div class='form-group'>
                                        <label>{{ trans('forms.settings.app-setup.days-of-incidents') }}</label>
                                        <input type='number' min='1' max='100' name='app_incident_days' class='form-control' value='{{ Setting::get("app_incident_days") ?: 7 }}' />
                                    </div>
                                </div>
                            </div>
                            <div class='row'>
                                <div class='col-xs-12'>
                                    <div class='form-group'>
                                        <label>{{ trans('forms.settings.app-setup.banner') }}</label>
                                        @if($banner = Setting::get('app_banner'))
                                        <div id="banner-view" class='well'>
                                            <img src='data:{{ Setting::get("app_banner_type") }};base64,{{ $banner }}' style='max-width: 100%' />
                                            <br /><br />
                                            <button id="remove-banner" class="btn btn-danger">{{ trans('forms.remove') }}</button>
                                        </div>
                                        @endif
                                        <input type='file' name='app_banner' class='form-control' />
                                        <span class='help-block'>{{ trans('forms.settings.app-setup.banner-help') }}</span>
                                    </div>
                                </div>
                            </div>
                        </fieldset>

                        <div class='row'>
                            <div class='col-xs-12'>
                                <div class='form-group'>
                                    <button type="submit" class="btn btn-success">{{ trans('forms.save') }}</button>
                                </div>
                            </div>
                        </div>

                        <input type="hidden" name="remove_banner" value="">
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop
