@extends('layout.dashboard')

@section('content')
<div class="content-panel">
    @if(isset($subMenu))
    @include('partials.dashboard.sub-sidebar')
    @endif
    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">
                @include('partials.dashboard.notifications.'.$partial)
            </div>
        </div>
    </div>
@stop
