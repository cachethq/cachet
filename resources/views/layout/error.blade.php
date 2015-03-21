<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link rel="alternate" type="application/atom+xml" href="/atom" title="{{ isset($pageTitle) ?: Setting::get('app_name') }} Status - Atom Feed">
    <link rel="alternate" type="application/rss+xml" href="/rss" title="{{ isset($pageTitle) ?: Setting::get('app_name') }} Status - RSS Feed">

    <link rel="icon" type="image/png" href="/favicon.ico">
    <link rel="shortcut icon" href="/favicon.png" type="image/x-icon">

    <!-- Mobile friendliness -->
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">

    <!-- Mobile IE allows us to activate ClearType technology for smoothing fonts for easy reading -->
    <meta http-equiv="cleartype" content="on">

    <title>{{ isset($pageTitle) ?: Setting::get('app_name') }} Status</title>

    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="{{ elixir('dist/css/all.css') }}">

    @include('partials.stylesheet')

    @if($stylesheet = Setting::get('stylesheet'))
    <style type="text/css">
    {{ $stylesheet }}
    </style>
    @endif

    @include('partials.crowdin')

    <script src="{{ elixir('dist/js/all.js') }}"></script>
</head>
<body class="error-page">
    <div class="container">
    @yield('content')
    </div>
</body>
</html>
