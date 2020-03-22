<?php
$host = 'localhost';
$user = 'root';
$password = '';
$db = 'katuyaw';

$con = @mysqli_connect($host, $user, $password, $db);

if (!$con) 
{
    die('cannot connect to the database!');
} 
else 
{
    @mysqli_select_db($con, "katuyaw");
}
?>

