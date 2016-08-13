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
            <a class="btn btn-block btn-info" href="{{ route('dashboard.incidents.add') }}">
                <i class="ion ion-android-checkmark-circle visible-sm"></i>
                <span class="hidden-sm">{{ trans('dashboard.incidents.add.title') }}</span>
            </a>
        </div>
        <ul>
        @foreach($tabs as $tab)
            <li {!! set_active($tab['active']) !!}>
                <a href="{{ $tab['url'] }}">
                @if($tab['icon'])
                    <i class="{{ $tab['icon'] }}"></i>
                @endif
                    <span>{{ $tab['title'] }}</span>
                @if(!empty($tab['label']))
                    <span class="label {{ $tab['label']['class'] }}">{{ $tab['label']['text'] }}</span>
                @endif
                </a>
            </li>
        @endforeach
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
