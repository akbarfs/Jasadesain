
<section class="w-full bg-fixed bg-cover h-fit bg-[url('./images/banner.jpg')] bg-no-repeat -z-10">
    <div class="relative w-full h-fit">
    <div class="container mx-auto">
        <div class="md:w-full w-[80%] mx-[10%] md:mx-0">
        <div class="flex flex-col-reverse md:flex-row gap-6 md:gap-0 md::justify-between pt-[150px] md:pt-[200px] px-[3%] pb-[200px] md::px-[100px]">
            <div class="text-white">
            <h1 class="text-4xl leading-normal text-white font-extrabold md:text-left text-center md:w-[380px] mb-[20px]" >Lagi nyari Jasa Desain <span class="text-[#fde230]" id="text"></span></h1>
                <p class="w-full text-justify md:w-[500px] mb-1">Jasa desain.co.id merupakan Platform Layanan Design bergerak di industri digital design & creative. Berdiri sejak 09 Mei 2019 dan sudah berkerjasama dengan ratusan company, organisasi dan komunitas.</p>
                <div class="flex flex-col md:flex-row gap-[15px] mt-[20px] p-5 font-medium bg-slate-50 bg-opacity-25 w-full md:w-fit">
                    <a href="index.php?include=semua-layanan"><button class="w-full md:w-fit h-fit py-[9px] px-[16px] bg-[#ffe13e] border-2 border-[#ffe13e] text-[#404040] hover:text-white hover:bg-transparent hover:border-2 hover:border-white cursor-pointer">Layanan</button></a>
                    <a href="index.php?#kontak"><button class="w-full md:w-fit h-fit py-[9px] px-[16px] hover:bg-[#fff] hover:border-2 hover:border-[#fff] hover:text-[#404040] text-white bg-transparent border-2 border-white">Hubungi Segera</button></a>
                </div>
            </div>
            <div class="w-full h-full md:mt-0 mt-[60px]">
                <div class="mx-auto w-fit h-fit md:h-[400px] flex items-center">
                    <img class="md:scale-75" src="./images/FINAL-01.png" alt="" srcset="">
                    <!-- <div class="absolute left-[25px] -top-[25px] w-[275px] h-[180px] p-5 img-hero-shade rounded-md">

                    </div>
                    <div class="absolute -top-[25px] -right-[25px] p-[7px] w-[52px] h-[52px] bg-[#ffe13e] shadow-md rounded-[15px]"><img class="icon-shade" src="./images/favicon.png" alt="" srcset=""></div>
                    <div class="absolute -bottom-[25px] -left-[30px] pl-2 pr-3 py-3 w-[110px] rounded-md h-[120px] bg-slate-50 "><img class="icon-shade" src="./images/icon-file.png" alt="" srcset=""></div> -->
                </div>                
            </div>
        </div>
        </div>
    </div>
    
    <div class="absolute w-full h-[149px] overflow-hidden mt-[15px] bottom-0">
        <div class="absolute top-[40px] w-full h-[328.26px] z-[9]">
            <div class="wave"></div>
        </div>
    </div>
</div>
</section>

