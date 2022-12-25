<?php
session_start();
include("../koneksi/koneksi.php");
if(isset($_GET["include"])){
$include = $_GET["include"];
if($include=="konfirmasi-login"){
    include("include/konfirmasilogin.php");
}else if($include=="log-out"){
    include("include/logout.php");
}else if($include=="konfirmasi-tambah-kategori-portfolio"){
    include("include/konfirmasi_tambah_kategori_portfolio.php");
}else if($include=="konfirmasi-edit-kategori-portfolio"){
    include("include/konfirmasi_edit_kategori_portfolio.php");
}else if($include=="konfirmasi-tambah-paket-layanan"){
    include("include/konfirmasi_tambah_paket_layanan.php");
}else if($include=="konfirmasi-edit-paket-layanan"){
    include("include/konfirmasi_edit_paket_layanan.php");
}else if($include=="konfirmasi-tambah-layanan"){
    include("include/konfirmasi_tambah_layanan.php");
}else if($include=="konfirmasi-edit-layanan"){
    include("include/konfirmasi_edit_layanan.php");
}else if($include=="konfirmasi-tambah-artikel"){
    include("include/konfirmasi_tambah_artikel.php");
}else if($include=="konfirmasi-edit-artikel"){
    include("include/konfirmasi_edit_artikel.php");
}else if($include=="konfirmasi-tambah-qna"){
    include("include/konfirmasi_tambah_qna.php");
}else if($include=="konfirmasi-edit-qna"){
    include("include/konfirmasi_edit_qna.php");
}else if($include=="konfirmasi-tambah-testimoni"){
    include("include/konfirmasi_tambah_testimoni.php");
}else if($include=="konfirmasi-edit-testimoni"){
    include("include/konfirmasi_edit_testimoni.php");
}else if($include=="konfirmasi-edit-konten"){
    include("include/konfirmasi_edit_konten.php");
}else if($include=="konfirmasi-tambah-portfolio"){
    include("include/konfirmasi_tambah_portfolio.php");
}else if($include=="konfirmasi-edit-portfolio"){
    include("include/konfirmasi_edit_portfolio.php");
}else if($include=="konfirmasi-tambah-user"){
    include("include/konfirmasi_tambah_user.php");
}else if($include=="konfirmasi-edit-user"){
    include("include/konfirmasi_edit_user.php");
}else if($include=="konfirmasi-edit-profile"){
    include("include/konfirmasi_edit_profile.php");
}    
}
?>
<!DOCTYPE html>
<link href="side/css/styles.css" rel="stylesheet" />
<link rel="stylesheet" href="assets/css/style.css">
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="assets/demo/demo.css" rel="stylesheet" />
    <title>Jasadesain.co.id | Admin Authority</title>
    <style>
