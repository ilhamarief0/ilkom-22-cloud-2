<?php

namespace App\Http\Controllers;

// Import model Order dan library yang diperlukan
use App\Models\Order;
use Illuminate\Http\Request;
use Midtrans\Config;
use Midtrans\Snap;

// Controller untuk menangani transaksi pemesanan
class OrderController extends Controller
{
    // Method untuk membuat order dan mendapatkan Snap Token dari Midtrans
    public function createOrder(Request $request)
    {
        // Simpan data order ke database
        $order = Order::create([
            'order_id'    => 'INV-' . time(), // Generate order ID dengan format INV-timestamp
            'user_id'     =>  1, // Untuk sementara hardcode user_id = 1
            'total_price' => $request->total_price, // Ambil total harga dari request
            'status'      => 'pending', // Set status awal order sebagai pending
        ]);

        // Konfigurasi Midtrans
        Config::$serverKey = config('midtrans.server_key');
        Config::$clientKey = config('midtrans.client_key');
        Config::$isProduction = config('midtrans.is_production');
        Config::$isSanitized = true; // Aktifkan sanitasi data
        Config::$is3ds = true; // Aktifkan 3D Secure untuk kartu kredit

        // Detail transaksi yang dikirim ke Midtrans
        $transaction_details = [
            'order_id'    => $order->order_id,
            'gross_amount' => $order->total_price,
        ];

        // Detail pelanggan
        $customer_details = [
            'first_name' => 'Ilham Arief',
            'email'      => 'meanhills019@gmail.com',
        ];

        // Gabungkan data transaksi dan pelanggan
        $transaction = [
            'transaction_details' => $transaction_details,
            'customer_details'    => $customer_details,
        ];

        try {
            // Dapatkan Snap Token dari Midtrans
            $snapToken = Snap::getSnapToken($transaction);
            // Kirim Snap Token ke frontend
            return response()->json(['snap_token' => $snapToken]);
        } catch (\Exception $e) {
            // Jika terjadi error, kirim pesan error
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }

    // Method untuk menangani callback dari Midtrans
    public function callback(Request $request)
    {
        // Ambil server key dari konfigurasi
        $serverKey = config('midtrans.server_key');

        // Buat hash signature untuk verifikasi keaslian callback
        $hashed = hash("sha512", $request->order_id . $request->status_code . $request->gross_amount . $serverKey);

        // Cocokkan signature yang diterima dengan yang dihitung
        if ($hashed == $request->signature_key) {
            // Ambil data order berdasarkan order_id
            $order = Order::where('order_id', $request->order_id)->first();

            // Jika transaksi berhasil atau diselesaikan
            if ($request->transaction_status == 'capture' || $request->transaction_status == 'settlement') {
                $order->update(['status' => 'paid']);
            }
            // Jika transaksi gagal, dibatalkan, atau kedaluwarsa
            elseif ($request->transaction_status == 'cancel' || $request->transaction_status == 'expire' || $request->transaction_status == 'deny') {
                $order->update(['status' => 'failed']);
            }
        }
    }
}
