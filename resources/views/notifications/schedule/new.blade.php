@component('mail::message')
# {{ trans('notifications.schedule.new.mail.title') }}

{{ $content }}

{{ trans('notifications.schedule.new.mail.thanks') }}<br>
{{ Config::get('setting.app_name') }}

@include('notifications.partials.subscription')

@endcomponent
