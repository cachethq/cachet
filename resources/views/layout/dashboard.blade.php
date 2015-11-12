<!DOCTYPE html>
<html>
@include('dashboard.partials.head')

<body class="dashboard">
    <div class="wrapper">
        @include('dashboard.partials.sidebar')
        <div class="page-content">
            @yield('content')
        </div>
    </div>
    <script type="text/javascript">
        var Global = {};
        Global.locale = '{{ Setting::get('app_locale') }}';
    </script>
    @yield('js')
    <script src="{{ elixir('dist/js/all.js') }}"></script>
</body>
</html>
