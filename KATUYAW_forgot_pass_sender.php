<?php
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if(isset($_POST["forgot_pass_email_sent"]))
{

$email=$_POST["email"];
$_SESSION["email"]=$email;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);

try {
    $mail->isSMTP();                                           
    $mail->Host       = 'smtp.gmail.com';                    
    $mail->SMTPAuth   = true;                                   
    $mail->Username   = 'katuyawkatutubongsayaw@gmail.com';                    
    $mail->Password   = '0Oldspark5<+>Katuyaw';                               
    $mail->SMTPSecure = 'ssl';         
    $mail->Port       = 465;                                    

    $mail->setFrom('katuyawkatutubongsayaw@gmail.com', 'KATUYAW');
    $mail->addAddress($email);     
    $mail->addReplyTo('no-reply@gmail.com', 'No reply');

    $mail->isHTML(true);                                  
    $mail->Subject = 'Forgot Password Reset';
    $mail->Body    = 'Hi! '.$email.'<br>'.'Click this link to reset your password: <a href="http://192.168.56.1/KATUYAW/Registration/KATUYAW_reset_password_email.php>Reset Password</a>';

    $mail->send();
    echo 'Email has been sent, Check your email now!';
    exit();
} catch (Exception $e) {
    echo "Email could not be sent. Mailer Error: {$mail->ErrorInfo}";
    exit();
}
}
?>
<!DOCTYPE html>
<!--  This site was created in Webflow. http://www.webflow.com  -->
<!--  Last Published: Sun Feb 23 2020 12:53:52 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="5e525cce33d368f165378ce3" data-wf-site="5e525cce33d36815ba378ce2">
<head>
  <form action="KATUYAW_forgot_pass_sender.php" method="post">
  <meta charset="utf-8">
  <title>Forgot</title>
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
  <link href="css/normalize.css" rel="stylesheet" type="text/css">
  <link href="css/webflow.css" rel="stylesheet" type="text/css">
  <link href="css/forgot.webflow.css" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
  <script type="text/javascript">WebFont.load({  google: {    families: ["Montserrat:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic","Oswald:200,300,400,500,600,700"]  }});</script>
  <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
  <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
  <link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon">
  <link href="images/webclip.png" rel="apple-touch-icon">
</head>
<body class="body">
  <div class="div-block-3">
    <div class="div-block-4">
      <div class="div-block-5"><img src="" srcset="" sizes="179px" alt="" class="image">
        <div class="text-block-2">KATUYAW</div>
      </div>
    </div>
    <div class="div-block">
      <div class="div-block-2">
        <div class="text-block">Forgot Password?</div>
      </div>
      <div class="div-block-2">
        <div class="w-form">
          <form id="email-form" name="email-form" data-name="Email Form" class="form"><input type="email" class="text-field w-input" maxlength="256" name="email" data-name="Email" placeholder="Email Address" id="email" required=""></form>
          <div class="w-form-done">
            <div>Thank you! Your submission has been received!</div>
          </div>
          <div class="w-form-fail">
            <div>Oops! Something went wrong while submitting the form.</div>
          </div>
        </div>
      </div>
      <div class="div-block-2"><input type="submit" login-button="&lt;input&gt;" class="button w-button" name="forgot_pass_email_sent" value="Send Email Confirmation"></input></div>
    </div>
  </div>
  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.4.1.min.220afd743d.js" type="text/javascript" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="js/webflow.js" type="text/javascript"></script>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
</body>
</html>