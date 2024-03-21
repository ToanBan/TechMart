<?php 
    $sql = "SELECT * FROM tbl_danhmuc";
    $result = $conn->query($sql);

?>
<?php 
    if(isset($_SESSION['dangky']) && isset($_GET['dangxuat']) == 1){
        unset($_SESSION['dangky']);
    }
?>

<ul class="nav d-flex justify-content-between flex-wrap">
    <li class="nav-item">
        <a href="index.php?mode=trangchu" class="header-third-text p-0 text-white nav-link">All Product</a>
    </li>

    <?php while($row = $result->fetch_assoc()){ ?>
    <li class="nav-item">
        <a href="index.php?mode=quanlydanhmuc&id=<?php echo $row['id_list'] ?>"
            class="header-third-text p-0 text-white nav-link"><?php echo $row['name_list']  ?></a>
    </li>
    <?php } ?>
    <li class="nav-item">
        <a href="index.php?mode=cart" class="header-third-text p-0 text-white nav-link"><i
                class="fa-solid fa-cart-shopping"></i></a>
    </li>

    <li class="nav-item">
        <?php if(isset($_SESSION['dangky'])){ ?>
            <a href="index.php?dangxuat=1" class="header-third-text p-0 text-white nav-link">Đăng Xuất</a>
        <?php } else{ ?>
            <a href="pages/login.php" class="header-third-text p-0 text-white nav-link">
            <i class="fa-solid fa-user"></i>
        </a>
        <?php } ?>
    </li>
</ul>