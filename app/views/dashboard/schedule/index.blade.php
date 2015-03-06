@extends('layout.dashboard')

@section('content')
    <div class="content-panel">
        @if(isset($subMenu))
        @include('partials.dashboard.sub-sidebar')
        @endif
        <div class="content-wrapper">
            <div class="header sub-header">
                <span class="uppercase">
                    <i class="icon ion-android-calendar"></i> {{ trans('dashboard.schedule.schedule') }}
                </span>
                <a class="btn btn-sm btn-success pull-right" href="{{ route('dashboard.schedule.add') }}">
                    {{ trans('dashboard.schedule.add.title') }}
                </a>
                <div class="clearfix"></div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    @include('partials.dashboard.errors')

                    <div class="striped-list">
                        @foreach($schedule as $incident)
                        <div class="row striped-list-item">
                            <div class="col-md-6">
                                <strong>{{ $incident->name }}</strong>
                                <br>
                                {{ trans('dashboard.schedule.scheduled_at', ['timestamp' => $incident->scheduled_at_iso]) }}
                                @if($incident->message)
                                <p><small>{{ Str::words($incident->message, 5) }}</small></p>
                                @endif
                            </div>
                            <div class="col-md-6 text-right">
                                <a href="{{ route('dashboard.schedule.edit', [$incident->id]) }}" class="btn btn-default">{{ trans('forms.edit') }}</a>
                                <a href="{{ route('dashboard.schedule.delete', [$incident->id]) }}" class="btn btn-danger confirm-action" data-method='DELETE'>{{ trans('forms.delete') }}</a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
