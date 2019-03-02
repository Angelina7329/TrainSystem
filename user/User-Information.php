<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>用户界面</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Le styles -->
    <script type="text/javascript" src="assets/js/jquery.min.js"></script>

    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/loader-style.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">

    <link href="assets/js/footable/css/footable.core.css?v=2-0-1" rel="stylesheet" type="text/css">
    <link href="assets/js/footable/css/footable.standalone.css" rel="stylesheet" type="text/css">
    <link href="assets/js/footable/css/footable-demos.css" rel="stylesheet" type="text/css">

    <link rel="shortcut icon" href="assets/ico/minus.png">
</head>

<body>

    <!-- Preloader -->
    <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>
    <!-- TOP NAVBAR -->
    <nav role="navigation" class="navbar navbar-static-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button data-target="#bs-example-navbar-collapse-1" data-toggle="collapse" class="navbar-toggle" type="button">
                    <span class="entypo-menu"></span>
                </button>
                <button class="navbar-toggle toggle-menu-mobile toggle-left" type="button">
                    <span class="entypo-list-add"></span>
                </button>

            </div>


            <!-- Collect the nav links, forms, and other content for toggling -->
            <div id="bs-example-navbar-collapse-1" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">

                    <li><a href="#"><i data-toggle="tooltip" data-placement="bottom" title="Help" style="font-size:20px;" class="icon-help tooltitle"></i></a>
                    </li>

                </ul>
				
                <div id="nt-title-container" class="navbar-left running-text visible-lg">
                    <ul class="date-top">
                        <li class="entypo-calendar" style="margin-right:5px"></li>
                        <li id="Date"></li>


                    </ul>

                    <ul id="digital-clock" class="digital">
                        <li class="entypo-clock" style="margin-right:5px"></li>
                        <li class="hour"></li>
                        <li>:</li>
                        <li class="min"></li>
                        <li>:</li>
                        <li class="sec"></li>
                        <li class="meridiem"></li>
                    </ul>
					
                    <ul id="nt-title">
                        <li><i class="wi-day-lightning"></i>&#160;&#160;Berlin&#160;
                            <b>85</b><i class="wi-fahrenheit"></i>&#160;; 15km/h
                        </li>
                        <li><i class="wi-day-lightning"></i>&#160;&#160;Yogyakarta&#160;
                            <b>85</b><i class="wi-fahrenheit"></i>&#160;; Tonight- 72 °F (22.2 °C)
                        </li>

                        <li><i class="wi-day-lightning"></i>&#160;&#160;Sttugart&#160;
                            <b>85</b><i class="wi-fahrenheit"></i>&#160;; 15km/h
                        </li>

                        <li><i class="wi-day-lightning"></i>&#160;&#160;Muchen&#160;
                            <b>85</b><i class="wi-fahrenheit"></i>&#160;; 15km/h
                        </li>

                        <li><i class="wi-day-lightning"></i>&#160;&#160;Frankurt&#160;
                            <b>85</b><i class="wi-fahrenheit"></i>&#160;; 15km/h
                        </li>

                    </ul>
                </div>

                <ul style="margin-right:0;" class="nav navbar-nav navbar-right">
                    <li>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <img alt="" class="admin-pic img-circle" src="user.png">Hi,<?php echo $_SESSION['formusername'] ?>先森</b>
                        </a> 
                    </li>
                    <li>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="icon-gear"></span>&#160;&#160;设置界面颜色</a>
                        <ul role="menu" class="dropdown-setting dropdown-menu">

                            <li class="theme-bg">
                                <div id="button-bg"></div>
                                <div id="button-bg2"></div>
                                <div id="button-bg3"></div>
                                <div id="button-bg5"></div>
                                <div id="button-bg6"></div>
                                <div id="button-bg7"></div>
                                <div id="button-bg8"></div>
                                <div id="button-bg9"></div>
                                <div id="button-bg10"></div>
                                <div id="button-bg11"></div>
                                <div id="button-bg12"></div>
                                <div id="button-bg13"></div>
                            </li>
                        </ul>
                    </li>
                   
                </ul>

            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

    <!-- /END OF TOP NAVBAR -->

    <!-- SIDE MENU -->
    <div id="skin-select">
        <div id="logo">
			<h1><font style="font-family:'楷体';font-size:100%;color:white">用户界面</font></h1>
        </div>

        <a id="toggle">
            <span class="entypo-menu"></span>
        </a>
       

        <div class="skin-part">
            <div id="tree-wrap">
                <div class="side-bar">
                    <ul class="topnav menu-left-nest">
                        <li>
                            <a style="border-left:0px solid!important;" class="title-menu-left">

                                <span>个人信息管理</span>
                               
                            </a>
                        </li>

                        <li>
                            <a class="tooltip-tip ajax-load" href="User-Information.php">
                                <i class="icon-document-new"></i>
                                <span>查看个人信息</span>

                            </a>
                      
                        </li>
                        <li>
                            <a class="tooltip-tip ajax-load" href="User-Information-change.php">
                                <i class="icon-document-edit"></i>
                                <span>修改个人信息</span>

                            </a>
                        </li>
                        <li>
                            <a class="tooltip-tip ajax-load" href="../Homepage.php">
                                <i class="icon-media-record"></i>
                                <span>注销</span>

                            </a>
                        </li>
                    </ul>

                    <ul class="topnav menu-left-nest">
                        <li>
                            <a style="border-left:0px solid!important;" class="title-menu-left">

                                <span>车票查询</span>
                             
                            </a>
                        </li>

                        <li>
                            <a class="tooltip-tip ajax-load" href="../Success_Home_TicketQuery.php">
                                <i class="icon-monitor"></i>
                                <span>车票查询</span>

                            </a>
                        </li>

                    </ul>

                    <ul id="menu-showhide" class="topnav menu-left-nest">
                        <li>
                            <a style="border-left:0px solid!important;" class="title-menu-left">

                                <span>车票管家</span>
                               
                            </a>
                        </li>


                        <li>
                            <a class="tooltip-tip" href="../Success_Home_TicketBounced.php" title="UI Element">
                                <i class="icon-window"></i>
                                <span>查看已订车票</span>
                            </a>
                            
                        </li>
                        <li>
                            <a class="tooltip-tip" href="../Success_Home_TicketBook.php" title="Form">
                                <i class="icon-document"></i>
                                <span>订票</span>
                            </a>
                 
                        </li>

                        <li>
                            <a class="tooltip-tip ajax-load" href="../Success_Home_TicketBounced.php" title="Map">
                                <i class="icon-code"></i>
                                <span>退票</span>

                            </a>
                        </li>
						<li>
                            <a class="tooltip-tip ajax-load" href="../SuccessLogin.php">
                                <i class="icon-media-record"></i>
                                <span>返回主界面</span>

                            </a>
                        </li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
    <!-- END OF SIDE MENU -->

											<?php
											
											//连接MySQL
											require("mysql_connect.php");
											if($dbc){
												$formusername = $_SESSION['formusername'];
												//mysql_select_db($dbname,$connection);
												
												$sql = "select * from `users` where `username` = '$formusername' ";
												//var_dump($sql);
												$result = mysqli_query($dbc,$sql);
												//var_dump($result);
												while ($UserInformation = mysqli_fetch_array($result)){
												
													$formusername = $UserInformation['username'];
													$realname = $UserInformation['realname'];
													$IDnumber = $UserInformation['id'];
													$telephone = $UserInformation['telephone'];
													$EmailAddress = $UserInformation['email'];												
													
												}

												mysqli_free_result($result);
												mysqli_close($dbc);
												
											}
											
											?>

    <!--  PAPER WRAP -->
    <div class="wrap-fluid">
        <div class="container-fluid paper-wrap bevel tlbr">

            <div class="row">
                <div id="paper-top">
                    <div class="col-sm-3">
                        <h2 class="tittle-content-header">
                            <i class="icon-window"></i> 
                            <span>个人信息管理
                            </span>
                        </h2>

                    </div>

                    
                </div>
            </div>
            <!--/ TITLE -->

            <div class="content-wrap">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="nest" id="elementClose">
                            <div class="title-alt">
                                <h6><font style="font-family:'楷体';font-size:200%;color:blue">您的个人信息表：</font></h6>
                                <div class="titleClose">
                                    <a class="gone" href="#elementClose">
                                        <span class="entypo-cancel"></span>
                                    </a>
                                </div>

                            </div>

                            <div class="body-nest" id="userinformation">

                                <div class="panel-body">
                                    <form method="get" class="form-horizontal bucket-form" >
                                        
                                        <div class="form-group has-success">
                                            <label for="inputSuccess" class="col-sm-4 control-label col-lg-4"><h4><strong>用户名：</strong></h4></label>
                                            <div class="col-lg-6">
												<div class="row">
													<div class="col-sm-6">
														<section class="panel"  style="background:#ABBDC6">
															<div class="panel-body" style="color:black"><?php echo "{$formusername}" ?></div>
														</section>
													</div>	
												</div>
											</div>
                                        </div>
                                        
										<hr /> 
				
										<div class="form-group has-success">
                                            <label for="inputSuccess" class="col-sm-4 control-label col-lg-4"><h4><strong>真实姓名：</strong></h4></label>
                                            <div class="col-lg-6">
												<div class="row">
													<div class="col-sm-6">
														<section class="panel"  style="background:#ABBDC6">
															<div class="panel-body" style="color:black"><?php echo "{$realname}" ?></div>
														</section>
													</div>	
												</div>
											</div>
                                        </div>
										
										<hr /> 
										
										<div class="form-group has-success">
                                            <label for="inputSuccess" class="col-sm-4 control-label col-lg-4"><h4><strong>身份证号：</strong></h4></label>
                                            <div class="col-lg-6">
												<div class="row">
													<div class="col-sm-6">
														<section class="panel"  style="background:#ABBDC6">
															<div class="panel-body" style="color:black"><?php echo "{$IDnumber}" ?></div>
														</section>
													</div>	
												</div>
											</div>
                                        </div>
										
										<hr /> 
										
										<div class="form-group has-success">
                                            <label for="inputSuccess" class="col-sm-4 control-label col-lg-4"><h4><strong>联系电话：</strong></h4></label>
                                            <div class="col-lg-6">
												<div class="row">
													<div class="col-sm-6">
														<section class="panel"  style="background:#ABBDC6">
															<div class="panel-body" style="color:black"><?php echo "{$telephone}" ?></div>
														</section>
													</div>	
												</div>
											</div>
                                        </div>
										
										<hr /> 
										
										<div class="form-group has-success">
                                            <label for="inputSuccess" class="col-sm-4 control-label col-lg-4"><h4><strong>电子邮箱：</strong></h4></label>
                                            <div class="col-lg-6">
												<div class="row">
													<div class="col-sm-6">
														<section class="panel"  style="background:#ABBDC6">
															<div class="panel-body" style="color:black"><?php echo "{$EmailAddress}" ?></div>
														</section>
													</div>	
												</div>
											</div>
                                        </div>
										

                                    </form>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
			

        </div>



    </div>
    <!--  END OF PAPER WRAP -->

    <!-- MAIN EFFECT -->
    <script type="text/javascript" src="assets/js/preloader.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.js"></script>
    <script type="text/javascript" src="assets/js/app.js"></script>
    <script type="text/javascript" src="assets/js/load.js"></script>
    <script type="text/javascript" src="assets/js/main.js"></script>

	
	

<div style="text-align:center;">
<p class="footer-text">
&copy;  
<strong>火车订票系统管理员管理界面</strong> 
- 点击访问 <a href="http://localhost/Homepage.html" target="_blank">官方网站 </a>
</p>
</div>




</body>

</html>
											
