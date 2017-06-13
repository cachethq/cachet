@extends('layout.dashboard')

@section('content')
<div class="content-panel">
    @if(isset($sub_menu))
    @include('dashboard.partials.sub-sidebar')
    @endif
    <div class="content-wrapper">
        <div class="header sub-header">
            <span class="uppercase">
                <i class="ion ion-ios-information-outline"></i> {{ trans('dashboard.incidents.incidents') }}
            </span>
            <a class="btn btn-md btn-success pull-right" href="{{ cachet_route('dashboard.incidents.create') }}">
                {{ trans('dashboard.incidents.add.title') }}
            </a>
            <div class="clearfix"></div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                @include('dashboard.partials.errors')
                <p class="lead">{!! trans_choice('dashboard.incidents.logged', $incidents->count(), ['count' => $incidents->count()]) !!}</p>

                <div class="striped-list">
                    @foreach($incidents as $incident)
                    <div class="row striped-list-item">
                        <div class="col-xs-6">
                            <i class="{{ $incident->icon }}"></i> <a href="{{ cachet_route('dashboard.incidents.edit', [$incident->id]) }}"><strong>{{ $incident->name }}</strong></a> <span class="badge badge-info">{{ trans_choice('dashboard.incidents.updates', $incident->updates->count()) }}</span>
                            @if($incident->message)
                            <p><small>{{ Str::words($incident->message, 5) }}</small></p>
                            @endif
                        </div>
                        <div class="col-xs-6 text-right">
                            <a href="{{ cachet_route('dashboard.incidents.edit', [$incident->id]) }}" class="btn btn-default">{{ trans('forms.edit') }}</a>
                            <a href="{{ cachet_route('dashboard.incidents.updates', [$incident->id]) }}" class="btn btn-info">{{ trans('forms.update') }}</a>
                            <a href="{{ cachet_route('dashboard.incidents.delete', [$incident->id], 'delete') }}" class="btn btn-danger confirm-action" data-method='DELETE'>{{ trans('forms.delete') }}</a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@stop
