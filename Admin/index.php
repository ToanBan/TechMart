<?php 
    session_start();
    if(!isset($_SESSION['dangnhap'])){
        header("Location:login.php");
    }

?>


<style>
* {
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}


.header {
    background-color: black;
    height: 40px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.login-out{
    
}

.login-out-text{
    color:white;
}

.body{
    display:flex;
    height:100%;
}


.side-bar{
    width: 20%;
    background-color: aqua;
}


.main-content{
    width:80%;
}
ul.side-bar-list {
    text-align: center;
    margin-top: 50%;
}

li.side-bar-item {
    margin-bottom: 32px;
}

a.side-bar-link {
    text-decoration: none;
    font-size: 20px;
    text-transform: uppercase;
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
    <div class="wrap">
        <?php include("config/config.php") ?>
        <?php include("modules/header.php") ?>
        <?php include("modules/body.php") ?>
    </div>
</body>

</html>