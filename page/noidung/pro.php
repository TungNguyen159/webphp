<?php
   $sql_show ="SELECT * FROM sanpham,danhmuc WHERE sanpham.iddanhmuc=danhmuc.iddanhmuc ORDER BY sanpham.idsanpham DESC LIMIT 4";
   $query_show =mysqli_query($conn,$sql_show);
?>
<div class="col-sm-9">
					<div class="slide-product-content">	
						<div class="slide-product-content-title">
							<h2 class="title">Săn online vui mỗi ngày</h2>
						</div>
						<div class="slide-product-content-container">
							<div class="slide-product-content-item-content">
								<div class="slide-product-content-item">
									<?php
											while($row=mysqli_fetch_array($query_show)){
										?>
								
									<div class="slide-product-content-items">
											<img src="./admin/uploads/<?php echo $row['hinhanh'] ?>">
										<div class="slide-product-content-items-text">
											<li><a href="index.php?quanly=sanpham&id=<?php echo $row['idsanpham']?>"><?php echo $row['tensanpham'] ?></a></li>
											<li><?php echo $row['cauhinh'] ?></li>
											<li><?php echo number_format($row['giasanpham'],0,',','.').'vnd' ?></li>

										</div>
									
									</div>
									<?php
										}
										?>
								</div>
							</div>
							
							<!-- <div class="slide-product-content-btn">
								<i class="fa fa-angle-left fa-angle-left-two"></i>
								<i class="fa fa-angle-right fa-angle-right-two"></i>
							</div> -->
						</div>	
					</div>
				</div>
			</div>
		</div>	
				

	
	