<?php 
      if(isset($_GET['data'])){
      $id = $_GET['data'];

      $sql = "SELECT `judul`,`isi`,`gambar`,`kategori_artikel`,`terbit` FROM `artikel`
      WHERE `id`='$id'";
      $query = mysqli_query($koneksi,$sql);
      while($data = mysqli_fetch_row($query)){
        $judul = $data[0];
        $isi = $data[1];
        $gambar = $data[2];
        $kategori_artikel = $data[3];
        $terbit = $data[4];
      }
    }
?>

<?php include("includes/sidebar.php") ?> 
        <div id="page-content-wrapper" >
        <?php include("includes/header.php") ?> 

    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->

    <div class="content" style="margin-left:5%;margin-right:5%;">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
            <div class="card card-user">
            <div class="content-panel">
                <div class="col-md-8"><h4><i class="fa fa-angle-right"></i>Tampilan artikel</h4>
            <br>
            <section id="unseen">
                <table class="table table-bordered">
                  <thead class=" text-primary">
                    <tr>
                        <td style="width:20%;font-weight:600;">Header</td>
                        <td style="width:5%;text-align:center;font-weight:600;">:</td>
                        <td style="width:75%;color:black;font-weight:600;">
                        <img src="./gmbr/<?php echo $gambar;?>" alt="" srcset="">
                        </td>
                    </tr>
                    <tr>
                        <td style="width:20%;font-weight:600;">Judul artikel</td>
                        <td style="width:5%;text-align:center;font-weight:600;">:</td>
                        <td style="width:75%;color:black;font-weight:600;"><?php echo $judul;?></td>
                    </tr>
                    <tr>
                        <td style="width:20%;font-weight:600;">Kategori</td>
                        <td style="width:5%;text-align:center;font-weight:600;">:</td>
                        <td style="width:75%;color:black;font-weight:600;"><?php echo $kategori_artikel;?></td>
                    </tr>
                    <tr>
                        <td style="width:20%;font-weight:600;">Tanggal dibuat</td>
                        <td style="width:5%;text-align:center;font-weight:600;">:</td>
                        <td style="width:75%;color:black;font-weight:600;"><?php echo $terbit;?></td>
                    </tr>
                    <tr>
                        <td style="width:20%;font-weight:600;">Isi</td>
                        <td style="width:5%;text-align:center;font-weight:600;">:</td>
                        <td style="width:75%;color:black;"><?php echo $isi;?></td>
                    </tr>

                  </tbody>
                </table>
                <button class="btn btn-theme"><a href="index.php?include=artikel">Kembali</a></button>
            </div>
            <!-- /content-panel -->
            </div>
  </div>
  </div>

        <!-- /row -->
    <!--main content end-->
    <?php include("includes/footer.php") ?> 
    <?php include("includes/script.php") ?> 
