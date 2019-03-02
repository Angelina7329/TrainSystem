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
	<!--存放标题-->
	<h2>请输入你要搜索的车票信息</h2>
  </div>
	   <div class="container">
			<div class="row">
			<div class="col-md-1"></div>
				<div class="col-md-5">
				<form role="form" class="form-horizontal" action = "Home_TicketBook.php" method = "post">
					<div class="form-group">
						<label class="col-sm-2 control-label" for="field-1">出发地</label>
						
						<div class="col-sm-10">
							<input type="text" class="form-control" id="field-1" placeholder="如 济南"  name = "stl">
						</div>
					</div>
					<div class="form-group-separator"></div>
					<div class="form-group">
						<label class="col-sm-2 control-label" for="field-1" >目的地</label>
						
						<div class="col-sm-10">
							<input type="text" class="form-control" id="field-1" placeholder="如 青岛" name = "arl">
						</div>
					</div>
					<div class="form-group-separator"></div>
					<div class="form-group">
						<label class="col-sm-2 control-label" for="field-1">出发日</label>
						
						<div class="col-sm-10">
							<input type="text" class="form-control" id="field-1" placeholder="如 2016-04-03"  name = "std">
						</div>
					</div>
					<div class="form-group-separator"></div>
					<div class="form-group">
						<label class="col-sm-2 control-label" for="field-1" >返程日</label>
						
						<div class="col-sm-10">
							<input type="text" class="form-control" id="field-1" placeholder="如 2016-04-04" name = "ard">
						</div>
					</div>
					<center>
					<input type = "submit" class = "btn" value = "搜索" style="width:100px; height:25px;background:#2C2E2F;color:white;padding-top:3px; " />
					</center>			
				</form>
			
				
				</div class="col-md-6">
				<img src="images/about.jpg" class="img-responsive" alt=""/> 
				<div>
				
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