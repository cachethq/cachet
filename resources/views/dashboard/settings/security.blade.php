@extends('layout.dashboard')

@section('content')
    <div class="content-panel">
        @if(isset($sub_menu))
        @include('partials.dashboard.sub-sidebar')
        @endif
        <div class="content-wrapper">
            <div class="header sub-header" id="security">
                <span class="uppercase">
                    {{ trans('dashboard.settings.security.security') }}
                </span>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <form name="SettingsForm" class="form-vertical" role="form" action="/dashboard/settings" method="POST">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        @include('partials.dashboard.errors')
                        <fieldset>
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="form-group">
                                        <label>{{ trans('forms.settings.security.allowed-domains') }}</label>
                                        <textarea class="form-control" name="allowed_domains" rows="5" placeholder="http://cachet.io, http://cachet.herokuapp.com">{{ Setting::get('allowed_domains') }}</textarea>
                                        <div class="help-block">
                                            {{ trans('forms.settings.security.allowed-domains-help') }}
                                        </div>
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

                        @if(! $unsecureUsers->isEmpty())
                        <hr>

                        <div class="panel panel-danger">
                            <div class="panel-heading">{{ trans('dashboard.settings.security.two-factor') }}</div>
                            <div class="list-group">
                                @foreach($unsecureUsers as $user)
                                <div class="list-group-item">
                                    <strong>{{ $user->username }}</strong>
                                    <span class="label label-danger pull-right"><i class="ion-ios-unlocked"></i></span>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
@stop
