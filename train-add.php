<!DOCTYPE html>
<?php
session_start();
?>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Admin panel" />
	<meta name="author" content="" />
	
	<title>订票系统管理员界面</title>

	<link rel="stylesheet" href="Admin/assets/css/fonts/linecons/css/linecons.css">
	<link rel="stylesheet" href="Admin/assets/css/fonts/fontawesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="Admin/assets/css/bootstrap.css">
	<link rel="stylesheet" href="Admin/assets/css/xenon-core.css">
	<link rel="stylesheet" href="Admin/assets/css/xenon-forms.css">
	<link rel="stylesheet" href="Admin/assets/css/xenon-components.css">
	<link rel="stylesheet" href="Admin/assets/css/xenon-skins.css">
	<link rel="stylesheet" href="Admin/assets/css/custom.css">

	<script src="Admin/assets/js/jquery-1.11.1.min.js"></script>

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	
	
</head>
<body class="page-body">
<form method="POST" action="train-add-mysql.php" action="" onsubmit="return validate()">
	
	<div class="page-container"><!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->
			
		<!-- Add "fixed" class to make the sidebar fixed always to the browser viewport. -->
		<!-- Adding class "toggle-others" will keep only one menu item open at a time. -->
		<!-- Adding class "collapsed" collapse sidebar root elements and show only icons. -->
		<div class="sidebar-menu toggle-others fixed">
			
			<div class="sidebar-menu-inner">	
				
				<header class="logo-env">
					
					<!-- logo -->
					<div class="Admin">
						<a href="#">
							<p>信息管理</p>
						</a>
					</div>
					
					<!-- This will toggle the mobile menu and will be visible only on mobile devices -->
					<div class="mobile-menu-toggle visible-xs">
						<a href="#" data-toggle="user-info-menu">
							<i class="fa-bell-o"></i>
							<span class="badge badge-success">7</span>
						</a>
						
						<a href="#" data-toggle="mobile-menu">
							<i class="fa-bars"></i>
						</a>
					</div>
					
					<!-- This will open the popup with user profile settings, you can use for any purpose, just be creative -->
					<div class="settings-icon">
						<a href="#" data-toggle="settings-pane" data-animate="true">
							<i class="linecons-cog"></i>
						</a>
					</div>
					
								
				</header>

						
				<ul id="main-menu" class="main-menu">
					<!-- add class "multiple-expanded" to allow multiple submenus to open -->
					<!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->
					<li>
						<a href="Admin.html">
							<i class="linecons-cog"></i>
							<span class="title">乘客信息管理</span>
						</a>
						<ul>
							<li>
								<a href="PassengerInformation-add.php">
									<span class="title">添加乘客信息</span>
								</a>
							</li>
							<li>
								<a href="PassengerInformationTable.php">
									<span class="title">查看乘客信息</span>
								</a>
							</li>
							<li>
								<a href="PassengerInformation-change.php">
									<span class="title">修改/删除乘客信息</span>
								</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="PTtable.php">
							<i class="linecons-desktop"></i>
							<span class="title">乘客车票管理</span>
						</a>
						
					</li>
					<li>
						<a href="ui-panels.html">
							<i class="linecons-note"></i>
							<span class="title">车票信息管理</span>
						</a>
						<ul>
							<li>
								<a href="chepiaotable.php">
									<span class="title">查看车票信息</span>
								</a>
							</li>
							<li>
								<a href="chepiao-add.php">
									<span class="title">增加指定车票</span>
								</a>
							</li>
							<li>
								<a href="chepiao-change.php">
									<span class="title">修改/删除车票</span>
								</a>
							</li>
						</ul>
					</li>
					
					<li class="active opened active">
						<a href="tables-basic.html">
							<i class="linecons-database"></i>
							<span class="title">车次信息管理</span>
						</a>
						<ul>
							<li>
								<a href="traintable.php">
									<span class="title">查看车次表</span>
								</a>
							</li>
							<li class="active">
								<a href="train-add.php">
									<span class="title">增加车次</span>
								</a>
							</li>
							<li>
								<a href="train-change.php">
									<span class="title">修改/删除车次</span>
								</a>
							</li>
						</ul>
					</li>
					
				
					
					<li role="presentation" class="divider"></li>
					<li>	
						<a href="Homepage.php"><span class="glyphicon glyphicon-user"></span> 注销 </a>
					</li>
				</ul>
						
			</div>
			
		</div>
		
		<div class="main-content">
					
			<!-- User Info, Notifications and Menu Bar -->
			<nav class="navbar user-info-navbar" role="navigation">
				
				<!-- Left links for user info navbar -->
				<ul class="user-info-menu left-links list-inline list-unstyled">
					
					<li class="hidden-sm hidden-xs">
						<a href="#" data-toggle="sidebar">
							<i class="fa-bars"></i>
						</a>
					</li>

				</ul>

				
				
				
				
				<!-- Right links for user info navbar -->
				<ul class="user-info-menu right-links list-inline list-unstyled">
					
					<li class="dropdown user-profile">
						<a href="#" data-toggle="dropdown">
							<img src="Admin/assets/images/user-4.png" alt="user-image" class="img-circle img-inline userpic-32" width="28" />
							<span>
								<p>尊敬的<a href = "#" style = "color:red"> <?php echo $_SESSION['formusername'] ?> </a> 管理员，欢迎您！</p>
								<i class="fa-angle-down"></i>
							</span>
						</a>

					</li>
					
					<li>
						<a href="#" data-toggle="chat">
							<i class="fa-comments-o"></i>
						</a>
					</li>
					
				</ul>
				
			</nav>
			<div class="page-title">
				
				<div class="title-env">
					<h1 class="title"><增加车次信息></h1>
				</div>
				
					
					
			</div>
			<div class="panel panel-default">
			
				<div class="panel-heading">
					<div>
						<font style="font-family:'宋体';font-size:150%;color:black">请将所要增加的车次信息填入下表</font>
					</div>
				</div>
				
				<div class="panel-body">
				
					<form role="form" action="" method="post" action="" onsubmit="return validate()">
						
						<div class="form-group has-info">
							<label class="col-sm-3 control-label"></label>
							<label class="col-sm-2 control-label" for="TrainNumber"><h4>车次</h4></label>
							<input type="text" name="TrainNumber" placeholder="如 c12" class="TrainNumber form-control" id="TrainNumber" style="width:400px; height:35px;"   class="form-control" />
						</div>
						
						<div class="form-group-separator"></div>
						
						<div class="form-group has-info">
							<label class="col-sm-3 control-label"></label>
							<label class="col-sm-2 control-label" for="DepartureTime"><h4>发车时间</h4></label>
							<input type="text" name="DepartureTime" placeholder="如 2015-12-12 12：00" class="DepartureTime form-control" id="DepartureTime" style="width:400px; height:35px;" class="form-control" />
						</div>
						
						<div class="form-group-separator"></div>
						
						<div class="form-group has-info">
							<label class="col-sm-3 control-label"></label>
							<label class="col-sm-2 control-label" for="ArrivalTime"><h4>到达时间</h4></label>
							<input type="text" name="ArrivalTime" placeholder="如 2015-12-12 12：00" class="ArrivalTime form-control" id="ArrivalTime" style="width:400px; height:35px;" class="form-control" />
						</div>
						
						<div class="form-group-separator"></div>
						
						<div class="form-group has-info">
							<label class="col-sm-3 control-label"></label>
							<label class="col-sm-2 control-label" for="StartLocation"><h4>发车地点</h4></label>
							<input type="text" name="StartLocation" placeholder="如 青岛北" class="StartLocation form-control" id="StartLocation" style="width:400px; height:35px;" class="form-control" />
						</div>
						
						<div class="form-group-separator"></div>
						
						<div class="form-group has-info">
							<label class="col-sm-3 control-label"></label>
							<label class="col-sm-2 control-label" for="ArrivalLocation"><h4>到达地点</h4></label>
							<input type="text" name="ArrivalLocation" placeholder="如 青岛" class="ArrivalLocation form-control" id="ArrivalLocation" style="width:400px; height:35px;"  class="form-control" />
						</div>
						
						<div class="form-group-separator"></div>
						
						<div class="form-group has-info">
							<label class="col-sm-3 control-label"></label>
							<label class="col-sm-2 control-label" for="Carriage"><h4>一等座开始</h4></label>
							<input type="text" name="yidengstart" placeholder="如 1" class="Carriage form-control" id="Carriage" style="width:400px; height:35px;" class="form-control" />
						</div>
						
						<div class="form-group-separator"></div>
						
						<div class="form-group has-info">
							<label class="col-sm-3 control-label"></label>
							<label class="col-sm-2 control-label" for="Seat"><h4>一等座结束</h4></label>
							<input type="text" name="yidengend" placeholder="如 1" class="Seat form-control" id="Seat" style="width:400px; height:35px;" class="form-control" />
						</div>
						<div class="form-group-separator"></div>
						
						<div class="form-group has-info">
							<label class="col-sm-3 control-label"></label>
							<label class="col-sm-2 control-label" for="Seat"><h4>一等座位数</h4></label>
							<input type="text" name="yidengseat" placeholder="如 20" class="Seat form-control" id="Seat" style="width:400px; height:35px;" class="form-control" />
						</div>
						<div class="form-group-separator"></div>
						
						<div class="form-group has-info">
							<label class="col-sm-3 control-label"></label>
							<label class="col-sm-2 control-label" for="Seat"><h4>一等座票价</h4></label>
							<input type="text" name="yidengprice" placeholder="如 20" class="Seat form-control" id="Seat" style="width:400px; height:35px;" class="form-control" />
						</div>
						<div class="form-group-separator"></div>
						
						<div class="form-group has-info">
							<label class="col-sm-3 control-label"></label>
							<label class="col-sm-2 control-label" for="Carriage"><h4>二等座开始</h4></label>
							<input type="text" name="erdengstart" placeholder="如 1" class="Carriage form-control" id="Carriage" style="width:400px; height:35px;" class="form-control" />
						</div>
						
						<div class="form-group-separator"></div>
						
						<div class="form-group has-info">
							<label class="col-sm-3 control-label"></label>
							<label class="col-sm-2 control-label" for="Seat"><h4>二等座结束</h4></label>
							<input type="text" name="erdengend" placeholder="如 1" class="Seat form-control" id="Seat" style="width:400px; height:35px;" class="form-control" />
						</div>
						<div class="form-group-separator"></div>
						
						<div class="form-group has-info">
							<label class="col-sm-3 control-label"></label>
							<label class="col-sm-2 control-label" for="Seat"><h4>二等座位数</h4></label>
							<input type="text" name="erdengseat" placeholder="如 30" class="Seat form-control" id="Seat" style="width:400px; height:35px;" class="form-control" />
						</div>
						<div class="form-group-separator"></div>
						
						<div class="form-group has-info">
							<label class="col-sm-3 control-label"></label>
							<label class="col-sm-2 control-label" for="Seat"><h4>二等座票价</h4></label>
							<input type="text" name="erdengprice" placeholder="如 30" class="Seat form-control" id="Seat" style="width:400px; height:35px;" class="form-control" />
						</div>
						<div class="form-group-separator"></div>

						<center>
							<button type="submit" class="btn" style="background:#2C2E2F;color:white " >提交</button>
						</center>
					
					</form>
					
				</div>
			
			</div>


			<footer class="main-footer sticky footer-type-1">
				
				<div class="footer-inner">
				
					<!-- Add your copyright text here -->
					<div class="footer-text">
						&copy;  
						<strong>火车订票系统管理员管理界面</strong> 
						- 点击访问 <a href="http://localhost/Homepage.html" title="网页模板" target="_blank">官方网站 </a>
					</div>

				</div>
				
			</footer>
			
		</div>	
		
		
		
	</div>
	
	
	<div class="page-loading-overlay">
		<div class="loader-2"></div>
	</div>
	
	<!-- Bottom Scripts -->
	<script src="Admin/assets/js/bootstrap.min.js"></script>
	<script src="Admin/assets/js/TweenMax.min.js"></script>
	<script src="Admin/assets/js/resizeable.js"></script>
	<script src="Admin/assets/js/joinable.js"></script>
	<script src="Admin/assets/js/xenon-api.js"></script>
	<script src="Admin/assets/js/xenon-toggles.js"></script>


	<!-- JavaScripts initializations and stuff -->
	<script src="Admin/assets/js/xenon-custom.js"></script>
