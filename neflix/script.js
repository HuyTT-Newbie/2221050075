var danhSachPhim =[
    {
        id:0,
        ten:"Labrado",
        thoiluong:20,
        banner:"banner.jpg",
        trailer:"https://youtu.be/Y0c3nKWhlIA?si=5hNyCTmJZgC9wFYG"
    },
    {
        id:1,
        ten:"Zootopia",
        thoiluong:20,
        banner: "zootopia.jpg",
        trailer: "https://youtu.be/Y0c3nKWhlIA?si=5hNyCTmJZgC9wFYG"
    }
    ,
    {
        id:2,
        ten:"Kungfu Panda",
        thoiluong:20,
        banner: "kfpd.jpg",
        trailer: "https://youtu.be/siLm9q4WIjI?si=Lp7r-V-pVIM1UhUP"
    }
    ,
    {
        id:1,
        ten:"Zootopia",
        thoiluong:20,
        banner: "zootopia.jpg",
        trailer: "https://youtu.be/Y0c3nKWhlIA?si=5hNyCTmJZgC9wFYG"
    }
]

var banner=document.getElementsByClassName("banner")[0];
    var trailer=document.getElementsByClassName("banner")[1];

function xemTrailer(){
            document.getElementsByClassName("banner")[0].style="display:none";
            document.getElementsByClassName("banner")[1].style="display:block";
        }
function chonPhim(id){
    for(var i=0;i<danhSachPhim.length;i++){
        if(danhSachPhim[i].id==id){
            banner.querySelector("img").src=danhSachPhim[i].banner;
             var videoId = danhSachPhim[i].trailer
                .split("youtu.be/")[1]
                .split("?")[0];

            trailer.querySelector("iframe").src =
                "https://www.youtube.com/embed/" + videoId;

            break;
        }
    }
}