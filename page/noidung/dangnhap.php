<?php
	if (isset($_POST['dangnhap'])){
		$taikhoan= $_POST['taikhoan'];
		$matkhau = md5($_POST['matkhau']);
        $sql = "SELECT * FROM dangky,admin WHERE  dangky.taikhoan='$taikhoan' AND dangky.matkhau='$matkhau' LIMIT 1";
		$row = mysqli_query($conn,$sql); 
        $count = mysqli_num_rows($row);
	 
        if($count>0){
                    $row_data = mysqli_fetch_array($row);
                    $_SESSION['dangky']= $row_data['taikhoan'];
                    $_SESSION['email'] = $row_data['email'];
                    $_SESSION['idkhachhang'] = $row_data['idkhachhang'];
                    header("Location:index.php");
        }elseif($taikhoan=='admin'){
            header("Location:admin/login.php");
        }else{
                echo '<p style="color:red">Mật khẩu hoặc Email sai ,vui lòng nhập lại.</p>';
            }
        }
	
    

?>
<section id="form"><!--form-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 col-sm-offset-1">
                        <div class="login-form"><!--login form-->
                            <h2>Đăng nhập</h2>
                            <form action="" method="POST">
                                <input type="text" placeholder="Tên tài khoản" name="taikhoan" />
                                <input type="pass" placeholder="Mật khẩu" name="matkhau" />
                                <span>
                                    <input type="checkbox" class="checkbox"> 
                                    Giữ đăng nhập
                                </span>
                                <button type="submit" class="btn btn-default" name="dangnhap">Đăng nhập</button>
                            </form>
                            <h4>Chưa có tài khoản ?<a href="index.php?quanly=dangky"> Đăng kí</a></h4>
                        </div><!--/login form-->
                    </div>
                </div>
            </div>
        </section><!--/form-->