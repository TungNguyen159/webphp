<?php
  include "config/config.php";
  $id=$_GET['idsanpham'];
  $sql="SELECT *FROM sanpham WHERE idsanpham = '$id' LIMIT 1";
  $query=mysqli_query($conn,$sql);
  while($row=mysqli_fetch_array($query)){
      unlink('uploads/'.$row['hinhanh']);
  }
  $sql_xoa="DELETE FROM sanpham WHERE idsanpham ='".$id."';";
  mysqli_query($conn,$sql_xoa);
  header('Location:./sanphamlist.php');
?>