<?php 
     $sql_select = "SELECT * FROM tbl_product, tbl_danhmuc WHERE tbl_product.id_danhmuc = tbl_danhmuc.id_list";
     $result = $conn->query($sql_select);
?>

<table border="1" style="width:100%">
    <tr>
        <th>Id Product</th>
        <th>Name Product</th>
        <th>Price Product</th>
        <th>Hình Ảnh</th>
        <th>Số Lượng</th>
        <th>Tình Trạng</th>
        <th>Danh Muc San Pham</th>
        <th>Mô Tả Sản Phẩm</th>
    </tr>

    <?php if($result->num_rows > 0) { 
        while($row = $result->fetch_assoc()){ ?>
        <tr>
            <td><?php echo $row['id_product']; ?></td>
            <td><?php echo $row['name_product']; ?></td>
            <td><?php echo $row['price_product']; ?></td>
            <td><img style="width:100px" src="modules/quanlysanpham/uploads/<?php echo $row['img_product']; ?>" alt="Hình Ảnh"></td>
            <td><?php echo $row['soLuong']; ?></td>
            <td>
                <?php  
                    if($row['tinhTrang'] == 1){
                        echo "Còn Hàng";
                    }else{
                        echo "Hết Hàng";
                    }

                ?>

            </td>
            <td><?php echo $row['name_list'] ?></td>
            <td><?php echo $row['info_product']; ?></td>
            <td><a href="modules/quanlysanpham/handle.php?id=<?php echo $row['id_product'] ?>">Xoá</a></td>
            <td><a href="?action=quanlysanpham&query=sua&id=<?php echo $row['id_product'] ?>">Sua</a></td>
        </tr>
    <?php } }?>
</table>