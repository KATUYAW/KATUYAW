<?php
require 'connect.php';
$query="SELECT * FROM `user_table`";
require('config.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>KATUYAW REGISTRATION | PHP</title>
</head>
<body>
<div>
	<?php
	$email_unique='True';
	if(isset($_POST["add_acc"]))
	{
		if($query_run=mysqli_query($con,$query))
		{
 			while($query_execute=mysqli_fetch_assoc($query_run))
 			{
 				if ($query_execute['User_Email']=$_POST['email'])
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

			$sql="INSERT INTO `user_table`(`User_Name`, `User_Email`, `User_Password`, `User_Affiliation`) VALUES (?,?,?,?)";
			$stmtinsert=$db->prepare($sql);
			$result=$stmtinsert->execute([$firstname, $email, $password, $affiliation]);
		}
		else
		{
			echo ' DI PUMASOK SA DATABASE';
		}
		header("Location: KATUYAW_terms_and_regulations.php");
	}
	?>
</div>
<div>
	<form action="KATUYAW_registration.php" method="post">
		<div>
			<h1>KATUYAW REGISTRATION TEMPLATE</h1>
		</div>
		<div>
			<label for="firstname"><b>Username</b></label>
			<input type="text" name="firstname" required>
		</div>
		<div>
			<label for="email"><b>Email</b></label>
			<input type="email" name="email" required>
		</div>
		<div>
			<label for="password"><b>Password</b></label>
			<input type="password" name="password" required>
		</div>
		<div>
			<label for="password"><b>Re-Enter Password</b></label>
			<input type="password" name="repassword" required>
		</div>
		<div>
			<label for="affiliation"><b>Affiliation</b></label>
			<input type="text" name="affiliation" required>
		</div>
		<div>
			<input type="checkbox" name="privay_policy" required>
			<label for="privacy policy"><b>By checking this you agree to our <a href="KATUYAW_privacy_policy.php">Privacy Policy</a></b></label>
			
		</div>
		<div>
			Already have an account? <a href="KATUYAW_login.php">Login here</a>
		</div>
		<div>
			<input type="submit" name="add_acc" value="Sign Up">
		</div>
		
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
	$(function()
	{
 		alert('User account creation success!');
	});
</script>
</body>
</html>