@if($appFooter)
{!! $appFooter !!}
@else
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                @if($showSupport)
                <p>
                    {!! trans('cachet.powered_by') !!}
                    @if($showTimezone)
                    {{ trans('cachet.timezone', ['timezone' => $timezone]) }}
                    @endif
                </p>
                @endif
            </div>
            <div class="col-sm-8">
                <ul class="list-inline">
                    <li>
                        <a class="btn btn-link" href="#">Calendar Refresh (soon)</a>
                    </li>
                    <li>
                        <a class="btn btn-link" href="https://michelin.service-now.com/sp?id=sc_cat_item&sys_id=55238392db18d814ec426055ca961970&referrer=popular_ite">form to access splunk</a>
                    </li>
                    @if($currentUser || $dashboardLink)
                    <li>
                        <a class="btn btn-link" href="{{ cachet_route('dashboard') }}">{{ trans('dashboard.dashboard') }}</a>
                    </li>
                    @endif
                    @if($currentUser)
                    <li>
                        <a class="btn btn-link" href="{{ cachet_route('auth.logout') }}">{{ trans('dashboard.logout') }}</a>
                    </li>
                    @endif
                    @if($enableSubscribers)
                    <li>
                        <a class="btn btn-success btn-outline" href="{{ cachet_route('subscribe') }}">{{ trans('cachet.subscriber.button') }}</a>
                    </li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
</footer>
@endif

@include("partials.analytics")
