<?php 
    include("config/config.php");
    session_start();
    if(isset($_POST['dangnhap'])){
        $username = $_POST['taikhoan'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM tbl_admin WHERE username = '$username' AND password = '$password'";
        $result = $conn->query($sql);
        if($result->num_rows > 0){
            $_SESSION['dangnhap'] = $username;
            header("Location:index.php?action");
        }else{
            echo "Đăng Nhập Thất Bại";
        }
    }
?>




<style>
.wrapper {
    text-align: center;
}

input {
    padding: 8px 16px;
    margin-bottom: 16px;
}
</style>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="wrapper">
        <div class="header-login">
            <h2>Login Form</h2>
        </div>

        <div class="body">
            <form action="" method="POST">
                <div>
                    <input type="text" placeholder="Tên Đăng Nhập" name="taikhoan">
                </div>

                <div>
                    <input type="password" placeholder="Mật Khẩu" name="password">
                </div>

                <div>
                    <input type="submit" value="Đăng Nhập" name="dangnhap">
                </div>
            </form>
        </div>
    </div>
</body>

</html>