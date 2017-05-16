<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		$SERVER="localhost";
		$USERNAME="root";
		$PASSWORD="";
		$DBNAME="casi";
		$conn=mysqli_connect($SERVER,$USERNAME,$PASSWORD,$DBNAME);
		if(!$conn){
			die("không kết nối được");
		}
 	?>
</body>
</html>