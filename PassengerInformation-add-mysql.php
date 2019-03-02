<?php

$formusername = $_POST['formusername'];
$formpassword = $_POST['formpassword'];
$formpassword2 = $_POST['formpassword'];
$realname = $_POST['realname'];
$IDnumber = $_POST['IDnumber'];
$telephone = $_POST['telephone'];
$EmailAddress = $_POST['EmailAddress'];
$type = $_POST['type'];

if($formusername == null && $formpassword == null && $formpassword2 == null && $realname == null && $IDnumber == null && $telephone == null
 && $EmailAddress == null &&$type == null)
	header("Location: http://localhost/PassengerInformation-add.php");
	

//连接MySQL
/*
$host = "localhost";
$user = "root";
$pwd = "";
$dbname = "train";
$connection = mysql_connect($host,$user,$pwd);
*/
require('mysql_connect.php');
if($dbc){

	$formpassword = SHA1($formpassword);

	//mysql_select_db($dbname,$connection);
	$sql = "INSERT INTO users(username,password,realname,id,telephone,email,type,registration_date) VALUES 
								  ('$formusername','$formpassword','$realname','$IDnumber','$telephone','$EmailAddress','$type',NOW())";
	//var_dump($sql);
	echo $sql;
	$result = mysqli_query($dbc,$sql);

	if($result){
		header("Location: http://localhost/Passenger/PassengerInformation-add.php"); 
	}else{
		//header("Location: skip.php?url=#&info=注册失败，请稍后重试！");
		echo mysqli_error($dbc);
		echo "注册失败！";
	}

}
?>