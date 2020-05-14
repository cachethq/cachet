@component('mail::subcopy')
[{{ $unsubscribeText }}]({{ $unsubscribeUrl }})
@if($manageSubscriptionUrl)
&mdash; [{{ $manageSubscriptionText }}]({{ $manageSubscriptionUrl }})
@endif
@endcomponent
