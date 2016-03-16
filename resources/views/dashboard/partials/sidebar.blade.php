<div class="sidebar">
    <div class="sidebar-inner">
        <div class="profile">
            <a href="{{ url('dashboard/user') }}">
                <span class="avatar"><img src="{{ $current_user->gravatar }}"></span>
            </a>
            <a href="{{ url('dashboard/user') }}">
                <h4 class="username">{{ $current_user->username }}</h4>
            </a>
        </div>
        <div class="clearfix"></div>
        <div class="quick-add-incident">
            <a class="btn btn-block btn-primary uppercase" href="{{ route('dashboard.incidents.add') }}">
                <i class="ion ion-android-checkmark-circle visible-sm"></i>
                <span class="hidden-sm">{{ trans('dashboard.incidents.add.title') }}</span>
            </a>
        </div>
        <ul>
            <li {!! set_active('dashboard') !!}>
                <a href="{{ route('dashboard.index') }}">
                    <i class="ion ion-speedometer"></i>
                    <span>{{ trans('dashboard.dashboard') }}</span>
                </a>
            </li>
            <li {!! set_active('dashboard/incidents*') !!} {!! set_active('dashboard/schedule*') !!}>
                <a href="{{ route('dashboard.incidents.index') }}">
                    <i class="ion ion-ios-information-outline"></i>
                    <span>{{ trans('dashboard.incidents.incidents') }}</span>
                    <span class="label label-info">{{ $incident_count }}</span>
                </a>
            </li>
            <li {!! set_active('dashboard/templates*') !!}>
                <a href="{{ route('dashboard.templates.index') }}">
                    <i class="ion ion-ios-paper-outline"></i>
                    <span>{{ trans('dashboard.incidents.incident-templates') }}</span>
                    <span class="label label-info">{{ $incident_template_count }}</span>
                </a>
            </li>
            <li {!! set_active('dashboard/components*') !!}>
                <a href="{{ route('dashboard.components.index') }}">
                    <i class="ion ion-ios-browsers-outline"></i>
                    <span>{{ trans('dashboard.components.components') }}</span>
                    <span class="label label-info">{{ $component_count }}</span>
                </a>
            </li>
            <li {!! set_active('dashboard/metrics*') !!}>
                <a href="{{ route('dashboard.metrics.index') }}">
                    <i class="ion ion-ios-pie-outline"></i>
                    <span>{{ trans('dashboard.metrics.metrics') }}</span>
                </a>
            </li>
            <li {!! set_active('dashboard/subscribers*') !!}>
                <a href="{{ route('dashboard.subscribers.index') }}">
                    <i class="ion ion-ios-email-outline"></i>
                    <span>{{ trans('dashboard.subscribers.subscribers') }}</span>
                    <span class="label label-info">{{ $subscriber_count }}</span>
                </a>
            </li>
            <li {!! set_active('dashboard/team*') !!}>
                <a href="{{ route('dashboard.team.index') }}">
                    <i class="ion ion-ios-people-outline"></i>
                    <span>{{ trans('dashboard.team.team') }}</span>
                </a>
            </li>
            <li {!! set_active('dashboard/settings*') !!}>
                <a href="{{ route('dashboard.settings.setup') }}">
                    <i class="ion ion-ios-gear-outline"></i>
                    <span>
                        {{ trans('dashboard.settings.settings') }}
                    </span>
                </a>
            </li>
        </ul>
        <div class="bottom-menu-sidebar">
            <ul>
                <li data-toggle="tooltip" data-placement="top" title="{{ trans('dashboard.help') }}">
                    <a href="https://docs.cachethq.io" target="_blank"><i class="ion ion-help"></i></a>
                </li>
                <li data-toggle="tooltip" data-placement="top" title="{{ trans('dashboard.status_page') }}">
                    <a href="{{ route('status-page') }}"><i class="ion ion-monitor"></i></a>
                </li>
                <li data-toggle="tooltip" data-placement="top" title="{{ trans('dashboard.logout') }}">
                    <a href="{{ route('auth.logout') }}"><i class="ion ion-log-out"></i></a>
                </li>
            </ul>
        </div>
    </div>
</div>
