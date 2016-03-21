@extends('layout.master')

@section('outer-content')
@include('partials.nav')
@stop

@section('content')
<h4>{{ formatted_date($incident->created_at) }}</h4>

<div class="timeline">
    <div class="content-wrapper">
        <div class="moment first">
            <div class="row event clearfix">
                <div class="col-sm-1">
                    <div class="status-icon status-{{ $incident->status }}" data-toggle="tooltip" title="{{ $incident->human_status }}" data-placement="left">
                        <i class="{{ $incident->icon }}"></i>
                    </div>
                </div>
                <div class="col-xs-10 col-xs-offset-2 col-sm-11 col-sm-offset-0">
                    @include('partials.incident', ['incident' => $incident, 'with_link' => false])
                </div>
            </div>
        </div>
    </div>
</div>
@stop
