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
                <div class="col-md-8"><h4><i class="fa fa-angle-right"></i>Formulir Tambah Admin</h4>
            <br>
            <form class="cmxform form-horizontal style-form" id="commentForm" enctype="multipart/form-data" method="post" action="index.php?include=konfirmasi-tambah-user" >
            <div class="col-lg-10">
                <label >Foto Profile</label><br>
              <input type="file" name="foto" id="foto">
            </div><br>
                    <label for="edit_user" class="control-label col-lg-2">Nama</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="nama" name="nama" minlength="1" type="text" value="" required />
                    </div>
                    <br>
                    <label for="edit_user" class="control-label col-lg-2">Email</label>
                    <div class="col-lg-10">
                      <input class=" form-control" id="email" name="email" minlength="1" type="text" value="" required />
                    </div>
                    <label for="edit_user" class="control-label col-lg-2">Username</label>
                                    <div class="col-lg-10">
                                        <input class="form-control" name="username" id="username" minlength="1" type="text" value="" required />
                                    </div>
                                    <label for="edit_user" class="control-label col-lg-2">Password</label>
                                    <div class="col-lg-10">
                                    <input class="form-control" name="password" id="password" minlength="1" type="text" value="" required />
                                    </div>
                                    <label for="edit_user" class="control-label col-lg-2">Level</label>
                                    <div class="col-sm-7">
                                        <select class="form-control" id="level" name="level">
                                            <option> Superadmin</option>
                                            <option> Admin</option>
                                        </select>
                                    </div>
                      </div>


                  <div class="form-group">
                    <div class="col-lg-offset-2 col-lg-10">
                      <button class="btn btn-theme" type="submit" name="tambah">Tambah</button>
                      <button class="btn btn-theme04"><a href="index.php?include=user">Kembali</a></button>
                    </div>
                  </div>
                </form>
            </div>

            </div>
  </div>
  </div>

        <!-- /row -->
    <!--main content end-->
    <?php include("includes/footer.php") ?> 
    <?php include("includes/script.php") ?> 