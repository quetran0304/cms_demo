<?php
require_once('class.phpmailer.php');
$mail = new PHPMailer();
$mail->CharSet = "UTF-8";
$mail->IsSMTP(); // set mailer to use SMTP
$mail->Host = ""; // specify main and backup server
$mail->Port = 587; // set the port to use
$mail->SMTPAuth = true; // turn on SMTP authentication
$mail->SMTPSecure = '';
$mail->Username = ""; // your SMTP username or your gmail username
$mail->Password = ''; // your SMTP password or your gmail password
$mail->WordWrap = 50; // set word wrap
$mail->IsHTML(true); // send as HTML

$from = ""; // Reply to this email
$to = ''; // Recipients email ID
$name = "";
$mail->From = $from;
$mail->FromName = "Test send mail"; // Name to indicate where the email came from when the recepient received
$mail->AddAddress($to, $name);
$mail->AddReplyTo($from, "Test send mail");
$mail->Subject = $name." test";
$html = '<h1>Cảm ơn bạn đã đăng ký.</h1><br/> 
        Chúng tôi sẽ liên hệ với bạn trong thời gian sớm nhất!
        <br/><br/>
        <b>© 2018 Việt Nam</b><br/>
        Văn phòng chính: ';
$mail->Body = $html; //HTML Body
$mail->AltBody = "Alt Body"; //Text Body
//$mail->SMTPDebug = 2;
if($mail->Send()){
    echo "<h1>OK</h1>";
}
else{
	echo "<h1>Error send mail: " . $mail->ErrorInfo . '</h1>';
}
?>