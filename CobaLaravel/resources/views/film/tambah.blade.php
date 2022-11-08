@extends('layout.master')

@section('title')
    Halaman Tambah Film
@endsection

@section('judul1')
    Tambah Film Baru
@endsection

@section('judul2')
    Silahkan isi data film di kolom tersedia!
@endsection

@section('content')
<div>
    <form action="/film" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>Judul Film</label>
            <input type="text" class="form-control" name="judul" placeholder="Masukkan Nama Film">
            @error('judul')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label>Ringkasan</label>
            <textarea name="ringkasan" class="form-control" cols="30" rows="10"></textarea>
            @error('ringkasan')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label>Tahun</label>
            <input type="integer" class="form-control" name="tahun" placeholder="Masukkan Tahun Rilis">
            @error('tahun')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label>Poster</label>
            <input type="file" class="form-control" name="poster" placeholder="">
            @error('poster')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label>Genre</label>
            <select name="genre_id" class="form-control" id="">
                <option value="">--Pilih Genre--</option>
                @forelse ($genre as $item)
                    <option value="{{$item->id}}">{{$item->nama}}</option>
                @empty
                    <option value="">Tidak ada data di table genre</option>
                @endforelse
            </select>
            @error('genre_id')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Tambah</button>
    </form>
</div>
@endsection