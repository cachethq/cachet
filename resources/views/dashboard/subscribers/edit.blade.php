@extends('layout.dashboard')

@section('content')
<div class="header">
    <div class="sidebar-toggler visible-xs">
        <i class="ion ion-navicon"></i>
    </div>
    <span class="uppercase">
        <i class="ion ion-ios-email-outline"></i> {{ trans('dashboard.subscribers.subscribers') }}
    </span>
</div>
<div class="content-wrapper">
    <div class="row">
        <div class="col-sm-12">
            @include('dashboard.partials.errors')
            <form name="SubscriberForm" class="form-vertical" role="form" action="/dashboard/subscribers/{{ $subscriber->id }}/edit" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <fieldset>
                <div class="form-group">
                    <label>{{ trans('forms.user.email') }}</label>
                    <input class="form-control" type="email" name="email" required value="{{ $subscriber->email }}">
                </div>
                <div class="checkbox">
                    <label>
                        <input type="hidden" value="0" name="is_verified">
                        <input type="checkbox" value="1" name="is_verified" @if($subscriber->is_verified)checked @endif>
                        {{ trans("cachet.subscriber.is_verified") }}
                    </label>
                </div>
                </fieldset>

                @if(!$components_in_groups->isEmpty() || !$components_out_groups->isEmpty())
                <hr>
                <span class="uppercase">
                    <i class="ion ion-ios-browsers-outline"></i> {{ trans('dashboard.components.components') }}
                </span>
                <hr>
                <div class="row">
                    <div class="col-xs-12">
                        @foreach($components_in_groups as $group)
                            @if($group->components->count())
                            <div class="panel panel-default">
                                <div class="panel-heading">{{ $group->name }}</div>
                                <div class="panel-body">
                                    @foreach($group->components as $component)
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" value="{{ $component->id }}" name="components[]" @if($subscriber_subscriptions->search($component->id))checked @endif>
                                            {{ $component->name }}
                                        </label>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            @endif
                    @endforeach
                    </div>
                </div>
                @endif

                <div class="form-group">
                    <div class='btn-group'>
                        <button type="submit" class="btn btn-success">{{ trans('forms.save') }}</button>
                        <a class="btn btn-default" href="{{ route('dashboard.subscribers.index') }}">{{ trans('forms.cancel') }}</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@stop
