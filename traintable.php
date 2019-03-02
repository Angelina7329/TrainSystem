<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en">
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
							<p style="font-family:'宋体';font-size:200%;color:white">信息管理</p>
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
					<li>
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
								<a href="ui-tabs-accordions.html">
									<span class="title">减少指定车票</span>
								</a>
							</li>
						</ul>
					</li>
					
					<li class="active opened active">
						<a href="tables-basic.html">
							<i class="linecons-database"></i>
							<span class="title">车次信息管理</span>
						</a>
						<ul>
							<li class="active">
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
			
			
			<div class="row">
				<div class="col-md-12">
				
					<div class="panel panel-default">
						<div class="panel-heading">
							<div>
								<font style="font-family:'宋体';font-size:150%;color:black">车次表</font>
								<font style="font-family:'楷体';font-size:80%;color:black">（点击各列属性即可排序）</font>
							</div>
						</div>

						<div class="panel-body panel-border">
							
							<div class="row">
								
								<div class="col-sm-12">
									
								<table class="table table-bordered table-striped" id="SortTable">
										<thead>
											<tr>
												<th>车次</th>
												<th>出发时间</th>
												<th>到达时间</th>
												<th>始发站</th>
												<th>终点站</th>
												<th>一等座开始</th>
												<th>一等座结束</th>
												<th>一等座位数</th>
												<th>一等座票价</th>
												<th>二等座开始</th>
												<th>二等座结束</th>
												<th>二等座位数</th>
												<th>二等座票价</th>
											</tr>
										</thead>
										
										<tbody>
									
											<?php
											
											//连接MySQL
											require("mysql_connect.php");
											if($dbc){												
												$sql = "select * from trainnm";
												
												$result = mysqli_query($dbc,$sql);
												
												while ($traintableInfo = mysqli_fetch_array($result)){ //返回查询结果到数组
												
													$TrainNumber = $traintableInfo["TrainNumber"]; //将数据从数组取出
													$DepartureTime = $traintableInfo["DepartureTime"];
													$ArrivalTime = $traintableInfo["ArrivalTime"];
													$StartLocation = $traintableInfo["StartLocation"];
													$ArrivalLocation = $traintableInfo["ArrivalLocation"];
													$yidengseat = $traintableInfo["yidengseat"];
													$yidengstart = $traintableInfo["yidengstart"];
													$yidengend = $traintableInfo["yidengend"];
													$yidengprice = $traintableInfo["yidengprice"];
													$erdengseat = $traintableInfo["erdengseat"];
													$erdengstart = $traintableInfo["erdengstart"];
													$erdengend = $traintableInfo["erdengend"];
													$erdengprice = $traintableInfo["erdengprice"];
													//$BookingTicketNumber = $traintableInfo["BookingTicketNumber"];
													
													echo "<tr>";
													//打印出$traintableInfo这一行
													echo "<td>{$traintableInfo['TrainNumber']}</td>
														  <td>{$traintableInfo['DepartureTime']}</td>
														  <td>{$traintableInfo['ArrivalTime']}</td>
														  <td>{$traintableInfo['StartLocation']}</td>
														  <td>{$traintableInfo['ArrivalLocation']}</td>
														  <td>$yidengstart</td>
														  <td>$yidengend</td>
														  <td>$yidengseat</td>
														  <td>$yidengprice</td>
														  <td>$erdengstart</td>
														  <td>$erdengend</td>
														  <td>$erdengseat</td>
														  <td>$erdengprice</td>
														  ";					 
													echo "</tr>";
												}

												mysqli_close($dbc);
												
											}
											
											?>
											
										</tbody>
	
								</table>
								</div>
							</div>
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

</body>
</html>
<script type="text/javascript">   
  
var tableSort = function(){   
this.initialize.apply(this,arguments);   
}   
  
