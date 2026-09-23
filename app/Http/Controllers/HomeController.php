<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $judul = 'sistem informasi peminjaman buku perpustakaan mini';
        return view('home',['judul' => $judul]);
    }
    public function tentang()
    {
        return view('tentang');
    }
    public function kontak()
    {
        return view('kontak');
    }
}
