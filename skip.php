<?php

if(!isset($_GET['url']) || !isset($_GET['info'])){
	exit();
}
?>

<!DOCTYPE html>
<html lang="zh-CN">
<head>
<meta charset="utf-8" />
<meta http-equiv="refresh" content="1;URL=<?php echo $_GET['url'] ?>" />
<title>正在转跳中...</title>
</head>
<body>
	<div style="test-align:center;font-size:20px;"><?php echo $_GET['info'] ?>1秒后自动转跳...</div>
</body>
</html>