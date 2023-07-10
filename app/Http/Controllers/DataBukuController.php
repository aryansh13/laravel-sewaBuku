<?php

namespace App\Http\Controllers;


use App\Models\DataBuku;
use Illuminate\Http\Request;

class DataBukuController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){
        $batas = 5;
        $jumlah_buku = DataBuku::count();
        $buku = DataBuku::orderBy('id', 'asc')->simplePaginate($batas);
        $no = 0;
        return view('buku.index', compact('buku', 'no', 'jumlah_buku'));
    }

    public function create(){
        $list_buku = DataBuku::pluck('judul_buku', 'id');
        return view('buku.create', compact('list_buku'));
    }

    public function store(Request $request){
        $data_buku = new DataBuku;
        $data_buku->kode_buku = $request->kode_buku;
        $data_buku->judul_buku = $request->judul_buku;
        $data_buku->jumlah_halaman = $request->jumlah_halaman;
        $data_buku->ISBN = $request->ISBN;
        $data_buku->pengarang = $request->pengarang;
        $data_buku->tahun_terbit = $request->tahun_terbit;
        $data_buku->save();

        return redirect('buku');
    }

    public function edit($id){
        $data_buku = DataBuku::find($id);
        return view('buku.edit', compact('data_buku'));
    }

    public function update(Request $request, $id){
        $data_buku = DataBuku::find($id);

        $data_buku->kode_buku = $request->kode_buku;
        $data_buku->judul_buku = $request->judul_buku;
        $data_buku->jumlah_halaman = $request->jumlah_halaman;
        $data_buku->ISBN = $request->ISBN;
        $data_buku->pengarang = $request->pengarang;
        $data_buku->tahun_terbit = $request->tahun_terbit;
        $data_buku->update();

        return redirect('buku');
    }

    public function destroy($id){
        $data_buku = DataBuku::find($id);
        $data_buku->delete();
        return redirect('buku');
    }
}
