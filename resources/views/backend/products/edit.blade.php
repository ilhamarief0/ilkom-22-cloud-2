@extends('backend.layouts.app')

@section('content')
<div class="container py-4">
    <h2 class="text-xl font-semibold mb-4">Edit Produk</h2>

    @if ($errors->any())
        <div class="mb-4 text-red-600">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>- {{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('products.update', $product) }}" method="POST" enctype="multipart/form-data" class="space-y-4">
        @csrf
        @method('PUT')

        <div>
            <label for="product_category_id" class="block font-medium">Kategori</label>
            <select name="product_category_id" id="product_category_id" class="w-full border rounded p-2" required>
                <option value="">-- Pilih Kategori --</option>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}"
                        {{ $product->product_category_id == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div>
            <label for="product_name" class="block font-medium">Nama Produk</label>
            <input type="text" name="product_name" id="product_name" class="w-full border rounded p-2"
                   value="{{ old('product_name', $product->product_name) }}" required>
        </div>

        <div>
            <label for="product_desc" class="block font-medium">Deskripsi</label>
            <textarea name="product_desc" id="product_desc" rows="4" class="w-full border rounded p-2">{{ old('product_desc', $product->product_desc) }}</textarea>
        </div>

        <div>
            <label for="product_price" class="block font-medium">Harga</label>
            <input type="text" name="product_price" id="product_price" class="w-full border rounded p-2"
                   value="{{ old('product_price', $product->product_price) }}" required>
        </div>

        <div>
            <label for="product_images" class="block font-medium">Gambar Produk</label>
            <input type="file" name="product_images" id="product_images" class="block mb-2">
            @if ($product->product_images)
                <img src="{{ asset('storage/' . $product->product_images) }}" alt="Gambar Produk" class="h-32">
            @endif
        </div>

        <div>
            <button type="submit" class="bg-green-600 text-white px-4 py-2 rounded">Update Produk</button>
            <a href="{{ route('products.index') }}" class="ml-2 text-gray-600">Batal</a>
        </div>
    </form>
</div>
@endsection
