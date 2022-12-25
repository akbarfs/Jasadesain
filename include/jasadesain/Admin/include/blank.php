<body>
  <section id="container">
    <!-- **********************************************************************************************************************************************************
        TOP BAR CONTENT & NOTIFICATIONS
        *********************************************************************************************************************************************************** -->
        <?php include("includes/header.php") ?> 
        <?php include("includes/sidebar.php") ?> 
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
      <section class="wrapper">
        <div class="row mt">
          <div class="col-lg-12">
            <div class="content-panel">
                <div class="col-md-8"><h4><i class="fa fa-angle-right"></i> List Paket Layanan</h4></div>
                <div class="col">
                </div>
                <div class="col"><a href="index.php?include=tambah-paket-layanan">
                    <button class="btn btn-primary" ><i class="nc-icon nc-simple-add"></i> Tambah</button></a>
                </div>
            <br>
              <div class="col-sm-12">
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
                </div>
              <section id="unseen">
                <table class="table table-responsive table-bordered table-striped table-condensed">
                  <thead class=" text-primary">
                    <tr>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                </table>
            </div>
            <!-- /content-panel -->
          </div>
          <!-- /col-lg-4 -->
        </div>
        <!-- /row -->
    <!--main content end-->
    <?php include("includes/footer.php") ?> 
    <?php include("includes/script.php") ?> 

</body>

</html>


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
                <div class="col-md-8"><h4><i class="fa fa-angle-right"></i>Formulir Profile</h4>
            <br>
            <form class="cmxform form-horizontal style-form" id="commentForm" enctype="multipart/form-data" method="post" action="index.php?include=konfirmasi-edit-profile" >
            <div class="col-md-14">
            <?php if((!empty($_GET['notif']))&&(!empty($_GET['jenis']))){?>
            <?php if($_GET['notif']=="editkosong"){?>
                <div class="alert alert-danger" role="alert">Maaf data 
                <?php echo $_GET['jenis'];?> wajib di isi</div>
            <?php }?>
            <?php }?>
              <div class="form-group ">
                  <label class="control-label col-md-3">Foto Profile</label>
              </div>
              <input class="form-control" type="file" id="foto" name="foto" style="margin-bottom:10px;">
              <div class="form-group">
                <label >Nama</label>
                <input type="text" class="form-control" name="nama" id="nama" value="<?php echo $nama;?>" require/>
              </div>
              <div class="form-group">
                <label >Username</label>
                <input type="text" class="form-control" name="username" id="username" value="<?php echo $username;?>" require/>
              </div>
              <div class="form-group">
                <label >Email</label>
                <input type="email" class="form-control" name="email" id="email" value="<?php echo $email;?>" require/>
              </div>
              <div class="form-group">
                <label >Password</label>
                <input type="password" class="form-control" name="password" id="password" />
              </div>

            <button class="btn btn-primary" type="submit">Simpan</button>
            <button class="btn btn-theme"><a href="index.php?include=profile">Kembali</a></button>

            </div>
            </form>
            </div>
  </div>
  </div>

        <!-- /row -->
    <!--main content end-->
    <?php include("includes/footer.php") ?> 
    <?php include("includes/script.php") ?> 