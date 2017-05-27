<?php
	include('../models/config.php');
	session_start();
	if(isset($_POST['login'])){
		$username=$_POST['username'];
		$password=$_POST['password'];
		$sql="select * from user where username='$username' and password='$password' limit 1";
		$query=mysql_query($sql);
		$num=mysql_num_rows($query);
		if($num>0){
			$_SESSION['dangnhap']=$username;
			header('location:../index.php');
		}
		else{
			header('location:DangNhap_Home.php');	
		}
	}  
?>