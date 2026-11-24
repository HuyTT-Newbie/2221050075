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
    <form class="khoi" action="index.php?page_layout=themtaikhoan" method="POST">
        <div>
            <p><b>Tên đăng nhập</b></p>   
            <input type="text" name="tenDangNhap" id="" placeholder="Tên đăng nhập">
        </div>
        <div>
            <p><b>Email</b></p>   
            <input type="email" name="email" id="" placeholder="email">
        </div>
        <div>
            <p><b>Mật khẩu</b></p>   
            <input type="password" name="matKhau" id="" placeholder="Mật khẩu">
        </div>
        <div>
            <p><b>Họ và tên</b></p>   
            <input type="text" name="hoTen" id="" placeholder="Họ và tên">
        </div>
        <div>
            <p><b>Ngày sinh</b></p>   
            <input type="date" name="ngaySinh" id="" placeholder="Ngày sinh">
        </div>
        <div>
            <p><b>Số điện thoại</b></p>   
            <input type="text" name="soDienThoai" id="" placeholder="Ngày sinh">
        </div>
        <div>
            <p><b>Giới tính</b></p>   
            <input type="radio" name="gioiTinh" id="" value="1" >Nam
            <input type="radio" name="gioiTinh" id="" value="0" >Nữ
        </div>
        <div>
            <button>Gửi</button>
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
            $sql="INSERT INTO `nguoi_dung`( `ten_dang_nhap`, `mat_khau`, `email`, `ho_ten`, `ngay_sinh`, `so_dien_thoai`, `gioi_tinh`) 
            VALUES ('$tenDangNhap','$matKhau','$email','$hoTen','$ngaySinh','$soDienThoai','$gioiTinh')";
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