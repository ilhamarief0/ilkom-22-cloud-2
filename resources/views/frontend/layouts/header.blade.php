<!-- header start -->
<header class="header header__style-one">

    <!-- CSS internal untuk elemen header -->
    <style>
        /* Animasi hover pada ikon */
        .header__icons .icon:hover img {
            transform: scale(1.1);
            transition: transform 0.3s ease;
        }

        /* Animasi hover pada tombol */
        .header__lang ul li a:hover {
            text-decoration: underline;
            transition: text-decoration 0.3s ease;
        }

        /* Border halus pada input pencarian */
        .header__search-box input {
            border: 1px solid #ddd;
            border-radius: 4px;
            padding: 5px;
            transition: border 0.3s ease;
        }

        /* Warna border saat input pencarian aktif */
        .header__search-box input:focus {
            border: 1px solid #007bff;
            outline: none;
        }

        /* Bayangan pada daftar kategori */
        .header__cat ul.category li {
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
            border-radius: 6px;
            transition: box-shadow 0.3s ease;
        }

        /* Efek hover pada kategori */
        .header__cat ul.category li:hover {
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
        }

        /* Spasi di tengah header */
        .header__middle {
            padding: 15px 0;
        }

        /* Margin antar ikon header */
        .header__icons .icon {
            margin-right: 15px;
        }

        /* Garis pembatas bagian atas header */
        .header__top-info-wrap {
            border-bottom: 1px solid #ddd;
            margin-bottom: 10px;
        }

        /* Bold untuk elemen penting */
        .header__top-info ul li span {
            font-weight: bold;
        }

        /* Italic pada bahasa */
        .header__lang ul li a {
            font-style: italic;
        }

    </style>
    

    <!-- Baris paling atas: info toko dan sosial media -->
    <div class="header__top-info-wrap d-none d-lg-block">
        <div class="container">
            <div class="header__top-info ul_li_between mt-none-10">
              <ul class="ul_li mt-10" style="list-style: none; margin: 0; padding: 0; font-family: Arial, sans-serif; border-radius: 8px;">
    <!-- Info lokasi toko -->
                    <li style="padding: 10px; display: flex; align-items: center; background-color: #f9f9f9; cursor: pointer; transition: background-color 0.3s;">
                        <i class="far fa-map-marker-alt" aria-hidden="true" style="color: #FF5733; font-size: 16px; margin-right: 10px;"></i>
                        <span style="color: #333; font-size: 14px;">Lokasi Toko</span>
                    </li>
                    <!-- Info pelacakan pesanan -->
                    <li style="padding: 10px; display: flex; align-items: center; background-color: #fff; cursor: pointer; transition: background-color 0.3s;">
                        <i class="far fa-truck" aria-hidden="true" style="color: #33B5E5; font-size: 16px; margin-right: 10px;"></i>
                        <span style="color: #333; font-size: 14px;">Melacak Pesanan Anda</span>
                    </li>
                    <!-- Info kontak -->
                    <li style="padding: 10px; display: flex; align-items: center; background-color: #f9f9f9; cursor: pointer; transition: background-color 0.3s;">
                        <i class="fas fa-phone" aria-hidden="true" style="color: #4CAF50; font-size: 16px; margin-right: 10px;"></i>
                        <span style="color: #333; font-size: 14px;">Hubungi Kami Untuk Pertanyaan</span>
                    </li>
                    <!-- Sambutan toko -->
                    <li style="padding: 10px; display: flex; align-items: center; background-color: #fff; cursor: pointer; transition: background-color 0.3s;">
                        <i class="fas fa-heart" aria-hidden="true" style="color: #E91E63; font-size: 16px; margin-right: 10px;"></i>
                        <span style="color: #333; font-size: 14px;">Selamat datang di Radios. Kami menyediakan barang elektronik terbaik</span>
                    </li>
                </ul>

                <!-- Tanggal dan ikon sosial media -->
               <div style="display: flex; justify-content: space-between; align-items: center; padding: 5px 10px; color: #333; border-radius: 4px; width: 100%; max-width: 600px;">
        <div style="font-size: 12px; display: flex; align-items: center;">
            <i class="fal fa-calendar-alt" style="margin-right: 5px; color: #555;"></i> 
            <span>Friday, July 27, 2020</span>
        </div>
        <div style="display: flex; gap: 10px;">
            <a href="#!" aria-label="Facebook" style="font-size: 14px; display: inline-flex; align-items: center; justify-content: center; width: 30px; height: 30px; border-radius: 50%; background: none; color: #555; transition: transform 0.2s ease, color 0.2s ease;" 
               onmouseover="this.style.color='#3b5998';this.style.transform='scale(1.1)';" 
               onmouseout="this.style.color='#555';this.style.transform='none';">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#!" aria-label="Twitter" style="font-size: 14px; display: inline-flex; align-items: center; justify-content: center; width: 30px; height: 30px; border-radius: 50%; background: none; color: #555; transition: transform 0.2s ease, color 0.2s ease;" 
               onmouseover="this.style.color='#1da1f2';this.style.transform='scale(1.1)';" 
               onmouseout="this.style.color='#555';this.style.transform='none';">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="#!" aria-label="Instagram" style="font-size: 14px; display: inline-flex; align-items: center; justify-content: center; width: 30px; height: 30px; border-radius: 50%; background: none; color: #555; transition: transform 0.2s ease, color 0.2s ease;" 
               onmouseover="this.style.color='#d62976';this.style.transform='scale(1.1)';" 
               onmouseout="this.style.color='#555';this.style.transform='none';">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="#!" aria-label="YouTube" style="font-size: 14px; display: inline-flex; align-items: center; justify-content: center; width: 30px; height: 30px; border-radius: 50%; background: none; color: #555; transition: transform 0.2s ease, color 0.2s ease;" 
               onmouseover="this.style.color='#ff0000';this.style.transform='scale(1.1)';" 
               onmouseout="this.style.color='#555';this.style.transform='none';">
                <i class="fab fa-youtube"></i>
            </a>
            <a href="#!" aria-label="Pinterest" style="font-size: 14px; display: inline-flex; align-items: center; justify-content: center; width: 30px; height: 30px; border-radius: 50%; background: none; color: #555; transition: transform 0.2s ease, color 0.2s ease;" 
               onmouseover="this.style.color='#e60023';this.style.transform='scale(1.1)';" 
               onmouseout="this.style.color='#555';this.style.transform='none';">
                <i class="fab fa-pinterest"></i>
            </a>
        </div>
    </div>
            </div>
        </div>
    </div>

    <!-- Bagian tengah header: logo, pencarian, bahasa, ikon -->
    <div class="container">
        <div class="header__middle ul_li_between justify-content-xs-center">

            <!-- Logo toko -->
            <div class="header__logo">
                <a href="index.html" aria-label="Homepage">
                    <img src="assets/img/logo/logo.svg" alt="Logo Radios">
                </a>
            </div>

            <!-- Form pencarian -->
           <form class="header__search-box" action="#" aria-label="Form Pencarian" style="display: flex; gap: 10px; align-items: center;">
    <div class="select-box">
        <label for="category" class="sr-only">Kategori</label>
        <select id="category" name="category" style="padding: 8px; border-radius: 4px; border: 1px solid #ccc;">
            <option value="">Semua Kategori</option>
            <option value="4">Koleksi Musim Panas</option>
            <option value="5">Sarapan & Produk Susu</option>
            <option value="6">Minuman & Minuman</option>
            <option value="7">Kotak Cokelat</option>
            <option value="8">Pojok Makanan Kering</option>
            <option value="9">Makanan Beku</option>
            <option value="10">Pojok Makanan Bayi</option>
            <option value="11">Susu & Jus</option>
            <option value="12">Organik & Makanan Ringan</option>
        </select>
    </div>
    <label for="search" class="sr-only">Cari Barang</label>
    <input 
        type="text" 
        name="search" 
        id="search" 
        placeholder="Cari barang, kategori, atau merek..." 
        required 
        style="flex: 1; padding: 8px; border-radius: 4px; border: 1px solid #ccc;">
    <button 
        type="submit" 
        aria-label="Cari" 
        style="padding: 8px 12px; background-color:rgb(255, 145, 0); color: white; border: none; border-radius: 4px; cursor: pointer;">
        <i class="far fa-search" aria-hidden="true"></i>
    </button>
