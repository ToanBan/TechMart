<?php 
    $sql_update = "SELECT * FROM tbl_product WHERE id_product = '$_GET[id]' LIMIT 1";
    $result = $conn->query($sql_update);
    $row = $result->fetch_assoc();

?>

<h3 style="margin-bottom:16px">Sửa Sản Phẩm</h3>

<form action="modules/quanlysanpham/handle.php" method="POST" enctype="multipart/form-data">

    <div>
        <label for="name_product">Tên Sản Phẩm</label>
        <input type="text" placeholder="Tên Sản Phẩm" name="name_product" id="name_product" value="<?php echo $row['name_product'] ?>">
    </div>

    <div>
        <label for="price">Giá Sản Phẩm</label>
        <input type="text" placeholder="Tên Sản Phẩm" name="price" id="price" value="<?php echo $row['price_product'] ?>">
    </div>

    <div>
        <label for="avatar">Chọn Hình Ảnh</label>
        <input type="file" id="avatar" name="avatar">
    </div>

    <div>
        <label for="sl">Số lượng sản phẩm</label>
        <input type="text" id="sl" name="sl" value="<?php echo $row['soLuong'] ?>">
    </div>

    <div>
        <label for="sold"></label>
        <select name="sold" id="sold">
            <option value="1" <?php if($row['tinhTrang'] == 1){echo "selected";} ?> >Enable</option>
            <option value="0" <?php if($row['tinhTrang'] == 0){echo "selected";} ?>>Disabled</option>
        </select>
    </div>

    <div>
        <label for="description">Thông tin sản phẩm</label>
        <textarea name="description" id="description" cols="30" rows="10"></textarea>
    </div>

    <div>
        <input type="submit" name="update_product" value="Sửa Sản Phẩm">
    </div>
</form>