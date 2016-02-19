<?php
header('Content-Type: text/html; charset=utf-8');
require 'lib/phpmailer/PHPMailerAutoload.php';

$email = $_POST['email'];
$message = $_POST['message'];
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.yandex.ru';  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'billblake';                 // SMTP username
$mail->Password = 'apQFihfnL3';                           // SMTP password
$mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 465;                                    // TCP port to connect to

$mail->setFrom('billblake@yandex.ru', 'Mailer');
$mail->addAddress('skech@mail.ru', 'Joe User');     // Add a recipient
// $mail->addAddress('ellen@example.com');               // Name is optional
// $mail->addReplyTo('info@example.com', 'Information');
// $mail->addCC('cc@example.com');
// $mail->addBCC('bcc@example.com');

// $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
// $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(false);                                  // Set email format to HTML

$mail->Subject = $email;
$mail->Body    = $message;
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Ваше сообщение успешно отправлено. Я свяжусь с вами в ближайшее время.';
}

?>
<a href="http://79265405446.ru/front-end/verstka.php">Вернуться на сайт</a>