</form>


            <!-- Pilihan bahasa dan mata uang -->
            <div class="header__lang ul_li">
                <div class="header__language mr-15">
                    <ul>
                        <li><a href="#!" class="lang-btn">USD <i class="far fa-chevron-down" aria-hidden="true"></i></a>
                            <ul class="lang_sub_list">
                                <li><a href="#">USD</a></li>
                                <li><a href="#">BDT</a></li>
                                <li><a href="#">EUR</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="header__language">
                    <ul>
                        <li><a href="#!" class="lang-btn"><img src="assets/img/icon/usd_flag.png" alt="USD Flag">English <i class="far fa-chevron-down" aria-hidden="true"></i></a>
                            <ul class="lang_sub_list">
                                <li><a href="#">English</a></li>
                                <li><a href="#">Arabic</a></li>
                                <li><a href="#">Bangla</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Ikon user, wishlist, dan keranjang -->
            <div class="header__icons ul_li">
                <div class="icon">
                    <a href="#!" aria-label="Akun Pengguna"><img src="assets/img/icon/user.svg" alt="Ikon Pengguna"></a>
                </div>
                <div class="icon wishlist-icon">
                    <a href="#!" aria-label="Wishlist">
                        <img src="assets/img/icon/heart.svg" alt="Ikon Wishlist">
                        <span class="count">0</span>
                    </a>
                </div>
                <div class="cart_btn icon">
                    <a href="#!" aria-label="Keranjang Belanja">
                        <img src="assets/img/icon/shopping_bag.svg" alt="Ikon Keranjang Belanja">
                        <span class="count">0</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Navigasi kategori dan tombol login/signup -->
    <div class="header__cat-wrap" data-uk-sticky="top: 250; animation: uk-animation-slide-top;">
        <div class="container">
            <div class="header__wrap ul_li_between">

                <!-- Daftar Kategori Produk -->
