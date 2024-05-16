
 <div class="show">
<?php //lấy qiamly từ menu truyền vào bằng phuongư thức GET
                        if(isset($_GET['quanly'])){
                            $bien=$_GET['quanly'];

                        }else{
                            $bien="";
                        }
                       if($bien==""){
               
                            include("noidung/pro.php");
                            
                        }

 ?>

 </div>