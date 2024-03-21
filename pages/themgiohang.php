<?php 
    session_start();
    include("../Admin/config/config.php");

    //Trừ Số Lượng
    if(isset($_GET['tru']) && !empty($_GET['tru'])) {
        $product_id = $_GET['tru'];
        if(isset($_SESSION['giohang'])) {
            $sql = "SELECT * FROM tbl_product WHERE id_product = $product_id";
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();
            foreach($_SESSION['giohang'] as &$item) {
                if($item['id_product'] == $product_id) {
                    $item['soLuong'] -= 1;// Thay 1 bằng số lượng muốn trừ đi
                    $item['price_product'] -= $row['price_product'];
                }
            }
        }      
        header("Location:../index.php?mode=cart");
        exit;
    }


    //Cộng số lương
    if(isset($_GET['cong'])){
        $id = $_GET['cong'];
        if(isset($_SESSION['giohang'])){
            $sql = "SELECT * FROM tbl_product WHERE id_product = $id";
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();
            foreach($_SESSION['giohang'] as &$item){
                if($item['id_product'] == $id){
                    $item['soLuong'] +=1;
                    $item['price_product'] += $row['price_product'];
                }
            }
        }
        header("Location:../index.php?mode=cart");
    }


    //Delete id product
    if(isset($_GET['xoasanpham'])){
        $id = $_GET['xoasanpham'];
       foreach($_SESSION['giohang'] as $item){
            if($item['id_product'] != $id){
                $product_new[] = array(
                    'id_product'=>$item['id_product'],
                    'name_product'=>$item['name_product'],
                    'soLuong'=>$item['soLuong'],
                    'img_product'=>$item['img_product'],
                    'price_product'=>$item['price_product'],
                );
            }
       }
       $_SESSION['giohang'] = $product_new;
       header("Location:../index.php?mode=cart");
    }


    //Delete All
    if(isset($_GET['query']) == "xoatatca"){
        unset($_SESSION['giohang']);
        header("Location:../index.php?mode=cart");
    }

    // Add_cart
    if(isset($_POST['themgiohang'])){
        $id = $_GET['id'];
        $sql = "SELECT * FROM tbl_product WHERE id_product = '$id'";
        $result = $conn->query($sql);
        if($result->num_rows > 0){
            $row = $result->fetch_assoc();
            $cart_item = array(
                "id_product" => $row['id_product'],
                "name_product" => $row['name_product'],
                "price_product" => $row['price_product'],
                "soLuong" => 1,
                "img_product" => $row['img_product'],
            );

            if(!isset($_SESSION['giohang'])){
                $_SESSION['giohang'] = array();
            }

            $found = false;
            foreach($_SESSION['giohang'] as &$item){
                if($item['id_product'] == $id){
                    $item['soLuong'] += 1;
                    $item['price_product'] += $cart_item['price_product'];
                    $found = true;
                    break;
                }
            }

            if(!$found){
                $_SESSION['giohang'][] = $cart_item;
            }
        }
        header("Location:../index.php?mode=cart");
    }
?>