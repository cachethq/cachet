@if(Auth::check())
<div class="sidebar">
    <div class='sidebar-inner'>
        <div class="profile">
            <div class="avatar pull-left">
                <a href="{{ URL::to('dashboard/user') }}">
                    <img src="{{ Auth::user()->gravatar }}" alt="">
                </a>
            </div>
            <div class="profile pull-left">
                <div class="username">{{ Auth::user()->username }}</div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="quick-add-incident">
            <a class="btn btn-block btn-default uppercase" href="{{ URL::route('dashboard.incidents.add') }}">
                {{ Lang::get('cachet.dashboard.incident-add') }}
            </a>
        </div>
        <ul>
            <li class="{{ Request::is('dashboard') ? 'active' : '' }}">
                <a href="{{ URL::route('dashboard') }}">
                    <i class="icon ion-speedometer"></i> {{ Lang::get('cachet.dashboard.dashboard') }}
                </a>
            </li>
            <li class="{{ Request::is('dashboard/incidents') ? 'active' : '' }}">
                <a href="{{ URL::route('dashboard.incidents') }}">
                    <i class="icon ion-android-alert"></i> {{ Lang::get('cachet.dashboard.incidents') }}
                </a>
            </li>
            {{-- <li class="{{ Request::is('dashboard/incidents/template') ? 'active' : '' }} sub-nav-item">
                <a href="{{ URL::route('dashboard.incidents.template') }}">
                    <i class="fa fa-plus"></i> {{ Lang::get('cachet.dashboard.incident-create-template') }}
                </a>
            </li> --}}
            <li class="{{ Request::is('dashboard/components') ? 'active' : '' }}">
                <a href="{{ URL::route('dashboard.components') }}">
                    <i class="icons ion-ios-keypad"></i> {{ Lang::get('cachet.dashboard.components') }}
                </a>
            </li>
            {{-- <li class="{{ Request::is('dashboard/metrics') ? 'active' : '' }}">
                <a href="{{ URL::route('dashboard.metrics') }}">
                    <i class="fa fa-area-chart"></i> {{ Lang::get('cachet.dashboard.metrics') }}
                </a>
            </li>
            <li class="sub-nav-item">
                <a href="#">
                    <i class="fa fa-plus"></i> {{ Lang::get('cachet.dashboard.metrics-add') }}
                </a>
            </li> --}}
            {{-- <li class="{{ Request::is('dashboard/notifications') ? 'active' : '' }}">
                <a href="{{ URL::route('dashboard.notifications') }}">
                    <i class="fa fa-envelope"></i> {{ Lang::get('cachet.dashboard.notifications') }}
                </a>
            </li> --}}
            <li class="{{ Request::is('dashboard/settings') ? 'active' : '' }}">
                <a href="{{ URL::route('dashboard.settings') }}">
                    <i class="icon ion-gear-a"></i> {{ Lang::get('cachet.dashboard.settings') }}
                </a>
            </li>
        </ul>
        <div class="bottom-menu-sidebar">
            <div class="text-center">
                <img width="165" src="{{ url('img/cachet-logo.svg') }}" alt="Cachet"/>
            </div>
            <br/>
            <ul>
                <li data-toggle="tooltip" data-placement="top" title="{{ Lang::get('cachet.dashboard.help') }}">
                    <a href="https://cachethq.github.io" target="_blank"><i class="icon ion-help"></i></a>
                </li>
                <li data-toggle="tooltip" data-placement="top" title="{{ Lang::get('cachet.dashboard.status_page') }}">
                    <a href="{{ URL::route('status-page') }}"><i class="icon ion-monitor"></i></a>
                </li>
                <li data-toggle="tooltip" data-placement="top" title="{{ Lang::get('cachet.logout') }}">
                    <a href="{{ URL::route('logout') }}"><i class="icon ion-log-out"></i></a>
                </li>
            </ul>
        </div>
    </div>
</div>
@endif
