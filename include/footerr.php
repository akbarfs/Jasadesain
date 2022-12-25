<footer class="new_footer_area bg_color">
            <div class="new_footer_top">
                <div class="container mx-auto">
                    <div class="flex flex-col sm:flex-row gap-3 sm:justify-between mx-[10%] w-[80%] md:w-full md:mx-0 sm:px-[90px]">
                        <div class="col-lg-3 col-md-6 w-80">
                            <div class="f_widget company_widget wow fadeInLeft" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInLeft;">
                                <h3 class="f-title f_600 t_color text-[18px]">Dapatkan Promo</h3>
                                <p>Masukkan email untuk mendapatkan update promo menarik!</p>
                                <form action="index.php?include=konfirmasi-tambah-sub" class="f_subscribe_two mailchimp" method="post" novalidate="true" _lpchecked="1">
                                    <input type="email" name="EMAIL" class="float-left w-[70%] md:w-fit" placeholder="Email" require/>
                                    <button class="bg-[#f4d320] p-[10px] ml-1 text-white" type="submit"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                                    <p class="mchimp-errmessage" style="display: none;"></p>
                                    <p class="mchimp-sucmessage" style="display: none;"></p>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="f_widget about-widget pl_70 wow fadeInLeft" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInLeft;">
                                <h3 class="f-title f_600 t_color f_size_18" >Produk dan layanan</h3>
                                <ul class="columns-2 f_list justify-between footer-list">
                                <?php 
                                $sql_l = "SELECT `id`,`judul` FROM `layanan` ";

                                $sql_l .= " order by `judul` ";
                                $query_l = mysqli_query($koneksi,$sql_l); 
                                while($data_l = mysqli_fetch_row($query_l)){ 
                                $id = $data_l[0]; 
                                $judul = $data_l[1]; 
                                ?>

                                    <li>Desain <?php echo $judul;?></li>
                                <?php }?>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="f_widget about-widget pl_70 wow fadeInLeft" data-wow-delay="0.6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInLeft;">
                                <h3 class="f-title f_600 t_color f_size_18">Link</h3>
                                <ul class="list-unstyled f_list">
                                    <li><a href="index.php#">Home</a></li>
                                    <li><a href="index.php#layanan">Layanan</a></li>
                                    <li><a href="index.php#portfolio">Portofolio</a></li>
                                    <li><a href="index.php#testimoni">Testimonial</a></li>
                                    <li><a href="index.php#kontak">Kontak</a></li>
                                    <li><a href="./Admin/">Login</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6">
                            <div class="f_widget social-widget pl_70 wow fadeInLeft" data-wow-delay="0.8s" style="visibility: visible; animation-delay: 0.8s; animation-name: fadeInLeft;">
                                <h3 class="f-title f_600 t_color f_size_18">Temukan kita</h3>
                                <div class="f_social_icon">
                                <a href="http://instagram.com/jasadesain.co.id?igshid=YmMyMTA2M2Y=" class="fab fa-instagram"></a>
                                    <a href="https://wa.me/6289636849242" class="fab fa-whatsapp"></a>
                                    <a href="mailto:Jasadesainapapun@gmail.com" class="fa fa-envelope-o"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer_bg">
                    <div class="footer_bg_one"></div>
                    <div class="footer_bg_two"></div>
                </div>
            </div>
            <div class="footer_bottom">
                <div class="container">
                    <div class="text-center sm:text-left px-[0] sm:px-[127px]">
                        <div class="col-lg-6 col-sm-7">
                            <p class="mb-0 f_400">© Jasa desain.co.id since 2019.</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>