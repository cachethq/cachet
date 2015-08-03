<footer>
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                @if(Setting::get('show_support'))
                <p>{!! trans('cachet.powered_by', ['app' => Setting::get('app_name')]) !!}</p>
                @endif
            </div>
            <div class="col-sm-6">
                <div class="icons">
                    @if($current_user || Setting::get('dashboard_login_link'))
                    <a href="/dashboard" class="icon-link"><i class="ion-levels"></i> {{ trans('dashboard.dashboard') }}</a>
                    @endif
                    @if($current_user)
                    <a href="/auth/logout" class="icon-link"><i class="ion-android-exit"></i> {{ trans('dashboard.logout') }}</a>
                    @endif
                    <a href="/rss" class="icon-link rss"><i class="ion-social-rss"></i> {{ trans('cachet.rss-feed') }}</a>
                    <a href="/atom" class="icon-link rss"><i class="ion-social-rss"></i> {{ trans('cachet.atom-feed') }}</a>
                </div>
            </div>
        </div>
    </div>
</footer>

@include("partials.analytics")
