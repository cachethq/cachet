@if ($app_header)
{!! $app_header !!}
@elseif ($app_banner)
<div @if($app_banner_style_full_width)class="app-banner"@endif>
    <div class="container">
        <div class="row app-banner-padding  @if(!$app_banner_style_full_width) app-banner @endif">
            <div class="col-md-12 text-center">
                @if($app_domain)
                <a href="{{ $app_domain }}" class="links"><img src="data:{{ $app_banner_type }};base64, {{ $app_banner }}" class="banner-image img-responsive"></a>
                @else
                <img src="data:{{ $app_banner_type }};base64, {{ $app_banner }}" class="banner-image img-responsive">
                @endif
            </div>
        </div>
    </div>
</div>
@else
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ cachet_route('status-page') }}">{{ $app_name }}</a>
        </div>

        <div class="navbar-right">
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="navbar-item"><a href="{{ cachet_route('feed.atom') }}">RSS</a></li>
                    <li class="navbar-item"><a href="{{ cachet_route('feed.rss') }}">Atom</a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<br>
@endif
