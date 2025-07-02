<!-- slide-bar start -->
<aside class="slide-bar">

    <!-- Tombol untuk menutup menu slide di tampilan mobile -->
    <div class="close-mobile-menu">
        <a href="javascript:void(0);" onclick="closeSlideBar()"><i class="fal fa-times"></i></a>
    </div>

    <!-- sidebar-info start -->
    <div class="cart_sidebar">
        <button type="button" class="cart_close_btn" onclick="closeSlideBar()"><i class="fal fa-times"></i></button>

        <h2 class="heading_title text-uppercase">
            Cart Items - <span>{{ count($cartItems) }}</span>
        </h2>

        <div class="cart_items_list">
            @forelse($cartItems as $item)
            <div class="cart_item d-flex gap-3 p-3 border-bottom align-items-center">
                <div class="item_image">
                    <img src="{{ asset($item->product->image ?? 'assets/img/product/default.png') }}" alt="image" class="rounded" style="width: 80px;">
                </div>
                <div class="item_content flex-grow-1">
                    <h4 class="item_title mb-2">{{ $item->product->name }}</h4>
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="item_price font-weight-bold text-dark">${{ number_format($item->product->price, 2) }}</span>
                        <span class="item_quantity text-muted">Qty: {{ $item->quantity }}</span>
                    </div>
                </div>
                <form action="{{ route('cart.remove', $item->id) }}" method="POST" class="ml-auto">
                    @csrf @method('DELETE')
                    <button class="remove_btn text-danger bg-transparent border-0" aria-label="Hapus dari keranjang">
                        <i class="fal fa-times"></i>
                    </button>
                </form>
            </div>
            @empty
            <p class="text-center text-muted mt-3">Keranjang kosong.</p>
            @endforelse
        </div>

        <div class="total_price text-uppercase d-flex justify-content-between p-3 border-top">
            <span>Sub Total:</span>
            <span>${{ number_format($cartItems->sum(fn($item) => $item->product->price * $item->quantity), 2) }}</span>
        </div>

        <ul class="btns_group d-flex gap-3 justify-content-center py-3 list-unstyled">
            <li><a href="{{ route('cart.index') }}" class="thm-btn bg-primary text-white px-4 py-2 rounded">View Cart</a></li>
            <li><a href="{{ route('checkout.index') }}" class="thm-btn bg-dark text-white px-4 py-2 rounded">Checkout</a></li>
        </ul>
    </div>
    <!-- sidebar-info end -->

    <!-- side-mobile-menu start -->
    <nav class="side-mobile-menu">
        <div class="header-mobile-search">
            <form role="search" method="GET" action="{{ route('search') }}">
                <input type="text" name="query" placeholder="Search Keywords" />
                <button type="submit"><i class="ti-search"></i></button>
            </form>
        </div>

        <ul id="mobile-menu-active">
            <li class="dropdown"><a href="{{ route('home') }}">Home</a>
                <ul class="sub-menu">
                    <li><a href="{{ route('home') }}">Home One</a></li>
                    <li><a href="{{ route('home.alt', 2) }}">Home Two</a></li>
                </ul>
            </li>
            <li class="dropdown"><a href="{{ route('shop.index') }}">Shop</a>
                <ul class="sub-menu">
                    <li><a href="{{ route('shop.index') }}">Shop Default</a></li>
                    <li><a href="{{ route('cart.index') }}">Cart</a></li>
                    <li><a href="{{ route('checkout.index') }}">Checkout</a></li>
                </ul>
            </li>
            <li><a href="{{ route('contact') }}">Contact</a></li>
        </ul>
    </nav>
    <!-- side-mobile-menu end -->

</aside>

<!-- Overlay -->
<div class="body-overlay" onclick="closeSlideBar()"></div>

<!-- CSS Responsif -->
<style>
    .slide-bar {
        position: fixed;
        right: -100%;
        top: 0;
        width: 80%;
        height: 100%;
        background: #fff;
        transition: 0.3s;
        z-index: 1000;
        overflow-y: auto;
    }

    .slide-bar.show {
        right: 0;
    }

    .body-overlay {
        display: none;
        position: fixed;
        width: 100%;
        height: 100%;
        background: rgba(0,0,0,0.5);
        top: 0;
        left: 0;
        z-index: 999;
    }

    .body-overlay.active {
        display: block;
    }

    @media (min-width: 992px) {
        .side-mobile-menu {
            display: none;
        }
    }
</style>

<!-- JS -->
@push('scripts')
<script>
    function openSlideBar() {
        document.querySelector('.slide-bar').classList.add('show');
        document.querySelector('.body-overlay').classList.add('active');
    }

    function closeSlideBar() {
        document.querySelector('.slide-bar').classList.remove('show');
        document.querySelector('.body-overlay').classList.remove('active');
    }
</script>
@endpush
