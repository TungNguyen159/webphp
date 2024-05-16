<?php
    include "header.php";
    include "leftside.php";
    include 'footer.php';
    include 'config/config.php';
    $id=$_GET['idsanpham'];
    $sql_sua="SELECT * FROM sanpham WHERE idsanpham='$id'";
    $result_sua= mysqli_query($conn,$sql_sua);
?>
 <p style="padding-left:300px;">Thêm danh mục sản phẩm</p>
 <table border="1" width="50%" style="border-collapse: collapse; margin-left:300px;">
    <form method="POST" action="suasanpham.php?idsanpham=<?php echo $_GET['idsanpham']?>" enctype="multipart/form-data">
 <?php
    while($row =mysqli_fetch_array($result_sua)){
        

?>
   
    <tr>
        <th colspan="2">Điền sản phẩm</th>
    </tr>
    <tr>
        <td>Tên sản phẩm</td>
        <td><input type="text"  value="<?php echo $row['tensanpham']?>" name="tensanpham" ></td>
    </tr>
    <tr>
        <td>Mã sản phẩm</td>
        <td><input type="text" name="masanpham" value="<?php echo $row['masanpham']?>" ></td>
    </tr>
    <tr>
        <td>Giá</td>
        <td><input type="number" name="giasanpham" value="<?php echo $row['giasanpham']?>"></td>
    </tr>
    <tr>
        <td>Cấu hình</td>
        <td><input type="text" name="cauhinh" value="<?php echo $row['cauhinh']?>"></td>
    </tr>
    <tr>
        <td>Số lượng</td>
        <td><input type="text" name="soluong" value="<?php echo $row['soluong']?>"></td>
    </tr>
    <tr>
        <td>Hình ảnh</td>
        <td><input type="file" name="hinhanh" >
        <img src="./uploads/<?php echo $row['hinhanh'] ?> " width="150px" >
    </td>
    </tr>
    <tr>
        <td>Danh mục sản phẩm</td>
        <td>
          <select name="danhmuc">
                <?php
                    $sql_danhmuc="SELECT * FROM danhmuc ORDER BY iddanhmuc DESC";
                    $query_danhmuc=mysqli_query($conn,$sql_danhmuc);
                    while($row_danhmuc=mysqli_fetch_array($query_danhmuc)){
                        if($row_danhmuc['iddanhmuc']==$row['iddanhmuc']){
                ?>
                <!--dùng value thêm danh mục dựa vào địa chỉ id_danhmuc -->
                <option value="<?php echo $row_danhmuc['iddanhmuc']?>" selected><?php echo $row_danhmuc['tendanhmuc']?></option>
                <?php
                        }else{
                        
                ?>
                <option value="<?php echo $row_danhmuc['iddanhmuc']?>"><?php echo $row_danhmuc['tendanhmuc']?></option>
                <?php
                        }
                    }
                ?>
          </select>
        </td>
    </tr>
    <tr>

        <td colspan="2"><input type="submit" value="Sửa sản phẩm" name="suasanpham"></td>
    </tr>
</form>
<?php
}
?>
 </table>