<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Trang chủ</title>
	<link rel="stylesheet" href="css/cosmetic.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap-theme.min.css">
  <script type="js/jquery-3.2.0.min.js"></script>
</head>
<body>
  <?php
    session_start();  
    if (!isset($_SESSION['danhnhap'])) {
       # code...
        header('location:DangNhap.php');
    } 
   ?>
	<div id="navigation">
		<ul>
			<li><a href="#">BLOG LÀM ĐẸP</a></li>
			<li><a href="#">THÔNG TIN SƯ KIÊN</a></li>
			<li><a href="LienHe.php">LIÊN HỆ</a></li>
			<li><a href="#">TUYỂN DỤNG</a></li>
			<li><a href="#">GIỎ HÀNG</a></li>
			<li class="sign">
        <form action="" method="get">
          <input type="search" placeholder="Tìm kiếm...">
        <form action="" method="get">
      </li>
			<li class="sign"><a href="DangNhap.php">Đăng nhập</a></li>
		</ul>
	</div>

	<!-- Left -->
		<div class="col-md-2" id="left"></div>

	<!-- Content -->
		<div class="col-md-8" id="content">
      <!-- Logo content -->
        <div class="logo_content">
          <a href="TrangChu.php"><img src="image/gumiho.png" id="logo"></a>
          <div class="right_logo">
            <div>
              <p>
                <span style="font-family:arial,helvetica,sans-serif">
                  <span style="font-size:16px">
                    <strong>MIỄN PHÍ GIAO HÀNG VỚI HÓA ĐƠN TỪ&nbsp;400.000 VNĐ TẠI&nbsp;TP HỒ CHÍ MINH</strong>
                  </span>
                </span>
              </p>

              <p>
                  <span style="font-family:arial,helvetica,sans-serif">
                    <span style="font-size:16px">
                      <strong>MIỄN PHÍ GIAO HÀNG VỚI HÓA ĐƠN TỪ 600.000 VNĐ ĐỐI VỚI CÁC KHU VỰC KHÁC</strong>
                    </span>
                  </span>
              </p>
            </div>
          </div>
        </div>
      <!-- Logo content -->
			<div id="menu">
        <br>
			  	<ul>
			  		<li><a href="#">MỚI</a></li>
			  		<li><a href="BanChay.php">BÁN CHẠY</a></li>
				    <li><a href="#">MẮT</a>
				      <ul class="submenu">
				        <li><a href="PhanMat.php">Phấn mắt</a></li>
				        <li><a href="KeMat.php">Kẻ mắt</a></li>
				        <li><a href="Mascara.php">Mascara</a></li>
				        <li><a href="ChanMay.php">Chân mày</a></li>
				        <li><a href="LongMiGia.php">Lông mi giả</a></li>
                <li><a href="PaletteChoMat.php">Pallette cho mắt</a></li>
                <li><a href="CoMat.php">Cọ mắt</a></li>
                <li><a href="DuongDaMat.php">Dưỡng da mắt</a></li>
				      </ul>
				    </li>
					<li><a href="#">MÔI</a>
            <ul class="submenu">
              <li><a href="#">Son bóng</a></li>
              <li><a href="#">Son môi</a></li>
              <li><a href="#">Kẻ môi</a></li>
              <li><a href="#">Dưỡng môi</a></li>
              <li><a href="#">Cọ môi</a></li>  
            </ul>
          </li>
					<li><a href="#">MẶT</a>
            <ul class="submenu">
              <li><a href="#">Dưỡng da</a></li>
              <li><a href="#">Kem nền</a></li>
              <li><a href="#">Che khuyết điểm</a></li>
              <li><a href="#">Phấn</a></li>
              <li><a href="#">Má hồng</a></li>
              <li><a href="#">Pallette cho mặt</a></li>
              <li><a href="#">Tạo khối</a></li>
              <li><a href="#">Cọ</a></li>
              <li><a href="#">Tẩy trang</a></li>
              <li><a href="#">Kem lót</a></li>  
            </ul>
          </li>
					<li><a href="#">MÓNG</a>
            <ul class="submenu">
              <li><a href="#">Sơn móng tay</a></li>
              <li><a href="#">Sản phẩm cho móng</a></li>
              <li><a href="#">Dụng cụ làm móng</a></li>
            </ul>
          </li>
					<li><a href="#">DỤNG CỤ</a>
            <ul class="submenu">
              <li><a href="#">Bộ cọ</a></li>
              <li><a href="#">Cọ lẻ</a></li>
              <li><a href="#">Bông phấn</a></li>
              <li><a href="#">Phấn</a></li>
              <li><a href="#">Phụ kiện trang điểm</a></li>
              <li><a href="#">Hộp đựng</a></li>
              <li><a href="#">Bấm mi</a></li>
              <li><a href="#">Gương</a></li>
              <li><a href="#">Đồ chuốt</a></li>
              <li><a href="#">Nhíp</a></li>
              <li><a href="#">Vẽ chân mày</a></li>  
            </ul>
          </li>
			  	</ul>
			</div>
			<div>
				<img src="image/blog.png" alt="">
			</div>

			<div>
				<table>
						<tr >
							<th ></th>
							<th ></th>
							<th ></th>
						</tr>
						<tr >
							<td id="table_1"><a href="#" target="_blank"><img src="image/banner-1.png"></a></td>
							<td id="table_1"><a href="#" target="_blank"><img src="image/banner-2.png"></a></td>
							<td id="table_1"><a href="#" target="_blank"><img src="image/banner-3.jpg"></a></td>
						</tr>
				</table>
			</div>
			<p></p>
      <div>
			  	<table id="table_3">
				    <tr>	
				      <th><p></p>Tại sao lại chọn chúng tôi?</th>
				    </tr>
				    <tr>
				    	<td>
				    		<p></p>
				    	</td>
				    </tr>
				    <tr>
				    	<td> gumiho cosmetics là nhãn hiệu mỹ phẩm không thể thiếu cho nhu cầu trang 
              điểm và làm đẹp mỗi ngày của bạn. Tại gumiho, chúng tôi cung cấp những 
              sản phẩm chất lượng với giá cả phải chăng đem lại nét rạng rỡ tự nhiên 
              cho gương mặt với sự đa dạng về chủng loại sản phẩm, son bóng quyến rũ 
              nhiều tông màu với nhiều kiểu dáng khác nhau cũng như son môi dưỡng 
              ẩm chuyên sâu đem lại màu sắc tươi tắn và lâu phai suốt cả ngày.
				    	</td>
				    </tr>
            <tr>
              <td><p></p></td>
            </tr>
            <tr>
              <td>Bên cạnh đó, dòng sản phẩm trang điểm khoáng chất của gumiho an toàn không chứa màu 
              nhuộm hóa học và chất bảo quản giúp nuôi dưỡng làn da của bạn sáng bóng, khỏe mạnh hơn.
              </td>
            </tr>
				    <tr>
				    	<td>
				    		<p></p>
				    	</td>
				    </tr>
			    </table>
			</div>
      <p id="p">a</p>
			<div>
				<p class="font1"><br>Copyright &copy 2017 Gumiho Cosmetics VN. Powered by UIT</p>
			</div>
			<div>
        <table id="table_5">
          <th><img src="image/peta.png" id="image"></th>
          <th><img src="image/logo_client.png" id="image"></th>
          <th><img src="image/paypal.png" id="image"></th>
        </table>
			</div>
		</div>

	<!-- Right -->
		<div class="col-md-2" id="right"></div>

	<!-- Footer -->
  		<div class="col-md-12" id="footer">
  			<table id="table_4">	
  					<tr>
  						<p></p>
  					</tr>
  					<tr>
  						<th id="column">SẢN PHẨM MỚI</th>
  						<th id="column">MẮT<p></p></th>
  						<th id="column">MÔI</th>
  						<th id="column">MẶT</th>
  						<th id="column">MÓNG</th>
  						<th id="column">DỤNG CỤ</th>
  					</tr>
  					<tr>
  						<td>BÁN CHẠY</td>
  						<td>Phấn mắt</td>
  						<td>Son bóng</td>
  						<td>Dưỡng da</td>
  						<td>Sơn móng tay</td>
  						<td>Bộ cọ</td>
  					</tr>
  					<tr>
  						<td>GÓI LÀM ĐẸP</td>
  						<td>Kẻ mắt</td>
  						<td>Son môi</td>
  						<td>Kem nền</td>
  						<td>Sản phẩm cho móng</td>
  						<td>Cọ lẻ</td>
  					</tr>
  					<tr>
  						<td>QUÀ TẶNG</td>
  						<td>Mascara</td>
  						<td>Kẻ môi</td>
  						<td>Che khuyết điểm</td>
  						<td>Dụng cụ làm móng</td>
  						<td>Bông phấn</td>
  					</tr>
  					<tr>
  						<td>KHUYẾN MÃI</td>
  						<td>Chân mày</td>
  						<td>Dưỡng môi</td>
  						<td>Phấn</td>
  						<td></td>
  						<td>Phụ kiện trang điểm</td>
  					</tr>
  					<tr>
  						<td>BLOG LÀM ĐẸP</td>
  						<td>Lông mi giả</td>
  						<td>Son bút lông</td>
  						<td>Má hồng</td>
  						<td></td>
  						<td>Hộp đựng</td>
  					</tr>
  					<tr>
  						<td></td>
  						<td>Palette cho mắt</td>
  						<td>Cọ môi</td>
  						<td>Pallette cho mặt</td>
  						<td></td>
  						<td>Bấm mi</td>
  					</tr>
  					<tr>
  						<td></td>
  						<td>Cọ mắt</td>
  						<td></td>
  						<td>Tạo khối</td>
  						<td></td>
  						<td>Gương</td>
  					</tr>
  					<tr>
  						<td></td>
  						<td>Dưỡng da mắt</td>
  						<td></td>
  						<td>Cọ</td>
  						<td></td>
  						<td>Đồ chuốt</td>
  					</tr>
  					<tr>
  						<td></td>
  						<td></td>
  						<td></td>
  						<td>Tẩy trang</td>
  						<td></td>
  						<td>Nhíp & Vẽ chân mày</td>
  					</tr>
  					<tr>
  						<td></td>
  						<td></td>
  						<td></td>
  						<td>Kem lót</td>
  						<td></td>
  						<td></td>
  					</tr>
  					<tr>
  						<td></td>
  						<td></td>
  						<td></td>
  						<td>Kem dưỡng trang điểm</td>
  						<td></td>
  						<td></td>
  					</tr>
  					<tr>
  						<td></td>
  						<td></td>
  						<td></td>
  						<td>Trang điểm ánh nhũ</td>
  						<td></td>
  						<td></td>
  					</tr>
  					<tr>
						<td></td>
  						<td></td>
  						<td></td>
  						<td>Dụng cụ</td>
  						<td></td>
  						<td></td>
  					</tr>
  			</table>
  		</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
<script src="js/bootstrap.min.js"></script>
</body>
</html>