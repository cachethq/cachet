@extends('layout.master')

@section('title', array_get($incident->meta, 'seo.title', $incident->name).' | '.$siteTitle)

@section('description', array_get($incident->meta, 'seo.description', trans('cachet.meta.description.incident', ['name' => $incident->name, 'date' => $incident->occurred_at_formatted])))

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
                            @if($currentUser)
                            <div class="pull-right btn-group">
                                <a href="{{ cachet_route('dashboard.incidents.updates.edit', ['incident' => $incident, 'incident_update' => $update]) }}" class="btn btn-default">{{ trans('forms.edit') }}</a>
                            </div>
                            @endif
                            <div class="markdown-body">
                                {!! $update->formatted_message !!}
                            </div>
                        </div>
                        <div class="panel-footer">
                            <small>
                                <span data-toggle="tooltip" title="
                                    {{ trans('cachet.incidents.posted_at', ['timestamp' => $update->created_at_formatted]) }}">
                                    {{ trans('cachet.incidents.posted', ['timestamp' => $update->created_at_diff,'username' => $update->user->username]) }}
                                </span>
                            </small>
                        </div>
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
