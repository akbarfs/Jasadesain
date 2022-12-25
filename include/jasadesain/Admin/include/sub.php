<?php 
    if((isset($_GET['aksi']))&&(isset($_GET['data']))){
      if($_GET['aksi']=='hapus'){
        $id = $_GET['data'];

    $sql_dh = "delete from `sub` 
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
                <div class="col-md-8"><h4><i class="fa fa-angle-right"></i> List kontak pelanggan</h4></div>
                <div class="col">
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
                      <th width="50%">Kontak</th>
                      <th width="15%"><center>Hapus</center></th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $sql_k = "SELECT `id`,`email` 
                    FROM `sub` ";
                    $sql_k .= " ORDER BY `id` DESC";                    
                    $query_k = mysqli_query($koneksi,$sql_k);
                    $no = 1;
                    while($data_k = mysqli_fetch_row($query_k)){
                    $id = $data_k[0];
                    $email = $data_k[1];
                    ?>

                    <tr>
                    <td class="text-center"><?php echo $no;?></td>
                      <td><?php echo $email;?></td>
                      <td align="center">
                      <a href="javascript:if(confirm('Apakah Anda yakin ingin menghapus data 
                      <?php echo $email; ?>?'))window.location.href = 
                      'index.php?include=sub-portfolio&aksi=hapus&data=<?php echo 
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

        <!-- /row -->
    <!--main content end-->
    <?php include("includes/footer.php") ?> 
    <?php include("includes/script.php") ?> 