<section class="w-full px-[5%] sm:px-[127px] pt-[30px] pb-[130px] sm:pb-[210px]">
    <div class="container mx-auto">
        <div class="flex flex-col gap-[77px]">
                <div class="text-center">
                    <h1 class="text-[24px] md:text-4xl font-extrabold mb-[4px]">MENGAPA MEMILIH KAMI?</h1>
                    <p class="text-[16px] md:text-lg">Alasan Memilih Jasa Desain.co.id</p>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-3 mx-[15%] sm:mx-0 gap-10">
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

                    <div class="flex">
                        <figure>
                            <img class="mx-auto w-[114px] h-[113px] rounded-[50%] border-[15px] border-slate-200" src="./Admin/gmbr/<?php echo $gambar;?>" alt="" />
                            <figcaption class="text-justify mt-[8px]">
                                <div class="mx-auto w-[70px] h-[3px] bg-[#8d8d99] rounded-sm"></div>
                                <h3 class="text-[#f4d320] text-center mt-[8px] mb-[6px] text-[16px] md:text-[26px] font-bold"><?php echo $judul;?></h3>
                                <p><?php echo $isi;?></p>
                            </figcaption>
                        </figure>
                    </div>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="md:w-full w-[80%] mx-[10%] md:mx-0 sm:px-[127px] pb-[130px]">
    <div class="container mx-auto">
        <div class="flex flex-col md:flex-row gap-[30px] md:justify-between">
            <div>
                <h1 class="text-[#187cff] text-xl sm:text-base font-medium text-center sm:text-left">Keunggulan </h1>
                <p class="text-[16px] text-center sm:text-left">Jasa desain.co.id selalu berperinsip</p>
                <div class="flex-col w-[218px] md:w-[418px] h-[233px] mt-[25px]">
                    <div class=" w-fit h-fit float-left mr-[14.27px]">
                        <div class="shadow-md flex w-[37.73px] h-[36.09px] bg-[#e7f7ff] border-[4.10138px] border-[#ffe13e] rounded-[82.0276px] mb-[6px] shadow-dot text-center font-bold py-[8.20276px 16.4055px] justify-center items-center gap-[8.2px]">1</div>
                            <div class="flex w-[37.73px] h-[50.38px] text-center py-[8.20276px 16.4055px] justify-center items-center"><div class="arrow"><div class="absolute right-0 -top-[4.25px] h-[8px] w-[8px] border-[2px] rotate-45 border-l-0 border-b-0  border-r-[#404040] border-t-[#404040]"></div></div></div>
                            <div class="shadow-md flex w-[37.73px] h-[36.09px] bg-[#e7f7ff] border-[4.10138px] border-[#ffe13e] rounded-[82.0276px] mb-[6px] shadow-dot font-bold text-center py-[8.20276px 16.4055px] justify-center items-center gap-[8.2px]">2</div>
                        <div class="flex w-[37.73px] h-[50.38px] text-center py-[8.20276px 16.4055px] justify-center items-center"><div class="arrow"><div class="absolute right-0 -top-[4.25px] h-[8px] w-[8px] border-[2px] rotate-45 border-l-0 border-b-0  border-r-[#404040] border-t-[#404040]"></div></div></div>
                        <div class="shadow-md flex w-[37.73px] h-[36.09px] b-[##ffe13e] border-[4.10138px] border-[#ffe13e] rounded-[82.0276px] mb-[6px] shadow-dot font-bold text-center py-[8.20276px 16.4055px] justify-center items-center gap-[8.2px]">3</div>
                    </div>
                    <div class="w-[322px] md:w-[418px] h-fit tracking-[0#ffe13em]">
                        <h4 class="leading-[24px] text-[14px] md:text-[16px] font-semibold">Pelayanan cepat</h4>
                        <p class="text-[#4E5053] text-[12px] md:text-[14px] font-normal leading-[21px] mb-[11px] md:mb-[31px]">Pesanan langsung ditangani dan dapatkan pelayanan yang ramah dan responsif.</p>
                        <h4 class="leading-[24px] text-[14px] md:text-[16px] font-semibold">Sesuai request</h4>
                        <p class="text-[#4E5053] text-[12px] md:text-[14px] font-normal leading-[21px] mb-[11px] md:mb-[30px]">Pesanan yang sesuai dengan permintaan klient dan kami selalu mengutamakan kepuasan klien.</p>
                        <h4 class="leading-[24px] text-[14px] md:text-[16px] font-semibold">Harga terjangkau</h4>
                        <p class="text-[#4E5053] text-[12px] md:text-[14px] font-normal leading-[21px]">Banyak Promo dan Bonus.</p>
                    </div>
                </div>

            </div>
            <div class="w-full md:w-[500px] mt-[45px] md:mt-0">
                <!-- <div class="absolute right-0 w-full h-full bg-gradient-to-l from-[#f8f9fa] ..."></div> -->
                <div class="relative w-full md:w-[436px] h-[304px] bg-cover bg-[url('./images/img-desk.avif')] rounded-xl">
                    <div class="absolute -bottom-2 -left-2 md:-bottom-[25px] md:-left-[25px] p-4 icon-shade w-[92.04px] h-[92.04px] rounded-lg shadow-xl bg-white"><img src="./images/icons8-design.gif" alt="" srcset=""></div>
                    <div class="absolute -top-2 -right-2 md:-top-[25px] md:-right-[25px] w-[65px] h-[61px] icon-shade p-2 bg-white shadow-md rounded-[15px]"><img src="./images/favicon.png" alt="" srcset=""></div>
                </div>

                <!-- <img class="object-cover rounded-l-[20px]" src="./images/img-desk.jpg" alt=""> -->
            </div>
        </div>
    </div>
