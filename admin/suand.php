<?php
    include "header.php";
    include "leftside.php";
    include 'footer.php';
    include 'config/config.php';
	$sql_nguoidung="SELECT * FROM dangky WHERE idkhachhang='$_GET[idkhachhang]'";
	$querynd=mysqli_query($conn,$sql_nguoidung);
	
?>
    <p style="padding-left:300px;">SỬA NGƯỜI DÙNG</p>
<table width="50%" style="border-collapse: collapse;margin-left:300px">
    <form method="POST" action="suanguoidung.php?idkhachhang=<?php echo $_GET['idkhachhang']?>" >

	<?php
	
	 	while($nguoidung =mysqli_fetch_array($querynd)){
	
	?>

	<tr>
		<td>tên</td>
		<td><input type="text" size="50" name="hoten"	value="<?php echo $nguoidung['hoten']?>"></td>
	</tr>
    <tr>
		<td>tài khoản</td>
		<td><input type="text" size="50" name="taikhoan" value="<?php echo $nguoidung['taikhoan']?>"></td>
	</tr>
	<tr>
		<td>Email</td>
		<td><input type="text" size="50" name="email" value="<?php echo $nguoidung['email']?>">		</td>
	</tr>
	<tr>
		<td>số điện thoại</td>
		<td><input type="text" size="50" name="sodienthoai" value="<?php echo $nguoidung['sodienthoai']?>">	</td>
	</tr>
	
	
	<tr>
		<td>Chức Vụ </td>
			<td>
			<select name="role">
				<?php 
						if($nguoidung['role']==1){
				?>
					<option value="1" selected> Bán hàng</option>
					<option value="0">Không</option>

				<?php
						}else{
				?>
					<option value="1" > Bán hàng</option>
					<option value="0" selected>Không</option>
				<?php

						}
				
				?>
			</select>
			</td>
	</tr>
    <tr>
		
		<td colspan="2" style="text-align: center;"><input type="submit" name="suanguoidung" value="Sửa"></td>
		
	</tr>
    </form>



<?php
	 }
	
	?>
</table>    