@if($app_banner)
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
@endif
