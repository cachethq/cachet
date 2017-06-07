<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="env" content="{{ app('env') }}">
    <meta name="token" content="{{ csrf_token() }}">

    <link rel="alternate" type="application/atom+xml" href="{{ cachet_route('feed.atom') }}" title="{{ $site_title }} - Atom Feed">
    <link rel="alternate" type="application/rss+xml" href="{{ cachet_route('feed.rss') }}" title="{{ $site_title }} - RSS Feed">

    <!-- Mobile friendliness -->
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="description" content="{{ trans('cachet.description', ['app' => $app_name]) }}">

    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ $site_title }}">
    <meta property="og:image" content="/img/favicon.png">
    <meta property="og:description" content="{{ trans('cachet.description', ['app' => $app_name]) }}">

    <!-- Mobile IE allows us to activate ClearType technology for smoothing fonts for easy reading -->
    <meta http-equiv="cleartype" content="on">

    <meta name="msapplication-TileColor" content="{{ $theme_greens }}" />
    <meta name="msapplication-TileImage" content="{{ asset('/img/favicon.png') }}" />

    @if (isset($favicon))
    <link rel="icon" type="image/png" href="/img/{{ $favicon }}.ico">
    <link rel="shortcut icon" href="/img/{{ $favicon }}.png" type="image/x-icon">
    @else
    <link rel="icon" type="image/png" href="/img/favicon.ico">
    <link rel="shortcut icon" href="/img/favicon.png" type="image/x-icon">
    @endif

    <link rel="apple-touch-icon" href="{{ asset('/img/apple-touch-icon.png') }}">
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('/img/apple-touch-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('/img/apple-touch-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('/img/apple-touch-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('/img/apple-touch-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('/img/apple-touch-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('/img/apple-touch-icon-152x152.png') }}">

    <title>@yield('title', $site_title)</title>

    @if($enable_external_dependencies)
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&subset={{ $font_subset }}" rel="stylesheet" type="text/css">
    @endif
    <link rel="stylesheet" href="{{ elixir('dist/css/app.css') }}">

    @include('partials.stylesheet')

    @include('partials.crowdin')

    @if($app_stylesheet)
    <style type="text/css">
    {!! $app_stylesheet !!}
    </style>
    @endif

    <script type="text/javascript">
        var Global = {};
        Global.locale = '{{ $app_locale }}';
    </script>
    <script src="{{ elixir('dist/js/all.js') }}"></script>
</head>
<body class="status-page @yield('bodyClass')">
    @yield('outer-content')

    @include('partials.banner')

    <div class="container">
        @yield('content')
    </div>

    @yield('bottom-content')
</body>
</html>
