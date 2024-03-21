<?php 
    $sql = "SELECT * FROM tbl_product, tbl_danhmuc WHERE tbl_product.id_danhmuc = tbl_danhmuc.id_list AND 
    tbl_product.id_danhmuc = '$_GET[id]'";
    $result = $conn->query($sql);
    $row_title = $result->fetch_assoc();
?>
<div class="body-section-list" style="margin-top: 48px;">
        <div class="body-item">
            <div class="row">
                <div class="col-md-6">
                    <div class="products-info d-flex">
                        <h2 class="products-info-heading"><?php echo $row_title['name_list'] ?></h2>
                        <button class="btn btn-icon-product">See more</button>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php while($row = $result->fetch_assoc()){?>
                <div class="col-sm-3 list-product-items">
                    <a href="index.php?mode=sanpham&id=<?php echo $row['id_product'] ?>"><img style="width:100%" class="img-items-body"
                            src="Admin/modules/quanlysanpham/uploads/<?php echo $row['img_product']; ?>" alt="iphone"></a>
                </div>
                <?php } ?>
            </div>
        </div>
</div>