tableSort.prototype = {   
  
initialize : function(tableId,clickRow,startRow,endRow,classUp,classDown,selectClass){   
this.Table = document.getElementById(tableId);   
this.rows = this.Table.rows;//所有行   
this.Tags = this.rows[clickRow-1].cells;//标签td   
this.up = classUp;   
this.down = classDown;   
this.startRow = startRow;   
this.selectClass = selectClass;   
this.endRow = (endRow == 999? this.rows.length : endRow);   
this.T2Arr = this._td2Array();//所有受影响的td的二维数组   
this.setShow();   
},   
//设置标签切换   
setShow:function(){   
var defaultClass = this.Tags[0].className;   
for(var Tag ,i=0;Tag = this.Tags[i];i++){   
Tag.index = i;   
addEventListener(Tag ,'click', Bind(Tag,statu));   
}   
var _this =this;   
var turn = 0;   
function statu(){   
for(var i=0;i<_this.Tags.length;i++){   
_this.Tags[i].className = defaultClass;   
}   
if(turn==0){   
addClass(this,_this.down)   
_this.startArray(0,this.index);   
turn=1;   
}else{   
addClass(this,_this.up)   
_this.startArray(1,this.index);   
turn=0;   
}   
}   
},   
//设置选中列样式   
colClassSet:function(num,cla){   
//得到关联到的td   
for(var i= (this.startRow-1);i<(this.endRow);i++){   
for(var n=0;n<this.rows[i].cells.length;n++){   
removeClass(this.rows[i].cells[n],cla);   
}   
addClass(this.rows[i].cells[num],cla);   
}   
},   
//开始排序 num 根据第几列排序 aord 逆序还是顺序   
startArray:function(aord,num){   
var afterSort = this.sortMethod(this.T2Arr,aord,num);//排序后的二维数组传到排序方法中去   
this.array2Td(num,afterSort);//输出   
},   
//将受影响的行和列转换成二维数组   
_td2Array:function(){   
var arr=[];   
for(var i=(this.startRow-1),l=0;i<(this.endRow);i++,l++){   
arr[l]=[];   
for(var n=0;n<this.rows[i].cells.length;n++){   
arr[l].push(this.rows[i].cells[n].innerHTML);   
}   
}   
return arr;   
},   
//根据排序后的二维数组来输出相应的行和列的 innerHTML   
array2Td:function(num,arr){   
this.colClassSet(num,this.selectClass);   
for(var i= (this.startRow-1),l=0;i<(this.endRow);i++,l++){   
for(var n=0;n<this.Tags.length;n++){   
this.rows[i].cells[n].innerHTML = arr[l][n];   
}   
}   
},   
//传进来一个二维数组，根据二维数组的子项中的w项排序，再返回排序后的二维数组   
sortMethod:function(arr,aord,w){   
//var effectCol = this.getColByNum(whichCol);   
arr.sort(function(a,b){   
x = killHTML(a[w]);   
y = killHTML(b[w]);   
x = x.replace(/,/g,'');   
y = y.replace(/,/g,'');   
switch (isNaN(x)){   
case false:   
return Number(x) - Number(y);   
break;   
case true:   
return x.localeCompare(y);   
break;   
}   
});   
arr = aord==0?arr:arr.reverse();   
return arr;   
}   
}   
/*-----------------------------------*/   
function addEventListener(o,type,fn){   
if(o.attachEvent){o.attachEvent('on'+type,fn)}   
else if(o.addEventListener){o.addEventListener(type,fn,false)}   
else{o['on'+type] = fn;}   
}   
  
function hasClass(element, className) {   
var reg = new RegExp('(\\s|^)'+className+'(\\s|$)');   
return element.className.match(reg);   
}   
  
function addClass(element, className) {   
if (!this.hasClass(element, className))   
{   
element.className += " "+className;   
}   
}   
  
function removeClass(element, className) {   
if (hasClass(element, className)) {   
var reg = new RegExp('(\\s|^)'+className+'(\\s|$)');   
element.className = element.className.replace(reg,' ');   
}   
}   
  
var Bind = function(object, fun) {   
return function() {   
return fun.apply(object, arguments);   
}   
}   
//去掉所有的html标记   
function killHTML(str){   
return str.replace(/<[^>]+>/g,"");   
}   
//------------------------------------------------   
//tableid 第几行是标签行，从第几行开始排序，第几行结束排序(999表示最后) 升序标签样式，降序标签样式 选中列样式   
//注意标签行的class应该是一致的   
var ex1 = new tableSort('SortTable',1,2,999,'up','down','hov');   
</script>