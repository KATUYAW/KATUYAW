<?php
session_start();
require('config2.php');

if(isset($_POST["purpose_submit"]))
  {
    $user_ID=$_SESSION['User_ID'];
    $Dance_ID=$_SESSION['Dance_ID'];

    $contact_no=$_POST['contact'];
    $purpose=$_POST['purpose'];
    $identity=$_POST['proof'];
    echo $identity;

    $file=$identity;
    $tmp_name=$identity;
    $path="identity/".$file;
    $file1=explode(".",$file);
    $ext=$file1[1];
    $allowed=array("doc","docs","docx","pdf","PNG","jpeg","bmp");
    if(in_array($ext,$allowed))
    {
      move_uploaded_file($tmp_name,$path);
    }
    else
    {
      echo "<b>Invalid File Format!<br>Allowed File format:</b> rar, zip, csv, bvh, FBX, 3d";
      exit();
    }
    $query_run = mysqli_query($mysqli, "INSERT INTO `userrequesttodl_table`(`User_ID`, `DanceDataset_ID`, `User_ReasonforDL`, `Proof_of_Identity`, `Contact_No`) VALUES ('$user_ID','$Dance_ID','$purpose','$file','$contact_no')");
    header("Location: user-datasets.php");
  }
 ?>
<!DOCTYPE html>
<!--  This site was created in Webflow. http://www.webflow.com  -->
<!--  Last Published: Mon Mar 02 2020 21:18:25 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="5e5d4f65e52e121667b72573" data-wf-site="5e59e63c9e288f8a09e23975">
<head>
  <form action="requestdl.php" method="post">
  <meta charset="utf-8">
  <title>login-page</title>
  <meta content="login-page" property="og:title">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
  <link href="css/55.css" rel="stylesheet" type="text/css">
  <link href="css/555.css" rel="stylesheet" type="text/css">
  <link href="css/12345.css" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
  <script type="text/javascript">WebFont.load({  google: {    families: ["Montserrat:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic","Oswald:200,300,400,500,600,700","Open Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic","Roboto:100,100italic,300,300italic,regular,italic,500,500italic,700,700italic,900,900italic"]  }});</script>
  <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
  <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
  <link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon">
  <link href="images/webclip.png" rel="apple-touch-icon">
</head>
<body>
  <div class="div-block-218">
    <div class="div-block-219">
      <div class="div-block-220"><img src="images/FINAL-LOGO3.png" width="100" srcset="images/FINAL-LOGO3-p-500.png 500w, images/FINAL-LOGO3-p-800.png 800w, images/FINAL-LOGO3-p-1080.png 1080w, images/FINAL-LOGO3-p-1600.png 1600w, images/FINAL-LOGO3-p-2000.png 2000w, images/FINAL-LOGO3-p-2600.png 2600w, images/FINAL-LOGO3.png 3000w" sizes="99.9913101196289px" alt="" class="image-20"></div>
      <div class="div-block-221">
        <div class="text-block-91">REQUEST ACCESS FORM</div>
      </div>
      <div class="div-block-222">
        <div class="div-block-223">
          <div class="text-block-92"></div>
        </div>
        <div class="div-block-224">
          <div class="w-form">

            <input type="text" class="text-field-8 w-input" maxlength="256" name="contact" data-name="Name" placeholder="Contact Number" id="name">

            <div class="w-form-done">
              <div>Thank you! Your submission has been received!</div>
            </div>
            <div class="w-form-fail">
              <div>Oops! Something went wrong while submitting the form.</div>
            </div>
          </div>
        </div>
      </div>
      <div class="div-block-225">
        <div class="div-block-226">
          <div class="text-block-93">Proof of Identity</div>
        </div>
        <div class="div-block-227">
          <div class="form-block-8 w-form">

           <input type="file" class="submit-button-10 w-button" name="proof">
            <div class="w-form-done" >

              <div>Thank you! Your submission has been received!</div>
            </div>
            <div class="w-form-fail">
              <div>Oops! Something went wrong while submitting the form.</div>
            </div>
          </div>
        </div>
      </div>
      <div class="div-block-228">
        <div class="text-block-95">Purpose</div>
      </div>
      <div class="div-block-229">
        <div class="w-form">
          
            <textarea name="purpose" maxlength="5000" id="field" placeholder="Purpose of download" class="w-input"></textarea>

          <div class="w-form-done">
            <div>Thank you! Your submission has been received!</div>
          </div>
          <div class="w-form-fail">
            <div>Oops! Something went wrong while submitting the form.</div>
          </div>
        </div>
      </div>
      <div class="div-block-230">
        <div class="text-block-96">By submitting this, you agree to our site&#x27;s Terms and Conditions</div>
      </div>
      <div class="div-block-231">
        <div class="w-form">
          

            <input type="submit" name ="purpose_submit" value="Submit" data-wait="Please wait..." class="submit-button-11 w-button">

          <div class="w-form-done">
            <div>Thank you! Your submission has been received!</div>
          </div>
          <div class="w-form-fail">
            <div>Oops! Something went wrong while submitting the form.</div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.4.1.min.220afd743d.js" type="text/javascript" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="js/webflow.js" type="text/javascript"></script>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
</body>
</html>