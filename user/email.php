<?php
  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;
 
  require '../PHPMailer-master/src/Exception.php';
  require '../PHPMailer-master/src/PHPMailer.php';
  // require 'PHPMailer-master/src/OAuthTokenProvider.php';
  require '../PHPMailer-master/src/SMTP.php';

function send_mail($email,$subject,$message)
{

  $mail = new PHPMailer(true);
  $mail->isSMTP();
  $mail->SMTPDebug  = 2;  
  $mail->SMTPAuth   = TRUE;
  $mail->SMTPSecure = "tls";
  $mail->Port       = 587;
  $mail->Host       = "smtp.gmail.com";
  //$mail->Host       = "smtp.mail.yahoo.com";
  $mail->Username   = "ghetcongai137@gmail.com";
  $mail->Password   = "xikuystxtsmspqfh";

  $mail->isHTML(true);
  $mail->addAddress($email);
  $mail->setFrom("ghetcongai137@gmail.com", "N-FURNITURE-H");
  //$mail->AddReplyTo("reply-to-email", "reply-to-name");
  //$mail->AddCC("cc-email-email", "cc-email-name");
  $mail->Subject = $subject;
  $content = $message;

  $mail->MsgHTML($content); 
  if(!$mail->send()) {
    //echo "Error while sending Email.";
    //echo "<pre>";
    //var_dump($mail);
    return false;
  } else {
    //echo "Email sent successfully";
    return true;
  }

}

?>

