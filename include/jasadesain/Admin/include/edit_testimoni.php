<?php
if(isset($_GET['data'])){
$id = $_GET['data'];
$_SESSION['id']=$id;

$sql_k = "SELECT `nama`,`testimoni` FROM `testimoni` WHERE `id`='$id'";
$query_k = mysqli_query($koneksi,$sql_k);
while($data_k = mysqli_fetch_row($query_k)){
    $nama_tester = $data_k[0];
    $testimoni = $data_k[1];
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
                <div class="col-md-8"><h4><i class="fa fa-angle-right"></i>Formulir Edit Testimonial</h4>
            <br>
            <form class="cmxform form-horizontal style-form" id="commentForm" enctype="multipart/form-data" method="post" action="index.php?include=konfirmasi-edit-testimoni" >
            <div class="col-md-14">
            <?php if((!empty($_GET['notif']))&&(!empty($_GET['jenis']))){?>
            <?php if($_GET['notif']=="editkosong"){?>
                <div class="alert alert-danger" role="alert">Maaf data 
                <?php echo $_GET['jenis'];?> wajib di isi</div>
            <?php }?>
            <?php }?>
              <div class="form-group ">
                  <label class="control-label col-md-3">Gambar</label>
              </div><br>
              <input type="file" id="gambar" name="gambar" ><hr>
              <div class="form-group">
                <label >Nama Tester</label>
                <input type="text" class="form-control" name="nama" id="nama" value="<?php echo $nama_tester;?>" require/>
              </div>
            </div>
            <div class="col-md-14">
              <div class="form-group">
                <label >testimoni</label>
                <textarea class="form-control" name="testi" id="editor1"><?php echo $testimoni;?></textarea>
              </div>
            </div><hr>
            <button class="btn btn-primary" type="submit">Simpan</button>
            <button class="btn btn-theme"><a href="index.php?include=testimoni">Kembali</a></button>

            </div>
            </form>
            </div>
            <!-- /content-panel -->
  </div>
  </div>

        <!-- /row -->
    <!--main content end-->
    <?php include("includes/footer.php") ?> 
    <?php include("includes/script.php") ?> 
