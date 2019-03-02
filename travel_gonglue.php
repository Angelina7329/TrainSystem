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
  
    <div class="row">
        <div class="col-xs-3" id="myScrollspy">
            <ul class="nav nav-tabs nav-stacked" data-spy="affix" data-offset-top="125">
                <li class="active"><a href="#section-1"><B>杭州</B></a></li>
                <li><a href="#section-2"><B>厦门</B></a></li>
                <li><a href="#section-3"><B>云南</B></a></li>
                <li><a href="#section-4"><B>湘西</B></a></li>
            </ul>
        </div>
		
        <div class="col-xs-9">
            <h2 id="section-1">杭州-3日</h2>
			<div class = "row">
			 <a href = "travel_book_hangzhou.php"><button type="button" class="btn btn-primary">预订车票</button></a>
			</div>
			
			<span class="glyphicon glyphicon-map-marker"></span>【day1】之江九溪，翠绿的杭州
			<p>
河坊街景区 -南宋御街 -浙江大学 -九溪 - 九溪烟树 -白堤
早上八点多，到达杭州。最近出门感觉都遇上下雨，到杭州东站的时候也是下雨。
先乘地铁到朋友那放下行李，然后乘地铁到河坊街附近的银泰新白鹿吃了午饭。在杭州吃饭，尤其一些火爆的店，可以用微信先排队，这样在去的路上就可以排队，可以省下很多时间。
吃完饭，到附近的河坊街逛逛。河坊街位于上城区，乘地铁到定安路可到达，乘坐25、35、51、108、187、212、327、992、西湖南线景区假日线、y10、y8等公交车在吴山公交中心站下车可到达。
附近的南宋御街人很少，可以慢慢逛。进河坊街不久，就可以看到一尊显眼的佛像，右手边就是铜屋。铜屋里有很多铜艺术品，都很漂亮，值得一逛～一路上也有很多店卖丝绸制品，有兴趣的可以看看。
			</p>
			<img src="images/杭州1.jpg">
			<img src="images/杭州2.jpg">
			<p><span class="glyphicon glyphicon-map-marker"></span>【day2】灵隐</p>
			<p>
灵隐寺
没有任何行程计划，所以很晚起床。说到这，我原本也是一个可以睡到很晚才起床的人，在北方呆久了，居然六点多就醒了，完全不适应朋友八九点才起床的节奏
过了周五周六，住宿就比较好找了。考虑到朋友周一要上班，起床后先定了酒店，吃饱喝足之后先到酒店办理入住。另有在杭州上学的同学，恰巧有在上海的同学也过来，于是相约一起逛灵隐寺。几路人马在灵隐寺集合，毕业之后第一次的相聚，着实让人有点小激动啊～
灵隐寺位于西湖区法云弄1号，乘公交J17、J18、K837、K7、K807、Y1、Y2、路到灵隐站下；Y4到灵隐东大门；K837到灵隐停车场。同时也可以选择优步或滴滴打车去。
			</p>
			<img src="images/灵隐1.jpg">
		
			
			<p><span class="glyphicon glyphicon-map-marker"></span>【day3】暴走西湖，用最热烈的方式告别杭州！</p>
			<p>
思鑫坊 -西湖 -西湖音乐喷泉
在杭州的最后一天，早早的就醒了。原本考虑先到火车站寄存行李再逛，结果懒癌发作没有去，导致下午退了房拖着行李去哪都不方便。
吃过早饭之后，原本想到附近的思鑫坊逛逛，结果到了才发现最近在翻修，所以又折返。
			</p>
			<img src="images/西湖1.jpg">
		
			
            <hr>
            <h2 id="section-2">厦门-3日</h2>
			<div class = "row">
			 <a href = "travel_book_hangzhou.php"><button type="button" class="btn btn-primary">预订车票</button></a>
			</div>
			
			<span class="glyphicon glyphicon-map-marker"></span>【day1】厦门大学、南普陀寺
			<p>
