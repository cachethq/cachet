@extends('layout.clean')

@section('content')
    <div class="setup-page">
        <div class="text-center">
            <img class="logo" height="50" src="{{ url('img/cachet-logo.svg') }}" alt="Cachet"/>
            <h4>{{ trans('setup.title') }}</h4>
            <br>
        </div>
        <div class="col-xs-12 col-xs-offset-0 col-sm-8 col-sm-offset-2">
            <div class="steps">
                <div class="step active">
                    {{ trans('setup.status_page_setup') }}
                    <span></span>
                </div>
                <div class="step">
                    {{ trans("setup.admin_account") }}
                    <span></span>
                </div>
                <div class="step">
                    {{ trans("setup.complete_setup") }}
                    <span></span>
                </div>
            </div>
            <div class="clearfix"></div>
            {{ Form::open(['name' => 'SetupForm', 'class' => 'form-vertical', 'id' => 'setup-form', 'role' => 'form', 'method' => 'POST']) }}
                <div class="step block-1 show">
                    <fieldset>
                        <div class="form-group">
                            <label class="sr-only">{{ trans('forms.site_name') }}</label>
                            <input type="text" name="settings[app_name]" class="form-control" placeholder="{{ trans('forms.setup.site_name') }}" value="{{ Binput::old('settings.app_name', '') }}" required />
                            @if($errors->has('settings.app_name'))
                            <span class="text-danger">{{ $errors->first('settings.app_name') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="sr-only">{{ trans('forms.site_domain') }}</label>
                            <input type="text" name="settings[app_domain]" class="form-control" placeholder="{{ trans('forms.setup.site_domain') }}" value="{{ Binput::old('settings.app_domain', url()) }}" required />
                            @if($errors->has('settings.app_domain'))
                            <span class="text-danger">{{ $errors->first('settings.app_domain') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="sr-only">{{ trans('forms.site_timezone') }}</label>
                            <select name="settings[app_timezone]" class="form-control" required>
                                <option value="">Select Timezone</option>
                                @foreach($timezones as $region => $list)
                                <optgroup label="{{ $region }}">
                                @foreach($list as $timezone => $name)
                                <option value="{{ $timezone }}" @if(Binput::old('settins.app_timezone') == $timezone) selected @endif>
                                    {{ $name }}
                                </option>
                                @endforeach
                                </optgroup>
                                @endforeach
                            </select>
                            @if($errors->has('settings.app_timezone'))
                            <span class="text-danger">{{ $errors->first('settings.app_timezone') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="sr-only">{{ trans('forms.site_locale') }}</label>
                            <select name="settings[app_locale]" class="form-control" required>
                                <option value="">Select Language</option>
                                @foreach($langs as $lang => $name)
                                <option value="{{ $lang }}" @if(Binput::old('settins.app_locale') == $timezone) selected @endif>
                                    {{ $name }}
                                </option>
                                @endforeach
                            </select>
                            @if($errors->has('settings.app_locale'))
                            <span class="text-danger">{{ $errors->first('settings.app_locale') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>
                                <input type="checkbox" name="settings[show_support]" value="1" checked />
                                {{ trans("setup.show_support") }}
                            </label>
                            <hr/>
                            <span class="wizard-next btn btn-success" data-current-block="1" data-next-block="2" data-loading-text="<i class='icon ion-load-c'></i>">
                                {{ trans('pagination.next') }}
                            </span>
                        </div>
                    </fieldset>
                </div>
                <div class="step block-2 hidden">
                    <fieldset>
                        <div class="form-group">
                            <label class="sr-only">{{ trans("forms.username") }}</label>
                            <input type="text" name="user[username]" class="form-control" placeholder="{{ trans('forms.setup.username') }}" value="{{ Binput::old('user.username', '') }}" required />
                            @if($errors->has('user.username'))
                            <span class="text-danger">{{ $errors->first('user.username') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="sr-only">{{ trans("forms.email") }}</label>
                            <input type="text" name="user[email]" class="form-control" placeholder="{{ trans('forms.setup.email') }}" value="{{ Binput::old('user.email', '') }}" required />
                            @if($errors->has('user.email'))
                            <span class="text-danger">{{ $errors->first('user.email') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="sr-only">{{ trans("forms.password") }}</label>
                            <input type="password" name="user[password]" class="form-control" placeholder="{{ trans('forms.setup.password') }}" value="{{ Binput::old('user.password', '') }}" required />
                            @if($errors->has('user.password'))
                            <span class="text-danger">{{ $errors->first('user.password') }}</span>
                            @endif
                        </div>
                    </fieldset>
                    <hr />
                    <div class="form-group">
                        <input type="hidden" name="settings[app_incident_days]" value="7" />
                        <span class="wizard-next btn btn-info" data-current-block="2" data-next-block="1">
                            {{ trans('pagination.previous') }}
                        </span>
                        <span class="wizard-next btn btn-success" data-current-block="2" data-next-block="3" data-loading-text="<i class='icon ion-load-c'></i>">
                            {{ trans("setup.complete_setup") }}
                        </span>
                    </div>
                </div>
                <div class="step block-3 hidden">
                    <div class="setup-success">
                        <i class="ion-checkmark-circled"></i>
                        <h3>
                            {{ trans("setup.completed") }}
                        </h3>
                        <a href="{{ route('dashboard') }}" class="btn btn-default">
                            <span>{{ trans("setup.finish_setup") }}</span>
                        </a>
                    </div>
                </div>
            {{ Form::close() }}
        </div>
    </div>
@stop
