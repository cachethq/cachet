@extends('layout.dashboard')

@section('content')
    <div class="header">
        <div class="sidebar-toggler visible-xs">
            <i class="icon ion-navicon"></i>
        </div>
        <span class="uppercase">
            <i class="icon ion-speedometer"></i> {{ trans('dashboard.dashboard') }}
        </span>
    </div>
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12">
                <h4 class="sub-header">{{ trans('dashboard.components.component_statuses') }}</h4>
                <div class="panel panel-default">
                    <div class="list-group">
                        @forelse($components as $component)
                        <div class="list-group-item">
                            <form class='component-inline form-vertical' data-messenger="{{trans('dashboard.components.edit.success')}}">
                                <div class="row striped-list-item">
                                    <div class="col-lg-4 col-sm-12">
                                        <h4>{{ $component->name }}</h4>
                                    </div>
                                    <div class="col-lg-8 col-sm-12 radio-items">
                                        @foreach(trans('cachet.components.status') as $statusID => $status)
                                        <div class="radio-inline">
                                            <label>
                                                <input type="radio" name="status" value="{{ $statusID }}" {{ (int) $component->status === $statusID ? 'checked' : null }}>
                                                {{ $status }}
                                            </label>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                                <input type="hidden" name="component_id" value="{{ $component->id }}">
                            </form>
                        </div>
                        @empty
                        <div class="list-group-item text-danger">{{ trans('dashboard.components.add.message') }}</div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </div>
    @if(Session::get('setup.done'))
    @include('partials.dashboard.welcome-modal')
    <script>
        $(function() {
            $('#welcome-modal').modal('show');
        });
    </script>
    @endif
@stop
