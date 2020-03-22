<?php
require 'connect.php';
$query="SELECT * FROM `admin_table`";
require('config.php');
$email_unique='True';
	if(isset($_POST["add_acc"]))
	{
		if($query_run=mysqli_query($con,$query))
		{
 			while($query_execute=mysqli_fetch_assoc($query_run))
 			{
 				if ($query_execute['Admin_Email']=$_POST['email'])
 				{
 				}
 			}
		}
		if ($email_unique=='True')
		{
			$firstname = $_POST['firstname'];
			$email = $_POST['email'];
			$password = $_POST['password'];
			$affiliation = $_POST['affiliation'];

			$sql="INSERT INTO `admin_table`(`Admin_Username`, `Admin_Email`, `Admin_Password`, `Admin_Affiliation`) VALUES (?,?,?,?)";
			$stmtinsert=$db->prepare($sql);
			$result=$stmtinsert->execute([$firstname, $email, $password,$affiliation]);
		}
		else
		{
			echo ' DI PUMASOK SA DATABASE';
		}
		header("Location: KATUYAW_admin_login.html");
	}
?>
<!DOCTYPE html>
<html>
	<head>
		<form action="SignUpAdmin.php" method="post">
		<meta charset="utf-8">
		<title>Admin Sign Up</title>
		<link rel="stylesheet" type="text/css" href="signupadmin.css">
	<body>
	<header>
		<a href="a" class="logo">KATUYAW</a>
	</header>
	<div class="SignUp">
		<h1>Admin Sign Up</h1>
	<div class="textbox">
		<input type="firstname" placeholder="First Name" name="firstname" value="">
	</div>
	<div class="textbox">
		<input type="lastname" placeholder="Last Name" name="" value="">
	</div>
	<div class="textbox">
		<input type="affiliation" placeholder="Affiliation" name="affiliation" value="">
	</div>
	<div class="textbox">
		<input type="text" placeholder="Username" name="" value="">
	</div>
	<div class="textbox">
		<input type="email" placeholder="Email" name="email" value="">
	</div>
	<div class="textbox">
		<input type="password" placeholder="Password" name="password" value="">
	</div>
<input class="btn" type="submit" name="add_acc" value="Sign Up">

</div>
</body>
</html>