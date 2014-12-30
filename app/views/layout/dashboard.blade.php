<!DOCTYPE html>
<html>
@include('partials.dashboard.head')

<body class="dashboard">
    <div class="wrapper">
        @include('partials.dashboard.sidebar')
        <div class="content">
            @yield('content')
        </div>
    </div>
</body>
</html>