</section>

<section id="layanan" class="relative w-full px-[5%] sm:px-[127px] py-8 bg-[#ffe13e]">
    <div class="absolute left-[2%] rounded-lg -top-5 w-[98%] h-[170px] bg-[#ffe13e] skew-y-3 bg-opacity-60 -z-10"></div>
    <div class="absolute left-[1%] rounded-lg top-[10px] w-[369px] h-[170px] bg-[#ffe13e] skew-y-12 bg-opacity-20 -z-10"></div>
    <div class="container mx-auto pb-20">
        <div class="flex flex-col gap-[77px]">
            <div class="text-center">
                <h4 class="text-[24px] font-semibold mb-[9px]">Layanan yang kami sediakan</h4>
                <div class="mx-auto w-[80px] h-[3px] bg-[#8d8d99] rounded-sm"></div>
            </div>
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-[30px]">
                <?php 
                    $sql_l = "SELECT `id`,`judul`,`deskripsi`,`gambar` FROM `layanan` ";

                    $sql_l .= " order by `judul` asc limit 6";
                    $query_l = mysqli_query($koneksi,$sql_l); 
                    while($data_l = mysqli_fetch_row($query_l)){ 
                    $id = $data_l[0]; 
                    $judul = $data_l[1]; 
                    $deskripsi = $data_l[2];
                    $gambar = $data_l[3];
                ?>
                <a href="index.php?include=detail-paket&data=<?php echo $id;?>">
                    <div class="grid-item border-2 border-white hover:border-blue-400">
                        <div class="w-full rounded-lg text-[#a4a4a4] text-xs h-fit pb-5 bg-white hover:shadow-2xl">
                            <div class="relative w-full h-[165px]">
                                <img class="w-full h-[165px] object-cover" src="./Admin/gmbr/<?php echo $gambar;?>" alt="layanan">
                                <div class="absolute bottom-0 w-fit h-fit px-4 py-[6px] rounded-tr-[20px] bg-blue-400 text-xl text-white font-bold"><?php echo $judul;?></div>
                            </div>
                            <div class="mx-[15px] pt-5">
                                <p class="pb-2">
                                    <?php echo $deskripsi;?>
                                </p>
                                <br><hr>
                                <button class="mt-5 w-full p-4 bg-[#ffe13e] hover:bg-transparent hover:border-[1px] hover:border-blue-400 text-[#404040] font-medium hover:font-semibold rounded-md"> Pilih Paket <i class="fa fa-angle-double-right" aria-hidden="true"></i></button>
                            </div>
                        </div>
                    </div>
                </a>
                <?php } ?>
            </div>
            </div>
            <a href="index.php?include=semua-layanan">
                <div class="absolute font-medium text-center -bottom-5 left-1/2 -translate-x-1/2 border-[10px] border-slate-50 border-opacity-25 w-fit h-fit rounded-sm p-4 bg-white shadow-md"><span>Lihat Semua Layanan</span></div>
            </a>
        </div>
    </div>
</section>

