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
                        <h4 class="sub-header" id='stylesheet'>Stylesheet</h4>

                        @if($saved = Session::get('saved'))
                        <div class='alert alert-success'><strong>{{ Lang::get('cachet.dashboard.settings_saved') }}</strong></div>
                        @elseif(Session::has('saved'))
                        <div class='alert alert-danger'><strong>{{ Lang::get('cachet.dashboard.settings_not_saved') }}</strong></div>
                        @endif

                        <fieldset>
                            <div class='row'>
                                <div class='col-xs-12'>
                                    <div class='form-group'>
                                        <label>Custom Stylesheet</label>
                                        <textarea class='form-control' name='stylesheet' rows='10'>{{ Setting::get('stylesheet') }}</textarea>
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
