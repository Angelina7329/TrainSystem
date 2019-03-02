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
	<div class="settings-pane">
			
		<a href="#" data-toggle="settings-pane" data-animate="true">
			&times;
		</a>
		
		<div class="settings-pane-inner">
			
			<div class="row">
				
				<div class="col-md-4">
					
					<div class="user-info">
						
						<div class="user-image">
							<a href="extra-profile.html">
								<img src="Admin/assets/images/user-2.png" class="img-responsive img-circle" />
							</a>
						</div>
						
						<div class="user-details">
							
							<h3>
								<a href="extra-profile.html">John Smith</a>
								
								<!-- Available statuses: is-online, is-idle, is-busy and is-offline -->
								<span class="user-status is-online"></span>
							</h3>
							
							<p class="user-title">Web Developer</p>
							
							<div class="user-links">
								<a href="extra-profile.html" class="btn btn-primary">Edit Profile</a>
								<a href="extra-profile.html" class="btn btn-success">Upgrade</a>
							</div>
							
						</div>
						
					</div>
					
				</div>
				
				<div class="col-md-8 link-blocks-env">
					
					<div class="links-block left-sep">
						<h4>
							<span>Notifications</span>
						</h4>
						
						<ul class="list-unstyled">
							<li>
								<input type="checkbox" class="cbr cbr-primary" checked="checked" id="sp-chk1" />
								<label for="sp-chk1">Messages</label>
							</li>
							<li>
								<input type="checkbox" class="cbr cbr-primary" checked="checked" id="sp-chk2" />
								<label for="sp-chk2">Events</label>
							</li>
							<li>
								<input type="checkbox" class="cbr cbr-primary" checked="checked" id="sp-chk3" />
								<label for="sp-chk3">Updates</label>
							</li>
							<li>
								<input type="checkbox" class="cbr cbr-primary" checked="checked" id="sp-chk4" />
								<label for="sp-chk4">Server Uptime</label>
							</li>
						</ul>
					</div>
					
					<div class="links-block left-sep">
						<h4>
							<a href="#">
								<span>Help Desk</span>
							</a>
						</h4>
						
						<ul class="list-unstyled">
							<li>
								<a href="#">
									<i class="fa-angle-right"></i>
									Support Center
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fa-angle-right"></i>
									Submit a Ticket
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fa-angle-right"></i>
									Domains Protocol
								</a>
							</li>
							<li>
								<a href="#">
									<i class="fa-angle-right"></i>
									Terms of Service
								</a>
							</li>
						</ul>
					</div>
					
				</div>
				
			</div>
		
		</div>
		
	</div>
	
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
								<a href="dashboard-1.html">
									<span class="title">添加乘客信息</span>
								</a>
							</li>
							<li>
								<a href="dashboard-2.html">
									<span class="title">查看乘客信息</span>
								</a>
							</li>
							<li>
								<a href="dashboard-3.html">
									<span class="title">修改乘客信息</span>
								</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="layout-variants.html">
							<i class="linecons-desktop"></i>
							<span class="title">乘客车票管理</span>
						</a>
						<ul>
							<li>
								<a href="layout-variants.html">
									<span class="title">查看乘客车票</span>
								</a>
							</li>
							<li>
								<a href="layout-collapsed-sidebar.html">
									<span class="title">修改乘客车票</span>
								</a>
							</li>
							<li>
								<a href="layout-static-sidebar.html">
									<span class="title">删除乘客车票</span>
								</a>
							</li>
						</ul>
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
								<a href="ui-tabs-accordions.html">
									<span class="title">减少指定车票</span>
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
							<li>
								<a href="train-add.php">
									<span class="title">增加车次</span>
								</a>
							</li>
							<li>
								<a href="train-change.php">
									<span class="title">修改车次</span>
								</a>
							</li>
							<li class="active">
								<a href="train-delete.php">
									<span class="title">删除车次</span>
								</a>
							</li>
						</ul>
					</li>
					
					<li>
						<a href="charts-main.html">
							<i class="linecons-globe"></i>
							<span class="title">Charts</span>
						</a>
						<ul>
							<li>
								<a href="charts-main.html">
									<span class="title">Chart Variants</span>
								</a>
							</li>
							<li>
								<a href="charts-range.html">
									<span class="title">Range Selector</span>
								</a>
							</li>
							<li>
								<a href="charts-sparklines.html">
									<span class="title">Sparklines</span>
								</a>
							</li>
							<li>
								<a href="charts-map.html">
									<span class="title">Map Charts</span>
								</a>
							</li>
							<li>
								<a href="charts-gauges.html">
									<span class="title">Circular Gauges</span>
								</a>
							</li>
							<li>
								<a href="charts-bar-gauges.html">
									<span class="title">Bar Gauges</span>
								</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="#">
							<i class="linecons-cloud"></i>
							<span class="title">Menu Levels</span>
						</a>
						<ul>
							<li>
								<a href="#">
									<i class="entypo-flow-line"></i>
									<span class="title">Menu Level 1.1</span>
								</a>
								<ul>
									<li>
										<a href="#">
											<i class="entypo-flow-parallel"></i>
											<span class="title">Menu Level 2.1</span>
										</a>
									</li>
									<li>
										<a href="#">
											<i class="entypo-flow-parallel"></i>
											<span class="title">Menu Level 2.2</span>
										</a>
										<ul>
											<li>
												<a href="#">
													<i class="entypo-flow-cascade"></i>
													<span class="title">Menu Level 3.1</span>
												</a>
											</li>
											<li>
												<a href="#">
													<i class="entypo-flow-cascade"></i>
													<span class="title">Menu Level 3.2</span>
												</a>
												<ul>
													<li>
														<a href="#">
															<i class="entypo-flow-branch"></i>
															<span class="title">Menu Level 4.1</span>
														</a>
													</li>
												</ul>
											</li>
										</ul>
									</li>
									<li>
										<a href="#">
											<i class="entypo-flow-parallel"></i>
											<span class="title">Menu Level 2.3</span>
										</a>
									</li>
								</ul>
							</li>
							<li>
								<a href="#">
									<i class="entypo-flow-line"></i>
									<span class="title">Menu Level 1.2</span>
								</a>
							</li>
							<li>
								<a href="#">
									<i class="entypo-flow-line"></i>
									<span class="title">Menu Level 1.3</span>
								</a>
							</li>
						</ul>
					</li>
					
					<li role="presentation" class="divider"></li>
					<li>	
						<a href="NewLogin.html"><span class="glyphicon glyphicon-user"></span> 切换管理员 </a>
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

						
						<ul class="dropdown-menu user-profile-menu list-unstyled">
							<li>
								<a href="#edit-profile">
									<i class="fa-edit"></i>
									个人资料
								</a>
							</li>
							<li>
								<a href="#settings">
									<i class="fa-wrench"></i>
									修改密码
								</a>
							</li>
							
							<li class="last">
								<a href="http://localhost/Logout.php">
									<i class="fa-lock"></i>
									注销
								</a>
							</li>
						</ul>
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
					<h1 class="title">关于车次信息</h1>
				</div>
						
			</div>
			<div class="panel panel-default">
			
				<div class="panel-heading">
					<div>
						<font style="font-family:'宋体';font-size:150%;color:#2C2E2F">编辑车次 -
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
					<p><a href = "train-delete1.php">点击返回</a></p>
					<?php
					if((!empty($_GET['tn']))&&(!empty($_GET['st']))){
						$tn = $_GET['tn'];
						$st = $_GET['st'];
					}else if((!empty($_POST['tn']))&&(!empty($_POST['st']))){
						$tn = $_POST['tn'];
						$st = $_POST['st'];
						//echo "成功了！";
					}else{
						echo '<p style = "color:red">页面访问错误！</p>';
						exit();
					}
					
					//连接数据库
					require("../mysql_connect.php");
					
					$enter = 0;
					
					if($_SERVER['REQUEST_METHOD']=='POST'){
						$errors = array();
						
						if(empty($_POST['origin'])){
							$errors[] = "你忘记了输入始发地!";
						}else{
							$ori = mysqli_real_escape_string($dbc,trim($_POST['origin']));
						}
						
						if(empty($_POST['destination'])){
							$errors[] = "你忘记了输入目的地!";
						}else{
							$des = mysqli_real_escape_string($dbc,trim($_POST['destination']));
						}
						
						if(empty($_POST['starttime'])){
							$errors[] = "你忘记了输入出发时间!";
						}else{
							$sta = mysqli_real_escape_string($dbc,trim($_POST['starttime']));
						}
						
						if(empty($_POST['arrivetime'])){
							$errors[] = "你忘记了输入到达时间!";
						}else{
							$arr= mysqli_real_escape_string($dbc,trim($_POST['arrivetime']));
						}
						
						if(empty($errors)){
							$q = "UPDATE trainnm SET StartLocation = '$ori',ArrivalLocation = '$des' ,DepartureTime = '$sta' , 
							ArrivalTime = '$arr' WHERE TrainNumber = '$tn' and DepartureTime = '$st'";
							$r = @mysqli_query($dbc,$q);
							if(mysqli_affected_rows($dbc)==1){
								echo '<p>该车次信息已被成功编辑！';
								$enter = 1;//已被修改
							}else if(mysqli_affected_rows($dbc)==0){
								echo'<p>你未做任何修改!';
							}else{
								echo'<p style = "color:red">由于以下错误导致该车次信息未正常编辑：</p>';
								echo'<p>'.mysqli_error($dbc).'</br>Query:'.$q.'</p>';
							}
						}else{
							echo'<p style = "color:red">发生了以下错误：</p>';
							foreach($errors as $msg){
								echo "-$msg</br>\n";
							}
							echo '<p style = "color:red">请重试！</p>';
						}
						
					}
					
					if($enter == 1){
						//及时更新出发时间
						$st = mysqli_real_escape_string($dbc,trim($_POST['starttime']));
					}
					//总是显示表格
					$q = "SELECT StartLocation,ArrivalLocation,DepartureTime,ArrivalTime FROM trainnm WHERE TrainNumber = '$tn' 
					AND DepartureTime = '$st'";
					$r = @mysqli_query($dbc,$q);
					//echo mysqli_num_rows($r);
					
					if(mysqli_num_rows($r)==1){
						$row = @mysqli_fetch_array($r,MYSQLI_NUM);
						echo 
						'<form role="form" action="edit_train.php" method="post" >
							<div class="form-group has-info">
								<label class="col-sm-3 control-label"></label>
								<label class="col-sm-1 control-label" for="origin"><h4>始发地:</h4></label>
								<input type="text" name="origin" class="form-control" id="origin" style="width:400px; height:35px;" class="form-control" 
								value="'.$row[0].'"/>
							</div>
							<div class="form-group-separator"></div>
							<div class="form-group has-info">
								<label class="col-sm-3 control-label"></label>
								<label class="col-sm-1 control-label" for="destination"><h4>目的地:</h4></label>
								<input type="text" name="destination" class="form-control" id="destination" style="width:400px; height:35px;" class="form-control" 
								value="'.$row[1].'"/>
							</div>
							<div class="form-group-separator"></div>
							<div class="form-group has-info">
								<label class="col-sm-3 control-label"></label>
								<label class="col-sm-1 control-label" for="starttime"><h4>出发时间:</h4></label>
								<input type="text" name="starttime" class="form-control" id="starttime" style="width:400px; height:35px;" class="form-control" 
								value="'.substr($row[2],0,16).'"/>
							</div>
							<div class="form-group-separator"></div>
							<div class="form-group has-info">
								<label class="col-sm-3 control-label"></label>
								<label class="col-sm-1 control-label" for="arrivetime"><h4>到达时间:</h4></label>
								<input type="text" name="arrivetime" class="form-control" id="arrivetime" style="width:400px; height:35px;" class="form-control" 
								value="'.substr($row[3],0,16).'"/>
							</div>
							<div class="form-group-separator"></div>
							<div class="form-group has-info">
							<input type = "hidden" name = "tn" value="'.$tn.'"/>
							</div>
							<div class="form-group has-info">
							<input type = "hidden" name = "st" value="'.$st.'"/>
							</div>
							<center>
								<button type="submit" class="btn" style="background:#2C2E2F;color:white " >提交</button>
							</center>
						</form>';
							
					}else{
						echo'<p style = "color:red">由于以下错误导致该车次信息无法正常显示：</p>';
						echo'<p>'.mysqli_error($dbc).'</br>Query:'.$q.'</p>';
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
						- 点击访问 <a href="http://localhost/HomePage.html" title="首页" target="_blank">官方网站 </a>
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
