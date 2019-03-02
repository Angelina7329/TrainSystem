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
<form method="POST" action="PassengerInformation-add-mysql.php" onsubmit="return validate()">
	
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
							<li class="active">
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
			<div class="page-title">
				
				<div class="title-env">
					<h1 class="title"><增加乘客信息></h1>
				</div>
				
					
					
			</div>
			<div class="panel panel-default">
			
				<div class="panel-heading">
					<div>
						<font style="font-family:'宋体';font-size:150%;color:black">请将所要增加的乘客信息填入下表</font>
					</div>
				</div>
				
				<div class="panel-body">
				
					<form role="form" action="" method="post" onsubmit="return validate()">
						
						<div class="form-group has-info">
							<label class="col-sm-3 control-label"></label>
							<label class="col-sm-1 control-label" for="formusername"><h4>用户名</h4></label>
							<input type="text" name="formusername" class="formusername form-control" id="formusername" style="width:400px; height:35px;"   class="form-control" />
						</div>
						
						<div class="form-group-separator"></div>
						
						<div class="form-group has-info">
							<label class="col-sm-3 control-label"></label>
							<label class="col-sm-1 control-label" for="formpassword"><h4>密码</h4></label>
							<input type="password" name="formpassword" class="formpassword form-control" id="formpassword" style="width:400px; height:35px;" class="form-control" />
						</div>
						
						<div class="form-group-separator"></div>
						
						<div class="form-group has-info">
							<label class="col-sm-3 control-label"></label>
							<label class="col-sm-1 control-label" for="formpassword2"><h4>确认密码</h4></label>
							<input type="password" name="formpassword2" class="formpassword2 form-control" id="formpassword2" style="width:400px; height:35px;" class="form-control" />
						</div>
						
						<div class="form-group-separator"></div>
						
						<div class="form-group has-info">
							<label class="col-sm-3 control-label"></label>
							<label class="col-sm-1 control-label" for="realname"><h4>真实姓名</h4></label>
							<input type="text" name="realname" class="realname form-control" id="realname" style="width:400px; height:35px;" class="form-control" />
						</div>
						
						<div class="form-group-separator"></div>
						
						<div class="form-group has-info">
							<label class="col-sm-3 control-label"></label>
							<label class="col-sm-1 control-label" for="IDnumber"><h4>身份证号</h4></label>
							<input type="text" name="IDnumber" class="IDnumber form-control" id="IDnumber" style="width:400px; height:35px;"  class="form-control" />
						</div>
						
						<div class="form-group-separator"></div>
						
						<div class="form-group has-info">
							<label class="col-sm-3 control-label"></label>
							<label class="col-sm-1 control-label" for="telephone"><h4>联系电话</h4></label>
							<input type="text" name="telephone" class="telephone form-control" id="telephone" style="width:400px; height:35px;" class="form-control" />
						</div>
						
						<div class="form-group-separator"></div>
						
						<div class="form-group has-info">
							<label class="col-sm-3 control-label"></label>
							<label class="col-sm-1 control-label" for="EmailAddress"><h4>电子邮箱</h4></label>
							<input type="text" name="EmailAddress" class="EmailAddress form-control" id="EmailAddress" style="width:400px; height:35px;" class="form-control" />
						</div>
						<div class="form-group-separator"></div>
						
						<div class="form-group has-info">
								<p class = "has-info"><span class = "col-sm-offset-3 col-sm-1 has-info" style = "font-size:16px" class = "set_style">用户类型</span> 
									<select name = "type" class = "has-info" style="width:200px;font-size:18px;height:35px"  id="yisi" onchange="Menu(this.form,3);">>
									<option value = "成人" <?php if(isset($_POST['type'])&&($_POST['type']=="成人"))echo 'selected = "selected"';?>>成人</option>
									<option value = "学生" <?php if(isset($_POST['type'])&&($_POST['type']=="学生"))echo 'selected = "selected"';?>>学生</option>
									<option value = "儿童" <?php if(isset($_POST['type'])&&($_POST['type']=="儿童"))echo 'selected = "selected"';?>>儿童</option>
									</select>
								</p>
						</div>
						<div class="form-group-separator"></div>
						<center>
							<button type="submit" class="btn" style="background:#2C2E2F;color:white " >添加</button>
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
var formusername=document.getElementById("formusername").value
var formpassword=document.getElementById("formpassword").value
var formpassword2=document.getElementById("formpassword2").value
var realname=document.getElementById("realname").value
var IDnumber=document.getElementById("IDnumber").value
var telephone=document.getElementById("telephone").value
var EmailAddress=document.getElementById("EmailAddress").value.indexOf("@")


if (formusername.length<1)
 {
 alert("用户名不能为空！")
 return false
 }
if (formpassword.length<1)
 {
 alert("密码不能为空！")
 return false
 }
 if (formpassword2.length<1)
 {
 alert("确认密码不能为空！")
 return false
 }
 if (realname.length<1)
 {
 alert("真实姓名不能为空！")
 return false
 }
 if (IDnumber.length<1)
 {
 alert("身份证号不能为空！")
 return false
 }
 if (telephone.length<1)
 {
 alert("电话号码不能为空！")
 return false
 }
 if (EmailAddress==-1)
 {
 alert("不是有效的电子邮件地址！")
 return false
 }
 
 if (submitOK=="true")
 {
 alert("添加信息成功！")
 return true
 }

 
}
</script>