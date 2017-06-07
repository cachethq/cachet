@extends('layout.master')

@section('title', $incident->name.' | '.$site_title)

@section('bodyClass', 'no-padding')

@section('outer-content')
@include('partials.nav')
@stop

@section('content')
<h1>{{ $incident->name }} <small>{{ $incident->occurred_at_formatted }}</small></h1>

<hr>

<div class="markdown-body">
    {!! $incident->formatted_message !!}
</div>

@if($incident->updates)
<div class="timeline">
    <div class="content-wrapper">
        @foreach ($incident->updates as $update)
        <div class="moment {{ $loop->first ? 'first' : null }}" id="update-{{ $update->id }}">
            <div class="row event clearfix">
                <div class="col-sm-1">
                    <div class="status-icon status-{{ $update->status }}" data-toggle="tooltip" title="{{ $update->human_status }}" data-placement="left">
                        <i class="{{ $update->icon }}"></i>
                    </div>
                </div>
                <div class="col-xs-10 col-xs-offset-2 col-sm-11 col-sm-offset-0">
                    <div class="panel panel-message incident">
                        <div class="panel-body">
                            <div class="markdown-body">
                                {!! $update->formatted_message !!}
                            </div>
                        </div>
                        <div class="panel-footer"><small>{{ trans('cachet.incidents.posted', ['timestamp' => $update->created_at_diff]) }}</small></div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endif
@stop

@section('bottom-content')
@include('partials.footer')
@stop
