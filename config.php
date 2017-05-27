
<?php
	$SERVER="localhost";
	$USERNAME="root";
	$PASSWORD="";
	$DBNAME="qlbh";
	$conn=mysql_connect($SERVER,$USERNAME,$PASSWORD,$DBNAME) or die('Không kết nối được CSDL');
	mysql_select_db($DBNAME,$conn);
?>