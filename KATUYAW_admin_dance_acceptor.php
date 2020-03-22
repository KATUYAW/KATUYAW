<?php
session_start();
$dance_id=$_SESSION['dance_id'];
require('config2.php');
if (isset($_POST["DanceDataset_Delete"]))
{
	$sql = mysqli_query($mysqli, "DELETE FROM `dancedataset_table` WHERE `dancedataset_table`.`DanceDataset_ID` = $dance_id");
	unset($_SESSION['dance_id']);
	header("Location: KATUYAW_dance_dataset_approval.php");
}
if (isset($_POST["DanceDataset_Post"]))
{
	$sql = mysqli_query($mysqli, "UPDATE `dancedataset_table` SET `DanceDataset_Status`='Accepted' WHERE `DanceDataset_ID`=$dance_id");
	unset($_SESSION['dance_id']);
	header("Location: KATUYAW_dance_dataset_approval.php");
}
if (isset($_POST["DanceDataset_Edit"]))
{
	$sql = mysqli_query($mysqli, "SELECT * FROM dancedataset_table WHERE DanceDataset_ID=$dance_id");
	while($query_execute = mysqli_fetch_array($sql))
	{
?>
<form action="KATUYAW_admin_dance_update.php" method="post">
<div>
<b>Dance Name: </b>
<input text="text" name="dance_name" value="<?php echo $query_execute['DanceDataset_Name'] ?>">
</div>
<div>
<b>Dance Description:<b>
<input type="text" name="dance_descrip" value="<?php echo $query_execute['DanceDataset_Description'] ?>">
</div>
<b>Dance Origin Location: <b>
<input text="text" name="dance_location" value="<?php echo $query_execute['DanceDataset_Location'] ?>">
</div>
<div>
<b>Dance Tribe: <b>
<input text="text" name="dance_tribe" value="<?php echo $query_execute['DanceDataset_Tribe'] ?>">
</div>
<?php
}
}
?>
<input type="submit" name="update_dance" value="Update">