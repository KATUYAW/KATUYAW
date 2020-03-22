<?php
session_start();
$username=$_SESSION['username'];
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
$query="SELECT * FROM `dancedataset_table` WHERE `DanceDataset_Status`= 'Accepted' ORDER BY `DanceDataset_ID` ASC";

$record_no_stop=0;
?>
<!DOCTYPE html>
<!--  This site was created in Webflow. http://www.webflow.com  -->
<!--  Last Published: Sun Mar 01 2020 22:46:45 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="5e5bd6f375d7b2837821f303" data-wf-site="5e59e63c9e288f8a09e23975">
<head>
  <meta charset="utf-8">
  <title>User-Datasets</title>
  <meta content="User-Datasets" property="og:title">
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
        <div class="div-block-31"><img src="images/FINAL-LOGO3.png" srcset="images/FINAL-LOGO3-p-500.png 500w, images/FINAL-LOGO3-p-800.png 800w, images/FINAL-LOGO3-p-1080.png 1080w, images/FINAL-LOGO3-p-1600.png 1600w, images/FINAL-LOGO3-p-2000.png 2000w, images/FINAL-LOGO3-p-2600.png 2600w, images/FINAL-LOGO3.png 3000w" sizes="139.99566650390625px" alt="" class="image-16"></div>
      </div>
      <div class="user-info-wrapper">
        <div class="user-profile-icon-container"><img src="profilepic/DP1.jpeg" alt="" class="image-15"></div>
        <div class="div-block-14">
          <div class="text-block-44"><?php echo $username ?></div>
        </div>
        <div class="div-block-15">
          <div class="text-block-43"></div>
        </div>
        <div class="div-block-16">
          <a href="index.html" class="div-block-83"></a>
        </div>
      </div>
      <div class="div-block-18"></div>
      <div class="user-datasets-sidenav">
        <div class="div-block-19">
          <div class="div-block-21"></div>
        </div>
        <div class="div-block-20"><a href="#" class="user-dataset-navlink">Home</a></div>
      </div>
      <div class="user-datasets-sidenav">
        <div class="div-block-116">
          <div class="text-block-10"></div>
        </div>
        <div class="div-block-117"><a href="#" class="link01">Profile</a></div>
      </div>
      <div class="div-block-118">
        <div class="div-block-23">
          <div class="text-block-8"></div>
        </div>
        <div class="div-block-24"><a href="user-requests.php?" class="link-7">Request</a></div>
      </div>
      <div class="sidenav-navlink-datasets">
        <div class="div-block-27">
          <div class="text-block-12"></div>
        </div>
        <div class="div-block-119"><a href="user-datasets.php?" class="link-7">Datasets</a></div>
      </div>
    </div>
    <div class="main-user-content">
      <div class="div-block-34"></div>
      <div class="div-block-35"></div>
      <div class="search-rowindicator-container-2">
        <div class="div-block-36">
          <div class="div-block-37">
            <!-- no of records per page input -->
            <form action="user-datasets.php" method="post">
            <input name="input_no_records" class="row-indicator-menu"></input>
             <?php
            if (isset($_POST["input_no_records"]))
            {
              $record_no_stop=$_POST["input_no_records"];
            }
            ?>
          </form>
            <!-- no of records per page input -->
          </div>
          <div id="w-node-d86c1c0ef90d-7821f303" class="div-block-38">
            <div class="div-block-40">
              <div class="form-block-2 w-form">
                <form id="email-form" name="email-form" data-name="Email Form" class="form-2"><input type="submit" value="" data-wait="Please wait..." class="submit-button-3 w-button"></form>
              </div>
            </div>
            <div class="div-block-41">
              <div class="form-block-3 w-form">
                <form id="email-form-2" name="email-form-2" data-name="Email Form 2" class="form-3"><input type="submit" value="" data-wait="Please wait..." class="submit-button-4 w-button"></form>
              </div>
            </div>
          </div>
          <div class="div-block-42">
            <div class="text-block-15">No. of records per page</div>
          </div>
        </div>
        <div class="div-block-43">
          <div class="div-block-35"></div>
          <div class="div-block-45">
            <div class="w-form">
              <!-- search input -->
              <form id="email-form-3" name="email-form-3" data-name="Email Form 3" action="user-datasets.php" method="post">
                <input type="text" class="text-field-3 w-input" maxlength="256" name="search" data-name="Name" placeholder="Search here" id="name">
                <?php
                if (isset($_POST["search"]))
                 {
                  $value=$_POST["search"];
                  $query="SELECT * FROM `dancedataset_table` WHERE `DanceDataset_Status`= 'Accepted' AND CONCAT(`DanceDataset_Name`,`DanceDataset_Tribe`,`DanceDataset_Location`,`DanceDataset_UploadDate`) LIKE '%$value%' LIMIT 0,30";
                  }
                  ?>
              </form>
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
      <div class="div-block-35"></div>
      <div class="div-block-35">
        <div class="div-block-102">
          <div class="div-block-120">
            <div class="text-block-54">DATASETS</div>
          </div>
          <div class="div-block-121"><a href="add-universal.php?" class="button-20 w-button">UPLOAD</a></div>
        </div>
        <div class="div-block-103"><a href="#" class="button-12 w-button">UPLOAD</a></div>
      </div>
      <div class="div-block-35"></div>
      <div class="table-titles-container">
        <div class="div-block-35">
          <div class="text-block-20">DANCE</div>
        </div>
        <div class="div-block-35">
          <div class="text-block-20">TRIBE</div>
        </div>
        <div class="div-block-35">
          <div class="text-block-20">LOCATION</div>
        </div>
        <div class="div-block-35">
          <div class="text-block-20">DATE</div>
        </div>
        <div class="div-block-35">
          <div class="text-block-20">ACTION</div>
        </div>
        <div class="div-block-35"></div>
      </div>
      <div class="div-block-57">
        <div class="div-block120">
          <?php
          if($query_run=mysqli_query($con,$query))
            {
              $no_records=0;
              while($query_execute=mysqli_fetch_assoc($query_run))
              {
          ?>
          <div class="text-block-50"><?php echo $query_execute['DanceDataset_Name']; ?></div>
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
        <div class="div-block120">
          <?php
          if($query_run=mysqli_query($con,$query))
            {
              $no_records=0;
              while($query_execute=mysqli_fetch_assoc($query_run))
              {
          ?>
          <div class="text-block-50"><?php echo $query_execute['DanceDataset_Tribe']; ?></div>
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
        <div class="div-block120">
          <?php
          if($query_run=mysqli_query($con,$query))
            {
              $no_records=0;
              while($query_execute=mysqli_fetch_assoc($query_run))
              {
          ?>
          <div class="text-block-50"><?php echo $query_execute['DanceDataset_Location']; ?></div>
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
        <div class="div-block120">
           <?php
          if($query_run=mysqli_query($con,$query))
            {
              $no_records=0;
              while($query_execute=mysqli_fetch_assoc($query_run))
              {
          ?>
          <div class="text-block-50"><?php echo $query_execute['DanceDataset_UploadDate']; ?></div>
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
        <div class="div-block-122">
          <?php
          if($query_run=mysqli_query($con,$query))
            {
              $no_records=0;
              while($query_execute=mysqli_fetch_assoc($query_run))
              {
                echo "<a href='user-dataset-view.php?DanceDataset_ID=$query_execute[DanceDataset_ID]' class='link-8'>VIEW</a>";
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
  </div>
  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.4.1.min.220afd743d.js" type="text/javascript" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="js/webflow.js" type="text/javascript"></script>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
</body>
</html>