@extends('layout.dashboard')

@section('content')
    @if(isset($subMenu))
    @include('partials.dashboard.sub-sidebar')
    @endif
    <div class='content-panel'>
        <div class="header">
            <span class="uppercase">
                <i class="icon ion-gear-a"></i> {{ Lang::get('cachet.dashboard.settings') }}
            </span>
        </div>
        <div class="content-wrapper">
            <div class="row">
                <div class="col-sm-12">
                    <form name='SettingsForm' class='form-vertical' role='form' action='/dashboard/settings' method='POST'>
                        <h4 class="sub-header" id='theme'>Theme</h4>

                        @if($saved = Session::get('saved'))
                        <div class='alert alert-success'><strong>{{ Lang::get('cachet.dashboard.settings_saved') }}</strong></div>
                        @elseif(Session::has('saved'))
                        <div class='alert alert-danger'><strong>{{ Lang::get('cachet.dashboard.settings_not_saved') }}</strong></div>
                        @endif

                        <fieldset>
                            <div class='row'>
                                <div class='col-xs-6'>
                                    <div class='form-group'>
                                        <label>Background Color</label>
                                        <input type='text' class='form-control color-code' name='style.background_color' value='{{ Setting::get("style_background_color") }}' />
                                    </div>
                                </div>
                                <div class='col-xs-6'>
                                    <div class='form-group'>
                                        <label>Text Color</label>
                                        <input type='text' class='form-control color-code' name='style.text_color' value='{{ Setting::get("style_text_color") }}' />
                                    </div>
                                </div>
                            </div>
                            <div class='row'>
                                <div class='col-xs-4'>
                                    <div class='form-group'>
                                        <label>Success Warning Color</label>
                                        <input type='text' class='form-control color-code' name='style.success_warning_color' value='{{ Setting::get("style_success_warning_color") }}' />
                                    </div>
                                </div>
                                <div class='col-xs-4'>
                                    <div class='form-group'>
                                        <label>Error Warning Color</label>
                                        <input type='text' class='form-control color-code' name='style.error_warning_color' value='{{ Setting::get("style_error_warning_color") }}' />
                                    </div>
                                </div>
                                <div class='col-xs-4'>
                                    <div class='form-group'>
                                        <label>Info Warning Color</label>
                                        <input type='text' class='form-control color-code' name='style.style_info_warning_color' value='{{ Setting::get("style_info_warning_color") }}' />
                                    </div>
                                </div>
                            </div>
                        </fieldset>

                        <div class='row'>
                            <div class='col-xs-12'>
                                <div class='form-group'>
                                    <button type="submit" class="btn btn-success">Save settings</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop
