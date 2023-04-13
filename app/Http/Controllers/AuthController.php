<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function loginView()
    {
        return view('pages.admin.login');
    }

    public function login(Request $req)
    {
        $req->validate([
            'email' => 'email|required',
            'password' => 'required',
        ]);

        $login = User::where('email', $req->email)->first();
        // cek email
        if ($login) {
            $pass = Hash::check($req->password, $login->password);
            if ($pass) {
                Auth::login($login);
                return redirect('admin');
            } else {
                return redirect('login')->with('error', 'password salah');
            }
        } else {
            return redirect('login')->with('error', 'email tidak ditemukan');
        }
    }

    public function logout()
    {
        auth()->logout();
        session()->flush();
        return redirect('/');
    }
}