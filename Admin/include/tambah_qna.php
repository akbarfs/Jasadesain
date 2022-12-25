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
                <div class="col-md-8"><h4><i class="fa fa-angle-right"></i>Formulir Tambah QnA</h4>
            <br>
            <form class="cmxform form-horizontal style-form" id="commentForm" enctype="multipart/form-data" method="post" action="index.php?include=konfirmasi-tambah-qna" >
            <div class="col-md-14">
              <div class="form-group">
                <label >Pertanyaan</label>
                <input type="text" class="form-control" name="tanya" id="tanya" placeholder="Masukkan Pertanyaan" require/>
              </div>
            </div>
            <div class="col-md-14">
              <div class="form-group">
                <label >Jawaban</label>
                <textarea class="form-control" name="jawab" id="editor1" cols="30" rows="30" placeholder="Masukkan Jawaban"></textarea>
              </div>
            </div><hr>
            <button class="btn btn-primary" type="submit">Simpan</button>
            <button class="btn btn-theme"><a href="index.php?include=qna">Kembali</a></button>

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
