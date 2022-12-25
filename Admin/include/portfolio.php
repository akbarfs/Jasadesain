<?php 
    if((isset($_GET['aksi']))&&(isset($_GET['data']))){
      if($_GET['aksi']=='hapus'){
        $id = $_GET['data'];

    $sql_dh = "delete from `portfolio` 
    where `id` = '$id'";
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
                <div class="col-md-8"><h4><i class="fa fa-angle-right"></i> List Portfolio</h4></div>
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
                <div class="col"><a href="index.php?include=tambah-portfolio">
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
                      <th width="25%">Judul</th>
                      <th width="25%">Kategori</th>
                      <th width="30%"><center>Aksi</center></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $batas = 5;

                    $sql_k = "SELECT `p`.`id`, `p`.`judul`,  
                    `k`.`kategori` FROM `portfolio` `p` 
                    INNER JOIN `kategori` `k` ON `p`.`id_kategori` =   `k`.`id` "; 

                    $sql_k .= " ORDER BY `id_kategori`";                    
                    $query_k = mysqli_query($koneksi,$sql_k);
                    $no = 1;
                    while($data_k = mysqli_fetch_row($query_k)){
                    $id = $data_k[0];
                    $judul = $data_k[1];
                    $kategori = $data_k[2];
                    ?>

                    <tr>
                    <td><?php echo $no;?></td>
                      <td><?php echo $judul;?></td>
                      <td><?php echo $kategori;?></td>
                      <td align="center">
                      <a href="index.php?include=detail-portfolio&data=<?php echo $id;?>" 
                      class="btn btn-xs btn-info"><i class="nc-icon nc-alert-circle-i"></i></a>
                      <a href="index.php?include=edit-portfolio&data=<?php echo $id;?>" 
                      class="btn btn-xs btn-info"><i class="nc-icon nc-settings-gear-65"></i></a>
                      <a href="javascript:if(confirm('Apakah Anda yakin ingin menghapus data 
                      <?php echo $judul; ?>?'))window.location.href = 
                      'index.php?include=portfolio&aksi=hapus&data=<?php echo 
                      $id;?>&notif=hapusberhasil'" 
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
  </div>

        <!-- /row -->
    <!--main content end-->
    <?php include("includes/footer.php") ?> 
    <?php include("includes/script.php") ?> 
