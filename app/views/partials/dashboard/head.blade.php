<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes">

    <link rel="icon" type="image/png" href="{{ URL::to('img/favicon.ico') }}">
    <link rel="shortcut icon" href="{{ URL::to('img/favicon.png') }}" type="image/x-icon" />

    <link rel="apple-touch-icon" href="{{ URL::to('img/apple-touch-icon.png') }}" />
    <link rel="apple-touch-icon" sizes="57x57" href="{{ URL::to('img/apple-touch-icon-57x57.png') }}" />
    <link rel="apple-touch-icon" sizes="72x72" href="{{ URL::to('img/apple-touch-icon-72x72.png') }}" />
    <link rel="apple-touch-icon" sizes="114x114" href="{{ URL::to('img/apple-touch-icon-114x114.png') }}" />
    <link rel="apple-touch-icon" sizes="120x120" href="{{ URL::to('img/apple-touch-icon-120x120.png') }}" />
    <link rel="apple-touch-icon" sizes="144x144" href="{{ URL::to('img/apple-touch-icon-144x144.png') }}" />
    <link rel="apple-touch-icon" sizes="152x152" href="{{ URL::to('img/apple-touch-icon-152x152.png') }}" />

    <title>{{ isset($pageTitle) ? $pageTitle : Setting::get('app_name') }} | Cachet</title>

    <link href='//fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{ elixir('css/all.css') }}">
    <script src="{{ elixir('js/all.js') }}"></script>

</head>
