<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeminjamController extends Controller
{
    public function lihat_data_peminjam() {
        $peminjam = ['Tono',
        'Siti',
        'Dono',
        'Hayo siapa'];
    
        return view('peminjam/lihat_data_peminjam', compact('peminjam'));
    }
}