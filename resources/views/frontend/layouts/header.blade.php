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
                <ul class="ul_li mt-10">
                    <!-- Info lokasi toko -->
                    <li><i class="far fa-map-marker-alt" aria-hidden="true"></i><span>Lokasi Toko</span></li>
                    <!-- Info pelacakan pesanan -->
                    <li><i class="far fa-truck" aria-hidden="true"></i><span>Melacak Pesanan Anda</span></li>
                    <!-- Info kontak -->
                    <li><i class="fas fa-phone" aria-hidden="true"></i><span>Hubungi Kami Untuk Pertanyaan</span></li>
                    <!-- Sambutan toko -->
                    <li>
                        <i class="fas fa-heart" aria-hidden="true"></i>
                        <span>Selamat datang di Radios. Kami menyediakan barang elektronik terbaik</span>
                    </li>
                </ul>
                <!-- Tanggal dan ikon sosial media -->
                <div class="header__top-right ul_li mt-10">
                    <div class="date" aria-label="Tanggal">
                        <i class="fal fa-calendar-alt" aria-hidden="true"></i> Friday, July 27, 2020
                    </div>
                    <div class="header__social ml-25">
                        <a href="#!" aria-label="Facebook"><i class="fab fa-facebook-f" aria-hidden="true"></i></a>
                        <a href="#!" aria-label="Twitter"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                        <a href="#!" aria-label="Instagram"><i class="fab fa-instagram" aria-hidden="true"></i></a>
                        <a href="#!" aria-label="YouTube"><i class="fab fa-youtube" aria-hidden="true"></i></a>
                        <a href="#!" aria-label="Pinterest"><i class="fab fa-pinterest" aria-hidden="true"></i></a>
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
            <form class="header__search-box" action="#" aria-label="Form Pencarian">
                <div class="select-box">
                    <label for="category" class="sr-only">Kategori</label>
                    <select id="category" name="category">
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
                <input type="text" name="search" id="search" placeholder="Cari Barang" required>
                <button type="submit" aria-label="Cari">
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

                <!-- Daftar kategori dengan ikon -->
                <div class="header__cat ul_li">
                    <div class="hamburger_menu">
                        <a href="javascript:void(0);" class="active" aria-label="Kategori">
                            <div class="icon bar">
                                <span><i class="fal fa-bars" aria-hidden="true"></i></span>
                            </div>
                        </a>
                    </div>
                    <ul class="category ul_li">
                        <li><a href="#!"><span><img src="assets/img/icon/hc_01.svg" alt="Ikon Laptop"></span>Laptops & Computers</a></li>
                        <li><a href="#!"><span><img src="assets/img/icon/hc_02.svg" alt="Ikon CCTV"></span>CCTV & Camera</a></li>
                        <li><a href="#!"><span><img src="assets/img/icon/hc_03.svg" alt="Ikon Home Equipment"></span>Home Equipment</a></li>
                        <li><a href="#!"><span><img src="assets/img/icon/hc_04.svg" alt="Ikon TV"></span>Tv & Audios</a></li>
                        <li><a href="#!"><span><img src="assets/img/icon/hc_05.svg" alt="Ikon Printer"></span>Printers & Ink</a></li>
                        <li><a href="#!"><span><img src="assets/img/icon/hc_06.svg" alt="Ikon Gaming"></span>Gaming & Fun</a></li>
                    </ul>
                </div>

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
