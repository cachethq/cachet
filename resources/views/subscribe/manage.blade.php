@extends('layout.master')

@section('content')
<div class="pull-right">
    <p><a class="btn btn-success btn-outline" href="/"><i class="ion ion-home"></i></a></p>
</div>

<div class="clearfix"></div>

@include('dashboard.partials.errors')

<div class="row">
    <div class="col-xs-12 col-lg-offset-2 col-lg-8">
        <div class="text-center margin-bottom">
            <h1>{{ $app_name }} Notifications</h1>
            <p>
                Manage notifications for {{ $subscriber->email }}
            </p>
        </div>
        @if($components->count() > 0)
        <form action="{{ route('subscribe.manage', $subscriber->verify_code) }}" method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="panel panel-default">
                <div class="panel-heading">
                    {{ trans('cachet.subscriber.manage.my_subscriptions') }}
                </div>
                <div class="list-group">
                    @foreach($components as $component)
                    <div class="list-group-item">
                        <div class="checkbox">
                            <label for="component-{{ $component->id }}">
                                <input type="checkbox"
                                    id="component-{{ $component->id }}"
                                    name="subscriptions[]"
                                    value="{{ $component->id }}"
                                    @if (in_array($component->id, $subscriptions) || $subscriber->global)
                                        checked="checked"
                                    @endif>
                                    {{ $component->name }}
                            </label>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="text-right">
                <button type="submit" class="btn btn-success">Update Subscription</button>
            </div>
        </form>
        @else
        <div class="panel panel-default">
            <div class="panel-body">
                <p>{{ trans('cachet.subscriber.manage.no_subscriptions') }}</p>
            </div>
        </div>
        @endif
    </div>
</div>
@stop
