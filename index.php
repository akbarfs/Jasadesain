<?php include("koneksi/koneksi.php");
    if(isset($_GET["include"])){
        $include = $_GET["include"];
        if($include=="konfirmasi-tambah-sub"){
            include("include/konfirmasi_tambah_sub.php");
        }
    }
?>

<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Jasadesain.co.id - Layanan jasa desain graphic</title>
    <link rel="shortcut icon" href="./images/favicon.png" type="image/x-icon">


    <!--META-->
    <meta name="viewport" content="width=device-width initial-scale=1.0">

    <!--CSS-->
    <!-- CSS only -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />

    <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="css/menu.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="css/customcss.css">
    <link rel="stylesheet" href="css/button.css">
    <link rel="stylesheet" href="css/layout.css">
    <link rel="stylesheet" href="css/card.css">-->
    <!-- <link rel="stylesheet" href="css/load.css"> -->
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="css/portfolio.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="output.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/53f19c6b27.js" crossorigin="anonymous"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css">
    <style>
        .swiper-slide{
            width: fit-content;
            height: fit-content;
        }
    </style>
    <!--JS-->

<body style="font-family:Poppins;color:#404040;background-color: #F6FCFF;" class="overflow-y-scroll">
    <?php include("include/navbar.php");?>
    <?php include("include/modal.php");?>
    <?php include("include/login.php");?>

    <?php 
        if(isset($_GET["include"])){
            $include = $_GET["include"];
            if($include=="detail-paket"){
            include("include/detail_paket.php");
            }else if($include=="semua-layanan"){
                include("include/semua_layanan.php");                
            }else if($include=="detail-artikel"){
                include("include/detail_artikel.php");    
            }else if($include=="semua-artikel"){
                include("include/semua_artikel.php");                
            }else if($include=="index.php#banner"){
                include("include/index.php#banner");
            }else if($include=="index.php#layanan"){
                include("include/index.php#layanan");
            }else if($include=="index.php#portfolio"){
                include("include/index.php#portfolio");
            }else if($include=="semua-portfolio"){
                include("include/semua_portfolio.php");                
            }else if($include=="index.php#client"){
                include("include/index.php#client");
            }else if($include=="index.php#kontak"){
                include("include/index.php#kontak");                
            }
            
            }else{
            include("include/index.php");
            }
        ?>
    <?php include("include/float_call.php")?>
    <?php include("include/footerr.php")?>
    <script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/fixed-responsive-nav.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/portfolio.js"></script>
    <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>


    <!-- Initialize Swiper -->
    <script>
    var swiper = new Swiper(".mySwiper", {
        grabCursor:true,
        centeredSlides:true,
        centeredSlidesBounds:true,
        loop:true,
        spaceBetween: 5,
        autoplay:{
            delay: 5000,
        },
        breakpoints:{
            0: {
                slidesPerView: 1,
            },
            760:{
                slidesPerView: 2,
            },
            991:{
                slidesPerView: 3,
            },
        },
        navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
        },
    });
    </script>    
    <script>
    var swiper = new Swiper(".ArtikelSwiper", {
        grabCursor:true,
        centeredSlides:true,
        centeredSlidesBounds:true,
        loop:true,
        spaceBetween: 5,
        breakpoints:{
            0: {
                slidesPerView: 1,
            },
            760:{
                slidesPerView: 2,
            },
            991:{
                slidesPerView: 2.2,
            },
        },
    });
    </script>
    <script>
        var textDisplay = document.getElementById('text');
        var pharses = ['Logo ? ','Banner ? ','Poster ? ','Brosur ? ','Konten ? ','Kaos ? ','Lainnya ? '];
        let i =0;
        let j=0;
        let currentPharse = [];
        let isDeleting = false;
        let isEnd = false;

        function loop () {
            isEnd = false;
            textDisplay.innerHTML = currentPharse.join('');

            if(i<pharses.length){
                if(!isDeleting && j <= pharses[i].length){
                    currentPharse.push(pharses[i][j]);
                    j++;
                }

                if(isDeleting && j <= pharses[i].length){
                    currentPharse.pop(pharses[i][j]);
                    j--;
                }

                if (j == pharses[i].length){
                    isEnd = true;
                    isDeleting = true;
                }

                if (isDeleting && j === 0){
                    currentPharse = [];
                    isDeleting = false;
                    i++;
                    if (i == pharses.length){
                        i=0;
                    }
                }
            }
            const spedUp = Math.random() * (80 -50) +50
            const normalSpeed = Math.random() * (300 -200) +200
            const time = isEnd ? 200 : isDeleting ? spedUp : normalSpeed
            setTimeout(loop,time);
        }

        loop()

        let label = document.querySelectorAll(".acc")

        label.forEach((e)=>{
            e.addEventListener("click", ()=>{
                removeClass()
                e.classList.toggle("active")
            })
        })

        function removeClass(){
            label.forEach((e)=>{
                e.classList.remove("active")
            })
        }

    </script>
        <script>
        $(document).ready(function(){
            var layanan = $('.judul-layanan').attr('title');
            var kat = $('.kat-p').attr('kategori');
            $(".shot-thumbnail-l").not("."+layanan).remove();
            $(".shot-thumbnail-l").filter("."+layanan).show('2000');
        })
    </script>

</body>

</html>