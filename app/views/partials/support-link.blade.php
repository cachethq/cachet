@if(Setting::get('show_support'))
<footer class='footer'>
    <p>{{ trans('cachet.powered_by', array('app' => Setting::get('app_name'))) }}</p>
    <p><a href='/rss'><i class='ion-social-rss'></i> RSS Feed</a></p>
    @if(Auth::check())
    <p>
        <a href="{{ route('dashboard') }}">{{ trans('cachet.dashboard.dashboard') }}</a> &ndash; <a href="{{ route('logout') }}">{{ trans('cachet.logout') }}</a>
    </p>
    @endif
</footer>
@endif
