<?php
	include("../models/config.php");
	$id=$_GET['id'];
	$masp=$_POST['id_sp'];
	$maloai=$_POST['id_loaisp'];
	$soluong=$_POST['sl'];
	$tensp=$_POST['ten_sp'];
	$gia=$_POST['gia'];
	$anhsp=$_POST['link_anh'];
	$giakm=$_POST['gia_km'];
	$thongtin=$_POST['ttsp'];
	$tinhtrang=$_POST['tinh_trang'];
	if(isset($_POST['them'])){
		$sql="insert into sanpham(id_sanpham,id_loaisp,tensanpham,anhsanpham,soluong,gia,giakhuyenmai,thongtin,tinhtrang) values('$masp','$maloai','$tensp','$anhsp','$soluong','$gia','$giakm','$thongtin','$tinhtrang')";
		mysql_query($sql,$conn);
		header('location:../QuanLySanPham.php?quanly=quanlysp&ac=them');
	}
	elseif (isset($_POST['sua'])) {
		$sql="update sanpham set id_sanpham='$masp', id_loaisp='$maloai', tensanpham='$tensp', anhsanpham='$anhsp', soluong='$soluong', gia='$gia', giakhuyenmai='$giakm', thongtin='$thongtin', tinhtrang='$tinhtrang' where id_sanpham='$id'";
		mysql_query($sql,$conn);
		header('location:../QuanLySanPham.php?quanly=quanlysp&ac=sua&id='.$id);
	}
	else{
		$sql="delete from sanpham where id_sanpham='$id'";
		mysql_query($sql,$conn);
		header('location:../QuanLySanPham.php?quanly=quanlysp&ac=them');
	}

?>