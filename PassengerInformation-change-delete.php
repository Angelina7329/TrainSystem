<!DOCTYPE html>

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
					<li class="active opened active">
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
							<li class="active">
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
					<h1 class="title">关于车票信息</h1>
				</div>
						
			</div>
			<div class="panel panel-default">
			
				<div class="panel-heading">
					<div>
						<font style="font-family:'宋体';font-size:150%;color:#2C2E2F">删除用户 -
						<?php
						if(!empty($_GET['tn'])){
							echo $_GET['tn'];
						}
						if(!empty($_POST['tn'])){
							echo $_POST['tn'];
						}
						?>
						</font>
					</div>
				</div>
				
				<div class = "panel-body">
				 <a href = "PassengerInformation-change.php">点击返回</a>
				
					<?php
					if((!empty($_GET['tn']))){
						$tn = $_GET['tn'];
					}else if((!empty($_POST['tn']))){
						$tn = $_POST['tn'];
						//echo "成功了！";
					}else{
						echo '<p style = "color:red">页面访问错误！</p>';
						exit();
					}
					
					//连接数据库
					require("mysql_connect.php");
					
					
					if($_SERVER['REQUEST_METHOD']=='POST'){
						if($_POST['sure']=='YES'){
							$q = "DELETE FROM users WHERE id = '$tn' LIMIT 1";
							$r = @mysqli_query($dbc,$q);
							if(mysqli_affected_rows($dbc)==1){
								echo '<p>该用户信息已被成功删除!</p>';
							}else{
								echo'<p style = "color:red">由于以下错误导致该用户信息未被正常删除：</p>';
								echo'<p>'.mysqli_error($dbc).'</br>Query:'.$q.'</p>';
							}
						}else{
							echo '<p>该用户信息未被删除!</p>';
						}	
					}else{
						$q = "SELECT realname,id,telephone,email 
								FROM users 
									WHERE id = '$tn'";
						$r = @mysqli_query($dbc,$q);
						if(mysqli_num_rows($r)==1){
							$row = mysqli_fetch_array($r,MYSQLI_NUM);
							
							echo "<h3>你确定要删除真实姓名为<b>".$row[0]."</b>身份证号为<b>".$row[1]."</b>电话号码为<b>".$row[2]."</b>电子邮箱为".$row[3]."的信息吗?</h3>";
							echo'<form role="form" action="PassengerInformation-change-delete.php" method="post">
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

			<footer class="main-footer sticky footer-type-1">
				
				<div class="footer-inner">
				
					<!-- Add your copyright text here -->
					<div class="footer-text">
						&copy;  
						<strong>火车订票系统管理员管理界面</strong> 
						- 点击访问 <a href="http://localhost/Homepage.html" title="首页" target="_blank">官方网站 </a>
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