.dropbtn {
  background-color: transparent;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown:hover .dropdown-content {
  display: block;
}

</style>
</head>
<body>
<div class="d-flex" id="wrapper">
        <?php 
        if(isset($_GET["include"])){
            $include = $_GET["include"];
            if(isset($_SESSION['id_user'])){
                $id_user = $_SESSION['id_user'];
                $sql = "select `nama`,`username`, `level`,`foto` from `user` where `id_user`='$id_user'";
                $query = mysqli_query($koneksi, $sql);
                while($data = mysqli_fetch_row($query)){
                
                $nama = $data[0];
                $username = $data[1];
                $level = $data[2];
                $foto = $data[3];
                }

                if($include=="kategori-portfolio"){
                    include("include/kategori_portfolio.php");
                }else if($include=="tambah-kategori-portfolio"){
                    include("include/tambah_kategori_portfolio.php");
                }else if($include=="edit-kategori-portfolio"){
                    include("include/edit_kategori_portfolio.php");
                }else if($include=="paket-layanan"){
                    include("include/paket_layanan.php");
                }else if($include=="tambah-paket-layanan"){
                    include("include/tambah_paket_layanan.php");
                }else if($include=="edit-paket-layanan"){
                    include("include/edit_paket_layanan.php");
                }else if($include=="detail-paket-layanan"){
                    include("include/detail_paket_layanan.php");
                }else if($include=="layanan"){
                    include("include/layanan.php");
                }else if($include=="tambah-layanan"){
                    include("include/tambah_layanan.php");
                }else if($include=="edit-layanan"){
                    include("include/edit_layanan.php");
                }else if($include=="detail-layanan"){
                    include("include/detail_layanan.php");
                }else if($include=="artikel"){
                    include("include/artikel.php");
                }else if($include=="tambah-artikel"){
                    include("include/tambah_artikel.php");
                }else if($include=="edit-artikel"){
                    include("include/edit_artikel.php");
                }else if($include=="detail-artikel"){
                    include("include/detail_artikel.php");
                }else if($include=="qna"){
                    include("include/qna.php");
                }else if($include=="tambah-qna"){
                    include("include/tambah_qna.php");
                }else if($include=="sub"){
                    include("include/sub.php");
                }else if($include=="edit-qna"){
                    include("include/edit_qna.php");
                }else if($include=="testimoni"){
                    include("include/testimoni.php");
                }else if($include=="tambah-testimoni"){
                    include("include/tambah_testimoni.php");
                }else if($include=="edit-testimoni"){
                    include("include/edit_testimoni.php");
                }else if($include=="detail-testimoni"){
                    include("include/detail_testimoni.php");
                }else if($include=="konten"){
                    include("include/konten.php");
                }else if($include=="detail-konten"){
                    include("include/detail_konten.php");
                }else if($include=="edit-konten"){
                    include("include/edit_konten.php");
                }else if($include=="portfolio"){
                    include("include/portfolio.php");
                }else if($include=="tambah-portfolio"){
                    include("include/tambah_portfolio.php");
                }else if($include=="detail-portfolio"){
                    include("include/detail_portfolio.php");
                }else if($include=="edit-portfolio"){
                    include("include/edit_portfolio.php");
                }else if($include=="user"){
                    include("include/user.php");
                }else if($include=="tambah-user"){
                    include("include/tambah_user.php");
                }else if($include=="detail-user"){
                    include("include/detail_user.php");
                }else if($include=="edit-user"){
                    include("include/edit_user.php");
                }else if($include=="pesan"){
                    include("include/pesan.php");
                }else if($include=="detail-pesan"){
                    include("include/detail_pesan.php");
                }else if($include=="edit-profile"){
                    include("include/edit_profile.php");
                }else if($include=="profile"){
                include("include/profile.php");
                } 
                }else{
                    include("include/login.php");
                } 
                }else{
                if(isset($_SESSION['id_user'])){
                //pemanggilan ke halaman-halaman profil jika ada session
                include("include/profile.php");

                }else{
                //pemanggilan halaman form login
                include("include/login.php");
                }
               }            
        ?>
    </div>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="side/js/scripts.js"></script>

  <script src="https://cdn.ckeditor.com/ckeditor5/34.2.0/classic/ckeditor.js"></script>
  <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
  <!--   Core JS Files   -->
  <script src="assets/js/core/jquery.min.js"></script>
  <script src="assets/js/core/popper.min.js"></script>
  <script src="assets/js/core/bootstrap.min.js"></script>
  <script src="assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="assets/js/paper-dashboard.min.js?v=2.0.1" type="text/javascript"></script><!-- Paper Dashboard DEMO methods, don't include it in your project! -->
  <script src="assets/demo/demo.js"></script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
      demo.initChartsPages();
    });
  </script>
  <script>
    ClassicEditor
        .create( document.querySelector( '#editor1' ) )
        .catch( error => {
            console.error( error );
        } );
  </script>
<script>
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
}

function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}
</script>
</body>    
</html>