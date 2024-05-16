<?php
include "header.php";
include "leftside.php";
include 'footer.php';
include "config/config.php";

?>
<?php
   $sql_lietke_dh="SELECT * FROM cart ,dangky  WHERE cart.idkhachhang=dangky.idkhachhang ORDER BY idcart DESC";
    $result_lietke_dh= mysqli_query($conn,$sql_lietke_dh);
?>
<p style="padding-left: 20%;">Liệt kê đơn hàng</p>
 <table style="width: 50%; margin-left:300px;" border="1" style="border-collapse:collapse;"> 
 <tr>
         <td>ID</td>
         <td>Mã đơn hàng</td>
         <td>Tên khách hàng</td>
         <td>Tài khoản</td>
         <td>Điện thoại</td>
         <td>Tinh Trạng </td>
         <td colspan="2">Quản lý </td>
     </tr>
     <?php
    $i=0;
    while($row=mysqli_fetch_array($result_lietke_dh)){
        $i++;
    
     ?>
     <tr>
         <td><?php echo $i ?></td>
         <td><?php echo $row['madonhang'] ?></td>
         <td><?php echo $row['hoten'] ?></td>
         <td><?php echo $row['taikhoan'] ?></td>
         <td><?php echo $row['sodienthoai'] ?></td>
         <td><?php if ($row['trangthai']==1) {
            echo '<a href="./donxuly.php?code='.$row['madonhang'].'">Đơn hàng mới</a>';
        }else{
            echo 'đã xem';
        }
         ?>
            </td>
         <td>
            <a href="donhang.php?code=<?php echo $row['madonhang']?>">xem đơn hàng</a>
         </td>
     </tr>

     <?php
    }
    ?>
 </table>