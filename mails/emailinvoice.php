<?php
$quantity=$_SESSION['Quantity'];
$trans=$_SESSION['trans'];
$netp=$_SESSION['netp'];
$conn_NEW=new mysqli('localhost:3308','root','','signup');
$user_NEW=mysqli_query($conn_NEW,"SELECT * FROM signup where Username='$Username'");
$result_NEW = mysqli_num_rows($user_NEW);
$row_NEW=mysqli_fetch_array($user_NEW);
$addr=$_SESSION['addr'];
$cropname=$_SESSION['crop_name'];
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
<body style="background-color: #eeeeee;">
    <div style="font-size: 1px; color: #fefefe; line-height: 1px; font-family: Open Sans;overflow: hidden;">
    </div>
    <table width="100%">
        <tr>
            <td align="center" style="background-color: #eeeeee;" bgcolor="#eeeeee">
                <table align="center"  style="max-width:600px;">
                    <tr>
                        <td align="center" valign="top" style="font-size:0; padding: 35px;" bgcolor="#bada55">
                            <div style="display:inline-block; max-width:50%; min-width:400px; vertical-align:top; width:100%;">
                                <table align="center"  width="100%" style="max-width:1000px;">
                                    <tr>
                                        <td align="center" valign="top" style="font-family: Open Sans; font-size: 36px; font-weight: 800; line-height: 48px;width:100%">
                                            <h1 style="font-size: 36px; font-weight: 800; margin: 0; color: #ffffff;">BOOST 2 FARMS</h1>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                            <div style="display:inline-block; max-width:50%; min-width:100px; vertical-align:top; width:100%;">
                                <table align="left"  style="max-width:300px;">
                                </table>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td align="center" style="padding: 35px 35px 20px 35px; background-color: #ffffff;" bgcolor="#ffffff">
                            <table align="center" style="max-width:600px;">
                                <tr>
                                    <td align="center" style="font-family: Open Sans; font-size: 16px; font-weight: 400; line-height: 24px; padding-top: 25px;"> <img src="https://img.icons8.com/carbon-copy/100/000000/checked-checkbox.png" width="125" height="120" style="display: block; border: 0px;" /><br>
                                        <h2 style="font-size: 30px; font-weight: 800; line-height: 36px; color: #333333; margin: 0;"> Thank You For Your Order! </h2>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="left" style="font-family: Open Sans; font-size: 16px; font-weight: 400; line-height: 24px; padding-top: 10px;">
                                        <p style="font-size: 16px; font-weight: 400; line-height: 24px; color: #777777;">We at Boost 2 Farms are thankful to you for placing the order.We are a small enterprise. Please share with your friends and family</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="left" style="padding-top: 20px;">
                                        <table >
                                            <tr>
                                                <td width="75%" align="left" bgcolor="#eeeeee" style="font-family: Open Sans; font-size: 16px; font-weight: 800; line-height: 24px; padding: 10px;width:100%"> Order Confirmation # </td>
                                                <td width="25%" align="left" bgcolor="#eeeeee" style="font-family: Open Sans; font-size: 16px; font-weight: 800; line-height: 24px; padding: 10px;"><?php echo($trans); ?></td>
                                            </tr>
                                            <tr>
                                                <td width="75%" align="left" style="font-family: Open Sans; font-size: 16px; font-weight: 400; line-height: 24px; padding: 15px 10px 5px 10px;"><?php echo($cropname)?></td>
                                                <td width="25%" align="left" style="font-family: Open Sans; font-size: 16px; font-weight: 400; line-height: 24px; padding: 15px 10px 5px 10px;"><?php echo($netp);?></td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td align="center" height="100%" valign="top"  style="padding: 0 35px 35px 35px; background-color: #ffffff;" bgcolor="#ffffff">
                            <table align="center"  style="max-width:660px;">
                                <tr>
                                    <td align="center" valign="top" style="font-size:0;">
                                        <div style="display:inline-block; max-width:50%; min-width:240px; vertical-align:top; width:100%;">
                                            <table align="left"  style="max-width:300px;">
                                                <tr>
                                                    <td align="left" valign="top" style="font-family: Open Sans; font-size: 16px; font-weight: 400; line-height: 24px;">
                                                        <p style="font-weight: 800;">Delivery Address</p>
                                                        <p><?php echo($addr)?></p>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div style="display:inline-block; max-width:50%; min-width:240px; vertical-align:top; width:100%;">
                                            <table align="left"  style="max-width:300px;">
                                                <tr>
                                                    <td align="left" valign="top" style="font-family: Open Sans; font-size: 16px; font-weight: 400; line-height: 24px;">
                                                        <p style="font-weight: 800;">Estimated Delivery Date</p>
                                                        <p>January 1st, 2016</p>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td align="center" style="padding: 35px; background-color: #bada55;">
                            <table align="center" style="max-width:600px;">
                                <tr>
                                    <td align="center" style="font-family: Open Sans; font-size: 16px; font-weight: 400; line-height: 24px; padding-top: 25px;">
                                        <h2 style="font-size: 24px; font-weight: 800; line-height: 30px; color: #ffffff; margin: 0;"> Get 30% off your next order. </h2>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="center" style="padding: 25px 0 15px 0;">
                                        <table>
                                            <tr>
                                                <td align="center" style="border-radius: 5px;" bgcolor="#66b3b7"> 
                                                <a href="#" target="_blank" style="font-size: 18px; font-family: Open Sans; color: #ffffff; text-decoration: none; border-radius: 5px; background-color:#003366; padding: 15px 30px; border: 1px solid #bada55; display: block;">Shop Again</a> 
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td align="center" style="padding: 35px; background-color: #ffffff;">
                            <table align="center"  style="max-width:600px;">
                                <tr>
                                    <td align="center" style="font-family: Open Sans; font-size: 14px; font-weight: 400; line-height: 24px; padding: 5px 0 10px 0;">
                                        <p style="font-size: 14px; font-weight: 800; line-height: 18px; color: #333333;"> <span>Farmers Pride Building
                      FDP-MDBP Building
                      First Floor,<br>       
                      JAVA Industrial Estate<br>
                      New Delhi-110020</span></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="left" style="font-family: Open Sans; font-size: 14px; font-weight: 400; line-height: 24px;">
                                        <p style="font-size: 13.5px; font-weight: 400; line-height: 20px; color: #777777;"> 
                                        If you didn't create an account using this email address, please ignore this email or 
                                        <a href="#" target="_blank" style="color: #777777;">unsusbscribe</a></p>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <?php
    unset($_SESSION['Quantity']);
    unset($_SESSION['trans']);
    unset($_SESSION['netp']);
    unset($_SESSION['addr']);
    unset($_SESSION['crop_name']);
?>
</body>
</html>