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
CREATE TABLE if not EXISTS nguoi_dung(
    id int AUTO_INCREMENT PRIMARY KEY,
    ten_dang_nhap varchar(30) NOT NULL,
    mat_khau varchar(30) NOT NULL,
    email varchar(30) NOT NULL,
    ho_ten varchar(50) NOT NULL,
    ngay_sinh date NOT NULL,
    so_dien_thoai varchar(10) NOT NULL,
    gioi_tinh boolean NOT NULL 
);

INSERT INTO `nguoi_dung`(`ten_dang_nhap`, `mat_khau`, `email`, `ho_ten`, `ngay_sinh`, `so_dien_thoai`, `gioi_tinh`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]')

--table the_loai
id key AUTO_INCREMENT int,
ten_the_loai varchar(255),

CREATE TABLE if not EXISTS the_loai(
    id int AUTO_INCREMENT PRIMARY KEY,
    ten_the_loai varchar(255) NOT NULL
);


--table dien_vien
id key AUTO_INCREMENT int,
ho_ten varchar(100),
ngay_sinh date,

INSERT INTO `dien_vien`( `ho_ten`, `ngay_sinh`) VALUES ('Lương Quang Anh','2006-02-15');
INSERT INTO `dien_vien`( `ho_ten`, `ngay_sinh`) VALUES ('Nguyễn An Bình','2006-01-19');
INSERT INTO `dien_vien`( `ho_ten`, `ngay_sinh`) VALUES ('Nguyễn Huy Châu' ,'2006-07-14');
INSERT INTO `dien_vien`( `ho_ten`, `ngay_sinh`) VALUES ('Nguyễn Thành Công','2006-09-14');
INSERT INTO `dien_vien`( `ho_ten`, `ngay_sinh`) VALUES ('Lương Quang Bình','1997-04-12');

CREATE TABLE if not EXISTS dao_dien(
    id int AUTO_INCREMENT PRIMARY KEY,
    ho_ten varchar(255) NOT NULL,
    ngay_sinh date NOT NULL
);

INSERT INTO `dao_dien`( `ho_ten`, `ngay_sinh`) VALUES ('Lương Quang Anh','2006-02-15');
INSERT INTO `dao_dien`( `ho_ten`, `ngay_sinh`) VALUES ('Nguyễn An Bình','2006-01-19');
INSERT INTO `dao_dien`( `ho_ten`, `ngay_sinh`) VALUES ('Nguyễn Huy Châu' ,'2006-07-14');
INSERT INTO `dao_dien`( `ho_ten`, `ngay_sinh`) VALUES ('Nguyễn Thành Công','2006-09-14');
INSERT INTO `dao_dien`( `ho_ten`, `ngay_sinh`) VALUES ('Lương Quang Bình','1997-04-12');

--dao_dien
CREATE TABLE if not EXISTS dao_dien(
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

CREATE TABLE if not EXISTS phim(
    id int AUTO_INCREMENT PRIMARY KEY,
    ten_phim varchar(255) NOT NULL,
    quoc_gia varchar(100) NOT NULL,
    dao_dien_id int NOT NULL,
    nam datetime NOT NULL,
    do_tuoi int NOT NULL,
    mo_ta varchar(255) NOT NULL 
);

INSERT INTO `phim`( `ten_phim`, `quoc_gia`, `dao_dien_id`, `nam`, `do_tuoi`, `mo_ta`) VALUES ('Sing','Mĩ','1','2009-01-01','13','AAA')

--phim_the_loai
id key AUTO_INCREMENT int,
phim_id int,
the_loai_id,

CREATE TABLE if not EXISTS phim_the_loai(
    id int AUTO_INCREMENT PRIMARY KEY,
    phim_id int NOT NULL,
    the_loai_id int NOT NULL
);

INSERT INTO `phim_the_loai`(`phim_id`, `the_loai_id`) VALUES (1,3);
INSERT INTO `phim_the_loai`(`phim_id`, `the_loai_id`) VALUES (1,4);
INSERT INTO `phim_the_loai`(`phim_id`, `the_loai_id`) VALUES (2,2);
INSERT INTO `phim_the_loai`(`phim_id`, `the_loai_id`) VALUES (2,5);
INSERT INTO `phim_the_loai`(`phim_id`, `the_loai_id`) VALUES (4,3);


--phim_dien_vien
id key AUTO_INCREMENT int,
phim_id int,
dien_vien_id int,


CREATE TABLE if not EXISTS phim_dien_vien(
    id int AUTO_INCREMENT PRIMARY KEY,
    phim_id int NOT NULL,
    dien_vien_id int NOT NULL
);

INSERT INTO `phim_dien_vien`(`phim_id`, `dien_vien_id`) VALUES (1,3);
INSERT INTO `phim_dien_vien`(`phim_id`, `dien_vien_id`) VALUES (1,4);
INSERT INTO `phim_dien_vien`(`phim_id`, `dien_vien_id`) VALUES (2,2);
INSERT INTO `phim_dien_vien`(`phim_id`, `dien_vien_id`) VALUES (2,5);
INSERT INTO `phim_dien_vien`(`phim_id`, `dien_vien_id`) VALUES (4,3);