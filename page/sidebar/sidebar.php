<section class="slide-product">
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Danh mục</h2>
						<div class="panel-group category-products" ><!--category-productsr-->
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4  class="panel-title"><a>
										<?php
										$sql_danhmuc="SELECT * FROM danhmuc ORDER BY iddanhmuc DESC";
										$query_danhmuc=mysqli_query($conn,$sql_danhmuc);
										while ($rowp=mysqli_fetch_array($query_danhmuc)){
										?>
										<li><a href="index.php?quanly=danhmuclist&id=<?php echo $rowp['iddanhmuc']?>"><?php echo $rowp['tendanhmuc']?></a></li>
										<?php
										}
										?>
										</a>
									</h4>
								</div>
							</div>
						</div>
					</div>
				</div>