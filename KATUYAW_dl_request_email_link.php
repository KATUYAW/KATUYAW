<?php
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require("config2.php");
$username=$_SESSION["User_Name"];
$dance_name=$_SESSION["Dance_Name"];
if (isset($_POST["Request_accepted"]))
{
$query_run = mysqli_query($mysqli, "SELECT * FROM `user_table` WHERE User_Name='$username'");

while($query_execute = mysqli_fetch_array($query_run))
{

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';


$mail = new PHPMailer(true);

	$query_run2 = mysqli_query($mysqli, "SELECT * FROM dancedataset_table WHERE DanceDataset_Name='$dance_name'");
    while($query_execute2 = mysqli_fetch_array($query_run2))
    {
    try {
    $mail->isSMTP();                                           
    $mail->Host       = 'smtp.gmail.com';                    
    $mail->SMTPAuth   = true;                                   
    $mail->Username   = 'katuyawkatutubongsayaw@gmail.com';                    
    $mail->Password   = '0Oldspark5<+>Katuyaw';                               
    $mail->SMTPSecure = 'ssl';         
    $mail->Port       = 465;                                    

    $mail->setFrom('katuyawkatutubongsayaw@gmail.com', 'KATUYAW');
    $mail->addAddress($query_execute['User_Email']);     
    $mail->addReplyTo('no-reply@gmail.com', 'No reply');

    $mail->isHTML(true);                                  
    $mail->Subject = 'Request to Access Dance: '.$dance_name;
    $mail->Body    = '<b>File Link:</b> <a href="upload/<?php echo $query_execute["DanceDataset_FileLink"] ?>LINK</a></td><br>

<b>Related Documents:</b> <a href="paper/<?php echo $query_execute["DanceDataset_Papers] ?>LINK</a></td><br><br>';

    $mail->send();
    echo 'Email has been sent, Check your email now!';
    exit();
    } catch (Exception $e) {
    echo "Email could not be sent. Mailer Error: {$mail->ErrorInfo}";
    exit();
    $dance_id=$_SESSION['DanceDataset_ID'];
    $query_run2 = mysqli_query($mysqli, "DELETE FROM `userrequesttodl_table` WHERE `userrequesttodl_table`.`DanceDataset_ID` = '$dance_id'");
    header("Location: KATUYAW_admin_individual_request_dl.php");
}

}
}
}
if (isset($_POST["Request_deleted"]))
{
    $dance_id=$_SESSION['DanceDataset_ID'];
    $query_run2 = mysqli_query($mysqli, "DELETE FROM `userrequesttodl_table` WHERE `userrequesttodl_table`.`DanceDataset_ID` = '$dance_id'");
    header("Location: KATUYAW_admin_individual_request_dl.php");
}
?>