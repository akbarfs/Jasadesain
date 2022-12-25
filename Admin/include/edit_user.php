<?php
if (isset($_GET['data'])) {
    $id_user = $_GET['data'];
    $_SESSION['user'] = $id_user;
    $sql_d = "SELECT * from `user` where `id_user` = '$id_user'";
    $query_d = mysqli_query($koneksi, $sql_d);
    while ($data = mysqli_fetch_array($query_d)) {
        //$id_user = $data['id_user'];
        $nama = $data['nama'];
        $email = $data['email'];
        $username = $data['username'];
        $password = $data['password'];
        $level = $data['level'];
        $Foto = $data['foto'];
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
                <div class="col-md-8"><h4><i class="fa fa-angle-right"></i>Formulir Edit Admin</h4>
            <br>
            <form class="cmxform form-horizontal style-form" id="commentForm" enctype="multipart/form-data" method="post" action="index.php?include=konfirmasi-edit-user" >
            <div class="col-md-14">
            <?php if((!empty($_GET['notif']))&&(!empty($_GET['jenis']))){?>
            <?php if($_GET['notif']=="editkosong"){?>
                <div class="alert alert-danger" role="alert">Maaf data 
                <?php echo $_GET['jenis'];?> wajib di isi</div>
            <?php }?>
            <?php }?>
              <div class="form-group ">
                  <label class="control-label col-md-3">Foto Profile</label>
              </div><br>
              <input type="file" id="foto" name="foto" ><hr>
              <div class="form-group">
                <label >nama</label>
                <input type="text" class="form-control" name="nama" id="nama" value="<?php echo $nama;?>" require/>
              </div>
            </div>
            <div class="form-group">
                <label >email</label>
                <input type="email" class="form-control" name="email" id="email" value="<?php echo $email;?>" require/>
              </div>
              <div class="form-group">
                <label >username</label>
                <input type="text" class="form-control" name="username" id="username" value="<?php echo $username;?>" require/>
              </div>
              <div class="form-group">
                <label >password baru (opsional)</label>
                <input type="password" class="form-control" name="password" id="password" />
              </div>
              <label for="edit_user" class="font-group">Level</label>
                                        <select class="form-control" id="level" name="level">
                                            <option value="Superadmin" <?php if ($level == "Superadmin") {
                                                                            echo "selected";
                                                                        } ?>>Superadmin</option>
                                            <option value="Admin" <?php if ($level == "Admin") {
                                                                        echo "selected";
                                                                    } ?>>Admin</option>
                                        </select>
                                                                </div>

            <hr>
            <button class="btn btn-primary" type="submit">Simpan</button>
            <button class="btn btn-theme"><a href="index.php?include=user">Kembali</a></button>

            </div>
            </form>
            </div>
  </div>
  </div>

        <!-- /row -->
    <!--main content end-->
    <?php include("includes/footer.php") ?> 
    <?php include("includes/script.php") ?> 
