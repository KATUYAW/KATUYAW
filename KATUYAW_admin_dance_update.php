<?php
session_start();
$dance_id=$_SESSION['dance_id'];
require('config2.php');
if (isset($_POST["update_dance"]))
{
	$dance_name=$_POST["dance_name"];
	$dance_descp=$_POST["dance_descrip"];
	$dance_location=$_POST["dance_location"];
	$dance_tribe=$_POST["dance_tribe"];
	$sql = mysqli_query($mysqli, "UPDATE `dancedataset_table` SET `DanceDataset_Name`='$dance_name', `DanceDataset_Description`='$dance_descp', `DanceDataset_Location`='$dance_location', `DanceDataset_Tribe`='$dance_tribe' WHERE `DanceDataset_ID`=$dance_id");
	header("Location: KATUYAW_dance_dataset_approval.php");
}
?>