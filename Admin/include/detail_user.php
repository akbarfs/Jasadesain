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
                <div class="col-md-8"><h4><i class="fa fa-angle-right"></i>Tampilan data Admin</h4>
            <br>
            <section id="unseen">
                <table class="table table-bordered">
                  <thead class=" text-primary">
                  <tbody>                      
                      <tr>
                        <td><strong>Gambar<strong></td>
                        <td><img src="foto_profile/<?php echo $Foto;?>" class="img-fluid" width="200px;"></td>
                      </tr>               
                      <tr>
                        <td width="20%"><strong>Nama<strong></td>
                        <td width="80%"><?php echo $nama;?></td>
                      </tr>                 
                      <tr>
                        <td width="20%"><strong>Email<strong></td>
                        <td width="80%"><?php echo $email;?></td>
                      </tr>                 
                      <tr>
                        <td width="20%"><strong>Username<strong></td>
                        <td width="80%"><?php echo $username;?></td>
                      </tr>
                      <tr>
                        <td width="20%"><strong>Level<strong></td>
                        <td width="80%"><?php echo $level;?></td>
                      </tr>
                      <tr>
                    </tbody>
                </table>
                <button class="btn btn-theme"><a href="index.php?include=user">Kembali</a></button>
            </div>
            <!-- /content-panel -->
            </div>
  </div>
  </div>

        <!-- /row -->
    <!--main content end-->
    <?php include("includes/footer.php") ?> 
    <?php include("includes/script.php") ?> 
