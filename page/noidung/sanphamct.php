<?php
    $sql_chitiet ="SELECT * FROM sanpham,danhmuc WHERE sanpham.iddanhmuc=danhmuc.iddanhmuc  AND sanpham.idsanpham='$_GET[id]' LIMIT 1";
    $query_chitiet=mysqli_query($conn,$sql_chitiet);
    while ($row_chitiet=mysqli_fetch_array($query_chitiet)){
 ?>
<section>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="product-details"><!--product-details-->
                        <div class="col-sm-6">
                            <div class="view-product">
                            <img src="admin/uploads/<?php echo $row_chitiet['hinhanh']?>">
                                <h3>ZOOM</h3>
                            </div>

                        </div>
                        <div class="col-sm-6">
                        <form method="POST" action="page/noidung/giohang/themgiohang.php?idsanpham=<?php echo $row_chitiet['idsanpham'] ?>">
                                <div class="product-information">
                                    <h2 style="margin: 0;"><?php echo $row_chitiet['tensanpham'] ?></h2></br>
                                    <h3>Mã :<?php echo $row_chitiet['masanpham'] ?></h3>
                                    <h3>Giá :<?php echo number_format($row_chitiet['giasanpham'],0,',','.').'vnd' ?></h3>
                                    <h3>Số lượng:<?php echo $row_chitiet['soluong'] ?></h3>
                                    <h3>Danh mục :<?php echo $row_chitiet['tendanhmuc'] ?></h3>
                                    <h3><input class="themgiohang" type="submit" name="themgiohang" value="Thêm Giỏ Hàng"></h3>
                                </div>
                        </form>
                        </div>
                    </div><!--/product-details-->
				</div>		
			</div>
		</div>
		
    </section>  
    <?php
    }
 ?>