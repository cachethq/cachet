{{ trans('cachet.users.email.invite.text', ['app_name' => $app_name, 'link' => $link]) }}

@if($show_support)
{!! trans('cachet.powered_by', ['app' => $app_name]) !!}
@endif
