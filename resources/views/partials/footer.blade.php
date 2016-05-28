@if($app_footer)
{!! $app_footer !!}
@else
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-5">
                @if($show_support)
                <p>{!! trans('cachet.powered_by') !!}</p>
                @endif
            </div>
            <div class="col-sm-7">
                <ul class="list-inline">
                    @if($current_user || Config::get('setting.dashboard_login_link'))
                    <li>
                        <a class="btn btn-link" href="/dashboard">{{ trans('dashboard.dashboard') }}</a>
                    </li>
                    @endif
                    @if($current_user)
                    <li>
                        <a class="btn btn-link" href="/auth/logout">{{ trans('dashboard.logout') }}</a>
                    </li>
                    @endif
                    <li>
                        <a class="btn btn-link" href="{{ route('feed.rss') }}">{{ trans('cachet.rss-feed') }}</a>
                    </li>
                    <li>
                        <a class="btn btn-link" href="{{ route('feed.atom') }}">{{ trans('cachet.atom-feed') }}</a>
                    </li>
                    @if(subscribers_enabled())
                    <li>
                        <a class="btn btn-success btn-outline" href="{{ route('subscribe.subscribe') }}">{{ trans('cachet.subscriber.button') }}</a>
                    </li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
</footer>
@endif

@include("partials.analytics")
