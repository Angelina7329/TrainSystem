<?php
if($_SERVER['REQUEST_METHOD'] == 'POST'){
	require('mysql_connect.php');
	
	$error = array();
	
	if(empty($_POST['formusername'])){
		$error[] = "You forgot to enter your username!";
	}else{
		$uname = mysqli_real_escape_string($dbc,trim($_POST['formusername']));
	}
	
	if(empty($_POST['formpassword'])){
		$error[] = "You forgot to enter your password!";
	}else{
		$pw = mysqli_real_escape_string($dbc,trim($_POST['formpassword']));
	}
	
	if(empty($_POST['formpassword2'])){
		$error[] = "Please 验证 your password!";
	}else{
		if($_POST['formpassword']!=$_POST['formpassword2']){
			$error[] = "两次密码不一致，请重新输入！";
		}
	}
	
	if(empty($_POST['realname'])){
		$error[] = "You forgot to enter your realname!";
	}else{
		$rname = mysqli_real_escape_string($dbc,trim($_POST['realname']));
	}
	
	if(empty($_POST['IDnumber'])){
		$error[] = "You forgot to enter your ID!";
	}else{
		if(strlen($_POST['IDnumber'])!= 18){
			$error[] = "The IDnumber you entered is not correct! ";
		}else{
			$q = 'SELECT * FROM users WHERE id ="'.$_POST['IDnumber'].'"';
			$r = @mysqli_query($dbc,$q);
			$num = @mysqli_num_rows($r);
			if($num==1){
				$error[] = "该id已被注册！请勿重复注册！";
			}else{
				$id = mysqli_real_escape_string($dbc,trim($_POST['IDnumber']));
			}
		}
	}
	
	if(empty($_POST['telephone'])){
		$error[] = "You forgot to enter your telephone number!";
	}else{
		if(strlen($_POST['telephone'])!=11||!is_numeric($_POST['telephone'])){
			$error[] = "Your telephone number is not correct!";
		}else{
			$q = 'SELECT * FROM users WHERE telephone ="'.$_POST['telephone'].'"';
			$r = @mysqli_query($dbc,$q);
			$num = @mysqli_num_rows($r);
			if($num==1){
				$error[] = "该电话号码已被注册！请勿重复注册！";
			}else{
				$tel = mysqli_real_escape_string($dbc,trim($_POST['telephone']));
			}
			
		}
	}
	
	if(empty($_POST['EmailAddress'])){
		$error[] = "Your forgot to enter your email!";
	}else{
		if (!filter_var($_POST['EmailAddress'], FILTER_VALIDATE_EMAIL)) {
			$error[] = "Your email is not effect!";
		}else{
			$q = 'SELECT * FROM users WHERE email ="'.$_POST['EmailAddress'].'"';
			$r = @mysqli_query($dbc,$q);
			$num = @mysqli_num_rows($r);
			echo $num;
			if($num ==1){
				$error[] = "该邮箱已被注册！请勿重复注册！";
			}else{
				$email = mysqli_real_escape_string($dbc,trim($_POST['EmailAddress']));
			}
		}
	}	
	
	if(empty($_POST['type'])){
		$error[] = "Your forgot to select the usertype!";
	}else{
		$type = $_POST['type'];
	}
	
	if(empty($error)){
		//echo $pw;
		$q = "INSERT INTO USERS VALUES('$uname','".SHA1($pw)."','$rname','$id','$tel','$email','$type',NOW())";
		$r = @mysqli_query($dbc,$q);
		
		if($r){//注册成功
			echo '<h1>Thank you!</h1>
			<p>You have registered successfully!';
		}else{
			echo '<h1>注册错误！</h1>
			<p>抱歉，是我们的系统错误！'.mysqli_error($dbc).'</p>';
		}
		
		mysqli_close($dbc);
		
	}else{
		echo '<h1><font color = "red">Error!</font></h1>
		<p><font color = "red">The following errors occured:</font></br>';
		 foreach($error as $msg){
			 echo "- <font color = 'red'>$msg</font></br>\n";
		 }
		 echo '</p><p>Please try again!</p>';
	}
}
?>

