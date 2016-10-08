<div class="navbar navbar-custom" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <a class="navbar-brand" href="/"><span>{{ $app_name }}</span></a>
        </div>

        <div class="navbar-collapse collapse" id="navbar-menu">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="/">{{ trans('cachet.home') }}</a></li>
                @if($current_user)
                <li class="dropdown">
                    <a href="#" data-toggle="dropdown">
                        <i class="icon ion-person"></i> {{ $current_user->username }}
                        <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu arrow">
                        <li><a href="{{ route('dashboard.incidents.add') }}">{{ trans('dashboard.incidents.add.title') }}</a></li>
                        <li><a href="/dashboard">{{ trans('dashboard.dashboard') }}</a></li>
                        <li><a href="{{ route('auth.logout') }}">{{ trans('dashboard.logout') }}</a></li>
                    </ul>
                </li>
                @elseif($dashboard_link)
                <li><a href="/dashboard">{{ trans('dashboard.dashboard') }}</a></li>
                @endif
            </ul>
        </div>
    </div>
</div>
