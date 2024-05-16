<div class="main">

            <div class="maincontent">
              
                <?php //lấy qiamly từ menu truyền vào bằng phuongư thức GET
                        if(isset($_GET['quanly'])){
                            $bien=$_GET['quanly'];

                        }else{
                            $bien="";
                        }
                        if ($bien=='giohang'){ 
                            include("noidung/giohang/cart.php");
                        }elseif ($bien=='dangky'){ 
                            include("noidung/dangky.php");
                        }elseif ($bien=='sanpham'){ 
                            include("noidung/sanphamct.php");
                        
                        }elseif ($bien=='dangnhap'){ 
                            include("noidung/dangnhap.php");
                        }elseif ($bien=='camon'){ 
                            include("noidung/thanhtoan/thankyou.php");    

                        }elseif ($bien=='timkiem'){ 
                            include("noidung/timkiem.php");
                            
                        
                        }else{
                            
                        }?>
<?php
    include("sidebar/sidebar.php");
    if ($bien=='danhmuclist'){
        include("noidung/danhmuc.php");
    }
?>


