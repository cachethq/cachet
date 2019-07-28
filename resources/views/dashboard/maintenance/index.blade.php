@extends('layout.dashboard')

@section('content')
<div class="content-panel">
    @includeWhen(isset($subMenu), 'dashboard.partials.sub-sidebar')
    <div class="content-wrapper">
        <div class="header sub-header">
            <span class="uppercase">
                <i class="ion ion-android-calendar"></i> {{ trans('dashboard.schedule.schedule') }}
            </span>
            <a class="btn btn-md btn-success pull-right" href="{{ cachet_route('dashboard.schedule.create') }}">
                {{ trans('dashboard.schedule.add.title') }}
            </a>
            <div class="clearfix"></div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                @include('partials.errors')
                <p class="lead">{!! trans_choice('dashboard.schedule.logged', $schedule->count(), ['count' => $schedule->count()]) !!}</p>

                <div class="striped-list">
                    @foreach($schedule as $incident)
                    <div class="row striped-list-item">
                        <div class="col-xs-6">
                            <strong>{{ $incident->name }}</strong>
                            <br>
                            {{ trans('dashboard.schedule.scheduled_at', ['timestamp' => $incident->scheduled_at_formatted]) }}
                            @if($incident->message)
                            <p><small>{{ Str::words($incident->message, 5) }}</small></p>
                            @endif
                        </div>
                        <div class="col-xs-6 text-right">
                            <a href="{{ cachet_route('dashboard.schedule.edit', [$incident->id]) }}" class="btn btn-default">{{ trans('forms.edit') }}</a>
                            <a href="#" class="btn btn-danger delete-schedule">
                                {{ trans('forms.delete') }}
                                <form action='{{ cachet_route('dashboard.schedule.delete', [$incident->id], 'delete') }}' method='POST' style='display:none'>
                                    <input type='hidden' name='_method' value='DELETE'>
                                    <input type='hidden' name='_token' value='{{ csrf_token() }}'>
                                    <input type="hidden" name="notify" value="0">
                                </form>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@stop
