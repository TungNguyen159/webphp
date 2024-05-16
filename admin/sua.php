<?php
    include "header.php";
    include "leftside.php";
    include 'footer.php';
    include "config/config.php";
    $sql_sua="SELECT * FROM danhmuc WHERE iddanhmuc='$_GET[iddanhmuc]' ";
    $result_sua= mysqli_query($conn,$sql_sua);
?>
<p style="padding-left:300px;">Sửa danh mục sản phẩm</p>
 <table border="1" width="50%" style="border-collapse: collapse;margin-left:300px;">
   <form method="POST" action="suadanhmuc.php?iddanhmuc=<?php echo $_GET['iddanhmuc']?>">
    <?php
        while($dong =mysqli_fetch_array($result_sua)){
    ?>
   <tr>
        <th colspan="2" >Điền danh mục sản phẩm</th>
    </tr>
    <tr>
        <td>Tên danh mục</td>
        <td><input type="text" name="tendanhmuc" value="<?php echo $dong['tendanhmuc'] ?>" ></td>
    </tr>

    <tr>

        <td colspan="2"><input type="submit" value="Sửa sản phẩm" name="suadanhmuc"></td>
    </tr>
    <?php
        }
    ?>
</form>
 </table>