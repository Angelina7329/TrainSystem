<?php
require_once('../../mysql_connect.php');

$q = "SELECT username,realname,id,DATE_FORMAT(registration_date,'%M %d,%Y') As dr FROM users ORDER BY registration_date ASC";
$r = @mysqli_query($dbc,$q);

$num = mysqli_num_rows($r);

if($num > 0){
	echo "<p>现在共有".$num."注册用户</p>";
	echo '<table border = "1" align = "center" cellspacing = "3" cellpadding = "3" width = "75%">
	<tr>
		<td align = "left"><b>编辑</b></td>
		<td align = "left"><b>删除</b></td>
		<td align = "left"><b>用户名</b></td>
		<td align = "left"><b>姓名</b></td>
		<td align = "left"><b>身份证号</b></td>
		<td align = "left"><b>注册日期</b></td>
	</tr>
	';
	
	while($row = mysqli_fetch_array($r,MYSQLI_ASSOC)){
		echo '<tr>
			<td align = "left"><a href = "edit_user.php?id='.$row['id'].'">Edit</a></td>
			<td align = "left"><a href = "delete_user.php?id='.$row['id'].'">Delete</a></td>
			<td align = "left">'.$row['username'].'</td>
			<td align = "left">'.$row['realname'].'</td>
			<td align = "left">'.$row['id'].'</td>
			<td align = "left">'.$row['dr'].'</td>
		</tr>
		';
	}
	
	echo '</table>';
	mysqli_free_result($r);
}else{
	echo '<p>现在没有注册用户！</p>';
}

mysqli_close($dbc);
?>