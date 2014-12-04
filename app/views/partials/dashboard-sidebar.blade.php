<div class="sidebar">
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
        <li><a href="{{ URL::to('dashboard') }}"><i class="fa fa-dashboard"></i> {{ Lang::get('cachet.dashboard.dashboard') }}</a></li>
        <li><a href="{{ URL::to('components') }}"><i class="fa fa-list-ul"></i> {{ Lang::get('cachet.dashboard.components') }}</a></li>
        <li class="active"><a href="{{ URL::to('incidents') }}"><i class="fa fa-exclamation-triangle"></i> {{ Lang::get('cachet.dashboard.incidents') }}</a></li>
        <li><a href="{{ URL::to('metrics') }}"><i class="fa fa-area-chart"></i> {{ Lang::get('cachet.dashboard.metrics') }}</a></li>
        <li><a href="{{ URL::to('status-page') }}"><i class="fa fa-exclamation-circle"></i> {{ Lang::get('cachet.dashboard.status_page') }}</a></li>
        <li><a href="{{ URL::to('settings') }}"><i class="fa fa-cogs"></i> {{ Lang::get('cachet.dashboard.settings') }}</a></li>
    </ul>
</div>
