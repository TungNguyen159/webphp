<?php
  include "config/config.php";
  $id=$_GET['idkhachhang'];
  $sql_xoa_nd="DELETE FROM dangky WHERE idkhachhang ='$id'";
  mysqli_query($conn,$sql_xoa_nd);
  header('Location:./nguoidunglist.php');
?>