<nav class="header__cat ul_li" aria-label="Kategori Produk">
    <!-- Tombol Hamburger -->
    <button class="hamburger_menu active" aria-label="Tampilkan Kategori" aria-expanded="false" onclick="toggleCategoryMenu(this)">
        <i class="fal fa-bars" aria-hidden="true"></i>
    </button>

    <!-- Menu Kategori -->
    <ul class="category ul_li" id="categoryMenu">
        <li>
            <a href="#!" aria-label="Laptops & Computers">
                <img src="{{ asset('assets/img/icon/hc_01.svg') }}" alt="Ikon Laptop" loading="lazy">
                Laptops & Computers
            </a>
        </li>
        <li>
            <a href="#!" aria-label="CCTV & Camera">
                <img src="{{ asset('assets/img/icon/hc_02.svg') }}" alt="Ikon CCTV" loading="lazy">
                CCTV & Camera
            </a>
        </li>
        <li>
            <a href="#!" aria-label="Home Equipment">
                <img src="{{ asset('assets/img/icon/hc_03.svg') }}" alt="Ikon Peralatan Rumah" loading="lazy">
                Home Equipment
            </a>
        </li>
        <li>
            <a href="#!" aria-label="TV & Audios">
                <img src="{{ asset('assets/img/icon/hc_04.svg') }}" alt="Ikon TV dan Audio" loading="lazy">
                TV & Audios
            </a>
        </li>
        <li>
            <a href="#!" aria-label="Printers & Ink">
                <img src="{{ asset('assets/img/icon/hc_05.svg') }}" alt="Ikon Printer dan Tinta" loading="lazy">
                Printers & Ink
            </a>
        </li>
        <li>
            <a href="#!" aria-label="Gaming & Fun">
                <img src="{{ asset('assets/img/icon/hc_06.svg') }}" alt="Ikon Gaming dan Hiburan" loading="lazy">
                Gaming & Fun
            </a>
        </li>
    </ul>
</nav>

<!-- Optional: Toggle Script -->
<script>
    function toggleCategoryMenu(button) {
        const menu = document.getElementById('categoryMenu');
        const expanded = button.getAttribute('aria-expanded') === 'true';
        button.setAttribute('aria-expanded', !expanded);
        menu.classList.toggle('show');
    }
</script>

<!-- Optional CSS -->
<style>
    .category {
        display: none;
        flex-direction: column;
        gap: 8px;
        margin-top: 10px;
    }
    .category.show {
        display: flex;
    }
    .category li {
        list-style: none;
    }
    .category a {
        display: flex;
        align-items: center;
        gap: 10px;
        text-decoration: none;
        font-weight: 500;
        color: #333;
        transition: color 0.2s ease;
    }
    .category a:hover {
        color: #007bff;
    }
    .category img {
        width: 24px;
        height: 24px;
    }
</style>

                <!-- Tombol login atau daftar -->
                <div class="login-sign-btn">
                    <a class="thm-btn" href="{{ route('login') }}">
                        <span class="btn-wrap">
                            <span>Login / Sign Up</span>
                            <span>Login / Sign Up</span>
                        </span>
                    </a>
                </div>

            </div>
        </div>
    </div>
</header>
<!-- header end -->
