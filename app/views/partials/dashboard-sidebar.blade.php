<div class="sidebar active">
    <div class="profile">
        <div class="avatar pull-left">
            <a href="#">
                <img src="{{ Auth::user()->gravatar }}" alt="">
            </a>
        </div>
        <div class="profile pull-left">
            <div class="username">{{ Auth::user()->username }}</div>
        </div>
    </div>
    <ul>
        <li><a href="#"><i class="fa fa-dashboard"></i> {{ Lang::get('cachet.dashboard.dashboard') }}</a></li>
        <li><a href="#"><i class="fa fa-list-ul"></i> {{ Lang::get('cachet.dashboard.components') }}</a></li>
        <li class="active"><a href="#"><i class="fa fa-exclamation-triangle"></i> {{ Lang::get('cachet.dashboard.incidents') }}</a></li>
        <li><a href="#"><i class="fa fa-area-chart"></i> {{ Lang::get('cachet.dashboard.metrics') }}</a></li>
        <li><a href="#"><i class="fa fa-exclamation-circle"></i> {{ Lang::get('cachet.dashboard.status_page') }}</a></li>
        <li><a href="#"><i class="fa fa-cogs"></i> {{ Lang::get('cachet.dashboard.settings') }}</a></li>
    </ul>
</div>
