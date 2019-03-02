<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en">
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


			<footer class="main-footer sticky footer-type-1">
				
				<div class="footer-inner">
				
					<!-- Add your copyright text here -->
					<div class="footer-text">
						&copy;  
						<strong>火车订票系统管理员管理界面</strong> 
						- 点击访问 <a href="http://localhost/Homepage.php" title="网页模板" target="_blank">官方网站 </a>
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

</body>
</html>