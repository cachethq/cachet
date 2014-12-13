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
    @include('partials.dashboard.nav')
    <div class="wrapper">
        @include('partials.dashboard.sidebar')
        <div class="content">
        @yield('content')
        </div>
    </div>
</body>
</html>
