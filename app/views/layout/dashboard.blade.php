<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="http://james-brooks.uk">
    <meta name="apple-mobile-web-app-capable" content="yes">

    <title>{{ isset($pageTitle) ? $pageTitle : Setting::get('app_name') }} | Cachet</title>

    <link rel="stylesheet" href="{{ elixir('css/all.css') }}">
    <script src="{{ elixir('js/all.js') }}"></script>
</head>
<body class="dashboard">
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
            <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
            <li><a href="#"><i class="fa fa-list-ul"></i> Components</a></li>
            <li class="active"><a href="#"><i class="fa fa-exclamation-triangle"></i> Incidents</a></li>
            <li><a href="#"><i class="fa fa-area-chart"></i> Metrics</a></li>
            <li><a href="#"><i class="fa fa-exclamation-circle"></i> Status Page</a></li>
            <li><a href="#"><i class="fa fa-cogs"></i> Settings</a></li>
        </ul>
    </div>
</body>
</html>
