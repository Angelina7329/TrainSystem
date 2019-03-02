<?php
DEFINE ('DB_USER','root');
DEFINE ('DB_PASSWORD','');
DEFINE ('DB_HOST','localhost');
DEFINE ('DB_NAME','train');

$dbc = @mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD,DB_NAME) or die('Could not connect to MySQL:'.mysqli_connect_error());

mysqli_set_charset($dbc,'utf8');
?>