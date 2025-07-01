<?php

namespace App\Http\Controllers;

// Import model dan berbagai class helper yang dibutuhkan
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;

// Deklarasi class controller untuk otentikasi
class AuthController extends Controller
{
    // Menampilkan halaman form login
    public function showloginform()
    {
        return view('auth.login');
    }

    // Proses login pengguna
    public function login(Request $request)
    {
        // Validasi inputan email dan password
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        // Jika validasi gagal, kirimkan respons JSON error
        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => $validator->errors()->first(),
            ]);
        }

        // Coba login menggunakan Auth::attempt
        if (Auth::attempt($request->only('email', 'password'))) {
            // Regenerasi sesi setelah login berhasil
            $request->session()->regenerate();
            return response()->json([
                'success' => true,
                'redirect_url' => url('/backend/dashboard') // Redirect jika login berhasil
            ]);
        } else {
            // Jika login gagal, kembalikan pesan error
            return response()->json([
                'success' => false,
                'message' => 'Invalid email or password.',
            ]);
        }
    }

    // Proses logout pengguna
    public function logout(Request $request)
    {
        // Logout dari sistem
        Auth::logout();

        // Invalidate dan regenerasi token sesi
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // Flash message logout
        Session::flash('logout_message', 'Successfully Logout');

        // Kembalikan respons JSON logout
        return response()->json(['message' => 'Successfully Logout']);
    }

    // Proses registrasi/signup
    public function actionsignup(Request $request)
    {
        try {
            // Validasi input dari form signup
            $validated = $request->validate([
                'fullname' => ['required', 'string', 'max:255'], // Validasi nama lengkap
                'email' => ['required', 'string', 'email', 'max:255', 'unique:users'], // Email unik
                'password' => ['required', 'min:8', 'confirmed'], // Password minimal 8 dan konfirmasi
            ]);

            // Simpan data user baru ke database
            User::create([
                'name' => $request->fullname,
                'email' => $request->email,
                'password' => Hash::make($request->password), // Enkripsi password
            ]);

            // Kembalikan respons sukses
            return response()->json(['success' => true, 'message' => 'Registrasi berhasil! Silakan login.']);

        } catch (ValidationException $e) {
            // Tangani error validasi khusus
            return response()->json([
                'success' => false,
                'message' => 'Registrasi gagal. Harap periksa kembali isian Anda.',
                'errors' => $e->errors()
            ], 422); // Gunakan kode 422 untuk error validasi

        } catch (\Exception $e) {
            // Tangani error umum/server
            \Log::error('Registration error: ' . $e->getMessage()); // Logging error
            return response()->json(['success' => false, 'message' => 'Terjadi kesalahan server saat registrasi. Silakan coba lagi nanti.'], 500);
        }
    }
}
