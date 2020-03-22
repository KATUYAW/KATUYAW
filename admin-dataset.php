<?php
session_start();
$username=$_SESSION['username']; 
require('config2.php');
require 'connect.php';
?>
<!DOCTYPE html>
<!--  This site was created in Webflow. http://www.webflow.com  -->
<!--  Last Published: Tue Feb 25 2020 18:18:10 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="5e54e7dbb5662116d11dd1b8" data-wf-site="5e53de01dfb713809c1811a4">
<head>
  <meta charset="utf-8">
  <title>admin-dataset</title>
  <meta content="admin-dataset" property="og:title">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
  <link href="css/datasets_admin.css" rel="stylesheet" type="text/css">
  <link href="css/admin_datasets.css" rel="stylesheet" type="text/css">
  <link href="css/admin.datasets.css" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
  <script type="text/javascript">WebFont.load({  google: {    families: ["Oswald:200,300,400,500,600,700"]  }});</script>
  <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
  <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
  <link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon">
  <link href="images/webclip.png" rel="apple-touch-icon">
</head>
<body>
  <div style="opacity:1" class="profile-popup-wrap">
    <div class="div-block-74">
      <div class="div-block-75">
        <div class="div-block-76"><img src="images/User_icon_BLACK-01.png" width="66" alt="" class="image-9"></div>
        <div class="div-block-77">
          <div class="text-block-28"><?php echo $username; ?></div>
        </div>
        <div class="div-block-78">
          <div class="text-block-29">Landerxavier17@gmail.com</div>
        </div>
      </div>
      <div><a href="#" class="button-8 w-button">Manage your account</a></div>
      <div class="div-block-79"><a href="#" class="button11 w-button">Logout</a></div>
      <div class="div-block-80">
        <div class="div-block-81"><a href="#" class="link5">Privacy Policy</a></div>
        <div class="div-block-83">
          <div class="div-block-84"></div><a data-w-id="3a176f27-300d-5774-85f8-6076b640c1bd" href="#" class="button-9 w-button"></a></div>
        <div class="div-block-82"><a href="#" class="link-4">Terms and Condition</a></div>
      </div>
    </div>
  </div>
  <div style="opacity:1" class="edit-popup-wrap">
    <div class="edit-popup-section">
      <div class="edit-popup-wrapper">
        <div class="edit-popup-action">
          <div class="div-block-54">
            <!-- edit data -->
            <div class="text-block-26">EDIT</div>
          </div>
          <div class="div-block-55"></div>
        </div>
        <div class="div-block-57">
          <div class="div-block-58">
            <div class="text-block-27">DANCE</div>
          </div>
          <div class="div-block-58">
            <div class="text-block-27">TRIBE</div>
          </div>
          <div class="div-block-58">
            <div class="text-block-27">LOCATION</div>
          </div>
          <div class="div-block-58">
            <div class="text-block-27">DATE</div>
          </div>
          <div class="div-block-58"></div>
        </div>
        <div class="div-block-59">
          <div class="div-block-60">
            <div class="w-form">
             

             <input type="text" class="text-field-4 w-input" maxlength="256" name="name-5" data-name="Name 5" placeholder="Dance" id="name-5">


              <div class="w-form-done">
                <div>Thank you! Your submission has been received!</div>
              </div>
              <div class="w-form-fail">
                <div>Oops! Something went wrong while submitting the form.</div>
              </div>
            </div>
          </div>
          <div class="div-block-60">
            <div class="w-form">

             <input type="text" class="text-field-4 w-input" maxlength="256" name="name-5" data-name="Name 5" placeholder="Tribe" id="name-5">

              <div class="w-form-done">
                <div>Thank you! Your submission has been received!</div>
              </div>
              <div class="w-form-fail">
                <div>Oops! Something went wrong while submitting the form.</div>
              </div>
            </div>
          </div>
          <div class="div-block-60">
            <div class="w-form">

              <input type="text" class="text-field-4 w-input" maxlength="256" name="name-5" data-name="Name 5" placeholder="Location" id="name-5">

              <div class="w-form-done">
                <div>Thank you! Your submission has been received!</div>
              </div>
              <div class="w-form-fail">
                <div>Oops! Something went wrong while submitting the form.</div>
              </div>
            </div>
          </div>
          <div id="w-node-2fc90f80445b-d11dd1b8" class="div-block-60">
            <div class="w-form">

             <input type="text" class="text-field-4 w-input" maxlength="256" name="name-5" data-name="Name 5" placeholder="Date" id="name-5">

              <div class="w-form-done">
                <div>Thank you! Your submission has been received!</div>
              </div>
              <div class="w-form-fail">
                <div>Oops! Something went wrong while submitting the form.</div>
              </div>
            </div>
          </div>
        </div>

        <div class="div-block-69"><a data-w-id="257b3a28-8f70-f066-d3c6-2fc90f804470" href="admin-dataset.php" class="button-7 w-button"></a></div>
        <div class="div-block-62">
          <div class="add-popup-foot">
            <div class="div-block-63"><a href="#" class="button-3 w-button">Update</a><a href="#" class="button-5 w-button">Clear</a></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div style="opacity:1" class="add-popup-wrap">
    <div class="div-block-65">
      <div class="div-block-53">
        <div class="edit-popup-action">
          <div class="div-block-54">
            <div class="text-block-26">ADD</div>
          </div>
          <div class="div-block-55"></div>
        </div>
        <div class="div-block-57">
          <div class="div-block-58">
            <div class="text-block-27">DANCE</div>
          </div>
          <div class="div-block-58">
            <div class="text-block-27">TRIBE</div>
          </div>
          <div class="div-block-58">
            <div class="text-block-27">LOCATION</div>
          </div>
          <div class="div-block-58">
            <div class="text-block-27">DATE</div>
          </div>
        </div>
        <div class="div-block-59">
          <div class="div-block-60">
            <div class="w-form">

              <form id="email-form-3" name="email-form-3" data-name="Email Form 3" action="admin-dataset.php" method="post">
              <!-- add input -->
             <input type="text" class="text-field-4 w-input" maxlength="256" name="dance_name" data-name="Name 5" placeholder="Dance" id="name-5">
             <?php
              if (isset($_POST["add"]))
              {
              $dance_namae=$_POST["dance_name"];
              $sql = mysqli_query($mysqli, "INSERT INTO `dancedataset_table`(`DanceDataset_Name`) VALUES ('$dance_namae')");
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
          <div class="div-block-60">
            <div class="w-form">

              <form id="email-form-3" name="email-form-3" data-name="Email Form 3" action="admin-dataset.php" method="post">

              <input type="text" class="text-field-4 w-input" maxlength="256" name="tribe_name" data-name="Name 5" placeholder="Tribe" id="name-5">
               <?php
              if (isset($_POST["add"]))
              {
              $tribe_namae=$_POST["tribe_name"];
              $sql = mysqli_query($mysqli, "INSERT INTO `dancedataset_table`(`DanceDataset_Tribe`) VALUES ('$tribe_namae')");
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
          <div class="div-block-60">
            <div class="w-form">
             <form id="email-form-3" name="email-form-3" data-name="Email Form 3" action="admin-dataset.php" method="post">

             <input type="text" class="text-field-4 w-input" maxlength="256" name="dance_location" data-name="Name 5" placeholder="Location" id="name-5">
             <?php
              if (isset($_POST["add"]))
              {
              $dance_location=$_POST["dance_location"];
              $sql = mysqli_query($mysqli, "INSERT INTO `dancedataset_table`(`DanceDataset_Location`) VALUES ('$dance_location')");
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
          <div id="w-node-6d95d0c23a4d-d11dd1b8" class="div-block-60">
            <div class="w-form">

              <form id="email-form-3" name="email-form-3" data-name="Email Form 3" action="admin-dataset.php" method="post">
             
             <input type="text" class="text-field-4 w-input" maxlength="256" name="dance_date" data-name="Name 5" placeholder="Date" id="name-5">
              <?php
              if (isset($_POST["add"]))
              {
              $dance_date=$_POST["dance_date"];
              $sql = mysqli_query($mysqli, "INSERT INTO `dancedataset_table`(`DanceDataset_UploadDate`) VALUES ('$dance_date')");
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
        </div>
        <div class="div-block-69">
          <a data-w-id="822f09b9-8ab0-c1e3-5161-8ccee0d4f32a" href="admin-dataset.php" class="button-7 w-button"></a>
        </div>
        <div class="div-block-62">
          <div class="add-popup-foot">
            <div class="div-block-63"></div>
            <div class="div-block-63">
              <!-- add dance button -->
              <input name="add" type="submit" class="button-5 w-button">
                
              </input>
            </div>
            <div class="div-block-63"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="user-section">
    <div class="admin-sidenav-wrapper">
      <div class="admin-sidenav">
        <div data-collapse="medium" data-animation="default" data-duration="400" class="navbar-2 w-nav">
          <div class="div-block-33">
            <a href="#" class="w-nav-brand">
              <div><img src="images/icon1.png" width="62" srcset="images/icon1-p-500.png 500w, images/icon1-p-800.png 800w, images/icon1-p-1080.png 1080w, images/icon1.png 1428w" sizes="62px" alt="" class="image"></div>
            </a>
            <div class="div-block-35">
              <div class="text-block-21">KATUYAW</div>
            </div>
          </div>
          <div class="menu-button w-nav-button">
            <div class="w-icon-nav-menu"></div>
            <div class="container-3 w-container">
              <nav role="navigation" class="nav-menu-2 w-nav-menu">
                <div class="navlink-wrapper">
                  <div class="div-block-38">
                    <div class="text-block-23"></div>
                  </div>
                  <div class="div-block-39"><a href="#" class="link-2">Team</a></div>
                </div>
              </nav>
              <nav role="navigation" class="nav-menu-2 w-nav-menu">
                <div class="navlink-wrapper">
                  <div class="div-block-38">
                    <div class="text-block-23"></div>
                  </div>
                  <div class="div-block-39"><a href="#" class="link-2">Profile</a></div>
                </div>
              </nav>
              <nav role="navigation" class="nav-menu-2 w-nav-menu">
                <div class="navlink-wrapper">
                  <div class="div-block-38">
                    <div class="text-block-24"></div>
                  </div>
                  <div class="div-block-39"><a href="#" class="link-2">Datasets</a></div>
                </div>
              </nav>
            </div>
          </div>
          <div class="container-3 w-container">
            <nav role="navigation" class="nav-menu-2 w-nav-menu">
              <div class="navlink-wrapper">
                <div class="div-block-38">
                  <div class="text-block-23"></div>
                </div>
                <div class="div-block-39"><a href="#" class="link-2">Team</a></div>
              </div>
            </nav>
            <nav role="navigation" class="nav-menu-2 w-nav-menu">
              <div class="navlink-wrapper">
                <div class="div-block-38">
                  <div class="text-block-23"></div>
                </div>
                <div class="div-block-39"><a href="#" class="link-2">Profile</a></div>
              </div>
            </nav>
            <nav role="navigation" class="nav-menu-2 w-nav-menu">
              <div class="navlink-wrapper">
                <div class="div-block-38">
                  <div class="text-block-24"></div>
                </div>
                <div class="div-block-39"><a href="#" class="link-2">Datasets</a></div>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </div>
    <div class="div-block-46">
      <div class="topnav-wrap"><img src="images/User_icon_BLACK-01.png" width="35" id="w-node-dffca7155b2d-d11dd1b8" data-w-id="7d11d373-3227-d219-dcad-dffca7155b2d" alt="" class="image-9"></div>
      <div class="div-block-48"></div>
      <div class="div-block-49">
        <div class="datasets-page-wrapper-2">
          <div class="datasets-page-header">
            <div class="h2-2">Datasets</div>
            <div id="w-node-fb0925cc126c-d11dd1b8" class="div-block-66">
              <div class="div-block-68"><a data-w-id="4d9e364d-b41c-c846-c0b6-ecd7a26a1102" href="#" class="button-6 w-button"></a></div>
            </div>
          </div>
          <div class="w-layout-grid grid-2">
            <div class="text-block-17">DANCE</div>
            <div class="text-block-17">TRIBE</div>
            <div class="text-block-17">LOCATION</div>
            <div class="text-block-17">DATE</div>
            <div class="text-block-17">ACTION</div>
          </div>
          <div class="title-column-2">
            <div class="form-block w-form">

              <input type="text" class="text-field-2 w-input" maxlength="256" name="name" data-name="Name" placeholder="Dance Title" id="name">

              <div class="w-form-done">
                <div>Thank you! Your submission has been received!</div>
              </div>
              <div class="w-form-fail">
                <div>Oops! Something went wrong while submitting the form.</div>
              </div>
            </div>
            <div class="form-block w-form">
             
             <input type="text" class="text-field-2 w-input" maxlength="256" name="name-2" data-name="Name 2" placeholder="Tribe Name" id="name-2">

              <div class="w-form-done">
                <div>Thank you! Your submission has been received!</div>
              </div>
              <div class="w-form-fail">
                <div>Oops! Something went wrong while submitting the form.</div>
              </div>
            </div>
            <div class="form-block w-form">
              
              <input type="text" class="text-field-2 w-input" maxlength="256" name="name-3" data-name="Name 3" placeholder="Location" id="name-3">

              <div class="w-form-done">
                <div>Thank you! Your submission has been received!</div>
              </div>
              <div class="w-form-fail">
                <div>Oops! Something went wrong while submitting the form.</div>
              </div>
            </div>
            <div class="form-block w-form">
             
             <input type="text" class="text-field-2 w-input" maxlength="256" name="name-4" data-name="Name 4" placeholder="Date Uploaded" id="name-4">

              <div class="w-form-done">
                <div>Thank you! Your submission has been received!</div>
              </div>
              <div class="w-form-fail">
                <div>Oops! Something went wrong while submitting the form.</div>
              </div>
            </div>
            <div class="form-block w-form">
             
             <input type="text" class="text-field-2 w-input" maxlength="256" name="name-4" data-name="Name 4" placeholder="vissew" id="name-4">

              <div class="w-form-done">
                <div>Thank you! Your submission has been received!</div>
              </div>
              <div class="w-form-fail">
                <div>Oops! Something went wrong while submitting the form.</div>
              </div>
            </div>
          </div>
          <div class="div-block-24">
            <div class="title-column">
              <div class="div-block-21">
                <!-- ouput data -->
                <?php
                 $query="SELECT * FROM `dancedataset_table` ORDER BY `DanceDataset_ID` ASC";
                if($query_run=mysqli_query($con,$query))
                {
                 while($query_execute=mysqli_fetch_assoc($query_run))
                {
                ?>
                <div class="text-block-20"><?php echo $query_execute['DanceDataset_Name']; ?></div>
                <?php
                  }
                  }
                  else
                  {
                  echo "Query Not Executed<br>";
                  }
                  ?>
              </div>
              <div class="div-block-21">
                <?php
                 $query="SELECT * FROM `dancedataset_table` ORDER BY `DanceDataset_ID` ASC";
                if($query_run=mysqli_query($con,$query))
                {
                 while($query_execute=mysqli_fetch_assoc($query_run))
                {
                ?>
                <div class="text-block-20"><?php echo $query_execute['DanceDataset_Tribe']; ?></div>
                 <?php
                  }
                  }
                  else
                  {
                  echo "Query Not Executed<br>";
                  }
                  ?>
              </div>
              <div class="div-block-21">
                <?php
                 $query="SELECT * FROM `dancedataset_table` ORDER BY `DanceDataset_ID` ASC";
                if($query_run=mysqli_query($con,$query))
                {
                 while($query_execute=mysqli_fetch_assoc($query_run))
                {
                ?>
                <div class="text-block-20"><?php echo $query_execute['DanceDataset_Location']; ?></div>
                 <?php
                  }
                  }
                  else
                  {
                  echo "Query Not Executed<br>";
                  }
                  ?>
              </div>
              <!-- output date -->
              <div class="text-block-20">Date</div>

              <div class="div-block-28">
               
                <div class="div-block-61">
                   <?php
                $query="SELECT * FROM `dancedataset_table` ORDER BY `DanceDataset_ID` ASC";
                if($query_run=mysqli_query($con,$query))
                {
                  
                while($query_execute=mysqli_fetch_assoc($query_run))
                {
                  
                  echo "<a href='KATUYAW_admin_individual_dance_page.php?DanceDataset_ID=$query_execute[DanceDataset_ID]' class='link-3'>view</a>";
                  
                    }
                    }
                    else
                   {
                  echo "Query Not Executed<br>";
                    }
                    ?>
                </div>
                <div class="div-block-72">
                  <!-- edit button -->
                   <?php
                $query="SELECT * FROM `dancedataset_table` ORDER BY `DanceDataset_ID` ASC";
                if($query_run=mysqli_query($con,$query))
                {
                  
                while($query_execute=mysqli_fetch_assoc($query_run))
                {

                  echo "<a data-w-id='5a3e4cb1-a8be-b69f-21f5-856c4dd71924' href='DanceDataset_ID=$query_execute[DanceDataset_ID]' class='button9 w-button'></a>";

                    }
                    }
                    else
                   {
                  echo "Query Not Executed<br>";
                    }
                    ?>
                  <!-- edit button -->
                </div>
                <div class="div-block-73"><a href="#" class="button10 w-button"></a></div>
              </div>
             
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.4.1.min.220afd743d.js" type="text/javascript" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="js/dataset_admin.js" type="text/javascript"></script>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
</body>
</html>