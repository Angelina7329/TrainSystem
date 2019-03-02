<!DOCTYPE html>
<html lang="zh-CN">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<meta name="description" content="Admin panel" />
		<meta name="author" content="" />
		<title>火车票订票系统</title>
		<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<script src="scripts/jquery.min.js"></script>
		<script src="bootstrap/js/bootstrap.min.js"></script>
		<meta charset="utf-8">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
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
		<style type="text/css">
			.stress{
				color:white;
			}
			.setBlue{
				background:	#449df5;
			}
			
			.bg{
				background-image: url(img/1.jpg);
				background-position: 0 0;
				background-repeat: repeat;
				background-attachment: scroll;
			}
			
			.row-center-block {
				display: block;
				margin-top: 25px;
		`		margin-bottom: auto;
			}
		</style>
		
	</head>
	<body class="page-body">
		<div class="container-fluid main-content" >
		<div class="panel panel-default">
		<div class = "panel-body">
		
			<!--page header-->		
			<div class="row  setBlue" >
				<div class = "col-md-2 stress">
				</div>
				<div class="col-md-8 stress text-center">
					</br>
					<h1>火车票订票管理信息系统     <small>欢迎访问本站!</small></h1>
					</br>
				</div>
				<div class = "col-md-2" text-center>
					</br>
					</br>
					</br>
					<p>
					<a href = "http://localhost/login/NewLogin.html" style = "color:white">登陆</a>
					<span style = "color:white">/</span>
					<a href = "http://localhost/login/NewRegister.html" style = "color:white">注册</a>
					</p>
					</br>
				</div>
			</div>		
			<div class="container " >
				<div class = "row ">
					<div class = "col-md-2 ">
						<!--图标-->
						<img src="img/校徽.jpg " class="img-circle img-thumbnail" width="90" height="90">
					</div>
					<div class = "col-md-10 row-center-block"><!--导航栏-->

						<ul class="nav nav-pills nav-justified">
							<li role="presentation" ><a href="newindex.php"><strong>首页</strong></a></li>
							<li role = "presentation" class = "dropdown">
								<a class="dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
									<strong>客运查询</strong> <span class="caret"></span>
								</a>
								<ul class="dropdown-menu">
									<li role = "presentation" ><a href = "#"><span style = "color:#23529F;"><strong>车票查询</strong></span></a></li>
									<li role = "presentation"><a href = "#"><span style = "color:#23529F;"><strong>车站查询</strong></span></a></li>
									<li role = "presentation"><a href = "#"><span style = "color:#23529F;"><strong>车次查询</strong></span></a></li>
								</ul>
							</li>
							<li role="presentation" class="active"><a href="#"><strong>预订车票</strong></a></li>
							<li role="presentation"><a href="#"><strong>车票改签</strong></a></li>
							<li role="presentation"><a href="#"><strong>退票</strong></a></li>
							<li role="presentation"><a href="#"><strong>关于我们</strong></a></li>
						</ul>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-sm-12">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h3 class="panel-title"><span style = "color:#23529F;"><strong>请搜索你需要的车票信息</strong></span></h3>
						</div>
						<div class="panel-body">
							<form role="form" class="form-inline">
								<div class="form-group">
									始发地:<input type="text" class="form-control" size="25" placeholder="济南" />
								</div>
								<div class="form-group">
									目的地:<input type="text" class="form-control" size="25" placeholder="上海" />
								</div>
								<div class="form-group">
									出发日:<input type="text" class="form-control" size="25" placeholder="2016-04-08" />
								</div>
								<div class="form-group">
									返程日:<input type="text" class="form-control" size="25" placeholder="2016-04-09" />
								</div>
								<div class="form-group">
									<button type = "submit" class="btn " style = "background:#23529F;color:white">搜索</button>
								</div>
							</form>
						
						</div>
					</div>
				
				</div>
			</div>
			
			<div class = "row">
			
			
			</div>

			
			<!--页脚-->
			<!-- Site footer -->
			<?php
			include('footer.html');
			?>
		</div>	
		</div>	
		</div><!--最外围的containner-->
		
		<!--预订车票-->
		
		
	
		
	</body>
</html>