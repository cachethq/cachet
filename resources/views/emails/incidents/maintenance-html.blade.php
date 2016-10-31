@extends('layout.emails')

@section('content')
<h1 class="align-center">{!! $name !!}</h1>

<table class="border-rounded" width="100%" cellpadding="0" cellspacing="0">
    <tr>
        <td>
            <p class="compressed">
                <strong>{!! $status !!} @if($has_component) ({{ $component_name }}) @endif</strong>
                {!! $html_content !!}
                {!! $timestamp !!}
            </p>
        </td>
    <tr>
</table>

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

<table class="body-sub" align="center">
    <tr>
        <td align="center">
            <p class="sub"><a href="{{ $unsubscribe_link }}">{!! trans('cachet.subscriber.email.unsubscribe') !!}</a></p>
        </td>
    </tr>
</table>
@stop
