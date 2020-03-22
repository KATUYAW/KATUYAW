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
function formatBytes($size, $precision = 2)
{
    $base = log($size, 1024);
    $suffixes = array('', 'K', 'M', 'G', 'T');   

    return round(pow(1024, $base - floor($base)), $precision) .' '. $suffixes[floor($base)];
}
require('config.php');
$host = 'localhost';
$user = 'root';
$password = '';
$dbase = 'katuyaw';

$con = mysqli_connect($host, $user, $password, $dbase);
mysqli_select_db($con, "katuyaw");
if(isset($_POST["add_acc"]))
  {
  //papers
    $file_paper=$_FILES["dance_papers"]["name"];
    $tmp_name_paper=$_FILES["dance_papers"]["tmp_name"];
    $path_paper="paper/".$file_paper;
    $file1_paper=explode(".",$file_paper);
    $ext_paper=$file1_paper[1];
    $allowed_paper=array("doc","docs","docx","pdf");
    if(in_array($ext_paper,$allowed_paper))
    {
      move_uploaded_file($tmp_name_paper,$path_paper);
    }
    else
    {
      echo "<b>Invalid File Format!<br>Allowed File format:</b> rar, zip, csv, bvh, FBX, 3d";
      exit();
    }

  //dancedatasetfile
    $file=$_FILES["file"]["name"];
    $size=$_FILES["file"]["size"];
    if ($size > 104857600)
    {
      echo "File Size Too Big<br>Allowed File Size: 100 Megabytes";
    }
    $size=formatBytes($size);
    $tmp_name=$_FILES["file"]["tmp_name"];
    $path="upload/".$file;
    $file1=explode(".",$file);
    $ext=$file1[1];
    $allowed=array("rar","zip","csv","bvh","FBX","3d","doc","docs","docx","pdf");
    if(in_array($ext,$allowed))
    {
      move_uploaded_file($tmp_name,$path);
      $sql="INSERT INTO `dancedataset_table`(`DanceDataset_Status`,`DanceDataset_Name`,`DanceDataset_Description`,`DanceDataset_Location`, `DanceDataset_Owner`,`DanceDataset_FileLink`,`DanceDataset_Filesize`,`DanceDataset_Papers`,`DanceDataset_Tribe`,`DanceDataset_UploadDate`) VALUES ('Pending',?,?,?,?,'$file','$size','$file_paper',?,?)";
    }
    else
    {
      echo "<b>Invalid File Format!<br>Allowed File format:</b> rar, zip, csv, bvh, FBX, 3d";
      exit();
    }
    $dance_name = $_POST['dance_name'];
    $dance_description = $_POST['dance_description'];
    $dance_location = $_POST['dance_location'];
    $owner_name = $_POST['owner_name'];
    $dance_tribe = $_POST['dance_tribe'];
    $date=date("Y/m/d");

    $stmtinsert=$db->prepare($sql);
    $result=$stmtinsert->execute([$dance_name,$dance_description,$dance_location,$owner_name,$dance_tribe,$date]);
    header("Location: user-datasets.php");
  }
