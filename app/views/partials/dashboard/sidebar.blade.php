@if(Auth::check())
<div class="sidebar">
    <div class='sidebar-inner'>
        <div class="profile">
            <div class="avatar pull-left">
                <a href="{{ URL::to('settings') }}">
                    <img src="{{ Auth::user()->gravatar }}" alt="">
                </a>
            </div>
            <div class="profile pull-left">
                <div class="username">{{ Auth::user()->username }}</div>
            </div>
        </div>
        <ul>
            <li class="{{ Request::is('dashboard') ? 'active' : '' }}">
                <a href="{{ URL::route('dashboard') }}">
                    <i class="fa fa-dashboard"></i> {{ Lang::get('cachet.dashboard.dashboard') }}
                </a>
            </li>
            <li class="{{ Request::is('dashboard/incidents') ? 'active' : '' }}">
                <a href="{{ URL::route('dashboard.incidents') }}">
                    <i class="fa fa-exclamation-triangle"></i> {{ Lang::get('cachet.dashboard.incidents') }}
                </a>
            </li>
            <li class="{{ Request::is('dashboard/incidents/add') ? 'active' : '' }} sub-nav-item">
                <a href="{{ URL::route('dashboard.incidents.add') }}">
                    <i class="fa fa-plus"></i> {{ Lang::get('cachet.dashboard.incident-add') }}
                </a>
            </li>
            <li class="sub-nav-item">
                <a href="#">
                    <i class="fa fa-plus"></i> {{ Lang::get('cachet.dashboard.incident-create-template') }}
                </a>
            </li>
            <li class="{{ Request::is('dashboard/components') ? 'active' : '' }}">
                <a href="{{ URL::route('dashboard.components') }}">
                    <i class="fa fa-list-ul"></i> {{ Lang::get('cachet.dashboard.components') }}
                </a>
            </li>
            <li class="{{ Request::is('dashboard/components/add') ? 'active' : '' }} sub-nav-item">
                <a href="{{ URL::route('dashboard.components.add') }}">
                    <i class="fa fa-plus"></i> {{ Lang::get('cachet.dashboard.component-add') }}
                </a>
            </li>
            <li class="{{ Request::is('dashboard/metrics') ? 'active' : '' }}">
                <a href="{{ URL::route('dashboard.metrics') }}">
                    <i class="fa fa-area-chart"></i> {{ Lang::get('cachet.dashboard.metrics') }}
                </a>
            </li>
            <li class="sub-nav-item">
                <a href="#">
                    <i class="fa fa-plus"></i> {{ Lang::get('cachet.dashboard.metrics-add') }}
                </a>
            </li>
            <li class="{{ Request::is('dashboard/notifications') ? 'active' : '' }}">
                <a href="{{ URL::route('dashboard.notifications') }}">
                    <i class="fa fa-envelope"></i> {{ Lang::get('cachet.dashboard.notifications') }}
                </a>
            </li>
            <li class="{{ Request::is('dashboard/settings') ? 'active' : '' }}">
                <a href="{{ URL::route('dashboard.settings') }}">
                    <i class="fa fa-cogs"></i> {{ Lang::get('cachet.dashboard.settings') }}
                </a>
            </li>
        </ul>
    </div>
</div>
@endif
