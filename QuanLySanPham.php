<!DOCTYPE html>
<html>
<head>
	<title>Quản lý sản phẩm</title>
	<link rel="stylesheet" href="css/dangnhap.css">
	<link rel="stylesheet" type="text/css" href="css/mat.css">
	<link rel="stylesheet" type="text/css" href="css/quanly.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	<div class="col-md-2" id="left"></div>
	<div class="col-md-8" id="content">
		<h1 style="font-family: arial,helvetica,sans-serif; text-align: center; font-weight: bold;">Quản lý sản phẩm</h1>
		<div id="menu">
			<ul>
				<li><a href="QuanLySanPham.php">Quản lý sản phẩm</a></li>
			</ul>
			<aside>
				<form>
					Mã sản phẩm
					<input type="Text" name="" id="id_sp">
					<div><p></p></div>
					Mã loại sản phẩm
					<input type="Text" name="" id="id_loaisp">
					<div><p></p></div>
					Tên sản phẩm
					<input type="Text" name="" id="ten_sp">
					<div><p></p></div>
					Link ảnh sản phẩm
					<input type="Text" name="" id="link_anh">
					<div><p></p></div>
					Số lượng
					<input type="Text" name="" id="sl">
					<div><p></p></div>
					Giá
					<input type="Text" name="" id="gia">
					<div><p></p></div>
					Giá khuyến mãi
					<input type="Text" name="" id="gia_km">
					<div><p></p></div>
					Thông tin sản phẩm 
					<textarea name="" id="ttsp" cols="30" rows="10" ></textarea>
					<div><p></p></div>
					Tình trạng
					<input type="Text" name="" id="tinh_trang">
				</form>
			</aside>
			<section>
				<table border=1 id="tab">
					<tr  style="border: 1px solid #111;">
						<th>Mã SP</th>
						<th>Mã loại SP</th>
						<th>Tên SP</th>
						<th>Link ảnh</th>
						<th>Số lượng</th>
						<th>Giá</th>
						<th>Giá KM</th>
						<th>Thông tin SP</th>
						<th>Tình trạng</th>
					</tr>
				</table>
			</section>
		</div>
	</div>
	<div class="col-md-2" id="right"></div>

</body>
</html>