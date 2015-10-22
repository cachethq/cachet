@if($about_app)
<div class="about-app">
    <h1>{{ trans('cachet.about_this_site') }}</h1>
    <p>{!! $about_app !!}</p>
</div>
@endif

