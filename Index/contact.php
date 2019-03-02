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
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        <a class="navbar-brand" href="index.html"><i class="fa fa-sun-o"></i> Easy Go</a> </div>
      <div class="collapse navbar-collapse navbar-right">
        <ul class="nav navbar-nav">
           <li class="active"><a href="index.html">首页</a></li>
          <li><a href="ticket_query.php">车票查询</a></li>
          <li><a href="ticket_book.php">预订车票</a></li>
          <li><a href="#">改签</a></li>
          <li><a href="#">退票</a></li>
		  <li><a href="#">去旅行</a></li>
          <li><a href="contact.html">联系我们</a></li>
        </ul>
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
        <p>1500号舜华路,<br>
          济南, 山东</p>
      </div>
      <div class="col-md-4 contact_details"> <i class="fa fa-envelope-o fa-2x"></i>
        <p>sdu_lubaotong@163.com</p>
      </div>
      <div class="col-md-4 contact_details"> <i class="fa fa-phone fa-2x"></i>
        <p>17865169732<br>
          1786516....</p>
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