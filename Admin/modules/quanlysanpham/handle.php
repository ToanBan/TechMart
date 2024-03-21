<?php 
include("../../config/config.php");
$name_product = htmlspecialchars($_POST['name_product']);
$price = floatval($_POST['price']);
$soLuong = intval($_POST['sl']);
$tinhTrang = $_POST['sold'];
$info_product = htmlspecialchars($_POST['description']);
$danhmuc = $_POST['danhmuc'];
$hinhanh = $_FILES['avatar']['name'];
$hinhanh_tmp = $_FILES['avatar']['tmp_name'];
$hinhanh = time()."_". $hinhanh;
if(isset($_POST['add_product'])){
    $sql = "INSERT INTO tbl_product(name_product, price_product, img_product, soLuong, tinhTrang, info_product, id_danhmuc)
    VALUES('$name_product', '$price', '$hinhanh', '$soLuong', '$tinhTrang', '$info_product', '$danhmuc')";
     $conn->query($sql);
     move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
     header("Location:../../index.php?action=quanlysanpham&query=add");
    
} elseif(isset($_POST['update_product'])){    
        $stmt = $conn->prepare("UPDATE tbl_product SET name_product = ?, price_product=?, img_product=?,
        soLuong=?, tinhTrang=?, info_product=?, id_danhmuc=?");
        $stmt->bind_param("sisiisi", $name_product, $price, $hinhanh, $soLuong, $tinhTrang, $info_product, $danhmuc);
        $stmt->execute();
        move_uploaded_file($hinhanh_tmp,'uploads/'.$hinhanh);
        header("Location:../../index.php?action=quanlysanpham&query=add");
} else {
    $id = $_GET['id'];
    $select_img = "SELECT img_product FROM tbl_product WHERE id_product = '$id'";
    $result = $conn->query($select_img);
    $row = $result->fetch_assoc();
    $img = $row['img_product'];
    $sql_delete = "DELETE FROM tbl_product WHERE id_product = '$id'";
    $conn->query($sql_delete);
    if (file_exists('uploads/' . $img)) {
        unlink('uploads/' . $img);
    }
    header("Location:../../index.php?action=quanlysanpham&query=add");
}
?>
