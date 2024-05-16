<p style="padding-left: 300px;"><?php
        if(isset($_SESSION['dangky'])){
            echo 'xin chào: '.'<span style="color:red">'.$_SESSION['dangky'].'</span>';
            echo $_SESSION['idkhachhang'];
        } 
  ?></p>
<?php
            if(isset($_SESSION['cart'])){

                
            }

?>
<section id="cart_items">
            <div class="container">
                <div class="table-responsive cart_info">
                    <table class="table table-condensed">
                        <thead>
                            <tr class="cart_menu">
                                <td> id</td>
                                <td class="image">Mặt hàng</td>
                                <td class="description">Thông tin</td>
                                <td class="quantity">Số lượng</td>
                                <td class="price">Giá</td>
                                <td class="total">Tổng tiền</td>
                                <td>quản lý</td>
                            </tr>
                        </thead>
                        <?php
        if(isset($_SESSION['cart'])){
            $i=0;
            $tongtien=0;
            foreach($_SESSION['cart'] as $cart_item){
                $thanhtien = $cart_item['soluong'] * $cart_item['giasanpham'];
                $tongtien+=$thanhtien;
                $i++;
                ?>
                        <tbody>
                            <tr>
                                <td><?php echo $i;?></td>
                                <td class="cart_product">
                                    <a href=""><img src="admin/uploads/<?php echo $cart_item['hinhanh']?> " width="150px"></a>
                                </td>
                                <td class="cart_description">
                                    <h4><a href=""><?php echo $cart_item['tensanpham']?></a></h4>
                                </td>
                                <td class="cart_price">
                                <a href="page/noidung/giohang/suasoluong.php?cong=<?php echo $cart_item['id'] ?>"><i class="fa-solid fa-plus"></i></a>
                                <?php echo $cart_item['soluong'] ?>
                                <a href="page/noidung/giohang/suasoluong.php?tru=<?php echo $cart_item['id'] ?>"><i class="fa-solid fa-minus"></i></a>
                                </td>
                                <td class="cart_price">
                                    <p><?php echo number_format($cart_item['giasanpham'],0,',','.') . ' VNĐ'?></p>
                                </td>
                                <td class="cart_price">
                                <p><?php  echo number_format($thanhtien,0,',','.') . ' VNĐ' ?></p>
                                </td>
                                <td class="cart_price">
                                <a href="page/noidung/giohang/xoasanpham.php?xoa=<?php echo $cart_item['id'] ?>">XÓA</a>
                                </td>
                            </tr>
                          
                        </tbody>
                        <?php 
                            }
                        ?>
                            <tr>
                            <td colspan="6"><p>tổng tiền  <?php echo number_format($tongtien,0,',','.') . ' VNĐ'  ?></</p>
                            <?php
                            if(isset($_SESSION['dangky'])){
                                
                                        ?>
                                                <p><a href="page/noidung/thanhtoan/thanhtoan.php">Đặt hàng</a></p>
                                        <?php
                                        }else{
                                        
                                        ?>
                                            <p><a href="index.php?quanly=dangnhap">Đăng nhập đặt hàng</a></p>
                                        <?php
                                        }

                                        ?>
                                </td>
                            </tr>
                        <?php
                        }else{
                        ?>
                            <tr>
                                <td colspan="6"><p>hiện tại giỏ hàng trống</p></td>
                            </tr>
                         <?php } ?>   
                    </table>
                </div>
  
            </div>
