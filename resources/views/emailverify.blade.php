<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Verification</title>
</head>

<body>
    <span style="display: none !important; font-size: 1px;">{{env('APP_ENV')}}</span>
    <div style="width:100%; background: white; color: #555;">
        <div class="email-wrapper" style="max-width:600px; margin:auto">
            <table class="email-header" cellspacing="0" cellpadding="0" border="0" align="div" width="100%" style="border-spacing:0;border-collapse:collapse;max-width:600px;margin:0 auto">
                <tbody>
                    <tr>
                        <td style="font-family: 'Helvetica Neue',sans-serif;color:#999;font-size:13px;line-height:1.6;padding:20px 0" align="center">
                            <div
                                style="background-color: #2065D1; padding: 10px; border-radius: 5px;"
                            >
                                <img width="150" alt="{{env('APP_NAME')}}" src="https://cdn-icons-png.flaticon.com/256/2247/2247606.png" style="height:auto;line-height:100%;outline:none;text-decoration:none;max-width:400px!important;border:0">
                                <p style="font-size: 28px;color: white; font-family:monospace;">USTP Alumni Web App</p>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>

            <table class="email-body" cellspacing="0" cellpadding="0" border="0" align="center" width="100%" style="border-spacing:0;border-collapse:collapse;max-width:600px;margin:0 auto" bgcolor="#ffffff">
                <tbody>
                    <tr>
                        <td>
                            <table border="0" cellpadding="30" cellspacing="0" width="100%" style="border-spacing:0;border-collapse:collapse;margin:0 auto">
                                <tbody>
                                    <tr>
                                        <td valign="top" style="font-family:'Helvetica Neue', sans-serif;color:#444;font-size:14px;line-height:150%">
                                            <p style="font-size:14px;color:#222222;">
                                                Hi {{ $name }},
                                            </p>
                                            <p style="margin-top:15px;margin-bottom:15px;font-size:14px;color:#222222; line-height: 2;">
                                                Please verify your email ({{$email}}) by clicking the button below:
                                                <br />
                                                <span style="color:#222222;">We hope you enjoy {{env('APP_NAME')}}!</span>
                                            </p>

                                            <p style="text-align: center;">
                                                <a href="{{ $link }}" target="_blank" data-saferedirecturl="{{ $link }}" style="border:1px solid #2065D1    ; text-decoration:none; color: #fff;font-size:14px; padding: 10px 20px; background: #2065D1 ; border-radius: 3px; display: block; margin: 30px auto; width: 120px; text-align: center; cursor: pointer; font-weight: bold;">
                                                    Verify Email
                                                </a>
                                            </p>
                                    


                                            <hr style="border: none; border-bottom-width:1px;border-bottom-color:#eee;border-bottom-style:solid;" />
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                </tbody>
            </table>
            <table class="email-footer" cellspacing="0" cellpadding="0" border="0" align="center" width="100%" style="border-spacing:0;border-collapse:collapse;max-width:600px;margin:0 auto">
                <tbody>
                    <tr>
                        <td style="font-family:'Helvetica Neue',sans-serif;color:#2065D1    ;font-size:12px;line-height:1.6;padding:30px 5%" align="center">
                            <div style="margin-top:10px">
                                <span class="il">© 2023</span> &nbsp;•&nbsp; <span class="il">{{env('APP_NAME')}}</span>
                                &nbsp;•&nbsp;
                                All rights reserved
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </center>
</body>

</html>