<?php
        $tendanhmuc=$_POST['tendanhmuc'];
	    include "config/config.php";
        $id=$_GET['iddanhmuc'];
        if(isset($_POST['suadanhmuc'])){
        $sql_sua="UPDATE danhmuc SET tendanhmuc='$tendanhmuc' WHERE iddanhmuc='$id'";
        mysqli_query($conn,$sql_sua);
        header('Location:./productlist.php');
}