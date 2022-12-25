<nav class="bg-white px-[5%] sm:px-[127px] py-5 dark:bg-gray-900 fixed w-full h-[80px] z-20 top-0 left-0 border-b border-gray-200 dark:border-gray-600">
  <div class="container flex flex-wrap justify-between items-center mx-auto">
    <a href="#" class="flex items-center">
        <img src="./images/favicon.png" class="mr-2 h-10 sm:h-10" alt="Jasadesain.co.id">
        <span class="self-center md:text-xl text-sm font-semibold whitespace-nowrap dark:text-white">JasaDesain.co.id</span>
    </a>
    <div class="flex md:order-2">
        <a href="./Admin">
            <button type="button" class="text-[#231f20] bg-[#ffe13e] hover:bg-[#ffe23eaa] focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-3 md:mr-0">Login</button>
        </a>
        <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
        </button>
    </div>
    <div class="hidden justify-between items-center w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
        <ul class="flex flex-col p-4 mt-4 bg-gray-50 rounded-lg border border-gray-100 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
        <li>
            <a href="index.php#" class="block py-2 pr-4 pl-3 text-white bg-[#ffe13e] rounded md:bg-transparent md:text-[#ffe13e] md:p-0 dark:text-white" aria-current="page">Home</a>
        </li>
        <li>
            <div
                x-data="{
                    open: false,
                    toggle() {
                        if (this.open) {
                            return this.close()
                        }
        
                        this.$refs.button.focus()
        
                        this.open = true
                    },
                    close(focusAfter) {
                        if (! this.open) return
        
                        this.open = false
        
                        focusAfter && focusAfter.focus()
                    }
                }"
                x-on:keydown.escape.prevent.stop="close($refs.button)"
                x-on:focusin.window="! $refs.panel.contains($event.target) && close()"
                x-id="['dropdown-button']"
                class="relative text-[14px]"
                >
                <!-- Button -->
                <button
                    x-ref="button"
                    x-on:click="toggle()"
                    :aria-expanded="open"
                    :aria-controls="$id('dropdown-button')"
                    type="button"
                    class="flex items-center gap-[5px] py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-[#ffe13e] md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"
                >
                Layanan
                    <!-- Heroicon: chevron-down -->
                    <svg xmlns="../images/arrow.svg" class="absolute right-0 md:relative md:right-auto h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg>
                </button>
        
                <!-- Panel -->
                <div
                    x-ref="panel"
                    x-show="open"
                    x-transition.origin.top.left
                    x-on:click.outside="close($refs.button)"
                    :id="$id('dropdown-button')"
                    style="display: none;"
                    class="relative md:absolute left-0 mt-2 w-full md:w-56 rounded-md bg-white shadow-lg"
                >
                <?php 
                    $sql_l = "SELECT `id`,`judul` FROM `layanan` ";

                    $sql_l .= " order by `judul` ";
                    $query_l = mysqli_query($koneksi,$sql_l); 
                    while($data_l = mysqli_fetch_row($query_l)){ 
                    $id = $data_l[0]; 
                    $judul = $data_l[1]; 
                    ?>

                    <a href="index.php?include=detail-paket&data=<?php echo $id;?>" class="flex flex-row items-center gap-2 w-full first-of-type:rounded-t-md last-of-type:rounded-b-md px-4 py-2.5 text-left text-sm hover:bg-[#ffe13e] disabled:text-gray-500">
                        Jasa Desain <?php echo $judul;?>
                    </a>
                <?php }?>
                </div>
            </div>
        </li>
        <li>
            <a href="index.php#portfolio" class="block py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-[#ffe13e] md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Portfolio</a>
        </li>
        <li>
            <a href="index.php#testimoni" class="block py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-[#ffe13e] md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Testimoni</a>
        </li>
        <li>
            <a href="index.php#kontak" class="block py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-[#ffe13e] md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Kontak</a>
        </li>
        </ul>
    </div>
    <div class="absolute w-full h-[89px] left-0 right-0 top-0 bg-white bottom-[-11.25%] shadow-md -z-10"></div>
  </div>
</nav>
