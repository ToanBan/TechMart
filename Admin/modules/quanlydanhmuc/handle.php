<?php 
    include("../../config/config.php");
    $name_list = $_POST['name'];
    if(isset($_POST['add_list'])){
        $stmt = $conn->prepare("INSERT INTO tbl_danhmuc (name_list) VALUES(?)");
        $stmt->bind_param("s", $name_list);
        $stmt->execute();
        header("Location:../../index.php?action=quanlydanhmucsanpham&query=add");
    }elseif(isset($_POST['update_list'])){
        if(isset($_POST['update_list'])){
            $stmt = $conn->prepare("UPDATE tbl_danhmuc SET name_list=?");
            $stmt->bind_param("s", $name_list);
            $stmt->execute();
            header("Location:../../index.php?action=quanlydanhmucsanpham&query=add");
        }
    }else{
        
       if(isset($_GET['id'])){
            $id = $_GET['id'];
            $sql_delete = "DELETE FROM tbl_danhmuc WHERE id_list = $id";
            $conn->query($sql_delete);
            header("Location:../../index.php?action=quanlydanhmucsanpham&query=add");
       }
    }

?>