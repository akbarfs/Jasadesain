<?php
if(isset($_GET['data'])){
$id = $_GET['data'];
$_SESSION['id']=$id;
//get data buku
$sql_k = "SELECT `kategori` FROM `kategori` WHERE `id`='$id'";
$query_k = mysqli_query($koneksi,$sql_k);
while($data_k = mysqli_fetch_row($query_k)){
  $kategori = $data_k[0];
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
                <div class="col-md-8"><h4><i class="fa fa-angle-right"></i>Formulir Edit Alasan</h4>
            <br>
            <form class="cmxform form-horizontal style-form" id="commentForm" enctype="multipart/form-data" method="post" action="index.php?include=konfirmasi-edit-kategori-portfolio" >
            <div class="col-md-14">
            <?php if(!empty($_GET['notif'])){?>
                  <?php if($_GET['notif']=="tambahberhasil"){?>
                  <div class="alert alert-success" role="alert">
                  Data Berhasil Ditambahkan</div>
                  <?php } else if($_GET['notif']=="editberhasil"){?>
                  <div class="alert alert-success" role="alert">
                  Data Berhasil Diubah</div>
                  <?php } else if($_GET['notif']=="hapusberhasil"){?>
                  <div class="alert alert-success" role="alert">
                  Data Berhasil Dihapus</div>
                <?php }?>
                <?php }?>

              <div class="form-group">
                <label >Kategori</label>
                <input type="text" class="form-control" name="kategori" id="kategori" value="<?php echo $kategori;?>" required/>
              </div>
            </div>
            <hr>
            <button class="btn btn-primary" type="submit">Simpan</button>
            <button class="btn btn-theme"><a href="index.php?include=kategori-portfolio">Kembali</a></button>

            </div>
            </form>
            </div>
            <!-- /content-panel -->

            </div>
  </div>
  </div>

        <!-- /row -->
    <!--main content end-->
    <?php include("includes/footer.php") ?> 
    <?php include("includes/script.php") ?> 