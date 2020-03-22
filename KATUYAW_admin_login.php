<?php 
session_start();
unset($_SESSION['admin_username']);
$host="localhost";
$user="root";
$password="";
$db="katuyaw";

$a=mysqli_connect('localhost','root','','katuyaw');
mysqli_select_db($a,$db);
 
if(isset($_POST['login_button'])){
    
    $admin_email=$_POST['admin_email'];
    $admin_password=$_POST['admin_password'];
    $admin_name="";
    
    $sql="select * from `admin_table` where Admin_Email='".$admin_email."'AND Admin_Password='".$admin_password."' limit 1";
    
    $results=mysqli_query($a, $sql);
    while($getquerydata=mysqli_fetch_assoc($results))
    {
        $admin_username_login=$getquerydata['Admin_Username'];
        $admin_User_ID=$getquerydata['Admin_ID'];
    }


	if(mysqli_num_rows($result)!==0){
		session_start();
		$_SESSION['admin_username']=$admin_username_login;
		header("Location: admin-datasets.php");
    }
    else{
        echo "Incorrect Email and Password!";
        exit();
    }}
?>
