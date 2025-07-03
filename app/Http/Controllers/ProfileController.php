<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
}