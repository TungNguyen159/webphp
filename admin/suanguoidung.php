<?php
    include './config/config.php';
    $name=$_POST['hoten'];
    $account = $_POST['taikhoan'];
    $email = $_POST['email'];
    $numberphone = $_POST['sodienthoai'];
    $chucvu=$_POST['role'];

   if(isset($_POST['suanguoidung'])){
        $sql_sua_nd="UPDATE dangky SET hoten='$name',taikhoan='$account',email='$email',sodienthoai='$numberphone',role='$chucvu' WHERE idkhachhang='$_GET[idkhachhang]'";
        mysqli_query($conn,$sql_sua_nd);
        header('Location:./nguoidunglist.php');
    }
?>