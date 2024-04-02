<?php 
  


    if(isset($_GET['id']) && is_numeric($_GET['id'])){
        $id = $_GET['id'];
        // Kiểm tra kết nối đến cơ sở dữ liệu đã được thiết lập hay chưa
        $sql = "SELECT * FROM tbl_product WHERE id_product = '$id' LIMIT 1";
        $result = $conn->query($sql);
        $row = $result->fetch_assoc();
    } else {
        // Nếu id không hợp lệ, có thể xử lý thông báo lỗi ở đây
        echo "ID không hợp lệ";
        exit; // Thoát khỏi mã để ngăn chặn việc thực hiện mã dưới đây nếu không có id hợp lệ
    }
?>

<h3 style="margin-bottom:16px">Sửa Sản Phẩm</h3>

<form action="modules/quanlysanpham/handle.php?id=<?php echo $id?>" method="POST" enctype="multipart/form-data">

    <div>
        <label for="name_product">Tên Sản Phẩm</label>
        <input type="text" placeholder="Tên Sản Phẩm" name="name_product" id="name_product"
            value="<?php echo $row['name_product'] ?>">
    </div>

    <div>
        <label for="price">Giá Sản Phẩm</label>
        <input type="text" placeholder="Tên Sản Phẩm" name="price" id="price"
            value="<?php echo $row['price_product'] ?>">
    </div>

    <div>
        <label for="avatar">Chọn Hình Ảnh</label>
        <input type="file" id="avatar" name="avatar">
        <img src="modules/quanlysanpham/uploads/<?php echo $row['img_product'] ?>" alt="hình ảnh" style="width:50px">
    </div>

    <div>
        <label for="sl">Số lượng sản phẩm</label>
        <input type="text" id="sl" name="sl" value="<?php echo $row['soLuong'] ?>">
    </div>

    <div>
        <label for="sold"></label>
        <select name="sold" id="sold">
            <option value="1" <?php if($row['tinhTrang'] == 1){echo "selected";} ?>>Enable</option>
            <option value="0" <?php if($row['tinhTrang'] == 0){echo "selected";} ?>>Disabled</option>
        </select>
    </div>

    <div>
        <select name="danhmuc" id="">
            <?php 
                $sql = "SELECT * FROM tbl_danhmuc";
                $result = $conn->query($sql);
                while($row_danhmuc = $result->fetch_assoc()){ ?>
            <option value="<?php echo $row_danhmuc['id_list']; ?>" <?php if($row_danhmuc['id_list'] == $row['id_danhmuc'])
                            echo "selected" ?>>
                <?php echo $row_danhmuc['name_list']; ?>

            </option>
            <?php } ?>
        </select>
    </div>

    <div>
        <label for="description">Thông tin sản phẩm</label>
        <textarea name="description" id="description" cols="30" rows="10"><?php echo $row['info_product']; ?></textarea>

    </div>

    <div>
        <input type="submit" name="update_product" value="Sửa Sản Phẩm">
    </div>
</form>