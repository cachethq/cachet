@if($loggedUser)
<div class="sidebar">
    <div class="sidebar-inner">
        <div class="profile">
            <div class="row">
                <div class="col-xs-12">
                    <div class="dropdown">
                        <a class="dropdown-toggle" href="#" id="profile-dropdown" data-toggle="dropdown" aria-expanded="true">
                            <span class="avatar"><img src="{{ $loggedUser->gravatar }}"></span> <span class="username">{{ $loggedUser->username }}</span>
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" role="menu" aria-labelledby="profile-dropdown">
                            <li role="presentation">
                                <a role="menuitem" tabindex="-1" href="{{ url('dashboard/user') }}">{{ trans('dashboard.team.profile') }}</a>
                            </li>
                            <li role="presentation">
                                <a role="menuitem" tabindex="-1" href="{{ route('logout') }}">{{ trans('dashboard.logout') }}</a>
                            </li>
                        </ul>
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
            <li {{ set_active('dashboard/incidents*') }} {{ set_active('dashboard/schedule*') }}>
                <a href="{{ route('dashboard.incidents') }}">
                    <i class="icon ion-android-alert"></i>
                    <span>{{ trans('dashboard.incidents.incidents') }}</span>
                </a>
            </li>
            <li {{ set_active('dashboard/templates*') }}>
                <a href="{{ route('dashboard.templates') }}">
                    <i class="icons ion-document-text"></i>
                    <span>{{ trans('dashboard.incidents.incident-templates') }}</span>
                </a>
            </li>
            <li {{ set_active('dashboard/components*') }}>
                <a href="{{ route('dashboard.components') }}">
                    <i class="icons ion-outlet"></i>
                    <span>{{ trans('dashboard.components.components') }}</span>
                </a>
            </li>
            <li {{ set_active('dashboard/team*') }}>
                <a href="{{ route('dashboard.team') }}">
                    <i class="icons ion-ios-people"></i>
                    <span>{{ trans('dashboard.team.team') }}</span>
                </a>
            </li>
            <li {{ set_active('dashboard/metrics*') }}>
                <a href="{{ route('dashboard.metrics') }}">
                    <i class="icon ion-stats-bars"></i>
                    <span>{{ trans('dashboard.metrics.metrics') }}</span>
                </a>
            </li>
            {{-- <li {{ set_active('dashboard/notifications') }}>
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
                <img width="166" src="/img/cachet-sidebar-logo.png" alt="Cachet">
            </div>
            <br>
            <ul>
                <li data-toggle="tooltip" data-placement="top" title="{{ trans('dashboard.help') }}">
                    <a href="https://docs.cachethq.io" target="_blank"><i class="icon ion-help"></i></a>
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
