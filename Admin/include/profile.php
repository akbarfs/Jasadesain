<body class="">
<?php include("includes/sidebar.php") ?>
<div id="page-content-wrapper" >
  <?php include("includes/header.php") ?>
      <div class="content" style="margin-left:5%;margin-right:5%;">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
            <div class="card card-user">
                  <section id="container">
                      <div class="image">
                        <img style="width:100%;object-fit:cover;" src="assets/img/profile-bg.jpg" alt="...">
                      </div>
                        <div class="author">
                          <a href="#">
                            <img class="avatar border-gray" src="./foto_profile/<?php echo $foto;?>" alt="...">
                          </a>
                        <div class="card card-body">
                        <div class="col-md-14">
                        <?php if(!empty($_GET['notif'])){
                        if($_GET['notif']=="editberhasil"){?>                    
                          <div class="alert alert-success">
                                  Data Berhasil Diubah</div> <?php }?>
                          </div>
                        <?php }?>

                          <table class="table">
                            <tr>
                              <td width="50%" style="text-align:left;"><strong>Nama</strong>  :</td>
                              <td width="50%" style="text-align:left"><?php echo $nama;?></td>
                            </tr>
                            <tr>
                              <td width="50%" style="text-align:left;" ><strong>Username</strong> :</td>
                              <td width="50%" style="text-align:left"><?php echo $username;?></td>
                            </tr>
                          </table>

                          <a href="index.php?include=edit-profile&data=<?php echo $id_user;?>"><button type="submit" class="btn btn-primary btn-round">Edit Profile</button></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
    </section>  
  </div>
  </div>

</body>

</html>
