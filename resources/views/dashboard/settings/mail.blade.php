@extends('layout.dashboard')

@section('content')
<div class="content-panel">
    @includeWhen(isset($subMenu), 'dashboard.partials.sub-sidebar')
    <div class="content-wrapper">
        <div class="header sub-header" id="application-setup">
            <span class="uppercase">
                {{ trans('dashboard.settings.mail.mail') }}
            </span>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <form id="settings-form" name="SettingsForm" class="form-vertical" role="form" action="{{ cachet_route('dashboard.settings.mail', [], 'post') }}" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    @include('partials.errors')
                    <fieldset>
                        <div class="form-group">
                            <label>{{ trans('forms.setup.mail_driver') }}</label>
                            <select name="config[mail_driver]" class="form-control" required>
                                <option disabled>{{ trans('forms.setup.mail_driver') }}</option>
                                @foreach($mailDrivers as $driver => $driverName)
                                <option value="{{ $driver }}" {{ Binput::old('config.mail_driver', $config['driver']) == $driver ? "selected" : null }}>{{ $driverName }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>{{ trans('forms.setup.mail_host') }} (optional)</label>
                            <input type="text" class="form-control" name="config[mail_host]" value="{{ Binput::old('config.mail_host', $config['host']) }}" placeholder="{{ trans('forms.setup.mail_host') }}">
                        </div>
                        <div class="form-group">
                            <label>{{ trans('forms.setup.mail_address') }}</label>
                            <input type="text" class="form-control" name="config[mail_address]" value="{{ Binput::old('config.mail_address', $config['from']['address']) }}" placeholder="notifications@alt-three.com">
                        </div>
                        <div class="form-group">
                            <label>{{ trans('forms.setup.mail_username') }}</label>
                            <input type="text" class="form-control" name="config[mail_username]" value="{{ Binput::old('config.mail_username', $config['username']) }}" placeholder="{{ trans('forms.setup.mail_username') }}">
                        </div>
                        <div class="form-group">
                            <label>{{ trans('forms.setup.mail_password') }}</label>
                            <input type="password" class="form-control" name="config[mail_password]" value="{{ Binput::old('config.mail_password') }}" autocomplete="off" placeholder="{{ trans('forms.setup.mail_password') }}">
                        </div>
                    </fieldset>

                    <div class="row">
                        <div class="col-xs-12">
                            <div class="form-group">
                                <button type="submit" class="btn btn-success">{{ trans('forms.save') }}</button>
                                <a href="{{ cachet_route('dashboard.settings.mail.test', null, 'post') }}" class="btn btn-info confirm-action" data-method='POST'>{{ trans('dashboard.settings.mail.test') }}</a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@stop
