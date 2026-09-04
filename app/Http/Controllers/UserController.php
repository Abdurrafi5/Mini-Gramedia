<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function register(Request $request)
    {
        $validateData = $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', 'min:8', 'max:10'],
        ], [
            'name.required' => 'Nama lengkap harus diisi',
            'name.min' => 'Nama lengkap harus diisi minimal 3 karakter',
            'email.required' => 'Email harus diisi',
            'email.unique' => 'Email harus diisi dengan data yang belum terdaftar',
            'password.required' => 'Password harus diisi',
            'password.min' => 'Password harus diisi minimal 8 karakter',
            'password.max' => 'Password harus diisi hanya sampai 10 karakter',
        ]);
        $createAccount = User::create([
            'name' => $validateData['name'],
            'email' => $validateData['email'],
            'password' => Hash::make($validateData['password']),
        ]);

        return redirect()->route('login')->with('success', 'Berhasil membuat akun! Silahkan login');
    }

    public function login(Request  $request) {
        $validateData = $request->validate([
            'email' => ['required'],
            'password' => ['required'],
        ], [
            'email.required' => 'Email wajib diisi',
            'password.required' => 'Password wajib diisi',
        ]);

        $auth = $request->except(["_token"]);
        $checkAuth = Auth::attempt($auth);
        if ($checkAuth) {
            return redirect()->route('home')->with('success', 'Berhasil Login!');
        } else {
            return redirect()->route('login')->with('error', 'Email dan Password salahh.. Coba lagi!')->withInput();
        }
    }

    public function logout() {
        Auth::logout();

        return redirect()->route('home')->with('success', 'Berhasil logout!');
    }
}
