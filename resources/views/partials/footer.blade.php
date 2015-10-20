<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                @if(Setting::get('show_support'))
                <p>{!! trans('cachet.powered_by', ['app' => Setting::get('app_name')]) !!}<br>{{ Setting::get('app_timezone') }}</p>
                @endif
            </div>
            <div class="col-sm-6">
                <div class="btn-group">
                    @if($current_user || Setting::get('dashboard_login_link'))
                    <a href="/dashboard" class="btn btn-info"><i class="ion-levels"></i> {{ trans('dashboard.dashboard') }}</a>
                    @endif
                    @if($current_user)
                    <a href="/auth/logout" class="btn btn-info"><i class="ion-android-exit"></i> {{ trans('dashboard.logout') }}</a>
                    @endif
                </div>
                <div class="btn-group">
                    <a href="{{ route('feed.rss') }}" class="btn btn-warning rss"><i class="ion-social-rss"></i> {{ trans('cachet.rss-feed') }}</a>
                    <a href="{{ route('feed.atom') }}" class="btn btn-warning rss"><i class="ion-social-rss"></i> {{ trans('cachet.atom-feed') }}</a>
                </div>
                @if($subscribers_enabled)
                <a class="btn btn-success" href="{{ route('subscribe.subscribe') }}"><i class="ion-email"></i> {{ trans('cachet.subscriber.button') }}</a>
                @endif
            </div>
        </div>
    </div>
</footer>

@include("partials.analytics")
