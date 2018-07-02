@extends('layout.dashboard')

@section('content')
<div class="content-panel">
    @includeWhen(isset($subMenu), 'dashboard.partials.sub-sidebar')
    <div class="content-wrapper">
        <div class="header sub-header" id="theme">
            <span class="uppercase">
                {{ trans('dashboard.settings.theme.theme') }}
            </span>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <form name="SettingsForm" class="form-vertical" role="form" action="{{ cachet_route('dashboard.settings', [], 'post') }}" method="POST"  enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    @include('partials.errors')
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="form-group">
                                <label>{{ trans('forms.settings.app-setup.banner') }}</label>
                                @if($appBanner)
                                <div id="banner-view" class="well">
                                    <img src="data:{{ $appBannerType }};base64,{{ $appBanner }}" style="max-width: 100%">
                                    <br><br>
                                    <button id="remove-banner" class="btn btn-danger">{{ trans('forms.remove') }}</button>
                                </div>
                                <input type="hidden" name="remove_banner" value="0">
                                @endif
                                <input type="file" name="app_banner" class="form-control">
                                <span class="help-block">{{ trans('forms.settings.app-setup.banner-help') }}</span>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <fieldset>
                        <div class="row">
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <label>{{ trans('forms.settings.theme.background-color') }}</label>
                                    <input type="text" class="form-control color-code" name="style.background_color" value="{{ $themeBackgroundColor }}" placeholder="{{ trans('forms.settings.theme.background-color') }}">
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <label>{{ trans('forms.settings.theme.text-color') }}</label>
                                    <input type="text" class="form-control color-code" name="style.text_color" value="{{ $themeTextColor }}" placeholder="{{ trans('forms.settings.theme.text-color') }}">
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <label>{{ trans('forms.settings.theme.banner-background-color') }}</label>
                                    <input type="text" class="form-control color-code" name="style.banner_background_color" value="{{ $themeBannerBackgroundColor }}" placeholder="{{ trans('forms.settings.theme.banner-background-color') }}">
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <label>{{ trans('forms.settings.theme.banner-padding') }}</label>
                                    <input type="text" class="form-control" name="style.banner_padding" value="{{ $themeBannerPadding }}" placeholder="{{ trans('forms.settings.theme.banner-padding') }}">
                                </div>
                            </div>
                            <div class="col-xs-12">
                                <div class="checkbox">
                                    <label>
                                        <input type="hidden" value="0" name="style.fullwidth_header">
                                        <input type="checkbox" value="1" name="style.fullwidth_header" {{ $appBannerStyleFullWidth ? 'checked' : null }}>
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
                                    <input type="text" class="form-control color-code" name="style.reds" value="{{ $themeReds }}" placeholder="{{ trans('forms.settings.theme.reds') }}">
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <label>{{ trans('forms.settings.theme.blues') }}</label>
                                    <input type="text" class="form-control color-code" name="style.blues" value="{{ $themeBlues }}" placeholder="{{ trans('forms.settings.theme.blues') }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <label>{{ trans('forms.settings.theme.greens') }}</label>
                                    <input type="text" class="form-control color-code" name="style.greens" value="{{ $themeGreens }}" placeholder="{{ trans('forms.settings.theme.greens') }}">
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <label>{{ trans('forms.settings.theme.yellows') }}</label>
                                    <input type="text" class="form-control color-code" name="style.yellows" value="{{ $themeYellows }}" placeholder="{{ trans('forms.settings.theme.yellows') }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <label>{{ trans('forms.settings.theme.oranges') }}</label>
                                    <input type="text" class="form-control color-code" name="style.oranges" value="{{ $themeOranges }}" placeholder="{{ trans('forms.settings.theme.oranges') }}">
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <label>{{ trans('forms.settings.theme.metrics') }}</label>
                                    <input type="text" class="form-control color-code" name="style.metrics" value="{{ $themeMetrics }}" placeholder="{{ trans('forms.settings.theme.metrics') }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <label>{{ trans('forms.settings.theme.links') }}</label>
                                    <input type="text" class="form-control color-code" name="style.links" value="{{ $themeLinks }}" placeholder="{{ trans('forms.settings.theme.links') }}">
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <label>{{ trans('forms.settings.theme.background-fills') }}</label>
                                    <input type="text" class="form-control color-code" name="style.background_fills" value="{{ $themeBackgroundFills }}" placeholder="{{ trans('forms.settings.theme.background-fills') }}">
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="checkbox">
                                    <label>
                                        <input type="hidden" name="dashboard_login_link" value="0">
                                        <input type="checkbox" value="1" name="dashboard_login_link" {{ Config::get('setting.dashboard_login_link') ? 'checked' : null }}>
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
