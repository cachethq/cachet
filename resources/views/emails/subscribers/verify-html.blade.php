@extends('layout.emails')

@section('content')
{!! trans('cachet.subscriber.email.verify.html', ['app_name' => $app_name]) !!}

<table class="body-action" align="center" width="100%" cellpadding="0" cellspacing="0">
    <tr>
        <td align="center">
            <div>
                <!--[if mso]><v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="{{ $link }}" style="height:45px;v-text-anchor:middle;width:200px;" arcsize="7%" stroke="f" fill="t">
                <v:fill type="tile" color="#22BC66" />
                <w:anchorlock/>
                <center style="color:#ffffff;font-family:sans-serif;font-size:15px;">{{ trans('cachet.subscriber.email.verify.button') }}</center>
                </v:roundrect><![endif]-->
                <a href="{{ $link }}" class="button button--green">{{ trans('cachet.subscriber.email.verify.button') }}</a>
            </div>
        </td>
    </tr>
</table>
@stop
