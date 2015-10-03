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
    @include("partials.javascript-translations")
</body>
</html>
