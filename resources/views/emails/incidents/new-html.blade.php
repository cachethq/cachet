@extends('layout.emails')

@section('content')
{!! trans('cachet.subscriber.email.incident.html-preheader', ['app_name' => $app_name]) !!}

<p>{!! $status !!} @if($has_component)<strong> ({{ $component_name }})</strong>@endif</p>

<p>{!! $html_content !!}</p>

<table class="body-action" align="center" width="100%" cellpadding="0" cellspacing="0">
    <tr>
        <td align="center">
            <div>
                <!--[if mso]><v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="{{ $manage_link }}" style="height:45px;v-text-anchor:middle;width:200px;" arcsize="7%" stroke="f" fill="t">
                <v:fill type="tile" color="#22BC66" />
                <w:anchorlock/>
                <center style="color:#ffffff;font-family:sans-serif;font-size:15px;">{!! trans('cachet.subscriber.email.manage') !!}</center>
                </v:roundrect><![endif]-->
                <a href="{{ $manage_link }}" class="button button--green">{!! trans('cachet.subscriber.email.manage') !!}</a>
            </div>
        </td>
    </tr>
</table>

<table class="body-sub">
    <tr>
        <td>
            <p class="sub"><a href="{{ $unsubscribe_link }}">{!! trans('cachet.subscriber.email.unsubscribe') !!}</a></p>
        </td>
    </tr>
</table>
@stop
