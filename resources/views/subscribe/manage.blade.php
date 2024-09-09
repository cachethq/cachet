@extends('layout.master')

@section('content')

<div class="pull-right">
    <p><a class="btn btn-success btn-outline" href="{{ cachet_route('status-page') }}"><i class="ion ion-home"></i></a></p>
</div>

<div class="clearfix"></div>

@include('partials.errors')

<div class="row">
    <div class="col-xs-12 col-lg-offset-2 col-lg-8">
        <div class="text-center margin-bottom">
            <h1>{{ $appName }} {{ trans('cachet.subscriber.manage.notifications') }}</h1>
            <p>{{ trans('cachet.subscriber.manage.notifications_for') }} <strong>{{ $subscriber->email }}</strong></p>
        </div>
        <form action="{{ URL::signedRoute(cachet_route_generator('subscribe.manage'), ['code' => $subscriber->verify_code]) }}" method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            @if($componentGroups->isNotEmpty() || $ungroupedComponents->isNotEmpty())
            @foreach($componentGroups as $componentGroup)
            <ul class="list-group">
                @if($componentGroup->enabled_components()->count() > 0)
                    <li class="list-group-item group-name">
                        <i class="{{ $componentGroup->collapse_class_with_subscriptions($subscriptions) }} group-toggle"></i>
                        <strong>{{ $componentGroup->name }}</strong>
                        <div class="pull-right text-muted small">
                            <a href="javascript: void(0);" class="select-group" id="select-all-{{$componentGroup->id}}">{{ trans('cachet.components.select_all') }}</a>
                            &nbsp;|&nbsp;
                            <a href="javascript: void(0);" class="deselect-group" id="deselect-all-{{$componentGroup->id}}">{{ trans('cachet.components.deselect_all') }}</a>
                        </div>
                    </li>
                    <div class="form-group group-items {{ $componentGroup->has_subscriber($subscriptions) ? null : "hide" }}">
                        @foreach($componentGroup->enabled_components()->orderBy('order')->get() as $component)
                        @include('partials.component_input', compact($component))
                        @endforeach
                    </div>
                @endif
            </ul>
            @endforeach

            @if($ungroupedComponents->isNotEmpty())
            <ul class="list-group">
                <div class="list-group-item group-name">
                    <strong>{{ trans('cachet.components.group.other') }}</strong>
                    <div class="pull-right text-muted small">
                        <a href="javascript: void(0);" class="select-group" id="select-all-{{$componentGroup->id}}">{{ trans('cachet.components.select_all') }}</a>
                        &nbsp;|&nbsp;
                        <a href="javascript: void(0);" class="deselect-group" id="deselect-all-{{$componentGroup->id}}">{{ trans('cachet.components.deselect_all') }}</a>
                    </div>
                </div>
                @foreach($ungroupedComponents as $component)
                @include('partials.component_input', compact($component))
                @endforeach
            </ul>
            @endif
            @else
            <p>{{ trans('cachet.subscriber.manage.no_subscriptions') }}</p>
            @endif

            <div class="text-right">
                <button type="submit" class="btn btn-success">{{ trans('cachet.subscriber.manage.update_subscription') }}</button>
            </div>
        </form>
    </div>
</div>
@stop