第一天到达厦门，旅途劳累，因此行程安排比较宽松，主要就是南普陀寺、厦门大学两个景点，晚饭后可以到白城沙滩看看海，散散步。由于南普陀寺和厦大离的非常近可以步行前往，游览完厦大后可在厦大这里乘坐公交到白城，大概2-3站路。
			</p>
			<p>
			1、厦门大学依山傍海，风光秀丽，有芙蓉湖和情人谷等景点，静谧而浪漫。除去自然的景色风光，厦门大学的建筑也很值得欣赏，这里的旧建筑被喻为“穿西装，戴斗笠”，意思是中西风格结合。<p></p>2、开放时间：a.周一到周五12:00-14:00：大南校门限制700人，西校门（群贤校门）限制300人；17:00以后：不限人数。b.周六周日全天开放，需要凭身份证或者相关有效证件进入，厦门大学长期为游客提供免费地图，由校门口保安负责派发。
			</p>
			<img src="images/情人谷.jpg">
			<p><span class="glyphicon glyphicon-map-marker"></span>【day2】胡里山炮台、曾厝垵</p>
			<p>
			第二天参观胡里山炮台、骑行环岛路、探访曾厝垵、游走中山路，吃海鲜大餐、品台湾小吃，感受厦门这个城市的魅力。
			</p>
			<p>
			1、胡里山炮台是国家级文物保护单位，始建于清光绪十七年，很有历史感。这里有全球现存最大的德国原产克虏伯大炮，非常壮观。</p><p>2、开放时间为07:30~18:00。</p><p>3、上午十点和下午四点还有表演，会有演员穿着清朝服饰演出，感兴趣的话可以看一下。
			</p>
			<p>曾厝安</p>
			<p>
			1、曾厝垵是厦门文艺青年的聚居地，大大小小的咖啡店、茶货铺、海鲜小摊、糖果店、明信片、手工店、服装店等分布在每条路各个角落，而且每一家都有着自己的格调。</p><p>2、如果要在这里买芒果，尽量不要选择包邮的，还是自己带回家比较好，包邮很可能会不靠谱喔。
			</p>
			<img src="images/曾1.jpg">
			
			<p><span class="glyphicon glyphicon-map-marker"></span>【day3】鼓浪屿</p>
			<p>
			1、鼓浪屿岛上气候宜人四季如春，无车马喧嚣，有鸟语花香，素有“海上花园”之誉。小岛完好地保留着许多具有中外各种建筑风格的建筑物，有中国传统的飞檐翘角的庙宇，有小巧玲珑的日本屋舍，也有19世纪欧陆风格的原西方国家的领事馆，有“万国建筑博览会”之誉。</p><p>2、在鼓浪屿看到朋友推荐的卖特产的店时，千万别一时兴奋而忘了后面还有很多景点，负重旅行可不是我们想要的。可以先寄放在店家那里，走完所有景点之后再回去取。
			</p>
			<img src="images/鼓浪屿.jpg">
            <hr>
            <h2 id="section-3">云南-7日</h2>
			<div class = "row">
			 <a href = "travel_book_yunnan.php"><button type="button" class="btn btn-primary">预订车票</button></a>
			</div>
			<span class="glyphicon glyphicon-map-marker"></span>【day1】丽江
			<p>
			刚刚来到云南，一定要去的就是闻名已久的玉龙雪山，高山雪域风景、泉潭水域风景、森林风景、草甸风景等尽收眼底，其后的玉水寨也让你感叹不虚此行，最后今晚入住农耕文明向商业文明过度的活标本，束河古镇。
			</p>
			<p>
			玉龙雪山景色壮观。可以乘索道上去，能看到美丽的雪山风光。山顶很冷，海拔四千多，有的人需要租借棉大衣和购买氧气瓶，雪山下面的蓝月谷也很漂亮。
			</p>
			<p>
			玉水寨地处闻名遐迩的玉龙雪山龙头脚下，山寨自然纯朴，山水相依，风景秀丽，是具有民族文化特色的风水宝地。
			</p>
			<img src="images/玉龙.jpg">
			<p><span class="glyphicon glyphicon-map-marker"></span>【day2】丽江</p>
			<p>
			今天游览大研古城，城中的木府。四方街和万古楼等都会在短短一天的行程中出现，最后傍晚住到古城中，感受一下古城的魅力所在。
			</p>
			<p>
			古城的街道依山势而建，顺水流而设，以红色角砾岩铺就。四方街是丽江古街的代表，位于古城的核心位置，不仅是大研古城的中心，也曾是滇西北地区的集贸和商业中心。四方街是一个大约4000平方米的梯形小广场，街道两旁的店铺鳞次栉比。
			</p>
			<img src="images/古城.jpg">
		
			
			<p><span class="glyphicon glyphicon-map-marker"></span>【day3】大理</p>
			<p>
			第三日来到了美丽和魅力并存的大理古城，这里的洋人街、文献楼和玉洱园都是不可不去的景点。之后下午去的洱海，感受到云南的魅力所在。傍晚回到大理古城，住宿洋人街附近，结束一天的行程。
			</p>
			<p>
			大理古城东临碧波荡漾的洱海，西倚常年青翠的苍山，形成了“一水绕苍山，苍山抱古城”的城市格局。大理古城的街巷间一些老宅，也仍可寻昔日风貌，庭院里花木扶疏， 鸟鸣声声，户外溪渠流水淙淙，“三家一眼井，一户几盆花”的景象依然。古城内的“洋人街”，招牌、广告多用洋文书写，吸着金发碧眼的 “老外”，在这里流连踯躅，寻找东方古韵，渐成一道别致的风景。 大理古城不但如一般的古城适合买纪念品，有所不同的是，更具有生活气息，不小资，但有独特的古老风韵。租一辆自行车，骑到洱海，沿途风光很棒，来回1个半小时。
			</p>
			<img src="images/洱海.jpg">
			
			<p><span class="glyphicon glyphicon-map-marker"></span>【day4】大理</p>
			<p>
