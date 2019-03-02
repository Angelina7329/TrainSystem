<?php
$TicketNumber = $_POST['TicketNumber'];
$TrainNumber = $_POST['TrainNumber'];
$DepartureTime = $_POST['DepartureTime'];
$ArrivalTime = $_POST['ArrivalTime'];
$StartLocation = $_POST['StartLocation'];
$ArrivalLocation = $_POST['ArrivalLocation'];
$carriage = $_POST['carriage'];
$seat = $_POST['seat'];
$seattype = $_POST['seattype'];
$price = $_POST['price'];

//打印表单看是否正确
//var_dump($TicketNumber,$TrainNumber,$DepartureTime,$ArrivalTime,$StartLocation,$ArrivalLocation,$carriage1,$chepiaoshu1,$shangwu,
			//$carriage2,$chepiaoshu2,$tedeng,$carriage3,$chepiaoshu3,$yideng,$carriage4,$chepiaoshu4,$erdeng);

//连接MySQL
require("mysql_connect.php");
if($dbc){

	if($seattype == "一等座")$type = 1;
	if($seattype == "二等座")$type = 2;
	//mysql_select_db($dbname,$connection);
	$sql = "INSERT INTO `ticket` VALUES ('$TicketNumber','$TrainNumber','$DepartureTime','$ArrivalTime','$StartLocation','$ArrivalLocation',$carriage,$seat,$type,$price)";
    echo $sql;
	$result = mysqli_query($dbc,$sql);
	
	if($result){
		header("Location: http://localhost/chepiao-add.php"); 
	}else{
		echo "error"; 	
	}

}
?>