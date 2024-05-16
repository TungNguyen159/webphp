<?php
include "header.php";
include "leftside.php";
include 'footer.php';
include "config/config.php";

?>
<?php
        $sql_lietke_nguoidung="SELECT * FROM dangky ORDER BY idkhachhang DESC";
        $result_lietke_nguoidung= mysqli_query($conn,$sql_lietke_nguoidung);
    ?>
    <p style="padding-left:300px;">Danh sách người dùng</p>
    <table style="width: 50%; margin-left:250px;" border="1">
        <tr>
            <th>ID</th>
            <th>tên </th>
            <th>tài khoản</th>
            <th>Email</th>
            <th>Số điện thoại</th>
            <th colspan="2"></th>
            <th>Chức vụ</th>
            

            
        </tr>
            <?php
                $i=0;
                while($row=mysqli_fetch_array($result_lietke_nguoidung)){
                $i++;
                
            ?>
        
        <tr>
            <td style="height:100px;"> <?php echo $i ?></td>
            <td> <?php echo $row ['hoten']?></td>
            <td> <?php echo $row ['taikhoan']?></td>
            <td> <?php echo $row ['email']?></td>
            <td> <?php echo $row ['sodienthoai']?></td>
            <td>
                    <a href="xoanguoidung.php?idkhachhang=<?php echo $row['idkhachhang'] ?>"> Xóa </a>
            </td>
            <td>
                    <a href="suand.php?idkhachhang=<?php echo $row['idkhachhang']?>">sửa</a>
            </td>
            <td><?php if($row['role']==1){
                echo "Bán hàng";
         }else{
                echo "Không";
         }?>
         </td>
        </tr>


            <?php
                }
            ?>
    </table>