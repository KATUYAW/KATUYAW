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
<!--  Last Published: Mon Mar 02 2020 11:46:00 GMT+0000 (Coordinated Universal Time)  -->
<html data-wf-page="5e5be3e063723e2a8da9476b" data-wf-site="5e59e63c9e288f8a09e23975">
<head>
  <meta charset="utf-8">
  <title>User-View</title>
  <meta content="User-View" property="og:title">
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
      <div class="sidenav-home-container">
        <div class="div-block-19">
          <div class="div-block-21"></div>
        </div>
        <div class="div-block-20">
          <a href="user.php?" class="user-dataset-navlink">Home</a>
        </div>
      </div>
      <div class="sidenav-profile-container">
        <div class="div-block-23">
          <div class="text-block-10"></div>
        </div>
        <div class="div-block-27">
          <div class="text-block-39">Profile</div>
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
        <div class="div-block-27">
          <div class="text-block-12"></div>
        </div>
        <div class="div-block-35">
          <a href="user-datasets.php?" class="text-block-38">Datasets</a>
        </div>
      </div>
    </div>
    <div class="main-user-content-2">
      <div class="div-block-34">
        <div class="text-block-61">Contributed by:</div>
        <div class="text-block-62"><?php echo $username ?></div>
      </div>
      <div class="div-block-35"></div>
      <div class="view-content-container">
        <div>
          <div style="padding-top:56.17021276595745%" id="w-node-4178d49a40ed-8da9476b" class="w-embed-youtubevideo youtube"><iframe src="https://www.youtube.com/embed/<?php echo $query_execute['DanceDataset_YTLink']?>?rel=0&amp;controls=1&amp;autoplay=1&amp;mute=0&amp;start=7" frameborder="0" style="position:absolute;left:0;top:0;width:100%;height:100%;pointer-events:auto" allow="autoplay; encrypted-media" allowfullscreen=""></iframe></div>
        </div>
        <div class="div-block-95">
          <div class="div-block-90">
            <h1 class="heading-2"><?php echo $query_execute['DanceDataset_Name']; ?></h1>
          </div>
          <div class="div-block-92">
            <p class="paragraph">DESCRIPTION: <?php echo $query_execute['DanceDataset_Description']; ?></p>
            <div class="div-block-96"><a href="upload/<?php echo $query_execute['DanceDataset_FileLink'] ?>" class="link-5">DOWNLOAD</a>
              <div class="div-block-96"><a href="#" class="button-11 w-button">FBX</a></div>
            </div>
          </div>
        </div>
        <div class="div-block-142">
          <div>
            <h1 class="heading-4">DATASET INFORMATION</h1>
          </div>
          <div class="div-block-93">
            <div data-delay="0" class="dropdown w-dropdown">
              <div class="dropdown-toggle w-dropdown-toggle">
                <div class="icon w-icon-dropdown-toggle"></div>
                <div class="text-block-45">FBX</div>
              </div>
              <nav class="dropdown-list w-dropdown-list"><a href="#" class="dropdown-link-2 w-dropdown-link">File Name: <?php echo $query_execute["DanceDataset_FileLink"] ?></a><a href="#" class="dropdown-link w-dropdown-link">File size: <?php echo $query_execute["DanceDataset_Filesize"] ?>B</a></a></nav>
            </div>
          </div>
        </div>
        <div class="div-block-143">
          <h1 class="heading-3">RELEVANT PAPER</h1>
          <div class="div-block-94">
            <a href="paper/<?php echo $query_execute['DanceDataset_Papers'] ?>" class="text-block-46"><?php echo $query_execute["DanceDataset_Papers"] ?></a>
          </div>
        </div>
      </div>
    </div>
    <div style="opacity:1" class="edit-popup-wrap">
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
            <div id="w-node-9958270378cf-8da9476b" class="div-block-72">
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
          <div class="div-block-71"><a data-w-id="1343f3e7-b5e9-81f5-60da-9958270378da" href="#" class="button-7 w-button"></a></div>
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
<?php
}
?>