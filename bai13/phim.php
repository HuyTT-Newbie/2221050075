<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            width: 100%;
        }
        tr,th,td{
            border:1px solid black;
        }
        .btn-add{
            background-color: green;
        }
        .capNhat{
            background-color:blue;
        }
        .xoa{
            background-color:blue;
        }
    </style>
</head>
<body>
    <h1>Phim</h1>
    <a class="btn-add" href="index.php?page_layout=themphim">Thêm phim</a>
<?php
$sql= "SELECT * FROM `phim`";
$result = mysqli_query($conn,$sql);

?>
<table>
    <tr>
        <th>id</th>
        <th>Tên phim</th>
        <th>Quốc gia</th>
        <th>Đạo diễn id</th>
        <th>Năm</th>
        <th>Độ tuổi</th>
        <th>Mô tả</th>
    </tr>
    <?php
       while( $row =mysqli_fetch_assoc($result)){
    ?>
    <tr>
        <td><?php echo $row['id']?></td>
        <td><?php echo $row['ten_phim']?></td>
        <td><?php echo $row['quoc_gia']?></td>
        <td><?php echo $row['dao_dien_id']?></td>
        <td><?php echo $row['nam']?></td>
        <td><?php echo $row['do_tuoi']?></td>
        <th><?php echo $row['mo_ta']?></th>
        <td>
            <a class="capNhat" href="index.php?page_layout=capnhatphim&id=<?php echo $row['id']?>">Cập nhật</a>
            <a class="xoa" href="index.php?page_layout=xoaphim&id=<?php echo $row['id']?>">Xóa</a>
        </td>
    </tr>
    <?php

       };
    
    ?>
</table>
    </body>
</html>