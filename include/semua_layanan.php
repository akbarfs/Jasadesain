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
                <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2 dark:text-gray-400">Semua Layanan</span>
            </div>
            </li>
        </ol>
        </nav>
            <h1 class="text-4xl text-[#f4d320] text-center font-extrabold uppercase my-[20px]">Semua Layanan Kami</h1>
            <div class="w-[80px] h-[3px] mx-auto bg-[#8d8d99] rounded-sm mb-[30px]"></div>
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-[30px]">
                <?php 
                    $sql_l = "SELECT `id`,`judul`,`deskripsi`,`gambar` FROM `layanan` ";

                    $sql_l .= " order by `judul`";
                    $query_l = mysqli_query($koneksi,$sql_l); 
                    while($data_l = mysqli_fetch_row($query_l)){ 
                    $id = $data_l[0]; 
                    $judul = $data_l[1]; 
                    $deskripsi = $data_l[2];
                    $gambar = $data_l[3];
            ?>
                    <a href="index.php?include=detail-paket&data=<?php echo $id;?>">
                        <div class="grid-item border-2 border-[#ffe13e] hover:border-[#187cff]">
                            <div class="w-full h-fit pb-5 bg-white hover:shadow-2xl">
                                <div class="relative w-full h-[165px]">
                                    <img class="w-full h-[165px] object-cover rounded-t-lg" src="./Admin/gmbr/<?php echo $gambar;?>" alt="layanan">
                                    <div class="absolute bottom-0 w-fit h-fit px-4 py-[6px] rounded-tr-[20px] bg-[#187CFF] text-xl text-white font-bold"><?php echo $judul;?></div>
                                </div>
                                <div class="mx-[15px] pt-5">
                                    <p class="text-base text-[#404040] mb-1">
                                        <?php echo $deskripsi;?>
                                    </p>
                                    <hr>
                                    <button class="mt-5 w-full p-4 bg-[#ffe13e] hover:border hover:border-[#187cff] hover:bg-transparent text-[#404040] hover:text-[#187cff] hover:font-semibold rounded-md"> Pilih Paket <i class="fa fa-angle-double-right" aria-hidden="true"></i></button>
                                </div>
                            </div>
                        </div>
                    </a>
                    <?php } ?>
            </div>
            <div style="margin-top:40px;" class="single shot-thumbnail custom">
                <div style="width:100%;height:fit-content;background:#187cff;color:#ffffff;padding:40px;text-align:center;">  
                    <h2 style="font-size:24px;font-weight:800;margin-bottom:12px;">Desain Custom Sesuai Permintaan</h2>
                    <p class="custom-p">
                        Sihlakan menyampaikan desain apapun yang tidak terdapat dalam daftar list, Untuk harga dapat dikonsultasikan sesuai dengan jenis desain.
                    </p>
                    <button style="margin-top:12px;width:180px;height:42px;background:#ffe13e;color:#404040;font-weight:500;">
                        <a href="https://wa.me/6289636849242/?text=*Hallo%20Jasa%20Desain.co.id%20!!*%0A%0ASaya%20tertarik%20memesan%20*Desain%20Custom%20*">Hubungi Kami</a>
                    </button>
                </div>
            </div>

    </section>
    </div>
