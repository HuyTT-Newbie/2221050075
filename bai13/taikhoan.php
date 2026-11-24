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
    <a class="btn-add" href="index.php?page_layout=themtaikhoan">Thêm tài khoản</a>
<?php
$sql= "SELECT * FROM `nguoi_dung`";
$result = mysqli_query($conn,$sql);

?>
<table>
    <tr>
        <th>id</th>
        <th>Tên đăng nhập</th>
        <th>email</th>
        <th>Họ Tên</th>
        <th>Ngày sinh</th>
        <th>Số điện thoại</th>
        <th>Giới tính</th>
    </tr>
    <?php
       while( $row =mysqli_fetch_assoc($result)){
    ?>
    <tr>
        <td><?php echo $row['id']?></td>
        <td><?php echo $row['ten_dang_nhap']?></td>
        <td><?php echo $row['email']?></td>
        <td><?php echo $row['ho_ten']?></td>
        <td><?php echo $row['ngay_sinh']?></td>
        <td><?php echo $row['so_dien_thoai']?></td>
        <th><?php echo $row['gioi_tinh'] ==true?"Nam":"Nữ"?></th>
        <td>
            <a class="capNhat" href="index.php?page_layout=capnhattaikhoan&id=<?php echo $row['id']?>">Cập nhật</a>
            <a class="xoa" href="index.php?page_layout=xoataikhoan&id=<?php echo $row['id']?>">Xóa</a>
        </td>
    </tr>
    <?php

       };
    
    ?>
</table>
    </body>
</html>