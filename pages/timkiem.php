<?php 
    if(isset($_POST['timkiem'])){
        $keyword = $_POST['tukhoa'];
        $sql = "SELECT * FROM tbl_product WHERE name_product LIKE '%$keyword%'";
        $result = $conn->query($sql);
    }
?>

<div class="row">
    <?php while($row = $result->fetch_assoc()) { ?>
    <div class="col-sm-3 list-product-items">
        <a href="index.php?mode=sanpham&id=<?php echo $row['id_product'] ?>"><img style="width:100%"
                class="img-items-body" src="Admin/modules/quanlysanpham/uploads/<?php echo $row['img_product'] ?>"
                alt="iphone"></a>
        <h3 class="text-center"><?php echo $row['name_product'] ?></h3>
        <p class="text-danger text-center"><?php echo $row['price_product'] ?></p>
    </div>
    <?php } ?>
</div>