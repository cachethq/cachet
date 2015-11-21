@if($app_banner = $app_banner)
<div @if(Setting::get('style_fullwidth_header'))class="app-banner"@endif>
    <div class="container">
        <div class="row app-banner-padding  @if(!Setting::get('style_fullwidth_header')) app-banner @endif">
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
