@if($bannerImage = Setting::get('app_banner'))
    <div @if(Setting::get('style_fullwidth_header'))class="app-banner"@endif>
        <div class="container">
            <div class="row app-banner-padding  @if(!Setting::get('style_fullwidth_header')) app-banner @endif">
                <div class="col-md-12 text-center">
                    <?php $bannerType = Setting::get('app_banner_type') ?>
                    @if($app_url = Setting::get('app_domain'))
                        <a href="{{ $app_url }}" class="links"><img src="data:{{ $bannerType }};base64, {{ $bannerImage}}" class="banner-image img-responsive"></a>
                    @else
                        <img src="data:{{ $bannerType }};base64, {{ $bannerImage}}" class="banner-image img-responsive">
                    @endif
                </div>
            </div>
        </div>
    </div>
@endif