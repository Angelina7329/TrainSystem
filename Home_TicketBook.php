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
			<li class="active"><a href="Homepage.php">首页</a></li>
			<li><a href="Home_TicketQuery.php">车票查询</a></li>
			<li><a href="Home_TicketBook.php">预订车票</a></li>
			<li><a href="http://localhost/login/Login.php">退票</a></li>
			<li><a href="contact.php">联系我们</a></li>
        </ul>
	  </div>
	</div>
	
	<div class = "col-md-2">
		<div>
		<br/>
		<a href = "http://localhost/login/Login.php" style = "color:white;font-size:5px">登陆</a>
		<a href = "http://localhost/login/Register.php" style = "color:white;font-size:5px">注册</a>
		</div>
	</div>
	</div>
	
		
	</div>  
    </div>
  </nav>
</header>
<div id="inner-page">
  <div class="top-center">
	<!--存放搜索框-->
		<h2>请根据条件搜索车票信息</h2>
	   <form role="form" class="form-inline" method = "post" action = "Home_TicketBook.php">
			<div class="form-group">
				始发地:<input type="text" class="form-control" size="25" placeholder=" 如 济南" name = "stlocation" value = "<?php
				if(!empty($_POST['stl'])){
					echo $_POST['stl'];
				}else if(!empty($_POST['stlocation'])){
					echo $_POST['stlocation'];
				}
				?>" />
			</div>
			<div class="form-group">
				目的地:<input type="text" class="form-control" size="25" name = "arlocation" placeholder="如 上海" value = "<?php
				if(!empty($_POST['arl'])){
					echo $_POST['arl'];
				}else if(!empty($_POST['arlocation'])){
					echo $_POST['arlocation'];
				}
				?>" />
			</div>
			<div class="form-group">
				出发日:<input type="text" class="form-control" size="25" name = "stdate" placeholder="如 2016-04-08" value = "<?php
				if(!empty($_POST['std'])){
					echo $_POST['std'];
				}else if(!empty($_POST['stdate'])){
					echo $_POST['stdate'];
				}
				?>"/>
			</div>
			<div class="form-group">
				返程日:<input type="text" class="form-control" size="25" name = "ardate" placeholder="如 2016-04-09" value = "<?php
					if(!empty($_POST['ard'])){
					echo $_POST['ard'];
				}else if(!empty($_POST['ardate'])){
					echo $_POST['ardate'];
				}
				?>"/>
			</div>
			<div class="form-group">
				<button type = "submit" class="btn" style = "background:#23529F;color:white">搜索</button>
			</div>
		</form>
  </div>
  <div class="container">
    <div class="about-us">
      <div class="row">
        <div class="col-md-12">
		<table class="table table-bordered table-striped">
			<thead>
				<tr>
					<th>车次</th>
					<th>出发时间</th>
					<th>到达时间</th>
					<th>始发站</th>
					<th>终点站</th>		
					<th>一等座</th>
					<th>二等座</th>
					<th>预订</th>
				</tr>	
			</thead>
			
			<tbody>
			<?php
				require("mysql_connect.php");
				$q = "SELECT * FROM trainnm";
				$add = 0;
				//自然语言查询语句接收
				if(!empty($_POST['stl'])){
						$q = $q.' WHERE StartLocation = "'.$_POST['stl'].'" ';
						$add++;
				}
				
				if(!empty($_POST['stlocation'])){
					if($add == 0){
						$q = $q.' WHERE StartLocation = "'.$_POST['stlocation'].'" ';
						$add++;
					}else{
						$q = $q.'and StartLocation = "'.$_POST['stlocation'].'" ';
					}
				}
				
				if(!empty($_POST['arl'])){
					if($add == 0){
						$q = $q.' WHERE ArrivalLocation = "'.$_POST['arl'].'" ';
						$add++;
					}else{
						$q = $q.'and ArrivalLocation = "'.$_POST['arl'].'" ';
					}
				}
				
				if(!empty($_POST['arlocation'])){
					if($add == 0){
						$q = $q.' WHERE ArrivalLocation = "'.$_POST['arlocation'].'" ';
						$add++;
					}else{
						$q = $q.'and ArrivalLocation = "'.$_POST['arlocation'].'" ';
					}
				}
				
				if(!empty($_POST['std'])){
					if($add == 0){
						$std = $_POST['std'];
						$q = $q." WHERE DepartureTime BETWEEN '$std' AND DATE_ADD('$std',INTERVAL 1 DAY)";
						$add++;
					}else{
						$std = $_POST['std'];
						$q = $q."and DepartureTime BETWEEN '$std' AND DATE_ADD('$std',INTERVAL 1 DAY)";
					}
				}
				
				if(!empty($_POST['stdate'])){
					if($add == 0){
						$stdate = $_POST['stdate'];
						$q = $q." WHERE DepartureTime BETWEEN '$stdate' AND DATE_ADD('$stdate',INTERVAL 1 DAY)";
						$add++;
					}else{
						$stdate = $_POST['stdate'];
						$q = $q."and DepartureTime BETWEEN '$stdate' AND DATE_ADD('$stdate',INTERVAL 1 DAY)";
					}
				}
				
				if(!empty($_POST['ard'])){
					if($add == 0){
						$ard = $_POST['ard'];
						$q = $q." WHERE ArrivalTime BETWEEN '$ard' AND DATE_ADD('$ard',INTERVAL 1 DAY)";
						$add++;
					}else{
						$ard = $_POST['ard'];
						$q = $q."and ArrivalTime BETWEEN '$ard' AND DATE_ADD('$ard',INTERVAL 1 DAY)";
					}
				}
				
				if(!empty($_POST['ardate'])){
					if($add == 0){
						$ardate = $_POST['ardate'];
						$q = $q." WHERE ArrivalTime BETWEEN '$ardate' AND DATE_ADD('$ardate',INTERVAL 1 DAY)";
						$add++;
					}else{
						$ardate = $_POST['ardate'];
						$q = $q."and ArrivalTime BETWEEN '$ardate' AND DATE_ADD('$ardate',INTERVAL 1 DAY)";
					}
				}
				
				$q = $q." and unix_timestamp(DepartureTime)>unix_timestamp(NOW());";

				if($add == 0){
					//do nothing
					//echo "<br/><br/><br/><br/><br/><br/>";
				}else{
					//sql语句建立完毕
					$r = @mysqli_query($dbc,$q);
					$num = @mysqli_num_rows($r);
	
					if($num>0){

						echo '<p>共有'.$num.'条符合条件的车次信息！</p>';
						while($row = mysqli_fetch_array($r,MYSQLI_ASSOC)){
							
							$yidengzongshu = "SELECT COUNT(*) 
												FROM ticket 
													WHERE TrainNumber = '{$row['TrainNumber']}' and DepartureTime = '{$row['DepartureTime']}' and SeatType='1';";
							$yidengdingpiao = "SELECT COUNT(*) 
												FROM ticket NATURAL JOIN ticket_book
													WHERE TrainNumber = '{$row['TrainNumber']}' and DepartureTime = '{$row['DepartureTime']}' and ticket.SeatType='1';";
						
							$erdengzongshu = "SELECT COUNT(*) 
												FROM ticket 
													WHERE TrainNumber = '{$row['TrainNumber']}' and DepartureTime = '{$row['DepartureTime']}' and SeatType='2';";
							$erdengdingpiao = "SELECT COUNT(*) 
												FROM ticket NATURAL JOIN ticket_book
													WHERE TrainNumber = '{$row['TrainNumber']}' and DepartureTime = '{$row['DepartureTime']}' and ticket.SeatType='2';";
							
							$Ryidengzongshu = @mysqli_query($dbc,$yidengzongshu);
							$row1 = mysqli_fetch_array($Ryidengzongshu);	
							$Ryidengdingpiao = @mysqli_query($dbc,$yidengdingpiao);
							$row2 = mysqli_fetch_array($Ryidengdingpiao);	
							$yidengshengyu = $row1[0] - $row2[0];
							
							$Rerdengzongshu = @mysqli_query($dbc,$erdengzongshu);
							$row3 = mysqli_fetch_array($Rerdengzongshu);			
							$Rerdengdingpiao = @mysqli_query($dbc,$erdengdingpiao);
							$row4 = mysqli_fetch_array($Rerdengdingpiao);
							$erdengshengyu = $row3[0] - $row4[0];
							
							echo '<tr>
								<td align = "left" >'.$row['TrainNumber'].'</td>
								<td align = "left">'.substr($row['DepartureTime'],0,16).'</td>
								<td align = "left">'.substr($row['ArrivalTime'],0,16).'</td>
								<td align = "left">'.$row['StartLocation'].'</td>
								<td align = "left">'.$row['ArrivalLocation'].'</td>
								<td align = "left">'.$yidengshengyu.'</td>
								<td align = "left">'.$erdengshengyu.'</td>
								<td align = "left"><a href = "http://localhost/login/Login.php">预订</a></td>
								</tr>
								';
						}
						
					}else{
						echo"共有0条符合条件的车次信息！</p>";
					}
				}
				?>	
			</tbody>
		</table>
		</div>
        </div>
		<div calss = "row">
			<?php
				echo "<br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>";
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