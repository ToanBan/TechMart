<div class="body">
    <div class="side-bar">
        <?php include("menu.php") ?>
    </div>

    <div class="main-content">
        <?php 
           if(isset($_GET['action'])  && isset($_GET['query'])){
                $temp = $_GET['action'];
                $query = $_GET['query'];
           }else{
                $temp = "";
                $query = "";
           }
           
           if($temp == "quanlydanhmucsanpham" && $query == "add"){
                include("modules/quanlydanhmuc/add_list.php");
                include("modules/quanlydanhmuc/read_list.php");
           }
           
           elseif($temp == "quanlydanhmucsanpham" && $query == "sua"){
                include("modules/quanlydanhmuc/update_list.php");
           }elseif($temp == "quanlysanpham" && $query == "add"){
               include("modules/quanlysanpham/add_list.php");
               include("modules/quanlysanpham/read_list.php");
           }elseif($temp == "quanlysanpham" && $query == "sua"){
               include("modules/quanlysanpham/update_list.php");
           }
           else{
                include("index-body.php");
           }

        
        ?>
    </div>
</div>