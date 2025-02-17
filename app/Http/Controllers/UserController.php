<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\View;


class UserController extends Controller
{

    public function registerIndex()
    {
        return view('logRes.register');
    }

    public function registerSubmit(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'no_telepon' => 'required|digits_between:10,15',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|',
            'alamat' => 'required|string|max:1000'
        ]);

        User::create([
            'nama' => $request->nama,
            'no_telepon' => $request->no_telepon,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'alamat' => $request->alamat,
        ]);

        return redirect()->route('login.index')->with('success', 'Registrasi berhasil!');
    }

    public function loginIndex()
    {
        return view('logRes.login');
    }

    public function loginSubmit(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string'
        ]);

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            if ($user->role === 'admin') {
                return redirect()->route('dashboardAdmin.listUser')->with('success', 'Login sebagai Admin berhasil!');
            }

            return redirect()->route('home')->with('success', 'Login berhasil!');
        }

        return redirect()->back()->withInput()->with('error', 'Email atau password tidak valid');
    }

    // Method untuk membuat admin jika belum ada
    public static function createAdmin()
    {
        // Email dan password Admin
        $adminEmail = 'admin@example.com';
        $adminPassword = 'admin123';

        if (!User::where('email', $adminEmail)->exists()) {
            User::create([
                'nama' => 'Admin',
                'no_telepon' => '081234567890',
                'email' => $adminEmail,
                'password' => Hash::make($adminPassword),
                'alamat' => 'Alamat Admin',
                'role' => 'admin'
            ]);
        }
    }
}
