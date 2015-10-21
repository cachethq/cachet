@if($bannerImage = Setting::get('app_banner'))
<div class="row app-banner">
    <div class="col-md-12 text-center">
        <?php $bannerType = Setting::get('app_banner_type') ?>
        @if($app_url = Setting::get('app_domain'))
        <a href="{{ $app_url }}" class="links"><img src="data:{{ $bannerType }};base64, {{ $bannerImage}}" class="banner-image img-responsive"></a>
        @else
        <img src="data:{{ $bannerType }};base64, {{ $bannerImage}}" class="banner-image img-responsive">
        @endif
    </div>
</div>
@endif

@if($about_app)
<div class="about-app">
    <h1>{{ trans('cachet.about_this_site') }}</h1>
    <p>{!! $about_app !!}</p>
</div>
@endif

