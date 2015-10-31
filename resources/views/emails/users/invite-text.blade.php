{{ trans('cachet.users.email.invite.text', ['app_name' => Setting::get('app_name'), 'link' => $link]) }}

@if(Setting::get('show_support'))
{!! trans('cachet.powered_by', ['app' => Setting::get('app_name')]) !!}
@endif