<section id="portfolio" class="relative md:w-full w-[80%] mx-[10%] md:mx-0 sm:px-[127px] pt-[130px] pb-[87.09px] h-fit">
    <div class="container mx-auto">
        <div class="flex flex-col gap-[30px]">
            <div class="text-center">
                <h1 class="text-[24px] md:text-4xl font-extrabold mb-[4px]">Portofolio</h1>
                <p class="text-[16px] md:text-lg">Hasil project yang dihandle oleh kami</p>
            </div>
            <div class="main-wrap wrap-inner">
                <div id="content">
                    <div class="main-full" id="main">
                        <ol class="content">
                        <?php 
                        $sql_p = "SELECT `p`.`id`, `p`.`judul`, `p`.`gambar`,  
                        `k`.`kategori` FROM `portfolio` `p` 
                        INNER JOIN `kategori` `k` ON `p`.`id_kategori` =   `k`.`id`";

                        $sql_p .= " order by rand() desc limit 12";
                        $query_p = mysqli_query($koneksi,$sql_p); 
                        while($data_p = mysqli_fetch_row($query_p)){ 
                        $id= $data_p[0];
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
            <div class="mx-auto font-medium w-full md:w-fit mt-[30px]">
                <a href="index.php?include=semua-portfolio"><button class="w-full md:w-fit h-fit py-[9px] px-[16px] bg-[#ffe13e] border-2 border-[#ffe13e] text-[#404040] hover:text-[#f3d230] hover:bg-transparent hover:border-2 hover:border-[#ffe13e] cursor-pointer">Lebih banyak</button></a>
            </div>

        </div>
    </div>
</section>

<section id="artikel" class="relative w-full py-[20px] h-[480px] md:h-[450px] px-[5%] sm:px-[127px]">    
    <div class="container mx-auto">
        <div class="flex flex-col md:flex-row gap-4">
            <div class="md:text-left text-center mb-4">
                <h1 class="text-[24px] font-bold mb-[30px]">Artikel</h1>
                <p>Baca artikel terbaru secara gratis</p>
                <div class="hidden md:block border-2 mb-5 border-[#4a4a4a] hover:bg-[#4a4a4a] hover:text-[#fff] p-4 mx-auto mt-4 md:mx-0 font-medium w-fit h-fit"><a href="index.php?include=semua-artikel"><span class="mr-2">Semua artikel</span><i class="fa fa-angle-double-right" aria-hidden="true"></i></a></div>
                <div class="md:hidden block absolute bottom-0 left-1/2 -translate-x-1/2 md:relative border-2 mb-5 border-[#4a4a4a] hover:bg-[#4a4a4a] hover:text-[#fff] p-4 mx-auto mt-4 md:mx-0 font-medium w-fit h-fit"><a href="index.php?include=semua-artikel"><span class="mr-2">Semua artikel</span><i class="fa fa-angle-double-right" aria-hidden="true"></i></a></div>
            </div>
            <div class="swiper ArtikelSwiper w-full h-fit">
            <?php
                $sql_a = "SELECT `id`,`judul`,`isi`,`terbit` FROM `artikel` ";
                $sql_a .= " ORDER BY `id` desc limit 6";
                $query_a = mysqli_query($koneksi,$sql_a);
                    while($data_a = mysqli_fetch_row($query_a)){
                        $id = $data_a[0];
                        $judul_artikel = $data_a[1];
                        $isi_artikel = $data_a[2];
                        $terbit = $data_a[3];
            ?>
                <div class="flex flex-row swiper-wrapper">
                    <div class="swiper-slide">
                        <a href="index.php?include=detail-artikel&data=<?php echo $id;?>">
                        <div class="w-[340px] md:w-[390px] h-fit rounded-sm ">
                            <aside class="relative bg-white border-l-4 border-[#ffe13e] p-[25px]">
                                <p class=" block text-[16px] text-[#696969] font-bold"><?php echo substr($judul_artikel,0,50). '...';?></p>
                                
                                <span class="text-[#a4a4a4] italic mt-[15px]"><?php echo substr($isi_artikel,0,150). '...';?></span>
                                <p class="text-[#a4a4a4] italic mt-[15px]"><?php echo $terbit;?></p>
                            </aside>
                        </a>
                    </div>
                </div>
                <?php }?>
            </div>
        </div>
    </div>
</section>


<section id="testimoni" class="relative w-full px-[5%] sm:px-[10px] mt-[200px] md:mt-[160px] py-[30px] h-[200px] bg-[#ffe13e]">    
    <div class="container mx-auto">
    <div class="absolute -top-[150px] w-full md:w-[1300px] left-1/2 -translate-x-1/2">
        <h1 class="text-[24px] font-bold text-center mb-[40px]">Apa Kata Mereka?</h1>
            <div class="swiper mySwiper">
                <div class="flex flex-row gap-3 swiper-wrapper">
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

                <div class="w-fit h-fit pb-[50px] swiper-slide">
                <div class="w-[340px] sm:w-[390px] h-fit rounded-sm ">
                        <aside class="relative bg-white shadow-xl p-[25px]">
                            <p class="text-[#a4a4a4] italic"><?php echo $testimoni?></p>
                            <span class="block text-[16px] text-[#696969] font-bold mt-[15px]"><?php echo $nama?></span>
                            <img class="w-[108px] h-[108px] block absolute right-[25px] -bottom-[50px] bg-slate-300 border-4 border-slate-200 rounded-[50%]" src="./Admin/gmbr/<?php echo $gambar;?>" alt="" />
                        </aside>
                    </div>
                </div>
                    <?php }?>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </div>
