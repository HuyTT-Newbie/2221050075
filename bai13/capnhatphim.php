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
    $sql="select * from `phim` where id ='$id'";
    $result=mysqli_query($conn,$sql);
    $phim=mysqli_fetch_assoc($result);
    ?>
    <h1>Cập nhật phim</h1>
    <form class="khoi" action="index.php?page_layout=capnhatphim&id=<?php echo $id;?>" method="POST">
        <div>
            <p><b>Tên phim</b></p>   
            <input type="text" name="tenPhim" id="" value="<?php echo $phim['ten_phim'] ?>" placeholder="Tên Phim">
        </div>
        <div>
            <p><b>Quốc gia</b></p>   
            <input type="text" name="quocGia" id="" value="<?php echo $phim['quoc_gia'] ?>" placeholder="Quốc gia">
        </div>
        <div>
            <p><b>Đạo diễn id</b></p>   
            <input type="text" name="daoDienId" id="" value="<?php echo $phim['dao_dien_id'] ?>" placeholder="Đạo diễn id">
        </div>
        <div>
            <p><b>Năm</b></p>   
            <input type="date" name="nam" id="" value="<?php echo $phim['nam'] ?>" placeholder="Năm">
        </div>
        <div>
            <p><b>Độ tuổi</b></p>   
            <input type="text" name="doTuoi" id="" value="<?php echo $phim['do_tuoi'] ?>" placeholder="Độ tuổi">
        </div>
        <div>
            <p><b>Mô tả</b></p>   
            <input type="text" name="moTa" id="" value="<?php echo $phim['mo_ta'] ?>" placeholder="Mô tả">
        </div>
        <div>
            <button>Cập nhật</button>
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
            $sql="UPDATE `phim` SET 
            `ten_phim`='$tenPhim',
            `quoc_gia`='$quocGia',
            `dao_dien_id`='$daoDienId',
            `nam`='$nam',
            `do_tuoi`='$doTuoi',
            `mo_ta`='$moTa' WHERE id='$id'";
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