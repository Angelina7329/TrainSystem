<?php

session_start();
header('Content-type:text/html;charset=utf-8');
if(isset($_SESSION['formusername'])){
	session_unset();//Free all session variables
	session_destroy();//销毁一个会话中的全部数据
	header("Location: skip.php?url=Homepage.php&info=注销成功，正在转跳中！！");
}else{
	header("Location: skip.php?url=#&info=注销失败，请稍后重试！");
}

?>