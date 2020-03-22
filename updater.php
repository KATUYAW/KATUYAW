<?php
session_start();
$dance_id=$_SESSION['Dance_ID'];
require('config2.php');
require 'connect.php';
echo $dance_id;
if (isset($_POST["update"]))
{
   $name=$_POST["dance_name"];
   $tribe=$_POST["dance_tribe"];
   $location=$_POST["dance_location"];
   $date=$_POST["dance_date"];
  echo $location;
$sql = mysqli_query($mysqli, "UPDATE `dancedataset_table` SET `DanceDataset_Name`='$name',`DanceDataset_Location`='$location',`DanceDataset_Tribe`='$tribe',`DanceDataset_UploadDate`='$date' WHERE `DanceDataset_ID`=$dance_id");
header("location: admin-datasets.php");
}
 ?>