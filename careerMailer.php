<?php
use PHPMailer\PHPMailer\PHPMailer;

require_once 'phpmailer/Exception.php';
require_once 'phpmailer/PHPMailer.php';
require_once 'phpmailer/SMTP.php';

$mail = new PHPMailer(true);
if(isset($_POST["career"])){
  $path = 'upload/' . $_FILES['file']["name"];
  move_uploaded_file($_FILES['file']["tmp_name"], $path);
  $name = $_POST['name'];
  $mobileNo = $_POST['mobile_no'];
  $email = $_POST['email'];
  $position = $_POST['position'];
  $experience = $_POST['experience'];
  $notice = $_POST['notice'];
  try{
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    
    $mail->SMTPAuth = true;
    $mail->Username = 'riyaz.ahmed@rurutek.com'; // Gmail address which you want to use as SMTP server
    $mail->Password = 'riyazsuhu1999'; // Gmail address Password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = '587';

    $mail->setFrom('riyaz.ahmed@rurutek.com'); // Gmail address which you used as SMTP server
    $mail->addAddress('hr@rurutek.com'); // Email address where you want to receive emails (you can use any of your gmail address including the gmail address which you used as SMTP server)
    $mail->isHTML(true);
    $mail->AddAttachment($path);
    $mail->Subject = "Applied For $position";
    $mail->Body = "<div>
                    <h3>Name : $name <br>
                    Mobile Number: $mobileNo<br>
                    Email: $email <br>
                    position: $position<br>
                    experience : $experience<br>
                    Notice Period : $notice
                    </h3>
                  </div>";    
    $mail->send();
    echo "<script>alert('Success');</script>";
    unlink($path);
  } catch (Exception $e){
    echo '<script>alert('.$e->getMessage().');</script>';
  }    
}
?>
