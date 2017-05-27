<?php
	$sql="select * from sanpham where id_sanpham=$_GET[id]";
	$rs=mysql_query($sql);
	$row=mysql_fetch_array($rs);
?>
<form action="models/sanpham.php?id=<?php echo $row[0] ?>" method="post" enctype="multipart/form-data">
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
			<td><input type="Text" name="id_sp" id="id_sp" value="<?php echo $row[0] ?>"></td>
			<td><input type="Text" name="id_loaisp" id="id_loaisp" value="<?php echo $row[1] ?>"></td>
			<td><input type="Text" name="sl" id	="sl" value="<?php echo $row[4] ?>"></td>
            <td><input type="Text" name="ten_sp" id="ten_sp" value="<?php echo $row[2] ?>"></td>
			
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
			<td><input type="Text" name="gia" id="gia" value="<?php echo $row[5] ?>"></td>
			<td><input type="Text" name="link_anh" id="link_anh" value="<?php echo $row[3] ?>"></td>
			<td><input type="Text" name="gia_km" id="gia_km" value="<?php echo $row[6] ?>"></td>
			<td><input type="Text" name="tinh_trang" id="tinh_trang" value="<?php echo $row[8] ?>">Còn hàng</td>
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
			<td><textarea name="ttsp" id="ttsp" cols="30" rows="10" value="<?php echo $row[7] ?>"></textarea></td>
		</tr>
		<tr>
			<td><input type="submit" name="sua" id="sua" value="Sửa"></td>
		</tr>
</table>
</form>
<div><p></p></div>