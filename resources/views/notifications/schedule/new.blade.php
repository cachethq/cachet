@component('mail::message')
# {{ trans('notifications.schedule.new.mail.title') }}

{{ $content }}

Thanks,<br>
{{ Config::get('setting.app_name') }}

@include('notifications.partials.subscription')

@endcomponent