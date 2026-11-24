<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        ul{
            list-style: none;
            display: flex;
            gap:10px;
            background-color: blue;
            padding: 20px;
        }
        li{
            
        }
        a{
            text-decoration:none;
            color:white;

        }
    </style>
</head>
<body>
    <h1>Trang chủ</h1>
<?php
session_start();
if(!isset($_SESSION['dangnhap']) || 
$_SESSION['dangnhap'] != "thanhcong") {
    header("Location:dangnhap.php");
}

?>
<header>
    <nav>
        <ul>
            <li><a href="">Trang chủ</a></li>
            <li><a href="">Tài khoản</a></li>
            <li><a href="">Danh mục</a></li>
            <li><a href="">Phim</a></li>
      
        </ul>
    </nav>
</header>
</body>
</html>