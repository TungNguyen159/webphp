<?php
    include "header.php";
    include "leftside.php";
    include 'footer.php';
    include 'config/config.php';
    $sql_lietke_sp="SELECT * FROM sanpham ,danhmuc WHERE sanpham.iddanhmuc=danhmuc.iddanhmuc ORDER BY idsanpham DESC";
    $result_lietke_sp= mysqli_query($conn,$sql_lietke_sp);
?>
<p style="padding-left: 300px;">Liệt kê danh mục sản phẩm</p>
 <table style="width:70%;margin-left:300px;" border="1" style="border-collapse:collapse;"> 
     <tr>
         <td>ID</td>
         <td>Tên sản phảm</td>
         <td>Hình ảnh </td>
         <td>Giá sản phẩm</td>
         <td>Cấu hình</td>
         <td>Số lượng</td>
         <td>Danh mục</td>
         <td>Mã sản phẩm</td>
         <td>Quản lý</td>
     </tr>
     <?php
    $i=0;
    while($row=mysqli_fetch_array($result_lietke_sp)){
        $i++;
    
     ?>
     <tr>
         <td><?php echo $i ?></td>
         <td style="width:80px;height:150px; text-align: center;">
                            <?php echo $row['tensanpham'] ?>   
         </td>
         
         <td style="width:130px;height:130px;" >
                            <img src="./uploads/<?php echo $row['hinhanh'] ?> " width="100%" >   
         </td>

         <td style="width:150px;text-align: center;">
                            <?php echo number_format($row['giasanpham'],0,',','.').'VNĐ'  ?>   
         </td>
         <td><?php echo $row['cauhinh'] ?>      </td>
         <td><?php echo $row['soluong'] ?>      </td>
         <td><?php echo $row['tendanhmuc'] ?>      </td>
         <td><?php echo $row['masanpham'] ?>    </td>
         <td>
            <a href="xoasanpham.php?idsanpham=<?php echo $row['idsanpham']?>">Xóa</a>|
            <a href="suainfo.php?idsanpham=<?php echo $row['idsanpham']?>">Sửa</a>
         </td>
     </tr>

     <?php
    }
    ?>
 </table>