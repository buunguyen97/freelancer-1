<?php


require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$mail = new \PHPMailer\PHPMailer\PHPMailer(true);

try {

    $name = $_POST['name'];
    $sdt = $_POST['sdt'];
    $email = $_POST['email'];
    $content = $_POST['message'];




    //Server settings
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'lebuu555@gmail.com';                     // SMTP username
    $mail->Password   = 'levkeduzupwfbjjl';                               // SMTP password
    $mail->SMTPSecure = 'auto';                                  // Enable TLS encryption, `ssl` also accepted
    $mail->Port       = 587;                                    // TCP port to connect to
    $mail->CharSet = 'UTF-8';
    //Recipients
    $mail->setFrom('from@example.com', 'Khách hàng');
    $mail->addAddress('benbuu97@gmail.com', 'Buu Nguyen');     // Add a recipient

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Thông tin khách hàng';
    $mail->Body    = "Thông tin của khách hàng: '.$email.' <br>_ Tên : '.$name.' <br>_ SDT : '.$sdt.' <br>_ Nội Dung: '.$content.' ";
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}


?>