</section>

<section id="kontak" class="relative w-full mt-[60px] px-[5%] sm:px-[127px] py-[10px] h-fit">    
    <div class="container mx-auto">
        <h1 class="text-[24px] font-bold text-center mb-[60px]">Hubungi kami</h1>
        <div class="grid grid-cols-1 sm:grid-cols-4 items-center gap-10">
            <div class="flex">
                <figure class="mx-auto"><a href="https://wa.me/6289636849242">
                    <div class="border-[1px] border-blue-600 border-dashed hover:border-solid mx-auto px-auto flex items-center w-[108px] h-[108px] md:w-[75px] md:h-[74px] rounded-[20px] leading-[90px] text-[66px] md:text-[36px] hover:bg-slate-100 mb-3 bg-[#fff] text-blue-600" alt="">
                        <i class="fa fa-whatsapp mx-auto hover:scale-[1.3]" aria-hidden="true"></i>
                    </div>
                    <figcaption class="text-center mt-[8px]">
                        <div class="mx-auto w-[70px] h-[3px] bg-[#8d8d99] rounded-sm"></div>
                        <h3 class="text-[#f4d320] text-center mt-[8px] mb-[6px] text-[16px] md:text-[26px] font-bold">Whatsapp</h3>
                        <p><a href="https://wa.me/6289636849242">+62 8963-6849-242</p>
                    </a></figcaption>
                </figure>
            </div>
            <div class="flex">
                <figure class="mx-auto">
                <a href="http://instagram.com/jasadesain.co.id?igshid=YmMyMTA2M2Y=">
                <div class="border-[1px] border-blue-600 border-dashed hover:border-solid mx-auto px-auto flex items-center w-[108px] h-[108px] md:w-[75px] md:h-[74px] rounded-[20px] leading-[90px] text-[66px] md:text-[36px] hover:bg-slate-100 mb-3 bg-[#fff] text-blue-600" alt="">
                    <i class="fa fa-instagram  hover:scale-[1.3] mx-auto" aria-hidden="true"></i></div>
                    <figcaption class="text-justify mt-[8px]">
                        <div class="mx-auto w-[70px] h-[3px] bg-[#8d8d99] rounded-sm"></div>
                        <h3 class="text-[#f4d320] text-center mt-[8px] mb-[6px] text-[16px] md:text-[26px] font-bold">Instagram</h3>
                        <p>@jasadesain.co.id</p></a>
                    </figcaption>
                </figure>
            </div>
            <div class="flex">
                <figure class="mx-auto">
                <a href="mailto:Jasadesainapapun@gmail.com">
                <div class="border-[1px] border-blue-600 border-dashed hover:border-solid mx-auto px-auto flex items-center w-[108px] h-[108px] md:w-[75px] md:h-[74px] rounded-[20px] leading-[90px] text-[66px] md:text-[36px] hover:bg-slate-100 mb-3 bg-[#fff] text-blue-600" alt="">
                    <i class="fa fa-envelope-o hover:scale-[1.3] mx-auto" aria-hidden="true"></i></div>
                    <figcaption class="text-center mt-[8px]">
                        <div class="mx-auto w-[70px] h-[3px] bg-[#8d8d99] rounded-sm"></div>
                        <h3 class="text-[#f4d320] text-center mt-[8px] mb-[6px] text-[16px] md:text-[26px] font-bold">Email</h3>
                        <p class="">Jasadesainapapun@gmail.com</p>
                        </a>
                    </figcaption>
                </figure>
            </div>
            <div class="flex">
                <figure class="mx-auto">
                <div class="border-[1px] border-blue-600 border-dashed hover:border-solid mx-auto px-auto flex items-center w-[108px] h-[108px] md:w-[75px] md:h-[74px] rounded-[20px] leading-[90px] text-[66px] md:text-[36px] hover:bg-slate-100 mb-3 bg-[#fff] text-blue-600" alt="">
                    <i class="fa fa-clock-o mx-auto hover:scale-[1.3]" aria-hidden="true"></i></div>
                    <figcaption class="text-center mt-[8px]">
                        <div class="mx-auto w-[70px] h-[3px] bg-[#8d8d99] rounded-sm"></div>
                        <h3 class="text-[#f4d320] text-center mt-[8px] mb-[6px] text-[16px] md:text-[26px] font-bold">Jam Operasional</h3>
                        <p>Senin - Jumat 08.00 - 16.00 WIB</p>
                    </figcaption>
                </figure>
            </div>

        </div>
        <br>
        <hr class="mt-8">
    </div>
