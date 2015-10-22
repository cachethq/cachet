@extends('layout.dashboard')

@section('content')
    <div class="content-panel">
        @if(isset($sub_menu))
        @include('dashboard.partials.sub-sidebar')
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
                        @include('dashboard.partials.errors')
                        <fieldset>
                            <div class="row">
                                <div class="col-xs-6">
                                    <div class="form-group">
                                        <label>{{ trans('forms.settings.theme.background-color') }}</label>
                                        <input type="text" class="form-control color-code" name="style.background_color" value="{{ $theme_background_color }}">
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <div class="form-group">
                                        <label>{{ trans('forms.settings.theme.text-color') }}</label>
                                        <input type="text" class="form-control color-code" name="style.text_color" value="{{ $theme_text_color }}">
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-xs-6">
                                    <div class="form-group">
                                        <label>{{ trans('forms.settings.theme.banner-background-color') }}</label>
                                        <input type="text" class="form-control color-code" name="style.banner_background_color" value="{{ $theme_banner_background_color }}">
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <div class="form-group">
                                        <label>{{ trans('forms.settings.theme.banner-padding') }}</label>
                                        <input type="text" class="form-control" name="style.banner_padding" value="{{ $theme_banner_padding }}">
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="checkbox">
                                        <label>
                                            <input type="hidden" value="0" name="style.fullwidth_header">
                                            <input type="checkbox" value="1" name="style.fullwidth_header" {{ Setting::get('style_fullwidth_header') ? 'checked' : null }}>
                                            {{ trans('forms.settings.theme.fullwidth-banner') }}
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-xs-6">
                                    <div class="form-group">
                                        <label>{{ trans('forms.settings.theme.reds') }}</label>
                                        <input type="text" class="form-control color-code" name="style.reds" value="{{ $theme_reds }}">
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <div class="form-group">
                                        <label>{{ trans('forms.settings.theme.blues') }}</label>
                                        <input type="text" class="form-control color-code" name="style.blues" value="{{ $theme_blues }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-6">
                                    <div class="form-group">
                                        <label>{{ trans('forms.settings.theme.greens') }}</label>
                                        <input type="text" class="form-control color-code" name="style.greens" value="{{ $theme_greens }}">
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <div class="form-group">
                                        <label>{{ trans('forms.settings.theme.yellows') }}</label>
                                        <input type="text" class="form-control color-code" name="style.yellows" value="{{ $theme_yellows }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-6">
                                    <div class="form-group">
                                        <label>{{ trans('forms.settings.theme.oranges') }}</label>
                                        <input type="text" class="form-control color-code" name="style.oranges" value="{{ $theme_oranges }}">
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <div class="form-group">
                                        <label>{{ trans('forms.settings.theme.metrics') }}</label>
                                        <input type="text" class="form-control color-code" name="style.metrics" value="{{ $theme_metrics }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-6">
                                    <div class="form-group">
                                        <label>{{ trans('forms.settings.theme.links') }}</label>
                                        <input type="text" class="form-control color-code" name="style.links" value="{{ $theme_links }}">
                                    </div>
                                </div>
                                <div class="col-xs-6">
                                    <div class="form-group">
                                        <label>{{ trans('forms.settings.theme.background-fills') }}</label>
                                        <input type="text" class="form-control color-code" name="style.background_fills" value="{{ $theme_background_fills }}">
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="1" name="dashboard_login_link" {{ Setting::get('dashboard_login_link') ? 'checked' : null }}>
                                            {{ trans('forms.settings.theme.dashboard-login') }}
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
