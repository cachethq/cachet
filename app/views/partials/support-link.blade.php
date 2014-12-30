@if(Setting::get('show_support'))
<footer class='footer'>
    <p>{{ Lang::get('cachet.powered_by', array('app' => Setting::get('app_name'))) }}</p>
    <p><a href='/rss'><i class='ion-social-rss'></i> RSS Feed</a></p>
    @if(Auth::check())
    <p>
	    <a href="{{ URL::route('dashboard') }}">{{ Lang::get('cachet.dashboard.dashboard') }}</a> &ndash; <a href="{{ URL::route('logout') }}">{{ Lang::get('cachet.logout') }}</a>
    </p>
    @endif
</footer>
@endif
