@extends('layout.master')

@section('content')
    @if($bannerImage = Setting::get('app_banner'))
    <div class='row'>
        <div class='col-md-12 text-center'>
            <?php $bannerType = Setting::get('app_banner_type') ?>
            <img src='data:{{ $bannerType }};base64, {{ $bannerImage}}' class='banner-image' />
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

    <h1>{{ trans('cachet.past_incidents') }}</h1>
    @foreach($allIncidents as $incidents)
        @include('partials.incidents', $incidents)
    @endforeach
@stop
