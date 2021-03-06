<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Easy Go | 联系我们</title>
<meta name="description" content="">

<!-- core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/font-awesome.min.css" rel="stylesheet">
<link href="css/prettyPhoto.css" rel="stylesheet">
<link href="css/main.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">

</head>

<body>
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
			<li class="active"><a href="SuccessLogin.php">首页</a></li>
			<li><a href="travel.php">去旅行</a></li>
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
			<a href = "User/User-Information.php"><?php echo $_SESSION['formusername'] ?></a>
			<a>/</a>
			<a href = "http://localhost/Logout.php">注销</a>
		</div>
	</div>
	
		
	</div>  
    </div>
  </nav>
</header>
<div id="inner-page">
  <div class="top-center">
    <h2>联系我们</h2>
    <p class="lead">您的建议是我们进步的动力。</p>
  </div>
  <div class="container">
    <div class="row contact_top">
      <div class="col-md-4 contact_details"> <i class="fa fa-map-marker fa-2x"></i>
        <p>滨海大道72号,<br>
          青岛, 山东</p>
      </div>
      <div class="col-md-4 contact_details"> <i class="fa fa-envelope-o fa-2x"></i>
        <p>1358007349@qq.com</p>
      </div>
      <div class="col-md-4 contact_details"> <i class="fa fa-phone fa-2x"></i>
        <p>17852411672</p>
      </div>
    </div>
    <div class="center">
      <h3>给我们写信</h3>
      <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    </div>
    <form name="sentMessage" id="contactForm" novalidate>
      <div class="row">
        <div class="col-sm-5 col-sm-offset-1">
          <div class="form-group">
            <label>姓名 *</label>
            <input type="text" id="name" class="form-control" required="required">
            <p class="help-block text-danger"></p>
          </div>
          <div class="form-group">
            <label>电子邮件 *</label>
            <input type="email" id="email" class="form-control" required="required">
            <p class="help-block text-danger"></p>
          </div>
          <div class="form-group">
            <label>电话 *</label>
            <input type="tel" id="phone" class="form-control" required="required">
            <p class="help-block text-danger"></p>
          </div>
        </div>
        <div class="col-sm-5">
          <div class="form-group">
            <label>信息 *</label>
            <textarea name="message" id="message" required class="form-control" rows="8"></textarea>
            <p class="help-block text-danger"></p>
          </div>
        </div>
        <div class="col-lg-12 text-center">
          <div id="success"></div>
          <button type="submit" class="btn btn-primary btn-lg">发送信息</button>
        </div>
      </div>
    </form>
  </div>
  <br>
  <br>
</div>
<footer id="footer">
  <div class="container">
    <div class="row">
      <div class="col-sm-6">Copyright &copy; 2016 Easy Go.</div>
      <div class="col-sm-6">
      </div>
    </div>
  </div>
</footer>
<script src="js/jquery.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/jquery.prettyPhoto.js"></script> 
<script src="js/jquery.isotope.min.js"></script> 
<script src="js/jqBootstrapValidation.js"></script> 
<script src="js/contact_me.js"></script> 
<script src="js/main.js"></script>
</body>
</html>