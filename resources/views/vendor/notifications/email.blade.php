@component('mail::message')
{{-- Greeting --}}
@if (! empty($greeting))
# {{ $greeting }}
@else
@if ($level === 'error')
# @lang('Whoops!')
@else
# @lang('Hello!')
@endif
@endif

{{-- Intro Lines --}}
@foreach ($introLines as $line)
{{ $line }}

@endforeach

{{-- Action Button --}}
@isset($actionText)
<?php
    switch ($level) {
        case 'success':
        case 'error':
            $color = $level;
            break;
        default:
            $color = 'primary';
    }
?>
@component('mail::button', ['url' => $actionUrl, 'color' => $color])
{{ $actionText }}
@endcomponent
@endisset

{{-- Outro Lines --}}
@foreach ($outroLines as $line)
{{ $line }}

@endforeach

{{-- Salutation --}}
@if (! empty($salutation))
{{ $salutation }}
@else
{{ trans('notifications.common.salutation') }}<br>{{ setting('app_name', config('app.name')) }}
@endif

{!! Config::get('setting.mail_signature') !!}

{{-- Subcopy --}}
@isset($actionText)
@component('mail::subcopy')
{{ trans('notifications.common.alternative_link', [
        'actionText' => $actionText,
        'actionURL' => $actionUrl,
    ]) }}
@endcomponent
@endisset
@endcomponent
