<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-5">
                @if(Setting::get('show_support'))
                <p>{!! trans('cachet.powered_by', ['app' => Setting::get('app_name')]) !!}</p>
                @endif
            </div>
            <div class="col-sm-7 text-right">
                <ul class="list-inline">
                    @if($current_user || Setting::get('dashboard_login_link'))
                    <li>
                        <a class="btn btn-link" href="/dashboard"><i class="ion-levels"></i> {{ trans('dashboard.dashboard') }}</a>
                    </li>
                    @endif
                    @if($current_user)
                    <li>
                        <a class="btn btn-link" href="/auth/logout"><i class="ion-android-exit"></i> {{ trans('dashboard.logout') }}</a>
                    </li>
                    @endif
                    <li>
                        <a class="btn btn-link" href="{{ route('feed.rss') }}"><i class="ion-social-rss"></i> {{ trans('cachet.rss-feed') }}</a>
                    </li>
                    <li>
                        <a class="btn btn-link" href="{{ route('feed.atom') }}"><i class="ion-social-rss"></i> {{ trans('cachet.atom-feed') }}</a>
                    </li>
                    @if($subscribers_enabled)
                    <li>
                        <a class="btn btn-success" href="{{ route('subscribe.subscribe') }}"><i class="ion-email"></i> {{ trans('cachet.subscriber.button') }}</a>
                    </li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
</footer>

@include("partials.analytics")
