<?php
session_start();
?>
<?php

$formpassword = $_POST['formpassword'];
$formpassword2 = $_POST['formpassword'];
$realname = $_POST['realname'];
$IDnumber = $_POST['IDnumber'];
$telephone = $_POST['telephone'];
$EmailAddress = $_POST['EmailAddress'];

if($formpassword == null && $formpassword2 == null && $realname == null && $IDnumber == null && $telephone == null && $EmailAddress == null)
	header("Location: http://localhost/User/User-Information-change.php");
else{
	//Á¬½ÓMySQL
	$host = "localhost";
	$user = "root";
	$pwd = "";
	$dbname = "dbdesign";
	$connection = mysql_connect($host,$user,$pwd);
	if($connection){
		var_dump($formpassword,$realname,$IDnumber,$telephone,$EmailAddress);
		

		$formpassword = md5($formpassword);

		mysql_select_db($dbname,$connection);
		$sql = "UPDATE `userinformation`
					SET	`formpassword` = '$formpassword',`realname` = '$realname',`IDnumber` = '$IDnumber',`telephone` = '$telephone',`EmailAddress` = '$EmailAddress' 
						WHERE `formusername` = '{$_SESSION['formusername']}'";
		var_dump($sql);
		$result = mysql_query($sql,$connection);

		if($result){
			header("Location: http://localhost/User/User-Information.php"); 
		}else{
			echo "×¢²áÊ§°Ü£¡";
		}
		
	}

}
?>