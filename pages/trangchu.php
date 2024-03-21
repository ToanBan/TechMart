<?php 
    $sql = "SELECT * FROM tbl_product, tbl_danhmuc  WHERE tbl_product.id_danhmuc = tbl_danhmuc.id_list";
    $result = $conn->query($sql);
?>

<h3>San Pham Moi nhat</h3>
<div class="body-section-list" style="margin-top: 48px;">
        <div class="body-item">
            <div class="row">
                <div class="col-md-6">
                    <div class="products-info d-flex">
                        <h2 class="products-info-heading">New products</h2>
                        <button class="btn btn-icon-product">See more</button>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php while($row = $result->fetch_assoc()) { ?>
                <div class="col-sm-3 list-product-items">
                    <a href="index.php?mode=sanpham&id=<?php echo $row['id_product'] ?>"><img  style="width:100%" class="img-items-body"
                            src="Admin/modules/quanlysanpham/uploads/<?php echo $row['img_product'] ?>" alt="iphone"></a>
                </div>
                <?php } ?>
            </div>
        </div>

        <div class="body-item-deal">
            <div class="row body-item-deal-row">
                <div class="col col-sm">
                    <img src="https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100/https://cdn.tgdd.vn/2024/01/banner/1200x100-1200x100-5.jpg"
                        alt="bannerSale" style="width: 100%; height: auto;">
                </div>
            </div>
        </div>
</div>