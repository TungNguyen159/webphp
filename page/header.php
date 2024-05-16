<!DOCTYPE html>
<html lang="en">
<head>
  <title>Shop điện thoại</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="./css/bootstrap.min.css" rel="stylesheet">
  <link href="./css/styles.css" rel="stylesheet">
  <link href="./css/responsive.css" rel="stylesheet" >
<body>
	
<?php
	if(isset($_GET['dangxuat'])&&$_GET['dangxuat']==1){
		unset($_SESSION['dangky']);
	} 
?>	
<header id="header">	
	<div class="header-middle"><!--header-top-->
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<div class="title-bar">
						<h2><a href="./index.php">.Phone</a></h2>
					</div>
				</div>
				<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<li><a href="index.php?quanly=giohang"><i class="fa fa-shopping-cart"></i> Giỏ hàng</a></li>
								<?php
										if(isset($_SESSION['dangky'])){
									?>
										<li> <a href="index.php?dangxuat=1">Đăng xuât</a></li>
									<?php
										}else{
									?>
										<li> <a href="index.php?quanly=dangnhap"><i class="fa fa-lock"></i> Đăng nhập</a></li>
										<li><a href="index.php?quanly=dangky"><i class="fa fa-lock"></i> Đăng ký</a></li>
									<?php
										}
									?>
								<li><a>
									<?php
									if(isset($_SESSION['dangky'])){
										echo 'xin chào:'.'<span style="color:red">'.$_SESSION['dangky'].'</span>';
									}
									?>
								</a></li>

							</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-9">
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav navbar-collapse">
								<li><a href="index.php">Trang chủ</a></li>
								<li><?php
										$sql_danhmuc="SELECT * FROM danhmuc ORDER BY iddanhmuc DESC limit 5";
										$query_danhmuc=mysqli_query($conn,$sql_danhmuc);
										while ($rowp=mysqli_fetch_array($query_danhmuc)){
										?>
										<li><a href="index.php?quanly=danhmuclist&id=<?php echo $rowp['iddanhmuc']?>"><?php echo $rowp['tendanhmuc']?></a></li>
										<?php
										}
										?></li>

							</ul>
						</div>
					</div>
					<div class="col-sm-3">
							<li> 
							<Form method="POST" action="index.php?quanly=timkiem"> 
								<input type="text" placeholder="sreach....." name="tukhoa">
								<input type="submit" name="timkiem" value="Tìm Kiếm">
							</Form>
						</li>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
<section class="banner">
			<div class="container">
				<img src="./images/banner3.png" style="width: 100%;" alt="">
			</div>
		</section>
<section class="slider">
	<div class="container">
		<div class="slider-content-left-container">
			<div class="slider-content-left">
				<a href="#"><img src="https://d1hjkbq40fs2x4.cloudfront.net/2016-01-31/files/1045-2.jpg" style="width: 100%;" alt=""></a>
				<a href="#"><img src="https://d1hjkbq40fs2x4.cloudfront.net/2016-01-31/files/1045-2.jpg" style="width: 100%;"alt=""></a>
				<a href="#"><img src="https://d1hjkbq40fs2x4.cloudfront.net/2016-01-31/files/1045-2.jpg"style="width: 100%;" alt=""></a>
			</div>	
			<div class="slider-content-left-btn">
					<i class="fa fa-angle-left "></i>
					<i class="fa fa-angle-right "></i>
			</div> 
		</div>
		
		<div class="slider-content-right"></div>
	</div>
</section>
</section>
	<section class="banner">
		<div class="container">
			<img src="./images/banner2.png" style="width: 100%;" alt="">
		</div>
	</section>			
