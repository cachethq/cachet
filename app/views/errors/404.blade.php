@extends('layout.error')

@section('content')
    <div class="middle-box text-center">
        <h1>404</h1>
        <h3 class="font-bold">Page Not Found</h3>

        <div class="error-desc">
            <p>Sorry, but the page you are looking for has not been found. Check the URL for errors and try again.</p>
            <p>
                <a href='/' class='btn btn-default btn-lg'>Home</a>
            </p>
        </div>
    </div>
@stop
