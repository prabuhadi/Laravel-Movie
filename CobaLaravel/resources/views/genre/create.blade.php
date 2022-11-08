@extends('layout.master')

@section('title')
    Halaman Tambah Genre
@endsection

@section('judul1')
    Tambah Genre Baru
@endsection

@section('judul2')
    Silahkan isi data genre di kolom tersedia!
@endsection

@section('content')
<div>
    <form action="/genre" method="POST">
        @csrf
        <div class="form-group">
            <label>Genre</label>
            <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama Genre">
            @error('nama')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Tambah</button>
    </form>
</div>
@endsection