<section>
        <div class="container mx-auto">
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
                    <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2 dark:text-gray-400">Semua Artikel</span>
                </div>
                </li>
            </ol>
            </nav>
            <div class="flex flex-col md:flex-row mt-5 mb-[75px]">
            <?php 
                    $sql_l = "SELECT * FROM `artikel` ";

                    $sql_l .= " order by `terbit` desc limit 1";
                    $query_l = mysqli_query($koneksi,$sql_l); 
                    while($data_l = mysqli_fetch_row($query_l)){ 
                    $id = $data_l[0]; 
                    $judul = $data_l[1]; 
                    $isi_artikel = $data_l[2];
                    $gambar = $data_l[3];
                    $kategori_artikel = $data_l[4];
                    $terbit = $data_l[5];
            ?>
                <div class="max-w-full md:w-[50%] h-fit md:h-[392px] bg-cover">
                    <img class="h-fit md:h-[392px]" src="./Admin/gmbr/<?php echo $gambar;?>" alt="" srcset="">
                </div class="">
                <div class="w-full px-[10%] text-left md:px-[5%] py-7 md:py-[2.5%] bg-[#ffe13e] text-[#404040]">
                    <h1 class="text-2xl md:text-4xl font-extrabold mb-7 md:py-7 text-center md:text-left">
                        <?php echo $judul; ?>
                    </h1>
                    <p class="">
                        <span class="md:text-left text-justify"><?php echo substr($isi_artikel,0,200). '...';?></span>
                    </p>
                    <a href="index.php?include=detail-artikel&data=<?php echo $id;?>">
                        <button class="w-full md:w-fit mt-7 py-1 px-7 border-2 border-[#404040] font-bold">Baca</button>
                    </a>
                </div>
            </div>
            <?php }?>

            <div class="flex flex-col md:flex-row gap-8">
                <div class="md:w-[30%] w-[80%] mx-[10%] md:mx-0 text-center md:text-left pr-3">
                    <h1 class="text-2xl font-bold">Artikel</h1>
                    <div class="mx-auto md:mx-0 w-[80px] h-[3px] bg-[#8d8d99] rounded-sm mb-3"></div>
                    <p>Informasi dan Artikel seputar desain dan lainnya dapat anda temukan disini. update terbaru dan populer</p>
                </div>
                <div class="md:w-full w-[80%] mx-[10%] md:mx-0">
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-[30px]">
                <?php 
                    $sql_l = "SELECT * FROM `artikel` ";

                    $sql_l .= " order by `terbit`";
                    $query_l = mysqli_query($koneksi,$sql_l); 
                    while($data_l = mysqli_fetch_row($query_l)){ 
                    $id = $data_l[0]; 
                    $judul = $data_l[1]; 
                    $isi_artikel = $data_l[2];
                    $gambar = $data_l[3];
                    $kategori_artikel = $data_l[4];
                    $terbit = $data_l[5];
            ?>
                    <a href="index.php?include=detail-artikel&data=<?php echo $id;?>">
                        <div class="grid-item">
                            <div class="w-full h-fit pb-5 bg-white hover:shadow-2xl">
                                <div class="relative w-full h-[165px]">
                                    <img class="w-full h-[165px] object-cover rounded-t-lg" src="./Admin/gmbr/<?php echo $gambar;?>" alt="Artikel">
                                </div>
                                <div class="mx-[15px] pt-5">
                                    <div class="text-xl font-bold mb-2"><?php echo substr($judul,0,20).'...';?></div>
                                    <p class="text-base text-[#404040] mb-1">
                                        <?php echo substr($isi_artikel,0,80). '...';?>
                                    </p>
                                    <hr>
                                    <button class="mt-5 w-full p-4 bg-[#ffe13e] hover:bg-[#ffe23eaa] text-[#404040] hover:font-semibold rounded-md"> Baca <span>&rarr;</span></button>
                                </div>
                            </div>
                        </div>
                    </a>
                    <?php } ?>
            </div>
                </div>
            </div>

<hr>
        </div>
    </section>
