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
include_once("config2.php");
if(isset($_POST["request_download"]))
{
  header("Location: KATUYAW_request_download.php");

}
$id = $_GET['DanceDataset_ID'];
$_SESSION['Dance_ID']=$id;

$query_run = mysqli_query($mysqli, "SELECT * FROM dancedataset_table WHERE DanceDataset_ID=$id");

while($query_execute = mysqli_fetch_array($query_run))
{
?>
<!DOCTYPE html>
<!--  This site was created in Webflow. http://www.webflow.com  -->
<!--  Last Published: Mon Mar 02 2020 13:34:46 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="5e5575b927f890443744a895" data-wf-site="5e53de01dfb713809c1811a4">
<head>
  <meta charset="utf-8">
  <title>user-dataset-view</title>
  <meta content="user-dataset-view" property="og:title">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
  <link href="css/normalize.css" rel="stylesheet" type="text/css">
  <link href="css/webflow.css" rel="stylesheet" type="text/css">
  <link href="css/katuyaw.webflow.css" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
  <script type="text/javascript">WebFont.load({  google: {    families: ["Oswald:200,300,400,500,600,700","Open Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic","Montserrat:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic"]  }});</script>
  <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
  <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
  <link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon">
  <link href="images/webclip.png" rel="apple-touch-icon">
</head>
<body>
  <div style="opacity:1" class="profile-popup-wrap">
    <div class="div-block-74">
      <div class="div-block-75">
        <div class="div-block-76"><img src="profilepic/DP1.jpeg" width="66" alt="" class="image-9"></div>
        <div class="div-block-77">
          <div class="text-block-28">Lander Xavier Ignacio</div>
        </div>
        <div class="div-block-48">
          <div class="text-block-29">Landerxavier17@gmail.com</div>
        </div>
      </div>
      <div><a href="#" class="button-8 w-button">Manage your account</a></div>
      <div class="div-block-79"><a href="#" class="button11 w-button">Logout</a></div>
      <div class="div-block-80">
        <div class="div-block-48"><a href="#" class="link5">Privacy Policy</a></div>
        <div class="div-block-83">
          <div class="div-block-48"></div><a data-w-id="2c0d4e43-0ec7-2450-cfcc-81c55b136d5b" href="#" class="button-10 w-button"></a></div>
        <div class="div-block-48"><a href="#" class="link-4">Terms and Condition</a></div>
      </div>
    </div>
  </div>
  <div class="user-section">
    <div class="admin-sidenav-wrapper"></div>
    <div class="div-block-91">
      <div class="topnav-wrap">
        <div class="div-block-150">
          <div class="text-block-61">Contributed by:</div>
          <div class="text-block-62"><?php echo $username ?></div>
        </div>
      </div>
      <div class="div-block-49">
        <div class="user-datasets-view-wrap">
          <div class="datasets-page-wrapper-3">
            <div>
              <div style="padding-top:56.17021276595745%" id="w-node-49c82b3ba2b7-3744a895" class="w-embed-youtubevideo youtube"><iframe src="https://www.youtube.com/embed/<?php echo $query_execute['DanceDataset_YTLink']?>?rel=0&amp;controls=1&amp;autoplay=1&amp;mute=0&amp;start=7" frameborder="0" style="position:absolute;left:0;top:0;width:100%;height:100%;pointer-events:auto" allow="autoplay; encrypted-media" allowfullscreen=""></iframe></div>
            </div>
            <div class="div-block-95">
              <div class="div-block-48">
                <h1 class="heading-2"><?php echo $query_execute['DanceDataset_Name']; ?></h1>
              </div>
              <div class="div-block-92">
                <p class="paragraph">DESCRIPTION: <?php echo $query_execute['DanceDataset_Description']; ?></p>
                <div class="div-block-96"><a href="requestdl.php?" class="link-5">REQUEST ACCESS</a>
                  <div class="div-block-96"><a href="#" class="button-11 w-button">FBX</a></div>
                </div>
              </div>
            </div>
            <div>
              <div>
                <h1 class="heading-4">DATASET INFORMATION</h1>
              </div>
              <div class="div-block-93">
                <div data-delay="0" class="dropdown w-dropdown">
                  <div class="dropdown-toggle w-dropdown-toggle">
                    <div class="w-icon-dropdown-toggle"></div>
                    <div class="text-block-31">FBX</div>
                  </div>
                  <nav class="dropdown-list w-dropdown-list"><a href="#" class="w-dropdown-link">File Name: <?php echo $query_execute["DanceDataset_FileLink"] ?></a><a href="#" class="w-dropdown-link">File size: <?php echo $query_execute["DanceDataset_Filesize"] ?>B</a></nav>
                </div>
              </div>
            </div>
            <div>
              <h1 class="heading-3">RELEVANT PAPER</h1>
              <div class="d iv-block-94">
                <a href="paper/<?php echo $query_execute['DanceDataset_Papers'] ?>" class="text-block-30"><?php echo $query_execute["DanceDataset_Papers"] ?></a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="div-block-150">
        <div class="text-block-61">Contributed by:</div>
        <div class="text-block-62">Lander Xavier Ignacio</div>
      </div>
    </div>
    <div class="main-user-sidnav-2">
      <div class="logo-info-container">
        <div class="div-block-31"><img src="images/FINAL-LOGO3.png" srcset="images/FINAL-LOGO3-p-500.png 500w, images/FINAL-LOGO3-p-800.png 800w, images/FINAL-LOGO3-p-1080.png 1080w, images/FINAL-LOGO3-p-1600.png 1600w, images/FINAL-LOGO3-p-2000.png 2000w, images/FINAL-LOGO3-p-2600.png 2600w, images/FINAL-LOGO3.png 3000w" sizes="140px" alt="" class="image-20"></div>
      </div>
      <div class="user-info-wrapper">
        <div class="user-profile-icon-container"><img src="profilepic/DP1.jpeg" alt="" class="image-21"></div>
        <div class="div-block-14">
          <div class="text-block-44"><?php echo $username ?></div>
        </div>
        <div class="div-block-15">
          <div class="text-block-53"></div>
        </div>
        <div class="div-block-16">
          <a href="index.html" class="div-block-147"></a>
        </div>
      </div>
      <div class="div-block-18"></div>
      <div class="sidenav-home-container">
        <div class="div-block-19">
          <div class="div-block-130"></div>
        </div>
        <div class="div-block-149">
          <a href="#" class="text-block-38">Home</a>
        </div>
      </div>
      <div class="sidenav-profile-container">
        <div class="div-block-132">
          <div class="text-block-10"></div>
        </div>
        <div class="div-block-146">
          <div class="text-block-39">Profile</div>
        </div>
      </div>
      <div class="sidenav-requests-container">
        <div class="div-block-132">
          <div class="text-block-8"></div>
        </div>
        <div class="div-block-148">
           <a href="user-requests.php?" class="text-block-38">Request</a>
        </div>
      </div>
      <div class="sidenav-datasets-container">
        <div class="div-block-146">
          <div class="text-block-12"></div>
        </div>
        <div class="div-block-135">
          <a href="user-datasets.php?" class="text-block-38">Datasets</a>
        </div>
      </div>
    </div>
  </div>
  <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.4.1.min.220afd743d.js" type="text/javascript" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="js/webflow.js" type="text/javascript"></script>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
</body>
</html>
<?php
}
?>