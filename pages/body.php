<div class="body-section">
    <div class="body-part">
        <div class="row body-background-img m-0">
            <div class="col background-img2 p-0">
                <div class="slogan-background">
                    <h2 class="heading-background text-white p-0">Awaken the power of technology.</h2>
                    <p class="para-background text-white p-0">The world of technology awaits you - at [Your Website
                        Name]</p>
                    <p class="text-white p-0">we bring you the best shopping
                        experience for both phones and laptops.</p>
                </div>
            </div>
        </div>

        <div class="row body-content-info" style="width: 100%;">

            <div class="col-sm-3 body-content-info-row">
                <i class="body-content-icon fa-solid fa-truck-fast"></i>
                <div class="icon-box-content">
                    <h6 class="icon-box-heading p-0">Free shipping</h6>
                    <p class="icon-box-des p-0">When you spend $80 or more</p>
                </div>
            </div>

            <div class="col-sm-3 body-content-info-row">
                <i class="body-content-icon fa-solid fa-message"></i>
                <div class="icon-box-content">
                    <h6 class="icon-box-heading p-0">We are available 24/7</h6>
                    <p class="icon-box-des p-0">Need help? contact us anytime</p>
                </div>
            </div>
            <div class="col-sm-3 body-content-info-row">
                <i class="body-content-icon fa-solid fa-arrows-rotate"></i>
                <div class="icon-box-content">
                    <h6 class="icon-box-heading p-0">Satisfied or return</h6>
                    <p class="icon-box-des p-0">Easy 30-day return policy</p>
                </div>
            </div>
            <div class="col-sm-3 body-content-info-row">
                <i class="body-content-icon fa-brands fa-cc-visa"></i>
                <div class="icon-box-content">
                    <h6 class="icon-box-heading p-0">100% secure payments</h6>
                    <p class="icon-box-des p-0">Visa, Mastercard, Stripe, PayPa</p>
                </div>
            </div>
        </div>
    </div>

    <?php 
        if(isset($_GET['mode'])){
            $temp = $_GET['mode'];
        }else{
            $temp = '';
        }

        if($temp == "quanlydanhmuc"){
            include("pages/main-product.php");
        }elseif($temp == "sanpham"){
            include("pages/detail_product.php");   
        }elseif($temp == "cart"){
            include("pages/giohang.php");
        }elseif($temp == "timkiem"){
            include("pages/timkiem.php");
        }
        
        else{
            include("pages/trangchu.php");
        }
    ?>
</div>