<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Easy Go | 车票查询</title>
<meta name="description" content="">

<!-- core CSS -->
<link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
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
			<li class="active"><a href="Success_Home_TicketBook.php">预订车票</a></li>
			<li><a href="Success_Home_TicketBounced.php">退票</a></li>
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
    <div>
		<b>
			<font style="color:blue;font-size:250%">列车信息</font>
		</b>
	</div>
		<p class="lead">
			<?php
				
				require("mysql_connect.php");
				$TrainNumber = $_GET['TrainNumber'];
				$DepartureTime = $_GET['DepartureTime'];
				$q = "SELECT StartLocation,ArrivalLocation,TrainNumber,ArrivalTime,yidengprice,erdengprice
							FROM trainnm 
								WHERE TrainNumber = '$TrainNumber' AND DepartureTime = '$DepartureTime'";
				$r = @mysqli_query($dbc,$q);
				if(mysqli_num_rows($r)==1){
					$row = mysqli_fetch_array($r,MYSQLI_NUM);
				$yideng = $row[4];
				$erdeng = $row[5];
					
					echo "<div>
							<font style = "."font-size:100% ".">发车日期：</font>
							<b><font style = "."font-size:200%".">".substr($_GET['DepartureTime'],0,10)."</font></b>
							<font style = "."font-size:100%".">发车车次：</font>
							<b><font style = "."font-size:200%".">".$row[2]."</font></b>
							<font style = "."font-size:100% ".">次</font>
						  </div>
						  <br>";
					echo "<div>
							<b><font style = "."font-size:200%".">".$row[0]."</font></b>
							<font style = "."font-size:100% ".">站</font>
							<b><font style = "."font-size:200%".">(".substr($_GET['DepartureTime'],11,5)."开)——</font></b>
							<b><font style = "."font-size:200%".">".$row[1]."</font></b>
							<font style = "."font-size:100% ".">站</font>
							<b><font style = "."font-size:200%".">(".substr($row[3],11,5)."到)</font></b>
						  </div>";
				}
				
			?>
		</p>
  </div>
  <div class="container">
    <div class="row pricing-tables">
		<div class="col-md-2"></div>
      
		<div class="col-md-4 col-sm-3">
			<div class="pricing-table highlight-plan">
				
				<div class="plan-list">
					<form role="form" class="form-horizontal" action = "Success_Home_Book-mysql.php" method = "post">
					
						<div class="plan-name">
							<h3 id="SeatType" name = "SeatType" value = "1">一等座</h3>
						</div>
						<div class="plan-price">
							<div class="price-value">
							<?php
							echo "￥".$yideng;
							?>	
							</div>
							<div class="interval">per ticket</div>
						</div>
						
						<input type="hidden" name="SeatType" id="SeatType" value="1">
						<?php
						echo '
							<input type="hidden" name="TrainNumber" id="TrainNumber" value="'.$TrainNumber.' ">
							<input type="hidden" name="DepartureTime" id="DepartureTime" value="'.$DepartureTime.'">'
						?>
						<div class="form-group">
							<label class="col-sm-3 control-label" style="font-size:100%"> 姓名</label>
							<div class="col-sm-8">
							<input type="text" class="form-control" id="username" name = "username">
							</div>
						</div>
					
						<div class="form-group">
							<label class="col-sm-3 control-label" style="font-size:100%"> 证件号码</label>
							<div class="col-sm-8">
							<input type="text" class="form-control" id="id" name = "id">
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-sm-3 control-label" style="font-size:100%"> 证件类型</label>
							<div class="col-sm-8">
							<input type="text" disabled="" class="form-control" placeholder="二代身份证" id="idtype" name = "idtype">
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-sm-3 control-label" style="font-size:100%"> 手机号</label>
							<div class="col-sm-8">
							<input type="text" class="form-control" id="telephone" name = "telephone">
							</div>
						</div>
						<br>
					
						<div class="plan-signup">
							<button type = "submit" class="btn-system border-btn">预订</button>
						</div>
					</form>
				</div>
				
				
			</div>
		</div>
		
		<div class="col-md-4 col-sm-3">
			<div class="pricing-table highlight-plan">
				
				<div class="plan-list">
				
					<form role="form" class="form-horizontal" action = "Success_Home_Book-mysql.php" method = "post">
						<div class="plan-name">
							<h3 id="SeatType" name = "SeatType" >二等座</h3>
						</div>
						<div class="plan-price">
							<div class="price-value">
							<?php
							echo "￥".$erdeng;
							?>	
							</div>
							<div class="interval">per ticket</div>
						</div>
						
						<input type="hidden" name="SeatType" id="SeatType" value="2">
						<?php
						echo '
							<input type="hidden" name="TrainNumber" id="TrainNumber" value="'.$TrainNumber.' ">
							<input type="hidden" name="DepartureTime" id="DepartureTime" value="'.$DepartureTime.'">'
						?>
						<div class="form-group">
							<label class="col-sm-3 control-label" style="font-size:100%"> 姓名</label>
							<div class="col-sm-8">
							<input type="text" class="form-control" id="username" name = "username">
							</div>
						</div>
					
						<div class="form-group">
							<label class="col-sm-3 control-label" style="font-size:100%"> 证件号码</label>
							<div class="col-sm-8">
							<input type="text" class="form-control" id="id" name = "id">
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-sm-3 control-label" style="font-size:100%"> 证件类型</label>
							<div class="col-sm-8">
							<input type="text" disabled="" class="form-control" placeholder="二代身份证" id="idtype" name = "idtype">
							</div>
						</div>
						
						<div class="form-group">
							<label class="col-sm-3 control-label" style="font-size:100%"> 手机号</label>
							<div class="col-sm-8">
							<input type="text" class="form-control" id="telephone" name = "telephone">
							</div>
						</div>
						<br>
						<div class="plan-signup"> 
							<button type = "submit" class="btn-system border-btn">预订</button>
						</div>
					</form>
				</div>
				
				
			</div>
		</div>
	  
	  <div class="col-md-2">
	</div>
      
    </div>
  </div>
</div>


<footer id="footer">
  <div class="container">
    <div class="row">
      <div class="col-sm-6">Copyright @2016 Easy Go.</div>
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