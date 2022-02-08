@component('mail::message')
# {{ trans('notifications.schedule.new.mail.title') }}

{{ $content }}

<!-- @lang('Cordialement,')<br> -->
@lang('utils.message.email.regards')<br>
{{ Config::get('setting.app_name') }}

@include('notifications.partials.subscription')

@endcomponent
