            <!-- Sidebar-->
            <div class="border-end bg-white" id="sidebar-wrapper"">
                <div class="sidebar-heading border-bottom bg-light">
                        <img class="logo-side" src="../images/favicon.png">Admin Auth</div>
                <div class="list-group list-group-flush">
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="index.php?include=profile">
                        <i class="nc-icon nc-single-02"></i>Profile
                    </a>
                    
                    <div class="dropdown">
                        <button class="dropbtn list-group-item list-group-item-action list-group-item-light p-3"><i class="nc-icon nc-bullet-list-67"></i>Data Master</button>
                        <div class="dropdown-content">
                        <a href="index.php?include=paket-layanan">Paket Layanan</a>
                        <a href="index.php?include=kategori-portfolio">Kategori Portfolio</a>
                        </div>
                    </div>

                    <!-- <a class="list-group-item list-group-item-action list-group-item-light p-3 dropdown dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown">
                        <i class="nc-icon nc-bullet-list-67"></i>
                        <span>Data Master</span>
                    </a>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="index.php?include=paket-layanan">Paket Layanan</a>
                        <a class="dropdown-item" href="index.php?include=kategori-portfolio">Kategori Portfolio</a>
                      </div> -->
                    
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="index.php?include=artikel">
                        <i class="nc-icon nc-single-copy-04"></i>
                        Artikel
                    </a>

                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="index.php?include=layanan">
                        <i class="nc-icon nc-layout-11"></i>
                        Layanan
                    </a>

                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="index.php?include=portfolio">
                        <i class="nc-icon nc-album-2"></i>
                        Portfolio
                    </a>

                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="index.php?include=testimoni">
                        <i class="nc-icon nc-chat-33"></i>
                        Testimoni
                    </a>

                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="index.php?include=konten">
                        <i class="nc-icon nc-tile-56"></i>
                        Konten
                    </a>

                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="index.php?include=qna">
                        <i class="nc-icon nc-alert-circle-i"></i>
                        QnA
                    </a>

                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="index.php?include=sub">
                        <i class="nc-icon nc-email-85"></i>
                        Kontak Pelanggan
                    </a>

                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="index.php?include=user">
                    <?php
                    if ($level=="Superadmin"){?>
                        <i class="nc-icon nc-settings-gear-65"></i>
                        Manajemen user
                    <?php }?>
                    </a>

                </div>
            </div>
            <!-- Page content wrapper-->