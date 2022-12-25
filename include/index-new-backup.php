<section id="banner">

    	<div class="container">

    		<div class="row">

            	<div class="col-lg-12">

                    <h1 style="margin-top:150px;font-weight: 600;">Jasa <span style="color:#ffe13e;">Desain<span>.co.id</h1>

                    <p style="font-size: medium;margin:0 50px;text-align:justify;" >Jasa desain.co.id merupakan Platform Layanan Design bergerak di industri digital design & creative. Berdiri sejak 09 Mei 2019 dan sudah berkerjasama dengan ratusan company, organisasi dan komunitas.</p>

                    <img  class="hero-img" style="width:200px;margin-top:10px;" src="images/logo (2).png" alt=""/>

                    <form class="clearfix">

                    	<input type="text" id="jasa" pattern="[A-Za-z]" style="pointer-events: none;" placeholder="Pilih Layanan"/>

                    <select name="" id="pilihjasalayanan" >

                    <option value="semua-layanan">Pilih Jasa Desain</option>



                    <?php 

                    $sql_l = "SELECT `id`,`judul` FROM `layanan` ";



                    $sql_l .= " order by `judul` ";

                    $query_l = mysqli_query($koneksi,$sql_l); 

                    while($data_l = mysqli_fetch_row($query_l)){ 

                    $id = $data_l[0]; 

                    $judul = $data_l[1]; 

            ?>

                        <option value="<?php echo $id;?>">Jasa Desain <?php echo $judul;?></option><?php }?>

                    </select><a id="link" href="#" class="send">Pilih Paket</a>

                    </form>

                    <p class="motto">Pelayanan cepat</p> . <p class="motto">Sesuai request</p> . <p class="motto">Harga terjangkau</p><br>

                </div>

             </div>

       </div>

       <div class="wave"></div>

    </section>



    <section id="fetures">

    	<div class="container">

    		<div class="row">

            	<div class="col-lg-12">

                	<h2>MENGAPA MEMILIH KAMI?</h2>

                    <p class="top">Alasan Memilih Jasa Desain.co.id</p>

                </div>

                <?php 

                    $sql_k = "SELECT `id`,`judul`,`isi`,`gambar` FROM `konten`";



                    $sql_k .= " order by `id` ";

                    $query_k = mysqli_query($koneksi,$sql_k); 

                    while($data_k = mysqli_fetch_row($query_k)){ 

                    $id = $data_k[0]; 

                    $judul = $data_k[1]; 

                    $isi = $data_k[2];

                    $gambar = $data_k[3];

            ?>



            	<div class="col-lg-2 col-md-2 col-sm-2">

                	<figure>

                    	<img src="./Admin/gmbr/<?php echo $gambar;?>" alt="" />

                        <figcaption>

                        	<span class="line"></span>

                            <h3><?php echo $judul;?></h3>

                            <p><?php echo $isi;?></p>

                        </figcaption>

                    </figure>

                </div>

                <?php }?>

        </div>

    </div>

    </section>



    <section id="layanan">

        <div class="container">

            <div class="row">

                <h1 class="judul-layanan">Layanan Kami</h1>

                <span class="garis"></span>

                <div class="grid">

                <?php 

                    $sql_l = "SELECT `id`,`judul`,`deskripsi`,`gambar` FROM `layanan` ";



                    $sql_l .= " order by `judul` desc limit 6";

                    $query_l = mysqli_query($koneksi,$sql_l); 

                    while($data_l = mysqli_fetch_row($query_l)){ 

                    $id = $data_l[0]; 

                    $judul = $data_l[1]; 

                    $deskripsi = $data_l[2];

                    $gambar = $data_l[3];

            ?>

                    <a href="index.php?include=detail-paket&data=<?php echo $id;?>" style="text-decoration:none;">

                    <div class="grid-item">

                        <div class="card">

                            <img class="card-img" src="./Admin/gmbr/<?php echo $gambar;?>" alt="1">

                            <div class="card-content">

                                <h1 class="card-header"><?php echo $judul;?></h1>

                                <p class="card-text">

                                    <?php echo $deskripsi;?>

                                </p>

                                <button class="card-btn"> Pilih Paket <span>&rarr;</span></button>

                            </div>

                        </div>

                    </div>

                    </a>

                    <?php } ?>

                </div>

                <div class="all-layanan col-md-12 center"><a href="index.php?include=semua-layanan"><span>Lihat Semua Layanan</span></a></div>

            </div>

        </div>

    </section>



    <!-- Filter Gallery -->

    <section id="portfolio"> 

        <h1 class="portfolio-header">Recent Portfolio</h1>

        <span class="line"></span>

    <div class="container-fluid filterbox">

        <div class="filter-tabs">

            <div class="filter-sort">

                <div class="navigation">

                    <a href="javascript:void(0)" data-filter="all" class="button active">All</a>

                    <?php

                        $sql_k = "SELECT `id`,`kategori` FROM `kategori` ";

                        $sql_k .= " ORDER BY `kategori` ";

                        $query_k = mysqli_query($koneksi,$sql_k);

                            while($data_k = mysqli_fetch_row($query_k)){

                                $id = $data_k[0];

                                $kategori = $data_k[1];

                    ?>

                    <a href="javascript:void(0)" data-filter="<?php echo $kategori;?>" class="button"><?php echo $kategori;?></a>

                    <?php } ?>

                </div>

            </div>

        </div>

        <div class="main-wrap wrap-inner">

            <div id="content">

                <div class="main-full" id="main">

                    <ol class="content">

                    <?php 

                    $sql_p = "SELECT `p`.`id`, `p`.`judul`, `p`.`gambar`,  

                    `k`.`kategori` FROM `portfolio` `p` 

                    INNER JOIN `kategori` `k` ON `p`.`id_kategori` =   `k`.`id`";



                    $sql_p .= " order by `judul` ";

                    $query_p = mysqli_query($koneksi,$sql_p); 

                    $no = 1; 

                    while($data_p = mysqli_fetch_row($query_p)){ 

                    $id = $data_p[0]; 

                    $judul = $data_p[1]; 

                    $gambar = $data_p[2];

                    $kategori = $data_p[3];

            ?>



                        <li class="team shot-thumbnail <?php echo $kategori;?>">

                          <div class="multi-shot">  

                                <div class="dribbble-img">

                                    <div class="dribbble-link">

                                        <picture> 

                                            <img alt="images-1" src="./Admin/gmbr/portfolio/<?php echo $gambar;?>" />

                                        </picture>

                                    </div>

                                    <div class="dribbble-over" href="#" data-lightbox="mygallery" data-title="Dribbble">

                                      <strong class="hover-text"><?php echo $judul;?></strong>

                                    </div>

                                </div>   

                            </div>  

                        </li>

                        <?php } ?>

                    </ol>

                </div>

            </div>

        </div>

    </div>    

    <br><br>

    </section>



    <div id="pricing">

    	<div class="container">

    		<div class="row">

            	<div class="col-lg-7 col-lg-offset-2 col-lg-pull-1 col-sm-8 col-md-8">

                	<h2>Lagi Nyari Jasa Desain?</h2>

                        <a href="http://instagram.com/jasadesain.co.id?igshid=YmMyMTA2M2Y="><img style="width:20px;height:20px;" src="./icons/Ig.png"/></a>

                        <a href="https://wa.me/6289636849242"><img style="width:20px;height:20px;" src="./icons/Wa.png"/></a>

                        <a href="mailto:Jasadesainapapun@gmail.com"><img style="width:20px;height:20px;" src="./icons/email.png"/></a>

                </div>

                

                <div class="col-lg-3 col-sm-4 col-md-4">

                	<button href="https://wa.me/6289636849242">Hubungi kami</button>

                </div>

            

            </div>

    	</div>

    </div>



    <section id="client">

    	<div class="topsec">

        <div class="container">

    		<div class="row">

            	<div class="col-lg-4">

                	<h2>Apa Kata Mereka?</h2>

                </div>

            </div>

        </div>

        <div class="bottomsec">

        	<div class="container">

            	<div class="row">

                <?php 

                    $sql_t = "SELECT `id`,`nama`,`gambar`,`testimoni` FROM `testimoni`";



                    $sql_t .= " order by `id` ";

                    $query_t = mysqli_query($koneksi,$sql_t); 

                    while($data_t = mysqli_fetch_row($query_t)){ 

                    $id = $data_t[0]; 

                    $nama = $data_t[1]; 

                    $gambar = $data_t[2];

                    $testimoni = $data_t[3];

            ?>



                        <div class="col-lg-4 col-md-4 col-sm-4" style="margin-bottom:10%;">

                           <aside class="clearfix">

                                <p><?php echo $testimoni?></p>

                                <span><?php echo $nama?></span>

                                <img src="./Admin/gmbr/<?php echo $gambar;?>" alt=""/>

                           </aside>

                        </div>

                        <?php }?>



                   </div>

           		</div>

        </div>

    </section>