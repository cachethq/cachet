@extends('layout.master')

@section('content')
<div class="pull-right">
    <p><a class="btn btn-success btn-outline" href="/"><i class="ion ion-home"></i></a></p>
</div>

<div class="clearfix"></div>

@include('dashboard.partials.errors')

<div class="row">
    <div class="col-xs-12 col-lg-offset-2 col-lg-8">
        <div class="panel panel-default">
            <div class="panel-heading">{{ trans('cachet.subscriber.subscribe') }}</div>
            <div class="panel-body">
                <form action="{{ route('subscribe.subscribe', [], false) }}" method="POST" class="form">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <input class="form-control" type="email" name="email">
                    </div>
                    <button type="submit" class="btn btn-success">{{ trans('cachet.subscriber.button') }}</button>
                </form>
            </div>
        </div>
    </div>
</div>
@stop
