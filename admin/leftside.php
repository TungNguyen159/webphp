<?php
        if(isset($_GET['dangxuat'])&&$_GET['dangxuat']==1){
            unset($_SESSION['dangnhap']);
            header('location:login.php');
        }
?>

<section id="container">
<!--header start-->
<header class="header clearfix">
<!--logo start-->
<div class="brand">
    <a href="index.html" class="logo">
        ADMIN
    </a>
    <div class="sidebar-toggle-box">
        <div class="fa fa-bars"></div>
    </div>
</div>

</header>
<!--header end-->
<!--sidebar start-->
<aside>
    <div id="sidebar" class="nav-collapse">
        <!-- sidebar menu start-->
        <div class="leftside-navigation">
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a class="active" href="index.php">
                        <i class="fa fa-dashboard"></i>
                        <span>Trang chủ</span>
                    </a>
                </li>
                
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>Danh mục</span>
                    </a>
                    <ul class="sub">
						<li><a href="themdanhmuc.php">Thêm danh mục</a></li>
						<li><a href="productlist.php">list danh mục</a></li>
                    </ul>
                </li> 
				<li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>Sản phẩm</span>
                    </a>
                    <ul class="sub">
						<li><a href="themsanpham.php">Thêm sản phẩm</a></li>
						<li><a href="sanphamlist.php">list sản phẩm</a></li>
                    </ul>
                </li> 
                <li class="sub-menu">
                    <a href="javascript:;">
                        <i class="fa fa-book"></i>
                        <span>Người dùng</span>
                    </a>
                    <ul class="sub">
						<li><a href="nguoidunglist.php">danh sách</a></li>
                    </ul>
                </li> 
                <li>
                    <a class="active" href="donhanglist.php">
                        <i class="fa fa-dashboard"></i>
                        <span>Đơn hàng</span>
                    </a>
                </li>
                <li>
                    <a href="../index.php">
                        <i class="fa fa-user"></i>
                        <span>Đăng xuất<?php
                    if(isset($_SESSION['dangnhap'])){
                            echo $_SESSION['dangnhap'];
                        }
                    ?></span>
                    </a>
                </li>
            </ul>            </div>
        <!-- sidebar menu end-->
    </div>
</aside>
<!--sidebar end-->
<!--main content start-->


</section>
<!--main content end-->