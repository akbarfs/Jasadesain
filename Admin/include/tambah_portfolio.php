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
                <div class="col-md-8"><h4><i class="fa fa-angle-right"></i>Formulir Tambah Portfolio</h4>
            <br>
            <form class="cmxform form-horizontal style-form" id="commentForm" enctype="multipart/form-data" method="post" action="index.php?include=konfirmasi-tambah-portfolio" >
            <div class="col-md-14">
                <label >Cover</label><br>
              <input type="file" name="gambar" id="gambar">
            </div><br>
            <div class="col-md-14">
              <div class="form-group">
                <label >Judul</label>
                <input type="text" class="form-control" name="judul" id="judul" placeholder="Masukkan Judul Portfolio" require/>
              </div>
            </div>
            <div class="col-md-14">
                <label for="">Kategori</label>
              <div class="form-group ">
                  <select class="form-control" id="kategori" name="kategori">
                    <option value="0">- Pilih Kategori -</option>
                    <?php 
                  $sql_k = "SELECT `id`,`kategori` FROM 
                  `kategori` ORDER BY `kategori`";
                  $query_k = mysqli_query($koneksi, $sql_k);
                  while($data_k = mysqli_fetch_row($query_k)){
                  $id_kat = $data_k[0];
                  $kat = $data_k[1];
                  ?>
                  <option value="<?php echo $id_kat;?>"><?php echo $kat;?></option>
                <?php }?>
                    </select>
              </div>
            </div>
            <hr>
            <button class="btn btn-primary" type="submit">Simpan</button>
            <button class="btn btn-theme"><a href="index.php?include=portfolio">Kembali</a></button>

            </div>
            </form>
            </div>
  </div>
  </div>

        <!-- /row -->
    <!--main content end-->
    <?php include("includes/footer.php") ?> 
    <?php include("includes/script.php") ?> 