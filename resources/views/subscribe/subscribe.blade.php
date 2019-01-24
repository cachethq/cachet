@extends('layout.master')

@section('title',  trans('cachet.subscriber.subscribe'). " | ". $siteTitle)

@section('description', trans('cachet.meta.description.subscribe', ['app' => $siteTitle]))

@section('content')
<div class="pull-right">
    <p><a class="btn btn-success btn-outline" href="{{ cachet_route('status-page') }}"><i class="ion ion-home"></i></a></p>
</div>

<div class="clearfix"></div>

@include('partials.errors')

<div class="row">
    <div class="col-xs-12 col-lg-offset-2 col-lg-8">
        <div class="panel panel-default">
            <div class="panel-heading">{{ trans('cachet.subscriber.subscribe') }}</div>
            <div class="panel-body">
                <p>{!! $aboutApp  !!}</p>
                <form action="{{ cachet_route('subscribe', [], 'post') }}" method="POST" class="form">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <input class="form-control" type="email" name="email" value="{{ old("email") }}" placeholder="email@example.com">
                    </div>
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" name="acceptPrivacyStatement" value="1" /> {!! trans("cachet.subscriber.accept-privacy-statement", ["url" => cachet_route("privacy") ]) !!}
                        </label>
                    </div>
                    <button type="submit" class="btn btn-success">{{ trans('cachet.subscriber.button') }}</button>
                </form>
            </div>
        </div>
    </div>
</div>
@stop

@section('bottom-content')
    @include('partials.footer')
@stop