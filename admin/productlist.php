<?php
include "header.php";
include "leftside.php";
include 'footer.php';
include "config/config.php";

?>
<?php
    $sql_lietke="SELECT * FROM danhmuc ";
    $result_lietke= mysqli_query($conn,$sql_lietke);
?>
<p style="padding-left: 30%;">Liệt kê danh mục sản phẩm</p>
 <table style="width: 50%; margin-left:300px;" border="1" style="border-collapse:collapse;"> 
     <tr>
         <td>ID</td>
         <td>Tên danh mục</td>
     </tr>
     <?php
    $i=0;
    while($row=mysqli_fetch_array($result_lietke)){
        $i++;
    
     ?>
     <tr>
         <td><?php echo $i ?></td>
         <td><?php echo $row['tendanhmuc'] ?></td>
         <td>
            <a href="xoadanhmuc.php?iddanhmuc=<?php echo $row['iddanhmuc']?>">Xóa</a>|
             <a href="sua.php?iddanhmuc=<?php echo $row['iddanhmuc']?>">Sửa</a>
         </td>
     </tr>

     <?php
    }
    ?>
 </table>