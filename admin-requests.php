<?php
session_start();
$username=$_SESSION['admin_username'];
if ($_SESSION['loginned_check']==True)
{
  echo"";
}
else
{
  header("location: index.html");
}
require('config2.php');
require 'connect.php';
$query="SELECT * FROM `dancedataset_table` WHERE `DanceDataset_Status`= 'Pending' ORDER BY `DanceDataset_ID` ASC";
$record_no_stop=0;
?>
<!DOCTYPE html>
<!--  This site was created in Webflow. http://www.webflow.com  -->
<!--  Last Published: Mon Mar 02 2020 21:18:25 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="5e5bf114c9fe8434c09d2031" data-wf-site="5e59e63c9e288f8a09e23975">
<head>
  <meta charset="utf-8">
  <title>Admin-Requests</title>
  <meta content="Admin-Requests" property="og:title">
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
  <div class="body-wrapper">
    <div class="main-user-sidnav">
      <div class="logo-info-container">
        <div class="div-block-31"><img src="images/FINAL-LOGO3.png" srcset="images/FINAL-LOGO3-p-500.png 500w, images/FINAL-LOGO3-p-800.png 800w, images/FINAL-LOGO3-p-1080.png 1080w, images/FINAL-LOGO3-p-1600.png 1600w, images/FINAL-LOGO3-p-2000.png 2000w, images/FINAL-LOGO3-p-2600.png 2600w, images/FINAL-LOGO3.png 3000w" sizes="139.99566650390625px" alt="" class="image-16"></div>
      </div>
      <div class="user-info-wrapper">
        <div class="user-profile-icon-container"><img src="images/Profile01-512.png" alt="" class="image-15"></div>
        <div class="div-block-14">
          <div class="text-block-44"><?php echo $username ?></div>
        </div>
        <div class="div-block-15">
          <div class="text-block-43"></div>
        </div>
        <div class="div-block-16">
          <a href="KATUYAW_admin_login.html" class="div-block-83"></a>
        </div>
      </div>
      <div class="div-block-18"></div>
      <div class="sidenav-home-container">
        <div class="div-block-19">
          <div class="div-block-21"></div>
        </div>
        <div class="div-block-126"><a href="#" class="user-rquests-home-navlink-2">Home</a></div>
      </div>
      <div class="sidenav-profile-container">
        <div class="div-block-26">
          <div class="text-block-10"></div>
        </div>
        <div class="div-block-124"><a href="#" class="user-requests-profile-navlink-2">Profile</a></div>
      </div>
      <div class="sidenav-requests-container">
        <div class="div-block-23">
          <div class="text-block-8"></div>
        </div>
        <div class="div-block-126"><a href="admin-requests.php?" class="user-requests-upload-navlink-2">Requests<br>‍</a></div>
      </div>
      <div class="sidenav-datasets-container">
        <div class="div-block-29">
          <div class="text-block-12"></div>
        </div>
        <div class="div-block-126"><a href="admin-datasets.php?" class="user-requests-datasets-navlink-2">Datasets</a></div>
      </div>
    </div>
    <div class="main-user-content">
      <div></div>
      <div class="div-block-35"></div>
      <div class="search-rowindicator-container-2">
        <div class="div-block-36">
          <div class="div-block-37">
            <form action="admin-requests.php" method="post">

            <input name="input_no_records" class="row-indicator-menu"></input>
            <?php
            if (isset($_POST["input_no_records"]))
            {
              $record_no_stop=$_POST["input_no_records"];
            }
            ?>
          </div>
          <div id="w-node-6914da185cdd-c09d2031" class="div-block-38">
            <div class="div-block-40">
              <div class="form-block-2 w-form">
                <form id="email-form" name="email-form" data-name="Email Form" class="form-2"><input type="submit" value="" data-wait="Please wait..." class="submit-button-3 w-button"></form>
                <div class="w-form-done">
                  <div>Thank you! Your submission has been received!</div>
                </div>
                <div class="w-form-fail">
                  <div>Oops! Something went wrong while submitting the form.</div>
                </div>
              </div>
            </div>
            <div class="div-block-41">
              <div class="form-block-3 w-form">
                <form id="email-form-2" name="email-form-2" data-name="Email Form 2" class="form-3"><input type="submit" value="" data-wait="Please wait..." class="submit-button-4 w-button"></form>
                <div class="w-form-done">
                  <div>Thank you! Your submission has been received!</div>
                </div>
                <div class="w-form-fail">
                  <div>Oops! Something went wrong while submitting the form.</div>
                </div>
              </div>
            </div>
          </div>
          <div class="div-block-42">
            <div class="text-block-15">No. of records per page</div>
          </div>
        </div>
        <div class="div-block-43">
          <div class="div-block-77"></div>
          <div class="div-block-103">
            <div class="w-form">
              <form id="email-form-3" name="email-form-3" data-name="Email Form 3" action="admin-requests.php" method="post">
                <input type="text" class="text-field-3 w-input" maxlength="256" name="search" data-name="Name" placeholder="Search here" id="name">
              <?php
                if (isset($_POST["search"]))
                 {
                  $value=$_POST["search"];
                  $query="SELECT * FROM `dancedataset_table` WHERE `DanceDataset_Status`= 'Pending' AND CONCAT(`DanceDataset_Name`,`DanceDataset_Tribe`,`DanceDataset_Location`,`DanceDataset_UploadDate`) LIKE '%$value%' LIMIT 0,30";
                  }
                  ?></form>
              <div class="w-form-done">
                <div>Thank you! Your submission has been received!</div>
              </div>
              <div class="w-form-fail">
                <div>Oops! Something went wrong while submitting the form.</div>
              </div>
            </div>
          </div>
          <div class="div-block-46">
            <div class="text-block-37"></div>
          </div>
        </div>
      </div>
      <div class="div-block-77"></div>
      <div class="div-block-77">
        <div class="text-block-17">DATASETS REQUEST</div>
      </div>
      <div class="div-block-77">
        <div class="div-block-104">
          <div class="div-block-77">
            <div class="text-block-20">DANCE</div>
          </div>
          <div class="div-block-77">
            <div class="text-block-20">TRIBE</div>
          </div>
          <div class="div-block-77">
            <div class="text-block-20">LOCATION</div>
          </div>
          <div class="div-block-77">
            <div class="text-block-20">DATE</div>
          </div>
          <div class="div-block-77">
            <div class="text-block-20">ACTION</div>
          </div>
        </div>
      </div>
      <div class="div-block-105">
        <div class="div-block-77">
          <?php
          if($query_run=mysqli_query($con,$query))
            {
              $no_records=0;
              while($query_execute=mysqli_fetch_assoc($query_run))
              {
          ?>
          <div class="text-block-34"><?php echo $query_execute['DanceDataset_Name']; ?></div>
          <?php
          $no_records++;
                if ($no_records==$record_no_stop)
                {
                  break;
                }
               
              }
            }
            else
            {
              echo "No items<br>";
            }
          ?>
        </div>
        <div class="div-block-77">
          <?php
          if($query_run=mysqli_query($con,$query))
            {
              $no_records=0;
              while($query_execute=mysqli_fetch_assoc($query_run))
              {
          ?>
          <div class="text-block-34"><?php echo $query_execute['DanceDataset_Tribe']; ?></div>
          <?php
          $no_records++;
                if ($no_records==$record_no_stop)
                {
                  break;
                }
               
              }
            }
            else
            {
              echo "No items<br>";
            }
          ?>
        </div>
        <div class="div-block-77">
           <?php
          if($query_run=mysqli_query($con,$query))
            {
              $no_records=0;
              while($query_execute=mysqli_fetch_assoc($query_run))
              {
          ?>
          <div class="text-block-34"><?php echo $query_execute['DanceDataset_Location']; ?></div>
          <?php
          $no_records++;
                if ($no_records==$record_no_stop)
                {
                  break;
                }
               
              }
            }
            else
            {
              echo "No items<br>";
            }
          ?>
        </div>
        <div class="div-block-77">
          <?php
          if($query_run=mysqli_query($con,$query))
            {
              $no_records=0;
              while($query_execute=mysqli_fetch_assoc($query_run))
              {
          ?>
          <div class="text-block-34"><?php echo $query_execute['DanceDataset_UploadDate']; ?></div>
           <?php
           $no_records++;
                if ($no_records==$record_no_stop)
                {
                  break;
                }
               
              }
            }
            else
            {
              echo "No items<br>";
            }
          ?>
        </div>
        <div>
          <?php
          if($query_run=mysqli_query($con,$query))
            {
              $no_records=0;
              while($query_execute=mysqli_fetch_assoc($query_run))
              {

          echo "<a href='acceptor.php?DanceDataset_ID=$query_execute[DanceDataset_ID]' class='button-32 w-button'>ACCEPT</a>";
          $no_records++;
                if ($no_records==$record_no_stop)
                {
                  break;
                }

               
              }
            }
            else
            {
              echo "No items<br>";
            }
          ?>
        </div>

        <div>
          <?php
          if($query_run=mysqli_query($con,$query))
            {
              $no_records=0;
              while($query_execute=mysqli_fetch_assoc($query_run))
              {

          echo "<a href='deleter.php?DanceDataset_ID=$query_execute[DanceDataset_ID]' class='button-33 w-button'>DECLINE</a>";
          $no_records++;
                if ($no_records==$record_no_stop)
                {
                  break;
                }
               
              }
            }
            else
            {
              echo "No items<br>";
            }
          ?>
        </div>

      </div>
    </div>
    <div class="edit-popup-wrap">
      <div class="edit-popup-section">
        <div class="edit-popup-wrapper">
          <div class="edit-popup-action">
            <div class="div-block-35">
              <div class="text-block-30">EDIT</div>
            </div>
            <div class="div-block-74"></div>
          </div>
          <div class="div-block-68">
            <div class="div-block-75">
              <div class="text-block-29">DANCE</div>
            </div>
            <div class="div-block-75">
              <div class="text-block-29">TRIBE</div>
            </div>
            <div class="div-block-75">
              <div class="text-block-29">LOCATION</div>
            </div>
            <div class="div-block-75">
              <div class="text-block-29">DATE</div>
            </div>
            <div class="div-block-75"></div>
          </div>
          <div class="div-block-69">
            <div class="div-block-72">
              <div class="w-form">
                <form id="email-form-3" name="email-form-3" data-name="Email Form 3"><input type="text" class="text-field-4 w-input" maxlength="256" name="name-5" data-name="Name 5" placeholder="Dance" id="name-5"></form>
                <div class="w-form-done">
                  <div>Thank you! Your submission has been received!</div>
                </div>
                <div class="w-form-fail">
                  <div>Oops! Something went wrong while submitting the form.</div>
                </div>
              </div>
            </div>
            <div class="div-block-72">
              <div class="w-form">
                <form id="email-form-3" name="email-form-3" data-name="Email Form 3"><input type="text" class="text-field-4 w-input" maxlength="256" name="name-5" data-name="Name 5" placeholder="Tribe" id="name-5"></form>
                <div class="w-form-done">
                  <div>Thank you! Your submission has been received!</div>
                </div>
                <div class="w-form-fail">
                  <div>Oops! Something went wrong while submitting the form.</div>
                </div>
              </div>
            </div>
            <div class="div-block-72">
              <div class="w-form">
                <form id="email-form-3" name="email-form-3" data-name="Email Form 3"><input type="text" class="text-field-4 w-input" maxlength="256" name="name-5" data-name="Name 5" placeholder="Location" id="name-5"></form>
                <div class="w-form-done">
                  <div>Thank you! Your submission has been received!</div>
                </div>
                <div class="w-form-fail">
                  <div>Oops! Something went wrong while submitting the form.</div>
                </div>
              </div>
            </div>
            <div id="w-node-6914da185d98-c09d2031" class="div-block-72">
              <div class="w-form">
                <form id="email-form-3" name="email-form-3" data-name="Email Form 3"><input type="text" class="text-field-4 w-input" maxlength="256" name="name-5" data-name="Name 5" placeholder="Date" id="name-5"></form>
                <div class="w-form-done">
                  <div>Thank you! Your submission has been received!</div>
                </div>
                <div class="w-form-fail">
                  <div>Oops! Something went wrong while submitting the form.</div>
                </div>
              </div>
            </div>
          </div>
          <div class="div-block-71"><a href="#" class="button-7 w-button"></a></div>
          <div class="div-block-73">
            <div class="add-popup-foot">
              <div class="div-block-70"><a href="#" class="button-3 w-button">Update</a><a href="#" class="button-5 w-button">Clear</a></div>
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