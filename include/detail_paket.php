<?php 
    if(isset($_GET['data'])){
    $id_layanan = $_GET['data'];
                    
    $sql_l = "SELECT `layanan`.`judul` FROM `paket` INNER JOIN `layanan` ON `paket`.`id_layanan` = `layanan`.`id` WHERE `paket`.`id_layanan`='$id_layanan'";
    $query_l = mysqli_query($koneksi,$sql_l); 
    while($data_l = mysqli_fetch_row($query_l)){ 
    $id_layanan = $data_l[0]; 
    }
?>
<section class="relative w-full px-[5%] sm:px-[127px] py-8">
        <div class="container mx-auto">
            <nav class="mt-[110px] flex px-5 py-3 text-gray-700 border border-gray-200 rounded-lg bg-gray-50 dark:bg-gray-800 dark:border-gray-700" aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1 md:space-x-3">
            <li class="inline-flex items-center home">
            <a href="index.php" class="inline-flex items-center text-sm font-medium text-[#f4d320] hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
                <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path></svg>
                Home
            </a>
            </li>
            <li aria-current="page">
            <div class="flex items-center">
                <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                <a href="index.php?include=semua-layanan"><span class="ml-1 text-sm font-medium text-gray-500 md:ml-2 dark:text-gray-400">Semua Layanan</span>
            </a>
            </div>
            </li>
            <li aria-current="page">
            <div class="flex items-center">
                <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2 dark:text-gray-400">Layanan Desain <?php echo $id_layanan;?></span>
            </div>
            </li>
        </ol>
        </nav>

                <h1 class="text-4xl text-[#f4d320] text-center font-extrabold uppercase my-[20px] judul-layanan" title="<?php echo $id_layanan;?>">JASA DESAIN <?php echo $id_layanan;?></h1>
                <?php }?>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-[20px]">
                <?php 
                    if(isset($_GET['data'])){
                    $id_layanan = $_GET['data'];
                                    
                    $sql_l = "SELECT `nama`,`layanan`.`judul`,`keterangan`,`harga` FROM `paket` INNER JOIN `layanan` ON `paket`.`id_layanan` = `layanan`.`id` WHERE `paket`.`id_layanan`='$id_layanan' ORDER BY `paket`.`id`";
                    $query_l = mysqli_query($koneksi,$sql_l); 
                    while($data_l = mysqli_fetch_row($query_l)){ 
                    $nama = $data_l[0]; 
                    $id_layanan = $data_l[1]; 
                    $keterangan = $data_l[2];
                    $harga = $data_l[3];
                ?>
                    <a href="https://wa.me/6289636849242/?text=*Hallo%20Jasa%20Desain.co.id%20!!*%0A%0ASaya%20tertarik%20memesan%20*Desain%20<?php echo $id_layanan;?>%20<?php echo $nama;?>%20*" style="text-decoration:none;">
                    <div class="grid-item mb-[30px] border-2 border-[#ffe13e]">
                        <div class="relative py-[25px] px-[25px]">
                        <div class="corner-ribbon top-right absolute blue shadow-sm border-4 border-[#fff]"><?php echo $harga;?></div>
                            <div class="card-content">
                                <h3 class="text-xl font-extrabold mb-2"><?php echo $nama;?></h3>
                                <div class="w-[80px] h-[3px] bg-[#8d8d99] rounded-sm"></div>
                                <div class="ket-li w-full border-[0.5px] border-x-0 border-t-0 border-[#8d8d99] py-3">
                                <p class="w-[250px] text-[#337ab7]"><?php echo $keterangan;?></p>
                                </div>
                                <button class="w-full py-3 rounded-md mt-3 font-semibold text-center bg-[#ffec13] hover:bg-[#fff] hover:border">Pilih</button>
                            </div>
                        </div>
                    </div>
                    </a>
                    <?php }} ?>
                </div>
                <hr>
                <br>
                <p class="font-bold ml-[10px]">Ketentuan :</p>
                <p class="mx-[10px]"">1. Revisi dapat dilakukan dengan syarat tidak merubah konsep awal yang diajukan</p>
                <p class="mx-[10px]">2. Apabila revisi berbeda dengan konsep yang diajukan diawal maka terhitung desain baru</p>
            </div>
            <br>
            <div class="main-wrap wrap-inner">
                <div id="content">
                    <div class="main-full" id="main">
                        <ol class="content">

                        <?php 
                        $sql_p = "SELECT `p`.`judul`, `p`.`gambar`,  
                        `k`.`kategori` FROM `portfolio` `p` 
                        INNER JOIN `kategori` `k` ON `p`.`id_kategori` =   `k`.`id` ";

                        $sql_p .= " order by `judul` ";
                        $query_p = mysqli_query($koneksi,$sql_p); 
                        while($data_p = mysqli_fetch_row($query_p)){ 
                        $judul = $data_p[0]; 
                        $gambar = $data_p[1];
                        $kategori = $data_p[2];
                        ?>

                            <li class="team shot-thumbnail-l <?php echo $kategori;?> kat-p" kategori="<?php echo $kategori;?>">
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
    </section>
