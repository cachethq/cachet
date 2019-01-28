@component('mail::subcopy')
@if(Config::get("setting.privacy_statement"))[{{ $privacyText }}]({{ $privacyUrl }}) &mdash; @endif @if(Config::get("setting.imprint"))[{{ $imprintText }}]({{ $imprintUrl }}) &mdash; @endif[{{ $unsubscribeText }}]({{ $unsubscribeUrl }}) &mdash; [{{ $manageSubscriptionText }}]({{ $manageSubscriptionUrl }})
@endcomponent