</form>
</body>
</html>

<script type="text/javascript"></script>					
<script type="text/javascript">
function validate()
{
var TrainNumber=document.getElementById("TrainNumber").value
var DepartureTime=document.getElementById("DepartureTime").value
var ArrivalTime=document.getElementById("ArrivalTime").value
var StartLocation=document.getElementById("StartLocation").value
var ArrivalLocation=document.getElementById("ArrivalLocation").value
var Carriage=document.getElementById("Carriage").value
var Seat=document.getElementById("Seat").value
var BookingTicketNumber=document.getElementById("BookingTicketNumber").value

submitOK="true"

if (TrainNumber.length<1)
 {
 alert("车次信息不能为空！")
 submitOK="false"
 }
if (DepartureTime.length<1)
 {
 alert("发车时间不能为空！")
 submitOK="false"
 }
 if (ArrivalTime.length<1)
 {
 alert("到达时间不能为空！")
 submitOK="false"
 }
 if (StartLocation.length<1)
 {
 alert("发车地点不能为空！")
 submitOK="false"
 }
 if (ArrivalLocation.length<1)
 {
 alert("到达地点不能为空！")
 submitOK="false"
 }
 if (Carriage.length<1)
 {
 alert("车厢数不能为空！")
 submitOK="false"
 }
 if (Seat.length<1)
 {
 alert("座位号不能为空！")
 submitOK="false"
 }
  if (BookingTicketNumber.length<1)
 {
 alert("订单票号不能为空！")
 submitOK="false"
 }
 if (submitOK=="true")
 {
 alert("添加信息成功！")
 }
if (submitOK=="false")
 {
 return false
 }
 
}
</script>