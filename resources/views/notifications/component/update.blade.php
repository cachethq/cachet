@component('mail::message')
# {{ trans('notifications.component.status_update.mail.greeting') }}

{{ $content }}

{{ trans('cachet.thanks') }}<br>
{{ Config::get('setting.app_name') }}

@include('notifications.partials.subscription')

@endcomponent
