<!-- Header Start -->
<header class="header header__style-one">
  <style>
    .header__icons .icon:hover img {
      transform: scale(1.1);
      transition: transform 0.3s ease;
    }
    .header__lang ul li a:hover {
      text-decoration: underline;
      transition: text-decoration 0.3s ease;
    }
    .header__search-box input {
      border: 1px solid #ddd;
      border-radius: 4px;
      padding: 5px;
      transition: border 0.3s ease;
    }
    .header__search-box input:focus {
      border: 1px solid #007bff;
      outline: none;
    }
    .header__cat ul.category li {
      box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
      border-radius: 6px;
      transition: box-shadow 0.3s ease;
    }
    .header__cat ul.category li:hover {
      box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
    }
    .header__middle {
      padding: 15px 0;
    }
    .header__icons .icon {
      margin-right: 15px;
    }
    .header__top-info-wrap {
      border-bottom: 1px solid #ddd;
      margin-bottom: 10px;
    }
    .header__top-info ul li span {
      font-weight: bold;
    }
    .header__lang ul li a {
      font-style: italic;
    }
    .header__cat ul.category {
      overflow-x: auto;
      white-space: nowrap;
      scroll-behavior: smooth;
    }
  </style>

  <!-- Top Info Bar -->
  <div class="header__top-info-wrap d-none d-lg-block">
    <div class="container">
      <div class="header__top-info ul_li_between mt-none-10">
        <ul class="ul_li mt-10" style="list-style: none; padding: 0; font-family: Arial, sans-serif; border-radius: 8px;">
          <li style="padding: 10px; display: flex; align-items: center; background-color: #f9f9f9;"><i class="far fa-map-marker-alt" style="color: #FF5733; margin-right: 10px;"></i><span>Lokasi Toko</span></li>
          <li style="padding: 10px; display: flex; align-items: center; background-color: #fff;"><i class="far fa-truck" style="color: #33B5E5; margin-right: 10px;"></i><span>Melacak Pesanan Anda</span></li>
          <li style="padding: 10px; display: flex; align-items: center; background-color: #f9f9f9;"><i class="fas fa-phone" style="color: #4CAF50; margin-right: 10px;"></i><span>Hubungi Kami Untuk Pertanyaan</span></li>
          <li style="padding: 10px; display: flex; align-items: center; background-color: #fff;"><i class="fas fa-heart" style="color: #E91E63; margin-right: 10px;"></i><span>Selamat datang di Radios. Kami menyediakan barang elektronik terbaik</span></li>
        </ul>
        <div style="display: flex; gap: 10px;">
          <span id="today-date" style="font-size: 12px;"><i class="fal fa-calendar-alt"></i></span>
          <a href="#" title="Facebook" style="color: #555;"><i class="fab fa-facebook-f"></i></a>
          <a href="#" title="Twitter" style="color: #555;"><i class="fab fa-twitter"></i></a>
          <a href="#" title="Instagram" style="color: #555;"><i class="fab fa-instagram"></i></a>
          <a href="#" title="YouTube" style="color: #555;"><i class="fab fa-youtube"></i></a>
          <a href="#" title="Pinterest" style="color: #555;"><i class="fab fa-pinterest"></i></a>
        </div>
      </div>
    </div>
  </div>

  <!-- Middle Header -->
  <div class="container">
    <div class="header__middle ul_li_between justify-content-xs-center">
      <div class="header__logo">
        <a href="index.html"><img src="assets/img/logo/logo.svg" alt="Logo Radios" style="max-height: 50px;"></a>
      </div>
      <form class="header__search-box" action="#" style="display: flex; gap: 10px; align-items: center;">
        <select style="padding: 8px; border-radius: 4px; border: 1px solid #ccc;">
          <option>Semua Kategori</option>
          <option>Koleksi Musim Panas</option>
          <option>Produk Susu</option>
        </select>
        <input type="text" placeholder="Cari barang, kategori..." required autocomplete="off" style="flex: 1; padding: 8px; border-radius: 4px; border: 1px solid #ccc;">
        <button type="submit" style="padding: 8px 12px; background: orange; color: #fff; border: none; border-radius: 4px;"><i class="far fa-search"></i></button>
      </form>
      <div class="header__lang ul_li">
        <ul>
          <li><a href="#">USD <i class="far fa-chevron-down"></i></a></li>
          <li><a href="#"><img src="assets/img/icon/usd_flag.png" alt=""> English <i class="far fa-chevron-down"></i></a></li>
        </ul>
      </div>
      <div class="header__icons ul_li">
        <div class="icon"><a href="#"><img src="assets/img/icon/user.svg" alt="User"></a></div>
        <div class="icon"><a href="#"><img src="assets/img/icon/heart.svg" alt="Wishlist"><span class="count">0</span></a></div>
        <div class="icon"><a href="#"><img src="assets/img/icon/shopping_bag.svg" alt="Cart"><span class="count">0</span></a></div>
      </div>
    </div>
  </div>

  <!-- Bottom Navigation -->
  <div class="header__cat-wrap" data-uk-sticky="top: 250; animation: uk-animation-slide-top;">
    <div class="container">
      <div class="header__wrap ul_li_between">
        <div class="header__cat ul_li">
          <div class="hamburger_menu">
            <a href="javascript:void(0);"><i class="fal fa-bars"></i></a>
          </div>
          <ul class="category ul_li">
            <li><a href="#"><img src="assets/img/icon/hc_01.svg"> Laptops</a></li>
            <li><a href="#"><img src="assets/img/icon/hc_02.svg"> CCTV</a></li>
            <li><a href="#"><img src="assets/img/icon/hc_03.svg"> Home Equip</a></li>
            <li><a href="#"><img src="assets/img/icon/hc_04.svg"> TV</a></li>
            <li><a href="#"><img src="assets/img/icon/hc_05.svg"> Printers</a></li>
            <li><a href="#"><img src="assets/img/icon/hc_06.svg"> Gaming</a></li>
          </ul>
        </div>
        <div class="login-sign-btn">
          <a class="thm-btn" href="login.html">
            <span class="btn-wrap"><span>Login / Sign Up</span><span>Login / Sign Up</span></span>
          </a>
        </div>
      </div>
    </div>
  </div>
</header>
<!-- Header End -->

<script>
  document.getElementById('today-date').innerHTML = new Date().toLocaleDateString('id-ID', {
    weekday: 'long', year: 'numeric', month: 'long', day: 'numeric'
  });
</script>
