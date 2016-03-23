@extends('layout.master')

@section('bodyClass', 'no-padding')

@section('outer-content')
@include('partials.nav')
@stop

@section('content')
<h1><i class="{{ $incident->icon }}"></i> {{ $incident->name }} <small>{{ formatted_date($incident->created_at) }}</small></h1>

{!! $incident->formattedMessage !!}

@if($incident->updates)
<div class="timeline">
    <div class="content-wrapper">
        @foreach ($incident->updates as $index => $update)
        <div class="moment {{ $index === 0 ? 'first' : null }}">
            <div class="row event clearfix">
                <div class="col-sm-1">
                    <div class="status-icon status-{{ $update->status }}" data-toggle="tooltip" title="{{ $update->human_status }}" data-placement="left">
                        <i class="{{ $update->icon }}"></i>
                    </div>
                </div>
                <div class="col-xs-10 col-xs-offset-2 col-sm-11 col-sm-offset-0">
                    {!! $update->formattedMessage !!}
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endif
@stop
