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
					<h1 class="title">关于车票信息</h1>
				</div>
						
			</div>
			<div class="panel panel-default">
			
				<div class="panel-heading">
					<div>
						<font style="font-family:'宋体';font-size:150%;color:#2C2E2F">根据条件搜索乘客信息</font>
					</div>
				</div>
				
				<div class = "panel-body">
				
					<form role="form" action="PassengerInformation-change.php" method="post">
							<div class = "row">
								
								<div class = "col-md-4">
								<p><span style = "color:#2C2E2F">用户名：</span><input typen = "text" name = "formusername" placeholder="如：zhangsan" style = "color:#2C2E2F"
								value = "<?php if (!empty($_POST['formusername']))echo $_POST['formusername'];?>"/></p>
								</div>
								<div class = "col-md-4">
								<p><span style = "color:#2C2E2F">真实姓名：</span><input typen = "text" name = "realname" placeholder="如：张三" style = "color:#2C2E2F"
								value = "<?php if (!empty($_POST['realname']))echo $_POST['realname'];?>"/></p>
								</div>
								<div class = "col-md-4">
								<p><span style = "color:#2C2E2F">身份证号：</span><input typen = "text" name = "IDnumber" placeholder="如：37292219961212" style = "color:#2C2E2F"
								value = "<?php if (!empty($_POST['IDnumber']))echo $_POST['IDnumber'];?>"/></p>
								</div>
							</div>
							<div class="form-group-separator"></div>
							<div class = "row">
							<div class = "col-md-4">
								<p><span style = "color:#2C2E2F">电话号码：</span><input typen = "text" name = "telephone" placeholder="17865169733" style = "color:#2C2E2F"
								value = "<?php if (!empty($_POST['telephone']))echo $_POST['telephone'];?>"/></p>
								</div>
								<div class = "col-md-4">
								<p><span style = "color:#2C2E2F">电子邮箱：</span><input typen = "text" name = "EmailAddress" placeholder="如：1264@qq.com" style = "color:#2C2E2F"
								value = "<?php if (!empty($_POST['EmailAddress']))echo $_POST['EmailAddress'];?>"/></p>
								</div>
								<div class = "col-md-4">
								
							</div>
							<div class="form-group-separator"></div>
							<div class = "row">
							<div class = "col-md-9">
							</div>
							<div class = "col-md-3">
								<button type="submit" class="btn" style="width:120px; height:25px;background:#2C2E2F;color:white;padding-top:3px; " >查看</button>
							</div>
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
													<th>用户名</th>
													<th>真实姓名</th>
													<th>身份证号</th>
													<th>电话号码</th>
													<th>电子邮箱</th>
											</thead>
											
											<tbody>
											
											<?php
												require("mysql_connect.php");
												$q = "SELECT * FROM users";
												$add = 0;
												if(!empty($_POST['formusername'])){
													if($add == 0){
														$q = $q.' WHERE username = "'.$_POST['formusername'].'" ';
														$add++;
													}else{
														$q = $q.'and username = "'.$_POST['formusername'].'" ';
													}
												}
												
												if(!empty($_POST['realname'])){
													if($add == 0){
														$q = $q.' WHERE realname = "'.$_POST['realname'].'" ';
														$add++;
													}else{
														$q = $q.'and realname = "'.$_POST['realname'].'" ';
													}
												}
												
												if(!empty($_POST['IDnumber'])){
													if($add == 0){
														$q = $q.' WHERE id = "'.$_POST['IDnumber'].'" ';
														$add++;
													}else{
														$q = $q.'and id = "'.$_POST['IDnumber'].'" ';
													}
												}
												
												if(!empty($_POST['telephone'])){
													if($add == 0){
														$q = $q.' WHERE telephone = "'.$_POST['telephone'].'" ';
														$add++;
													}else{
														$q = $q.'and telephone = "'.$_POST['telephone'].'" ';
													}
												}
												
												if(!empty($_POST['EmailAddress'])){
													if($add == 0){
														$q = $q.' WHERE email = "'.$_POST['EmailAddress'].'" ';
														$add++;
													}else{
														$q = $q.'and email = "'.$_POST['EmailAddress'].'" ';
													}
												}
												
												$q = $q.";";
											
												//sql语句建立完毕
												
												$r = @mysqli_query($dbc,$q);
												$num = @mysqli_num_rows($r);
												
												if($num>0){
						
													echo '<p>共有'.$num.'条符合条件的车票信息！</p>';
													while($row = mysqli_fetch_array($r,MYSQLI_ASSOC)){
														echo '<tr>
															<td align = "left"><a href = "PassengerInformation-change-edit.php?tn='.$row['id'].'">Edit</a></td>
															<td align = "left"><a href = "PassengerInformation-change-delete.php?tn='.$row['id'].'">Delete</a></td>
															<td align = "left">'.$row['username'].'</td>
															<td align = "left">'.$row['realname'].'</td>
															<td align = "left">'.$row['id'].'</td>
															<td align = "left">'.$row['telephone'].'</td>
															<td align = "left">'.$row['email'].'</td>
															</tr>
															';
													}
													
												}else{
													echo"<p style = \"color:red\">没有符合条件的车票</p>";
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
							- 点击访问 <a href="http://localhost/Homepage.html" title="网页模板" target="_blank">网站主页 </a>
						</div>

					</div>
				
				</footer>
			
			</div>	
		
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
