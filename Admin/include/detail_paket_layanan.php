<?php 
      if(isset($_GET['data'])){
      $id = $_GET['data'];

      $sql = "SELECT `p`.`nama`,`l`.`judul`,`p`.`keterangan`,
      `p`.`harga` FROM `paket` `p`
      INNER JOIN `layanan` `l` ON 
      `p`.`id_layanan`=`l`.`id`
      WHERE `p`.`id`='$id'";
      $query = mysqli_query($koneksi,$sql);
      while($data = mysqli_fetch_row($query)){
        $nama_paket = $data[0];
        $judul = $data[1];
        $keterangan = $data[2];
        $harga = $data[3];
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
                <div class="col-md-8"><h4><i class="fa fa-angle-right"></i>Tampilan Paket Layanan</h4>
            <br>
            <section id="unseen">
                <table class="table table-bordered">
                  <thead class=" text-primary">
                    <tr>
                        <td style="width:20%;font-weight:600;">Nama Paket</td>
                        <td style="width:5%;text-align:center;font-weight:600;">:</td>
                        <td style="width:75%;color:black;font-weight:600;"><?php echo $nama_paket;?></td>
                    </tr>
                    <tr>
                        <td style="width:20%;font-weight:600;">Jenis Layanan</td>
                        <td style="width:5%;text-align:center;font-weight:600;">:</td>
                        <td style="width:75%;color:black;font-weight:600;">Desain <?php echo $judul;?></td>
                    </tr>
                    <tr>
                        <td style="width:20%;font-weight:600;">Harga</td>
                        <td style="width:5%;text-align:center;font-weight:600;">:</td>
                        <td style="width:75%;color:black;font-weight:600;"><?php echo $harga;?></td>
                    </tr>
                    <tr>
                        <td style="width:20%;font-weight:600;">Nama Paket</td>
                        <td style="width:5%;text-align:center;font-weight:600;">:</td>
                        <td style="width:75%;color:black;"><?php echo $keterangan;?></td>
                    </tr>

                  </tbody>
                </table>
                <button class="btn btn-theme"><a href="index.php?include=paket-layanan">Kembali</a></button>
            </div>
            <!-- /content-panel -->
            </div>
  </div>
  </div>

        <!-- /row -->
    <!--main content end-->
    <?php include("includes/footer.php") ?> 
    <?php include("includes/script.php") ?> 
