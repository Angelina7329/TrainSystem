<!DOCTYPE html>

<?php
session_start();
?>

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
<form method="POST" action="User-Information-change-mysql.php">
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
                            <img alt="" class="admin-pic img-circle" src="user.png">Hi,<?php echo $_SESSION['formusername'] ?></b>
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
                                <h6><font style="font-family:'楷体';font-size:200%;color:blue">请修改您的个人信息表：</font></h6>
                                <div class="titleClose">
                                    <a class="gone" href="#elementClose">
                                        <span class="entypo-cancel"></span>
                                    </a>
                                </div>

                            </div>

                            <div class="body-nest" id="userinformation">

                                <div class="panel-body">
				
									<form role="form" method="post" >
										
										<div class="form-group has-info">
											<label class="col-sm-3 control-label"></label>
											<label class="col-sm-1 control-label" for="formusername"><h4>用户名</h4></label>
											<input type="text" disabled="" placeholder=<?php echo $_SESSION['formusername'] ?> class="formusername form-control" id="formusername" style="width:400px; height:35px;"   class="form-control" />
										</div>
										
										<hr />
										
										<div class="form-group has-info">
											<label class="col-sm-3 control-label"></label>
											<label class="col-sm-1 control-label" for="formpassword"><h4>密码</h4></label>
											<input type="text" name="formpassword" class="formpassword form-control" id="formpassword" style="width:400px; height:35px;" class="form-control" />
										</div>
										
										<hr />
										
										<div class="form-group has-info">
											<label class="col-sm-3 control-label"></label>
											<label class="col-sm-1 control-label" for="formpassword2"><h4>确认密码</h4></label>
											<input type="text" name="formpassword2" class="formpassword2 form-control" id="formpassword2" style="width:400px; height:35px;" class="form-control" />
										</div>
										
										<hr />
										
										<div class="form-group has-info">
											<label class="col-sm-3 control-label"></label>
											<label class="col-sm-1 control-label" for="realname"><h4>真实姓名</h4></label>
											<input type="text" name="realname" class="realname form-control" id="realname" style="width:400px; height:35px;" class="form-control" />
										</div>
										
										<hr />
										
										<div class="form-group has-info">
											<label class="col-sm-3 control-label"></label>
											<label class="col-sm-1 control-label" for="IDnumber"><h4>身份证号</h4></label>
											<input type="text" name="IDnumber" class="IDnumber form-control" id="IDnumber" style="width:400px; height:35px;"  class="form-control" />
										</div>
										
										<hr />
										
										<div class="form-group has-info">
											<label class="col-sm-3 control-label"></label>
											<label class="col-sm-1 control-label" for="telephone"><h4>联系电话</h4></label>
											<input type="text" name="telephone" class="telephone form-control" id="telephone" style="width:400px; height:35px;" class="form-control" />
										</div>
										
										<hr />
										
										<div class="form-group has-info">
											<label class="col-sm-3 control-label"></label>
											<label class="col-sm-1 control-label" for="EmailAddress"><h4>电子邮箱</h4></label>
											<input type="text" name="EmailAddress" class="EmailAddress form-control" id="EmailAddress" style="width:400px; height:35px;" class="form-control" />
										</div>

										<hr />
										
										<div>
											<label class="col-sm-5 control-label"></label>
											<button type="submit" style="background:green;color:white " onclick="return validate();" >修改</button>
											<button type="reset" style="background:green;color:white " >重置</button>
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
<script language="javascript" type="text/javascript"></script>					
<script language="javascript" type="text/javascript">
function validate()
{
var formpassword=document.getElementById("formpassword").value
var formpassword2=document.getElementById("formpassword2").value
var realname=document.getElementById("realname").value
var IDnumber=document.getElementById("IDnumber").value
var telephone=document.getElementById("telephone").value
var EmailAddress=document.getElementById("EmailAddress").value.indexOf("@")

if (formpassword.length<1)
 {
 alert("密码不能为空！");
 return false;
 }
 if (formpassword2.length<1)
 {
 alert("确认密码不能为空！");
 return false;
 }
 if (realname.length<1)
 {
 alert("真实姓名不能为空！");
 return false;
 }
 if (IDnumber.length<1)
 {
 alert("身份证号不能为空！");
 return false;
 }
 if (telephone.length<1)
 {
 alert("电话号码不能为空！");
 return false;
 }
 if (EmailAddress==-1)
 {
 alert("不是有效的电子邮件地址！");
 return false;
 }
 
 if (tmp=="true")
 {
 alert("修改个人信息成功！");
 return true;
 }

}
</script>									
