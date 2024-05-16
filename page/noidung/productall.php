<?php
    // GET id là lấy id từ sidebar
    $sql_show ="SELECT * FROM sanpham,danhmuc WHERE sanpham.iddanhmuc=danhmuc.iddanhmuc ORDER BY sanpham.idsanpham DESC LIMIT 20";
    $query_show =mysqli_query($conn,$sql_show);
?>
<section class="banner">
	<div class="container">
		<img src="./images/banner.png" style="width: 100%;" alt="">
	</div>
</section>	
<section class="slide-product2">
		<div class="container">
			<!----Product2---->
			<div class="slide-product-content-2">
				<div class="slide-product-content-title-2">
					<img src="./images/banner1.png" alt="" style="width: 100%;">
				</div>
				<div class="slide-product-content-container-2">
					<div class="slide-product-content-item-content-2">
					    <div class="slide-product-content-item-2">
                                <?php
									while($rowall=mysqli_fetch_array($query_show)){
								?>
							        <div class="slide-product-content-items">
											<img src="./admin/uploads/<?php echo $rowall['hinhanh'] ?>">
										<div class="slide-product-content-items-text">
											<li><a href="index.php?quanly=sanpham&id=<?php echo $rowall['idsanpham']?>"><?php echo $rowall['tensanpham'] ?></a></li>
											<li><?php echo $rowall['cauhinh'] ?></li>
											<li><?php echo number_format($rowall['giasanpham'],0,',','.').'vnd' ?></li>
										</div>
									
									</div>
                                <?php
                                    }
                                ?>
                        </div>       
					</div>
				</div>
			</div>		
		</div>
	</section>