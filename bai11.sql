CREAT DATABASE netflix;

--table nguoi_dung
id int
ten_dang_nhap varchar(30)
mat_khau varchar(30)
email varchar(30)
ho_ten varchar(50)
ngay_sinh date()
so_dien_thoai varchar(10)
gioi_tinh boolean --true: nam/false:nữ
CREATE TABLE if not EXISIS nguoi_dung(
    id int AUTO_INCREMENT PRIMARY KEY,
    ten_dang_nhap varchar(30) NOT NULL,
    mat_khau varchar(30) NOT NULL,
    email varchar(30) NOT NULL,
    ho_ten varchar(50) NOT NULL,
    ngay_sinh date NOT NULL,
    so_dien_thoai varchar(10) NOT NULL,
    gioi_tinh boolean NOT NULL 
);

--table the_loai
id key AUTO_INCREMENT int,
ten_the_loai varchar(255),

CREATE TABLE if not EXISIS the_loai(
    id int AUTO_INCREMENT PRIMARY KEY,
    ten_the_loai varchar(255) NOT NULL
);


--table dien_vien
id key AUTO_INCREMENT int,
ho_ten varchar(100),
ngay_sinh date,

CREATE TABLE if not EXISIS dien_vien(
    id int AUTO_INCREMENT PRIMARY KEY,
    ho_ten varchar(255) NOT NULL,
    ngay_sinh date NOT NULL
);

--phim
id key AUTO_INCREMENT int,
ten_phim varchar(255),
quoc_gia varchar(100),
dao_dien_id int,
nam datetime,
do_tuoi int,
mo_ta varchar(255),

CREATE TABLE if not EXISIS phim(
    id int AUTO_INCREMENT PRIMARY KEY,
    ten_phim varchar(255) NOT NULL,
    quoc_gia varchar(100) NOT NULL,
    dao_dien_id int NOT NULL,
    nam datetime NOT NULL,
    ngay_sinh date NOT NULL,
    do_tuoi int NOT NULL,
    mo_ta varchar(255) NOT NULL 
);

--phim_the_loai
id key AUTO_INCREMENT int,
phim_id int,
the_loai_id,

CREATE TABLE if not EXISIS phim_the_loai(
    id int AUTO_INCREMENT PRIMARY KEY,
    phim_id int NOT NULL,
    the_loai_id int NOT NULL
);

--phim_dien_vien
id key AUTO_INCREMENT int,
phim_id int,
dien_vien_id int,

CREATE TABLE if not EXISIS phim_the_loai(
    id int AUTO_INCREMENT PRIMARY KEY,
    phim_id int NOT NULL,
    dien_vien_id int NOT NULL
);