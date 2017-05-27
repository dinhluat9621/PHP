<?php
	session_start();  
		if (!isset($_SESSION['dangnhap'])) {
	   		# code...
	    	header('location:DangNhap.php');
    	}  
?>