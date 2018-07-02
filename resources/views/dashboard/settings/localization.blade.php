@extends('layout.dashboard')

@section('content')
<div class="content-panel">
    @includeWhen(isset($subMenu), 'dashboard.partials.sub-sidebar')
    <div class="content-wrapper">
        <div class="header sub-header" id="application-setup">
            <span class="uppercase">
                {{ trans('dashboard.settings.localization.localization') }}
            </span>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <form id="settings-form" name="SettingsForm" class="form-vertical" role="form" action="{{ cachet_route('dashboard.settings', [], 'post') }}" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    @include('partials.errors')
                    <fieldset>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label>{{ trans('forms.settings.localization.site-timezone') }}</label>
                                    <select name="app_timezone" class="form-control" required>
                                        <option disabled>{{ trans('forms.general.timezone') }}</option>
                                        @foreach($timezones as $region => $list)
                                            <optgroup label="{{ $region }}">
                                                @foreach($list as $timezone => $name)
                                                    <option value="{{ $timezone }}" @if(Config::get('cachet.timezone') == $timezone) selected @endif>
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
                                        {{ trans('forms.settings.localization.date-format') }}
                                        <a href="http://php.net/manual/en/function.date.php" target="_blank"><i class="ion ion-help-circled"></i></a>
                                    </label>
                                    <input type="text" class="form-control" name="date_format" value="{{ Config::get('setting.date_format') ?: 'l jS F Y' }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label>
                                        {{ trans('forms.settings.localization.incident-date-format') }}
                                        <a href="http://php.net/manual/en/function.date.php" target="_blank"><i class="ion ion-help-circled"></i></a>
                                    </label>
                                    <input type="text" class="form-control" name="incident_date_format" value="{{ Config::get('setting.incident_date_format') ?: 'l jS F Y H:i:s' }}" placeholder="{{ trans('forms.settings.localization.incident-date-format') }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label>{{ trans('forms.settings.localization.site-locale') }}</label>
                                    <select name="app_locale" class="form-control" required>
                                        <option value="">Select Language</option>
                                        @foreach($langs as $key => $lang)
                                            <option value="{{ $key }}" @if($appLocale === $key) selected @endif>
                                                {{ $lang['name'] }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                         <div class="row">
                            <div class="col-xs-12">
                                <div class="checkbox">
                                    <label>
                                        <input type="hidden" value="0" name="automatic_localization">
                                        <input type="checkbox" value="1" name="automatic_localization" {{ $automaticLocalization ? 'checked' : null }}>
                                        {{ trans('forms.settings.app-setup.automatic_localization') }}
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

                </form>
            </div>
        </div>
    </div>
</div>
@stop
