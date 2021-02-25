{!! Config::get('setting.mail_signature') !!}

@component('mail::subcopy')
[{{ $unsubscribeText }}]({{ $unsubscribeUrl }}) &mdash; [{{ $manageSubscriptionText }}]({{ $manageSubscriptionUrl }})
@endcomponent
