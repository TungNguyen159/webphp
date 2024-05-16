<?php
  $tensanpham=$_POST['tensanpham'];
  $masanpham=$_POST['masanpham'];
  $giasanpham=$_POST['giasanpham'];
  $cauhinh=$_POST['cauhinh'];
  $soluong=$_POST['soluong'];
   //xử lý hình anh
  $file=$_FILES['hinhanh'];
  $hinhanh=$file['name'];
  $hinhanh_tmp=$_FILES['hinhanh']['tmp_name'];
  $hinhanhgio=time().'_'.$hinhanh;
  $danhmuc=$_POST['danhmuc'];
  include './config/config.php';
if(isset($_POST['suasanpham'])){
    if($hinhanh!=''){
        move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
        $sql_sua="UPDATE sanpham SET tensanpham='$tensanpham',masanpham='$masanpham',
        giasanpham='$giasanpham',cauhinh='$cauhinh',soluong='$soluong',hinhanh='$hinhanh',
        iddanhmuc='$danhmuc' WHERE idsanpham='$_GET[idsanpham]'";
        
        $sql="SELECT*FROM sanpham WHERE idsanpham='$_GET[idsanpham]'";
        $query=mysqli_query($conn,$sql);
        while($row=mysqli_fetch_array($query)){
            unlink('uploads/'.$row['hinhanh']);
        }
    
    }else{
        $sql_sua="UPDATE sanpham SET tensanpham='$tensanpham',masanpham='$masanpham',
        giasanpham='$giasanpham',cauhinh='$cauhinh',soluong='$soluong',
        iddanhmuc='".$danhmuc."' WHERE idsanpham='$_GET[idsanpham]'";
    }  
    mysqli_query($conn,$sql_sua);
    header('Location:./sanphamlist.php');
}
?>