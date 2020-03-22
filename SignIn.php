<?php 
session_start();
unset($_SESSION['username']);
unset($_SESSION['User_ID']);
unset($_SESSION['loginned_check']);

$host="localhost";
$user="root";
$password="";
$db="katuyaw";
 
$a=mysqli_connect('localhost','root','','katuyaw');
mysqli_select_db($a,$db);
 
if(isset($_POST['login_button'])){

    $user_email=$_POST['username'];
    $user_password=$_POST['pass'];
    
    $sql="select * from user_table where User_Email='".$user_email."'AND User_Password='".$user_password."' limit 1";
    
    $result=mysqli_query($a, $sql);
    while($get_query_data=mysqli_fetch_assoc($result))
    {
        $username_login=$get_query_data['User_Name'];
        $User_ID=$get_query_data['User_ID'];
    }


	if(mysqli_num_rows($result)!==0){
		session_start();
		$_SESSION['username']=$username_login;
        $_SESSION['User_ID']=$User_ID;
        $_SESSION['loginned_check']=True;
		header("Location: user-datasets.php");
    }
    else{
        echo "Incorrect Email and Password!";
        exit();
    }}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Sign In</title>
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
	<link rel="stylesheet" type="text/css" href="css/SignIn.css">

<!--===============================================================================================-->
</head>
<body>
	<form action="SignIn.php" method="post">
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-50 p-b-5">
				<form class="login100-form validate-form">
					<span class="login100-form-title p-b-10">
						Sign In
					</span>

					<div class="wrap-input100 validate-input m-b-23" data-validate = "Username is required">
						
						<input class="input100" type="email" name="username" placeholder="Type your email" required>
						<span class="focus-input100" data-symbol="&#xf206;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Password is required">

						<input class="input100" type="password" name="pass" placeholder="Type your password" required>
						<span class="focus-input100" data-symbol="&#xf190;"></span>
					</div>
					
					<div class="text-right p-t-8 p-b-5">
						<a href="KATUYAW_forgot_pass_sender.php?" class="txt2">
							Forgot password?
						</a>
					</div>
					
					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn" name="login_button">
								Sign In
							</button>
						</div>
					</div>


					<div class="flex-col-c p-t-15">
						<span class="txt1 p-b-5">
							Don't have an account?
						</span>

						<a href="Sign Up.php" class="txt2">
							Sign Up
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