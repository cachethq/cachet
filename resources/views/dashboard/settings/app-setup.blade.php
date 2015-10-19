@extends('layout.dashboard')

@section('content')
    <div class="content-panel">
        @if(isset($sub_menu))
        @include('dashboard.partials.sub-sidebar')
        @endif
        <div class="content-wrapper">
            <div class="header sub-header" id="application-setup">
                <span class="uppercase">
                    {{ trans('dashboard.settings.app-setup.app-setup') }}
                </span>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <form id="settings-form" name="SettingsForm" class="form-vertical" role="form" action="/dashboard/settings" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        @include('dashboard.partials.errors')
                        <fieldset>
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="form-group">
                                        <label>{{ trans('forms.settings.app-setup.site-name') }}</label>
                                        <input type="text" class="form-control" name="app_name" value="{{ Setting::get('app_name') }}" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="form-group">
                                        <label>{{ trans('forms.settings.app-setup.site-url') }}</label>
                                        <input type="text" class="form-control" name="app_domain" value="{{ Setting::get('app_domain') }}" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="form-group">
                                        <label>{{ trans('forms.settings.app-setup.about-this-page') }}</label>
                                        <div class='markdown-control'>
                                            <textarea name="app_about" class="form-control autosize" rows="4">{{ Setting::get('app_about') }}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="form-group">
                                        <label>{{ trans('forms.settings.app-setup.days-of-incidents') }}</label>
                                        <input type="number" max="100" name="app_incident_days" class="form-control" value="{{ Setting::get('app_incident_days', 7) }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="checkbox">
                                        <label>
                                            <input type="hidden" value="0" name="enable_subscribers">
                                            <input type="checkbox" value="1" name="enable_subscribers" {{ Setting::get('enable_subscribers') ? 'checked' : null }}>
                                            {{ trans('forms.settings.app-setup.subscribers') }}
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="checkbox">
                                        <label>
                                            <input type="hidden" value="0" name="display_graphs">
                                            <input type="checkbox" value="1" name="display_graphs" {{ Setting::get('display_graphs') ? 'checked' : null }}>
                                            {{ trans('forms.settings.app-setup.display-graphs') }}
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="checkbox">
                                        <label>
                                            <input type="hidden" value="0" name="show_support">
                                            <input type="checkbox" value="1" name="show_support" {{ Setting::get('show_support') ? 'checked' : null }}>
                                            {{ trans('setup.show_support') }}
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="form-group">
                                        <label>{{ trans('forms.settings.app-setup.banner') }}</label>
                                        @if($banner = Setting::get('app_banner'))
                                        <div id="banner-view" class="well">
                                            <img src="data:{{ Setting::get('app_banner_type') }};base64,{{ $banner }}" style="max-width: 100%">
                                            <br><br>
                                            <button id="remove-banner" class="btn btn-danger">{{ trans('forms.remove') }}</button>
                                        </div>
                                        @endif
                                        <input type="file" name="app_banner" class="form-control">
                                        <span class="help-block">{{ trans('forms.settings.app-setup.banner-help') }}</span>
                                    </div>
                                </div>
                            </div>
                        </fieldset>

                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
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
