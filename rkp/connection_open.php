<?php
$mysql_hostname = "localhost";
$mysql_user="root";
$mysql_password="";
$mysql_database="rkptrophies";
$dbc = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password, $mysql_database)
		or die('Error connecting to MySQL server.');
?>