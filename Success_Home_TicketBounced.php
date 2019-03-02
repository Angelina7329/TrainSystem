<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Easy Go | 车票预订</title>
<meta name="description" content="">

<!-- core CSS -->

<script src="../scripts/jquery.min.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>

<link href="Index/css/bootstrap.min.css" rel="stylesheet">
<link href="Index/css/font-awesome.min.css" rel="stylesheet">
<link href="Index/css/prettyPhoto.css" rel="stylesheet">
<link href="Index/css/main.css" rel="stylesheet">
<link href="Index/css/responsive.css" rel="stylesheet">
<link href="Index/css/owl.carousel.css" rel="stylesheet">
<link href="Index/css/owl.theme.css" rel="stylesheet">



</head>

<body>
<header id="header">
  <nav class="navbar navbar-inverse" role="banner">
    <div class="container">
	<div class = "row">
	<div class = "col-md-3">
	 <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        <a class="navbar-brand" href="index.html"><i class="fa fa-sun-o"></i> Easy Go</a>
	  </div>
	</div>
	
	<div class = "col-md-7">
	<div class="collapse navbar-collapse ">
        <ul class="nav navbar-nav">
			<li><a href="SuccessLogin.php">首页</a></li>
			<li><a href="travel.php">去旅行</a></li>
			<li><a href="Success_Home_TicketQuery.php">车票查询</a></li>
			<li><a href="Success_Home_TicketBook.php">预订车票</a></li>
			<li  class="active"><a href="Success_Home_TicketBounced.php">退票</a></li>
			<li><a href="Success_contact.php">联系我们</a></li>
        </ul>
	  </div>
	</div>
	
	<div class = "col-md-2">
		<div>
		</br>
			<a href = "User/User-Information.php"><?php echo $_SESSION['formusername'] ?></a>
			<a>/</a>
			<a href = "http://localhost/Logout.php">注销</a>
		</div>
	</div>
	
		
	</div>  
    </div>
  </nav>
</header>
<div id="inner-page">
  <div class="top-center">
	<!--存放搜索框-->
		<h2><font style="color:black;font-size:150%">已完成订单</font></h2>
  </div>
  <div class="container">
    <div class="about-us">
      <div class="row">
        <div class="col-md-12">
		<table class="table table-bordered table-striped">
			<thead>
				<tr>
					<th>车票号</th>
					<th>车次/出发时间</th>
					<th>始发/终点站</th>	
					<th>车厢/座位号</th>
					<th>旅客信息</th>
					<th>票款金额</th>
					<th>车票操作</th>
				</tr>	
			</thead>
			
			<tbody>
			<?php
				$username = $_SESSION['formusername'];
				require("mysql_connect.php");
				$sql = "SELECT ticket_book.TicketNumber,TrainNumber,DepartureTime,StartLocation,ArrivalLocation,Carriage,Seat,price,realname
							FROM ticket JOIN ticket_book JOIN users 
								WHERE ticket.TicketNumber = ticket_book.TicketNumber AND ticket_book.id = users.id AND users.username = '$username'";
				//echo $sql;
				//sql语句建立完毕
				$result = @mysqli_query($dbc,$sql);
				$num = @mysqli_num_rows($result);
					
				if($num>0){
					echo '<b><font style="color:black;font-size:250%">您共有'.$num.'条订票记录:</font></b>';
					echo '<br/><br/>';
					while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
						
						echo '<tr>
							<td align = "left" >'.$row['TicketNumber'].'</td>
							<td align = "left">'.$row['TrainNumber'].'/'.substr($row['DepartureTime'],0,16).'</td>
							<td align = "left">'.$row['StartLocation'].'/'.$row['ArrivalLocation'].'</td>
							<td align = "left">'.$row['Carriage'].'/'.$row['Seat'].'</td>
							<td align = "left">'.$row['realname'].'/二代身份证</td>
							<td align = "left">'.$row['price'].'</td>
							<td align = "left"><a href = "Success_Home_TicketBounced-mysql.php?tn='.$row['TrainNumber'].'&dt='.$row['DepartureTime'].'&tin='.$row['TicketNumber'].'">退票</a></td>
							</tr>
							';
					}				
				}
				?>	
			</tbody>
		</table>
		</div>
        </div>
		<div class = "row">
			<?php
				echo "<br/><br/><br/><br/><br/><br/>";
			?>
		</div>
      </div>
    </div>
  </div>
</div>

<footer id="footer">
  <div class="container">
    <div class="row">
      <div class="col-sm-6">Copyright &copy; 2016 Easy Go.</div>
      <div class="col-sm-6">
      </div>
    </div>
  </div>
</footer>
<script src="Index/js/jquery.js"></script> 
<script src="Index/js/bootstrap.min.js"></script> 
<script src="Index/js/jquery.prettyPhoto.js"></script> 
<script src="Index/js/jquery.isotope.min.js"></script> 
<script type="text/javascript" src="Index/js/owl.carousel.js"></script> 
<script src="Index/js/main.js"></script>
</body>
</html>