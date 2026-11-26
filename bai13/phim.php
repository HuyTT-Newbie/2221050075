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
$sql = "SELECT 
            p.*, 
            dd.ho_ten, 
            tl.ten_the_loai
        FROM phim p
        LEFT JOIN dao_dien dd ON p.dao_dien_id = dd.id
        LEFT JOIN phim_the_loai ptl ON p.id = ptl.phim_id
        LEFT JOIN the_loai tl ON tl.id = ptl.the_loai_id";
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
        <th>Diễn viên</th>
        <th>Tên thể loại</th>
        <th>Mô tả</th>
        <th>Trailer</th>
        <th>Banner</th>

    </tr>
    <?php
       while( $row =mysqli_fetch_assoc($result)){
    ?>
    <tr>
        <td><?php echo $row['id']?></td>
        <td><?php echo $row['ten_phim']?></td>
        <td><?php echo $row['quoc_gia']?></td>
        <td><?php echo $row['ho_ten']?></td>
        <td><?php echo $row['nam']?></td>
        <td><?php echo $row['do_tuoi']?></td>
        <td><?php echo $row['dien_vien']?></td>
        <td><?php echo $row['ten_the_loai']?></td>
        <th><?php echo $row['mo_ta']?></th>
        <th><?php echo $row['trailer']?></th>
        <th><?php echo $row['banner']?></th>
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