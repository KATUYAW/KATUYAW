<?php
session_start();
require('config2.php');

if(isset($_POST["reset_password"]))
{

$new_pass=$_POST["new_pass"];
$email=$_SESSION["email"];

$sql = mysqli_query($mysqli, "UPDATE `user_table` SET `User_Password`='$new_pass' WHERE `User_Email`='$email'");
echo "Your password has been reset!";
exit();

}
?>
<!DOCTYPE html>
<html data-wf-page="5e526eab8c34f8c8804c3a92" data-wf-site="5e526eab8c34f8a3ed4c3a91">
<head>
  <form action="KATUYAW_reset_password_email.php" method="post">
  <meta charset="utf-8">
  <title>Confirmation</title>
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
  <link href="css/normalize.css" rel="stylesheet" type="text/css">
  <link href="css/webflow.css" rel="stylesheet" type="text/css">
  <link href="css/confirmation-34e1b7.webflow.css" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
  <script type="text/javascript">WebFont.load({  google: {    families: ["Montserrat:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic","Oswald:200,300,400,500,600,700"]  }});</script>
  <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
  <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
  <link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon">
  <link href="images/webclip.png" rel="apple-touch-icon">
</head>
<body>
  <div class="div-block-3">
    <div class="div-block-4"><img src="images/icon1.png" srcset="images/icon1-p-500.png 500w, images/icon1-p-800.png 800w, images/icon1-p-1080.png 1080w, images/icon1.png 1428w" sizes="179px" alt="" class="image">
      <div class="text-block-2">KATUYAW</div>
    </div>
  </div>
  <div class="div-block">
    <div class="div-block-2">
      <div class="text-block">Enter New Password</div>
    </div>
    <div class="div-block-2"></div>
    <div class="div-block-2">
      <div class="w-form">
        <form id="email-form" name="email-form" data-name="Email Form" class="form"><input type="password" class="text-field w-input" maxlength="256" name="new_pass" data-name="Email 2" placeholder="Enter Password" id="email-2" required=""></form>
        <div class="w-form-done">
          <div>Thank you! Your submission has been received!</div>
        </div>
        <div class="w-form-fail">
          <div>Oops! Something went wrong while submitting the form.</div>
        </div>
      </div>
    </div>
    <div class="div-block-2">
      <div class="w-form">
        <form id="email-form" name="email-form" data-name="Email Form" class="form"><input type="password" class="text-field w-input" maxlength="256" name="email-2" data-name="Email 2" placeholder="Confirm Password" id="email-2" required=""></form>
        <div class="w-form-done">
          <div>Thank you! Your submission has been received!</div>
        </div>
        <div class="w-form-fail">
          <div>Oops! Something went wrong while submitting the form.</div>
        </div>
      </div>
    </div>
    <div class="div-block-2"><input type="submit" forgot-button="&lt;input&gt;" class="button w-button" name="reset_password" value="Reset Password"></div>
  </div>
  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.4.1.min.220afd743d.js" type="text/javascript" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="js/webflow.js" type="text/javascript"></script>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
</body>
</html>