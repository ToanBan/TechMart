<?php 
    if(isset($_SESSION['dangky'])){
        echo "XIn Chao";
    }
?>

<table class="table table-dark">
    <tr>
        <th>Mã Sản Phẩm</th>
        <th>Tên Sản Phẩm</th>
        <th>Số Lượng Sản Phẩm</th>
        <th>Hình Ảnh Sản Phẩm</th>
        <th>Giá Sản Phẩm</th>
        <th>Thành Tiền</th>
    </tr>
    <?php if(isset($_SESSION['giohang'])){
    $tong = 0;
    $thanhtien = 0;
    foreach($_SESSION['giohang'] as $item){
        $tong += $item['price_product']; 
        $thanhtien = $item['soLuong'] * $item['price_product'];   
    ?>
    <tr>
        <td><?php echo $item['id_product'] ?></td>
        <td><?php echo $item['name_product'] ?></td>
        <td>
            <a href="pages/themgiohang.php?tru=<?php echo $item['id_product']; ?>">Trừ</a>
            <?php echo $item['soLuong'] ?>
            <a href="pages/themgiohang.php?cong=<?php echo $item['id_product']; ?>">Cộng</a>
        </td>
        <td><img style="width:100px" src="Admin/modules/quanlysanpham/uploads/<?php echo $item['img_product'] ?>"
                alt="đây là hình ảnh"></td>
        <td><?php echo $item['price_product'] ?></td>
        <td><?php echo $thanhtien ?></td>
        <td><a href="pages/themgiohang.php?xoasanpham=<?php echo $item['id_product']; ?>">Xoá</a></td>
    </tr>

    <?php } 
    
    }else{?>
    <tr>
        <td colspan="6">Hiên tại giỏ hàng trống</td>
    </tr>
    <?php } ?>

    <tr>
        <td colspan="6">Tổng Tiền: <?php if(isset($tong)){echo $tong;} ?></td>
    </tr>
    <tr>
        <td><a href="pages/themgiohang.php?query=xoatatca">Xoá tất cả</a></td>
    </tr>
    <tr>
        <td>
            <?php if(isset($_SESSION['dangky'])) { ?>
            <a href="#">Đăng Hàng</a>
            <?php } else { ?>
            <a href="pages/dangky.php">Đăng Ký</a>
            <?php } ?>
        </td>
    </tr>
</table>