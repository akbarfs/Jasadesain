<?php 
      if(isset($_GET['data'])){
      $id = $_GET['data'];

      $sql = "SELECT `nama`,`testimoni`,`gambar` FROM `testimoni`
      WHERE `id`='$id'";
      $query = mysqli_query($koneksi,$sql);
      while($data = mysqli_fetch_row($query)){
        $nama_tester = $data[0];
        $testimoni = $data[1];
        $gambar = $data[2];
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
                <div class="col-md-8"><h4><i class="fa fa-angle-right"></i>Tampilan testimoni</h4>
            <br>
            <section id="unseen">
                <table class="table table-bordered">
                  <thead class=" text-primary">
                    <tr>
                        <td style="width:20%;font-weight:600;">Cover</td>
                        <td style="width:5%;text-align:center;font-weight:600;">:</td>
                        <td style="width:75%;color:black;font-weight:600;">
                        <img src="./gmbr/<?php echo $gambar;?>" alt="" srcset="">
                        </td>
                    </tr>
                    <tr>
                        <td style="width:20%;font-weight:600;">Nama tester</td>
                        <td style="width:5%;text-align:center;font-weight:600;">:</td>
                        <td style="width:75%;color:black;font-weight:600;"><?php echo $nama_tester;?></td>
                    </tr>
                    <tr>
                        <td style="width:20%;font-weight:600;">Testimonial</td>
                        <td style="width:5%;text-align:center;font-weight:600;">:</td>
                        <td style="width:75%;color:black;"><?php echo $testimoni;?></td>
                    </tr>

                  </tbody>
                </table>
                <button class="btn btn-theme"><a href="index.php?include=testimoni">Kembali</a></button>
            </div>
            <!-- /content-panel -->

            </div>
  </div>
  </div>

        <!-- /row -->
    <!--main content end-->
    <?php include("includes/footer.php") ?> 
    <?php include("includes/script.php") ?> 