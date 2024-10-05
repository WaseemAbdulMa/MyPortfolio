<?php
$name = $_POST['name'];
$email = $_POST['replyto'];
$phone= $_POST['phone'];
$subject = $_POST['subject'];
$message_input = $_POST['message'];

$to = "abdulwaseem9777@gmail.com";
$subject = "Contacted from Site";
$message = "
<table style='width:650px;border:solid 5px #ededed;'>
    <tr>
        <td colspan='2' style='padding: 5px;text-align: center;border-collapse: collapse;background-color:#2A9DD6;color:#fff;font-weight:bold;font-family:Arial, Helvetica, sans-serif;'>Conatcted Person Details</td>
    </tr>
    <tr>
        <th style='padding: 5px;text-align: left;border-collapse: collapse;background-color:#e4e4e4;color:#000;font-weight:bold;font-family:Arial, Helvetica, sans-serif;width:300px;'>Name:</th>
        <td style='padding: 5px;text-align: left;font-weight:normal;background-color:#f0f1f2;color:#000;'>$name</td>
    </tr>

    <tr>
        <th style='padding: 5px;text-align: left;border-collapse: collapse;background-color:#e4e4e4;color:#000;font-weight:bold;font-family:Arial, Helvetica, sans-serif;width:300px;'>Phone Number</th>
        <td style='padding: 5px;text-align: left;font-weight:normal;background-color:#f0f1f2;color:#000;'>$phone</td>
    </tr>
	
    <tr>
        <th style='padding: 5px;text-align: left;border-collapse: collapse;background-color:#e4e4e4;color:#000;font-weight:bold;font-family:Arial, Helvetica, sans-serif;width:300px;'>message:</th>
        <td style='padding: 5px;text-align: left;font-weight:normal;background-color:#f0f1f2;color:#000;'>$message_input</td>
    </tr>
  
</table>";

$headers = "From: .$email.\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html; charset=UTF-8\r\n";

if (mail($to, $subject, $message, $headers)) {
    $touser = "$email";
    $subjecttouser = "Thanks for Contacting Me";
    $messagetouser = "Hi $name, Thanks you for showing interset on Me. I will Reach out you in sometime.";
    $headers1 = "From: .$email.\r\n";
    $headers1 .= "MIME-Version: 1.0\r\n";
    $headers1 .= "Content-Type: text/html; charset=UTF-8\r\n";
    if (mail($to, $subject, $message, $headers)) {
        header('location:index.html');
    }
} else {
    echo "Failed to send email";
}