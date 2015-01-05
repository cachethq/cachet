@if(Setting::get('show_support'))
<footer class='footer'>
    <p>{{ trans('cachet.powered_by', array('app' => Setting::get('app_name'))) }}</p>
    <p><a href='/rss'><i class='ion-social-rss'></i> {{ trans('cachet.rss-feed') }}</a>&nbsp;-&nbsp;<a href='/atom'><i class='ion-social-rss'></i> {{ trans('cachet.atom-feed') }}</a></p>
    @if(Auth::check())
    <p>
        <a href="{{ route('dashboard') }}">{{ trans('dashboard.dashboard') }}</a> &ndash; <a href="{{ route('logout') }}">{{ trans('dashboard.logout') }}</a>
    </p>
    @endif
</footer>
@endif
