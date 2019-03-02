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
<form method="POST" action="chepiao-add-mysql.php" action="" onsubmit="return validate()">
	
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
					<li class="active opened active">
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
							<li class="active">
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
					
					<li>
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
							<li>
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
					<h1 class="title">车票增加</h1>
				</div>
				
					
					
			</div>
			<div class="panel panel-default">
			
				<div class="panel-heading">
					<div class="panel-title">
						<h3>请增加车票信息</h3>
					</div>
				</div>
				
				<div class="panel-body">
				
					<form role="form" action="" method="post" action="" onsubmit="return validate()">
						
						<div class="form-group has-info">
							<label class="col-sm-3 control-label"></label>
							<label class="col-sm-1 control-label" for="TicketNumber"><h4>车票编号</h4></label>
							<input type="text" name="TicketNumber" placeholder="请输入车票编号..." class="TicketNumber form-control" id="TicketNumber" style="width:400px; height:35px;" class="form-control" />
						</div>

						<div class="form-group-separator"></div>
						
						<div class="form-group has-info">
							<label class="col-sm-3 control-label"></label>
							<label class="col-sm-1 control-label" for="TrainNumber"><h4>车次</h4></label>
							<input type="text" name="TrainNumber" placeholder="请输入车次号..." class="TrainNumber form-control" id="TrainNumber" style="width:400px; height:35px;"   class="form-control" />
						</div>
						
						<div class="form-group-separator"></div>
						
						<div class="form-group has-info">
							<label class="col-sm-3 control-label"></label>
							<label class="col-sm-1 control-label" for="DepartureTime"><h4>发车时间</h4></label>
							<input type="text" name="DepartureTime" placeholder="请输入发车时间..." class="DepartureTime form-control" id="DepartureTime" style="width:400px; height:35px;" class="form-control" />
						</div>
						
						<div class="form-group-separator"></div>
						
						<div class="form-group has-info">
							<label class="col-sm-3 control-label"></label>
							<label class="col-sm-1 control-label" for="ArrivalTime"><h4>到达时间</h4></label>
							<input type="text" name="ArrivalTime" placeholder="请输入到达时间..." class="ArrivalTime form-control" id="ArrivalTime" style="width:400px; height:35px;" class="form-control" />
						</div>
						
						<div class="form-group-separator"></div>
						
						<div class="form-group has-info">
							<label class="col-sm-3 control-label"></label>
							<label class="col-sm-1 control-label" for="StartLocation"><h4>发车地点</h4></label>
							<input type="text" name="StartLocation" placeholder="请输入发车地点..." class="StartLocation form-control" id="StartLocation" style="width:400px; height:35px;" class="form-control" />
						</div>
						
						<div class="form-group-separator"></div>
						
						<div class="form-group has-info">
							<label class="col-sm-3 control-label"></label>
							<label class="col-sm-1 control-label" for="ArrivalLocation"><h4>到达地点</h4></label>
							<input type="text" name="ArrivalLocation" placeholder="请输入到达地点..." class="ArrivalLocation form-control" id="ArrivalLocation" style="width:400px; height:35px;"  class="form-control" />
						</div>
						
						<div class="form-group-separator"></div>
						
						
						<div class="form-group has-info">
							<label class="col-sm-3 control-label"></label>
							<label class="col-sm-1 control-label" for="carriage"><h4>车厢号</h4></label>
							<input type="text" name="carriage" placeholder="请输入车厢号..." class="carriage1 form-control" id="carriage1" style="width:400px; height:35px;" class="form-control" />
						</div>
						
						<div class="form-group-separator"></div>
						
						<div class="form-group has-info">
							<label class="col-sm-3 control-label"></label>
							<label class="col-sm-1 control-label" for="seat"><h4>座位号</h4></label>
							<input type="text" name="seat" placeholder="请输入座位号..." class="chepiaoshu1 form-control" id="chepiaoshu1" style="width:400px; height:35px;" class="form-control" />
						</div>
						
						<div class="form-group-separator"></div>
						
						<div class="form-group has-info">
							<label class="col-sm-3 control-label"></label>
							<label class="col-sm-1 control-label" for="seattype"><h4>座位类型</h4></label>
							<input type="text" name="seattype" placeholder="请输入座位类型..." class="chepiaoshu1 form-control" id="chepiaoshu1" style="width:400px; height:35px;" class="form-control" />
						</div>
						<div class="form-group-separator"></div>
						<div class="form-group has-info">
							<label class="col-sm-3 control-label"></label>
							<label class="col-sm-1 control-label" for="seattype"><h4>票价</h4></label>
							<input type="text" name="price" placeholder="请输入票价..." class="chepiaoshu1 form-control" id="chepiaoshu1" style="width:400px; height:35px;" class="form-control" />
						</div>
						
						<div class="form-group-separator"></div>
						<!--
						<div class="form-group has-info">
							<label class="col-sm-3 control-label"></label>
							<label class="col-sm-1 control-label" for="SeatType"><h4>座位类型</h4></label>
							<select name="SeatType" style="width:400px; height:35px;">
								<option value="1">特等座</option>
								<option value="2">商务座</option>
								<option value="3">一等座</option>
								<option value="4">二等座</option>
							</select>
						</div>
						-->
						
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
var TicketNumber=document.getElementById("TicketNumber").value
var TrainNumber=document.getElementById("TrainNumber").value
var DepartureTime=document.getElementById("DepartureTime").value
var ArrivalTime=document.getElementById("ArrivalTime").value
var StartLocation=document.getElementById("StartLocation").value
var ArrivalLocation=document.getElementById("ArrivalLocation").value
var carriage1=document.getElementById("carriage1").value
var chepiaoshu1=document.getElementById("chepiaoshu1").value
var carriage2=document.getElementById("carriage2").value
var chepiaoshu2=document.getElementById("chepiaoshu2").value
var carriage3=document.getElementById("carriage3").value
var chepiaoshu3=document.getElementById("chepiaoshu3").value
var carriage4=document.getElementById("carriage4").value
var chepiaoshu4=document.getElementById("chepiaoshu4").value

if (TicketNumber.length<1)
 {
 alert("车票编号不能为空！")
 return false;
 }
if (TrainNumber.length<1)
 {
 alert("车次信息不能为空！")
 return false;
 }
if (DepartureTime.length<1)
 {
 alert("发车时间不能为空！")
 return false;
 }
 if (ArrivalTime.length<1)
 {
 alert("到达时间不能为空！")
 return false;
 }
 if (StartLocation.length<1)
 {
 alert("发车地点不能为空！")
 return false;
 }
 if (ArrivalLocation.length<1)
 {
 alert("到达地点不能为空！")
 return false;
 }
 if (carriage1.length<1)
 {
 alert("商务座车厢数不能为空！")
 return false;
 }
 if (chepiaoshu1.length<1)
 {
 alert("商务座车票数不能为空！")
 return false;
 }
  if (carriage2.length<1)
 {
 alert("特等座车厢数不能为空！")
 return false;
 }
 if (chepiaoshu2.length<1)
 {
 alert("特等座车票数不能为空！")
 return false;
 }
  if (carriage3.length<1)
 {
 alert("一等座车厢数不能为空！")
 return false;
 }
 if (chepiaoshu3.length<1)
 {
 alert("一等座车票数不能为空！")
 return false;
 }
  if (carriage4.length<1)
 {
 alert("二等座车厢数不能为空！")
 return false;
 }
 if (chepiaoshu4.length<1)
 {
 alert("二等座车票数不能为空！")
 return false;
 }

 alert("添加信息成功！")
 return true;
 
}
</script>