?>
<!DOCTYPE html>
<!--  This site was created in Webflow. http://www.webflow.com  -->
<!--  Last Published: Mon Mar 02 2020 20:32:19 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="5e5d2702f0e0af6412a62a74" data-wf-site="5e59e63c9e288f8a09e23975">
<head>
  <form action="add-universal.php" method="post" enctype="multipart/form-data">
  <meta charset="utf-8">
  <title>add-universal</title>
  <meta content="add-universal" property="og:title">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
  <link href="css/5.css" rel="stylesheet" type="text/css">
  <link href="css/2.css" rel="stylesheet" type="text/css">
  <link href="css/nani.css" rel="stylesheet" type="text/css">
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
        <div class="user-profile-icon-container"><img src="profilepic/DP1.jpeg" alt="" class="image-15"></div>
        <div class="div-block-14">
          <div class="text-block-44"><?php echo $username ?></div>
        </div>
        <div class="div-block-15">
          <div class="text-block-72"></div>
        </div>
        <div class="div-block-16">
          <a href="index.html" class="div-block-161"></a>
        </div>
      </div>
      <div class="div-block-18"></div>
      <div class="sidenav-home-container">
        <div class="div-block-19">
          <div class="div-block-21"></div>
        </div>
        <div class="div-block-20">
          <a href="user.php?" class="user-dataset-navlink">Home</a>
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
          <a href="user-requests.php?" class="link-7">Request</a>
        </div>
      </div>
      <div class="sidenav-datasets-container">
        <div class="div-block-29">
          <div class="text-block-12"></div>
        </div>
        <div class="div-block-9">
          <a href="user-datasets.php?" class="link-7">Datasets</a>
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
            <form id="email-form" name="email-form" data-name="Email Form" class="form-4"><input type="text" class="text-field-6 w-input" maxlength="256" name="name" data-name="Name" placeholder="Dance Name" id="name"></form>
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
            <form id="email-form" name="email-form" data-name="Email Form" class="form-4"><input type="text" class="text-field-6 w-input" maxlength="256" name="name-2" data-name="Name 2" placeholder="Tribe Name" id="name-2"></form>
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
            <form id="email-form" name="email-form" data-name="Email Form" class="form-4"><input type="text" class="text-field-6 w-input" maxlength="256" name="name-3" data-name="Name 3" placeholder="Location" id="name-3"></form>
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
            <form id="email-form" name="email-form" data-name="Email Form" class="form-4"><input type="text" class="text-field-6 w-input" maxlength="256" name="name-4" data-name="Name 4" placeholder="Date" id="name-4"></form>
            <div class="w-form-done">
              <div>Thank you! Your submission has been received!</div>
            </div>
            <div class="w-form-fail">
              <div>Oops! Something went wrong while submitting the form.</div>
            </div>
          </div>
        </div>
        <div class="div-block-177"><a href="#" class="button-35 w-button">View</a></div>
        <div class="div-block-178">
          <div class="w-form">
            <form id="email-form-2" name="email-form-2" data-name="Email Form 2"><input type="submit" value="Submit" data-wait="Please wait..." class="submit-button-6 w-button"></form>
            <div class="w-form-done">
              <div>Thank you! Your submission has been received!</div>
            </div>
            <div class="w-form-fail">
              <div>Oops! Something went wrong while submitting the form.</div>
            </div>
          </div>
        </div>
      </div>
      <div class="div-block-179"></div>
      <div class="div-block-180">
        <div>
          <div class="text-block-80">DATASET FILES</div>
        </div>
      </div>
      <div class="div-block-181">
        <div class="div-block-190">
          <div class="text-block-81">Dance Name</div>
        </div>
        <div class="div-block-189">
          <div class="text-block-81">File</div>
        </div>
        <div class="div-block-188">
          <div class="text-block-81">Description</div>
        </div>
        <div class="div-block-187">
          <div class="text-block-81">Location</div>
        </div>
        <div class="div-block-186">
          <div class="text-block-81">Tribe</div>
        </div>
        <div class="div-block-185">
          <div class="text-block-81">Related Papers</div>
        </div>
        <div class="div-block-184">
          <div class="text-block-81">Owner </div>
        </div>
        <div class="div-block-183">
          <div class="text-block-81">Action</div>
        </div>
      </div>
      <div class="div-block-191">
        <div class="div-block-190">
          <div class="form-block-5 w-form">
          
              <input type="text" class="text-field-7 w-input" maxlength="256" name="dance_name" data-name="Name 5" placeholder="Name of Dance" id="name-5">

            <div class="w-form-done">
              <div>Thank you! Your submission has been received!</div>
            </div>
            <div class="w-form-fail">
              <div>Oops! Something went wrong while submitting the form.</div>
            </div>
          </div>
        </div>
        <div class="div-block-189">
          <div class="form-block-5 w-form">
            
              <input type="file" value="Choose File" name="file" data-wait="Please wait..." class="submit-button-7 w-button">

            <div class="w-form-done">
              <div>Thank you! Your submission has been received!</div>
            </div>
            <div class="w-form-fail">
              <div>Oops! Something went wrong while submitting the form.</div>
            </div>
          </div>
        </div>
        <div class="div-block-188">
          <div class="form-block-5 w-form">
           
              <textarea placeholder="Description" maxlength="5000" id="field" name="dance_description" class="textarea w-input"></textarea>

            <div class="w-form-done">
              <div>Thank you! Your submission has been received!</div>
            </div>
            <div class="w-form-fail">
              <div>Oops! Something went wrong while submitting the form.</div>
            </div>
          </div>
        </div>
        <div class="div-block-187">
          <div class="form-block-5 w-form">
      
              <input type="text" placeholder="Location of Dance" maxlength="5000" id="field-2" name="dance_location" data-name="Field 2" class="w-input"></input>
   
            <div class="w-form-done">
              <div>Thank you! Your submission has been received!</div>
            </div>
            <div class="w-form-fail">
              <div>Oops! Something went wrong while submitting the form.</div>
            </div>
          </div>
        </div>
        <div class="div-block-186">
          <div class="form-block-5 w-form">

            <input type="text" placeholder="Tribe Origin of Dance" maxlength="5000" id="field-2" name="dance_tribe" data-name="Field 2" class="w-input"></input>

            <div class="w-form-done">
              <div>Thank you! Your submission has been received!</div>
            </div>
            <div class="w-form-fail">
              <div>Oops! Something went wrong while submitting the form.</div>
            </div>
          </div>
        </div>
        <div class="div-block-185">
          <div class="form-block-5 w-form">
            
            <input type="file" value="Choose File" data-wait="Please wait..." class="submit-button-7 w-button" name="dance_papers">

            <div class="w-form-done">
              <div>Thank you! Your submission has been received!</div>
            </div>
            <div class="w-form-fail">
              <div>Oops! Something went wrong while submitting the form.</div>
            </div>
          </div>
        </div>
        <div class="div-block-184">
          <div class="form-block-5 w-form">

            <input type="text" data-name="Field 2" maxlength="5000" id="field-2" name="owner_name" placeholder="Full Name of owner" class="w-input"></input>

            <div class="w-form-done">
              <div>Thank you! Your submission has been received!</div>
            </div>
            <div class="w-form-fail">
              <div>Oops! Something went wrong while submitting the form.</div>
            </div>
          </div>
        </div>
        <div class="div-block-183">
          <div class="form-block-5 w-form">

           <input name="add_acc" type="submit" value="Submit" data-wait="Please wait..." class="submit-button-7 w-button">

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