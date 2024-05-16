<?php
	if(isset($_POST['dangky'])) {
		$tenkhachhang = $_POST['hoten'];
		$taikhoan= $_POST['taikhoan'];
        $matkhau = md5($_POST['matkhau']);
        $rematkhau=  md5($_POST['rematkhau']);
		$email = $_POST['email'];
		$dienthoai = $_POST['sodienthoai'];
		if (!$tenkhachhang || !$taikhoan || !$matkhau || !$rematkhau || !$email || !$dienthoai )
		{
			echo "Vui lòng nhập đầy đủ thông tin.";
			
			
		}elseif($matkhau!=$rematkhau){
			echo "mat khau chua trung"; 

		}
		else{
	
			
			$sql_dangky = "INSERT INTO dangky(hoten,taikhoan,matkhau,sodienthoai,email) VALUES('$tenkhachhang','$taikhoan','$matkhau','$dienthoai','$email')";
			$query_dangky=mysqli_query($conn,$sql_dangky);
			if($query_dangky){
				echo '<p style="color:green">Bạn đã đăng ký thành công</p>';
				$_SESSION['dangky'] = $taikhoan;
				$_SESSION['email'] = $email;
				
				$_SESSION['idkhachhang'] = mysqli_insert_id($conn);
				}
				header("location:index.php");
			}
		}
			


		
	
	
?>    
<section id="form"><!--form-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 col-sm-offset-1">
                        <div class="signup-form"><!--login form-->
                            <h2>Đăng kí thông tin</h2>
                            <form action="#" method="POST">
                                <input type="text" placeholder="Họ và tên" name="hoten" />
                                <input type="text" placeholder="Tên tài khoản" name="taikhoan" />
                                <input type="email" placeholder="Email" name="email"/>
                                <input type="SDT" placeholder="Số điện thoại" name="sodienthoai"/>
                                <input type="text" placeholder="Mật khẩu" name="matkhau"/>
                                <input type="text" placeholder="Nhập lại Mật khẩu" name="rematkhau"/>
                                <button type="submit" class="btn btn-default" name="dangky">Đăng kí</button>
                            </form>
                        </div><!--/login form-->
                    </div>
                </div>
            </div>
        </section><!--/form-->
    