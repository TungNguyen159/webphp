<?php
include "header.php";
include "leftside.php";
include 'footer.php';
include "config/config.php";

?>
<?php
    $code=$_GET['code'];
   $sql_lietke_dh="SELECT * FROM cart_detail ,sanpham  WHERE cart_detail.idsanpham=sanpham.idsanpham and 
        cart_detail.madonhang=$code order by cart_detail.idcartdetail desc";
    $result_lietke_dh= mysqli_query($conn,$sql_lietke_dh);
?>
<p style="padding-left: 20%;">xem đơn hàng</p>
 <table style="width: 50%; margin-left:300px; text-align:center;" border="1" style="border-collapse:collapse;"> 
 <tr>
         <td>ID</td>
         <td>Mã đơn hàng</td>
         <td>Tên sản phẩm</td>
         <td>Hình ảnh</td>
         <td>Số lượng</td>
         <td>đơn giá</td>
         <td>thành tiền</td>
     </tr>
     <?php
            $i=0;
            $tongtien=0;
            while($row=mysqli_fetch_array($result_lietke_dh)){
            $i++;
            $thanhtien= $row['giasanpham'] * $row['soluongmua'];
            $tongtien+=$thanhtien;
     ?>
     <tr>
     <td><?php echo $i ?></td>
         <td><?php echo $row['madonhang'] ?></td>
         <td><?php echo $row['tensanpham']?></td>
         <td style="width:150px;height:150px;" >
                            <img src="./uploads/<?php echo $row['hinhanh'] ?> " width="100%" >   
         </td>
         <td><?php echo $row['soluongmua']?></td>
         <td><?php echo number_format($row['giasanpham'],0,',','.').'VNĐ' ?></td>
         <td><?php echo number_format($thanhtien,0,',','.').'VNĐ' ?></td>
     </tr>

     <?php
    }
    ?>
     <tr>
         <th colspan="7">Tổng tiền : <?php echo number_format($tongtien,0,',','.').'VNĐ' ?></th>
         
     </tr>
 </table>