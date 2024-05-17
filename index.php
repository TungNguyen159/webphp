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
        session_start();
	include("admin/config/config.php");
        include("./page/header.php");   
        include("./page/main.php");
     //   include("./page/sidebar/sidebar.php");
        include("./page/showproduct.php");
        include("./page/noidung/productall.php");
        include("./page/footter.php");

        ?>

        
</body>
    <script src="https://kit.fontawesome.com/5c289cb566.js" crossorigin="anonymous"></script>
	<script src="./js/slide.js"></script>
</html>
