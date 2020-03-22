<?php
session_start();
require('config2.php');
if(isset($_POST["purpose_submit"]))
{
  echo "Thank you for your request! We will notify you via email if your request is valid.";
  exit();
}
if(isset($_POST["purpose_submit"]))
  {
    $user_ID=$_SESSION['User_ID'];
    $Dance_ID=$_SESSION['Dance_ID'];

    $contact_no=$_POST['contact'];
    $purpose=$_POST['purpose'];
    $identity=$_POST['proof_of_identity'];


    $file=$_FILES['proof_of_identity']["name"];
    $tmp_name=$_FILES['proof_of_identity']["tmp_name"];
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
    header("Location: KATUYAW_dance_list.php");
  }
 ?>
<!DOCTYPE html>
<html data-wf-page="5e50f6dcfd13dec65e73cc22" data-wf-site="5e50f6dcfd13de7a9673cc21">
<head>
  <form action="KATUYAW_request_download.php" method="post">
  <meta charset="utf-8">
  <title>katuyaw_access_request_form</title>
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
  <link href="css/normalize.css" rel="stylesheet" type="text/css">
  <link href="css/webflow.css" rel="stylesheet" type="text/css">
  <link href="css/katuyaw-access-request-form.webflow.css" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
  <script type="text/javascript">WebFont.load({  google: {    families: ["Oswald:200,300,400,500,600,700","Montserrat:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic"]  }});</script>
  <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
  <link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon">
  <link href="images/webclip.png" rel="apple-touch-icon">
</head>
<body class="body">
  <div class="w-container">
    <div class="topnav-section">
      <div class="topnav-wrap">
        <div id="w-node-7082ee60f9c8-5e73cc22" class="div-block-5"></div><img src="images/Hamburger_icon.svg.png" width="493" srcset="images/Hamburger_icon.svg-p-500.png 500w, images/Hamburger_icon.svg-p-800.png 800w, images/Hamburger_icon.svg-p-1080.png 1080w, images/Hamburger_icon.svg.png 1200w" sizes="23.993057250976562px" id="w-node-7082ee60f9c9-5e73cc22" alt="" class="image">
        <div class="div-block-7">
          <div class="text-block-8 text-block-9">KATUYAW</div>
        </div>
        <div class="section-page">
          <div>
            <h1 class="heading">KATUYAW ACCESS REQUEST FORM</h1>
            <div class="div-block-13">
              <div class="div-block-18"><img src="images/logo1.png" srcset="images/logo1-p-500.png 500w, images/logo1-p-800.png 800w, images/logo1-p-1080.png 1080w, images/logo1.png 1200w" sizes="(max-width: 479px) 100vw, 500.0000305175781px" alt=""></div>
              <div id="w-node-f3ecccf74c06-5e73cc22">
                <div class="d1">
                  <div id="w-node-f40380adccd1-5e73cc22">
                    <div class="text-block-20"></div>
                  </div>
                  <div>
                    <div class="w-form">
                      <input type="tel" class="text-field-7 w-input" maxlength="256" name="contact#" data-name="Name 2" placeholder="Contact No." id="name-2" required>
                      <div class="w-form-done">
                        <div>Thank you! Your submission has been received!</div>
                      </div>
                      <div class="w-form-fail">
                        <div>Oops! Something went wrong while submitting the form.</div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="text-block-16">Proof of Identity</div>
                <div class="div-block-20">
                  <div class="w-form">
                    <input type="File" class="submit-button w-button" name='proof_of_identity' required>
                    <div class="w-form-done">
                      <div>Thank you! Your submission has been received!</div>
                    </div>
                    <div class="w-form-fail">
                      <div>Oops! Something went wrong while submitting the form.</div>
                    </div>
                  </div>
                </div>
                <div class="div-block-21">
                  <div class="text-block-17">Purpose</div>
                  <div class="w-form">
                    <textarea type="text" class="text-field-6 w-input" maxlength="256" name="purpose" placeholder="What are you going to use this for?" id="field-2" required></textarea>
                    <div class="w-form-done">
                      <div>Thank you! Your submission has been received!</div>
                    </div>
                    <div class="w-form-fail">
                      <div>Oops! Something went wrong while submitting the form.</div>
                    </div>
                  </div>
                </div>
                <div class="div-block-22">
                  <div class="text-block-18">By submitting this you agree to our site&#x27;s terms and conditions.</div>
                  <div class="w-form">
                    <input type="submit" class="form-2 w-input" maxlength="256" name="purpose_submit" placeholder="Submit" id="email-2">
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
          </div>
        </div><a id="w-node-7082ee60f9d1-5e73cc22" href="#" class="button-logo-logged-in w-button"> </a>
        <div id="w-node-7082ee60f9d3-5e73cc22" class="text-block-10"></div>
      </div>
    </div>
  </div>
  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.4.1.min.220afd743d.js" type="text/javascript" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="js/webflow.js" type="text/javascript"></script>
</body>
</html>