<!DOCTYPE html>
<html>
<head>
	<title>Katuyaw Admin Request to Access Dance</title>
</head>
<body>
	<h1>KATUYAW ADMIN REQUEST TO ACCESS DANCE</h1>

<?php
session_start();
$username=$_SESSION['admin_username'];
echo 'WELCOME TO KATUYAW ADMIN: '.$username.'<br>';
?>

	<a href="KATUYAW_admin_login.html">Log out<br><br></a>
</body>
</html>

<?php
require 'connect.php';
$query="SELECT a.User_Name, b.User_ReasonforDL, b.Proof_of_Identity, b.Contact_No, c.Dancedataset_Name, c.DanceDataset_ID FROM user_table as a, userrequesttodl_table as b, dancedataset_table as c WHERE a.User_ID=b.User_ID AND b.User_ReasonforDL=b.User_ReasonforDL AND b.Proof_of_Identity=b.Proof_of_Identity AND b.Contact_No=b.Contact_No AND c.DanceDataset_ID=b.DanceDataset_ID";
if($query_run=mysqli_query($con,$query))
{
 while($query_execute=mysqli_fetch_assoc($query_run))
 {
	echo "<td><b>User: </b><a href='KATUYAW_admin_individual_request_dl.php?Dancedataset_Name=$query_execute[Dancedataset_Name]'>".$query_execute['User_Name']."</a><br><b>Dance: </b>".$query_execute['Dancedataset_Name']."</td></tr><br><br>";
 }
}
else
{
	echo "Query Not Executed<br>";
}
?>
