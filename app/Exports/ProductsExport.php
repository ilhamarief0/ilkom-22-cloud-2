<?php

namespace App\Exports;

use App\Models\Product;
use App\Models\Product_category;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\Support\Responsable;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Illuminate\Http\Request;

class ProductsExport implements FromCollection, WithHeadings
{
    protected $search, $category;

    public function __construct($search = null, $category = null)
    {
        $this->search = $search;
        $this->category = $category;
    }

    public function collection()
    {
        $query = Product::with('category');

        if ($this->search) {
            $query->where(function($q) {
                $q->where('product_name', 'like', "%{$this->search}%")
                  ->orWhere('product_desc', 'like', "%{$this->search}%");
            });
        }

        if ($this->category) {
            $query->where('product_category_id', $this->category);
        }

        return $query->get()->map(function ($product) {
            return [
                'Nama Produk' => $product->product_name,
                'Kategori' => $product->category->name ?? '-',
                'Harga' => $product->product_price,
                'Deskripsi' => $product->product_desc,
                'Tanggal Dibuat' => $product->created_at->format('Y-m-d'),
            ];
        });
    }

    public function headings(): array
    {
        return ['Nama Produk', 'Kategori', 'Harga', 'Deskripsi', 'Tanggal Dibuat'];
    }
}

