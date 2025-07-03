<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index(Request $request)
    {
    $query = Product::with('category');

    // Pencarian by nama atau deskripsi
    if ($search = $request->input('search')) {
        $query->where(function($q) use ($search) {
            $q->where('product_name', 'like', "%{$search}%")
              ->orWhere('product_desc', 'like', "%{$search}%");
        });
    }

    // Filter kategori
    if ($categoryId = $request->input('category')) {
        $query->where('product_category_id', $categoryId);
    }

    $products = $query->latest()->paginate(10)->withQueryString(); // agar pagination bawa parameter
    $categories = \App\Models\Product_category::all();

    return view('backend.products.index', compact('products', 'categories'));
    }
    
    public function create()
    {
        return view('backend.products.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'  => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'description' => 'nullable|string',
            'image' => 'nullable|image|max:2048',
        ]);

        if ($request->file('image')) {
            $validated['image'] = $request->file('image')
                                          ->store('products', 'public');
        }

        Product::create($validated);

        return redirect()->route('products.index')
                         ->with('status','Produk berhasil ditambahkan.');
    }

    public function edit(Product $product)
    {
        return view('backend.products.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $validated = $request->validate([
            'name'  => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'description' => 'nullable|string',
            'image' => 'nullable|image|max:2048',
        ]);

        if ($request->file('image')) {
            // hapus gambar lama jika ada
            if ($product->image) Storage::disk('public')->delete($product->image);
            $validated['image'] = $request->file('image')
                                          ->store('products', 'public');
        }

        $product->update($validated);

        return redirect()->route('products.index')
                         ->with('status','Produk berhasil diperbarui.');
    }

    public function destroy(Product $product)
    {
        if ($product->image) Storage::disk('public')->delete($product->image);
        $product->delete();

        return redirect()->route('products.index')
                         ->with('status','Produk berhasil dihapus.');
    }
}

