<?php
	    include "config/config.php";
    $id=$_GET['iddanhmuc'];

	$sql_xoa = "DELETE FROM danhmuc WHERE iddanhmuc ='$id'"; 
	mysqli_query($conn, $sql_xoa);
    header('Location:./productlist.php');
