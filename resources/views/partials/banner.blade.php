@if($appHeader)
{!! $appHeader !!}
@else
@if($appBanner)
<div @if($appBannerStyleFullWidth)class="app-banner"@endif>
    <div class="container">
        <div class="row app-banner-padding  @if(!$appBannerStyleFullWidth) app-banner @endif">
            <div class="col-md-12 text-center">
                @if($appDomain)
                <a href="{{ $appDomain }}" class="links"><img src="data:{{ $appBannerType }};base64, {{ $appBanner }}" class="banner-image img-responsive"></a>
                @else
                <img src="data:{{ $appBannerType }};base64, {{ $appBanner }}" class="banner-image img-responsive">
                @endif
            </div>
        </div>
    </div>
</div>
@endif
@endif
