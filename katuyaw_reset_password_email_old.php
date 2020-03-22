<?php
session_start();
require('config2.php');

if(isset($_POST["reset_password"]))
{

$new_pass=$_POST["new_pass"];
$email=$_SESSION["email"];

$sql = mysqli_query($mysqli, "UPDATE `user_table` SET `User_Password`='$new_pass' WHERE `User_Email`='$email'");
echo "Your password has been reset!";
exit();

}
?>
<!DOCTYPE html>
<html>
<head>
	<title>KATUYAW RESET PASSWORD</title>
</head>
<body>
	<form action="KATUYAW_reset_password_email.php" method="post">
	<div>
		<h3>KATUYAW RESET PASSWORD</h3>
	</div>
	<div>
		<a>Enter your new password</a>
		<input type="password" name="new_pass" required>
	</div>
	<div>
		<input type="submit" name="reset_password">
	</div>

</body>
</html>