早上游览佛家大寺，金顶寺一，座金黄色的千手观音殿坐落于3230米天柱峰之上，震撼的一幕展现于您眼前。之后迦叶殿和弥勒院也让你感受到佛教文化的深厚，之后乘车入住彝人古镇附近。			</p>
			<p>
			一座金黄色的千手观音殿坐落于3230米天柱峰之上，震撼的一幕展现于您眼前，此时的人生将因此而蓬荜生辉，带着最虔诚的心进入佛教圣地，金顶寺由【睹光台】、【大门】、【弥勒殿】、【楞严塔】、【大雄宝殿】等组成，是游览鸡足山最为的重要景点。
			</p>
			<img src="images/大理.jpg">
			
			<p><span class="glyphicon glyphicon-map-marker"></span>【day5】楚雄</p>
			<p>
			今天游玩楚雄下的各个景点，彝人古镇、石羊古镇和虎跳滩土林等都会让你的旅途流连忘返。之后入驻彝人古镇结束一天的行程。
			</p>
			<p>
			被誉为美丽的彝州，是亚洲的人类摇篮，这里发现了亚洲最早的元谋人和禄丰古猿，也是著名的恐龙之乡。楚雄明清时期曾是滇西佛教圣地，林木参天、古藤缠树，草坪如茵。
			</p>
			<img src="images/昆明.jpg">
			
			<p><span class="glyphicon glyphicon-map-marker"></span>【day6】昆明</p>
			<p>
			今天来到了闻名遐迩的石林游玩，之后的七彩云南和东西寺塔也不会让远道而来的游人失望的， 之后入驻东西寺塔附近。
			</p>
			<p>
			云南的石林很有气魄，是昆明最出名的景点，但是门票偏贵，去的时候人太多。不过石林景色优美，空气清新，而且景观很奇特，只是景色略单调，总体而言是个旅游的好地方。
			</p>
			
			<img src="images/石林.jpg">
			
			<p><span class="glyphicon glyphicon-map-marker"></span>【day7】昆明</p>
			<p>
			最后一天的云南之行就结束在昆明，文明街历史文化街区和云南省博物馆可以让最后一天的行程充满知识，对短短七天的旅行做出一个总结。
			</p>
			<img src="images/省博.jpg">
            <hr>
			
			
            <h2 id="section-4">湘西-6日</h2>
			<div class = "row">
			 <a href = "travel_book_hangzhou.php"><button type="button" class="btn btn-primary">预订车票</button></a>
			</div>
			
			<span class="glyphicon glyphicon-map-marker"></span>【day1】长沙
			<p>
			岳麓山景区是长沙最核心的景点，华夏第一英灵山，全国极少数免费开放的5A级景区。岳麓山官方网站：http://www.hnyls.com 由于岳麓山景点内容较多，建议游玩一整天，傍晚返回市中心，在太平街和黄兴路步行街解决食宿。全程人均开支：200元（含食宿）
岳麓书院
			</p>
			<p>
			从岳麓书院可以直接进入岳麓山。岳麓山是华夏第一英灵山，也是国内极少数免费开放的5A级景区。建议提前看一下岳麓山的地图，否则很难逛遍岳麓山的全部核心景点。比较推荐的景点有：爱晚亭、第九军区司令部、麓山寺、长沙会战碑、蔡锷墓、黄兴墓、陈天华墓、禹王碑。其他还有用阵亡将士名单石刻铺路筑墙而成的云麓宫、国内唯一的五轮塔、半山腰的穿石坡湖、长沙人都找不到的蟒蛇洞等。岳麓山值得玩上一整天的时间。
			</p>
			<img src="images/长沙1.jpg">
			<p><span class="glyphicon glyphicon-map-marker"></span>【day2】长沙</p>
			<p>
			上午参观的橘子洲岛是位于湘江中央的沙洲，如此狭长的岛并不多见，据说长沙市的得名也源于这条长长的沙洲。下午可以到步行街吃个午饭，一路向南前往天心阁城墙。天心阁是长沙残存的老城墙，也是这座城市的伤痛。夜晚比较推荐去看看长沙的酒吧。作为全国夜生活最丰富的城市之一，长沙的酒吧已成为这座城市的名片。
			</p>
			<img src="images/橘子.jpg">
		
			
			<p><span class="glyphicon glyphicon-map-marker"></span>【day3】长沙 吉首 凤凰</p>
			<p>
			今天从长沙坐火车到吉首，转大巴车前往凤凰，预计夜晚抵达凤凰。住宿推荐凤凰的国际青旅，但是要提前预定。另外，也可以考虑住在古镇外，价格比古镇内便宜很多，而且也不远。
			</p>
			<img src="images/凤凰1.jpg">
            <hr>
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