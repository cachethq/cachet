@extends('layout.dashboard')

@section('content')
<div class="content-panel">
    @includeWhen(isset($subMenu), 'dashboard.partials.sub-sidebar')
    <div class="content-wrapper">
        <div class="header sub-header" id="application-setup">
            <span class="uppercase">
                {{ trans('dashboard.settings.notifications.notifications') }}
            </span>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <form id="settings-form" name="SettingsForm" class="form-vertical" role="form" action="{{ cachet_route('dashboard.settings', [], 'post') }}" method="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    @include('partials.errors')
                    <fieldset>
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="form-group">
                                        <label>{{ trans('forms.settings.notifications.shortlinkTplIncident') }}</label>
                                        <input type="text" class="form-control" name="shortlinkTplIncident" value="{{Config::get('setting.shortlinkTplIncident')}}" placeholder="{{ trans('forms.settings.notifications.iShort') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="form-group">
                                        <label>{{ trans('forms.settings.notifications.shortlinkTplMaintenance') }}</label>
                                        <input type="text" class="form-control" name="shortlinkTplMaintenance" value="{{Config::get('setting.shortlinkTplMaintenance')}}" placeholder="{{ trans('forms.settings.notifications.mShort') }}">
                                    </div>
                                </div>
                            </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="checkbox">
                                    <label>
                                        <input type="hidden" value="0" name="enable_mail">
                                        <input type="checkbox" value="1" name="enable_mail" {{ Config::get('setting.enable_mail') ? 'checked' : null }} {{(Config::get('mail.host') && Config::get('mail.port') && Config::get('mail.username') && Config::get('mail.password')) || (Config::get('mail.driver') === 'log') || Config::get('setting.enable_mail') ? null : 'disabled'}}>
                                        {{ trans('forms.settings.notifications.mail') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="checkbox">
                                    <label>
                                        <input type="hidden" value="0" name="enable_slack">
                                        <input type="checkbox" value="1" name="enable_slack" {{ Config::get('setting.enable_slack') ? 'checked' : null }} {{ Config::get('setting.enable_slack') ? 'disabled' : 'disabled'}}>
                                        {{ trans('forms.settings.notifications.slack') }}
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="checkbox">
                                    <label>
                                        <input type="hidden" value="0" name="enable_twilio">
                                        <input type="checkbox" value="1" name="enable_twilio" {{ Config::get('setting.enable_twilio') ? 'checked' : null }} {{ Config::get('services.twilio.token') || Config::get('setting.enable_twilio') ? null : 'disabled'}}>
                                        {{ trans('forms.settings.notifications.twilio') }}
                                    </label>
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
