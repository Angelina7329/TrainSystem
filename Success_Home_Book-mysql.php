<?php

$realname = $_POST['username'];
$id = $_POST['id'];
$telephone = $_POST['telephone'];
$SeatType = $_POST['SeatType'];
//if($SeatType ==  "一等座")$type ="1";
//if($SeatType ==  "二等座")$type ="2";
$TicketNumber = "";

$TrainNumber = $_POST['TrainNumber'];
$DepartureTime = $_POST['DepartureTime'];
//var_dump($username,$id,$telephone,$SeatType,$TicketNumber,$TrainNumber,$DepartureTime);
require("mysql_connect.php");
var_dump($SeatType);
if($dbc){

	$sql = "SELECT * 
				FROM users
					WHERE realname = '$username' AND id = '$id' AND telephone = '$telephone' ";
	var_dump($sql);
	$result = mysqli_query($dbc,$sql);
	//存在该用户
	if($result){
		//获取数组第一张TicketNumber
		$tnzssql = "SELECT TicketNumber 
						FROM ticket 
							WHERE TrainNumber = '$TrainNumber' AND DepartureTime = '$DepartureTime' AND SeatType='$SeatType' 
							AND TicketNumber NOT IN(
													SELECT TicketNumber 
														FROM ticket NATURAL JOIN ticket_book
															WHERE TrainNumber = '$TrainNumber' AND DepartureTime = '$DepartureTime' AND ticket.SeatType='$SeatType'
													);";	
		var_dump($tnzssql);
		$Rtnzssql = @mysqli_query($dbc,$tnzssql);
		$row = mysqli_fetch_array($Rtnzssql);	
		$TicketNumber = $row[0];
		
		//在ticket_book中插入订票信息
		$tbsql = "INSERT INTO `ticket_book` VALUES ('$id','$TicketNumber')";
		$tbresult = mysqli_query($dbc,$tbsql);
		if(!$tbresult)
			echo "error ".mysqli_error($dbc); 	
		
		//成功后转跳余票查询界面
		header("Location: http://localhost/Success_Home_TicketBounced.php"); 
	}else{
		echo "error ".mysqli_error($dbc); 	
	}

}

?>