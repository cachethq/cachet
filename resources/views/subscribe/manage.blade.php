@extends('layout.master')

@section('content')

<div class="pull-right">
    <p><a class="btn btn-success btn-outline" href="{{ cachet_route('status-page') }}"><i class="ion ion-home"></i></a></p>
</div>

<div class="clearfix"></div>

@include('dashboard.partials.errors')

<div class="row">
    <div class="col-xs-12 col-lg-offset-2 col-lg-8">
        <div class="text-center margin-bottom">
            <h1>{{ $app_name }} Notifications</h1>
            <p>Manage notifications for <strong>{{ $subscriber->email }}</strong></p>
        </div>
        <form action="{{ cachet_route('subscribe.manage', [$subscriber->verify_code], 'post') }}" method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            @if($component_groups->isNotEmpty() || $ungrouped_components->isNotEmpty())
            @foreach($component_groups as $componentGroup)
            <div class="list-group components">
                @if($componentGroup->enabled_components->count() > 0)
                <div class="list-group-item group-name">
                    <i class="{{ $componentGroup->collapse_class_with_subscriptions($subscriptions) }} group-toggle"></i>
                    <strong>{{ $componentGroup->name }}</strong>
                    <div class="pull-right text-muted small">
                        <a href="javascript: void(0);" class="select-group" id="select-all-{{$componentGroup->id}}">Select All</a>
                        &nbsp;|&nbsp;
                        <a href="javascript: void(0);" class="deselect-group" id="deselect-all-{{$componentGroup->id}}">Deselect All</a>
                    </div>
                </div>
                @foreach($componentGroup->enabled_components()->orderBy('order')->get() as $component)
                @include('partials.component_input', compact($component))
                @endforeach
                @endif
            </div>
            @endforeach

            @if($ungrouped_components->isNotEmpty())
            <ul class="list-group components">
                <div class="list-group-item group-name">
                    <strong>{{ trans('cachet.components.group.other') }}</strong>
                </div>
                @foreach($ungrouped_components as $component)
                @include('partials.component_input', compact($component))
                @endforeach
            </ul>
            @endif
            @else
            <p>{{ trans('cachet.subscriber.manage.no_subscriptions') }}</p>
            @endif

            <div class="text-right">
                <button type="submit" class="btn btn-success">Update Subscription</button>
            </div>
        </form>
    </div>
</div>
@stop
