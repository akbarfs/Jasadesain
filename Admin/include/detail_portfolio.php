<?php 
      if(isset($_GET['data'])){
      $id = $_GET['data'];

      $sql = "SELECT `p`.`judul`,`k`.`kategori`,`p`.`gambar` FROM `portfolio` `p`
      INNER JOIN `kategori` `k` ON 
      `p`.`id_kategori`=`k`.`id`
      WHERE `p`.`id`='$id'";
      $query = mysqli_query($koneksi,$sql);
      while($data = mysqli_fetch_row($query)){
        $judul = $data[0];
        $kategori = $data[1];
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
                <div class="col-md-8"><h4><i class="fa fa-angle-right"></i>Tampilan Portfolio</h4>
            <br>
            <section id="unseen">
                <table class="table table-bordered">
                  <thead class=" text-primary">
                    <tr>
                        <td style="width:20%;font-weight:600;">Gambar</td>
                        <td style="width:5%;text-align:center;font-weight:600;">:</td>
                        <td style="width:75%;color:black;font-weight:600;">
                        <img src="./gmbr/portfolio/<?php echo $gambar;?>" alt="" srcset="">
                        </td>
                    </tr>
                    <tr>
                        <td style="width:20%;font-weight:600;">Judul Portofolio</td>
                        <td style="width:5%;text-align:center;font-weight:600;">:</td>
                        <td style="width:75%;color:black;font-weight:600;"><?php echo $judul;?></td>
                    </tr>
                    <tr>
                        <td style="width:20%;font-weight:600;">kategori</td>
                        <td style="width:5%;text-align:center;font-weight:600;">:</td>
                        <td style="width:75%;color:black;"><?php echo $kategori;?></td>
                    </tr>

                  </tbody>
                </table>
                <button class="btn btn-theme"><a href="index.php?include=portfolio">Kembali</a></button>
            </div>

            </div>
  </div>
  </div>

        <!-- /row -->
    <!--main content end-->
    <?php include("includes/footer.php") ?> 
    <?php include("includes/script.php") ?> 