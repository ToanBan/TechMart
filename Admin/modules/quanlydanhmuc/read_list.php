<?php 
    $sql = "SELECT * FROM tbl_danhmuc";
    $result = $conn->query($sql);
?>

<table border="1" style="width:100%">
    <tr>
        <th>Id Product</th>
        <th>Name Product</th>
    </tr>

    <?php if($result->num_rows > 0) { 
        while($row = $result->fetch_assoc()){ ?>
        <tr>
            <td><?php echo $row['id_list']; ?></td>
            <td><?php echo $row['name_list']; ?></td>
            <td><a href="modules/quanlydanhmuc/handle.php?id=<?php echo $row['id_list'] ?>">Xoá</a></td>
            <td><a href="?action=quanlydanhmucsanpham&query=sua&id=<?php echo $row['id_list'] ?>">Sua</a></td>
        </tr>
    <?php } }?>
</table>