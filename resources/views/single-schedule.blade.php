@extends('layout.master')

@section('bodyClass', 'no-padding')

@section('content')
<h1>
    <i class="{{ $schedule->latest_icon }}"></i>
    {{ $schedule->name }} <small>{{ formatted_date($schedule->created_at) }}</small>
</h1>

<div class="markdown-body">
    {!! $schedule->formatted_message !!}
</div>
@stop
