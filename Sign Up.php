<?php
require 'connect.php';
$query="SELECT * FROM `user_table`";
require('config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Sign Up</title>
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

			$sql="INSERT INTO `user_table`(`User_Name`, `User_Email`, `User_Password`) VALUES (?,?,?)";
			$stmtinsert=$db->prepare($sql);
			$result=$stmtinsert->execute([$firstname, $email, $password]);
		}
		else
		{
			echo ' DI PUMASOK SA DATABASE';
		}
		header("Location: SignIn.php");
	}
	?>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/SignUp.css">

<!--===============================================================================================-->
</head>
<body>
	<form action="Sign Up.php" method="post">
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-50 p-b-5">
				<form class="login100-form validate-form">
					<span class="login100-form-title p-b-10">
						Sign Up
					</span>

					<div class="wrap-input100 validate-input m-b-10 fs-12" data-validate = "Full Name">
						<input class="input100" type="text" name="firstname" placeholder="Type your full name" required>
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>
					
					<div class="wrap-input100 validate-input m-b-10 fs-12" data-validate="Email is required">
						<input class="input100" type="Email" name="email" placeholder="Type your Email Address" required>
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-10 fs-12" data-validate="Password is required">
						<input class="input100" type="password" name="password" placeholder="Enter your password" required>
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>
					
					<div class="wrap-input100 validate-input m-b-23 fs-12" data-validate = "Confirm Password">
						<input class="input100" type="Password" name="repassword" placeholder="Re-enter your password" required>
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>
					
					<div class="text-left p-t-8 p-b-5 fs-12">
						<input type="checkbox" required>
							<span> I Agree to the
								<a href="KATUYAW_privacy_terms_conditions.html?" class="txt2">
								Privacy Policy Terms and Condition
								</a>
							</span>
					</div>
					
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" name="add_acc">
								Sign Up
							</button>
						</div>
					</div>

					<div class="flex-col-c p-t-15">
						<span class="txt1 p-b-5">
							Already have an account?
						</span>

						<a href="SignIn.php" class="txt2">
							Sign In
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>