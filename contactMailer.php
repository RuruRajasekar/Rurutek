<?php
use PHPMailer\PHPMailer\PHPMailer;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';

$mail = new PHPMailer(true);


if(isset($_POST['contactus'])){
  $name = $_POST['name'];
  $mobileNo = $_POST['mobile_no'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  try{
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    
    $mail->SMTPAuth = true;
    $mail->Username = 'riyaz.ahmed@rurutek.com'; // Gmail address which you want to use as SMTP server
    $mail->Password = 'riyazsuhu1999'; // Gmail address Password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = '587';

    $mail->setFrom('riyaz.ahmed@rurutek.com'); // Gmail address which you used as SMTP server
    $mail->addAddress('admin@rurutek.com'); // Email address where you want to receive emails (you can use any of your gmail address including the gmail address which you used as SMTP server)
    $mail->isHTML(true);
    $mail->Subject = $subject ;
    $mail->Body = "<h3 class=>Name : $name <br>Mobile Number: $mobileNo<br>Email: $email <br>Message : $message</h3>";
    $mail->send();
    echo "<script>alert('Success');</script>";
  } catch (Exception $e){
    echo '<script>alert('.$e->getMessage().');</script>';
  }
}
?>
