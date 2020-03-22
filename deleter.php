<?php
session_start();
$id = $_GET['DanceDataset_ID'];
$_SESSION['Dance_ID']=$id;
echo $id;
require('config2.php');
$sql = mysqli_query($mysqli, "DELETE FROM `dancedataset_table` WHERE `dancedataset_table`.`DanceDataset_ID` = $id");
header("location: admin-datasets.php");
?>