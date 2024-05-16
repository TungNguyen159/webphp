<?php
include 'header.php';
include 'leftside.php';
include 'footer.php';
include 'config/config.php';

?>
<?php

// lay bien
if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    $tendanhmuc = $_POST['tendanhmuc'];
        //thêm dữ liệu
        $sql = "INSERT INTO danhmuc (tendanhmuc) VALUES ('$tendanhmuc')";
        mysqli_query($conn, $sql);
}


?>

<style>
    .panel-body{
        padding-top: 150px;
    }
</style>
                        <div class="panel-body">

                            <div class="position-center">
                                <form role="form" action="" method="POST">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên Danh mục</label>
                                    <input style="width:300px" type="text" name="tendanhmuc">
                                    <button type="submit" class="btn btn-info">Thêm</button>
                                </div>
                               
                                </form>
                            </div>

                        </div>

         
