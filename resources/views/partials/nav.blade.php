<div class="navbar navbar-custom" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="{{ cachet_route('status-page') }}"><span>{{ $appName }}</span></a>
        </div>

        <div class="navbar-collapse collapse" id="navbar-menu">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{ cachet_route('status-page') }}">{{ trans('cachet.home') }}</a></li>
                @if($currentUser)
                <li class="dropdown">
                    <a href="#" data-toggle="dropdown">
                        <i class="icon ion-person"></i> {{ $currentUser->username }}
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu arrow">
                        <li><a href="{{ cachet_route('dashboard.incidents.create') }}">{{ trans('dashboard.incidents.add.title') }}</a></li>
                        <li><a href="{{ cachet_route('dashboard') }}">{{ trans('dashboard.dashboard') }}</a></li>
                        <li><a href="{{ cachet_route('auth.logout') }}">{{ trans('dashboard.logout') }}</a></li>
                    </ul>
                </li>
                @elseif($dashboardLink)
                <li><a href="{{ cachet_route('dashboard') }}">{{ trans('dashboard.dashboard') }}</a></li>
                @endif
            </ul>
        </div>
    </div>
</div>
