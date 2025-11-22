<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Contracts\Encryption\DecryptException;

class HalamanController extends Controller
{
    public function dashboard()
    {
           $products = \App\Models\Product::limit(20)->get();

    
        return view('index', ['title' => 'Dashboard Jongveksi'], compact('products')  );
    }
    
    public function layanan()
    {
        return view('layanan', ['title' => 'Layanan Jongveksi']);
    }
    public function produk()
    {
          $products = \App\Models\Product::all();

  
        return view('produk', ['title' => 'Produk Jongveksi'], compact('products')  );
        
    }
    public function detailProduk()
    {
        //  $products = \App\Models\Product::all();
        //  return view('detail-produk', ['title' => 'Detail Produk Jongveks'], compact('products')  );
        return view('detail-produk', ['title' => 'Detail Produk Jongveksi']);
    }
    public function about()
    {
        return view('about', ['title' => 'Tentang  Jongveksi']);
    }

    public function dashboardLogin()
    {
    //       try {
    //     // Dekripsi ID
    //     $userId = Crypt::decryptString($id);

    //     // Bisa gunakan $userId untuk ambil data user
    //     $user = \App\Models\User::find($userId);

    //     return view('login.dashboard', [
    //         'title' => 'Dashboard Jongveksi',
    //         // 'user' => $user
    //     ]);
    // } catch (DecryptException $e) {
    // // ...

    //     return redirect('/login')->withErrors("Maaf untuk ID sudah tidak Valid , silahkan Login kembali "); // Jika ID tidak valid
    // }

    return view('dashboard.index', ['title' => 'Dashboard  Jongveksi']);
    }
    public function catalog()
    {
        return view('dashboard.catalog', ['title' => 'Catalog  Jongveksi']);
    }


}

