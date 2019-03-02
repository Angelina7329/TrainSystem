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
			<li><a href="Success_Home_TicketQuery.php">车票查询</a></li>
			<li><a href="Success_Home_TicketBook.php">预订车票</a></li>
			<li><a href="#">改签</a></li>
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
		<h2><font style="color:black;font-size:150%">退票界面</font></h2>
  </div>
  <div class="container">
    <div class="about-us">
      <div class="row">
        <div class="col-md-12">
				<div class="panel-heading">
					<div>
						<font style="font-family:'宋体';font-size:150%;color:#2C2E2F">退订车票 -
						<?php
						if(!empty($_GET['tn'])){
							echo "车次号：".$_GET['tn'];
						}
						
						if(!empty($_GET['dt'])){
							echo " 发车时间：".$_GET['dt'];
						}
						
						if(!empty($_GET['tin'])){
							echo " 车票号：".$_GET['tin'];
						}
					
						?>
						</font>
					</div>
				</div>
				
				<div class = "panel-body">
				 <a href = "Success_Home_TicketBounced.php">点击返回</a>
				
					<?php
					
					if((!empty($_GET['tn']))){
						$tn = $_GET['tn'];
					}else if((!empty($_POST['tn']))){
						$tn = $_POST['tn'];
					}else{
						echo '<p style = "color:red">页面访问错误！</p>';
						exit();
					}
					if((!empty($_GET['dt']))){
						$dt = $_GET['dt'];
					}else if((!empty($_POST['dt']))){
						$dt = $_POST['dt'];
						//echo "成功了！";
					}else{
						echo '<p style = "color:red">页面访问错误！</p>';
						exit();
					}
					if((!empty($_GET['tin']))){
						$tin = $_GET['tin'];
					}else if((!empty($_POST['tin']))){
						$tin = $_POST['tin'];
						//echo "成功了！";
					}else{
						echo '<p style = "color:red">页面访问错误！</p>';
						exit();
					}
				
					//连接数据库
					require("mysql_connect.php");
					
					
					if($_SERVER['REQUEST_METHOD']=='POST'){
						if($_POST['sure']=='YES'){
							$q = "DELETE ticket_book
										FROM ticket_book JOIN ticket
											WHERE ticket.TicketNumber = ticket_book.TicketNumber AND ticket.TrainNumber = '$tn' AND ticket.DepartureTime = '$dt' AND ticket.TicketNumber = '$tin'";
							
							$r = @mysqli_query($dbc,$q);
							if(mysqli_affected_rows($dbc)==1){
								echo '<p>该车票信息已被成功退订!</p>';
							}else{
								echo'<p style = "color:red">由于以下错误导致该用户信息未被正常退订车票：</p>';
								echo'<p>'.mysqli_error($dbc).'</br>Query:'.$q.'</p>';
							}
						}else{
							echo '<p>该车票未被退订!</p>';
						}	
					}else{
						$q = "SELECT *
								FROM users JOIN ticket_book JOIN ticket
									WHERE users.id = ticket_book.id AND ticket.TicketNumber = ticket_book.TicketNumber AND ticket.TrainNumber = '$tn' AND ticket.DepartureTime = '$dt' AND ticket.TicketNumber = '$tin'";
						$r = @mysqli_query($dbc,$q);
						if(mysqli_num_rows($r)==1){
							$row = mysqli_fetch_array($r,MYSQLI_NUM);
							
							echo "<h3>你确定要退订该车票吗?</h3>";
							echo'<form role="form" action="Success_Home_TicketBounced-mysql.php" method="post">
							<div class="form-group has-info">
									<div calss = "col-md-2">
											<label>
												<input type="radio" name="sure" class="cbr cbr-blue" value = "YES" >
												确定
											</label>
									</div>
									<div calss = "col-md-2">
											<label>
												<input type="radio" name="sure" class="cbr cbr-red" value = "NO" checked = "checked">
												取消
											</label>
									</div>	
									<div calss = "col-md-2">
											<label>
												<button class="btn btn-primary">提交</button>
											</label>
									</div>	
							</div>
							<div class="form-group has-info">
							<input type = "hidden" name = "tn" value="'.$tn.'"/>
							<input type = "hidden" name = "dt" value="'.$dt.'"/>
							<input type = "hidden" name = "tin" value="'.$tin.'"/>
							</div>
							</form>';		
						}else{
							echo'<p style = "color:red">由于以下错误导致该网页未被正常访问：</p>';
							echo'<p>'.mysqli_error($dbc).'</br>Query:'.$q.'</p>';
						}
						
					}
					mysqli_close($dbc);
					?>
				</div>
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