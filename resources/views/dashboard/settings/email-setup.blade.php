@extends('layout.dashboard')

@section('content')
<div class="content-panel">
    @if(isset($sub_menu))
    @include('dashboard.partials.sub-sidebar')
    @endif
    <div class="content-wrapper">
        <div class="header sub-header" id="application-setup">
            <span class="uppercase">
                {{ trans('dashboard.settings.email.email') }}
            </span>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <form id="settings-form" name="SettingsForm" class="form-vertical" role="form" action="{{ route('dashboard.settings.email-post') }}" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    @include('dashboard.partials.errors')
                    <fieldset>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label>{{ trans('forms.setup.mail_driver') }}</label>
                                    <select name="mail_driver" class="form-control" required>
                                        @foreach($mail_drivers as $key => $driver)
                                            <option value="{{ $key }}" @if( $mail_config['driver'] === $key) selected @endif>
                                                {{ $driver }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label>
                                        {{ trans('forms.setup.mail_host') }}
                                    </label>
                                    <input type="text" class="form-control" name="mail_host" value="{{ $mail_config['host'] }}">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label>
                                        {{ trans('forms.setup.mail_port') }}
                                    </label>
                                    <input type="text" class="form-control" name="mail_port" value="{{  $mail_config['port'] }}">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label>
                                        {{ trans('forms.setup.mail_username') }}
                                    </label>
                                    <input type="text" class="form-control" name="mail_username" value="{{  $mail_config['username'] }}">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label>
                                        {{ trans('forms.setup.mail_password') }}
                                    </label>
                                    <input type="password" class="form-control" name="mail_password" value="{{  $mail_config['password'] }}">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label> {{ trans('forms.setup.mail_address') }}</label>
                                    <input type="text" class="form-control" name="mail_address" value="{{  $mail_config['from']['address'] }}">

                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label> {{ trans('forms.setup.mail_name') }}</label>
                                    <input type="text" class="form-control" name="mail_name" value="{{ $mail_config['from']['name'] }}">

                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label> {{ trans('forms.setup.mail_encryption') }}</label>
                                    <input type="text" class="form-control" name="mail_encryption" value="{{ $mail_config['encryption'] }}">

                                </div>
                            </div>
                        </div>


                    </fieldset>

                    <div class="row">
                        <div class="col-xs-12">
                            <div class="form-group">
                                <div class="btn-group">
                                    <button type="submit" name="save" class="btn btn-success">{{ trans('forms.save') }}</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
@stop
