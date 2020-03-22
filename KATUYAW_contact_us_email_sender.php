<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
if (isset($_POST["contact_us"]))
{

$name=$_POST["name"];
$email=$_POST["email"];
$phone=$_POST["phone"];
$message=$_POST["message"];

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);

try {
    $mail->isSMTP();                                           
    $mail->Host       = 'smtp.gmail.com';                    
    $mail->SMTPAuth   = true;                                   
    $mail->Username   = 'katuyawkatutubongsayaw@gmail.com';                    
    $mail->Password   = '0Oldspark5<+>Katuyaw';                               
    $mail->SMTPSecure = 'ssl';         
    $mail->Port       = 465;                                    

    $mail->setFrom($email, 'KATUYAW Contact Us');
    $mail->addAddress('katuyawkatutubongsayaw@gmail.com');     
    $mail->addReplyTo($email, 'Reply');

    $mail->isHTML(true);                                  
    $mail->Subject = 'Contact Us: '.$email;
    $mail->Body    = "<b>Email of sender: </b>".$email."<br><b>Name of Sender: </b>".$name.'<br>'."<b>Message: </b>".$message;

    $mail->send();
    header("location: index.html");
} catch (Exception $e) {
    echo "Email could not be sent. Mailer Error: {$mail->ErrorInfo}";
    exit();
}
}
?>