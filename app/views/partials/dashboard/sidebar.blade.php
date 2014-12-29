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
    </div>
</div>
@endif