<!DOCTYPE html>
<html lang="zh">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>注册界面</title>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/style.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
		
		<style type="text/css">
			.set_style{
				color:#2C2E2F;
			}
		</style>

    </head>

        <!-- Top content -->
        <div class="top-content">
        	
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8 col-sm-offset-2 text">
                            <h1><strong>Easy Go</strong> </h1>
							<h2 style = "color:white">注册</h2>
                        </div>
                    </div>
					
                    <div class="row">
					<!--表单系统-->
						
							<div class="col-sm-6 col-sm-offset-3 form-box">
								<div class="form-top">
									<div class="form-top-left">
										<h3>注册</h3>
										<p class = "set_style">请注册您的用户名信息：</p>
									</div>
									<div class="form-top-right">
										<i class="fa fa-key"></i>
									</div>
								</div>
								<div class="form-bottom">
									<form role="form" action="Register.php" method="post" class="login-form">
										
										<div class="form-group">
											<label class="sr-only" for="formusername">Username</label>
										<p><span class = "set_style">用户名：</span>	<input type="text" name="formusername" class="formusername form-control" id="formusername" value = <?php
										if (isset($_POST['formusername']))echo $_POST['formusername'];?>></p>
										</div>
										
										<div class="form-group">
											<label class="sr-only" for="formpassword">Password</label>
										<p class = "set_style">密码：	<input type="password" name="formpassword"  class="formpassword form-control" id="formpassword" value = <?php
										if (isset($_POST['formpassword']))echo $_POST['formpassword'];?>></p>
										</div>
										
										<div class="form-group">
											<label class="sr-only" for="formpassword2">Password2</label>
										<p class = "set_style">确认密码：	<input type="password" name="formpassword2"  class="formpassword2 form-control" id="formpassword2" 
										value = <?php if (isset($_POST['formpassword2']))echo $_POST['formpassword2'];?>></p>
										</div>
										
										<div class="form-group">
										<label class="sr-only" for="realname">realname</label>
										<p class = "set_style">真实姓名：	<input type="text" name="realname"class="realname form-control" id = "realname" 
										value = <?php if(isset($_POST['realname']))echo $_POST['realname'];?>></p>
										</div>
										
										<div class="form-group">
										<p class = "set_style">身份证号：	<input type="text" name="IDnumber"class="IDnumber form-control" id = "IDnumber" 
										value =  <?php if(isset($_POST['IDnumber']))echo $_POST['IDnumber'];?>></p>
										</div>
										
										<div class="form-group">
										<p class = "set_style">联系电话：	<input type="text" name="telephone"  class="telephone form-control" id = "telephone"
										value = <?php if(isset($_POST['telephone']))echo $_POST['telephone'];?>></p>
										</div>
										
										<div class="form-group">
										<p class = "set_style">电子邮箱：	<input type="text" name="EmailAddress"  class="EmailAddress form-control" 
										value = <?php if(isset($_POST['EmailAddress']))echo $_POST['EmailAddress'];?>></p>
										</div>
										
										<div class="form-group">
										<p><span style = "font-size:18px" class = "set_style">用户类型	：</span> <select name = "type"  style="width:200px;font-size:18px;"  id="yisi" onchange="Menu(this.form,3);">>
											<option value = "成人" <?php if(isset($_POST['type'])&&($_POST['type']=="成人"))echo 'selected = "selected"';?>>成人</option>
											<option value = "学生" <?php if(isset($_POST['type'])&&($_POST['type']=="学生"))echo 'selected = "selected"';?>>学生</option>
											<option value = "儿童" <?php if(isset($_POST['type'])&&($_POST['type']=="儿童"))echo 'selected = "selected"';?>>儿童</option>
											</select>
										</p>
										</div>
										
										<button type="submit" class="btn ">注册</button>
							
									
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