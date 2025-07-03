<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ProfileController extends Controller
{
    public function show()
    {
        $user = Auth::user();
        return view('frontend.profile.show', compact('user'));
    }
    public function deleteAccountForm()
    {
    return view('frontend.profile.delete');
    }
    public function destroyAccount(Request $request)
    {
    $user = Auth::user();
    // Logout user terlebih dahulu
    Auth::logout();
    // Hapus akun dari database
    $user->delete();
    // Invalidate session
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    // Redirect ke halaman utama atau login dengan pesan
    return redirect('/')->with('status', 'Akun Anda berhasil dihapus.');
    }
}