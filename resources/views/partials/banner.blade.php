@if ($app_header)
{!! $app_header !!}
@else
<div class="app-banner">
    <div class="container">
        <div class="row app-banner-padding app-banner">
            <div class="col-md-9">
                @if ($app_banner)
                <a href="{{ $app_domain }}" class="links">
                    <img src="data:{{ $app_banner_type }};base64, {{ $app_banner }}" class="img-responsive">
                </a>
                @else
                <img src="{{ asset('img/cachet-icon.png') }}" style="width: 48px;">
                <span class="app-banner--text">{{ $app_name }}</span>
                @endif
            </div>
            <div class="col-md-3 text-right">
                @if ($feeds)
                <i class="ion-social-rss"></i>
                <a href="{{ cachet_route('feed.rss') }}">RSS</a> | <a href="{{ cachet_route('feed.atom') }}">ATOM</a>
                @else
                <a href="{{ cachet_route('status-page') }}">Current Status&hellip;</a>
                @endif
            </div>
        </div>
    </div>
</div>
@endif
