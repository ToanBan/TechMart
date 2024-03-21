<?php 
    session_start();
    include("../Admin/config/config.php");
    if(isset($_POST['dangky'])){
        $username = $_POST['taikhoan'];
        $password = $_POST['password'];
        $sql = "INSERT INTO tbl_dangky(username, password) VALUES('$username', '$password')";
        $result = $conn->query($sql);
        $_SESSION['dangky'] = $username;
        header("Location:../index.php?mode=cart");
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
            <h2>Đăng Ký Tài Khoản</h2>
        </div>

        <div class="body">
            <form action="" method="POST">
                <div>
                    <input type="text" placeholder="Tên Đăng Ký" name="taikhoan">
                </div>

                <div>
                    <input type="password" placeholder="Mật Khẩu" name="password">
                </div>

                <div>
                    <input type="submit" value="Đăng Ký" name="dangky">
                </div>
            </form>
        </div>
    </div>
</body>

</html>