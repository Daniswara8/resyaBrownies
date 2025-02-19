<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class UserController extends Controller
{

    // Untuk Proses Login dan Register
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
                return redirect()->route('admin.listUser')->with('success', 'Login sebagai Admin berhasil!');
            }

            return redirect()->route('home')->with('success', 'Login berhasil!');
        }

        return redirect()->back()->withInput()->with('error', 'Email atau password tidak valid');
    }

    // Untuk Halaman Admin
    public function listUserShow()
    {
        $users = User::all();
        return view('admin.componentAdmin.DaftarUser.listUser', compact('users'));
    }

    // Untuk Halaman Dashboard User
    public function profileShow()
    {
        $user = Auth::user();
        return view('user.dashboardUser.profileUser');
    }

    public function profileUpdate(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'no_telepon' => 'required|digits_between:10,15',
            'email' => 'required|string|email|max:255|unique:users,email,' . auth()->id(),
            'alamat' => 'required|string|max:1000'
        ]);

        $userId = Auth::user()->id;
        $userData = User::where('id', $userId)->first();
        $userData->update([
            'nama' => $request->nama,
            'no_telepon' => $request->no_telepon,
            'email' => $request->email,
            'alamat' => $request->alamat,
        ]);

        return redirect()->route('profile.show')->with('success', 'Profil berhasil diperbarui!');
    }

    public function profileDelete()
    {
        $userId = Auth::user()->id;
        $userData = User::where('id', $userId)->first();
        Auth::logout();
        $userData->delete();
        return redirect()->route('login.index')->with('success', 'Akun berhasil dihapus.');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login.index')->with('success', 'Anda telah logout.');
    }
}
