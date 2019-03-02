<?php

$TrainNumber = $_POST['TrainNumber'];
$DepartureTime = $_POST['DepartureTime'];
$ArrivalTime = $_POST['ArrivalTime'];
$StartLocation = $_POST['StartLocation'];
$ArrivalLocation = $_POST['ArrivalLocation'];
//$Carriage = $_POST['Carriage'];
//$Seat = $_POST['Seat'];
//$BookingTicketNumber = $_POST['BookingTicketNumber'];
$yidengstart = $_POST['yidengstart'];
$yidengend = $_POST['yidengend'];
$yidengseat = $_POST['yidengseat'];
$yidengprice = $_POST['yidengprice'];
$erdengstart = $_POST['erdengstart'];
$erdengend = $_POST['erdengend'];
$erdengseat = $_POST['erdengseat'];
$erdengprice = $_POST['erdengprice'];
//连接MySQL
require("mysql_connect.php");
if($dbc){

	//mysql_select_db($dbname,$connection);
	$sql = "INSERT INTO trainnm VALUES 
								  ('$TrainNumber','$DepartureTime','$ArrivalTime',
								  '$StartLocation','$ArrivalLocation',$yidengstart,$yidengend,$yidengseat,$yidengprice,$erdengstart,$erdengend,$erdengseat,$erdengprice)";
	//echo $sql;

	$result = mysqli_query($dbc,$sql);

	if($result){//应该添加 成功添加的消息，然后还要有车票的自动生成的语句
		
		//echo $q;
		
		//采用两个for循环,一等座是1，二等座是2
		$SeatType = 1;
		for($i = $yidengstart;$i<=$yidengend;$i++){
			$Carriage = $i;
			for($j = 0;$j<$yidengseat;++$j){
				$Seat = $j;
				$TicketNumber=$TrainNumber.$Carriage.$Seat;
				$q = "INSERT INTO ticket VALUES
		('$TicketNumber','$TrainNumber','$DepartureTime','$ArrivalTime','$StartLocation','$ArrivalLocation',$Carriage,$Seat,$SeatType,$yidengprice)";
				$r = mysqli_query($dbc,$q);
			}
		}
		//echo $q;
		
		$SeatType = 2;
		for($i = $erdengstart;$i<=$erdengend;$i++){
			$Carriage = $i;
			for($j = 0;$j<$erdengseat;++$j){
				$Seat = $j;
				$TicketNumber=$TrainNumber.$Carriage.$Seat;
				$q = "INSERT INTO ticket VALUES
		('$TicketNumber','$TrainNumber','$DepartureTime','$ArrivalTime','$StartLocation','$ArrivalLocation',$Carriage,$Seat,$SeatType,$erdengprice)";
				$r = mysqli_query($dbc,$q);
			}
		}
		
		
		header("Location: http://localhost/train-add.php"); 
	}else{
		echo "error ".mysqli_error($dbc); 	
	}

}
?>