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
    <form class="khoi" action="index.php?page_layout=themdanhmuc" method="POST">
        <div>
            <p><b>Tên đăng nhập</b></p>   
            <input type="text" name="tenDanhMuc" id="" placeholder="Tên danh mục">
        </div>
        
        <div>
            <button>Gửi</button>
        </div>
        
    </form>
    <?php
    if(isset($_POST['tenDanhMuc'])
        ){
        
        $tenDanhMuc=$_POST['tenDanhMuc'];
        
        if(!empty($tenDanhMuc)
            
        ){
            $sql="INSERT INTO `the_loai`( `ten_the_loai`) 
            VALUES ('$tenDanhMuc')";
            $result=mysqli_query($conn,$sql);

            if($result){
                header("Location: index.php?page_layout=danhmuc");
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