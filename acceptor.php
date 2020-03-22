<?php
$dance_id=$_GET['DanceDataset_ID'];
require('config2.php');
echo $dance_id;
$sql = mysqli_query($mysqli, "UPDATE `dancedataset_table` SET `DanceDataset_Status`='Accepted' WHERE `DanceDataset_ID`=$dance_id");
header("Location: admin-requests.php");


?>