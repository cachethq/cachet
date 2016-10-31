@extends('layout.emails')

@section('content')
{!! trans('cachet.users.email.invite.html', ['app_name' => $app_name, 'link' => $link]) !!}
@stop
