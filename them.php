<form action="models/sanpham.php" method="post" enctype="multipart/form-data">
<table width="1674" id="tab_2">
		<tr>
			<th width="347"></th>
			<th width="586"></th>
			<th width="558"></th>
            <th width="163"></th>
		</tr>
		<tr>
			<td>Mã sản phẩm</td>
			<td>Mã loại sản phẩm</td>
			<td>Số lượng</td>
            <td>Tên sản phẩm</td>
			
		</tr>
		<tr>
			<td><input type="Text" name="id_sp" id="id_sp"></td>
			<td><input type="Text" name="id_loaisp" id="id_loaisp"></td>
			<td><input type="Text" name="sl" id="sl"></td>
            <td><input type="Text" name="ten_sp" id="ten_sp"></td>
			
		</tr>
		<tr>
			<td><p></p></td>
			<td><p></p></td>
			<td><p></p></td>
		</tr>
		<tr>
			
			<td>Giá</td>
			<td>Link ảnh sản phẩm</td>
			<td>Giá khuyến mãi</td>
            <td>Tình trạng:</td>
		</tr>
		<tr>
			<td><input type="Text" name="gia" id="gia"></td>
			<td><input type="Text" name="link_anh" id="link_anh"></td>
			<td><input type="Text" name="gia_km" id="gia_km"></td>
			<td><input type="Text" name="tinh_trang" id="tinh_trang">Còn hàng</td>
		</tr>
		<tr>
			<td><p></p></td>
			<td><p></p></td>
			<td><p></p></td>
		</tr>
		<tr>	
			<td>Thông tin sản phẩm</td>
		</tr>
		<tr>
			<td><textarea name="ttsp" id="ttsp" cols="30" rows="10"></textarea></td>
		</tr>
		<tr>
			<td><input type="submit" name="them" id="them" value="Thêm"></td>
		</tr>
</table>
<div><p style="font-size: 21px; font-weight: bold; text-align: center; text-indent: 450px;">Danh sách sản phẩm</p></div>
</form>
