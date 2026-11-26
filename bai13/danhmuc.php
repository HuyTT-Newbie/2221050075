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
    <h1>Tài khoản</h1>
    <a class="btn-add" href="index.php?page_layout=themdanhmuc">Thêm danh mục</a>
<?php
$sql= "SELECT * FROM `the_loai`";
$result = mysqli_query($conn,$sql);

?>
<table>
    <tr>
        <th>id</th>
        <th>Tên thể loại</th>
        
    </tr>
    <?php
       while( $row =mysqli_fetch_assoc($result)){
    ?>
    <tr>
        <td><?php echo $row['id']?></td>
        <td><?php echo $row['ten_the_loai']?></td>
        <td>
            <a class="capNhat" href="index.php?page_layout=capnhatdanhmuc&id=<?php echo $row['id']?>">Cập nhật</a>
            <a class="xoa" href="index.php?page_layout=xoadanhmuc&id=<?php echo $row['id']?>">Xóa</a>
        </td>
    </tr>
    <?php

       };
    
    ?>
</table>
    </body>
</html>