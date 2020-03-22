<?php
if (isset($_POST["posting"]))
{
	header("location: KATUYAW_dance_dataset_approval.php");
}
if (isset($_POST["downloading"]))
{
	header("location: KATUYAW_admin_request_dl.php");
}
?>
<!DOCTYPE html>
<html>
	<head>
		<form action="KATUYAW_admin_choice.php" method="post">
		<meta charset="utf-8">
		<title>Dance Request Admin</title>
		<link rel="stylesheet" type="text/css" href="dancerequestadmin.css">
	<body>
	<header>
		<a href="a" class="logo">KATUYAW</a>
	</header>
	<div class="DanceRequestAdmin">
		<h1>Admin Dance Request</h1>
	<input class="btn" type="submit" name="posting" value="Dance Request to Post">
	<input class="btn" type="submit" name="downloading" value="Dance Request to Download">
	</div>
</body>
</html>