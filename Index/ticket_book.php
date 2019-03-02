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
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        <a class="navbar-brand" href="index.html"><i class="fa fa-sun-o"></i> Easy Go</a> </div>
      <div class="collapse navbar-collapse navbar-right">
        <ul class="nav navbar-nav">
          <li><a href="index.html">首页</a></li>
          <li><a href="ticket_query.php">车票查询</a></li>
          <li  class="active"><a href="ticket_book.php">预订车票</a></li>
          <li><a href="#">改签</a></li>
          <li><a href="#">退票</a></li>
		  <li><a href="#">去旅行</a></li>
          <li><a href="contact.php">联系我们</a></li>
        </ul>
      </div>
    </div>
  </nav>
</header>
<div id="inner-page">
  <div class="top-center">
	<!--存放搜索框-->
		<h2>请根据条件搜索车票信息</h2>
	   <form role="form" class="form-inline" method = "post" action = "ticket_book.php">
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
				<button type = "submit" class="btn " style = "background:#23529F;color:white">搜索</button>
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
					<th>始发站</th>
					<th>终点站</th>
					<th>出发时间</th>
					<th>到达时间</th>
					<th>预订</th>
				</tr>	
			</thead>
			
			<tbody>
			<?php
				require("../../mysql_connect.php");
				$q = "SELECT * FROM trainnm";
				$add = 0;
				
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
						$q = $q.' WHERE DepartureTime = "'.$_POST['std'].'" ';
						$add++;
					}else{
						$q = $q.'and DepartureTime = "'.$_POST['std'].'" ';
					}
				}
				
				if(!empty($_POST['stdate'])){
					if($add == 0){
						$q = $q.' WHERE DepartureTime = "'.$_POST['stdate'].'" ';
						$add++;
					}else{
						$q = $q.'and DepartureTime = "'.$_POST['stdate'].'" ';
					}
				}
				
				if(!empty($_POST['ard'])){
					if($add == 0){
						$q = $q.' WHERE ArrivalTime = "'.$_POST['ard'].'" ';
						$add++;
					}else{
						$q = $q.'and ArrivalTime = "'.$_POST['ard'].'" ';
					}
				}
				
				if(!empty($_POST['ardate'])){
					if($add == 0){
						$q = $q.' WHERE ArrivalTime = "'.$_POST['ardate'].'" ';
						$add++;
					}else{
						$q = $q.'and ArrivalTime = "'.$_POST['ardate'].'" ';
					}
				}
				
				$q = $q.";";
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
							echo '<tr>
								<td align = "left" >'.$row['TrainNumber'].'</td>
								<td align = "left">'.$row['StartLocation'].'</td>
								<td align = "left">'.$row['ArrivalLocation'].'</td>
								<td align = "left">'.substr($row['DepartureTime'],0,16).'</td>
								<td align = "left">'.substr($row['ArrivalTime'],0,16).'</td>
								<td align = "left"><a href = "#">预订</a></td>
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
<script src="js/jquery.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/jquery.prettyPhoto.js"></script> 
<script src="js/jquery.isotope.min.js"></script> 
<script type="text/javascript" src="js/owl.carousel.js"></script> 
<script src="js/main.js"></script>
</body>
</html>