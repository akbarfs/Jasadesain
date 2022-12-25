<style>
.custom-p{
    margin-left:25%;
    margin-right:25%;
}
@media screen and (max-width:780px) {
    .custom-p{
        margin-left:0;
        margin-right:0;
    }
}
</style>

<div class="container mx-auto">
<section class="w-[80%] mx-[10%] md:w-full md:mx-0">
<nav class="mt-[110px] flex px-5 py-3 text-gray-700 border border-gray-200 rounded-lg bg-gray-50 dark:bg-gray-800 dark:border-gray-700" aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1 md:space-x-3">
            <li class="inline-flex items-center">
            <a href="index.php" class="inline-flex items-center text-sm font-medium text-[#f4d320] hover:text-gray-900 dark:text-gray-400 dark:hover:text-white">
                <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path></svg>
                Home
            </a>
            </li>
            <li aria-current="page">
            <div class="flex items-center">
                <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2 dark:text-gray-400">Semua Portofolio</span>
            </div>
            </li>
        </ol>
        </nav>
            <h1 class="text-4xl text-[#f4d320] text-center font-extrabold uppercase my-[20px]">Semua Portofolio</h1>
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

                        <a href="javascript:void(0)" data-filter="custom" class="button">Custom</a>
                    </div>
                </div>
            </div>
            <div class="main-wrap wrap-inner">
                <div id="content">
                    <div class="main-full" id="main">
                        <ol class="content">
                        <?php 
                        $sql_p = "SELECT `p`.`judul`, `p`.`gambar`,  
                        `k`.`kategori` FROM `portfolio` `p` 
                        INNER JOIN `kategori` `k` ON `p`.`id_kategori` =   `k`.`id`";

                        $sql_p .= " order by rand() ";
                        $query_p = mysqli_query($koneksi,$sql_p); 
                        while($data_p = mysqli_fetch_row($query_p)){ 
                        $judul = $data_p[0]; 
                        $gambar = $data_p[1];
                        $kategori = $data_p[2];
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
                        <div style="display:none;" class="single shot-thumbnail custom">
                            <div style="width:100%;height:fit-content;background:#187cff;color:#ffffff;padding:40px;text-align:center;">  
                                <h2 style="font-size:24px;font-weight:800;margin-bottom:12px;">Desain Custom Sesuai Permintaan</h2>
                                <p class="custom-p">
                                    Desain custom adalah layanan desain apa saja yang bersifat custom sesuai permintaan, Sihlakan ajukan Kebutuhan kamu!
                                </p>
                                <button style="margin-top:12px;width:180px;height:42px;background:#ffe13e;color:#404040;font-weight:500;">
                                    <a href="https://wa.me/6289636849242/?text=*Hallo%20Jasa%20Desain.co.id%20!!*%0A%0ASaya%20tertarik%20memesan%20*Desain%20Custom%20*">Hubungi Kami</a>
                                </button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
    </section>
    </div>
