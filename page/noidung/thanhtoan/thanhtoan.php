<?php
	session_start();
    include "../../../admin/config/config.php";
	$idkhachhang = $_SESSION['idkhachhang'];
	$madon= rand(0,9999);// random tuwf 0 den 4 so
	$insert_cart = "INSERT INTO `cart`(`idkhachhang`, `madonhang`, `trangthai`) VALUES ('$idkhachhang','$madon','1')";
	$cart_query = mysqli_query($conn,$insert_cart);
	if($cart_query){
		//thêm giỏ hàng chi tiết
		foreach($_SESSION['cart'] as $key => $value){
			$idsanpham=$value['id'];
			$soluongmua=$value['soluong'];
			
			$insert_order_details = "INSERT INTO cart_detail(madonhang,idsanpham,soluongmua) VALUES('$madon','$idsanpham','$soluongmua')";
			mysqli_query($conn,$insert_order_details);
		}
	}
   unset($_SESSION['cart']);

   header('Location:../../../index.php?quanly=camon');
?>