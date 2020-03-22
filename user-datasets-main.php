<?
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
?>
<!DOCTYPE html>
<!--  This site was created in Webflow. http://www.webflow.com  -->
<!--  Last Published: Wed Feb 26 2020 03:43:10 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="5e5561fddead0251c42966a4" data-wf-site="5e53de01dfb713809c1811a4">
<head>
  <meta charset="utf-8">
  <title>user-datasets-main</title>
  <meta content="user-datasets-main" property="og:title">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
  <link href="css/user_dataset.css" rel="stylesheet" type="text/css">
  <link href="css/dataset_user.css" rel="stylesheet" type="text/css">
  <link href="css/dataset.user.css" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
  <script type="text/javascript">WebFont.load({  google: {    families: ["Oswald:200,300,400,500,600,700","Open Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic"]  }});</script>
  <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
  <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
  <link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon">
  <link href="images/webclip.png" rel="apple-touch-icon">
</head>
<body>
  <div style="opacity:1" class="profile-popup-wrap">
    <div class="div-block-74">
      <div class="div-block-75">
        <div class="div-block-76"><img src="images/User_icon_BLACK-01.png" width="66" alt=""></div>
        <div class="div-block-77">
          <div class="text-block-28">Lander Xavier Ignacio</div>
        </div>
        <div class="div-block-48">
          <div class="text-block-29">justineb55salandanan@gmail.com</div>
        </div>
      </div>
      <div><a href="#" class="button-8 w-button">Manage your account</a></div>
      <div class="div-block-79"><a href="KATUYAW_privacy_terms_conditions.html class="button11 w-button">Logout</a></div>
      <div class="div-block-80">
        <div class="div-block-48">
          <a href="KATUYAW_privacy_terms_conditions.html" >Privacy Policy</a></div>
        <div class="div-block-83">
          <div class="div-block-48"></div><a href="user-datasets-main.php" class="button-9 w-button"></a></div>
        <div class="div-block-48"><a href="KATUYAW_privacy_terms_conditions.html?" class="link-4">Terms and Condition</a></div>
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
            <div class="div-block-48">
              <div class="text-block-21">KATUYAW</div>
            </div>
          </div>
          <div class="menu-button w-nav-button">
            <div class="w-icon-nav-menu"></div>
            <div class="container-3 w-container">
              <nav role="navigation" class="nav-menu-2 w-nav-menu">
                <div class="navlink-wrapper">
                  <div class="div-block-56">
                    <div class="text-block-23"></div>
                  </div>
                  <div class="div-block-39"><a href="#" class="link-2">Team</a></div>
                </div>
              </nav>
              <nav role="navigation" class="nav-menu-2 w-nav-menu">
                <div class="navlink-wrapper">
                  <div class="div-block-56">
                    <div class="text-block-23"></div>
                  </div>
                  <div class="div-block-39"><a href="#" class="link-2">Profile</a></div>
                </div>
              </nav>
              <nav role="navigation" class="nav-menu-2 w-nav-menu">
                <div class="navlink-wrapper">
                  <div class="div-block-56">
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
                <div class="div-block-56">
                  <div class="text-block-23"></div>
                </div>
                <div class="div-block-39"><a href="#" class="link-2">Contact Us</a></div>
              </div>
            </nav>
            <nav role="navigation" class="nav-menu-2 w-nav-menu">
              <div class="navlink-wrapper">
                <div class="div-block-56">
                  <div class="text-block-23"></div>
                </div>
                <div class="div-block-39"><a href="user-profile.php?" class="link-2">Profile</a></div>
              </div>
            </nav>
            <nav role="navigation" class="nav-menu-2 w-nav-menu">
              <div class="navlink-wrapper">
                <div class="div-block-56">
                  <div class="text-block-24"></div>
                </div>
                <div class="div-block-39"><a href="user-datasets-main.php?" class="link-2">Datasets</a></div>
              </div>
            </nav>
            <nav role="navigation" class="nav-menu-2 w-nav-menu">
              <div class="navlink-wrapper">
                <div class="div-block-56">
                  <div class="text-block-24">+</div>
                </div>
                <div class="div-block-39"><a href="KATUYAW_dance_dataset_registration.php?" class="link-2">Add</a></div>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </div>
    <div class="div-block-46">
      <div class="topnav-wrap"><img src="images/User_icon_BLACK-01.png" width="35" id="w-node-81bab1f96566-c42966a4" data-w-id="2d3c34b1-0545-4e61-60ea-81bab1f96566" alt="" class="image-13"></div>
      <div class="div-block-48"></div>
      <div class="div-block-49">
        <div class="datasets-page-wrapper-2">
          <div>
            <div class="h2-2">Datasets</div>
            <div id="w-node-81bab1f9656d-c42966a4" class="div-block-66">
              <div class="datasets-page-header">
                <div class="h2-2">Datasets</div>
                <div id="w-node-3bed6717db8c-c42966a4" class="div-block-66">
                  <div class="div-block-68"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="w-layout-grid grid-2">
          	<form action="user-datasets-main.php" method="post">
          	<input type="text" name="search">
          	<input type="submit" name="pindot">


            <div class="text-block-17">DANCE</div>
            <div class="text-block-17">TRIBE</div>
            <div class="text-block-17">LOCATION</div>
            <div class="text-block-17">DATE</div>
            <div class="text-block-17">ACTION</div>
          </div>
          <div class="div-block-24">
            <div class="title-column">
              <div class="div-block-21">
                 <?php
                 require('config2.php');
                require 'connect.php';
                 $query="SELECT * FROM `dancedataset_table` WHERE `DanceDataset_Status`= 'Accepted' ORDER BY `DanceDataset_ID` ASC";
                 if (isset($_POST["pindot"]))
                 {
                 	$balyu=$_POST["search"];
                 	$query="SELECT * FROM `dancedataset_table` WHERE `DanceDataset_Status`= 'Accepted' AND CONCAT(`DanceDataset_Name`) LIKE '%$balyu%' LIMIT 0,30";
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
                 }
                 else
                 {
               
           
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
              }

                  ?>
              </div>
              <div class="div-block-21">
                <?php
                require 'connect.php';
                 $query="SELECT * FROM `dancedataset_table` WHERE `DanceDataset_Status`= 'Accepted' ORDER BY `DanceDataset_ID` ASC";
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
                require 'connect.php';
                 $query="SELECT * FROM `dancedataset_table` WHERE `DanceDataset_Status`= 'Accepted' ORDER BY `DanceDataset_ID` ASC";
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
              <div class="text-block-20">Date</div>
              <div class="div-block-28">
                <div class="div-block-48">
                  <?php
                require 'connect.php';
                 $query="SELECT * FROM `dancedataset_table` WHERE `DanceDataset_Status`= 'Accepted' ORDER BY `DanceDataset_ID` ASC";
                if($query_run=mysqli_query($con,$query))
                {
                 while($query_execute=mysqli_fetch_assoc($query_run))
                {
                  echo "<a href='KATUYAW_individual_dance_page.php?DanceDataset_ID=$query_execute[DanceDataset_ID]' class='link-3'>view</a>";
                }
                  }
                  else
                  {
                  echo "Query Not Executed<br>";
                  }
                  ?>
                </div>
                <div class="div-block-48"></div>
                <div class="div-block-48"></div>
              </div>
            </div>
          </div>
          <div style="opacity:1" class="profile-popup-wrap">
            <div class="div-block-74">
              <div class="div-block-75">
                <div class="div-block-76"><img src="images/User_icon_BLACK-01.png" width="66" alt=""></div>
                <div class="div-block-77">
                  <!-- user profile popup -->
                  <div class="text-block-28">Lander Xavier Ignacio</div>
                </div>
                <div class="div-block-48">
                  <div class="text-block-29">Landerxavier17@gmail.com</div>
                </div>
              </div>
              <div><a href="user-profile.php?" class="button-8 w-button">Manage your account</a></div>
              <div class="div-block-79">
                <a href="index.html" class="button11 w-button">Logout</a></div>
              <div class="div-block-80">
                <div class="div-block-48"><a href="KATUYAW_privacy_terms_conditions.html" class="link5">Privacy Policy</a></div>
                <div class="div-block-83">
                  <div class="div-block-48"></div><a data-w-id="398301d9-4ffe-8d36-f1b9-9697f6ba75bd" href="user-datasets-main.php?" class="button-9 w-button"></a></div>
                <div class="div-block-48"><a href="KATUYAW_privacy_terms_conditions.html" class="link-4">Terms and Condition</a></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.4.1.min.220afd743d.js" type="text/javascript" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="js/webflow.js" type="text/javascript"></script>
</body>
</html>