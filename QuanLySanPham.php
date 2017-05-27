<!DOCTYPE html>
<html>
<head>
	<title>Quản lý sản phẩm</title>
	<link rel="stylesheet" href="views/css/dangnhap.css">
	<link rel="stylesheet" type="text/css" href="views/css/mat.css">
	<link rel="stylesheet" type="text/css" href="views/css/quanly.css">
	<link rel="stylesheet" href="views/css/bootstrap.min.css">
</head>
<body>
<h1 style="font-family: arial,helvetica,sans-serif; text-align: center; font-weight: bold;">Quản lý sản phẩm</h1>

	<div class="wrapper">
		<?php 
			include("controllers/permisson.php");
    		include("models/config.php");
			include("views/menu.php");
			include("controllers/content.php");
		 ?>
			
	</div>
</body>
</html>