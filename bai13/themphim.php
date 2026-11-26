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
    <form class="khoi" action="index.php?page_layout=themphim" method="POST" enctype="multipart/from-data">
        <div>
            <p><b>Tên phim</b></p>   
            <input type="text" name="tenPhim" id="" placeholder="Tên Phim">
        </div>
        <div>
            <p><b>Quốc gia</b></p>   
            <input type="text" name="quocGia" id="" placeholder="Quốc gia">
        </div>
        <?php
            $sqltheloai="select *from the_loai";
            $result= mysqli_query($conn,$sqltheloai);
        ?>

        <div class="i-text">
            <p><b>Thể loại</b></p>
            <select name="theLoai" id="">
                <option value="">-- Chọn thể loại --</option>
                <?php
                    while($row = mysqli_fetch_array($result))
                    {
                ?>
                <option value="<?php echo $row['id'] ?>"><?php echo $row['ten_the_loai'] ?></option>
                <?php
                    }
                ?>
            </select>

        </div>

        <?php
            $sqldaodien = "SELECT * FROM dao_dien";
            $resultDaoDien = mysqli_query($conn, $sqldaodien);
        ?>
        <div>
        <div>
            <p><b>Đạo diễn</b></p>   
            <select name="daoDienId">
                <option value="">-- Chọn đạo diễn --</option>
                <?php while($row = mysqli_fetch_array($resultDaoDien)) { ?>
                    <option value="<?php echo $row['id']; ?>"><?php echo $row['ho_ten']; ?></option>
                <?php } ?>
            </select>
        </div>
        <div>
            <p><b>Năm</b></p>   
            <input type="date" name="nam" id="" placeholder="Năm">
        </div>
        <div>
            <p><b>Độ tuổi</b></p>   
            <input type="number" name="doTuoi" id="" placeholder="Độ tuổi">
        </div>
        <div>
            <p><b>Mô tả</b></p>   
            <input type="text" name="moTa" id="" placeholder="Mô tả">
        </div>
        <div>
            <p><b>Trailer</b></p>   
            <input type="text" name="trailer" id="" placeholder="trailer">
        </div>
        <div>
            <p><b>Banner</b></p>   
            <input type="text" name="banner" id="" placeholder="banner">
        </div>
        
        <div>
            <button>Gửi</button>
        </div>
        
    </form>
    <?php
    if(isset($_POST['tenPhim'])&&
        isset($_POST['theLoai'])&&
        isset($_POST['quocGia'])&&
        isset($_POST['daoDienId'])&&
        isset($_POST['nam'])&&
        isset($_POST['doTuoi'])&&
        isset($_POST['banner'])&&
        isset($_POST['trailer'])&&
        isset($_POST['moTa'])
        
        ){
        
        $tenPhim=$_POST['tenPhim'];
        $theLoai=$_POST['theLoai'];
        $quocGia=$_POST['quocGia'];
        $daoDienId=$_POST['daoDienId'];
        $nam=$_POST['nam'];
        $doTuoi=$_POST['doTuoi'];
        $banner=$_POST['banner'];
        $trailer=$_POST['trailer'];
        $moTa=$_POST['moTa'];
        
        if(!empty($tenPhim)
            && !empty($theLoai)
            && !empty($quocGia)
            && !empty($daoDienId)
            && !empty($nam)
            && !empty($doTuoi)
            && !empty($banner)
            && !empty($trailer)
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