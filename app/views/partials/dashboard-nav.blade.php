<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu">
                <span class="sr-only">{{ Lang::get('cachet.dashboard.toggle_navigation') }}</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><span id="sidebar-toggle"></span> Cachet</a>
        </div>

        <div class="collapse navbar-collapse" id="menu">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{ URL::to('/') }}"><i class="fa fa-exclamation-circle"></i> {{ Lang::get('cachet.dashboard.status_page') }}</a></li>
                <li><a href="{{ URL::to('auth/logout') }}"><i class="fa fa-sign-out"></i> {{ Lang::get('cachet.logout') }}</a></li>
            </ul>
        </div>
    </div>
</nav>
