<nav class="navbar navbar-default" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><span id="sidebar-toggle"></span> Cachet</a>
        </div>

        <div class="collapse navbar-collapse" id="menu">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="/"><i class="fa fa-exclamation-circle"></i> Status Page</a></li>
                <li><a href="/auth/logout"><i class="fa fa-sign-out"></i> {{ Lang::get('cachet.logout') }}</a></li>
            </ul>
        </div>
    </div>
</nav>
