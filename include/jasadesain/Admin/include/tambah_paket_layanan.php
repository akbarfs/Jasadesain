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
                <div class="col-md-8"><h4><i class="fa fa-angle-right"></i>Formulir Tambah Paket Layanan</h4>
            <br>
            <form class="cmxform form-horizontal style-form" id="commentForm" enctype="multipart/form-data" method="post" action="index.php?include=konfirmasi-tambah-paket-layanan" >
            <div class="col-md-14">
              <div class="form-group">
                <label >Nama</label>
                <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan Nama Paket" require/>
              </div>
            </div>
            <div class="col-md-14">
                <label for="">Layanan</label>
            <div class="form-group ">
                  <select class="form-control" id="layanan" name="layanan">
                    <option value="0">- Pilih Layanan -</option>
                    <?php 
                  $sql_k = "SELECT `id`,`judul` FROM 
                  `layanan` ORDER BY `judul`";
                  $query_k = mysqli_query($koneksi, $sql_k);
                  while($data_k = mysqli_fetch_row($query_k)){
                  $id_lay = $data_k[0];
                  $lay = $data_k[1];
                  ?>
                  <option value="<?php echo $id_lay;?>"><?php echo $lay;?></option>
                <?php }?>
                    </select>
                    </div>
            </div>
            <div class="col-md-14">
              <div class="form-group">
                <label >Harga</label>
                <input type="text" class="form-control" name="harga" id="harga" placeholder="Masukkan Harga" require/>
              </div>
            </div>
            <div class="col-md-14">
              <div class="form-group">
                <label >Deskripsi</label>
                <textarea class="form-control" name="keterangan" id="editor1" cols="30" rows="30" placeholder="Masukkan deskripsi tentang paket layanan"></textarea>
              </div>
            </div><hr>
            <button class="btn btn-primary" type="submit">Simpan</button>
            <button class="btn btn-theme"><a href="index.php?include=paket-layanan">Kembali</a></button>

            </div>
            </form>

            </div>
  </div>
  </div>

        <!-- /row -->
    <!--main content end-->
    <?php include("includes/footer.php") ?> 
    <?php include("includes/script.php") ?> 