</section>

<section id="Qna" class="relative md:w-full w-[80%] mx-[10%] md:mx-0 mt-[60px] sm:px-[127px] py-[10px] h-fit">
<div class="container mx-auto">
        <div class="flex flex-col gap-[60px]">
            <div class="text-center">
                <h1 class="text-[24px] md:text-4xl font-extrabold mb-[4px]">QnA</h1>
                <p class="text-[16px] md:text-lg">Pertanyaan yang sering ditanyakan seputar jasa desain</p>
            </div>
            <div class="columns-1 md:columns-2">
            <?php 
                    $sql_q = "SELECT `id`,`tanya`,`jawab` FROM `qna` ";
                    $sql_q .= " order by `id`";
                    $query_q = mysqli_query($koneksi,$sql_q); 
                    while($data_q = mysqli_fetch_row($query_q)){ 
                    $id = $data_q[0]; 
                    $tanya = $data_q[1]; 
                    $jawab = $data_q[2];
                ?>

                <div class="acc w-full h-fit text-[#202020] overflow-hidden acc-shade rounded-[15px] mb-[27px] cursor-pointer">
                    <div class="w-[100%] text-[14px] px-5 md:w-full h-fit md:h-[82px] relative bg-[#ffffff] text-[#202020] md:text-[20px] py-5 font-[600] flex flex-row justify-between "><h2 class="my-auto"><?php echo $tanya;?></h2><i class="my-auto fa fa-caret-down items-center" aria-hidden="true"></i></div>
                    <div class="content bg-slate-100 overflow-hidden overflow-y-auto h-0 relative text-[12px] md:text-[16px] transition-all"><p class="mx-[10px]"><?php echo $jawab?></p> </div>
                </div>
                <?php }?>
            </div>
        </div>
    </div>
</section>