<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .khoi{
            border:1px solid black;
            border-radius: 10px;
            width: 200px;
            margin:20vh auto;
            background-color:antiquewhite;
        }
        input{
            padding:5px 0;
            margin:10px 0;
        }
        form{
            padding: 10px;
        }
        h1{
            margin:5px 0;
        }
    </style>
</head>
<body>
    <?php
    $id= $_GET['id'];
    $sql="select * from `nguoi_dung` where id ='$id'";
    $result=mysqli_query($conn,$sql);
    $nguoidung=mysqli_fetch_assoc($result);
    ?>
    <h1>Cập nhật tài khoản</h1>
    <form class="khoi" action="index.php?page_layout=capnhattaikhoan&id=<?php echo $id;?>" method="POST">
        <div>
            <p><b>Tên đăng nhập</b></p>   
            <input type="text" name="tenDangNhap" value="<?php echo $nguoidung['ten_dang_nhap'] ?>" id="" placeholder="Tên đăng nhập">
        </div>
        <div>
            <p><b>Email</b></p>   
            <input type="email" name="email" value="<?php echo $nguoidung['email'] ?>" id="" placeholder="email">
        </div>
        <div>
            <p><b>Mật khẩu</b></p>   
            <input type="password" name="matKhau" value="<?php echo $nguoidung['mat_khau'] ?>" id="" placeholder="Mật khẩu">
        </div>
        <div>
            <p><b>Họ và tên</b></p>   
            <input type="text" name="hoTen" value="<?php echo $nguoidung['ho_ten'] ?>" id="" placeholder="Họ và tên">
        </div>
        <div>
            <p><b>Ngày sinh</b></p>   
            <input type="date" name="ngaySinh" value="<?php echo $nguoidung['ngay_sinh'] ?>" id="" placeholder="Ngày sinh">
        </div>
        <div>
            <p><b>Số điện thoại</b></p>   
            <input type="text" name="soDienThoai" value="<?php echo $nguoidung['so_dien_thoai'] ?>" id="" placeholder="Số điện thoại">
        </div>
        <div>
            <p><b>Giới tính</b></p>   
            <input type="radio" name="gioiTinh" id="" value="1" <?php echo $nguoidung['gioi_tinh']?"checked":"" ?> >Nam
            <input type="radio" name="gioiTinh" id="" value="0" <?php echo $nguoidung['gioi_tinh']?"checked":"" ?> >Nữ
        </div>
        <div>
            <button>Cập nhật</button>
        </div>
        
    </form>
    <?php
    if(isset($_POST['tenDangNhap'])&&
        isset($_POST['email'])&&
        isset($_POST['matKhau'])&&
        isset($_POST['hoTen'])&&
        isset($_POST['ngaySinh'])&&
        isset($_POST['soDienThoai'])&&
        isset($_POST['gioiTinh'])
        ){
        
        $tenDangNhap=$_POST['tenDangNhap'];
        $email=$_POST['email'];
        $matKhau=$_POST['matKhau'];
        $hoTen=$_POST['hoTen'];
        $ngaySinh=$_POST['ngaySinh'];
        $soDienThoai=$_POST['soDienThoai'];
        $gioiTinh=$_POST['gioiTinh'];
        if(!empty($tenDangNhap)
            && !empty($email)
            && !empty($matKhau)
            && !empty($hoTen)
            && !empty($ngaySinh)
            && !empty($soDienThoai)
            && !empty($gioiTinh)
        ){
            $sql="UPDATE `nguoi_dung` SET `ten_dang_nhap`='$tenDangNhap',
            `mat_khau`='$matKhau',
            `email`='$email',
            `ho_ten`='$hoTen',
            `ngay_sinh`='$ngaySinh',
            `so_dien_thoai`='$soDienThoai',
            `gioi_tinh`='$gioiTinh' WHERE id='$id'";
            $result=mysqli_query($conn,$sql);

            if($result){
                header("Location: index.php?page_layout=taikhoan");
            }else{
                echo" Thêm thất bại";
            }
           
        }else{
            echo "Vui lòng nhập đủ thông tin";
        }
    }
    ?>
</body>
</html> 