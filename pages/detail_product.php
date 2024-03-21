<?php 
    $sql = "SELECT * FROM tbl_product WHERE id_product = '$_GET[id]'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
?>


<style>
.info-product {
    text-align: center;
}

.price-product {
    color: red;
}


.info_product {
    font-size: 20px;
}
</style>

<h1>Chi tiết sản phẩm</h1>
<div class="body-item">

    <div class="row">

        <div class="col-sm-5 list-product-items">
            <a href="index.php?mode=sanpham&id=<?php echo $row['id_product'] ?>"><img style="width:100%"
                    class="img-items-body" src="Admin/modules/quanlysanpham/uploads/<?php echo $row['img_product']; ?>"
                    alt="iphone"></a>
        </div>



        <div class="col-sm-7 list-product-items" style="display:flex;align-items: center;">
            <div class="info-product">
                <form action="pages/themgiohang.php?id=<?php echo $row['id_product']; ?>" method="POST">
                    <h1 class="name-product"><?php echo $row['name_product'] ?></h1>
                    <p class="price-product"><?php echo $row['price_product'] ?></p>
                    <p class="sold">
                        <?php 
                        if($row['tinhTrang']==1){
                            echo "Còn Hàng";
                        }else{
                            echo "Hết Hàng";
                        }
                    ?>
                    </p>
                    <p class="description"><?php echo $row['info_product']  ?></p>
                    <input class="btn btn-danger" type="submit" value="Đặt Hàng" name="themgiohang">
                </form>
            </div>

        </div>

    </div>
</div>