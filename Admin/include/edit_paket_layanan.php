<?php
if(isset($_GET['data'])){
$id = $_GET['data'];
$_SESSION['id']=$id;
//get data
$sql_k = "SELECT `id_layanan`,`nama`,`keterangan`,`harga` FROM `paket` WHERE `id`='$id'";
$query_k = mysqli_query($koneksi,$sql_k);
while($data_k = mysqli_fetch_row($query_k)){
    $id_layanan = $data_k[0];
    $nama_paket = $data_k[1];
    $keterangan = $data_k[2];
    $harga = $data_k[3];
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
                <div class="col-md-8"><h4><i class="fa fa-angle-right"></i>Formulir Edit Paket Layanan</h4>
            <br>
            <form class="cmxform form-horizontal style-form" id="commentForm" enctype="multipart/form-data" method="post" action="index.php?include=konfirmasi-edit-paket-layanan" >
            <div class="col-md-14">
            <?php if((!empty($_GET['notif']))&&(!empty($_GET['jenis']))){?>
            <?php if($_GET['notif']=="editkosong"){?>
                <div class="alert alert-danger" role="alert">Maaf data 
                <?php echo $_GET['jenis'];?> wajib di isi</div>
            <?php }?>
            <?php }?>

              <div class="form-group">
                <label >Nama</label>
                <input type="text" class="form-control" name="nama" id="nama" value="<?php echo $nama_paket;?>" require/>
              </div>
            </div>
            <div class="col-md-14">
                <label for="">Layanan</label>
            <div class="form-group ">
            <select class="form-control" id="layanan" name="layanan">
              <option value="0">- Pilih Layanan -</option>
              <?php 
              $sql_l = "SELECT `id`,`judul` FROM `layanan` ORDER BY `judul`";
              $query_l = mysqli_query($koneksi, $sql_l);

              while($data_l = mysqli_fetch_row($query_l)){
                $id_kat = $data_l[0];
                $kat = $data_l[1];
              ?>
      
              <option value="<?php echo $id_kat;?>" 
                  <?php if($id_kat==$id_layanan){?>
              selected <?php }?>><?php echo $kat;?></option>
              
              <?php }?>
            </select>
                </div>
            </div>
            <div class="col-md-14">
              <div class="form-group">
                <label >Harga</label>
                <input type="text" class="form-control" name="harga" id="harga" value="<?php echo $harga;?>" require/>
              </div>
            </div>
            <div class="col-md-14">
              <div class="form-group">
                <label >Deskripsi</label>
                <textarea class="form-control" name="keterangan" id="editor1"><?php echo $keterangan;?></textarea>
              </div>
            </div><hr>
            <button class="btn btn-primary" type="submit">Simpan</button>
            <button class="btn btn-theme"><a href="index.php?include=paket-layanan">Kembali</a></button>

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