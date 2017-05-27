<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Đăng nhập</title>
	<link rel="stylesheet" href="css/cosmetic.css">
	<link rel="stylesheet" href="css/dangnhap.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	<?php
		include("../controllers/dangnhap_trangchu.php");  
	?>
	<div id="navigation">
		<ul>
			<li><a href="#">BLOG LÀM ĐẸP</a></li>
			<li><a href="#">THÔNG TIN SƯ KIÊN</a></li>
			<li><a href="LienHe.php">LIÊN HỆ</a></li>
			<li><a href="#">TUYỂN DỤNG</a></li>
			<li><a href="#">GIỎ HÀNG</a></li>
			<li class="sign"><input type="search" placeholder="Tìm kiếm..."></li>
			<li class="sign"><a href="DangNhap_Home.php">Đăng nhập</a></li>
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
			<div id="menu"><br>
			  	<ul>
			  		<li><a href="BanChay.php">BÁN CHẠY</a></li>
				    <li><a href="#">MẮT</a>
				      <ul class="submenu">
				        <li><a href="SonBong.php">Phấn mắt</a></li>
				        <li><a href="KeMat.php">Kẻ mắt</a></li>
				        <li><a href="Mascara.php">Mascara</a></li>
				        <li><a href="ChanMay.php">Chân mày</a></li>
				        <li><a href="LongMiGia.php">Lông mi gỉa</a></li>
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
			              <li><a href="#">Dụng cụ</a></li>  
			            </ul>
          			</li>
					<li><a href="#">MÓNG</a>
			            <ul class="submenu">
			              <li><a href="#">Sơn móng tay</a></li>
			              <li><a href="#">Dụng cụ</a></li>
			            </ul>
          			</li>
					<li><a href="#">DỤNG CỤ</a>
			            <ul class="submenu">
			              <li><a href="#">Bộ cọ</a></li>
			              <li><a href="#">Cọ lẻ</a></li>
			              <li><a href="#">Bông phấn</a></li>
			              <li><a href="#">Phấn</a></li>
			              <li><a href="#">Phụ kiện</a></li>
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
			<div class="sub-menu">
			  	<ul>
			  		<li><a href="#">Trang chủ</a></li>
					<li><a href="#">Đăng nhập</a></li>
			  	</ul>
			</div>

			<div>
				<form action="#" method="post" accept-charset="utf-8">
				<table id="table">
					<tr>
						<th class="th">TÀI KHOẢN MẠNG XÃ HỘI</th>
						<th class="th">ĐÃ CÓ TÀI KHOẢN</th>
						<th class="th">CHƯA CÓ TÀI KHOẢN</th>
					</tr>
					<tr>
						<td></td>
						<td id="label"><p></p>Đăng nhập bằng tài khoản của bạn</td>
						<td id="label"><p></p>Đăng ký tài khoản</td>
					</tr>
					<tr>
						<td >
							<a href="https://accounts.google.com/signin/oauth/oauthchooseaccount?client_id=22677168614-chde6pkfn5os8b99upv0oc72rvgvdq61.apps.googleusercontent.com&as=301758dada798828&destination=http%3A%2F%2Felfcosmetics.vn&approval_state=!ChRFeGpnUndsSmNLMlNyMmtCYXZxYRIfQTZwWndPTGQxNEFkTUlqOWRic2JOcFlVRS01VHZCVQ%E2%88%99AE5-E40AAAAAWQjOJLModl-EVm6lBnvjrtq1Tmhh_Yo2&xsrfsig=AHgIfE8dIS0JZB4_KBhkfjyPF0v-8CNOeg&flowName=GeneralOAuthFlow"  target="_blank">
							<img src="image/g_sign.jpg"></a>
						</td>
						<td>
							<p></p><br>
							<label id="label">TÊN TÀI KHOẢN(*)</label>
						</td>
						<td>
							<p></p><br>
							<label id="label">TÊN TÀI KHOẢN(*)</label>
						</td>
						
					</tr>
					<tr>
						<td></td>
						<td>
							<input type="text" name="username"> <br>
						</td>
						<td>
							<input type="text" name="username2"> <br>
						</td>
					</tr>
					<tr>
						<td><p></p></td>
					</tr>
					<tr>
						<td>
							<a href="https://www.facebook.com/v2.2/dialog/oauth?app_id=370752916462602&client_id=370752916462602&display=popup&domain=elfcosmetics.vn&e2e=%7B%7D&locale=en_US&origin=1&redirect_uri=http%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2F87XNE1PC38r.js%3Fversion%3D42%23cb%3Df1b0a3ebd4e058c%26domain%3Delfcosmetics.vn%26origin%3Dhttp%253A%252F%252Felfcosmetics.vn%252Ff1ede54062c251a%26relation%3Dopener%26frame%3Df3d15ea3ecfecfa&response_type=token%2Csigned_request&scope=publish_actions%2Cpublish_stream%2Cemail&sdk=joey&version=v2.2"><img src="image/f_sign.jpg"></a>
						</td>
						<td>
							<p></p><br>
							<label id="label">MẬT KHẨU(*)</label>
						</td>
						<td>
							<p></p><br>
							<label id="label">MẬT KHẨU(*)</label>
						</td>
					</tr>
					<tr>
						<td></td>
						<td>
							<input type="password" name="password">
						</td>
						<td>
							<input type="password" name="password2">
						</td>
					</tr>
					<tr>
						<td></td>
						<td>
							<p></p><br>
							<input type="submit" name="login" value="ĐĂNG NHẬP" id="btn_dn" class="butt">
						</td>
						<td>
							<p></p><br>
							<label id="label">XÁC NHẬN MẬT KHẨU(*)</label>
						</td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td>
							<input type="password" name="xnmatkhau">
						</td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td>
							<p></p><br>
							<label id="label">HỌ TÊN</label>
						</td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td>
							<input type="Text" name="hoten">
						</td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td>
							<p></p><br>
							<label id="label">ĐỊA CHỈ</label>
						</td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td>
							<input type="Text" name="diachi">
						</td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td>
							<p></p><br>
							<label id="label">SỐ ĐIỆN THOẠI</label>
						</td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td>
							<input type="Text" name="sdt">
						</td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td>
							<p></p><br>
							<label id="label">EMAIL</label>
						</td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td>
							<input type="Text" name="email">
						</td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td>
							<p></p><br>
							<input type="submit" name="dangky" value="ĐĂNG KÝ" id="btn_dk" class="butt">
						</td>
					</tr>
				</table>
				</form>
				<table id="sub-table">
					<th colspan="" rowspan="" headers="" scope=""></th>
				</table>
			</div>

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