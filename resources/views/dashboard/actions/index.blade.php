@extends('layout.dashboard')

@section('content')
<div class="content-panel">
    @if(isset($sub_menu))
    @include('dashboard.partials.sub-sidebar')
    @endif
    <div class="content-wrapper">
        <div class="header sub-header">
            <span class="uppercase">
                <i class="ion ion-ios-information-outline"></i> {{ trans('dashboard.actions.actions') }}
            </span>
            <a class="btn btn-sm btn-success pull-right" href="{{ route('dashboard.actions.add') }}">
                {{ trans('dashboard.actions.add.title') }}
            </a>
            <div class="clearfix"></div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                @include('dashboard.partials.errors')

                <div class="striped-list">
                    @foreach($actions as $action)
                    <div class="row striped-list-item">
                        <div class="col-xs-6">
                            <strong>{{ $action->name }}</strong> @if($action->active)<i class="ion-ios-checkmark-outline"></i>@endif
                            @if($action->description)
                            <p><small>{{ Str::words($action->description, 5) }}</small></p>
                            @endif
                        </div>
                        <div class="col-xs-6 text-right">
                            <a href="/dashboard/actions/{{ $action->id }}/edit" class="btn btn-default">{{ trans('forms.edit') }}</a>
                            <a href="/dashboard/actions/{{ $action->id }}/delete" class="btn btn-danger confirm-action" data-method='DELETE'>{{ trans('forms.delete') }}</a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@stop
