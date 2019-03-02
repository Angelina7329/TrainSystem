<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
session_start();  

$formusername = $_POST['formusername'];
$formpassword = $_POST['formpassword'];
$error = array();

if($formusername == "")
{
	$error[] = "用户名不能为空";
}

if($formpassword == "")
{
	$error[] = "密码不能为空";
}
if(!empty($error)){
	echo '<h1 style = "color:red"><strong>Error!</strong></h1>
		<p style = "color:white">The following errors occured:</br>';
		 foreach($error as $msg){
			 echo "- $msg</br>\n";
		 }
		 echo '</p><p style = "color:white">Please try again!</p>';
}
else{
	//连接数据库
require('mysql_connect.php');

if($dbc){

	//对密码加密
//	$formpassword = SHA1($formpassword);
	
	//先从管理员表进行查找，然后从用户表进行查找
	$q = "SELECT * FROM administrator WHERE username = '$formusername' AND password= '$formpassword'";
	//echo $q;
	$r = mysqli_query($dbc,$q);
	//var_dump($r);
	if($r){
		$row = mysqli_fetch_array($r);
		if($row){
			$_SESSION['formusername'] = $formusername;
			header("Location: http://localhost/Admin.php");
		}else{
			$sql = "SELECT * FROM users WHERE username = '$formusername' AND password = '$formpassword' ";
		//var_dump($sql);
			$result = mysqli_query($dbc,$sql);

			if($result){
				$row = mysqli_fetch_array($result);
				if($row){			
					$_SESSION['formusername'] = $formusername;
					header("Location: http://localhost/SuccessLogin.php");
				}else{
					//header('Location:skip.php?url=Login.php&info=对不起，用户名或密码填写错误，登陆失败！');
					echo '<h1 style = "color:red"><strong>Error!</strong></h1>';
					echo '<p style = "color:white">对不起，用户名或密码填写错误，登陆失败！</p>
					<p style = "color:white">Please try again!</p>';
					//$error[] = "用户名或密码填写错误!";
				}	
			}else{
				echo '<p>抱歉，是我们的系统错误！'.mysqli_error($dbc).'</p>';
			}
		}	
	}else{
		echo '<p>抱歉，是我们的系统错误！'.mysqli_error($dbc).'</p>';
	}
}
}
}
?>


<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>登录界面</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">

    </head>

    <body>
	<form method="POST" action="Login.php">
        <!-- Top content -->
        <div class="top-content">
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
							<h2 style = "color:white">Easy Go 登录</h2>
                        </div>
                    </div>
					
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 form-box">
                        	<div class="form-top">
                        		<div class="form-top-left">
                        			<h3>登录</h3>
                            		<p>请输入您的用户名和密码：</p>
                        		</div>
                        		<div class="form-top-right">
                        			<i class="fa fa-key"></i>
                        		</div>
							
                            </div>
                            <div class="form-bottom">
			                    <form role="form" action="" method="post" class="login-form">
			                    	<div class="form-group">
			                    		<label class="sr-only" for="formusername">Username</label>
			                        	<input type="text" name="formusername" placeholder="用户名..." class="formusername form-control" id="formusername">
			                        </div>
									
			                        <div class="form-group">
			                        	<label class="sr-only" for="formpassword">Password</label>
			                        	<input type="password" name="formpassword" placeholder="密码..." class="formpassword form-control" id="formpassword">
			                        </div>
			                        <button type="submit" class="btn">登录</button>
			                    </form>
		                    </div>
							
                        </div>
                    </div>
             
                </div>
            </div>
            
        </div>


        <!-- Javascript -->
        <script src="assets/js/jquery-1.11.1.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.backstretch.min.js"></script>
        <script src="assets/js/scripts.js"></script>
        
        <!--[if lt IE 10]>
            <script src="assets/js/placeholder.js"></script>
        <![endif]-->

    </body>

</html>