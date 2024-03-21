<?php
   if($_GET['action'] == 'dangxuat'){
        unset($_SESSION['dangnhap']);
        header("Location:login.php");
    }
?>


<ul class="side-bar-list">
    <li class="side-bar-item"><a href="index.php?action=quanlydanhmucsanpham&query=add" class="side-bar-link">Quản Lý
            Danh
            Mục</a></li>
    <li class="side-bar-item"><a href="index.php?action=quanlysanpham&query=add" class="side-bar-link">Quản Lý Sản
            Phẩm</a></li>
    <li class="side-bar-item"><a href="index.php?action=dangxuat" class="side-bar-link">Đăng Xuất</a></li>
</ul>