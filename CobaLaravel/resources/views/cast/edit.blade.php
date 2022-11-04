@extends('layout.master')

@section('title')
    Edit Cast
@endsection

@section('judul1')
    Halaman Edit Cast
@endsection

@section('judul2')
    Silahkan isi data cast di kolom tersedia!
@endsection

@section('content')
<div>
    <form action="/cast/{{$cast->id}}" method="POST">
        @csrf
        @method('put')
        <div class="form-group">
            <label>Nama</label>
            <input type="text" class="form-control" value="{{$cast->nama}}" name="nama" placeholder="Masukkan Nama Cast">
            @error('nama')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label>Umur</label>
            <input type="integer" class="form-control" value="{{$cast->umur}}" name="umur" placeholder="Masukkan Umur Cast">
            @error('umur')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="form-group">
            <label>Bio</label>
            <textarea name="bio" class="form-control" cols="30" rows="10">{{$cast->bio}}</textarea>
            @error('bio')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection