<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}
?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:o="urn:schemas-microsoft-com:office:office">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="x-apple-disable-message-reformatting">
    <title></title>
    <script src="https://kit.fontawesome.com/042da02a20.js" crossorigin="anonymous"></script>
    <!--[if mso]>
  <noscript>
    <xml>
      <o:OfficeDocumentSettings>
        <o:PixelsPerInch>96</o:PixelsPerInch>
      </o:OfficeDocumentSettings>
    </xml>
  </noscript>
  <![endif]-->
    <style>
        table,
        td,
        div,
        h1,
        p {
            font-family: Arial, sans-serif;
        }

        a {
            list-style: none;
            text-decoration: none;
        }
    </style>
</head>

<body style="margin:0;padding:0;">
    <table role="presentation"
        style="width:100%;border-collapse:collapse;border:0;border-spacing:0;background:#ffffff;">
        <tr>
            <td align="center" style="padding:0;">
                <table role="presentation"
                    style="width:602px;border-collapse:collapse;border:1px solid #cccccc;border-spacing:0;text-align:left;">
                    <tr>
                        <td align="center" style="padding:20px 0 20px 0;background:#8a60fd;">
                            <img src="http://registration.codepanda.in/wp-content/uploads/2022/11/logo-2.png" alt=""
                                width="300" style="height:auto;display:block;" />
                        </td>
                    </tr>
                    <tr>
                        <td style="padding:36px 30px 0px 30px;">
                            <table role="presentation"
                                style="width:100%;border-collapse:collapse;border:0;border-spacing:0;">
                                <tr>
                                    <td style="padding:0px;color:#153643;">
                                        <h1 style="font-size:24px;margin:0 0 20px 0;font-family:Arial,sans-serif;">
                                            Registration Successfully</h1>
                                        <p
                                            style="margin:0 0 12px 0;font-size:16px;line-height:24px;font-family:Arial,sans-serif;">
                                            CodePanda Enrollment No :-
                                            <?php echo $cpid; ?> <br>
                                            Name :-
                                            <?php echo $name; ?> <br>
                                            Course :-
                                            <?php echo $course; ?> <br>
                                            E-mail Id :-
                                            <?php echo $email; ?> <br>

                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding:0 0 36px 0;color:#153643;">
                                        <h3 style="font-size:18px;margin:10px 0 20px 0;font-family:Arial,sans-serif;">
                                            Welcome In CodePanda Family</h3>
                                        <table style="height: 50px; width: 100%;" border="1">
                                            <tr style="width: 100%;">
                                                <th style="width: 100%; text-align: center; background-color: #9f9ba9;">
                                                    Invoice</th>
                                            </tr>
                                        </table>
                                        <table style="height: 130px; width: 100%;" border="1">
                                            <tr style="height: 35px; background-color: #e0e8ee;">
                                                <td style="text-align: center; width: 70%;">
                                                    Course Name
                                                </td>
                                                <td style="text-align: center;">
                                                    <?php echo $course; ?>
                                                </td>
                                            </tr>
                                            <tr style="height: 35px; background-color: #e0e8ee;">
                                                <td style="text-align: center;">
                                                    Course Fees
                                                </td>
                                                <td style="text-align: center;">
                                                    <?php echo $coursefees; ?>
                                                </td>
                                            </tr>
                                            <tr style="height: 35px; background-color: #e0e8ee;">
                                                <td style="text-align: center;">
                                                    CGST
                                                </td>
                                                <td style="text-align: center;">
                                                    9%
                                                </td>
                                            </tr>
                                            <tr style="height: 35px; background-color: #e0e8ee;">
                                                <td style="text-align: center;">
                                                    SGST
                                                </td>
                                                <td style="text-align: center;">
                                                    9%
                                                </td>
                                            </tr>
                                            <tr style="height: 35px; background-color: #e0e8ee;">
                                                <td style="text-align: center;">
                                                    Total Fees
                                                </td>
                                                <td style="text-align: center;">
                                                    <?php echo $totalfees; ?>
                                                </td>
                                            </tr>
                                            <tr style="height: 35px; background-color: #e0e8ee;">
                                                <td style="text-align: center;">
                                                    Paid Fees
                                                </td>
                                                <td style="text-align: center;">
                                                    <?php echo $paidfees; ?>
                                                </td>
                                            </tr>

                                        </table>
                                        <p
                                            style="margin: 10px 0 12px 0;font-size:16px;line-height:24px;font-family:Arial,sans-serif;">
                                            Remaining Fees :- Rs
                                            <?php echo $remainingfees; ?> <br>
                                            <hr>
                                            The Code Panda Academy is a community of IT Enthusiasts, technical Leaders,
                                            students, and Human Resource Leaders coming
                                            together. It's a convergence to help improve the overall Talent pipeline to
                                            suit the IT jobs of the 21st Century. We are
                                            committed to impart those skills, which not only help you get a job now but
                                            also help you succeed throughout your
                                            career.
                                            <br>
                                            <br>
                                            The Details regarding the Manual Testing course are online: <br>

                                            a). The Course duration is of 60 Days. <br>

                                            b). The Fee for the course is
                                            <?php echo $coursefees; ?> <br>

                                            c). The session will be entirely Online. <br>
                                            <br><br>
                                            You can take free demo sessions for 3-4 days and then decide whether to
                                            continue with us or not. <br>

                                            This is the acknowledgment confirmation that we have received the Fee for
                                            this Training, i.e.,
                                            <?php echo $coursefees; ?> Your full
                                            payment has been done.
                                            <br><br>
                                            Vanshika Rana HR<br>
                                            +91 9310530523 <br>
                                            CODE PANDA ACADEMY
                                        </p>
                                        </p>
                                        <p>
                                        <h3>Follow us on</h3>
                                        <img src="http://registration.codepanda.in/wp-content/uploads/2022/11/icons8-facebook-circled-30.png"
                                            alt="" srcset="" width="16px">
                                        <a href="https://www.facebook.com/CodePandaAcademy">Facebook</a> <br>
                                        <img src="http://registration.codepanda.in/wp-content/uploads/2022/11/icons8-instagram-30-1.png"
                                            alt="" srcset="" width="16px">
                                        <a href="https://www.instagram.com/codepandaacademy">Instagram</a> <br>
                                        <img src="http://registration.codepanda.in/wp-content/uploads/2022/11/icons8-twitter-30.png"
                                            alt="" srcset="" width="16px">
                                        <a href="https://twitter.com/codepanda12">Twitter</a> <br>
                                        <img src="http://registration.codepanda.in/wp-content/uploads/2022/11/icons8-youtube-30.png"
                                            alt="" srcset="" width="16px">
                                        <a href="https://www.youtube.com/channel/UCLTRgBTL_hQFme5Bxbc0khw">Youtube</a>
                                        </p>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding:10px;background:#ee4c50;">
                            <table role="presentation"
                                style="width:100%;border-collapse:collapse;border:0;border-spacing:0;font-size:9px;font-family:Arial,sans-serif;">
                                <tr>
                                    <td style="padding:0;width:50%;" align="left">
                                        <table role="presentation"
                                            style="border-collapse:collapse;border:0;border-spacing:0;">
                                            <tr>
                                                <p style="color: white; font-size: 16px; text-align: center;">
                                                    G-35, 2nd Floor, Sector 3,
                                                    Noida, Uttar Pradesh 201301
                                                </p>
                                                <!-- <td style="padding:0 11px 0 10px;width:38px;">
                                                    <a href="https://www.facebook.com/CodePandaAcademy"
                                                        style="color:#ffffff;" target="_blank"><img
                                                            src="https://www.freepnglogos.com/uploads/facebook-logo-icon/facebook-logo-clipart-flat-facebook-logo-png-icon-circle-22.png"
                                                            alt="Facebook" width="38"
                                                            style="height:auto;display:block;border:0;" /></a>
                                                </td>
                                                <td style="padding:0 0 0 10px;width:38px;">
                                                    <a href="https://www.instagram.com/codepandaacademy"
                                                        style="color:#ffffff;" target="_blank"><img
                                                            src="https://www.freepnglogos.com/uploads/logo-ig-png/logo-ig-instagram-new-logo-vector-download-13.png"
                                                            alt="Instagram" width="38"
                                                            style="height:auto;display:block;border:0;" /></a>
                                                </td>
                                                <td style="padding:0 0 0 10px;width:38px;">
                                                    <a href="http://www.youtube.com/" style="color:#ffffff;"
                                                        target="_blank"><img
                                                            src="https://www.freepnglogos.com/uploads/youtube-logo-icon-transparent---32.png"
                                                            alt="Youtube" width="55"
                                                            style="height:auto;display:block;border:0;" /></a>
                                                </td>
                                                <td style="padding:0 0 0 5px;width:38px;">
                                                    <a href="https://twitter.com/codepanda12" style="color:#ffffff;"
                                                        target="_blank"><img
                                                            src="https://www.freepnglogos.com/uploads/twitter-logo-png/twitter-bird-symbols-png-logo-0.png"
                                                            alt="Twitter" width="48"
                                                            style="height:auto;display:block;border:0;" /></a>
                                                </td> -->
                                                <!-- <td style="padding:0;width:50%;" align="right">
                                                    <p
                                                        style="margin:0;font-size:14px;line-height:16px;font-family:Arial,sans-serif;color:#ffffff;margin-left: 90px;">
                                                        &reg; Code Panda Academy <br> G-35, 2nd Floor<br>
                                                        Sector 3 Noida,<br> Uttar Pradesh 201301
                                                    </p>
                                                </td> -->
                                            </tr>
                                        </table>
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