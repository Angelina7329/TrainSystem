<?php
session_start();
?>
<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Easy Go</title>
<meta name="description" content="">

<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="Index/css/font-awesome.min.css" rel="stylesheet">
<link href="Index/css/prettyPhoto.css" rel="stylesheet">
<link href="Index/css/main.css" rel="stylesheet">
<link href="Index/css/responsive.css" rel="stylesheet">
<link href="Index/css/owl.carousel.css" rel="stylesheet">
<link href="Index/css/owl.theme.css" rel="stylesheet">
<link href="css/camera.css" rel="stylesheet">
    <!-- Template  -->
<link href="css/templatemo_style.css" rel="stylesheet">
<script src="/scripts/jquery.min.js"></script>
<script src="/bootstrap/js/bootstrap.min.js"></script>


</head>

<body class="homepage" data-spy="scroll" data-target="#myScrollspy">
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
			<li><a href="SuccessLogin.php">首页</a></li>
			<li class="active"><a href="travel.php">去旅行</a></li>
			<li><a href="Success_Home_TicketQuery.php">车票查询</a></li>
			<li><a href="Success_Home_TicketBook.php">预订车票</a></li>
			<li><a href="Success_Home_TicketBounced.php">退票</a></li>
			<li><a href="Success_contact.php">联系我们</a></li>
        </ul>
	  </div>
	</div>
	
	<div class = "col-md-2">
		<div>
		</br>
			<a href = "user/User-Information.php"><?php echo $_SESSION['formusername'] ?></a>
			<a>/</a>
			<a href = "http://localhost/Logout.php">注销</a>
		</div>
	</div>
	
		
	</div>  
    </div>
  </nav>
</header>


<section id="recent-works">
  <div class="container">	
  <div class = "row">
  <div class="col-md-6">
  </br>
  </br>
  </br>
  </br>
  </br>
  <center>
   <form role="form" class="form-horizontal" action = "travel_book_hangzhou_sure.php" method = "post">
					<div class="form-group">
						<label class="col-sm-2 control-label" for="field-1">出发地</label>
						
						<div class="col-sm-10">
							<input type="text" class="form-control" id="field-1" placeholder="如 济南"  name = "stl">
						</div>
					</div>
					<div class="form-group-separator"></div>
					
					<div class="form-group">
						<label class="col-sm-2 control-label" for="field-1">出发日期</label>
						
						<div class="col-sm-10">
							<input type="text" class="form-control" id="field-1" placeholder="如 2016-06-03"  name = "std">
						</div>
					</div>
					<center>
					<input type = "submit" class = "btn" value = "预订" style="width:100px; height:25px;background:#2C2E2F;color:white;padding-top:3px; " />
					</center>	
					
	</form>
	</center>
	</div>
		<div class="col-md-6">
				<img src="images/灵隐2.jpg" class="img-responsive" alt=""/> 
		</div>
				
	
  </div>
  </div>
</section>

<section id="middle">
  <div class="container">
    <div class="row">
      <div class="col-sm-6">
        <h3>有关我们</h3>
        <br>
        <div class="media"> <i class="fa fa-smile-o pull-left fa-3x"></i>
          <div class="media-body">
            <h3 class="media-heading"> 2+ 快乐的用户 </h3>
            你可以获得快乐</div>
        </div>
        <br>
        <div class="media"> <i class="fa fa-check-square-o pull-left fa-3x"></i>
          <div class="media-body">
            <h3 class="media-heading"> 600+ 旅游路线选择 </h3>
           你可以开阔眼界</div>
        </div>
        <br>
        <div class="media"> <i class="fa fa-trophy pull-left fa-3x"></i>
          <div class="media-body">
            <h3 class="media-heading"> 1w+ 车票选择 </h3>
            你可以方便出行</div>
        </div>
        <a href="Success_contact.php" class="readmore">Read More →</a> </div>
      <div class="col-sm-6">
        <div class="accordion">
          <h3>问题 & 回答</h3>
          <br>
          <div class="panel-group" id="accordion1">
            <div class="panel panel-default">
              <div class="panel-heading active">
                <h3 class="panel-title"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseOne1">问题1：你们的旅游线路功能什么时候上线啊?<i class="fa fa-angle-right pull-right"></i> </a> </h3>
              </div>
              <div id="collapseOne1" class="panel-collapse collapse in">
                <div class="panel-body">
                  <div class="media accordion-inner">
                    <div class="media-body">现功能正在内测中，请大家耐心等待!</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseTwo1">问题2：<i class="fa fa-angle-right pull-right"></i> </a> </h3>
              </div>
              <div id="collapseTwo1" class="panel-collapse collapse">
                <div class="panel-body">暂无</div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseThree1">问题3：<i class="fa fa-angle-right pull-right"></i> </a> </h3>
              </div>
              <div id="collapseThree1" class="panel-collapse collapse">
                <div class="panel-body">暂无 </div>
              </div>
            </div>
            <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseFour1"> 问题4：<i class="fa fa-angle-right pull-right"></i> </a> </h3>
              </div>
              <div id="collapseFour1" class="panel-collapse collapse">
                <div class="panel-body">暂无</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<footer id="footer">
  <div class="container">
    <div class="row">
      <div class="col-sm-6">Copyright &copy; 2016 Easy Go.</div>
      <div class="col-sm-6">
      </div>
    </div>
  </div>
</footer>
<script type="text/javascript" src="Index/js/jquery.js"></script> 
<script type="text/javascript" src="Index/js/bootstrap.min.js"></script> 
<script type="text/javascript" src="Index/js/jquery.prettyPhoto.js"></script> 
<script type="text/javascript" src="Index/js/jquery.isotope.min.js"></script> 
<script type="text/javascript" src="Index/js/owl.carousel.js"></script> 
<script type="text/javascript" src="Index/js/main.js"></script>
</body>
</html>