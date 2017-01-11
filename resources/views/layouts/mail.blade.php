<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="{{ Config::get('app.locale') }}">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="format-detection" content="telephone=no">
    <title>@yield('title')</title>

    <style type="text/css">
        body {
          margin: 0;
          padding: 0;
          -ms-text-size-adjust: 100%;
          -webkit-text-size-adjust: 100%;
        }

        table {
          border-spacing: 0;
        }

        table td {
          border-collapse: collapse;
        }

        .ExternalClass {
          width: 100%;
        }

        .ExternalClass,
        .ExternalClass p,
        .ExternalClass span,
        .ExternalClass font,
        .ExternalClass td,
        .ExternalClass div {
          line-height: 100%;
        }

        .ReadMsgBody {
          width: 100%;
          background-color: #ebebeb;
        }

        table {
          mso-table-lspace: 0pt;
          mso-table-rspace: 0pt;
        }

        img {
          -ms-interpolation-mode: bicubic;
        }

        .yshortcuts a {
          border-bottom: none !important;
        }

        @media screen and (max-width: 599px) {
          .force-row,
          .container {
            width: 100% !important;
            max-width: 100% !important;
          }
        }
        @media screen and (max-width: 400px) {
          .container-padding {
            padding-left: 12px !important;
            padding-right: 12px !important;
          }
        }
        .ios-footer a {
          color: #aaaaaa !important;
          text-decoration: underline;
        }
    </style>
</head>

<body style="margin:0; padding:0;" bgcolor="#F0F0F0" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
    <table border="0" width="100%" height="100%" cellpadding="0" cellspacing="0" bgcolor="#F0F0F0">
        <tr>
            <td align="center" valign="top" bgcolor="#F0F0F0" style="background-color: #F0F0F0;">
                <br>
                <table border="0" width="600" cellpadding="0" cellspacing="0" class="container" style="width:600px;max-width:600px">
                    <tr>
                        <td class="container-padding header" align="left" style="font-family:Helvetica, Arial, sans-serif;font-size:24px;font-weight:bold;padding-bottom:12px;padding-left:24px;padding-right:24px">
                            <img src="{{ asset('assets/images/logo.png') }}" alt="{{ Config::get('app.name') }}" width="296" height="63">
                        </td>
                    </tr>
                    <tr>
                        <td class="container-padding content" align="left" style="padding-left:24px;padding-right:24px;padding-top:12px;padding-bottom:12px;background-color:#ffffff">
                            <br>

                            <div class="title" style="font-family:Helvetica, Arial, sans-serif;font-size:18px;font-weight:600;color:#374550">@yield('title')</div>
                            <br>

                            <div class="body-text" style="font-family:Helvetica, Arial, sans-serif;font-size:14px;line-height:20px;text-align:left;color:#333333">
                                @yield('content')
                                <br><br>
                            </div>

                        </td>
                    </tr>
                    <tr>
                        <td class="container-padding footer-text" align="left" style="font-family:Helvetica, Arial, sans-serif;font-size:12px;line-height:16px;color:#aaaaaa;padding-left:24px;padding-right:24px">
                            <br><br>
                            &copy; 2016 - {{ date('Y') }} Bergische Universität Wuppertal - Arbeitsgruppe Wissenschaftliches Rechnen und Softwaretechnologie
                            <br><br>

                            Sie erhalten diese E-Mail weil sie bei {{ Config::get('app.name') }} registriert sind.

                            <br><br>

                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
