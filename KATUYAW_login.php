<?php 
session_start();
unset($_SESSION['username']);

$host="localhost";
$user="root";
$password="";
$db="katuyaw";
 
$a=mysqli_connect('localhost','root','','katuyaw');
mysqli_select_db($a,$db);
 
if(isset($_POST['login_button'])){
    
    $user_email=$_POST['user_email'];
    $user_password=$_POST['user_password'];
    
    $sql="select * from user_table where User_Email='".$user_email."'AND User_Password='".$user_password."' limit 1";
    
    $result=mysqli_query($a, $sql);
    while($get_query_data=mysqli_fetch_assoc($result))
    {
    	echo $username_login=$get_query_data['User_Name'];
    }




	if(mysqli_num_rows($result)!==0){
		session_start();
		$_SESSION['username']=$username_login;
		//header("Location: KATUYAW_dance_list.php");
    }
    else{
        echo "Incorrect Email and Password!";
        exit();
    }}
?>
<!DOCTYPE html>
<html>
<head>
	<title>KATUYAW LOGIN PAGE</title>
</head>
<body>
	<center>
		<h3>LOGIN NOW!</h3>
		<h5>Be part of our Indigenous Community!</h5>
		<form action="KATUYAW_login.php" method="post">
			<table>
				<tr>
					<td>Email:</td>
					<td>
						<input type="Email" name="user_email" required>
					</td>
				</tr>
				<tr>
					<td>Password:</td>
					<td>
						<input type="Password" name="user_password" required>
					</td>
				</tr>
				<tr>
					<td>
						<input type="submit" value="Log in" name="login_button">
					</td>
					<td>
						Not yet registered? <a href="KATUYAW_registration.php">Register</a>
				</tr>
			</table>


	</center>

</body>
</html>