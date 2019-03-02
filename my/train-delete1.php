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
	<link href="Admin/assets/css/bootstrap.min.css" rel="stylesheet">
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
						<font style="font-family:'宋体';font-size:150%;color:#2C2E2F">根据条件搜索车次信息</font>
					</div>
				</div>
				
				<div class = "panel-body">
				
					<form role="form" action="train-delete1.php" method="post">
							<div class = "row">
								<div class = "col-md-4">
								<p><span style = "color:#2C2E2F">车次编号：</span><input typen = "text" name = "trainnumber" placeholder="如：C11" style = "color:#2C2E2F"
								value = "<?php if (!empty($_POST['trainnumber']))echo $_POST['trainnumber'];?>"/></p>
								</div>
								<div class = "col-md-4">
								<p><span style = "color:#2C2E2F">始发地：</span><input typen = "text" name = "origin" placeholder="如：济南" style = "color:#2C2E2F"
								value = "<?php if (!empty($_POST['origin']))echo $_POST['origin'];?>"/></p>
								</div>
								<div class = "col-md-4">
								<p><span style = "color:#2C2E2F">目的地：</span><input typen = "text" name = "destination" placeholder="如：青岛" style = "color:#2C2E2F"
								value = "<?php if (!empty($_POST['destination']))echo $_POST['destination'];?>"/></p>
								</div>
							</div>
							<div class="form-group-separator"></div>
							<div class = "row">
								<div class = "col-md-4">
								<p><span style = "color:#2C2E2F">发车时间：</span><input typen = "text" name = "starttime" placeholder="如：2015-08-12 12:58" style = "color:#2C2E2F"
								value = "<?php if (!empty($_POST['starttime']))echo $_POST['starttime'];?>"/></p>
								</div>
								<div class = "col-md-4">
								<p><span style = "color:#2C2E2F">到达时间：</span><input typen = "text" name = "endtime" placeholder="如：2015-08-12 15:34" style = "color:#2C2E2F"
								value = "<?php if (!empty($_POST['endtime']))echo $_POST['endtime'];?>"/></p>
								</div>
								<div class = "col-md-1"></div>
								<div class = "col-md-2">
								<button type="submit" class="btn" style="width:85px; height:25px;background:#2C2E2F;color:white;padding-top:3px; " >查看</button>
								</div>
								<div class = "col-md-1"></div>
							</div>
							<div class="form-group-separator"></div>
					</form>
				</div>		
					
					
				<div class = "panel-body">	
				<div class="row">
								
								<div class="col-sm-12">
									
								<table class="table table-bordered table-striped" id="SortTable">
										<thead>
											<tr>
												<th>编辑</th>
												<th>删除</th>
												<th>车次</th>
												<th>出发时间</th>
												<th>到达时间</th>
												<th>始发站</th>
												<th>终点站</th>
										</thead>
										
										<tbody>
										
										<?php
											require("../mysql_connect.php");
											$q = "SELECT * FROM TrainNm";
											$add = 0;
											
											if(!empty($_POST['trainnumber'])){
												if($add == 0){
													$q = $q.' WHERE TrainNumber = "'.$_POST['trainnumber'].'" ';
													$add++;
												}else{
													$q = $q.'and TrainNumber = "'.$_POST['trainnumber'].'" ';
												}
											}
											
											if(!empty($_POST['starttime'])){
												if($add == 0){
													$q = $q.' WHERE DepartureTime = "'.$_POST['starttime'].'" ';
													$add++;
												}else{
													$q = $q.'and DepartureTime = "'.$_POST['starttime'].'" ';
												}
											}
											
											if(!empty($_POST['endtime'])){
												if($add == 0){
													$q = $q.' WHERE ArrivalTime = "'.$_POST['endtime'].'" ';
													$add++;
												}else{
													$q = $q.'and ArrivalTime = "'.$_POST['endtime'].'" ';
												}
											}
											
											if(!empty($_POST['origin'])){
												if($add == 0){
													$q = $q.' WHERE StartLocation = "'.$_POST['origin'].'" ';
													$add++;
												}else{
													$q = $q.'and StartLocation = "'.$_POST['origin'].'" ';
												}
											}
											
											if(!empty($_POST['destination'])){
												if($add == 0){
													$q = $q.' WHERE ArrivalLocation = "'.$_POST['destination'].'" ';
													$add++;
												}else{
													$q = $q.'and ArrivalLocation = "'.$_POST['destination'].'" ';
												}
											}
											
											$q = $q.";";
									
											//sql语句建立完毕
											
											$r = @mysqli_query($dbc,$q);
											$num = @mysqli_num_rows($r);
											
											if($num>0){
												//建立表头
												echo '<p>共有'.$num.'条符合条件的车次信息！</p>';
												while($row = mysqli_fetch_array($r,MYSQLI_ASSOC)){
													echo '<tr>
														<td align = "left"><a href = "edit_train.php?tn='.$row['TrainNumber'].'&st='.$row['DepartureTime'].'">Edit</a></td>
														<td align = "left"><a href = "delete_train.php?tn='.$row['TrainNumber'].'&st='.$row['DepartureTime'].'">Delete</a></td>
														<td align = "left">'.$row['TrainNumber'].'</td>
														<td align = "left">'.substr($row['DepartureTime'],0,16).'</td>
														<td align = "left">'.substr($row['ArrivalTime'],0,16).'</td>
														<td align = "left">'.$row['StartLocation'].'</td>
														<td align = "left">'.$row['ArrivalLocation'].'</td>
														</tr>
														';
												}
												
											}else{
												echo"<p style = \"color:red\">没有符合条件的车次</p>";
											}
											?>	
									
											
										</tbody>
	
								</table>
								</div>
							</div>
					
				</div>	
				
			
			</div>

			<footer class="main-footer sticky footer-type-1">
				
				<div class="footer-inner">
				
					<!-- Add your copyright text here -->
					<div class="footer-text">
						&copy;  
						<strong>火车订票系统管理员管理界面</strong> 
						- 点击访问 <a href="http://localhost/HomePage.html" title="网页模板" target="_blank">网站主页 </a>
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
