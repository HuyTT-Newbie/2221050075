<h1>dd</h1>
<?php
//nội dung php viết ở đây
echo"Hello world <br>";
//Biến :$tên biến=giá trị
$hoTen="Huan Tuy";
//kiểm tra giá trị biến
var_dump($hoTen);
$tuoi=22;
//ghép chuỗi trong php dùng dấu chấm
echo $hoTen." ".$tuoi;
//kiểm tra độ dài chuỗi
echo strlen($hoTen) ."<br>";
//đếm số  từ trong 1 chuỗi
echo str_word_count($hoTen) ."<br>";
echo $hoTen;
//tìm kí tự trong chuỗi
echo strpos($hoTen,"u") ."<br>";
//thay thế kí tự trong chuỗi
echo str_replace("Tuy","Huy",$hoTen) ."<br>";

$soThuNhat=10;
$soThuHai=5;
//+
echo $soThuNhat+$soThuHai ."<br>";
//-
echo $soThuNhat-$soThuHai ."<br>";
//*
echo $soThuNhat*$soThuHai ."<br>";
//  /
echo $soThuNhat/$soThuHai ."<br>";
//toán tử gán
//$soThuNhat+=$soThuHai ."<br>";
//$soThuNhat-=$soThuHai ."<br>";
//$soThuNhat*=$soThuHai ."<br>";
//$soThuNhat/=$soThuHai ."<br>";
//$soThuNhat%=$soThuHai ."<br>";
//toán tử so sánh
echo $soThuNhat==$soThuHai."<br>";
echo $soThuNhat!=$soThuHai."<br>";
echo $soThuNhat>$soThuHai."<br>";
echo $soThuNhat<$soThuHai."<br>";
echo $soThuNhat>=$soThuHai."<br>";
echo $soThuNhat<=$soThuHai."<br>";
echo $soThuNhat===$soThuHai."<br>";
//câu điều kiện
$tong=$soThuNhat+$soThuHai;
if($tong<15){
    echo"nhỏ hơn 15";

}elseif($tong==15){
    echo"tổng bằng 15";

}else{
    echo"Tổng nhỏ hơn 15";
}
//switch case
$corlor="red";
switch($corlor){
    case"red":
        echo"<br>";
        echo"IS RED";
        break;
    case"blue":
        echo"<br>";
        echo"IS BLUE";
        break;
    default:
        echo"<br>";
        echo"NO COLOR";
        break;
}
//for
for($i=0;$i<10;$i++){
    echo $i."<br>";
}
//mảng
$mang=["Tuan","Sang","Tran"];
echo count ($mang)."<br>";
echo $mang[1]."<br>";
$mang[]="Quang";
print_r($mang);
unset($mang[3]);
print_r($mang);
?>