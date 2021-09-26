<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{$title}}</title>
</head>

<body>
    <center>
        <table
            style="width:100%; max-width:600px; min-width: 320px; border:none; background:url('{{asset('images/email-template/bg_bottom.png')}}'); background-repeat: repeat-x;background-position: bottom center;background-color: #fff;">
            <tr>
                <td colspan="3"></td>
            </tr>
            <tr style="height:700px;">
                <td style="width: 30%;" valign="top"><br>
                </td>
                <td style="width: 67%;" valign="top"><br><br><br>
                    <h2
                        style="color:#3b9bd5; font-weight: 900; font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, 'sans-serif'; font-size:30px;">
                        {{$title}}</h2>
                    <p
                        style="color:#333; font-weight: 400; font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, 'sans-serif'; font-size:18px;margin:0;">
                        {{$msg}} </p><br>
                    <p
                        style="color:#333; font-weight: 400; font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, 'sans-serif'; font-size:18px;margin:0;">
                        Thanks,</p>
                    <p
                        style="color:#333; font-weight: 400; font-family: Segoe, 'Segoe UI', 'DejaVu Sans', 'Trebuchet MS', Verdana, 'sans-serif'; font-size:18px;margin:0;">
                        Best Regards</p>
                </td>
                <td style="width:3%;"></td>
            </tr>
            <tr>
                <td align="center" colspan="3">

                    <table style="min-width:320px;width:100%;max-width:570px;">
                        <tr>
                            <td colspan="7">
                                <hr style="height:4px;background:#379ad3; max-width:552px;">
                            </td>
                        </tr>

                    </table>

                </td>
            </tr>
            <tr>
                <td colspan="3"><br></td>
            </tr>
        </table>

    </center>
</body>

</html>
