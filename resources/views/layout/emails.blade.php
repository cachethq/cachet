<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"> <!-- utf-8 works for most cases -->
    <meta name="viewport" content="width=device-width"> <!-- Forcing initial-scale shouldn't be necessary -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> <!-- Use the latest (edge) version of IE rendering engine -->
    <title>{{ Setting::get('app_name') }} Status</title> <!-- the <title> tag shows on email notifications on Android 4.4. -->
    <style type="text/css">

        /* ensure that clients don't add any padding or spaces around the email design and allow us to style emails for the entire width of the preview pane */
        body,
        #bodyTable {
            height:100% !important;
            width:100% !important;
            margin:0;
            padding:0;
        }

        /* Ensures Webkit- and Windows-based clients don't automatically resize the email text. */
        body,
        table,
        td,
        p,
        a,
        li,
        blockquote {
            -ms-text-size-adjust:100%;
            -webkit-text-size-adjust:100%;
        }

        /* Forces Yahoo! to display emails at full width */
        .thread-item.expanded .thread-body .body,
        .msg-body {
            width: 100% !important;
            display: block !important;
        }

        /* Forces Hotmail to display emails at full width */
        .ReadMsgBody,
        .ExternalClass {
            width: 100%;
            background-color: #F0F3F4;
        }

        /* Forces Hotmail to display normal line spacing. */
        .ExternalClass,
        .ExternalClass p,
        .ExternalClass span,
        .ExternalClass font,
        .ExternalClass td,
        .ExternalClass div {
            line-height:100%;
        }

        /* Resolves webkit padding issue. */
        table {
            border-spacing:0;
        }

        /* Resolves the Outlook 2007, 2010, and Gmail td padding issue, and removes spacing around tables that Outlook adds. */
        table,
        td {
            border-collapse:collapse;
            mso-table-lspace:0pt;
            mso-table-rspace:0pt;
        }

        /* Corrects the way Internet Explorer renders resized images in emails. */
        img {
            -ms-interpolation-mode: bicubic;
        }

        /* Ensures images don't have borders or text-decorations applied to them by default. */
        img,
        a img {
            border:0;
            outline:none;
            text-decoration:none;
        }

        /* Styles Yahoo's auto-sensing link color and border */
        .yshortcuts a {
            border-bottom: none !important;
        }

        /* Styles the tel URL scheme */
        a[href^=tel],
        .mobile_link,
        .mobile_link a {
            color:#222222 !important;
            text-decoration: underline !Important;
        }


        /* Apple Mail doesn't support max-width, so we use media queries to constrain the email container width. */
        @media only screen and (min-width: 601px) {
            .email-container {
                width: 600px !important;
            }
        }

    </style>
</head>
<body leftmargin="0" topmargin="0" marginwidth="0" marginheight="0" bgcolor="#F0F3F4" style="margin:0; padding:0; -webkit-text-size-adjust:none; -ms-text-size-adjust:none;">
    <table cellpadding="0" cellspacing="0" border="0" height="100%" width="100%" bgcolor="#F0F3F4" id="bodyTable" style="border-collapse: collapse;table-layout: fixed;margin:0 auto;">
        <tr>
            <td>
                <!-- Hidden Preheader Text : BEGIN -->
                <div style="display:none; visibility:hidden; opacity:0; color:transparent; height:0; width:0;line-height:0; overflow:hidden;mso-hide: all;">
                    @yield('preheader')
                </div>
                <!-- Hidden Preheader Text : END -->

                <!-- Outlook and Lotus Notes don't support max-width but are always on desktop, so we can enforce a wide, fixed width view. -->
                <!-- Beginning of Outlook-specific wrapper : BEGIN -->
                <!--[if (gte mso 9)|(IE)]>
                <table width="600" align="center" cellpadding="0" cellspacing="0" border="0">
                    <tr>
                        <td>
                            <![endif]-->
                            <!-- Beginning of Outlook-specific wrapper : END -->

                            <!-- Email wrapper : BEGIN -->
                            <table border="0" width="100%" cellpadding="0" cellspacing="0" align="center" style="max-width: 600px;margin: auto;" class="email-container">
                                <tr>
                                    <td>
                                        <table border="0" width="100%" cellpadding="0" cellspacing="0" bgcolor="#ffffff">
                                            @if($bannerImage = Setting::get('app_banner'))
                                            <tr>
                                               <td bgcolor="#F0F3F4" style="padding: 40px; font-family: sans-serif; font-size: 20px; line-height: 27px; color: #666666; text-align: center;">
                                                   <a href="{{ $appUrl }}"><img src="data:{{ Setting::get('app_banner_type') }};base64, {{ $bannerImage}}" class="banner-image img-responsive"></a>
                                               </td>
                                            </tr>
                                            @endif
                                            <tr>
                                                <td>
                                                    <!-- 2 x 2 grid : BEGIN -->
                                                    <table border="0" width="100%" cellpadding="0" cellspacing="0" align="center">
                                                        <tr>
                                                            <td valign="top" width="50%" style="padding: 40px 20px; font-family: sans-serif; font-size: 18px; line-height: 24px; color: #666666;">
                                                                @yield('content')
                                                            </td>
                                                        </tr>
                                                    </table>
                                                    <!-- 2 x 2 grid : END -->
                                                </td>
                                            </tr>
                                            <!-- Full Width, Fluid Column : END -->

                                        </table>
                                    </td>
                                </tr>
                            </table>
                            <!-- Email wrapper : END -->

                        <!-- End of Outlook-specific wrapper : BEGIN -->
                        <!--[if (gte mso 9)|(IE)]>
                        </td>
                    </tr>
                </table>
                <![endif]-->
                <!-- End of Outlook-specific wrapper : END -->
            </td>
        </tr>
    </table>
</body>
</html>
