<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class SessionController extends Controller
{
    function index()
    {
        return view("login.index", ["title" => "Jongveksi"]);
    }
    function loginAuth()
    {
        return view("login.login", ["title" => "Halaman Login Jongveksi"]);
    }

    function login(Request $request)
    {
        Session::flash('email', $request->email);

        $credentials = $request->validate([
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:6',
        ], [
            'email.required' => 'Email Wajib di isi',
            'email.email' => 'Format email tidak valid',
            // 'email.unique' => 'Email sudah terdaftar',
            'password.min' => 'Password minimal 6 Character',
        ]);
        if (Auth::attempt($credentials)) {
            // Enkripsi ID user
            // $encryptedId = urlencode(Crypt::encryptString(Auth::user()->id));
            // return redirect()->route('dashboard.login', ['id' => $encryptedId]);
            return redirect()->route('dashboard.index');
        }
        return redirect()->back()->withErrors('Maaf anda gagal login');
    }

    function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('landing-page/login')->with('success', 'Berhasil Logout!');
    }

    function register()
    {
        return view('login.register', ['title' => 'Halaman Register']);
    }

    function create(Request $request)
    {
        Session::flash('name', $request->name);
        Session::flash('email', $request->email);

        // $cekUser = User::where('email', $request->email)->first();
        // if(Auth::check($cekUser)){
        //     return Redirect()->back()->withErrors('Email Sudah berhasil di daftar , silhakan login ');
        // }

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ], [
            'name.required' => 'Nama Wajib di isi',
            'email.required' => 'Email Wajib di isi',
            'email.email' => 'Format email tidak valid',
            'email.unique' => 'Email sudah terdaftar',
            'password.min' => 'Password minimal 8 Character',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        if (Auth::check($user) && $user) {
            return redirect()->route('login')->with('Sukses', 'Akun berhasil dibuat');
        }
        return redirect('register.form')->withErrors('Akun anda gagal dibuat');
    }
}
