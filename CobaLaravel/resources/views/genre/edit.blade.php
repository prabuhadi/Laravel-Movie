@extends('layout.master')

@section('title')
    Edit Cast
@endsection

@section('judul1')
    Halaman Edit Genre
@endsection

@section('judul2')
    Silahkan isi data genre di kolom tersedia!
@endsection

@section('content')
<div>
    <form action="/genre/{{$genre->id}}" method="POST">
        @csrf
        @method('put')
        <div class="form-group">
            <label>Nama</label>
            <input type="text" class="form-control" value="{{$genre->nama}}" name="nama" placeholder="Masukkan Genre">
            @error('nama')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection