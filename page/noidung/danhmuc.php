<?php
      // GET id là lấy id từ menu.php
    $sql_show ="SELECT * FROM sanpham WHERE sanpham.iddanhmuc='$_GET[id]' ORDER BY idsanpham DESC LIMIT 4";
    $query_show =mysqli_query($conn,$sql_show);
   
    //get ten danh muc
    $sql_cate ="SELECT * FROM danhmuc WHERE iddanhmuc='$_GET[id]' LIMIT 1";
    $query_cate =mysqli_query($conn,$sql_cate);
    $row_title =mysqli_fetch_array($query_cate);
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
											while($row_pro=mysqli_fetch_array($query_show)){
										?>
							
									<div class="slide-product-content-items" >
											<img src="./admin/uploads/<?php echo $row_pro['hinhanh'] ?>">
										<div class="slide-product-content-items-text">
											<li><a href="index.php?quanly=sanpham&id=<?php echo $row_pro['idsanpham'] ?>"><?php echo $row_pro['tensanpham'] ?></a></li>
											<li><?php echo $row_pro['cauhinh'] ?></li>
											<li><?php echo number_format($row_pro['giasanpham'],0,',','.').'vnd' ?></li>
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
				


	