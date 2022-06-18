<?php
use PHPMailer\PHPMailer\PHPMailer;

require_once '../PHP/Exception.php';
require_once '../PHP/PHPMailer.php';
require_once '../PHP/SMTP.php';

$alert = '';

if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  try{
    //$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    //$mail->SMTPSecure = 'ssl';

    $phpmailer = new PHPMailer(true);
    $phpmailer->isSMTP();
    $phpmailer->Host = 'smtp.mailtrap.io';
    $phpmailer->SMTPAuth = true;
    $phpmailer->Port = 2525;
    $phpmailer->Username = '27a45f36c079d4';
    $phpmailer->Password = '4193867a35d930';

    
    $phpmailer->setFrom('zoo_iasi_server@mail.com'); 
    $phpmailer->addAddress('zoo_iasi@yahoo.com'); 
    $phpmailer->isHTML(true);
    $phpmailer->Subject = 'Message Received (Contact Page)';
    $phpmailer->Body = "<h3>Name : $name <br>Email: $email <br>Message : $message</h3>";

    $phpmailer->send();
    $alert = '<div class="alert-success">
                 <span>Message Sent! Thank you for contacting us.</span>
                </div>';
  } catch (Exception $e){
    $alert = '<div class="alert-error">
                <span>'.$e->getMessage().'</span>
              </div>';
  }
}
?>