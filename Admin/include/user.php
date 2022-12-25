<?php
if((isset($_GET['aksi']))&&(isset($_GET['data']))){
if($_GET['aksi']=='hapus'){
$id_user = $_GET['data'];
//hapus user
$sql_dh = "delete from `user`
where `id_user` = '$id_user' ";
mysqli_query($koneksi,$sql_dh);
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
                <div class="col-md-8"><h4><i class="fa fa-angle-right"></i> List Admin</h4></div>
                <div class="col">
                <!-- <form method="get" action="index.php?include=cari-kategori-portfolio">
                <div class="input-group no-border">
                    <input type="text" value="" class="form-control" placeholder="Search..." id="kata_kunci" name="katakunci">
                    <div class="input-group-append">
                        <div class="input-group-text">
                        <button type="submit" class="btn btn-primary nc-icon nc-zoom-split" title="Cari"></button>
                        </div>
                    </div>
                </div>
                </form> -->
                </div>
                <div class="col"><a href="index.php?include=tambah-user">
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
                      <th width="5%">No</th>
                      <th width="25%">Nama</th>
                      <th width="25%">Email</th>
                      <th width="25%">Role</th>
                      <th width="25%"><center>Aksi</center></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                $sql = "SELECT `id_user`, `nama`, `email`, `level` FROM `user` where `id_user` != '$id_user' ";
                $sql .= " ORDER BY `nama` ";
                $query_k = mysqli_query($koneksi,$sql);
                $no = 1;
                while($data_k = mysqli_fetch_row($query_k)){
                $user = $data_k[0];
                $nama = $data_k[1];
                $email = $data_k[2];
                $level = $data_k[3];
                ?>
                <tr>
                    <td><?php echo $no;?></td>
                      <td><?php echo $nama;?></td>
                      <td><?php echo $email;?></td>
                      <td><?php echo $level;?></td>
                      <td align="center">
                      <a href="index.php?include=detail-user&data=<?= $user;?>"
                     class="btn btn-xs btn-info"><i class="nc-icon nc-alert-circle-i"></i></a>
                      <a href="index.php?include=edit-user&data=<?= $user;?>" 
                      class="btn btn-xs btn-success"><i class="nc-icon nc-settings-gear-65"></i></a>
                      <a href="javascript:if(confirm('Anda yakin ingin menghapus data 
                      <?php echo $nama; ?>?'))window.location.href = 
                      'index.php?include=user&aksi=hapus&data=<?php echo 
                      $user;?>&notif=hapusberhasil'" 
                      class="btn btn-xs btn-warning"><i class="nc-icon nc-simple-remove"></i></a>
                      </td>
                    </tr>
                    <?php $no++;}?>
                  </tbody>
                </table>
            </div>
            <!-- /content-panel -->
  </div>
  </div>

        <!-- /row -->
    <!--main content end-->
    <?php include("includes/footer.php") ?> 
    <?php include("includes/script.php") ?> 
