<?php
session_start();
require('config2.php');
if(isset($_POST["purpose_submit"]))
	{
		$user_ID=$_SESSION['User_ID'];
		$Dance_ID=$_SESSION['Dance_ID'];

		$contact_no=$_POST['contact#'];
		$purpose=$_POST['purpose'];


		$file=$_FILES["proof_of_identity"]["name"];
		$tmp_name=$_FILES["proof_of_identity"]["tmp_name"];
		$path="identity/".$file;
		$file1=explode(".",$file);
		$ext=$file1[1];
		$allowed=array("doc","docs","docx","pdf","PNG","jpeg","bmp");
		if(in_array($ext,$allowed))
		{
			move_uploaded_file($tmp_name,$path);
 		}
 		else
 		{
 			echo "<b>Invalid File Format!<br>Allowed File format:</b> rar, zip, csv, bvh, FBX, 3d";
 			exit();
 		}
 		$query_run = mysqli_query($mysqli, "INSERT INTO `userrequesttodl_table`(`User_ID`, `DanceDataset_ID`, `User_ReasonforDL`, `Proof_of_Identity`, `Contact_No`) VALUES ('$user_ID','$Dance_ID','$purpose','$file','$contact_no')");
 		header("Location: KATUYAW_dance_list.php");
 	}
 ?>