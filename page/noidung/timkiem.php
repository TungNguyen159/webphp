<?php
	if(isset($_POST['timkiem'])){
		$tukhoa = $_POST['tukhoa'];
	}
	$sql_pro = "SELECT * FROM sanpham,danhmuc WHERE sanpham.iddanhmuc=danhmuc.iddanhmuc AND sanpham.tensanpham LIKE '%".$tukhoa."%'";
	$query_pro = mysqli_query($conn,$sql_pro);
	
?>
<h3 style="padding-left: 300px;">Từ khoá tìm kiếm : <?php echo $_POST['tukhoa']; ?></h3>
				<ul class="product_list" style="padding-left: 300px; display:grid;
                    grid-template-columns: auto auto auto auto ;">
					<?php
					while($row = mysqli_fetch_array($query_pro)){ 
					?>
					<li >
						<a href="index.php?quanly=sanpham&id=<?php echo $row['idsanpham'] ?>">
							<img src="admin/uploads/<?php echo $row['hinhanh'] ?>" width="200px">
							<p class="title_product">Sản phẩm : <?php echo $row['tensanpham'] ?></p>
							<p class="price_product">Giá : <?php echo number_format($row['giasanpham'],0,',','.').'vnđ' ?></p>

						</a>
					</li>
					<?php
					} 
					?>
				</ul>