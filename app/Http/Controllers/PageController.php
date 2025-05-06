<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Data;
use App\Models\Barang;

class PageController extends Controller
{
    // Menampilkan form login
    public function showLogin()
    {
        return view('login');
    }
    
    // Proses login
    public function doLogin(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');

        // Menggunakan model Data untuk mengecek kredensial
        if (Data::checkCredentials($username, $password)) {
            session(['username' => $username]); // Menyimpan username ke dalam session
            return redirect('/dashboard');
        } else {
            return redirect()->route('login')->with('error', 'Login gagal! Username atau password salah.');
        }
    }

    // Menampilkan halaman dashboard
    public function Dashboard()
    {
        // Mengambil semua barang
        $barang = Barang::getAll();  // Pastikan ini sesuai dengan data yang ingin ditampilkan

        // Mengirimkan data ke view
        return view('dashboard', compact('barang'));
    }


    // Menampilkan halaman pengelolaan
    public function pengelolaan()
    {
        $barang = Barang::getAll();  // Memanggil method getAll() dari model Barang
        return view('pengelolaan', compact('barang'));  // Mengirimkan variabel $barang ke view
    }    

    // Menampilkan profile pengguna
    public function profile()
    {
        $username = session('username');
        return view('profile', compact('username'));
    }

    // Logout
    public function logout()
    {
        session()->forget('username'); // Menghapus session username
        return redirect('/login');
    }
}
