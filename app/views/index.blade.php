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

    @include('partials.components')

    @if(Setting::get('display_graphs'))
    @include('partials.graphs')
    @endif

    @foreach(range(0, 7) as $i => $v)
    @include('partials.incident', array('i', $i))
    @endforeach
@stop
