<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>THANK-YOU</title>

    <style>
        @media (max-width:420px) {
            .gap_class{
                display: block !important;
            }
            .gap_class p{
                text-align: center !important;
                margin: 10px !important;
            }
        }
    </style>
</head>

<body >

    <table style="border-radius: 10px; margin:auto; color:white; max-width: 500px; border:1px solid; font-family: Arial, sans-serif; background:url('{{ asset('frontend-assets') }}/images/bharat-bg.png'); background-size: 100% 100%; background-repeat: no-repeat;">


        <tr>
            <td  style="text-align: center; padding-bottom: 10px;">
                <h1 style="margin: 0; padding-top: 7px; color:black;">THANK YOU!</h1>
            </td>
        </tr>
        <tr>
            <td  style="text-align: center; padding: 20px;">
                <p style="margin: 0; color:black;">One of our Executive Get Back To You Shortly For
                    Discussing about your inquiry.</p>
            </td>
        </tr>
        <tr>
            <td  style="text-align: center; padding: 20px;">
                <p style="margin: 0; color:black;">Name : <span style="font-weight: 600; color: rgba(41, 40, 40, 0.844);">{{$data['name']}}</span> and Password : <span style="font-weight: 600; color: rgba(41, 40, 40, 0.844);">1234567</span> </p>
            </td>
        </tr>

        <tr>
            <td  style="text-align: center; padding: 20px;">
                <p style="margin: 0; color:black;">Your Inquiry Reference Number : <span style="font-weight: 600; color: rgba(41, 40, 40, 0.844);">80808203808033</span></p>
            </td>
        </tr>

        <tr>

        </tr>
    </table>

</body>
</html>





