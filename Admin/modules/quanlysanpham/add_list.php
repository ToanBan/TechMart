

<h3 style="margin-bottom:16px">Thêm Sản Phẩm</h3>

<form action="modules/quanlysanpham/handle.php" method="POST" enctype="multipart/form-data">

    <div>
        <label for="name_product">Tên Sản Phẩm</label>
        <input type="text" placeholder="Tên Sản Phẩm" name="name_product" id="name_product">
    </div>

    <div>
        <label for="price">Giá Sản Phẩm</label>
        <input type="text" placeholder="Tên Sản Phẩm" name="price" id="price">
    </div>

    <div>
        <label for="avatar">Chọn Hình Ảnh</label>
        <input type="file" id="avatar" name="avatar">
    </div>

    <div>
        <label for="sl">Số lượng sản phẩm</label>
        <input type="text" id="sl" name="sl">
    </div>

    <div>
        <label for="sold"></label>
        <select name="sold" id="sold">
            <option value="">Select</option>
            <option value="1">Enable</option>
            <option value="0">Disabled</option>
        </select>
    </div>

    <div>
        <td>
            <select name="danhmuc" id="">
                <?php 
                    $sql = "SELECT * FROM tbl_danhmuc";
                    $result = $conn->query($sql);
                    while($row = $result->fetch_assoc()){
                        echo '<option value="'.$row['id_list'].'">'.$row['name_list'].'</option>';
                    }
                ?>
            </select>
        </td>
    </div>

    <div>
        <label for="description">Thông tin sản phẩm</label>
        <textarea name="description" id="description" cols="30" rows="10"></textarea>
    </div>

    <div>
        <input type="submit" name="add_product" value="Thêm Sản Phẩm">
    </div>
</form>