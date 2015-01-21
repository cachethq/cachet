@extends('layout.dashboard')

@section('content')
    <div class="content-panel">
        @if(isset($subMenu))
        @include('partials.dashboard.sub-sidebar')
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
                        {{ Form::token() }}
                        @include('partials.dashboard.errors')
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
                                            <textarea name="app_about" class="form-control" rows="4">{{ Setting::get('app_about') }}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="form-group">
                                        <label>{{ trans('forms.settings.app-setup.google-analytics') }}</label>
                                        <input type="text" name="app_analytics" class="form-control" value="{{ Setting::get('app_analytics') }}" placeholder="UA-12345-12">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="form-group">
                                        <label>{{ trans('forms.settings.app-setup.site-timezone') }}</label>
                                        <select name="app_timezone" class="form-control" required>
                                            <option value="">Select Timezone</option>
                                            @foreach($timezones as $region => $list)
                                            <optgroup label="{{ $region }}">
                                            @foreach($list as $timezone => $name)
                                            <option value="{{ $timezone }}" @if(Setting::get('app_timezone') == $timezone) selected @endif>
                                                {{ $name }}
                                            </option>
                                            @endforeach
                                            </optgroup>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="form-group">
                                        <label>
                                            {{ trans('forms.settings.app-setup.date-format') }}
                                            <a href="http://php.net/manual/en/function.date.php" target="_blank"><i class="icon ion-help-circled"></i></a>
                                        </label>
                                        <input type="text" class="form-control" name="date_format" value="{{ Setting::get('date_format') ?: 'jS F Y' }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="form-group">
                                        <label>{{ trans('forms.settings.app-setup.site-locale') }}</label>
                                        <select name="app_locale" class="form-control" required>
                                            <option value="">Select Language</option>
                                            @foreach($langs as $lang => $name)
                                            <option value="{{ $lang }}" @if(Setting::get('app_locale') == $lang) selected @endif>
                                                {{ $name }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="form-group">
                                        <label>{{ trans('forms.settings.app-setup.days-of-incidents') }}</label>
                                        <input type="number" min="1" max="100" name="app_incident_days" class="form-control" value="{{ Setting::get('app_incident_days') ?: 7 }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="form-group">
                                        <label>{{ trans('forms.settings.app-setup.display-graphs') }}</label>
                                        <input type="hidden" value="0" name="display_graphs">
                                        <input type="checkbox" value="1" name="display_graphs" class="form-control" {{ Setting::get('display_graphs') ? 'checked' : null }}>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="form-group">
                                        <label>{{ trans('setup.show_support') }}</label>
                                        <input type="hidden" value="0" name="show_support">
                                        <input type="checkbox" value="1" name="show_support" class="form-control" {{ Setting::get('show_support') ? 'checked' : null }}>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="form-group">
                                        <label>{{ trans('setup.allow_tracking') }}</label>
                                        <input type="hidden" value="0" name="app_track">
                                        <input type="checkbox" value="1" name="app_track" class="form-control" {{ Setting::get('app_track') ? 'checked' : null }}>
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
