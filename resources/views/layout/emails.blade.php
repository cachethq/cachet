<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="format-detection" content="address=no;=no;telephone=no" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>{{ $app_name }}</title>
    <style type="text/css" rel="stylesheet" media="all">
        /* Base ------------------------------ */
        *:not(br):not(tr):not(html) {
            font-family: Arial, 'Helvetica Neue', Helvetica, sans-serif;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
        }
        body {
            width: 100% !important;
            height: 100%;
            margin: 0;
            line-height: 1.4;
            background-color: #F2F4F6;
            color: #74787E;
            -webkit-text-size-adjust: none;
        }
        a {
            color: {{ $theme_links }};
        }

        a img {
            color: none;
            border: none;
        }

        /* Layout ------------------------------ */
        .email-wrapper {
            width: 100%;
            margin: 0;
            padding: 0;
            background-color: #F2F4F6;
        }
        .email-content {
            width: 100%;
            margin: 0;
            padding: 0;
        }

        /* Masthead ----------------------- */
        .email-masthead {
            padding: 25px 0;
            text-align: center;
        }
        .email-masthead_logo {
            max-width: 400px;
            border: 0;
        }
        .email-masthead_name {
            font-size: 40px;
            font-weight: bold;
            color: #bbbfc3;
            text-decoration: none;
            text-shadow: 0 1px 0 white;
        }

        /* Body ------------------------------ */
        .email-body {
            width: 100%;
            margin: 0;
            padding: 0;
            border-top: 1px solid #EDEFF2;
            border-bottom: 1px solid #EDEFF2;
            background-color: #FFF;
        }
        .email-body_inner {
            width: 570px;
            margin: 0 auto;
            padding: 0;
        }
        .email-footer {
            width: 570px;
            margin: 0 auto;
            padding: 0;
            text-align: center;
        }
        .email-footer p {
            color: #AEAEAE;
        }
        .email-footer img {
            width: 30px;
        }
        .body-action {
            width: 100%;
            margin: 30px auto;
            padding: 0;
            text-align: center;
        }
        .body-sub {
            margin-top: 25px;
            padding-top: 25px;
            border-top: 1px solid #EDEFF2;
        }
        .content-cell {
            padding: 35px;
        }
        .align-center {
            text-align: center;
        }
        .align-right {
            text-align: right;
        }
        .border-rounded {
            border: 1px solid #EDEFF2;
            border-radius: 3px;
            padding: 12px;
        }

        /* Type ------------------------------ */
        h1 {
            margin-top: 0;
            color: #2F3133;
            font-size: 36px;
            font-weight: bold;
            text-align: left;
        }
        h2 {
            margin-top: 0;
            color: #2F3133;
            font-size: 16px;
            font-weight: bold;
            text-align: left;
        }
        h3 {
            margin-top: 0;
            color: #2F3133;
            font-size: 14px;
            font-weight: bold;
            text-align: left;
        }
        p {
            margin-top: 0;
            color: #74787E;
            font-size: 16px;
            line-height: 1.5em;
            text-align: left;
        }
        p.compressed {
            margin: 0;
        }
        p.sub {
            font-size: 12px;
        }
        p.center {
            text-align: center;
        }

        /* Buttons ------------------------------ */
        .button {
            display: inline-block;
            width: 200px;
            background-color: #3869D4;
            border-radius: 3px;
            color: #ffffff;
            font-size: 15px;
            line-height: 45px;
            text-align: center;
            text-decoration: none;
            -webkit-text-size-adjust: none;
            mso-hide: all;
        }
        .button--green {
            background-color: {{ $theme_greens }};
        }
        .button--red {
            background-color: {{ $theme_reds }};
        }
        .button--blue {
            background-color: {{ $theme_blues }};
        }
        .button--yellow {
            background-color: {{ $theme_yellows }};
        }

        /*Media Queries ------------------------------ */
        @media only screen and (max-width: 600px) {
            .email-body_inner,
            .email-footer {
                width: 100% !important;
            }
        }
        @media only screen and (max-width: 500px) {
            .button {
                width: 100% !important;
            }
        }
    </style>
</head>
<body>
    <table class="email-wrapper" width="100%" cellpadding="0" cellspacing="0">
        <tr>
            <td align="center">
                <table class="email-content" width="100%" cellpadding="0" cellspacing="0">
                    <tr>
                        <td class="email-masthead">
                            <a class="email-masthead_name">{{ $app_name}} </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="email-body" width="100%">
                            <table class="email-body_inner" align="center" width="570" cellpadding="0" cellspacing="0">
                                <!-- Body content -->
                                <tr>
                                    <td class="content-cell">
                                        @yield('content')
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <table class="email-footer" align="center" width="570" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td class="content-cell">
                                        @if($show_support)
                                        <p class="sub center">{!! trans('cachet.powered_by') !!}</p>
                                        @endif
                                        <p class="sub center">
                                            <a href="https://cachethq.io"><img src="{{ asset('img/button-email--dark-grey.png') }}" alt="Cachet"></a>
                                        </p>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
