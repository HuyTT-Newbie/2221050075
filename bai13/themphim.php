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
    <form class="khoi" action="index.php?page_layout=themphim" method="POST">
        <div>
            <p><b>Tên phim</b></p>   
            <input type="text" name="tenPhim" id="" placeholder="Tên Phim">
        </div>
        <div>
            <p><b>Quốc gia</b></p>   
            <input type="text" name="quocGia" id="" placeholder="Quốc gia">
        </div>
        <div>
            <p><b>Đạo diễn id</b></p>   
            <input type="text" name="daoDienId" id="" placeholder="Đạo diễn id">
        </div>
        <div>
            <p><b>Năm</b></p>   
            <input type="date" name="nam" id="" placeholder="Năm">
        </div>
        <div>
            <p><b>Độ tuổi</b></p>   
            <input type="text" name="doTuoi" id="" placeholder="Độ tuổi">
        </div>
        <div>
            <p><b>Mô tả</b></p>   
            <input type="text" name="moTa" id="" placeholder="Mô tả">
        </div>
        
        <div>
            <button>Gửi</button>
        </div>
        
    </form>
    <?php
    if(isset($_POST['tenPhim'])&&
        isset($_POST['quocGia'])&&
        isset($_POST['daoDienId'])&&
        isset($_POST['nam'])&&
        isset($_POST['doTuoi'])&&
        isset($_POST['moTa'])
        
        ){
        
        $tenPhim=$_POST['tenPhim'];
        $quocGia=$_POST['quocGia'];
        $daoDienId=$_POST['daoDienId'];
        $nam=$_POST['nam'];
        $doTuoi=$_POST['doTuoi'];
        $moTa=$_POST['moTa'];
        
        if(!empty($tenPhim)
            && !empty($quocGia)
            && !empty($daoDienId)
            && !empty($nam)
            && !empty($doTuoi)
            && !empty($moTa)
            
        ){
            $sql="INSERT INTO `phim`( `ten_phim`, `quoc_gia`, `dao_dien_id`, `nam`, `do_tuoi`, `mo_ta`) 
            VALUES ('$tenPhim','$quocGia','$daoDienId','$nam','$doTuoi','$moTa')";
            $result=mysqli_query($conn,$sql);

            if($result){
                header("Location: index.php?page_layout=phim");
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