@component('mail::subcopy')
[{{ $unsubscribeText }}]({{ $unsubscribeUrl }}) &mdash; [{{ $manageSubscriptionText }}]({{ $manageSubscriptionUrl }})
<!-- &mdash; [{{ $manageSubscriptionText }}]({{ URL::signedRoute(cachet_route_generator('subscribe.manage'), ['code' => $subscriber->verify_code]) }}) -->
@endcomponent
