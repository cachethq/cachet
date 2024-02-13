<x-cachet::cachet>
    <x-cachet::header />

    <div class="mx-auto max-w-5xl px-4 py-10 sm:px-6 lg:px-8">
        <x-cachet::about />

        <div class="mt-6 space-y-10">
            <x-cachet::status-bar />

            @foreach($componentGroups as $componentGroup)
            <x-cachet::component-group :component-group="$componentGroup"/>
            @endforeach

            @if($schedules->isNotEmpty())
            <x-cachet::schedules :schedules="$schedules" />
            @endif

            <x-cachet::incidents />
        </div>
    </div>

    <x-cachet::footer />
</x-cachet::cachet>
