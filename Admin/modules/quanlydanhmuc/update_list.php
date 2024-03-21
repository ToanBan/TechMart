<?php 
    $sql_update = "SELECT * FROM tbl_danhmuc WHERE id_list = '$_GET[id]' LIMIT 1";
    $result = $conn->query($sql_update);
    $row = $result->fetch_assoc();

?>

<h3 style="margin-bottom:16px">Sửa Sản Phẩm</h3>

<form action="modules/quanlydanhmuc/handle.php" method="POST">
    <div>
        <label for="name">Tên Sản Phẩm</label>
        <input type="text" placeholder="Tên Sản Phẩm" name="name" id="name" value="<?php echo $row['name_list'] ?>">
    </div>

    <div>
        <input type="submit" value="Sửa Sản Phẩm" name="update_list">
    </div>
</form>