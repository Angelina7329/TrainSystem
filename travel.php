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


</head>

<body class="homepage">
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
    <div class="center">
      <h2>江南印象</h2>
      <hr>
      <p class="lead"><span style = "font-family:"微软雅黑">面朝大海，春暖花开。出去看看这人间四月天。</br>我们在合适的时间时间为你提供了合适的旅游线路规划图，我们希望你可以enjoy your travel and easy go. </span></p>
    </div>
    <div class="row">
      <div class="col-xs-12 col-sm-4 col-md-6">
        <div class="recent-work-wrap"> <img class="img-responsive" src="Index/images/portfolio/small/杭州.jpg" alt="">
          <div class="overlay">
            <div class="recent-work-inner">
              <h3><a href="#">忆江南|最忆是杭州</a> </h3>
              <a class="preview" href="Index/images/portfolio/full/杭州.jpg" rel="prettyPhoto" title=""><i class="fa fa-search"></i> 点击查看大图</a> </div>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-4 col-md-6">
        <div class="recent-work-wrap"> <img class="img-responsive" src="Index/images/portfolio/small/厦门.jpg" alt="">
          <div class="overlay">
            <div class="recent-work-inner">
              <h3><a href="#">鼓浪屿畔|奏断琴弦</a></h3>
              <a class="preview" href="Index/images/portfolio/full/厦门.jpg" rel="prettyPhoto"><i class="fa fa-search"></i> 点击查看大图</a> </div>
          </div>
        </div>
      </div>
	</div>
	<div calss = "row">
	<div class="col-xs-12 col-sm-4 col-md-6">
	<div class="list-group">
		<a href="#" class="list-group-item "style = "background-color:#F39C12" >
		  <h4 class="list-group-item-heading" >
			 杭州-3日
		  </h4>
		</a>
		<a href="#" class="list-group-item">
			<span class="glyphicon glyphicon-calendar"></span>6月,2017<br />
			<span class="glyphicon">&nbsp;</span><br />
		</a>
		<a href="#" class="list-group-item " ;>
		  <span class="glyphicon glyphicon-map-marker"></span>【day1】之江九溪，翠绿的杭州<br />
		  <span class="glyphicon">&nbsp;</span>河坊街景区 -南宋御街 -浙江大学 -九溪 - 九溪烟树 -白堤<br />  
			<span class="glyphicon glyphicon-map-marker"></span>【day2】灵隐<br />
			<span class="glyphicon">&nbsp;</span>灵隐寺<br /> 
			<span class="glyphicon glyphicon-map-marker"></span>【day3】暴走西湖，用最热烈的方式告别杭州！<br />
			<span class="glyphicon">&nbsp;</span>西湖<br /> 
		</a>
		<a href="#" class="list-group-item">
			<p>
			关于杭州，有太多的赞誉。上有天堂，下有苏杭。淡妆浓抹总相宜的西湖，西子湖畔的灵山秀水孕育的种种情怀，无不让人着迷。
			</p>
		</a>
		<a href="travel_gonglue.php#section-1" class="list-group-item" style = "background-color:#FBE2BA" >
			<p>点击了解详情</p>
		</a>
	</div>
	</div>
	<div class="col-xs-12 col-sm-4 col-md-6">
	<div class="list-group">
		<a href="#" class="list-group-item "style = "background-color:#F39C12" >
		  <h4 class="list-group-item-heading" >
			 厦门-3日
		  </h4>
		</a>
		<a href="#" class="list-group-item">
			<span class="glyphicon glyphicon-calendar"></span>6月,2017<br />
			<span class="glyphicon">&nbsp;</span><br />
		</a>
		<a href="#" class="list-group-item " ;>
		  <span class="glyphicon glyphicon-map-marker"></span>【day1】厦门<br />
		  <span class="glyphicon">&nbsp;</span>南普陀寺 - 厦门大学 - 白城沙滩<br />  
			<span class="glyphicon glyphicon-map-marker"></span>【day2】厦门<br />
			<span class="glyphicon">&nbsp;</span>胡里山炮台 - 环岛路 - 曾厝垵 - 中山路 - 厦门台湾小吃街<br /> 
			<span class="glyphicon glyphicon-map-marker"></span>【day3】厦门<br />
			<span class="glyphicon">&nbsp;</span>鼓浪屿 - 日光岩 - 菽庄花园 - 皓月园 - 世界名人蜡像馆 - 万国建筑博览<br /> 
		</a>
		<a href="#" class="list-group-item">
			<p>
			清代王步蟾诗咏厦门：“汪洋大海作藩篱，四面弯环绕鹭门。”在厦门的各处山石、寺观、屋宇之上到处都留下了墨客骚人的题咏。
			</p>
		</a>
		<a href="travel_gonglue.php#section-2" class="list-group-item" style = "background-color:#FBE2BA" >
			<p>点击了解详情</p>
		</a>
	</div>
	</div>
	</div>
	<div class="center">
      <h2>魅力南国</h2>
      <hr>
      <p class="lead"><span style = "font-family:"微软雅黑">面朝大海，春暖花开。出去看看这人间四月天。</br>我们在合适的时间时间为你提供了合适的旅游线路规划图，我们希望你可以enjoy your travel and easy go. </span></p>
    </div>
	<div class = "row">
      <div class="col-xs-12 col-sm-4 col-md-6">
        <div class="recent-work-wrap"> <img class="img-responsive" src="Index/images/portfolio/small/洱海.jpg" alt="">
          <div class="overlay">
            <div class="recent-work-inner">
              <h3><a href="#">彩云之南</a></h3>
              <a class="preview" href="Index/images/portfolio/full/洱海.jpg" rel="prettyPhoto"><i class="fa fa-search"></i> 点击查看大图</a> </div>
          </div>
        </div>
      </div>
      <div class="col-xs-12 col-sm-4 col-md-6">
        <div class="recent-work-wrap"> <img class="img-responsive" src="Index/images/portfolio/small/凤凰.jpg" alt="">
          <div class="overlay">
            <div class="recent-work-inner">
              <h3><a href="#">神秘湘西</a></h3>
              <a class="preview" href="Index/images/portfolio/full/凤凰.jpg" rel="prettyPhoto"><i class="fa fa-search"></i> 点击查看大图</a> </div>
          </div>
        </div>
      </div>
	</div>
	
	<div calss = "row">
	<div class="col-xs-12 col-sm-4 col-md-6">
	<div class="list-group">
		<a href="#" class="list-group-item "style = "background-color:#F39C12" >
		  <h4 class="list-group-item-heading" >
			 云南-7日
		  </h4>
		</a>
		<a href="#" class="list-group-item">
			<span class="glyphicon glyphicon-calendar"></span>6月,2017<br />
			<span class="glyphicon">&nbsp;</span><br />
		</a>
		<a href="#" class="list-group-item " ;>
		  <span class="glyphicon glyphicon-map-marker"></span>【day1】丽江<br />
		  <span class="glyphicon">&nbsp;</span>玉龙雪山 - 玉水寨<br />  
			<span class="glyphicon glyphicon-map-marker"></span>【day2】丽江<br />
			<span class="glyphicon">&nbsp;</span>大研古城<br /> 
			<span class="glyphicon glyphicon-map-marker"></span>【day3】大理 <br />
			<span class="glyphicon">&nbsp;</span>大理古城 - 洱海<br /> 
			<span class="glyphicon glyphicon-map-marker"></span>【day4】大理 <br />
			<span class="glyphicon">&nbsp;</span>金顶寺 - 迦叶殿 - 弥勒院<br /> 
			<span class="glyphicon glyphicon-map-marker"></span>【day5】楚雄 <br />
			<span class="glyphicon">&nbsp;</span>楚雄<br /> 
			<span class="glyphicon glyphicon-map-marker"></span>【day6】昆明 <br />
			<span class="glyphicon">&nbsp;</span>石林 - 七彩云南 - 东西寺塔<br /> 
			<span class="glyphicon glyphicon-map-marker"></span>【day7】昆明 <br />
			<span class="glyphicon">&nbsp;</span>文明街历史文化街区 - 云南省博物馆<br /> 
		</a>
		<a href="#" class="list-group-item">
			<p>
			七日的云南之行，充分的感受丽江、大理、楚雄和昆明四地带来的魅力，深度了解云南的风土人情，云南的文明古迹。海拔四千米的玉龙雪山让初来云南的你感受到无穷的魅力。之后的大研古城，街道依山势而建，顺水流而设，以红色角砾岩铺就，令人流连忘返。高原明珠--洱海是来到云南必去的景点之一。楚雄与石林让人对云南更加喜爱。最后一天的云南省博物馆，让你对云南的文化有深刻的了解与认识。
			</p>
		</a>
		<a href="travel_gonglue.php#section-3" class="list-group-item" style = "background-color:#FBE2BA" >
			<p>点击了解详情</p>
		</a>
	</div>
	</div>
	<div class="col-xs-12 col-sm-4 col-md-6">
	<div class="list-group">
		<a href="#" class="list-group-item "style = "background-color:#F39C12" >
		  <h4 class="list-group-item-heading" >
			 湘西-6日
		  </h4>
		</a>
		<a href="#" class="list-group-item">
			<span class="glyphicon glyphicon-calendar"></span>6月,2017<br />
			<span class="glyphicon">&nbsp;</span><br />
		</a>
		<a href="#" class="list-group-item " ;>
		  <span class="glyphicon glyphicon-map-marker"></span>【day1】长沙<br />
		  <span class="glyphicon">&nbsp;</span>太平街 - 向群锅饺(坡子街店) - 火宫殿(坡子街总店) - 马王堆汉墓 - 橘子洲<br />  
			<span class="glyphicon glyphicon-map-marker"></span>【day2】长沙<br />
			<span class="glyphicon">&nbsp;</span>岳麓山 - 岳麓书院 - 爱晚亭 - 麓山寺 - 云麓宫<br /> 
			<span class="glyphicon glyphicon-map-marker"></span>【day3】武陵源 <br />
			<span class="glyphicon">&nbsp;</span>金鞭溪 - 袁家界 - 杨家界<br /> 
			<span class="glyphicon glyphicon-map-marker"></span>【day4】武陵源 →张家界<br />
			<span class="glyphicon">&nbsp;</span>天子山 - 十里画廊 - 天门山<br />
			<span class="glyphicon glyphicon-map-marker"></span>【day5】凤凰<br />
			<span class="glyphicon">&nbsp;</span>沱江 - 沱江跳岩 - 虹桥<br />
			<span class="glyphicon glyphicon-map-marker"></span>【day6】凤凰<br />
			<span class="glyphicon">&nbsp;</span>沈从文故居 - 回龙阁 - 万名塔 - 熊希龄故居<br />
		</a>
		<a href="#" class="list-group-item">
			<p>
			一片远离浮躁与喧嚣的边城净土，一个有故事的地方，数不清的少数民族村寨，层层叠叠的古老吊脚楼，浓浓的民族风情让人心驰神往。到湘西，恐怕最先想起的是凤凰城，还有行政不隶属于湘西但在地域上可划为湘西的张家界。湘西的美也绝不仅在一座凤凰城，山水间的芙蓉古镇，风景壮美的德夯大峡谷，原始淳朴的苗家、土家村寨，值得你好好花上几天去玩味。
			</p>
		</a>
		<a href="travel_gonglue.php#section-4" class="list-group-item" style = "background-color:#FBE2BA" >
			<p>点击了解详情</p>
		</a>
	</div>
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