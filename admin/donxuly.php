<?php
    include "config/config.php";
    if(isset($_GET['code'])){
		$code_cart = $_GET['code'];
		$sql_update ="UPDATE cart SET trangthai=0 WHERE madonhang='$code_cart'";
		$query = mysqli_query($conn,$sql_update);
        header('Location:./donhanglist.php');
	}
 ?>   