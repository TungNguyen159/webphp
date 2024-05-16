<?php
    include 'header.php';
    include 'leftside.php';
    include 'footer.php';
    include 'config/config.php';


  
    
    if(isset($_POST['themsanpham'])){
        $tensanpham=$_POST['tensanpham'];
        $masanpham=$_POST['masanpham'];
        $giasanpham=$_POST['giasanpham'];
        $soluong=$_POST['soluong'];
        $cauhinh=$_POST['cauhinh'];
         //xử lý hình anh
        $file=$_FILES['hinhanh'];
        $hinhanh=$file['name'];
        $hinhanh_tmp=$_FILES['hinhanh']['tmp_name'];
        $hinhanhgio=time().'_'.$hinhanh;
        $danhmuc=$_POST['danhmuc'];
        


        if(isset($_FILES['hinhanh'])){
            if($file['type']== 'image/jpeg'||$file['type']== 'imgae/jpg'||$file['type']== 'image/png'){
                
                move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
                
                $sql_themsp="INSERT INTO sanpham(tensanpham,masanpham,giasanpham,cauhinh,soluong,hinhanh,iddanhmuc) 
                VALUES('$tensanpham','$masanpham','$giasanpham','$cauhinh','$soluong','$hinhanh','$danhmuc')";
                mysqli_query($conn,$sql_themsp);        
            }else{
                $hinhanh='';
                header('Location:./themsanpham.php');
            }
        }
       

    }
?>
 <table border="1" width="50%" style="border-collapse: collapse; margin-left:300px">
   <form method="POST" enctype="multipart/form-data">
    <tr>
        <th colspan="2">Điền sản phẩm</th>
    </tr>
    <tr>
        <td>Tên sản phẩm</td>
        <td><input type="text" name="tensanpham" ></td>
    </tr>
    <tr>
        <td>Mã sản phẩm</td>
        <td><input type="text" name="masanpham" ></td>
    </tr>
    <tr>
        <td>Giá</td>
        <td><input type="number" name="giasanpham" ></td>
    </tr>
    <tr>
        <td>Cấu hình</td>
        <td><input type="text" name="cauhinh" ></td>
    </tr>
    <tr>
        <td>Số lượng</td>
        <td><input type="text" name="soluong" ></td>
    </tr>
    <tr>
        <td>Hình ảnh</td>
        <td><input type="file" name="hinhanh" ></td>
        
    </tr>
    <tr>
        <td>Danh mục sản phẩm</td>
        <td>
          <select name="danhmuc">
                <?php
                    $sql_danhmuc="SELECT * FROM danhmuc ORDER BY iddanhmuc DESC";
                    $query_danhmuc=mysqli_query($conn,$sql_danhmuc);
                    while($row_danhmuc=mysqli_fetch_array($query_danhmuc)){
                ?>
                <!--dùng value thêm danh mục dựa vào địa chỉ id_danhmuc -->
                <option value="<?php echo $row_danhmuc['iddanhmuc']?>"><?php echo $row_danhmuc['tendanhmuc']?></option>
            

                <?php
                    }
                ?>
          </select>
        </td>
    </tr>
    <tr>

        <td colspan="2"><input type="submit" value="Thêm sản phẩm" name="themsanpham"></td>
    </tr>
</form>
 </table>    