<?php
	$sql="select * from sanpham order by id_sanpham asc";
	$rs=mysql_query($sql,$conn);
?>
<div><p></p><br>
<table border=1 id="tab">
	<tr  style="border: 1px solid #111;">
		<th style="text-align: center;">Mã SP</th>
		<th style="text-align: center;">Mã loại SP</th>
		<th style="text-align: center;">Tên SP</th>
		<th style="text-align: center;">Link ảnh</th>
		<th style="text-align: center;">Số lượng</th>
		<th style="text-align: center;">Giá</th>
		<th style="text-align: center;">Giá KM</th>
		<th style="text-align: center;">Thông tin SP</th>
		<th style="text-align: center;">Tình trạng</th>
		<th style="text-align: center;" colspan="2">Quản lý</th>
	</tr>
    <?php
    	$i=1;
		while($row=mysql_fetch_array($rs)){
	?>
	<tr>
		<td><?php echo $row[0] ?></td>
        <td><?php echo $row[1] ?></td>
        <td><?php echo $row[2] ?></td>
        <td><?php echo $row[3] ?></td>
        <td><?php echo $row[4] ?></td>
        <td><?php echo $row[5] ?></td>
        <td><?php echo $row[6] ?></td>
        <td><?php echo $row[7] ?></td>
        <td><?php echo $row[8] ?></td>
		<td><a href="QuanLySanPham.php?quanly=quanlysp&ac=sua&id=<?php echo $row[0] ?>">Sửa</a></td>
		<td><a href="models/sanpham.php?id=<?php echo $row[0]; ?>">Xóa</a></td>
	</tr>
    <?php
    	$i++;
		}
	?>
</table>
</div>