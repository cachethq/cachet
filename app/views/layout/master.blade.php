<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="http://james-brooks.uk">
    <meta name="apple-mobile-web-app-capable" content="yes">

    <title>{{ isset($pageTitle) ? $pageTitle : Setting::get('app_name') }} | Cachet</title>

    <link href='http://fonts.googleapis.com/css?family=Raleway:400,700,300,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{ elixir('css/all.css') }}">

    <script src="{{ elixir('js/all.js') }}"></script>
</head>
<body class='status-page'>
    <div class='container'>
    @yield('content')
    </div>

    @include('partials.support-link')
</body>
</html>
