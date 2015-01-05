@if(Auth::check())
<div class="sidebar">
    <div class='sidebar-inner'>
        <div class="profile">
            <div class='row'>
                <div class='col-xs-3'>
                    <div class="avatar">
                        <a href="{{ url('dashboard/user') }}">
                            <img src="{{ Auth::user()->gravatar }}" alt="">
                        </a>
                    </div>
                </div>
                <div class='col-xs-9 username-wrapper'>
                    <div class="profile pull-left">
                        <div class="username">{{ Auth::user()->username }}</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="quick-add-incident">
            <a class="btn btn-block btn-default uppercase" href="{{ route('dashboard.incidents.add') }}">
                <i class="icon ion-android-checkmark-circle visible-sm"></i>
                <span class="hidden-sm">{{ trans('dashboard.incidents.add.title') }}</span>
            </a>
        </div>
        <ul>
            <li {{ set_active('dashboard') }}>
                <a href="{{ route('dashboard') }}">
                    <i class="icon ion-speedometer"></i>
                    <span>{{ trans('dashboard.dashboard') }}</span>
                </a>
            </li>
            <li {{ set_active('dashboard/incidents*') }}>
                <a href="{{ route('dashboard.incidents') }}">
                    <i class="icon ion-android-alert"></i>
                    <span>{{ trans('dashboard.incidents.incidents') }}</span>
                </a>
            </li>
            {{-- <li {{ set_active('dashboard/incidents/templates') }}>
                <a href="{{ route('dashboard.incidents.template') }}">
                    <i class="fa fa-plus"></i> {{ trans('cachet.dashboard.incident-create-template') }}
                </a>
            </li> --}}
            <li {{ set_active('dashboard/components*') }}>
                <a href="{{ route('dashboard.components') }}">
                    <i class="icons ion-ios-keypad"></i>
                    <span>{{ trans_choice('dashboard.components.components', 2) }}</span>
                </a>
            </li>
            <li {{ set_active('dashboard/team*') }}>
                <a href="{{ route('dashboard.team') }}">
                    <i class="icons ion-ios-people"></i>
                    <span>{{ trans('dashboard.team.team') }}</span>
                </a>
            </li>
            {{-- <li {{ set_active('dashboard/metrics') }}>
                <a href="{{ route('dashboard.metrics') }}">
                    <i class="ion ion-stats-bats"></i> {{ trans('cachet.dashboard.metrics') }}
                </a>
            </li>
            <li {{ set_active('dashboard/notifications') }}>
                <a href="{{ route('dashboard.notifications') }}">
                    <i class="ion ion-email"></i> {{ trans('cachet.dashboard.notifications') }}
                </a>
            </li> --}}
            <li {{ set_active('dashboard/settings*') }}>
                <a href="{{ route('dashboard.settings.setup') }}">
                    <i class="icon ion-gear-a"></i>
                    <span>
                        {{ trans('dashboard.settings.settings') }}
                    </span>
                </a>
            </li>
        </ul>
        <div class="bottom-menu-sidebar">
            <div class="text-center">
                <img width="165" src="{{ url('img/cachet-logo.svg') }}" alt="Cachet"/>
            </div>
            <br/>
            <ul>
                <li data-toggle="tooltip" data-placement="top" title="{{ trans('dashboard.help') }}">
                    <a href="https://cachethq.io" target="_blank"><i class="icon ion-help"></i></a>
                </li>
                <li data-toggle="tooltip" data-placement="top" title="{{ trans('dashboard.status_page') }}">
                    <a href="{{ route('status-page') }}"><i class="icon ion-monitor"></i></a>
                </li>
                <li data-toggle="tooltip" data-placement="top" title="{{ trans('dashboard.logout') }}">
                    <a href="{{ route('logout') }}"><i class="icon ion-log-out"></i></a>
                </li>
            </ul>
        </div>
    </div>
</div>
@endif
