<!-- slide-bar start -->
<aside class="slide-bar">

    <!-- Tombol untuk menutup menu slide di tampilan mobile -->
    <div class="close-mobile-menu">
        <a href="javascript:void(0);"><i class="fal fa-times"></i></a>
    </div>

    <!-- sidebar-info start (menampilkan keranjang belanja) -->
    <div class="cart_sidebar">
        <!-- Tombol untuk menutup sidebar keranjang -->
        <button type="button" class="cart_close_btn"><i class="fal fa-times"></i></button>

        <!-- Judul dan jumlah item di keranjang -->
        <h2 class="heading_title text-uppercase">Cart Items - <span>4</span></h2>

        <!-- Daftar item dalam keranjang -->
        <div class="cart_items_list">

            <!-- Item pertama -->
            <div class="cart_item">
                <div class="item_image">
                    <img src="assets/img/product/img_01.png" alt="image_not_found">
                </div>
                <div class="item_content">
                    <h4 class="item_title">Rorem ipsum dolor sit amet.</h4>
                    <span class="item_price">$19.00</span>
                    <button type="button" class="remove_btn"><i class="fal fa-times"></i></button>
                </div>
            </div>

            <!-- Item kedua -->
            <div class="cart_item">
                <div class="item_image">
                    <img src="assets/img/product/img_02.png" alt="image_not_found">
                </div>
                <div class="item_content">
                    <h4 class="item_title">Rorem ipsum dolor sit amet.</h4>
                    <span class="item_price">$22.00</span>
                    <button type="button" class="remove_btn"><i class="fal fa-times"></i></button>
                </div>
            </div>

            <!-- Item ketiga -->
            <div class="cart_item">
                <div class="item_image">
                    <img src="assets/img/product/img_03.png" alt="image_not_found">
                </div>
                <div class="item_content">
                    <h4 class="item_title">Rorem ipsum dolor sit amet.</h4>
                    <span class="item_price">$43.00</span>
                    <button type="button" class="remove_btn"><i class="fal fa-times"></i></button>
                </div>
            </div>

            <!-- Item keempat -->
            <div class="cart_item">
                <div class="item_image">
                    <img src="assets/img/product/img_04.png" alt="image_not_found">
                </div>
                <div class="item_content">
                    <h4 class="item_title">Rorem ipsum dolor sit amet.</h4>
                    <span class="item_price">$14.00</span>
                    <button type="button" class="remove_btn"><i class="fal fa-times"></i></button>
                </div>
            </div>

        </div>

        <!-- Total harga semua item -->
        <div class="total_price text-uppercase">
            <span>Sub Total:</span>
            <span>$87.00</span>
        </div>

        <!-- Tombol navigasi menuju halaman cart dan checkout -->
        <ul class="btns_group ul_li">
            <li>
                <a href="cart.html" class="thm-btn">
                    <span class="btn-wrap">
                        <span>View Cart</span>
                        <span>View Cart</span>
                    </span>
                </a>
            </li>
            <li>
                <a href="checkout.html" class="thm-btn thm-btn__black">
                    <span class="btn-wrap">
                        <span>Checkout</span>
                        <span>Checkout</span>
                    </span>
                </a>
            </li>
        </ul>
    </div>
    <!-- sidebar-info end -->

    <!-- side-mobile-menu start (menu navigasi untuk tampilan mobile) -->
    <nav class="side-mobile-menu">

        <!-- Kolom pencarian di menu mobile -->
        <div class="header-mobile-search">
            <form role="search" method="get" action="#">
                <input type="text" placeholder="Search Keywords">
                <button type="submit"><i class="ti-search"></i></button>
            </form>
        </div>

        <!-- Navigasi menu utama -->
        <ul id="mobile-menu-active">
            <!-- Menu Home dengan submenu -->
            <li class="dropdown"><a href="index.html">Home</a>
                <ul class="sub-menu">
                    <li><a href="index.html">Home One</a></li>
                    <li><a href="home-2.html">Home Two</a></li>
                    <li><a href="home-3.html">Home Three</a></li>
                </ul>
            </li>

            <!-- Menu Shop dengan submenu -->
            <li class="dropdown">
                <a href="#">Shop</a>
                <ul class="sub-menu">
                    <li><a href="shop.html">Shop Default</a></li>
                    <li><a href="shop-left-sidebar.html">Shop Left Sidebar</a></li>
                    <li><a href="shop-single.html">Shop Single</a></li>
                    <li><a href="cart.html">Shop Cart</a></li>
                    <li><a href="checkout.html">Shop Checkout</a></li>
                    <li><a href="account.html">Account</a></li>
                </ul>
            </li>

            <!-- Menu aksesori langsung -->
            <li><a href="shop.html">Accesories</a></li>

            <!-- Menu Blog dengan submenu -->
            <li class="dropdown">
                <a href="#!">Blog</a>
                <ul class="sub-menu">
                    <li><a href="news.html">Blog</a></li>
                    <li><a href="news-single.html">Blog Details</a></li>
                </ul>
            </li>

            <!-- Menu Pages dengan submenu -->
            <li class="dropdown">
                <a href="#!">Pages</a>
                <ul class="submenu">
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="about.html">Account</a></li>
                    <li><a href="404.html">404</a></li>
                </ul>
            </li>

            <!-- Menu kontak langsung -->
            <li><a href="contact.html">Contact</a></li>
        </ul>
    </nav>
    <!-- side-mobile-menu end -->

</aside>

<!-- Overlay gelap di belakang slide bar -->
<div class="body-overlay"></div>
<!-- slide-bar end -->
