@extends('layout.master')

@section('content')
    @if($bannerImage = Setting::get('app_banner'))
    <div class='row app-banner'>
        <div class='col-md-12 text-center'>
            <?php $bannerType = Setting::get('app_banner_type') ?>
            <img src='data:{{ $bannerType }};base64, {{ $bannerImage}}' class='banner-image img-responsive' />
        </div>
    </div>
    @endif

    <div class='alert alert-{{ $systemStatus }}'>{{ $systemMessage }}</div>

    @if($aboutApp)
    <div class='about-app'>
        <h1>{{ trans('cachet.about_this_site') }}</h1>
        <p>{{ $aboutApp }}</p>
    </div>
    @endif

    @include('partials.components')

    {{-- @if(Setting::get('display_graphs'))
        @include('partials.graphs')
    @endif --}}

    <h1>{{ trans('cachet.incidents.past') }}</h1>
    @foreach($allIncidents as $incidents)
        @include('partials.incidents', $incidents)
    @endforeach
    <hr/>

    <nav>
        <ul class="pager">
            <li class="previous">
                <a href="{{ route('status-page') }}?start_date={{ $previousDate }}">
                    <span aria-hidden="true">&larr;</span> {{ trans('cachet.incidents.previous_week') }}
                </a>
            </li>
            <li class="next @if( ! $canPageForward) disabled @endif">
                <a @if($canPageForward) href="{{ route('status-page') }}?start_date={{ $nextDate }}" @endif>
                    {{ trans('cachet.incidents.next_week') }} <span aria-hidden="true">&rarr;</span>
                </a>
            </li>
        </ul>
    </nav>
@stop
