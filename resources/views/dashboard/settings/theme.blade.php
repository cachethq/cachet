@extends('layout.dashboard')

@section('content')
    <div class="content-panel">
        @if(isset($subMenu))
        @include('partials.dashboard.sub-sidebar')
        @endif
        <div class="content-wrapper">
            <div class="header sub-header" id="theme">
                <span class="uppercase">
                    {{ trans('dashboard.settings.theme.theme') }}
                </span>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <form name="SettingsForm" class="form-vertical" role="form" action="/dashboard/settings" method="POST">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        @include('partials.dashboard.errors')
                        <fieldset>
                            <div class="row">
                                <div class="col-xs-6">
                                    <div class="form-group">
                                        <label>{{ trans('forms.settings.theme.background-color') }}</label>
                                        <input type="text" class="form-control color-code" name="style.background_color" value="{{ Setting::get('style_background_color') }}">
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <div class="form-group">
                                        <label>{{ trans('forms.settings.theme.text-color') }}</label>
                                        <input type="text" class="form-control color-code" name="style.text_color" value="{{ Setting::get('style_text_color') }}">
                                    </div>
                                </div>
                            </div>
                            {{--
                            <div class="row">
                                <div class="col-xs-4">
                                    <div class="form-group">
                                        <label>Success Warning Color</label>
                                        <input type="text" class="form-control color-code" name="style.success_warning_color" value="{{ Setting::get('style_success_warning_color') }}">
                                    </div>
                                </div>
                                <div class="col-xs-4">
                                    <div class="form-group">
                                        <label>Error Warning Color</label>
                                        <input type="text" class="form-control color-code" name="style.error_warning_color" value="{{ Setting::get('style_error_warning_color') }}">
                                    </div>
                                </div>
                                <div class="col-xs-4">
                                    <div class="form-group">
                                        <label>Info Warning Color</label>
                                        <input type="text" class="form-control color-code" name="style.style_info_warning_color" value="{{ Setting::get('style_info_warning_color') }}">
                                    </div>
                                </div>
                            </div>
                            --}}
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
