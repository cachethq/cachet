@extends('layout.dashboard')

@section('content')
<div class="content-panel">
    @includeWhen(isset($subMenu), 'dashboard.partials.sub-sidebar')
    <div class="content-wrapper">
        <div class="header sub-header" id="privacy">
            <span class="uppercase">
                {{ trans('dashboard.settings.privacy.privacy') }}
            </span>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <form name="SettingsForm" class="form-vertical" role="form" action="{{ cachet_route('dashboard.settings', [], 'post') }}" method="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    @include('partials.errors')
                    <fieldset>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label>{{ trans('forms.settings.privacy.privacy-statement') }}</label>

                                    <textarea-with-markdown-preview
                                            name="privacy_statement"
                                            value="{{ Config::get('setting.privacy_statement') }}"
                                            help-text="{{ trans('forms.settings.privacy.privacy-statement-help') }}"
                                            lang-markdown="{{ trans("dashboard.markdown") }}"
                                            lang-preview="{{ trans("dashboard.preview") }}"
                                            preview-url="{{ cachet_route("dashboard.settings.markdown-preview", [], "get") }}"
                                    ></textarea-with-markdown-preview>

                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label>{{ trans('forms.settings.privacy.imprint') }}</label>

                                    <textarea-with-markdown-preview
                                            name="imprint"
                                            value="{{ Config::get('setting.imprint') }}"
                                            help-text="{{ trans('forms.settings.privacy.imprint-help') }}"
                                            lang-markdown="{{ trans("dashboard.markdown") }}"
                                            lang-preview="{{ trans("dashboard.preview") }}"
                                            preview-url="{{ cachet_route("dashboard.settings.markdown-preview", [], "get") }}"
                                    ></textarea-with-markdown-preview>

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
