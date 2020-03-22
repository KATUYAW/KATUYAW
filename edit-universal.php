<?php
session_start();
$username=$_SESSION['admin_username'];
$id = $_GET['DanceDataset_ID'];
$_SESSION['Dance_ID']=$id;
require('config2.php');
require 'connect.php';
$query="SELECT * FROM `dancedataset_table` WHERE `DanceDataset_ID` = $id";
?>
<!DOCTYPE html>
<!--  This site was created in Webflow. http://www.webflow.com  -->
<!--  Last Published: Mon Mar 02 2020 17:20:09 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="5e5d2702f0e0af6412a62a74" data-wf-site="5e59e63c9e288f8a09e23975">
<head>
  <meta charset="utf-8">
  <title>add-universal</title>
  <meta content="add-universal" property="og:title">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
  <link href="css/normalize.css" rel="stylesheet" type="text/css">
  <link href="css/webflow.css" rel="stylesheet" type="text/css">
  <link href="css/future-lab-gadget-no-001.webflow.css" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
  <script type="text/javascript">WebFont.load({  google: {    families: ["Montserrat:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic","Oswald:200,300,400,500,600,700","Open Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic","Roboto:100,100italic,300,300italic,regular,italic,500,500italic,700,700italic,900,900italic"]  }});</script>
  <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
  <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
  <link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon">
  <link href="images/webclip.png" rel="apple-touch-icon">
</head>
<body>
  <div class="body-wrapper">
    <div class="main-user-sidnav">
      <div class="logo-info-container">
        <div class="div-block-31">
          <div class="text-block-75">KATUYAW</div>
        </div>
      </div>
      <div class="user-info-wrapper">
        <div class="user-profile-icon-container"><img src="images/Profile01-512.png" alt="" class="image-15"></div>
        <div class="div-block-14">
          <div class="text-block-44"><?php echo $username; ?></div>
        </div>
        <div class="div-block-15">
          <div class="text-block-72"></div>
        </div>
        <div class="div-block-16">
          <a href="KATUYAW_admin_login.html" class="div-block-161"></a>
        </div>
      </div>
      <div class="div-block-18"></div>
      <div class="sidenav-home-container">
        <div class="div-block-19">
          <div class="div-block-21"></div>
        </div>
        <div class="div-block-20">
          <div class="text-block-73">Home</div>
        </div>
      </div>
      <div class="sidenav-profile-container">
        <div class="div-block-26">
          <div class="text-block-10"></div>
        </div>
        <div class="div-block-27">
          <div class="text-block-74">Profile</div>
        </div>
      </div>
      <div class="sidenav-requests-container">
        <div class="div-block-23">
          <div class="text-block-8"></div>
        </div>
        <div class="div-block-24">
          <div class="text-block-76">Requests</div>
        </div>
      </div>
      <div class="sidenav-datasets-container">
        <div class="div-block-29">
          <div class="text-block-12"></div>
        </div>
        <div class="div-block-9">
          <div class="text-block-38">Datasets</div>
        </div>
      </div>
    </div>
    <div>
      <div class="div-block-34"></div>
    </div>
    <div class="div-block-162">
      <div class="div-block-163"></div>
      <div class="div-block-164">
        <div class="text-block-77">DATASETS</div>
      </div>
      <div class="div-block-165">
        <div class="div-block-167">
          <div class="text-block-78">DANCE</div>
        </div>
        <div class="div-block-168">
          <div class="text-block-78">TRIBE</div>
        </div>
        <div class="div-block-169">
          <div class="text-block-78">LOCATION</div>
        </div>
        <div class="div-block-170">
          <div class="text-block-78">DATE</div>
        </div>
        <div class="div-block-171">
          <div class="text-block-78">ACTION</div>
        </div>
      </div>
      <div class="div-block-166">
        <div class="div-block-176">
          <div class="form-block-4 w-form">
            <form id="email-form" name="email-form" data-name="Email Form" class="form-4" action="updater.php" method="post">
              <?php
          if($query_run=mysqli_query($con,$query))
            {
              $no_records=0;
              while($query_execute=mysqli_fetch_assoc($query_run))
              {
              ?>
              <input type="text" class="text-field-6 w-input" maxlength="256" name="dance_name" data-name="Name" value="<?php echo $query_execute['DanceDataset_Name']; ?>" id="name">
              <?php
              }
            }
            else
            {
              echo "No items<br>";
            }
          ?>
            <div class="w-form-done">
              <div>Thank you! Your submission has been received!</div>
            </div>
            <div class="w-form-fail">
              <div>Oops! Something went wrong while submitting the form.</div>
            </div>
          </div>
        </div>
        <div class="div-block-175">
          <div class="form-block-4 w-form">
           
              <?php
          if($query_run=mysqli_query($con,$query))
            {
              $no_records=0;
              while($query_execute=mysqli_fetch_assoc($query_run))
              {
              ?>
              <input type="text" class="text-field-6 w-input" maxlength="256" name="dance_tribe" data-name="Name 2" value="<?php echo $query_execute['DanceDataset_Tribe']; ?>" id="name-2">
              <?php
              }
            }
            else
            {
              echo "No items<br>";
            }
          ?>

            <div class="w-form-done">
              <div>Thank you! Your submission has been received!</div>
            </div>
            <div class="w-form-fail">
              <div>Oops! Something went wrong while submitting the form.</div>
            </div>
          </div>
        </div>
        <div class="div-block-174">
          <div class="form-block-4 w-form">
           
              <?php
          if($query_run=mysqli_query($con,$query))
            {
              $no_records=0;
              while($query_execute=mysqli_fetch_assoc($query_run))
              {
              ?>
              <input type="text" class="text-field-6 w-input" maxlength="256" name="dance_location" data-name="Name 3" value="<?php echo $query_execute['DanceDataset_Location']; ?>" id="name-3">
              <?php
              }
            }
            else
            {
              echo "No items<br>";
            }
          ?>
          
            <div class="w-form-done">
              <div>Thank you! Your submission has been received!</div>
            </div>
            <div class="w-form-fail">
              <div>Oops! Something went wrong while submitting the form.</div>
            </div>
          </div>
        </div>
        <div class="div-block-173">
          <div class="form-block-4 w-form">
            
              <?php
          if($query_run=mysqli_query($con,$query))
            {
              $no_records=0;
              while($query_execute=mysqli_fetch_assoc($query_run))
              {
              ?>
              <input type="text" class="text-field-6 w-input" maxlength="256" name="dance_date" data-name="Name 4" value="<?php echo $query_execute['DanceDataset_UploadDate']; ?>" id="name-4">
               <?php
              }
            }
            else
            {
              echo "No items<br>";
            }
          ?>
           
            <div class="w-form-done">
              <div>Thank you! Your submission has been received!</div>
            </div>
            <div class="w-form-fail">
              <div>Oops! Something went wrong while submitting the form.</div>
            </div>
          </div>
        </div>
        <div class="div-block-177">
          <?php
          if($query_run=mysqli_query($con,$query))
            {
              $no_records=0;
              while($query_execute=mysqli_fetch_assoc($query_run))
              {

          echo "<a href='admin-view.php?DanceDataset_ID=$query_execute[DanceDataset_ID]' class='button-35 w-button'>View</a>";

              }
            }
            else
            {
              echo "No items<br>";
            }
          ?>
        </div>
        <div class="div-block-178">
          <div class="w-form">
            
              <input type="submit" value="Submit" data-wait="Please wait..." class="submit-button-6 w-button" name="update">


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
  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.4.1.min.220afd743d.js" type="text/javascript" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="js/webflow.js" type="text/javascript"></script>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
</body>
</html>