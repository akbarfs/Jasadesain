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
                <div class="col-md-8"><h4><i class="fa fa-angle-right"></i>Formulir Tambah Layanan</h4>
            <br>
            <form class="cmxform form-horizontal style-form" id="commentForm" enctype="multipart/form-data" method="post" action="index.php?include=konfirmasi-tambah-layanan" >
            <div class="col-md-14">
                <label >Cover</label><br>
              <input type="file" name="gambar" id="gambar">
            </div><br>
            <div class="col-md-14">
              <div class="form-group">
                <label >Judul</label>
                <input type="text" class="form-control" name="judul" id="judul" placeholder="Masukkan Judul Layanan" require/>
              </div>
            </div>
            <div class="col-md-14">
              <div class="form-group">
                <label >Deskripsi</label>
                <textarea class="form-control" name="deskripsi" id="editor1" cols="30" rows="30" placeholder="Masukkan deskripsi singkat tentang layanan"></textarea>
              </div>
            </div><hr>
            <button class="btn btn-primary" type="submit">Simpan</button>
            <button class="btn btn-theme"><a href="index.php?include=layanan">Kembali</a></button>

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