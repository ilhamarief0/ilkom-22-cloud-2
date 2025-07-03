@extends('backend.layouts.app')

@section('content')
<!-- Filter & Search -->
<form method="GET" action="{{ route('products.index') }}" class="mb-4 flex flex-wrap gap-2 items-center">
    <input type="text" name="search" placeholder="Cari produk..."
           value="{{ request('search') }}"
           class="border p-2 rounded w-64">

    <select name="category" class="border p-2 rounded">
        <option value="">-- Semua Kategori --</option>
        @foreach($categories as $category)
            <option value="{{ $category->id }}" {{ request('category') == $category->id ? 'selected' : '' }}>
                {{ $category->name }}
            </option>
        @endforeach
    </select>

    <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">
        Filter
    </button>

    <a href="{{ route('products.index') }}" class="text-gray-600 underline ml-2">Reset</a>
</form>

<div class="container py-4">
    <div class="flex justify-between items-center mb-4">
        <h2 class="text-xl font-semibold">Daftar Produk</h2>
        <a href="{{ route('products.create') }}"
           class="bg-blue-600 text-white px-4 py-2 rounded">
           + Tambah Produk
        </a>
    </div>

    @if(session('status'))
        <div class="mb-4 p-3 bg-green-100 text-green-700 rounded">
            {{ session('status') }}
        </div>
    @endif

    <div class="overflow-x-auto">
        <table class="min-w-full border text-sm">
            <thead class="bg-gray-100 text-left">
                <tr>
                    <th class="border px-3 py-2">#</th>
                    <th class="border px-3 py-2">Nama</th>
                    <th class="border px-3 py-2">Kategori</th>
                    <th class="border px-3 py-2">Harga</th>
                    <th class="border px-3 py-2">Stok</th>
                    <th class="border px-3 py-2">Gambar</th>
                    <th class="border px-3 py-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($products as $product)
                    <tr class="border-b hover:bg-gray-50">
                        <td class="border px-3 py-2">{{ $loop->iteration + ($products->currentPage() - 1) * $products->perPage() }}</td>
                        <td class="border px-3 py-2">{{ $product->product_name }}</td>
                        <td class="border px-3 py-2">{{ $product->category->name ?? '-' }}</td>
                        <td class="border px-3 py-2">Rp {{ number_format($product->product_price, 0, ',', '.') }}</td>
                        <td class="border px-3 py-2">-</td> {{-- Tambahkan kolom stok jika ada --}}
                        <td class="border px-3 py-2">
                            @if ($product->product_images)
                                <img src="{{ asset('storage/' . $product->product_images) }}" alt="img"
                                     class="h-12 w-auto object-cover">
                            @else
                                <span class="text-gray-400">Tidak ada</span>
                            @endif
                        </td>
                        <td class="border px-3 py-2 space-x-1">
                            <a href="{{ route('products.edit', $product) }}"
                               class="text-blue-600 hover:underline">Edit</a>

                            <form action="{{ route('products.destroy', $product) }}" method="POST"
                                  class="inline" onsubmit="return confirm('Yakin ingin menghapus produk ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:underline">
                                    Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="text-center py-4 text-gray-500">
                            Belum ada produk.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="mt-4">
        {{ $products->links() }}
    </div>
</div>
@endsection
