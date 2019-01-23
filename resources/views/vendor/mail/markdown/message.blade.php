@component('mail::layout')
    {{-- Header --}}
    @slot('header')
        @component('mail::header', ['url' => config('app.url')])
            {{ setting('app_name', config('app.name')) }}
        @endcomponent
    @endslot

    {{-- Body --}}
    {{ $slot }}

    {{-- Subcopy --}}
    @isset($subcopy)
        @slot('subcopy')
            @component('mail::subcopy')
                {{ $subcopy }}
            @endcomponent
        @endslot
    @endisset

    {{-- Footer --}}
    @slot('footer')
        @component('mail::footer')
            © {{ date('Y') }} {{ setting('app_name', config('app.name')) }}. @lang('All rights reserved.') [{{ trans('forms.settings.privacy.privacy-statement') }}]({{ cachet_route('privacy') }}) &mdash; [{{ trans('forms.settings.privacy.imprint') }}]({{ cachet_route('imprint') }})
        @endcomponent
    @endslot
@endcomponent
