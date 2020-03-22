<?php
session_start();
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
  $name=$query_execute['DanceDataset_Name'];
  $descrip=$query_execute['DanceDataset_Description'];
  $location=$query_execute['DanceDataset_Location'];
  $papers=$query_execute['DanceDataset_Papers'];
  $file_size=$query_execute['DanceDataset_Filesize'];
  $owner=$query_execute['DanceDataset_Owner'];
  $file_name=$query_execute['DanceDataset_FileLink'];
?>
<!DOCTYPE html>
<!--  This site was created in Webflow. http://www.webflow.com  -->
<!--  Last Published: Sun Feb 23 2020 18:25:32 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="5e52af1f337309ec4bf530de" data-wf-site="5e52af1f3373097935f530dd">
<head>
  <form action="KATUYAW_request_download.php" method="post">
  <meta charset="utf-8">
  <title>user-dataset-view</title>
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <meta content="Webflow" name="generator">
  <link href="css/normalize.css" rel="stylesheet" type="text/css">
  <link href="css/webflow.css" rel="stylesheet" type="text/css">
  <link href="css/user-dataset-view.webflow.css" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
  <script type="text/javascript">WebFont.load({  google: {    families: ["Oswald:200,300,400,500,600,700","Open Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic"]  }});</script>
  <!-- [if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js" type="text/javascript"></script><![endif] -->
  <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
  <link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon">
  <link href="images/webclip.png" rel="apple-touch-icon">
</head>
<body>
  <div class="topnav-wrapper">
    <div class="menu-logo-wrapper"><img src="images/Hamburger_icon.svg.png" srcset="images/Hamburger_icon.svg-p-500.png 500w, images/Hamburger_icon.svg-p-800.png 800w, images/Hamburger_icon.svg-p-1080.png 1080w, images/Hamburger_icon.svg.png 1200w" sizes="24px" alt="" class="hamburger-buttton"><img src="images/icon1.png" width="62" srcset="images/icon1-p-500.png 500w, images/icon1-p-800.png 800w, images/icon1-p-1080.png 1080w, images/icon1.png 1428w" sizes="(max-width: 479px) 24.421875px, (max-width: 991px) 10vw, 78.21875px" id="w-node-d9b7ed2ad668-4bf530de" alt="" class="image-5"></div>
    <div class="div-block-13"></div>
    <div class="div-block-11"><img src="images/User_icon_BLACK-01.png" id="w-node-d9b7ed2ad66b-4bf530de" alt="" class="image-7">
      <div class="div-block-13"></div>
    </div>
  </div>
  <div class="side-wrapper">
    <div id="w-node-a79d4bfe256e-4bf530de" class="sidenav">
      <div id="w-node-a79d4bfe256f-4bf530de" class="div-block-14">
        <div id="w-node-a79d4bfe2570-4bf530de" class="div-block-15"><a href="#" class="button-5 w-button"></a></div>
        <div class="div-block-16">
          <div class="text-block-14">CORE TEAM</div>
        </div>
      </div>
      <div class="div-block-14">
        <div id="w-node-a79d4bfe2577-4bf530de" class="div-block-15"><a href="#" class="button-6 w-button"></a></div>
        <div class="div-block-16">
          <div class="text-block-14">PROFILE</div>
        </div>
      </div>
      <div class="div-block-14">
        <div id="w-node-a79d4bfe257e-4bf530de" class="div-block-15"><a href="#" class="button-4 w-button"></a></div>
        <div class="div-block-16">
          <div class="text-block-14">DATASETS</div>
        </div>
      </div>
    </div>
    <div id="w-node-a79d4bfe2584-4bf530de" class="team-page-wrapper-2">
      <div class="datasets-page-wrapper-2">
        <div>
          <div style="padding-top:56.17021276595745%" id="w-node-49d8933bfb24-4bf530de" class="w-embed-youtubevideo youtube"><iframe src="https://www.youtube.com/embed/5PsM1PgVXlQ?rel=0&amp;controls=1&amp;autoplay=1&amp;mute=0&amp;start=0" frameborder="0" style="position:absolute;left:0;top:0;width:100%;height:100%;pointer-events:auto" allow="autoplay; encrypted-media" allowfullscreen=""></iframe></div>
        </div>
        <div class="div-block-22">
          <div class="div-block-23">
            <h1 class="heading-2"><?php echo $name; ?></h1>
          </div>
          <div class="div-block-24">
            <p class="paragraph">DESCRIPTION: <br><?php echo $descrip;  ?></p>
            <div class="div-block-25"><input type="submit" class="link" name="request_download" value="Request Access"></input>
              <div class="div-block-26"><a href="#" class="button-8 w-button">FBX</a></div>
            </div>
          </div>
        </div>
        <div>
          <div>
            <h1 class="heading">DATASET INFORMATION</h1>
          </div>
          <div class="div-block-21">
            <div data-delay="0" class="dropdown w-dropdown">
              <div class="dropdown-toggle w-dropdown-toggle">
                <div class="w-icon-dropdown-toggle"></div>
                <div class="text-block-18">FBX</div>
              </div>
              <nav class="dropdown-list w-dropdown-list"><a href="#" class="w-dropdown-link"><b>File Name:</b> <?php echo $file_name; ?></a><a href="#" class="w-dropdown-link"><b>File size:</b> <?php echo $file_size; ?>B</a></nav>
            </div>
          </div>
        </div>
        <div>
          <h1 class="heading-3">RELEVANT PAPER</h1>
          <div class="div-block-27">
            <div class="text-block-19"><a href="paper/<?php echo $query_execute['DanceDataset_Papers']; ?>"><?php echo $query_execute["DanceDataset_Papers"]; }?></a></div>
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