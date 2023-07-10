@extends('layout.master')
@section('content')
    <div class="container">
        <h4>Data Buku</h4>

        @include('_partial/flash_message')
        {{-- <form action="" method="get">@csrf
            <input type="text" name="kata" placeholder="Cari..">
        </form> --}}
        @if (Auth::check() && Auth::user()->level == 'admin')
            <p align="right"><a href="{{ route('buku.create') }}" class="btn btn-primary">Tambah Buku</a></p>
        @endif
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Kode Buku</th>
                    <th>Judul Buku</th>
                    <th>Jumlah Halaman</th>
                    <th>ISBN</th>
                    <th>Pengarang</th>
                    <th>Tahun Terbit</th>
                    @if (Auth::check() && Auth::user()->level == 'admin')
                    <th>Edit</th>
                    <th>Hapus</th>
                    @endif
                </tr>
            </thead>
            <tbody>
                @foreach ($buku as $data_buku)
                    <tr>
                        <td>{{$data_buku->id}}</td>
                        <td>{{$data_buku->kode_buku}}</td>
                        <td>{{$data_buku->judul_buku}}</td>
                        <td>{{$data_buku->jumlah_halaman}}</td>
                        <td>{{$data_buku->ISBN}}</td>
                        <td>{{$data_buku->pengarang}}</td>
                        <td>{{$data_buku->tahun_terbit}}</td>
                        @if (Auth::check() && Auth::user()->level == 'admin')
                            <td><a href="{{ route('buku.edit', $data_buku->id) }}" class="btn btn-primary">Edit</a></td>
                            <td>
                                <form action="{{ route('buku.destroy', $data_buku->id) }}" method="POST">
                                    @csrf
                                        <button class="btn btn-warning btn-sm" onclick="return confirm('Anda yakin ingin menghapus data ini?')">
                                            Hapus
                                        </button>
                                </form>
                            </td>
                        @endif
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="pull-left">
            <strong>
                Jumlah Buku : {{ $jumlah_buku }}
            </strong>
            <p>{{ $buku->links() }}</p>
        </div>
    </div>
@endsection