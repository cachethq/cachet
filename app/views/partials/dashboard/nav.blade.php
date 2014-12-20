<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu">
                <span class="sr-only">{{ Lang::get('cachet.dashboard.toggle_navigation') }}</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/dashboard"><span id="sidebar-toggle"></span> Cachet</a>
        </div>

        <div class="collapse navbar-collapse" id="menu">
            <ul class="nav navbar-nav navbar-right">
                <li><a class='' href="{{ URL::route('status-page') }}"><i class="fa fa-home"></i></a></li>
                @if(Auth::check())
                <li><a class='' href="{{ URL::route('logout') }}"><i class="fa fa-sign-out"></i></a></li>
                @endif
            </ul>
        </div>
    </div>
</nav>
